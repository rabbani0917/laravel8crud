<table class="table">
    <thead calss="thead-dark">
        <tr style="background-color:#31b0d5">
            <th>no</th>
            <th>judul</th>
            <th>isi</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($beritas as $item)
            <tr>
              <td>{{ $loop->iteration }} </td>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->isi }}</td>
              <td>
                    <a href="{{ route('berita.show', $item->id) }}" class="btn btn-success">Tampil</a>
                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-success">edit</a>
                    {!! Form::open(['route'=>['berita.delete',$item->id],'method'=>'delete']) !!}
                    {!! Form::submit('hapus',['class'=>'btn btn-sm btn-danger']); !!}
                    {!! Form::close()!!}
              </td>
              <td>
                    
              </td>
            </tr>
        @endforeach
    </tbody>
</table>