@extends('layouts.index')

@section('title')
    Data Shippment
@endsection

@section('content')
<div class="container-xxl">
    <h3 class="title text-center">DATA SHIPMENT</h3>
    <div ><a href="{{route('input-excel')}}" class="btn btn-primary text-end mb-3">Buat Shipment</a></div>
<div class="col-12">
  @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
  @endif
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th style="color: black" class="text-truncate">No</th>
              <th style="color: black" class="text-truncate">No GS</th>
              <th style="color: black" class="text-truncate">Tanggal GS</th>
              <th style="color: black" class="text-truncate">No SO</th>
              <th style="color: black" class="text-truncate">No PO</th>
              <th style="color: black" class="text-truncate">No DO</th>
              <th style="color: black" class="text-truncate">No Container</th>
              <th style="color: black" class="text-truncate">No Seal</th>
              <th style="color: black" class="text-truncate">No Mobil</th>
              <th style="color: black" class="text-truncate">Forwarding</th>
              <th style="color: black" class="text-truncate">Kepada</th>
              <th style="color: black" class="text-truncate">Alamat Pengirim</th>
              <th style="color: black" class="text-truncate">Alamat Tujuan</th>
              <th style="color: black" class="text-truncate">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $c)
  
            <tr>
              <td style="color: black">{{$loop->iteration}}</td>
              <td style="color: black">{{$c->no_gs}}</td>
              <td style="color: black" class="text-truncate">{{$c->tgl_gs}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_so}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_po}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_do}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_container}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_seal}}</td>
              <td style="color: black" class="text-truncate">{{$c->no_mobil}}</td>
              <td style="color: black" >{{$c->forwarding}}</td>
              <td style="color: black" >{{$c->Kepada}}</td>
              <td style="color: black" >{{$c->alamat_pengirim}}</td>
              <td style="color: black" >{{$c->alamat_tujuan}}</td>
              <td>
                 <a href="/coiling/{{$c->no_gs }}" class="btn btn-success">Koil</a>
                 <a href="/shipment/{{$c->id}}" class="btn btn-warning">Detail</a>
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection