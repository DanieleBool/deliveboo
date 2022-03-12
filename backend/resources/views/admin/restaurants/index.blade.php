@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="card benvenuto mb-3">
          @if(!$restaurant)
          {{-- benvenuto/crea utente --}}
          <h3>Benvenuto {{ Auth::user()->name }}, crea il tuo ristorante</h3>
          @else
          {{-- benvenuto/gestisci utente --}}
          <h3>Benvenuto {{ Auth::user()->name }}, gestisci il tuo ristorante</h3>
          @endif
        </div>

        @if(!$restaurant)
            <a href="{{ route('restaurants.create') }}"><button type="button" class="btn btn-primary btn-lg">Crea ristorante</button></a>
        @else
        {{-- restaurant card --}}
        <div class="card restaurant mb-3">
            <div class="row no-gutters">
                {{-- restaurant image--}}
                <div class="col-md-4">
                    <img class="restaurant-cover" src="{{asset("images/copertina-test.jpeg")}}" alt="copertina test">
                </div>

                {{-- restaurant info --}}
                <div class="col-md-8">
                    <div class="card-body">
                        {{-- title container --}}
                        <div class="card-title-container">
                          <h2 class="card-title">{{$restaurant->name}}</h2>
                        </div>
                        {{-- information container --}}
                        <div class="card-info-container">
                          {{-- description --}}
                          <p class="card-text description">{{$restaurant->description}}</p>
                          {{-- contacts --}}
                          <h3>Informazioni</h3>
                          <ul class="contacts-container">
                            <li class="card-text">
                              <i class="fa-solid fa-envelope"></i> {{$restaurant->email}}
                            </li>
                            <li class="card-text">
                              <i class="fa-solid fa-location-dot"></i> 
                              {{$restaurant->address}}, {{$restaurant->city}} {{$restaurant->post_code}}, {{$restaurant->country}}
                            </li>
                            <li class="card-text">
                              <i class="fa-solid fa-phone"></i> {{$restaurant->phone}}
                            </li>
                          </ul>
                        </div>

                        <div  class="d-flex justify-content-end">

                            {{-- edit button --}}
                            <a href="{{ route('restaurants.edit', $restaurant->id) }}"><button type="button" class="btn btn-warning">Modifica</button></a>
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
