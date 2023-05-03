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
        <form id="phaseTypeForm" action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
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

