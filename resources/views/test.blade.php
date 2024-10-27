@extends('layout')
@section('content')
    @foreach ($entries as $entry)
            <p><a href="{{ $entry->url }}">{{ $entry->title }}</a></p>
    @endforeach
@endsection
