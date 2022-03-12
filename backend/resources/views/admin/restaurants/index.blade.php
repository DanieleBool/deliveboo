@extends('layouts.app')

@section('content')

    <div class="container">

        @if(!$restaurant)

            <a href="{{ route('restaurants.create') }}"><button type="button" class="btn btn-primary btn-lg">Crea ristorante</button></a>

        @else
        {{-- restaurant card --}}
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    {{-- restaurant image check if exist --}}
                    {{-- <img src="..." alt="..."> --}}
                    <strong>IMMAGINE BELLA</strong>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        {{-- name --}}
                        <h5 class="card-title">{{$restaurant->name}}</h5>
                        {{-- description --}}
                        <p class="card-text">{{$restaurant->description}}</p>
                        {{-- email --}}
                        <p class="card-text">{{$restaurant->email}}</p>
                        {{-- total address --}}
                        <p class="card-text">{{$restaurant->address}}, {{$restaurant->city}} {{$restaurant->post_code}}, {{$restaurant->country}}</p>
                        {{-- phone --}}
                        <p class="card-text">Tel: {{$restaurant->phone}}</p>

                        <div  class="d-flex justify-content-end">

                            {{-- dishes list button --}}
                            <a href="{{route('dishes.index')}}"><button type="button" class="btn btn-primary">Lista piatti</button></a>

                            {{-- edit button --}}
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}" class="ml-3"><button type="button" class="btn btn-warning">Modifica</button></a>
                            {{-- modal delete button --}}
                            <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#deleteModal">Elimina</button>
                            
                            {{-- modal --}}
                            <div class="modal fade" id="deleteModal" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Sei sicuro di voler eliminare <strong>{{$restaurant->name}}</strong>?</h5>
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            {{-- delete form --}}
                                            <form action="{{route('restaurants.destroy', $restaurant->id)}}" method="POST">
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
                </div>
            </div>
        </div>
        @endif

    </div>
@endsection
