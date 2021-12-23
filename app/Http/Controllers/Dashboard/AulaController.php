<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Dashboard\Events;

class AulaController extends Controller
{
    //
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        if(Auth::check()) {
            if(User::findOrFail(Auth::id())->type_profile == 1) {
                return view('dashboard.aula');
            }

            redirect()->intended('/dashboard')->with('error', 'Você não tem permissão para acessar está rota!');
        }

        return redirect()->intended('/')->with('error', 'Você não está logado no sistema');
    }

    public function saveEvent(Request $request)
    {
        if(Auth::check()) {
            if(User::findOrFail(Auth::id())->type_profile == 1) {
                $this->validate($request, [
                    'titulo' => 'required|min:10|max:35',
                    'nome_professor' => 'required|min:10|max:20',
                    'description' => 'required|min:20|max:50',
                    'date_aula' => 'required'
                ]);

                $dataArr = array(
                    'titulo' => $request->input('titulo'),
                    'nome_professor' => $request->input('nome_professor'),
                    'descricao' => $request->input('description'),
                    'max_alunos' => 10, //default
                    'start_time' => $request->input('date_aula'),
                    'end_time' => Carbon::parse($request->input('date_aula'))->addHour(1), //Default 1 Hour
                    'fk_user_event' => Auth::id()
                );

                $arr = array(
                    $dataArr['start_time'],
                    $dataArr['end_time'],
                );

                $validateEventDate = Events::whereBetween('start_time',$arr)
                    ->whereBetween('end_time',$arr)
                    ->count();

                if($validateEventDate > 0)
                    return redirect('/dashboard')->with('error','Evento já existe na Data e Hora selecionada!');

                if(Events::insertGetId($dataArr))
                    return redirect()->intended('/dashboard')->with('success', 'Evento Criado com sucesso!');

                return redirect()->intended('/dashboard')->with('error', 'Erro ao criar evento!');
            }

            return redirect()->intended('/dashboard')->with('error', 'Você não tem permissão para acessar está rota!');
        }

        return redirect()->intended('/')->with('error', 'Você não está logado no sistema');
    }
}
