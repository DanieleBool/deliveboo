@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="text-center mb-3">Lista piatti</h1>

        <div class="row">

            @foreach ($dishes as $dish)
                <div class="card col-4">
                    {{-- <img src="..." class="card-img-top" alt="..."> --}}
                    IMMAGINE BELLA
                    <div class="card-body">
                        <h5 class="card-title">{{$dish->name}}</h5>
                        <p class="card-text">{{$dish->description}}</p>
                        <p class="card-text">Prezzo: &euro;{{$dish->price}}</p>

                        {{-- show button --}}
                        <a href="{{ route('dishes.show', $dish->id) }}"><button type="button" class="btn btn-info">Info</button></a>
                        {{-- edit button --}}
                        <a href="{{ route('dishes.edit', $dish->id) }}"><button type="button" class="btn btn-warning">Modifica</button></a>

                        {{-- modal delete button --}}
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{$dish->id}}">Elimina</button>
                        
                        {{-- modal --}}
                        <div class="modal fade" id="deleteModal-{{$dish->id}}" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Sei sicuro di voler eliminare <strong>{{$dish->name}}</strong>?</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        {{-- delete form --}}
                                        <form action="{{route('dishes.destroy', $dish->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

            <a href="{{route('dishes.create')}}" class="card col-4">
                crea nuovo piatto
            </a>
            
        </div>

        <a href="{{route("restaurants.index")}}" class="d-block mt-5"><button type="button" class="btn btn-dark">Torna al ristorante</button></a>

    </div>

@endsection