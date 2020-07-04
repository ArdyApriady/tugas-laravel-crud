@extends('layouts.master')
@section('content')
<div class="container my-2">
<form action="/pertanyaan" method="post">
@csrf
  <div class="form-group">
    <label for="judul">Judul</label>
    <input type="text" class="form-control @error('judul') is-invalid @enderror" value="{{old('judul')}}" placeholder="Judul" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Pertanyaan</label>
    <input type="text" class="form-control @error('isi') is-invalid @enderror" value="{{old('isi')}}" placeholder="Isi di sini" id="isi" name="isi">
  </div>
  <button type="submit" class="btn btn-primary">Post</button>
</form>
</div>
@endsection