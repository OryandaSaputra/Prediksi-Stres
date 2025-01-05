@extends('layouts.app_modern')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pengguna</div>
                    <div class="card-body">
                        <div class="row mb-3 mt-3">
                            <div class="col-md-4 h3">
                                Daftar Pengguna
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Rate Stress (Terbaru)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users->where('email', '!=', 'admin@gmail.com') as $index => $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td> <!-- Menampilkan nomor urut berdasarkan perulangan -->
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->no }}</td>
                                        <td>
                                            <a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm ml-2">
                                                Riwayat Stress
                                            </a>&nbsp;
                                            <form action="/users/{{ $user->id }}" method="post" class="d-inline">
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
                        {!! $users->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
