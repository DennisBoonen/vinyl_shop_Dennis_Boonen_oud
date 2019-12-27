@extends('layouts.template)

@section('title', 'Shop')
@section('main')
    <h1>Shop - alternate listing</h1>
    @foreach($genres as $genre)
        <h2>{{$genre->name}}</h2>
        <ul>
            @foreach($genre->records as $record)
                <li><a href="/shop/{{ $record->id }}">{{$record->artist}}</a></li>
            @endforeach
        </ul>
    @endforeach
@endsection
