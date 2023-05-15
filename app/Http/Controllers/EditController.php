<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $categoriesService = app('categoriesService');
        $categoriesResults = $categoriesService->getCategories();

        $eventsService = app('eventsService');
        $eventsResults = $eventsService->getAllEvents();

        $categorySortedEvents = [];

        // Loop through each category
        foreach ($categoriesResults as $category) {
            // Filter the events by category
            $categoryEvents = $eventsResults->filter(function ($event) use ($category) {
                return $event->category === $category->id;
            });
            // Add the category and its events to category

            $categoryArray = get_object_vars($category);
            $categoryArray['events'] = $categoryEvents;

            $categorySortedEvents[] = $categoryArray;
        }

        return view('edit', compact('categorySortedEvents'));
    }

    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->title = $request->input('title');
        $event->category = $request->input('category');
        $event->street = $request->input('street');
        $event->postcode = $request->input('postcode');
        $event->city = $request->input('city');
        $event->start_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('start_time'));
        $event->end_time = Carbon::createFromFormat('Y-m-d\TH:i', $request->input('end_time'));
        $event->link = $request->input('link');
        $event->price = $request->input('price');
        $event->save();

        return redirect()->route('edit');
    }
}
