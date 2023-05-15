<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Support\Renderable;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $eventsResults = Event::join('category', 'events.category', '=', 'category.id')
            ->select('events.*', 'category.title as category')
            ->get();

        return view('welcome', compact('eventsResults'));
    }
}
