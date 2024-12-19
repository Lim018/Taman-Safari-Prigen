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
        <div class="row">
            <form action="{{ route('posts.create') }}" method="POST">
                @csrf
                <textarea name="MESSAGE_TEXT" id="MESSAGE_TEXT"></textarea>
                <button class="btn btn-primary" type="submit">Kirim Pesan</button>
            </form>
        </div>
    </div>

@endsection