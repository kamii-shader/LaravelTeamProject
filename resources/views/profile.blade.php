@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                        @csrf

                        @if (session('success'))
                            <div class="alert alert-success" role="alert" class="text-danger">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Avatar: </label>
                                <input id="avatar" type="file" class="form-control @error('avatar') is-invalid @enderror" name="avatar" value="{{ old('avatar') }}"  autocomplete="avatar">

                                @error('avatar')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <img src="/avatars/{{ auth()->user()->avatar }}" style="width:80px;margin-top: 10px;">
                            </div>

                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Name: </label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ auth()->user()->name }}" autofocus="" >
                                @error('name')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">Email: </label>
                                <input class="form-control" type="text" id="email" name="email" value="{{ auth()->user()->email }}" autofocus="" >
                                @error('email')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="password" class="form-label">Password: </label>
                                <input class="form-control" type="password" id="password" name="password" autofocus="" >
                                @error('password')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="confirm_password" class="form-label">Confirm Password: </label>
                                <input class="form-control" type="password" id="confirm_password" name="confirm_password" autofocus="" >
                                @error('confirm_password')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Phone: </label>
                                <input class="form-control" type="text" id="phone" name="phone" value="{{ auth()->user()->phone }}" autofocus="" >
                                @error('phone')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="city" class="form-label">City: </label>
                                <input class="form-control" type="text" id="city" name="city" value="{{ auth()->user()->city }}" autofocus="" >
                                @error('city')
                                    <span role="alert" class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            {{ __('Update Profile') }}
                        </button>
                    </form>

                    <br>

                    <form action="{{route('logout')}}">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
            
            <br><br>

            <div class="card">
            <div class="card-header">Donations</div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Kampanye</th>
                            <th>Jumlah Donasi (IDR)</th>
                            <th>Tanggal Donasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donations as $key => $donation)
                            <tr>
                                <td>{{ $donation->portofolio->title }}</td>
                                <td>Rp {{ number_format($donation->amount, 0, ',', '.') }}</td>
                                <td>{{ $donation->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
