@extends('layouts.app')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('category') }}">Kategóriák</a></li>
@endsection
@section('title')
    Új kategória
@endsection
@section('content')
    <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-7">
                <div class="card shadow mb-2">
                    <div class="card-header"><strong>Törzsadatok</strong></div>
                    <div class="card-body">
                        <div class="form-group row">
                            <p class="col-md-3 col-form-label">Megnevezés:</p>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name">
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
                                <a class="btn btn-secondary text-white" href="{{ route('category') }}">
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

