@extends('layouts.main')
@section('container')
<div class="container mt-3">
    <h2 class="text-center">Halaman Cek Ongkir</h2>
    <form action="" method="post">
        @csrf
        <div class="mt-3">
            <label for="origin">Kota Asal</label>
            <select name="origin" id="origin" class="form-control" required>
                <option value="">Pilih Kota Asal</option>
                @foreach ($cities as $city)
                <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="destination">Kota Tujuan</label>
            <select name="destination" id="destination" class="form-control" required>
                <option value="">Pilih Kota Tujuan</option>
                @foreach ($cities as $city)
                <option value="{{ $city['city_id'] }}">{{ $city['city_name'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-3">
            <label for="weight">Berat Paket (gram) </label>
            <input type="number" name="weight" id="weight" class="form-control" required>
        </div>
        <div class="mt-3">
            <label for="courier">Kurir</label>
            <select name="courier" id="courier" class="form-control" required>
                <option value="">Pilih Kurir</option>
                <option value="jne">JNE</option>
                <option value="pos">POS</option>
                <option value="tiki">TIKI</option>
            </select>
        </div>
        <div class="mt-3">
            <input type="submit" name="cekOngkit" class="btn btn-primary w-100">
        </div>
    </form>

    <div class="mt-5">
        @if ($ongkir != '')
        <h3>Rincian Ongkir</h3>

        <h6>
            <ul>
                <li>Asal Kota : {{ $ongkir['origin_details']['city_name'] }}</li>
                <li>Kota Tujauan : {{ $ongkir['destination_details']['city_name'] }} </li>
                <li>Berat Paket : {{ $ongkir['query']['weight'] }} gram</li>
            </ul>
        </h6>

        @foreach ($ongkir['results'] as $item)
        <div>
            <label for="name"><b>Nama : {{ $item['name'] }}</b></label>
            @foreach ($item['costs'] as $cost)
            <div>
                <label for="service">Service : {{ $cost['service'] }}</label>

                @foreach ($cost['cost'] as $harga)
                <div class="mb-3">
                    <label for="harga">
                        Harga : {{ $harga['value'] }} (est : {{ $harga['etd'] }} )
                    </label>
                </div>
                @endforeach

            </div>
            @endforeach

        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection