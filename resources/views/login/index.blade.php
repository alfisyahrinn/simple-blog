@extends('layouts.main')
@section('container')
    <div>
        @if (session()->has('message'))
            <script>
                swal("mantap bang", "{{ session('success') }}", 'success', {
                    button: true,
                    button: "OK"
                })
            </script>
        @endif
        {{-- @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show position-absolute top-0 end-0 me-5"
                style="margin-top: 65px;transition: opacity 0.5s ease-in-out;" id="alert" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}
        <div class=" justify-content-center d-flex" style="margin-top: 150px">
            <div class="card" style="width: 30vw">
                <div class="card-header" style="height: 30px">
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mb-2">Login</button>
                    </form>
                    <small class="text-center d-block">Tidak Punya akun? <a href="/register">Daftar</a></small>
                </div>
            </div>
        </div>
    </div>
    <script>
        const alertElement = document.getElementById('alert');

        function removeAlert() {
            alertElement.remove();
        }
        setTimeout(removeAlert, 6000);
    </script>
@endsection
