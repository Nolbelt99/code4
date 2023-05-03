@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/settings/phase-type">Szakasz típusok lista</a></li>
@endsection
@section('title')
    Szakasz típus létrehozása
@endsection
@section('content')
@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif
        <form id="phaseTypeForm" action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-7">
                    <div class="card shadow mb-2">
                        <div class="card-header"><strong>Típus törzsadatok</strong></div>
                        <div class="card-body">
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="name">Név*:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="price">price*:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="price">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="image">image*:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="image">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="quantity">quantity*:</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" name="quantity">
                                </div>
                            </div>
                            <div class="row mb-1">
                                <label class="col-sm-4 col-form-label" for="category_id">Ügy altípusa*:</label>
                                <div class="col-sm-8">
                                    <select required name="category_id" class="form-select">
                                        <option value="" selected disabled>Válasszon!</option>
                                        @foreach($categories as $category)
                                            @if (old('category', null) != null && old('category', null) == $category->id)
                                                <option value="{{ old('category') }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-success text-white" id="submit-all">
                                        Típus létrehozás
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-secondary text-white" href="/settings/phase-type">
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

