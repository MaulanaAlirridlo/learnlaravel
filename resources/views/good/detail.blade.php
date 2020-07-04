@extends('layouts.app')
@section('title')
    Detail
@endsection

@section('container')
    <div class="container">
        <div class="card mx-auto mt-3" style="width: 50rem;">
          <div class="card-body">
            <h5 class="card-title">{{$good->name}}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{$good->price."/".$good->piece}}</h6>
            <p class="card-text">Stok yang tersedia {{$good->stok}}</p>
            <div class="text-right">
              {{-- <form action="{{$good->id}}" method="POST"> --}}
                <a href="{{$good->id}}/edit" class="btn btn-primary card-link">Edit</a>
              {{-- </form> --}}
              <form action="{{ $good->id }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-primary">Delete</button>
              </form>
            </div>
          </div>
        </div>
    </div>
@endsection