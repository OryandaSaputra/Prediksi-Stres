@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header h4">
                        {{ __('Form Tingkat Stres Pengguna') }}
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-4">
                            {{ __('Silakan isi informasi berikut untuk mengetahui tingkat stres Anda.') }}
                        </p>

                        <form action="#" method="POST">
                            @csrf

                            <!-- Input Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">{{ __('Jenis Kelamin') }}</label>
                                <select id="gender" name="gender" class="form-select" required>
                                    <option value="" selected disabled>{{ __('Pilih Jenis Kelamin') }}</option>
                                    <option value="Laki-laki">{{ __('Laki-laki') }}</option>
                                    <option value="Perempuan">{{ __('Perempuan') }}</option>
                                </select>
                            </div>

                            <!-- Input Jumlah Langkah Kaki -->
                            <div class="mb-3">
                                <label for="steps" class="form-label">{{ __('Jumlah Langkah Kaki per Hari') }}</label>
                                <input type="number" id="steps" name="steps" class="form-control"
                                    placeholder="Contoh: 5000" required>
                            </div>

                            <!-- Input Pekerjaan -->
                            <div class="mb-3">
                                <label for="job" class="form-label">{{ __('Pekerjaan') }}</label>
                                <input type="text" id="job" name="job" class="form-control"
                                    placeholder="Contoh: Mahasiswa, Pegawai" required>
                            </div>

                            <!-- Input Durasi Tidur -->
                            <div class="mb-3">
                                <label for="sleep_duration"
                                    class="form-label">{{ __('Durasi Tidur (Jam per Malam)') }}</label>
                                <input type="number" id="sleep_duration" name="sleep_duration" class="form-control"
                                    placeholder="Contoh: 8" required>
                            </div>

                            <!-- Input Kualitas Tidur -->
                            <div class="mb-3">
                                <label for="sleep_quality" class="form-label">{{ __('Kualitas Tidur (1-10)') }}</label>
                                <input type="number" id="sleep_quality" name="sleep_quality" class="form-control"
                                    placeholder="Contoh: 7" min="1" max="10" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                {{ __('Kirim Prediksi Stres') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
