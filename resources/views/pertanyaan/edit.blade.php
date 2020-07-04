@extends('layouts.master')
@section('content')
<div class="container card card-warning">
    <div class="card-header">
    <h3 class="card-title">Edit Pertanyaan pada id: {{$tanya->id}} </h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <form role="form" action="/pertanyaan/{{$tanya->id}}" method="post">
        @csrf
        @method('put')
        <div class="row">
        <div class="col-sm-6">
            <!-- text input -->
            <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$tanya->judul}}" placeholder="Enter ...">
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6">
            <!-- textarea -->
            <div class="form-group">
            <label>Isi</label>
            <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="3" placeholder="Enter ...">{{$tanya->isi}}</textarea>
            </div>
        </div>    
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-success" type="submit">UPDATE</button>
            </div>
        </div>
    </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection