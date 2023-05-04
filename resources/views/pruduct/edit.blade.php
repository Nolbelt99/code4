@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('product') }}">Termékek</a></li>
@endsection
@section('title')
    {{ $product->name }} szerkesztése
@endsection
@section('content')
    <form action="{{ route('product_update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-2">
                    <div class="card-header"><strong>Törzsadatok</strong></div>
                    <div class="card-body">
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Megnevezés:</p>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Ár:</p>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"> Ft</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Kép:</p>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="image" value="{{ $product->image }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Kategória:</p>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select name="category_id" class="form-select">
                                        @foreach($categories as $category)
                                            @if($category->id == $product->category->id)
                                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if($errors->any())
                            <div class="mt-5">
                                {!! implode('', $errors->all('<div>:message</div>')) !!}
                            </div>
                        @endif
                        <div class="row mt-5">
                            <div class="col-6">
                                <button type="submit" class="btn btn-success text-white">
                                    Mentés
                                </button>
                                <a class="btn btn-secondary text-white" href="{{ route('product') }}">
                                    Vissza
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
