@extends('layouts.app')

{{-- Customize layout settings --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops</strong> Input gagal<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div> 
@endif
<div class="container">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
        </div>

        <form method="post" action="../kategori">
            <div class="card-body">
                <div class="form-group">
                    <label for="kodeKategori">Kode Kategori</label>
                    <input type="text" class="form-control" id="kategori_kode" name="kategori_kode" placeholder="Masukan kode kategori" class="@error('kategori_kode') is-invalid @enderror">
                    @error('kategori_kode')
                        <div class="aler alert-danger">{{ $message }}</div>                        `
                    @enderror
                </div>
                <div class="form-group">
                    <label for="namaKategori">Nama Kategori</label>
                    <input type="text" class="form-control" id="kategori_nama" name="kategori_nama" placeholder="Masukan nama kategori">
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
