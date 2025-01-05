@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Artikel</div>
                    <div class="card-body">
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6 h3">
                                Daftar Artikel
                            </div>
                            <div class="col-md-6 text-end">
                                <!-- Tambah Artikel Button -->
                                <a href="{{ route('articles_create') }}" class="btn btn-primary">
                                    Tambah Artikel
                                </a>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Penulis</th>
                                    <th>Dipublikasikan Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $index => $article)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut berdasarkan perulangan -->
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->author }}</td>
                                        <td>{{ $article->published_at }}</td>
                                        <td>
                                            <a href="/articles/{{ $article->id }}" class="btn btn-info btn-sm ml-2">
                                                Lihat
                                            </a>&nbsp;
                                            <a href="/articles/{{ $article->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                                Edit
                                            </a>&nbsp;
                                            <form action="/articles/{{ $article->id }}" method="post" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm ml-2" onclick="return confirm('Yakin ingin menghapus data?')">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {!! $articles->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
