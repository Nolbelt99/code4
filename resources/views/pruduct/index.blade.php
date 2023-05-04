@extends('layouts.app')
@section('title')
    Termékek
@endsection
@section('submenu')
    <a class="btn btn-primary" href="{{ route('product_create') }}">
        Új termék
    </a>
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th></th>
                    <th>Megnevezés</th>
                    <th></th>
                </thead>
                <tbody>
                    @if ($products->count() == 0)
                        <tr>
                            <td colspan="3">Nincs megjeleníthető termék.</td>
                        </tr>
                    @endif

                    @foreach ($products as $product)
                        <tr>
                            <td>
                                <img class="mt-3" id="image_preview" src="{{ asset('images/' . $product->image) }}" width="20%" height="20%">
                            </td>
                            <td>
                                {{ $product->name }}
                            </td>
                            <td class="text-right">
                                <form action="{{ route('product_destroy', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-success" href="{{ route('product_edit', ['id' => $product->id]) }}">Szerkesztés</a>
                                    <input type="submit" class="btn btn-danger" value="Törlés" onclick="return confirm('Biztosan törli?')">
                                </form>
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
@endsection
