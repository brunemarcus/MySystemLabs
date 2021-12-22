<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class managercards extends Component
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
        return view('components.dashboard.managercards', [
            'students' => User::where('type_profile', '=', 2)->count(),
            'manager_account' => User::where('type_profile', '=', 1)->count()
        ]);
    }
}
