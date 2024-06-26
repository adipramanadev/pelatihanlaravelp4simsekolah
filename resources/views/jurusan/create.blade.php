@extends('master')

@section('title')
    <title>Tambah Data Jurusan</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data Jurusan</h4>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('jurusan.store')}}" method="post">
                                @csrf
                                @method('POST')
                                <div class="form-group">
                                    <label for="">Nama Jurusan</label>
                                    <input type="text" placeholder="Nama Jurusan" name="namajurusan"
                                        class="form-control">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
