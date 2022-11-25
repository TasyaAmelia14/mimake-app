@extends('layout')

@section('title', 'Barang Page')

@section('content')
    <h2>Barang.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Code</th>
                <th>qty</th>
                <th>Waktu Entri</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$person->kodebarang}}</td>
                <td>{{$person->namabarang}}</td>
                <td>{{$person->harga}}</td>
                <td>{{$person->code}}</td>
                <td>{{$person->qty}}</td>
                <td>{{$person->created_at}}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection