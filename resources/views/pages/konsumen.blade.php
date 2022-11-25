@extends('layout')

@section('title', 'konsumen Page')

@section('content')
    <h2>Konsumen.</h2>
    <div>
        <table cellpadding=10 cellspacing=0 border=1>
            <tr>
                <th>No</th>
                <th>Kode </th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Waktu Entri</th>
            </tr>
            @foreach($data as $person)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $person->kode }}</td>
                <td>{{ $person->namalengkap }}</td>
                <td>{{ $person->jk }}</td>
                <td>{{ $person->umur }}</td>
                <td>{{ $person->created_at }}</td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection