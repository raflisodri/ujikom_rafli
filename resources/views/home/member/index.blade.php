@extends('layout.master')
@section('content')
    
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Ini Data Member</h3>
                            <a href="member/tambah" class="btn btn-info">Tambah</a>
                        </div>
                        <div class="card body">
                            <div class="table-responsive">
                                <table class="table " id="example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($member as $u)
                                        <tr>
                                            <td>{{$u->id}}</td>
                                            <td>{{$u->nama}}</td>
                                            <td>{{$u->alamat}}</td>
                                            <td>{{$u->no_telp}}</td>
                                            <td>
                                                <a href="member/edit/{{$u->id}}" class="btn btn-warning">Edit</a>
                                                <a href="#" class="btn btn-danger" onclick="Delete('member/delete/{{$u->id}}')">Hapus</a>
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