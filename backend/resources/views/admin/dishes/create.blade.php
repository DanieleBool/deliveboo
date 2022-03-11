@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="text-center mb-3">Add new dish</h1>

        <form action="{{route('dishes.store')}}" method="POST" class="mb-5">
            @csrf

            {{-- dish name --}}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Add name" value="{{old('name')}}" required maxlength="100">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- dish description --}}
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Add post description" rows="5">{{old('description')}}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- dish price --}}
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Add price" value="{{old('price')}}" required step="0.01" min="0" max="999.99">
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- dish visible --}}
            <div class="form-group form-check mt-4">
                <input type="checkbox" class="form-check-input @error('visible') is-invalid @enderror" id="visible" name="visible" {{old('visible') ? 'checked' : ''}}>
                <label class="form-check-label" for="visible">Publish</label>
                @error('visible')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- submit button --}}
            <button type="submit" class="btn btn-primary">Add category</button>

        </form>

        <a href="{{route('dishes.index')}}"><button type="button" class="btn btn-dark">Dishes list</button></a>
    </div>
@endsection