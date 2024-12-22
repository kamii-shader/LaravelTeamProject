@extends('layouts.app')

@section('title', 'Registrasi')

@section('content')
    <div class="text-center mt-5">
        <h2>Register</h2>
        <p>Silahkan isi formulir berikut untuk registrasi aplikasi</p>
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{route('registrasi.submit')}}" method="post">
                            @csrf
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control mb-2">
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection