@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header h4">
                        {{ __('Riwayat Prediksi Tingkat Stres') }}
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">
                            {{ __('Berikut adalah data riwayat prediksi tingkat stres Anda.') }}
                        </p>

                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>Prediksi</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jumlah Langkah per Hari</th>
                                    <th>Pekerjaan</th>
                                    <th>Durasi Tidur</th>
                                    <th>Kualitas Tidur</th>
                                    <th>Prediksi Stres</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Laki-laki</td>
                                    <td>5000 langkah</td>
                                    <td>Mahasiswa</td>
                                    <td>7 jam</td>
                                    <td>8/10</td>
                                    <td>Rendah</td>
                                    <td>01-01-2025 08:00</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Laki-laki</td>
                                    <td>7000 langkah</td>
                                    <td>Freelancer</td>
                                    <td>8 jam</td>
                                    <td>9/10</td>
                                    <td>Rendah</td>
                                    <td>03-01-2025 09:15</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="mt-3 text-center">
                            <p>{{ __('Menampilkan 2 dari 2 data') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
