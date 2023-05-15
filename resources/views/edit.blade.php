@extends('layouts.app')

@section('content')
    @push('scripts')
        <script src="{{ asset('js/EventsEditor.js') }}"></script>
    @endpush
    <div class="container">
        @foreach ($categorySortedEvents as $category)
            <h2>{{ $category['title']}}</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Street</th>
                    <th>Postcode</th>
                    <th>City</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Link</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($category['events'] as $event)
                    <tr>
                        <td class="editable">{{ $event->title }}</textarea></td>
                        <td class="editable">{{ $event->category }}</textarea></td>
                        <td class="editable">{{ $event->street }}</td>
                        <td class="editable">{{ $event->postcode }}</td>
                        <td class="editable">{{ $event->city }}</td>
                        <td class="editable">{{ $event->start_time }}</td>
                        <td class="editable">{{ $event->end_time }}</td>
                        <td class="editable">{{ $event->link }}</td>
                        <td class="editable">{{ $event->price }}</td>
                        <td><button class="edit">edit</button></td>
                    </tr>
                    <tr id="<?php echo $event->id; ?>" class="hidden">
                        <form name="editEvent" method="POST" action="{{ route('event.update', ['id' => $event->id]) }}">
                            <td><input type="text" id="title" name="title" value="{{ $event->title }}"></td>
                            <td><input type="text" id="category" name="category" value="{{ $event->category }}"></td>
                            <td><input type="text" id="street" name="street" value="{{ $event->street }}"></td>
                            <td><input type="text" id="postcode" name="postcode" value="{{ $event->postcode }}"></td>
                            <td><input type="text" id="city" name="city" value="{{ $event->city }}"></td>
                            <td><input type="datetime-local" id="start_time" name="start_time" value="{{$event->start_time}}"></td>
                            <td><input type="text" id="link" name="link" value="{{ $event->link }}"></td>
                            <td><input type="number" id="price" name="price" value="{{ $event->price }}"></td>
                            <td><button type="submit">Save</button></td>
                        </form>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endforeach
    </div>
@endsection
