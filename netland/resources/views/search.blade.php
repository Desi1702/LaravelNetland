@extends('layout')

@section('content')
<h1>Zoekresultaten</h1>

@if($results->isEmpty())
    <p>Geen resultaten gevonden voor "{{ $query }}".</p>
@else
    <p>Resultaten voor "{{ $query }}":</p>
    <table class="table">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Type</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->is_movie ? 'Film' : 'Serie' }}</td>
                    <td>{{ $item->rating }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif

<a href="{{ route('media.index') }}" class="btn btn-secondary mt-3">Terug naar Media</a>
@endsection
