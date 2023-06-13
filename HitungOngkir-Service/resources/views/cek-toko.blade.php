@extends('layouts.main')
@section('container')
<section>
    <h1 class="text-center">Welcome</h1>
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($toko as $item)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['name'] }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{ $item['location'] }}</h6>
                    <p class="card-text">{{ $item['address'] }}</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">phone : {{ $item['phone'] }}</li>
                        <li class="list-group-item">email : {{ $item['email'] }}</li>
                        <li class="list-group-item">open  : {{ $item['opening_hours'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
