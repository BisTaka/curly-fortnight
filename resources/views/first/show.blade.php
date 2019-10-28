@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data {{ $first->id }}</h4>
            <p class="card-text">Tinggi Badan: {{ $first->tinggi_badan }}</p>
            <p class="card-text">Berat Badan: {{ $first->berat_badan }}</p>
            <p class="card-text">Tensi User: {{ $first->tensi_user }}</p>
            <div class="card-footer">
                <a class="btn btn-sm btn-success" href="{{ route('first.edit', $first->id) }}">Edit</a>
                <form action="{{ route('first.destroy', $first->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-sm btn-danger" type="submit">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
