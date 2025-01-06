@extends('layouts.app_modern_users')

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

                        <form action="{{ route('prediksi.store') }}" method="POST">
                            @csrf

                            <!-- Input Jenis Kelamin -->
                            <div class="mb-3">
                                <label for="gender" class="form-label">{{ __('Jenis Kelamin') }}</label>
                                <select id="gender" name="gender" class="form-select" required>
                                    <option value="" selected disabled>{{ __('Pilih Jenis Kelamin') }}</option>
                                    <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>{{ __('Laki-laki') }}</option>
                                    <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>{{ __('Perempuan') }}</option>
                                </select>
                                @error('gender')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Jumlah Langkah Kaki -->
                            <div class="mb-3">
                                <label for="steps" class="form-label">{{ __('Jumlah Langkah Kaki per Hari') }}</label>
                                <input type="number" id="steps" name="steps" class="form-control"
                                    placeholder="Contoh: 5000" value="{{ old('steps') }}" required>
                                @error('steps')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Pekerjaan -->
                            <div class="mb-3">
                                <label for="job" class="form-label">{{ __('Pekerjaan') }}</label>
                                <input type="text" id="job" name="job" class="form-control"
                                    placeholder="Contoh: Mahasiswa, Pegawai" value="{{ old('job') }}" required>
                                @error('job')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Durasi Tidur -->
                            <div class="mb-3">
                                <label for="sleep_duration"
                                    class="form-label">{{ __('Durasi Tidur (Jam per Malam)') }}</label>
                                <input type="number" id="sleep_duration" name="sleep_duration" class="form-control"
                                    placeholder="Contoh: 8" value="{{ old('sleep_duration') }}" required>
                                @error('sleep_duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Input Kualitas Tidur -->
                            <div class="mb-3">
                                <label for="sleep_quality" class="form-label">{{ __('Kualitas Tidur (1-10)') }}</label>
                                <input type="number" id="sleep_quality" name="sleep_quality" class="form-control"
                                    placeholder="Contoh: 7" min="1" max="10" value="{{ old('sleep_quality') }}" required>
                                @error('sleep_quality')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
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
