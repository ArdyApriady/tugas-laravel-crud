@extends('layouts.master')
@section('content')
@if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
@endif
<div class="container">
<div class="card card-outline card-primary">
    <div class="card-header">
      <h2 class="card-title">{{$pertanyaan->judul}}</h2>
      
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      {{$pertanyaan->isi}}
    </div>
    <div class="card-footer">
      <!-- /.card-body -->
    <div class="card-footer card-comments">
      @foreach($jawaban as $jawab)
      <div class="card-comment">
        <!-- User image -->
        <img class="img-circle img-sm" src="{{asset('adminlte-v3/dist/img/user3-128x128.jpg')}}" alt="User Image">
        <div class="comment-text">
          <span class="username">
            {{$jawab->pertanyaan_id}} | username
            <span class="text-muted float-right">{{$jawab->updated_at}}</span>
          </span>
          {{$jawab->isi}}
        </div>
      </div>
      @endforeach
    </div>
    <!-- /.card-footer -->
    <div class="card-footer">
      <form action="/jawaban/{{$pertanyaan->id}}" method="post">
      @csrf
        <img class="img-fluid img-circle img-sm" src="{{asset('adminlte-v3/dist/img/user4-128x128.jpg')}}" alt="Alt Text">
        <!-- .img-push is used to add margin to elements next to floating images -->
        <div class="img-push">
          <input type="hidden" name="pertanyaan_id" value="{{$pertanyaan->id}}">
          <input type="text" class="form-control form-control-sm" placeholder="Press enter to post answer" name="isi">
        </div>
      </form>
    </div>
    </div>
</div>  

</div>
@endsection