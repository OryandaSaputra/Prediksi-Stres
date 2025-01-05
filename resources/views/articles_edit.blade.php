@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit Artikel</div>
                    <div class="card-body">
                        <form action="{{ route('articles.update', $article->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mb-3">
                                <label for="title">Judul</label>
                                <input type="text" name="title" id="title" 
                                    class="form-control @error('title') is-invalid @enderror" 
                                    value="{{ old('title', $article->title) }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="author">Penulis</label>
                                <input type="text" name="author" id="author" 
                                    class="form-control @error('author') is-invalid @enderror" 
                                    value="{{ old('author', $article->author) }}" required>
                                @error('author')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="content">Konten</label>
                                <textarea name="content" id="content" rows="5" 
                                    class="form-control @error('content') is-invalid @enderror" required>{{ old('content', $article->content) }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="published_at">Dipublikasikan Pada</label>
                                <input type="datetime-local" name="published_at" id="published_at" 
                                class="form-control @error('published_at') is-invalid @enderror" 
                                value="{{ old('published_at', $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('Y-m-d\TH:i') : '') }}">

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
