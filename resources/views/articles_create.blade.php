    @extends('layouts.app_modern')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Tambah Artikel</div>
                        <div class="card-body">
                            <form action="{{ route('articles.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="author">Penulis</label>
                                    <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}" required>
                                    @error('author')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="content">Konten</label>
                                    <textarea name="content" id="content" rows="5" class="form-control @error('content') is-invalid @enderror" required>{{ old('content') }}</textarea>
                                    @error('content')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="published_at">Dipublikasikan Pada</label>
                                    <input type="datetime-local" 
                                    name="published_at" 
                                        id="published_at" 
                                        class="form-control @error('published_at') is-invalid @enderror" 
                                        value="{{ old('published_at', \Carbon\Carbon::now('Asia/Jakarta')->format('Y-m-d\TH:i')) }}" 
                                        required>
                                    @error('published_at')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
