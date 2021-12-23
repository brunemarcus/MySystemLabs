<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\Dashboard\Events;

class EventsController extends Controller
{
    //
    public function __construct()
    {
        //
    }

    public function getEventsAll()
    {
        return Events::all();
    }
}
