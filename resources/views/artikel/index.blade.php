@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Artikel</div>

                <div class="card-body">
                <a href="{!! route('artikel.create') !!}" class="btn btn-primary">Tambah Data</a>

                <table border="1">
                <tr>
                <td>ID</td>
                <td>judul</td>
                <td>isi</td>
                <td>Users Id</td>
                <td>kategoriartikel id </td>
                <td>Create</td>
                <td>update</td>
                <td>Aksi</td>
                </tr>

                 @foreach($listartikel as $item)

                 <tr>
                 <td>{!!$item->id!!}</td>
                 <td>{!!$item->judul!!}</td>
                 <td>{!!$item->isi!!}</td>
                 <td>{!!$item->users_id !!}</td>
                 <td>{!!$item->created_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->updated_at->format('d/m/Y H:i')!!}</td>
                 <td>{!!$item->kategori_artikel_id!!}</td>

                 
                 <td>
                    <a href="{!!route('artikel.show',[$item->id])!!}" class="btn-sm btn-primary">Lihat</a>
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