@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center mb-3">Add new restaurant</h1>

        <form action="{{route('restaurants.update', $restaurant->id)}}" method="Post" class="mb-5">
            @csrf
            @method('PUT')
            {{-- restaurant name --}}
            <div class="form-group">
                <label for="name">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Add name"  maxlength="110" required value="{{old('name', $restaurant->name)}}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- restaurant description --}}
            <div class="form-group">
                <label for="description">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Add restaurant description" rows="10">{{old('description', $restaurant->description)}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- restaurant email --}}

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Add email"  maxlength="100" required value="{{old('email', $restaurant->email)}}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- restaurant address --}}
           <div class="form-group">
                <label for="address">address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" placeholder="Add address"  maxlength="255" required value="{{old('address', $restaurant->address)}}">
                @error('address')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- restaurant city --}}
            <div class="form-group d-none">
                <label for="city">city</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Add city"  maxlength="100" required value="Roma">
                @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             {{-- restaurant country --}}
            <div class="form-group d-none">
                <label for="country">country</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" id="country" name="country" placeholder="Add country"  maxlength="255" required value="Italia">
                @error('country')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             {{-- restaurant post_code --}}
            <div class="form-group d-none">
                <label for="post_code">post_code</label>
                <input type="text" class="form-control @error('post_code') is-invalid @enderror" id="post_code" name="post_code" placeholder="Add post_code"  maxlength="255" required value="00100" pattern="[0-9]{5}">
                @error('post_code')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

             {{-- restaurant phone --}}
            <div class="form-group">
                <label for="phone">phone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Add phone"  pattern="[0-9]{10,15}" required value="{{old('phone', $restaurant->phone)}}">
                @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


                  {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}
            {{-- immaggine da aggiunger dopo test funzionamento form  --}}
                  {{-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! --}}


            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">Update restaurant</button>

        </form>

        <a href="{{route('restaurants.index')}}"><button type="button" class="btn btn-dark">Restaurants list</button></a>
    </div>
@endsection
