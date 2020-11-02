@extends('layout.app')

@section('pageTitle', 'Wishlist')

@section('content')

    <div>
        @foreach($wishes as $wish)
        <ul>
            <li>{{ $wish->naam }}</li>
            <li>
                <img src="{{ asset('storage/' . $wish->plaatje) }}" alt="plaatje" class="img-thumbnail">
            </li>
            <li>{{ $wish->beschrijving }}</li>
            <li>
                <a href="{{ url($wish->link) }}">{{ $wish->prijs }}</a>
            </li>
            @if (Auth::check())
                @can('update', $wish)
                <a href="{{ url('/wish/edit', $wish->id) }}">Edit</a>

                <form method="post" action="{{ url('/wish/delete', $wish->id) }}" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                @endcan()
            @endif()
        </ul>
        @endforeach()
    <div>

@endsection()
