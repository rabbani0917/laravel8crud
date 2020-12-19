@extends('layouts.app')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
        {!! Form::open(['route' => 'berita.delete']) !!}
<div class="body m-10">
    <div class="form-group">
        {!! Form::label('judul', 'Judul'); !!}
        {!! Form::label('judul', $berita->judul, ['class' => 'form-control']); !!}
    </div>
    
    <div class="form- group">
        {!! Form::label('isi', 'Isi'); !!}
        {!! Form::label('isi', $berita->isi, ['class' => 'form-control']); !!}
    </div>

    <div class="form- group">
        {!! Form::label('created_at', 'Waktu Tambah'); !!}
        {!! Form::label('created_at', $berita->created_at->format('d/m/Y H:i:s'),['class'=>'form-control']); !!}
    </div>
    <div class="form- group">
        {!! Form::label('updated_at', 'Waktu Ubah'); !!}
        {!! Form::label('updated_at', $berita->updated_at->format('d/m/Y H:i:s'),['class'=>'form-control']); !!}
    </div>
   
    <a href="{!! route('berita.delete') !!} " class="btn btn-warning" > hapus data</a>
    {!! Form::open(['route'=>['BeritaController.destroy',$item->id]])!!}

    {!! Form::close()!!}


</div>
        </div>
     </div>
</div>



@endsection