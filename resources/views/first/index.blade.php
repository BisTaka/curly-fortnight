@extends('layouts.app')

@section('content')
<div class="container">
    <br>
    <a class="btn btn-block btn-info" href="{{ route('first.create') }}">Buat Data baru</a>
    <br>
    <h5 class="text-center">{{ $data_tips->tips_user }}</h5>
    <hr>
    <table class="table table-hover">
        <thead class="thead-inverse">
            <tr>
                <th>No.</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Tensi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_user as $data)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $data->tinggi_badan }}</td>
                <td>{{ $data->berat_badan }}</td>
                <td>{{ $data->tensi_user }}</td>
                <td>
                    <a class="btn btn-sm btn-success" href="{{ route('first.show', $data->id) }}">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
