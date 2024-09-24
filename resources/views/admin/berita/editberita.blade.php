@extends('layouts.adminnav')
@section('adminchild')
<a href="/admin/berita" class="btn btn-success mb-3"><i class="fa-solid fa-arrow-left"></i> Kembali ke daftar berita</a>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa-solid fa-users-line"></i>
        Edit Berita
    </div>
    <div class="card-body">
        <form class="pt-3" action="/admin/berita/{{ $beritum->id }}" method="POST" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="oldImage" value="{{ $beritum->link_foto }}">
            <div class="form-floating mb-3">
                <input class="form-control" name="judul_berita" id="judul_berita" type="text" value="{{ $beritum->judul_berita }}" required/>
                <label for="judul_berita">Judul Berita</label>
            </div>
            <div class=" mb-3">
                <label for="konten_berita" class="form-label">Konten Berita</label>
                <input name="konten_berita" id="konten_berita" type="hidden" required  value="{{ $beritum->konten_berita }}"/>
                <trix-editor input="konten_berita"></trix-editor>
            </div>
            <input class="form-control mb-3" name="link_foto" id="link_foto" type="file"/>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>


    
@endsection