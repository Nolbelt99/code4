@extends('layouts.app')
@section('title')
    Termékek
@endsection
@section('submenu')
    @if(Auth::user() && Auth::user()->isAdmin())
        <a class="btn btn-primary" href="{{ route('product_create') }}">
            Új termék
        </a>
    @endif
@endsection
@section('content')

<div class="row">
    <div class="col-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Keresés</h5>
            <form method="GET" action="{{ route('product') }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Megnevezés</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $filters['name'] ?? '' }}">
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Kategória</label>
                    <select name="category" class="form-control">
                        <option value="">Válassz kategóriát!</option>
                        @foreach($categories as $key => $category)
                            <option value="{{ $category->id }}" {{ isset($filters['category']) && $filters['category'] == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Keresés</button>
            </form>
        </div>
      </div>
    </div>
    <div class="col-8">
        <div class="card shadow">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th></th>
                        <th>Megnevezés</th>
                        @if(Auth::user() && Auth::user()->isAdmin())
                            <th></th>
                        @endif
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
                                    {{ $product->name }} </br>
                                    {{ $product->price }} Ft
                                </td>
                                @if(Auth::user() && Auth::user()->isAdmin())
                                    <td class="text-right">
                                        <form action="{{ route('product_destroy', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('DELETE')
                                            <a class="btn btn-success" href="{{ route('product_edit', ['id' => $product->id]) }}">Szerkesztés</a>
                                            <input type="submit" class="btn btn-danger" value="Törlés" onclick="return confirm('Biztosan törli?')">
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-end small">
                    {{ $products->count() }} / {{ $products->total() }} elem
                </div>
                <div class="d-flex justify-content-center">
                    {{ $products->appends($filters)->links() }}
                </div>

            </div>
        </div>
        </div>
  </div>

@endsection
