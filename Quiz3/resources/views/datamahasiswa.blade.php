<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataMahasiswa</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<body>
<h2>Data Mahasiswa</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        @php
            $mahasiswa = [
                ['nama' => 'Agus ', 'npm' => '212310004', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Hera', 'npm' => '212310001', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Bagas', 'npm' => '212310002', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Banuwasito', 'npm' => '212310003', 'kelas' => 'TI-21-PA'],
                ['nama' => 'Sephia', 'npm' => '212310009', 'kelas' => 'TI-21-PA'],

                
                ];
        @endphp
        @foreach ($mahasiswa as $mhs)
        <tr>
            <td>{{ $mhs['nama'] }}</td>
            <td>{{ $mhs['npm'] }}</td>
            <td>{{ $mhs['kelas'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
    </body>
@endsection
</body>
</html>