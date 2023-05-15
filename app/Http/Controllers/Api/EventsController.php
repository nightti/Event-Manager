<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        $events = Event::all();
        return response()->json($events);
    }

    public function show($id)
    {
        $event = Event::find($id);
        return response()->json($event);
    }
}
