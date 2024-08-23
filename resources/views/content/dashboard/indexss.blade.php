@extends('layouts.index')

@section('title')
    Data Shippment
@endsection

@section('content')
<div class="container-xxl">
    <h3 class="title text-center">DATA SHIPMENT</h3>
    <div ><a href="/shipmentcreate" class="btn btn-primary text-end mb-3">Buat Shipment</a></div>
<div class="col-12">
    <div class="card">
      <div class="table-responsive">
        <table class="table">
          <thead class="table-light">
            <tr>
              <th class="text-truncate">No</th>
              <th class="text-truncate">No GS</th>
              <th class="text-truncate">Tanggal GS</th>
              <th class="text-truncate">No SO</th>
              <th class="text-truncate">No PO</th>
              <th class="text-truncate">No DO</th>
              <th class="text-truncate">No Container</th>
              <th class="text-truncate">No Seal</th>
              <th class="text-truncate">No Mobil</th>
              <th class="text-truncate">Forwarding</th>
              <th class="text-truncate">Kepada</th>
              <th class="text-truncate">Alamat Pengirim</th>
              <th class="text-truncate">Alamat Tujuan</th>
              <th class="text-truncate">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($data as $c)
  
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$c->no_gs}}</td>
              <td class="text-truncate">{{$c->tgl_gs}}</td>
              <td class="text-truncate">{{$c->no_so}}</td>
              <td class="text-truncate">{{$c->no_po}}</td>
              <td class="text-truncate">{{$c->no_do}}</td>
              <td class="text-truncate">{{$c->no_container}}</td>
              <td class="text-truncate">{{$c->no_seal}}</td>
              <td class="text-truncate">{{$c->no_mobil}}</td>
              <td >{{$c->forwarding}}</td>
              <td >{{$c->Kepada}}</td>
              <td >{{$c->alamat_pengirim}}</td>
              <td >{{$c->alamat_tujuan}}</td>
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