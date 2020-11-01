@extends('layout.app')

@section('pageTitle', 'Edit Wish')

@section('content')

    <form method="post" action="{{ url()->current() . '/update' }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="naam">Enter Wish Name</label>
            <input type="text" class="form-control" id="naam" name="naam" placeholder="Wish Name" value="{{ $wish->naam }}">
        </div>
        <div class="form-group">
            <label for="beschrijving">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="beschrijving" value="{{ $wish->beschrijving }}">
        </div>
        <div class="form-group">
            <label for="prijs">Prijs</label>
            <input type="text" class="form-control" id="prijs"  name="prijs" placeholder="Prijs" value="{{ $wish->prijs }}">
        </div>
        <div>
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link" value="{{ $wish->link }}">
        </div>
        <div class="form-group">
            <label for="plaatje">Plaatje</label>
            <input type="file" class="form-control-file" id="plaatje" name="plaatje" accept="image/*" >
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection()
