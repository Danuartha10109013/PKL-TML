@extends('layouts.index')

@section('title')
    Tambah Data
@endsection

@section('content')
<div class="container-xxl mt-4">
    <h3  class="title text-center mb-4">Upload Data Shipment</h3>

    <div style="box-shadow: 15px" class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 style="color: white" class="mb-0">Upload File Excel</h5>
                </div>

                <div class="card-body">
                    <form id="uploadForm" action="{{ route('upload-excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="excel" class="form-label">Input File</label>
                            <input type="file" accept=".xlsx, .csv, .xls" name="excel" id="excel" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-xxl mt-4">
    <h3  class="title text-center mb-4">Upload Data Koil</h3>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h5 style="color: white" class="mb-0">Upload File Excel</h5>
                </div>

                <div class="card-body">
                    <form id="uploadForm" action="{{ route('upload-koil-excel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="excel" class="form-label">Input File</label>
                            <input type="file" accept=".xlsx, .csv, .xls" name="excelkoil" id="excel" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
