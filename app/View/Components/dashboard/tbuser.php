<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class tbuser extends Component
{


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.tbuser',
            [
                'userAll' => User::all()->where('active', '=', 1),
                'type' => User::findOrFail(Auth::id())->type_profile
            ]
        );
    }
}
