@extends('layout')
@section('content')
<div class="container text-center">       
    <div class="row justify-content-center pt-4" id="#">
        <div class="col-md-6 col-lg-5">
            <div class="card">
                <div class="card-body">
                    <h1>Biodata</h1>
                    <img src="https://avatars.githubusercontent.com/u/100120568?v=4" class="img-fluid rounded-circle w-50 mb-3">
                    <h3>{{ $nama }}</h3>
                    <h5 class="text-muted">Informatika</h5>
                    <p class="fs-5">Seorang mahasiswa dari {{ $kampus }} yang memiliki hobi {{ $hobi }}</p>
                    <div class="py-3">
                        <a href="https://www.facebook.com/alidongan.harahap" class="text-secondary text-decoration-none fs-5 me-4">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://github.com/chocokran" class="text-secondary text-decoration-none fs-5 me-4">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.instagram.com/choco.kran_/" class="text-secondary text-decoration-none fs-5 me-4">
                        <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection