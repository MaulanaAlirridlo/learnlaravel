@extends('layouts.app')
@section('title')
    Add good
@endsection

@section('container')
    <div class="container">
        <h1>Tambah Barang</h1>
        <div class="row">
            <div class="col-6">
                <form method="POST" action="{{url('/good')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>  
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Harga</label>
                        <input type="integer" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>  
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok">Jumlah</label>
                        <input type="integer" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" value="{{ old('stok') }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>  
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection