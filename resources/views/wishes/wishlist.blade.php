@extends('layout.app')

@section('pageTitle', 'Wistlist')

@section('content')

    <div>
        @foreach($wishes as $wish)
        <ul>
            <li>{{ $wish->naam }}</li>
            <li>{{ $wish->plaatje }}</li>
            <li>{{ $wish->beschrijving }}</li>
            <li>{{ $wish->prijs }}</li>
            <a href="{{ url('/wishlist/wish-edit', $wish->id) }}">Edit</a>
            <a href="{{ url('/wishlist/wish-delete', $wish->id) }}">Delete</a>
        </ul>
        @endforeach()
    <div>

@endsection()
