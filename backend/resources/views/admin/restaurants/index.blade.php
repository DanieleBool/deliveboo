@extends('layouts.app')

@section('content')
    @if(!$restaurant)
    <a href="{{ route('restaurants.create') }}"> + ristorante </a>
    @else
    <a href="{{ route('restaurants.edit', $restaurant->id) }}"> edit ristorante </a>
    {{-- modal delete button --}}
    <button type="button" class="btn btn-danger ml-auto" data-toggle="modal" data-target="#deleteModal">Delete</button>


    {{-- modal --}}
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Are you sure to delete <strong>{{$restaurant->name}}</strong>?</h5>
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
    @endif
@endsection
