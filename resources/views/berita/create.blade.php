@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'berita.store']) !!}
<div class="body m-10">
    <div class="form-group">
        {!! Form::text('judul', 'Judul'); !!}
        {!! Form::text('judul', '', ['class' => 'form-control','placeholder'=>'judul berita']); !!}
    </div>
    <div class="form- group">
        {!! Form::label('isi', 'Isi'); !!}
        {!! Form::textarea('isi', '', ['class' => 'form-control','placeholder'=>'isi berita']); !!}

    </div>
    <div class="form- group">
        {!! Form::label('created_at', 'Waktu Tambah'); !!}
        {!! Form::label('created_at', $berita->created_at->format('d/m/Y H:i:s'),['class'=>'form-control']); !!}
    </div>
    <div class="form- group">
        {!! Form::label('updated_at', 'Waktu Ubah'); !!}
        {!! Form::label('updated_at', $berita->updated_at->format('d/m/Y H:i:s'),['class'=>'form-control']); !!}
    <button class=" btn btn-success" >Simpan</button>
    <a href="{!! route('berita.index') !!} " class="btn btn-danger" > cancel</a>

</div>
{!! Form::close() !!}

        </div>
     </div>
</div>



@endsection