@extends('layout.app')
@section('title', 'Edit Report')
@section('content')
    <h1 class="h3 mb-2 text-gray-800">Report</h1>

    <div class="row">
        <div class="col-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Report</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('report.edit.update', $report->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="hidden" name="id" value="{{ $report->id }}">
                            <input type="text" name="nama" class="form-control" value="{{ $report->nama }}">
                            @error('nama')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{ $report->email }}">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kelas</label>
                            <input type="text" name="kelas" class="form-control" value="{{ $report->kelas }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control" value="{{ $report->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label>Report</label>
                            <textarea name="report" class="form-control">{{ $report->report }}</textarea>
                            @error('report')
                                {{ $message }}
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-save"></i> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
