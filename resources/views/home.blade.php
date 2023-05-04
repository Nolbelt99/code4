@extends('layouts.app')

@section('content')
  <div id="myCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/carousel1.jpg') }}" class="d-block mx-auto" style="max-height: 800px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carousel2.jpg') }}" class="d-block mx-auto" style="max-height: 800px;" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/carousel3.jpg') }}" class="d-block mx-auto" style="max-height: 800px;" alt="...">
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Termékek</div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                @if ($products->count() == 0)
                                    <tr>
                                        <td colspan="3">Nincs megjeleníthető termék.</td>
                                    </tr>
                                @endif
            
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>
                                            <img class="mt-3" id="image_preview" src="{{ asset('images/' . $product->image) }}" width="50%" height="50%">
                                        </td>
                                        <td>
                                            {{ $product->name }}
                                        </td>
                                        <td>
                                            {{ $product->price }} Ft
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {!! $products->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
