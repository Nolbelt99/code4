@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/carousel1.jpg') }}" class="d-block mx-auto img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel2.jpg') }}" class="d-block mx-auto img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/carousel3.jpg') }}" class="d-block mx-auto img-fluid" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Előző</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Következő</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-3 mb-3">
                    <div class="card h-100 position-relative">
                        <a href="#" class="text-decoration-none"><img src="{{ asset('images/' . $product->image) }}" class="card-img-top link-dark"
                            alt="{{ $product->name }}"></a>
                        <div class="card-body">
                            <div class="d-flex flex-column h-100">
                                <div class="card-title-container mb-2">
                                    <h5 class="card-title d-flex align-items-center mb-4"><a href="#" class="text-decoration-none">{{ $product->name }}</a></h5>
                                </div>
                                <div class="card-price-container position-absolute bottom-0 start-0" style="margin-left: 10px;">
                                    <p class="card-price" style="padding: 5px;">{{ $product->price }} Ft</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-end small">
                {{ $products->count() }} / {{ $products->total() }} elem
            </div>
            <div class="d-flex justify-content-center">
                {{ $products->links() }}
            </div>
        </div>
    </div>

@endsection


