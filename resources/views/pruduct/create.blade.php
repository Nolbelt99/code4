@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('product') }}">Termékek</a></li>
@endsection
@section('title')
    Új termék
@endsection
@section('content')
    <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-7">
                <div class="card shadow mb-2">
                    <div class="card shadow mb-2">
                        <div class="card-header"><strong>Törzsadatok</strong></div>
                        <div class="card-body">
                            <div class="form-group row">
                                <p class="col-md-3 col-form-label">Megnevezés:</p>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <p class="col-md-3 col-form-label">Ár:</p>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="price" value="{{ old('price') }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text"> Ft</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mt-3">
                                <p class="col-md-3 col-form-label">Kép:</p>
                                 <div class="col-md-6">
                                    <div class="input-group">
                                        <input name="image" type="file" onchange="showDiv('hidden_div', this)">
                                        <img class="mt-3" id="hidden_div" src="" width="40%" height="40%">

                                    </div>
                                </div> 
                            </div>
                            <div class="form-group row mt-3">
                                <p class="col-md-3 col-form-label">Kategória:</p>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select name="category_id" class="form-select">
                                            @foreach($categories as $category)
                                                <option {{ old('category_id') == $category->id ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @if($errors->any())
                            <div class="mt-5">
                                {!! implode('', $errors->all('<div class="text-danger">:message</div>')) !!}
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
    <script>
        function showDiv(divId, element) {
            document.getElementById('hidden_div').src = window.URL.createObjectURL(element.files[0]);
            document.getElementById('hidden_div').style.display = 'block';
        }
    </script>
@endsection

