<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;
use InfyOm\LaravelCalendarEvents\CalendarEvent;
use InfyOm\LaravelCalendarEvents\CalendarEventRecurrencePattern;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;

class calendario extends Component
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
        return view('components.dashboard.calendario');
    }
}
