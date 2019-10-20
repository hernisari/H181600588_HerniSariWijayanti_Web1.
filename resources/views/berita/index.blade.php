@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">
                <a href="{!!route('berita.create')!!}" class="btn btn-primary">Tambah Data</a><br><br>

                <table border="1">
                <tr>
                <td>ID</td>
                <td>judul</td>
                <td>isi</td>
                <td>user_id</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>kategori_berita_id</td>
                </tr>

                 @foreach($listBerita as $item)

                 <tr>
                 <td>{!!$item->id!!}</td>
                 <td>{!!$item->judul!!}</td>
                 <td>{!!$item->isi!!}</td>
                 <td>{!!$item->user_id!!}</td>
                 <td>{!!$item->created_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->updated_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->kategori_berita_id!!}</td>

                 
                 <td>
                    <a href="{!!route('berita.show',[$item->id])!!}" class="btn-sm btn-primary">Lihat</a>
                 </td>

                 </tr>

                 @endforeach
                 </table>

                 </div>
            </div>
        </div>
    </div>
</div>
@endsection