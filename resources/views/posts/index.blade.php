@extends('pages.app')

@section('content')

    <div class="container-fluid header-bg py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 text-white mb-3 animated slideInDown" style="font-family: 'Mikado', sans-serif; font-weight: 900; margin: 0;">Testimoni</h1>
            <nav aria-label="breadcrumb" class="animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a class="text-white" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Testimoni</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Visiting Hours Start -->
    <div class="container-xxl py-5">
        <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Ini Kata Pengunjung Kita!</h1>
        <div class="row mb-5 wow fadeInUp">
            @foreach ($posts as $post)
            <!-- column -->
            <div class="col-lg-4 col-md-6">
                <!-- Card -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title" style="font-family: 'Mikado', sans-serif; font-size: 18px; font-weight: 900; color: #274E13; margin: 0 0 10px;">
                            {{ $post->CREATE_BY }}
                        </h4>
                        <p class="card-text" style="font-size: 14px; color: #555; margin: 0 0 50px;">
                            {{ $post->MESSAGE_TEXT }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="/posts/create" class="btn btn-primary mb-5 wow fadeInUp">Tambahkan Testi</a>
    </div>

@endsection