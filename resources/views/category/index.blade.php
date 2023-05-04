@extends('layouts.app')
@section('title')
    Kategóriák
@endsection
@section('submenu')
    <a class="btn btn-primary" href="{{ route('category_create') }}">
        Új típus
    </a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Megnevezés</th>
                    <th></th>
                </thead>
                <tbody>
                    @if ($categories->count() == 0)
                        <tr>
                            <td colspan="3">Nincs megjeleníthető kategória.</td>
                        </tr>
                    @endif

                    @foreach ($categories as $category)
                        <tr>
                            <td>
                                {{ $category->name }}
                            </td>
                            <td class="text-right">
                                <form action="{{ route('category_destroy', ['id' => $category->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-success" href="{{ route('category_edit', ['id' => $category->id]) }}">Szerkesztés</a>
                                    <input type="submit" class="btn btn-danger" value="Törlés" onclick="return confirm('Biztosan törli?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $categories->links() !!}
            </div>
        </div>
    </div>
@endsection
