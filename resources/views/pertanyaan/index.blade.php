@extends('layouts.master')
@section('content')
@if (session('status'))
  <div class="alert alert-success">
    {{session('status')}}
  </div>
@endif
<div class="card">
  <div class="card-header">
  <a href="/pertanyaan/create" class="cardlink"><button class="btn btn-primary">Posting Pertanyaan</button></a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="example1" class="table table-striped">
      <thead>
      <tr class="row">
        <th class="col-sm-1">id</th>
        <th class="col-sm-4">judul</th>
        <th class="col-sm-4">isi</th>
        <th class="col-sm-3">action</th>
      </tr>
      </thead>
      <tbody>
      @foreach($pertanyaan as $tiap)
      <tr class="row">
        <td class="col-sm-1">{{$tiap->id}}</td>
        <td class="col-sm-4">{{$tiap->judul}}</td>
        <td class="col-sm-4">{{$tiap->isi}}</td>
        <td class="col-sm-3">
          <div class="container d-flex">
            <a href="/jawaban/{{$tiap->id}}"><button class="btn-xm btn-info m-1">Jawab</button></a>
            <a href="/pertanyaan/{{$tiap->id}}/edit"><button class="btn-xm btn-warning m-1">Edit</button></a>
            <a href="/pertanyaan/{{$tiap->id}}"><button class="btn-xm btn-default m-1">Detail</button></a>
            <form action="/pertanyaan/{{$tiap->id}}" class="m-1" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn-xm btn-danger"><i class="fas fa-times"></i></button>
          </form>
        </div>
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
@endsection
@push('scripts')
<script src="{{asset('adminlte-v3/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('adminlte-v3plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
</script>
@endpush