@extends('layout.app')

@section('pageTitle', 'Edit Wish')

@section('content')

    <form method="post" action="{{ url()->current() . '/update' }}">
        @csrf
        <div class="form-group">
            <label for="naam">Enter Wish Name</label>
            <input type="text" class="form-control" id="naam" name="naam" placeholder="Wish Name" value="{{ $wishes->naam }}">
        </div>
        <div class="form-group">
            <label for="beschrijving">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="beschrijving" value="{{ $wishes->beschrijving }}">
        </div>
        <div class="form-group">
            <label for="prijs">Prijs</label>
            <input type="text" class="form-control" id="prijs"  name="prijs" placeholder="Prijs" value="{{ $wishes->prijs }}">
        </div>
        <div class="form-group">
            <label for="plaatje">Plaatje</label>
            <input type="file" class="form-control-file" id="plaatje" name="plaatje" value="{{ $wishes->plaatjes }}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection()
