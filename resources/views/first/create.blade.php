@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="{{ route('first.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                      <label>Tinggi Badan</label>
                      <input type="text" class="form-control @error('tinggi_badan') is-invalid @enderror" name="tinggi_badan" value="{{ old('tinggi_badan') }}">

                      @error('tinggi_badan')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Berat Badan</label>
                      <input type="text" class="form-control @error('berat_badan') is-invalid @enderror" name="berat_badan" value="{{ old('berat_badan') }}">
                      @error('berat_badan')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label>Tensi</label>
                        <input type="text" class="form-control @error('tensi_user') is-invalid @enderror" name="tensi_user" value="{{ old('tensi_user') }}">

                        @error('tensi_user')
                        <div class="invalid-feedback">
                          {{ $message}}
                        </div>
                        @enderror
                      </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
    </div>
@endsection