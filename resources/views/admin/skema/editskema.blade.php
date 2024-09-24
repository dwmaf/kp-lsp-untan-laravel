@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/skema" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar skema</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Skema
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/skema/{{ $skema->id }}" method="POST">
            @method('put')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" type="text" class="@error('nama_skema') @enderror" name="nama_skema" id="nama_skema" value="{{ $skema->nama_skema }}" placeholder="isi nama skema" autofocus required>
                @error('nama_skema')
                    <div class="">{{ $message }}</div>
                @enderror
                <label for="nama_asesor">Nama Skema</label>
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

    
@endsection