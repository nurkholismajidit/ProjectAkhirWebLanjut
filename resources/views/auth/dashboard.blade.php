@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Sistem Informasi Kegiatan Masjid & Musholla Se Sukorejo</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">

                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ URL('/posts') }}" role="button">Upload Data</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
                @else
                <div class="alert alert-success">
                    Selamat Datang di Aplikasi Sistem Informasi Kegiatan Masjid Atau Musholla Se Sukorejo!
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection