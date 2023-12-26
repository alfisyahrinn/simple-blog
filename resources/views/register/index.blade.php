@extends('layouts.main')
@section('container')
    <div class=" justify-content-center d-flex">
        <div class="card" style="width: 30vw">
            <div class="card-header" style="height: 30px">
            </div>
            <div class="card-body">
                <form action={{ route('register.store') }} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="name"
                            class="form-control @error('name')
                        is-invalid
                        @enderror"
                            id="nama">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username"
                            class="form-control @error('username')
                        is-invalid
                        @enderror"
                            id="username">
                        @error('username')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email"
                            class="form-control @error('email')
                        is-invalid
                        @enderror"
                            id="email">
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password"
                            class="form-label @error('password')
                            is-invalid
                        @enderror">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                        @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Confirm-password</label>
                        <input type="password" name="password_confirmation" class="form-control  @error('password')
                        is-invalid
                    @enderror" id="password">
                        @error('password')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mb-2">Register</button>
                </form>
                <small class="text-center d-block">Sudah Punya akun? <a href="/login">Login</a></small>
            </div>
        </div>
    </div>
@endsection
