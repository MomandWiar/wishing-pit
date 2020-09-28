@extends('layout.app')

@section('pageTitle', 'Create Wish')

@section('content')

    <form method="post" action="{{ url()->current() . '/store' }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="naam">Enter Wish Name</label>
            <input type="text" class="form-control" id="naam" name="naam" placeholder="Wish Name">
        </div>
        <div class="form-group">
            <label for="beschrijving">Beschrijving</label>
            <input type="text" class="form-control" id="beschrijving" name="beschrijving" placeholder="beschrijving">
        </div>
        <div class="form-group">
            <label for="prijs">Prijs</label>
            <input type="text" class="form-control" id="prijs"  name="prijs" placeholder="Prijs">
        </div>
        <div>
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Link">
        </div>
        <div class="form-group">
            <label for="plaatje">Plaatje</label>
            <input type="file" class="form-control-file" id="plaatje" name="plaatje">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection()
