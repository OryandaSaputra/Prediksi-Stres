@extends('layouts.app_modern')

@section('content')
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="mb-3">
                    <span class="badge bg-light text-primary py-2 px-3" style="border-radius: 20px; font-size: 14px;">
                        {{ __('Selamat Datang, ' . Auth::user()->name) }}
                    </span>
                </div>
                <h1 class="display-4 font-weight-bold text-dark mb-4">
                    {{ __('Website Prediksi tingkat Stres') }}
                </h1>
                <p class="text-muted mb-4" style="line-height: 1.8;">
                    {{ __('Platform Prediksi Tingkat Stres adalah sebuah layanan berbasis web yang dirancang untuk memonitor, menganalisis, dan memberikan estimasi mengenai tingkat stres pengguna. Tujuan utama platform ini adalah membantu pengguna dalam mengenali dan memahami kondisi stres mereka.') }}
                </p>
                <a href="#" class="btn btn-primary btn-lg">
                    {{ __('Prediksi Stres') }}
                </a>
            </div>
            <div class="col-md-6 text-center">
                <img src="https://watermark.lovepik.com/photo/40016/0267.jpg_wh1200.jpg" alt="Pekanbaru Traffic"
                    class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
@endsection
