@extends('layout.app')
@section('title', 'Input Report')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Report</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Report</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('report.insert.action') }}" method="post">
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
                            <label>Report </label>
                            <textarea type="report" name="report" class="form-control"></textarea>
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
