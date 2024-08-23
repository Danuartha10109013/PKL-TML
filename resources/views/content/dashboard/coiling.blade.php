@extends('layouts.index')

@section('title')
    Tambah Koil
@endsection

@section('content')
<div class="container-xxl">
    <h3 class="title text-center">DATA SHIPMENT</h3>
    <a class="btn btn-primary mb-3" href="/tambah/coil/{{$same}}">Tambah Koil</a>

<div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th class="text-truncate">No</th>
              <th class="text-truncate">Kode Produk</th>
              <th class="text-truncate">Produk</th>
              <th class="text-truncate">Quantity</th>
              <th class="text-truncate">Deskripsi</th>
              <th class="text-truncate">Action</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $c)
  
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$c->kode_produk}}</td>
              <td class="text-truncate">{{$c->nama_produk}}</td>
              <td class="text-truncate">{{$c->berat_produk}} Kg</td>
              <td>{{$c->keterangan}}</td>
              <td> <span class="btn btn-danger">Acitvate</span></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>

@endsection