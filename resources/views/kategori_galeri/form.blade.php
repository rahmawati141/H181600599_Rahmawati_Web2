@csrf


<div class="form-group row">
    <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

    <div class="col-md-6">
    {!! Form::text('nama', null, ['class'=>"form-control" ,'required','autofocus'])!!}
        @error('nama')
        <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
        @enderror
    </div>
</div>
{!! Form::hidden('users_id',Auth::user()->id)!!}
<input id="users_id" type="hidden" class="form-control @error('users_id') is-invalid @enderror" name="users_id" value="{{ Auth::user()->id }}" required autofocus>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button 
            type="submit" class="btn btn-primary">
            Simpan Data
            </button>
        <a href="{!! route('kategori_galeri.index') !!}" class="btn btn-danger">
        Batal
        </a>
    </div>
</div>
