@extends('layouts.app')

@section('content')
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
