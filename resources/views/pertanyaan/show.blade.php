@extends('layouts.master')
@section('content')
<div class="card card-outline card-primary container">
    <div class="card-header">
    <h2 class="card-title">Title: {{$detail->judul}}</h2>

    <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
    </div>
    <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    {{$detail->isi}}
    </div>
    <div class="card-footer m-0">
        <p>
            <i class="color-primary icon fas fa-info"> Created at: </i> {{$detail->created_at}}
        </p>
    </div>
    <div class="card-footer m-0">
        <p>
            <i class="color-primary icon fas fa-info"> Updated at: </i> {{$detail->updated_at}}
        </p>
    </div>
    <!-- /.card-body -->
</div>
@endsection