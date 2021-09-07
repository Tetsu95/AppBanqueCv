@extends("layouts.master")

@section("contenu")

<h1>Saisissez le nom de votre Cv ou Votre Nom</h1>

<form action="{{route('home.searchCv')}}" class="d-flex mr-3">
    <div class="form-group mb-0 mr-1">
        <input class="form-control" type="text" name="search"/>
    </div>
    <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>

<form>

@endsection