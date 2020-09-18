@extends('layout.app')

@section('pageTitle', 'Wistlist')

@section('content')

    <div>
        @foreach($wishes as $wish)
        <ul>
            <li>{{ $wish->naam }}</li>
            <li>
                <img src="{{ asset('storage/' . $wish->plaatje) }}" alt="plaatje" class="img-thumbnail">
            </li>
            <li>{{ $wish->beschrijving }}</li>
            <li>{{ $wish->prijs }}</li>
            <a href="{{ url('/wish/edit', $wish->id) }}">Edit</a>

            <form method="post" action="{{ url('/wish/delete', $wish->id) }}" enctype="multipart/form-data">
                @csrf
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </ul>
        @endforeach()
    <div>

@endsection()