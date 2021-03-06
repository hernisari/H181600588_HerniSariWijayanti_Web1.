@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Galeri</div>

                <div class="card-body">
                <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>

                <table border="1">
                <tr>
                <td>ID</td>
                <td>nama</td>
                <td>keterangan</td>
                <td>path</td>
                <td>users_id</td>
                <td>created_at</td>
                <td>updated_at</td>
                <td>kategori_galeri_id</td>
                </tr>

                 @foreach($listGaleri as $item)

                 <tr>
                 <td>{!!$item->id!!}</td>
                 <td>{!!$item->nama!!}</td>
                 <td>{!!$item->keterangan!!}</td>
                 <td>{!!$item->path!!}</td>
                 <td>{!!$item->users_id!!}</td>
                 <td>{!!$item->created_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->updated_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->kategori_galeri_id!!}</td>

                 
                 <td>
                    <a href="{!!route('galeri.show',[$item->id])!!}" class="btn-sm btn-primary">Lihat</a>
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