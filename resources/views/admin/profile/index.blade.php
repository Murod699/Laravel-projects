@extends('layouts/admin', ['title' => "admin qism"])
@section('content')
<div class="row">
    <div class="col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                Profilni tahrirlash
                </h6>
                
            </div>
            <div class="card-body">
                @include('admin.alerts.main')
                <form method="POST" action="{{route('admin.profile.update')}}">
                    @csrf
                    @method('PUT')                    
                    <div class="form-group">
                        <label for="name">Ism<span class="text-danger">*</span></label>
                        <input name="name" id="name" class="form-control" value="{{old('name', $user->name)}}" required type="text">
                    </div>
                    <div class="form-group">
                        <label for="email">Elektron manzil<span class="text-danger">*</span></label>
                        <input name="email" id="email" class="form-control" value="{{old('email', $user->email)}}" required type="email">
                    </div>
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
    <div class="card shadow mb-0">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                Profilni tahrirlash
                </h6>
                
            </div>
            <div class="card-body">
            <form method="POST" action="{{route('admin.profile.password')}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="password">Yangi parol<span class="text-danger">*</span></label>
                        <input name="password" id="password" class="form-control" required type="password">
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Yangi parolni tasdiqlash<span class="text-danger">*</span></label>
                        <input name="password_confirmation" id="password_confirmation" class="form-control"  required type="password">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block">O`zgartirish</button>
                </form>  
            </div>
        </div>
    </div>
</div>


@endsection