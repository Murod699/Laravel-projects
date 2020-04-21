@extends('layouts/admin', ['title' => "admin qism"])
@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Admin</h6>
    </div>
    <div class="card-body">
       
       @include('admin.alerts.main')
        
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.posts.store') }}">

            @csrf    
            <div class="form-group">
                <label for="">Sarlavha</label>
                <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group">
                <label for="">Rasm</label>
                <input class="form-control" name="img" type="file">
            </div>
            <div class="form-group">
                <label for="">Qisqacha</label>
                <input class="form-control" name="short" type="text">
            </div>
            <div class="form-group">
                <label for="">Maqola</label>
                <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-sm btn-success">Saqlash</button>
        
        </form>
    </div>
</div>

@endsection