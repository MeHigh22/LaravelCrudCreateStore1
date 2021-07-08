@extends("layouts.index")

@section("content")

<a href="{{route('pokemon.create')}}">Ajouter un pokemon</a>

<div class="row m-5">
    @foreach ($varPokemon as $pokemon)

        <div class="col-3">
            {{$pokemon->nom}}
            {{$pokemon->type}}
            {{$pokemon->niveau}}
        </div>

    @endforeach



@endsection
