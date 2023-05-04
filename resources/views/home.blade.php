@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Termékek</div>
                <div class="card-body">
                    @foreach($products as $product)
                        <p> {{ $product->name }} </p> <br>
                        <img src="{{ asset('images/' . $product->image) }}" alt="tag">
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
