@extends('layouts.app')

@section('title')
    goods
@endsection

@section('container')
    <div class="container">
        <h1>Data Barang</h1></h1>

        <a href="{{url("/good/create")}}"><button type="button" class="btn btn-primary my-2">Add</button></a>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="row">
            <div class="col-6">

                @foreach ($good as $i)
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$loop->iteration. ". ". $i->name}}
                        <a href="/good/{{$i->id}}" class="badge badge-info">Detail</a>
                        </li>
                    </ul> 
                @endforeach
                
            </div>
        </div>
    </div>
@endsection