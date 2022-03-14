@extends('layouts.app')


@section('content')
    <h1>Orders</h1>
    @foreach($orders as $order)
    <p>Name: {{ $order->customer_name}} Surname: {{ $order->customer_surname }}</p>
    <p>Email: {{ $order->customer_email}}</p>
    <p>Address: {{ $order->customer_address }}, {{ $order->customer_city }}, {{ $order->customer_post_code }}, {{ $order->customer_country  }}</p>
    <p>Phone number: {{ $order->customer_phone }}</p>
    <p>Comment: {{ $order->customer_comment }}</p>
    <p>Total: {{ $order->tot_price }}</p>

        @foreach($order->dishes as $dish)
            <p>Dish's name: {{ $dish->name }}</p>
            <p>Quantity: {{ $dish->pivot->quantity }}</p>
        @endforeach

    @if($order->accepted)
        <span class="badge badge-success">Accepted</span>
    @else
        <a href="{{ route('orders.update', $order->id) }}"><button type="button" class="btn btn-info">Accetta</button></a>
        {{-- modal delete button --}}
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal-{{$order->id}}">Elimina</button>

        {{-- modal --}}
        <div class="modal fade" id="deleteModal-{{$order->id}}" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Sei sicuro di voler rifiutare l'ordine?</h5>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        {{-- delete form --}}
                        <form action="{{route('orders.destroy', $order->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif


    @endforeach
@endsection
