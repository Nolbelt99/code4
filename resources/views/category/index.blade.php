@extends('layouts.app')
@section('title')
    Szakasz típusok lista
@endsection
@section('submenu')
            <a class="btn btn-primary" href="{{ route('category_create') }}">

            <svg class="icon me-2">
                <use xlink:href="/icons/sprites/free.svg#cil-plus"></use>
            </svg>
            Új típus
        </a>
@endsection
@section('content')

    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover" id="tblData">
                <thead>
                <th>('name', 'Megnevezés')</th>
                <th></th>
                </thead>
                <tbody>
                    @if ($categories->count() == 0)
                        <tr>
                            <td colspan="3">Nincs megjeleníthető típus.</td>
                        </tr>
                    @endif

                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td class="text-right">
                                <a href="{{ route('category_edit', ['id' => $category->id]) }}">Szerkesztés</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $categories->links() !!}
        </div>
    </div>
@endsection
