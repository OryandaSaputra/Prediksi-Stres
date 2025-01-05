@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Detail Artikel</div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h4>Judul:</h4>
                            <p>{{ $article->title }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Penulis:</h4>
                            <p>{{ $article->author }}</p>
                        </div>
                        <div class="mb-3">
                            <h4>Dipublikasikan Pada:</h4>
                            <p>{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d M Y H:i') : 'Belum dipublikasikan' }}</p>
                            </div>
                        <div class="mb-3">
                            <h4>Konten:</h4>
                            <p>{{ $article->content }}</p>
                        </div>
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
