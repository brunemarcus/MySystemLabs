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
        $event = new CalendarEvent([
            [
                'id' => 1,
                'title' => 'Daily Repeat End on 30 Jan',
                'description' => 'Daily Repeat End on 30 Jan',
                'start_date' => '2021-01-10',
                'end_date' => '2021-01-20', // nullable
                'start_time' => '10:00:00',
                'end_time' => '12:00:00',
                'is_full_day' => false,
                'is_recurring' => true,
                'location' => 'Surat, India', // extra field. It will be automatically added to meta
                'meta' => [
                    'ticket_required' => true
                ]
            ]
        ]);

        $event->setStartDate(\Carbon\Carbon::parse('2021-01-10'));
        $event->setEndDate(\Carbon\Carbon::parse('2021-01-20'));
        $event->makeFullDay();
        $event->makeRecurring();

        dd($event);

        return view('components.dashboard.calendario', ['event' => $event]);
    }
}
