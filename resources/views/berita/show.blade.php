@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">

                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">ID</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->id !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Judul</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->judul !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Kategori Id</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->kategori_berita_id !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Isi</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->isi !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Users Id</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->users_id !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Create</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->created_at->format('d/m/Y') !!}</label>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 col-form-label text-md-right">Create</label>
                    <label class="col-md-8 col-form-label text-md-left">{!! $Berita->updated_at->format('d/m/Y') !!}</label>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
   