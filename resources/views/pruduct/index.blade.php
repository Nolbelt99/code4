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
                                {{ $product->name }}
                            </td>
                            <td class="text-right">
                                <a class="btn btn-success" href="{{ route('product_edit', ['id' => $product->id]) }}">Szerkesztés</a>
                                <a class="btn btn-danger" href="{{ route('product_destroy', ['id' => $product->id]) }}">Törlés</a>
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
