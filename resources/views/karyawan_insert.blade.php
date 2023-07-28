@extends('layout.app')
@section('title', 'Tambah Karyawan')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Diary Artikel</h1>

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Artikel diary</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('karyawan.insert.action') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{ auth()->user()->email }}" read>
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>kelas</label>
                            <input type="text" name="kelas" class="form-control">
                            @error('kelas')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tanggal </label>
                            <input type="date" name="tanggal" class="form-control">
                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Isi diary</label>
                            <textarea type="diary" name="diary" class="form-control" rows="10"></textarea>
                            @error('number')
                                {{ $message }}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
