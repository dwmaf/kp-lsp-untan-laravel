@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/skema" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar skema</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Tambah Skema baru
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/skema" method="POST">
            @csrf
            <div class="form-floating mb-3">
                <input  type="text" class="form-control @error('nama_skema') is-invalid @enderror" name="nama_skema" id="nama_skema" placeholder="isi nama skema" autofocus required value="{{ old("nama_skema") }}">
                @error('nama_skema')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="nama_asesor">Nama Skema</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

@endsection