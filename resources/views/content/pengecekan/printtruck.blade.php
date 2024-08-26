<!DOCTYPE html>
<html>
<head>
    <title>Mapping Muat & Ceklist Kontainer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
            color: #000000;
        }
        .container {
            max-width: 1100px;
            max-height: auto;
            /* margin: auto; */
        }
        .header h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .row {
            display: flex;
            justify-content: space-between;
        }
        .section {
            margin-bottom: 20px;
        }
        table {
            width: 90%;
            height: 30%;
            border-collapse: collapse;
            margin-bottom: 9px;
        }
        table th, table td {
            border: 1px solid #000000;
            padding: 2px;
            text-align: left;
            font-size: 0.5em
        }
        table th {
            background-color: #f2f2f2;
        }
        .note {
            font-size: 7px;
            color: #555;
            margin-top: 20px;
        }
        .text-center {
            text-align: center;
        }
        .no-print {
            display: block;
        }
        .section{
            margin-top: -16px;
        }
        
            
        
    </style>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</head>
<body>
    <div class="container">
        
        @foreach ($data as $d)
        <style>
            .header {
                display: flex;
                align-items: center; /* Menyelaraskan item di tengah secara vertikal */
                justify-content: center; /* Menyelaraskan item di tengah secara horizontal */
                text-align: center; /* Menyelaraskan teks di tengah */
            }
        
            .header img {
                margin-right: 15px; /* Jarak antara gambar dan teks */
            }
        
            .header h3, .header p {
                margin: 0; /* Menghilangkan margin default */
            }
        </style>
        
        <div class="header">
            <img style="width: 7%" src="{{asset('img/Logo_TML.png')}}" alt="Logo">
            <div>
                <h4 style="margin-bottom: -5px"><strong>Mapping Muat & Ceklist Kontainer</strong></h4>
                <p class="text-start"><b>No. GS: {{$d->no_gs}}</b></p>
            </div>
        </div>
        
        
        <hr style="margin-top: -3px">
        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-2">
        <p class="text-center" style="margin-top: -15px"><strong>PENGECEKAN</strong></p>

            </div>
            <div class="col-md-5"></div>
        </div>

        <div class="row">
            <div style="flex: 1; margin-right: 10px;">
                <div class="section">
                    <table>
                        
                        <tr>
                            <th>Awal Muat</th>
                            <td>{{$d->awal_muat}} - {{$d->awal_muat1}}</td>
                        </tr>
                        <tr>
                            <th>Tanggal</th>
                            <td>{{$d->tgl_gs}}</td>
                        </tr>
                        <tr>
                            <th>Customer</th>
                            <td>{{$d->customer}}</td>
                        </tr>
                        <tr>
                            <th>Kota/Negara</th>
                            <td>{{$d->kota_negara}}</td>
                        </tr>
                    </table>
                </div>

                <div class="section">
                    <p style="margin-bottom: -5px"><strong>KONTAINER / TRAILER / TRUK</strong></p>
                    <table>
                        <tr>
                            <th>Lantai</th>
                            <td>{{$d->lantai}}</td>
                        </tr>
                        <tr>
                            <th>Dinding</th>
                            <td>{{$d->dinding}}</td>
                        </tr>
                        <tr>
                            <th>Pengunci Kontainer</th>
                            <td>{{$d->pengunci_kontainer}}</td>
                        </tr>
                        <tr>
                            <th>Disapu</th>
                            <td>{{$d->sapu}}</td>
                        </tr>
                        <tr>
                            <th>Vacum</th>
                            <td>{{$d->vacum}}</td>
                        </tr>
                        <tr>
                            <th>Disemprot</th>
                            <td>{{$d->disemprot}}</td>
                        </tr>
                        <tr>
                            <th>Choke</th>
                            <td>{{$d->choke}}</td>
                        </tr>
                        <tr>
                            <th>Stopper / Balok</th>
                            <td>{{$d->stopper}}</td>
                        </tr>
                        <tr>
                            <th>Sling</th>
                            <td>{{$d->sling}}</td>
                        </tr>
                        <tr>
                            <th>Silica Gel</th>
                            <td>{{$d->silica_gel}}</td>
                        </tr>
                        <tr>
                            <th>Fumigasi</th>
                            <td>{{$d->fumigasi}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <div style="flex: 1; margin-left: 10px;">
                <div class="section">
                    
                    <table>
                        <tr>
                            <th>Selesai muat</th>
                            <td>{{$d->selesai_muat}}</td>
                        </tr>
                        <tr>
                            <th>No. Mobil</th>
                            <td>{{$d->no_mobil}}</td>
                        </tr>
                        <tr>
                            <th>No. Kontainer</th>
                            <td>{{$d->no_container}}</td>
                        </tr>
                        <tr>
                            <th>Cuaca</th>
                            <td>{{$d->cuaca}}</td>
                        </tr>
                        <tr>
                            <th>Tonase / Tare</th>
                            <td>{{$d->tonase_tare}}</td>
                        </tr>
                    </table>
                </div>

                <div class="section">
                    <p style="margin-bottom: -5px"><strong>TRAILER / TRUK</strong></p>
                    <table>
                        <tr>
                            <th>Kondisi Ban</th>
                            <td>{{$d->kondisi_ban}}</td>
                        </tr>
                        <tr>
                            <th>Kondisi Lantai</th>
                            <td>{{$d->kondisi_lantai}}</td>
                        </tr>
                        <tr>
                            <th>Rantai / Webbing</th>
                            <td>{{$d->rantai_webbing}}</td>
                        </tr>
                        <tr>
                            <th>Tonase</th>
                            <td>{{$d->tonase}}</td>
                        </tr>
                        <tr>
                            <th>Terpal</th>
                            <td>{{$d->terpal}}</td>
                        </tr>
                    </table>
                </div>


                <div class="section">
                    <table>
                        <tr>
                            <th>Pegawai <small style="color: red">*</small></th>
                            <td>{{$d->pegawai}}</td>
                        </tr>
                    </table>
                </div>

                <div class="section">
                    <table>
                        <tr>
                            <th>Catatan <small style="color: red">*</small></th>
                            <td>{{$d->catatan}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        @endforeach
        <hr style="margin-top: -15px">
        <div style="margin-top: -10px" class="row cc">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="text-center mb-2" style="border: 1px solid #000000; max-width:90%; max-height: 50%" class="kotak">
                    <p class="mt-1"><b >KONTAINER</b></p>
                </div>
                <style>
                     .mapping {
            width: 90%;
            height: 20px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .mapping td {
            border: 1px solid #000000;
            padding: none;
            text-align: center;
        }
        .mapping tr {
            height: 4rem; /* Aturan khusus untuk tabel kedua */

        }
        @media print {
    .no-print {
        display: none;
    }
    .cc, .mapping {
        /* display: none;  */
        margin-left: 30px;
    }
    .mapping{
        /* display: none; */
        margin-left: -0.07em;
        height:10%

    }
    .mapping .kiri tr {
    height: 30px;
    display: none /* Sesuaikan dengan ketinggian yang diinginkan */
}

}

                </style>
                {{-- <p class="text-center">DEPAN</p> --}}
                <table class="mapping kiri mb-5">
                    @foreach ($coil as $c)
                        
                    
                    <tr>
                        <td width="100px">
                            @if($c->a1)
                               <p style="margin-top: -9px"><b> {{ $c->a1 }} </b></p>
                               
                               <img style="margin-top: -30px;margin-bottom:-30px" width="16%" src="{{asset('img/'.$c->a1_eye.'.png')}}" alt="{{$c->a1_eye}}">
                            @else
                            {{ $c->a1 }}
                            @endif
                        </td>
                        
                        <td width="100px">
                            @if($c->b1)
                               <p><b>{{ $c->b1 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b1_eye.'.png')}}" alt="{{$c->b1_eye}}">
                            @else
                            {{ $c->b1 }}
                            @endif
                        </td>

                       
                    </tr>

                    <tr>
                        <td>
                            @if($c->a2)
                               <p><b>{{ $c->a2 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a2_eye.'.png')}}" alt="{{$c->a2_eye}}">
                            @else
                            {{ $c->a2 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b2)
                               <p><b>{{ $c->b2 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b2_eye.'.png')}}" alt="{{$c->b2_eye}}">
                            @else
                            {{ $c->b2 }}
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <td>
                            @if($c->a3)
                               <p><b>{{ $c->a3 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a3_eye.'.png')}}" alt="{{$c->a3_eye}}">
                            @else
                            {{ $c->a3 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b3)
                               <p><b>{{ $c->b3 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b3_eye.'.png')}}" alt="{{$c->b3_eye}}">
                            @else
                            {{ $c->b3 }}
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <td>
                            @if($c->a4)
                               <p><b>{{ $c->a4 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a4_eye.'.png')}}" alt="{{$c->a4_eye}}">
                            @else
                            {{ $c->a4 }}
                            @endif
                        </td>
                        

                        <td>
                            @if($c->c4)
                               <p><b>{{ $c->c4 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->c4_eye.'.png')}}" alt="{{$c->c4_eye}}">
                            @else
                            {{ $c->c4 }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            @if($c->a5)
                               <p><b>{{ $c->a5 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a5_eye.'.png')}}" alt="{{$c->a5_eye}}">
                            @else
                            {{ $c->a5 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b5)
                               <p><b>{{ $c->b5 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b5_eye.'.png')}}" alt="{{$c->b5_eye}}">
                            @else
                            {{ $c->b5 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a6)
                               <p><b>{{ $c->a6 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a6_eye.'.png')}}" alt="{{$c->a6_eye}}">
                            @else
                            {{ $c->a6 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b6)
                               <p><b>{{ $c->b6 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b6_eye.'.png')}}" alt="{{$c->b6_eye}}">
                            @else
                            {{ $c->b6 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a7)
                               <p><b>{{ $c->a7 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a7_eye.'.png')}}" alt="{{$c->a7_eye}}">
                            @else
                            {{ $c->a7 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b7)
                               <p><b>{{ $c->b7 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b7_eye.'.png')}}" alt="{{$c->b7_eye}}">
                            @else
                            {{ $c->b7 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a8)
                               <p><b>{{ $c->a8 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a8_eye.'.png')}}" alt="{{$c->a8_eye}}">
                            @else
                            {{ $c->a8 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b8)
                               <p><b>{{ $c->b8 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b8_eye.'.png')}}" alt="{{$c->b8_eye}}">
                            @else
                            {{ $c->b8 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a9)
                               <p><b>{{ $c->a9 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a9_eye.'.png')}}" alt="{{$c->a9_eye}}">
                            @else
                            {{ $c->a9 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b9)
                               <p><b>{{ $c->b9 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b9_eye.'.png')}}" alt="{{$c->b9_eye}}">
                            @else
                            {{ $c->b9 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a10)
                               <p><b>{{ $c->a10 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a10_eye.'.png')}}" alt="{{$c->a10_eye}}">
                            @else
                            {{ $c->a10 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b10)
                               <p><b>{{ $c->b10 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b10_eye.'.png')}}" alt="{{$c->b10_eye}}">
                            @else
                            {{ $c->b10 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a11)
                               <p><b>{{ $c->a11 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a11_eye.'.png')}}" alt="{{$c->a11_eye}}">
                            @else
                            {{ $c->a11 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b11)
                               <p><b>{{ $c->b11 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b11_eye.'.png')}}" alt="{{$c->b11_eye}}">
                            @else
                            {{ $c->b11 }}
                            @endif
                        </td>

                        
                    </tr>
                    <tr>
                        <td>
                            @if($c->a12)
                               <p><b>{{ $c->a12 }} </b></p>
                              
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->a12_eye.'.png')}}" alt="{{$c->a12_eye}}">
                            @else
                            {{ $c->a12 }}
                            @endif
                        </td>
                        
                        <td>
                            @if($c->b12)
                               <p><b>{{ $c->b12 }} </b></p>
                               
                               <img style="margin-top: -25px;margin-bottom:-20px" width="16%" src="{{asset('img/'.$c->b12_eye.'.png')}}" alt="{{$c->b12_eye}}">
                            @else
                            {{ $c->b12 }}
                            @endif
                        </td>

                        
                    </tr>
                    
                    
                    @endforeach
                </table>
                <p  class="text-start" style="font-size: 9px;margin-top: -25px"><small style="color: red">*</small>Mapping ini mereferensikan layout koil saat berada di dalam kontainer dari <b>Tampak Atas</b></p>
            </div>
            
            
            <div class="col-md-3"></div>
            <div class="text-center mt-4 no-print">
                <a class="btn btn-primary print-btn" onclick="printPage()">Cetak</a>
            </div>
        </div>
        
       
        

        

        <!-- Print Button -->
        
    </div>
</body>
</html>
