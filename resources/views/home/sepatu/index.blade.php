@extends('layout.master')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Sepatu</h3>
                            <a href="sepatu/tambah" class="btn btn-info">Tambah</a>
                        </div>
                        <div class="card body">
                            <div class="table-responsive">
                                <table class="table " id="example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Suplier</th>
                                            <th>Nama</th>
                                            <th>Merk</th>
                                            <th>Jenis</th>
                                            <th>Stok</th>
                                            <th>Ukuran</th>
                                            <th>Warna</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sepatu as $u)
                                        <tr>
                                            <td>{{$u->id}}</td>
                                            <td>{{$u->Suplier->nama}} - {{$u->Suplier->nama_perusahaan}}</td>
                                            <td>{{$u->nama}}</td>
                                            <td>{{$u->merk}}</td>
                                            <td>{{$u->jenis}}</td>
                                            <td>{{$u->stok}}</td>
                                            <td>{{$u->ukuran}}</td>
                                            <td>{{$u->warna}}</td>
                                            <td>{{$u->harga}}</td>
                                            <td>
                                                <a href="sepatu/edit/{{$u->id}}" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onclick="Delete('sepatu/delete/{{$u->id}}')">Hapus</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection