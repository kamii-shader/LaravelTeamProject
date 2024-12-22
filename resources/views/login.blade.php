@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="text-center mt-5">
        <h2>Login</h2>
        <p>Silahkan isi masuk dengan menggunakan akun yang sudah anda daftarkan</p>
    
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{route('login.submit')}}" method="post">
                            @csrf
                            <label>Email Address</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Login</button>
                        </form>

                        @if (session('Failed'))
                            <p class="text-danger mt-2">{{session('Failed')}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection