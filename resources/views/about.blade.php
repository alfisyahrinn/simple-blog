@extends('layouts.main')

@section('container')
    <h1>{{ $name }}</h1>
    <button onclick="keren()" id="tes" class="btn btn-primary">klik</button>
    <script>
        function keren() {
            swal("mantap bang", "{{ session('success') }}", 'success', {
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })
        }
    </script>
@endsection
