<!-- resources/views/events/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>All Events</h1>
    <table class="table">
        <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Address</th>
            <th>Date &amp; Time</th>
            <th>Link</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($eventsResults as $event)
            <tr>
                <td>{{ $event->title }}</td>
                <td>{{ $event->category }}</td>
                <td>{{ $event->street }}, {{ $event->postcode }} {{ $event->city }}</td>
                <td>{{ $event->start_time }} - {{ $event->end_time }}</td>
                <td><a href="{{ $event->link }}">More Info</a></td>
                <td>{{ $event->price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
