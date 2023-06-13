@extends('layouts.main')
@section('container')
<section>
    <h1 class="text-center">Welcome</h1>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($product as $item)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['model'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $item['year'] }}</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Warna - {{ $item['color'] }}</li>
                        <li class="list-group-item">Harga - ${{ $item['price'] }}</li>
                        <li class="list-group-item">Berat - {{ $item['weight'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
