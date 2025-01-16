@extends('layout')

@section('content')
<h1>{{ $type === 'media' ? 'Media' : 'Acteurs' }} Overzicht</h1>

<table class="table">
    <thead>
        <tr>
            @if ($type === 'media')
                <th>Titel</th><th>Type</th><th>Rating</th>
            @else
                <th>Naam</th><th>Leeftijd</th><th>Land</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($items as $item)
            <tr>
                @if ($type === 'media')
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->type === 'movie' ? 'Film' : 'Serie' }}</td>
                    <td>{{ $item->rating }}</td>
                @else
                    <td>{{ $item->first_name }} {{ $item->last_name }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->country }}</td>
                @endif
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
