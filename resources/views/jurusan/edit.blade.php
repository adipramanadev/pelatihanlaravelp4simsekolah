@extends('master')

@section('title')
    <title>Edit Jurusan</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit Jurusan</h1>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>Halaman Edit Jurusan</h4>
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
                            <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="namajurusan">Nama Jurusan</label>
                                    <input type="text" name="namajurusan" value="{{ $jurusan->namajurusan }}"
                                        class="form-control">
                                </div>
                                <div class="form-group text-right">
                                    <button class="btn btn-primary">Ubah</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
