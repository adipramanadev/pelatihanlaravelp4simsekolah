@extends('master')

@section('title')
    <title>Data Jurusan</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Jurusan</h4>
                            <div class="card-header-action">
                                <a href="{{ route('jurusan.create') }}" class="btn btn-primary">Tambah Jurusan
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Jurusan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($jurusan as $jurusans)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $jurusans->namajurusan }}</td>
                                                <td><a href="{{ route('jurusan.edit', $jurusans->id) }}"
                                                        class="btn btn-outline-warning">Edit</a>
                                                    <a href="{{ route('jurusan.destroy', $jurusans->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3" class="text-center">Belum Ada Data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
