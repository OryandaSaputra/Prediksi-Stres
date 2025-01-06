<!-- resources/views/prediksi/result.blade.php -->
@extends('layouts.app_modern_users')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header h4">
                        {{ __('Hasil Prediksi Stres Anda') }}
                    </div>
                    <div class="card-body">
                        <p><strong>Jenis Kelamin:</strong> {{ $prediction->gender }}</p>
                        <p><strong>Jumlah Langkah Kaki:</strong> {{ $prediction->steps }}</p>
                        <p><strong>Pekerjaan:</strong> {{ $prediction->job }}</p>
                        <p><strong>Durasi Tidur:</strong> {{ $prediction->sleep_duration }} jam</p>
                        <p><strong>Kualitas Tidur:</strong> {{ $prediction->sleep_quality }}</p>

                        <hr>

                        <p><strong>Hasil Prediksi:</strong> {{ $prediction->prediction_result }}</p>

                        <a href="{{ route('prediksi.create') }}" class="btn btn-primary">Kembali ke Form Prediksi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
