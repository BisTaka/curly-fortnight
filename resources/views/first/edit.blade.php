@extends('layouts.app')
@section('content')
    
<div class="container">
  <form action="{{ route('first.update', $first->id) }}" method="POST">
    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tinggi badan</label>
                      <input value="{{$first->tinggi_badan}}" type="text" class="form-control" name="tinggi_badan"> 
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">berat badan</label>
                          <input value="{{$first->berat_badan}}" type="text" class="form-control" name="berat_badan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">tensi</label>
                            <input value="{{$first->tensi_user}}" type="text" class="form-control" name="tensi_user">
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                      </div>
@endsection
                    