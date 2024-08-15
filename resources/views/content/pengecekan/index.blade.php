@extends('layouts.index')

@section('title', 'Daftar Pengecekan')

@section('content')
<div class="container-xxl">
    <h1 class="app-brand-text demo menu-text fw-bold ms-1 text-center">MAPPING MUAT & CEKLIST KONTAINER & TRAILER</h1>
    @foreach ($data as $d)
    <h4 class="app-brand-text demo menu-text fw-bold ms-1 text-center">No Gs : {{$d->no_gs}}</h4>
    <form action="{{url('store')}}" method="POST">
        @csrf
        <div class="row">
            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Step 1</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Awal Muat</span>
                            <input
                                type="time"
                                class="form-control @error('awal_muat') is-invalid @enderror"
                                name="awal_muat"
                                placeholder="09.00"
                                aria-label="Awal Muat"
                                aria-describedby="basic-addon41"
                                value="{{ old('awal_muat') }}" />
                            @error('awal_muat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            
                            <input
                                type="text"
                                class="form-control"
                                name="no_gs"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$d->no_gs}}" hidden />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Tanggal</span>
                            <input
                                type="date"
                                class="form-control"
                                name="tgl_gs"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$d->tgl_gs}}" readonly />
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Customer</span>
                            <input
                                type="text"
                                class="form-control"
                                name="customer"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$d->Kepada}}" readonly />
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Kota / Negara</span>
                            <input
                                type="text"
                                class="form-control @error('kota_negara') is-invalid @enderror"
                                name="kota_negara"
                                placeholder="Jakarta"
                                aria-label="Kota / Negara"
                                aria-describedby="basic-addon41"
                                value="{{ old('kota_negara') }}" />
                            @error('kota_negara')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <p class="text-center" style="font-weight:bold;">KONTAINER / TRAILER / TRUK</p>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Lantai</span>
                            <select class="form-select @error('lantai') is-invalid @enderror" name="lantai" aria-label="Floor Rating">
                                <option value="bagus" {{ old('lantai') == 'bagus' ? 'selected' : '' }}>Bagus</option>
                                <option value="kurang_bagus" {{ old('lantai') == 'kurang_bagus' ? 'selected' : '' }}>Kurang Bagus</option>
                                <option value="jelek" {{ old('lantai') == 'jelek' ? 'selected' : '' }}>Jelek</option>
                            </select>
                            @error('lantai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Dinding</span>
                            <select class="form-select @error('dinding') is-invalid @enderror" name="dinding" aria-label="Floor Rating">
                                <option value="bagus" {{ old('dinding') == 'bagus' ? 'selected' : '' }}>Bagus</option>
                                <option value="kurang_bagus" {{ old('dinding') == 'kurang_bagus' ? 'selected' : '' }}>Kurang Bagus</option>
                                <option value="jelek" {{ old('dinding') == 'jelek' ? 'selected' : '' }}>Jelek</option>
                            </select>
                            @error('dinding')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Pengunci Kontainer</span>
                            <select class="form-select @error('pengunci_kontainer') is-invalid @enderror" name="pengunci_kontainer" aria-label="Pengunci Kontainer">
                                <option value="4_pengunci" {{ old('pengunci_kontainer') == '4_pengunci' ? 'selected' : '' }}>4 Pengunci</option>
                                <option value="<4_pengunci" {{ old('pengunci_kontainer') == '<4_pengunci' ? 'selected' : '' }}>< 4 Pengunci</option>
                            </select>
                            @error('pengunci_kontainer')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="card demo-vertical-spacing demo-only-element">
                            <div class="row">
                                <div class="col-md-4">
                                    <span>Disapu</span>
                                    <div class="form-check">
                                        <input class="form-check-input @error('sapu') is-invalid @enderror" type="radio" id="sapuSudah" name="sapu" value="sudah" {{ old('sapu') == 'sudah' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sapuSudah">Sudah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('sapu') is-invalid @enderror" type="radio" id="sapuBelum" name="sapu" value="belum" {{ old('sapu') == 'belum' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sapuBelum">Belum</label>
                                    </div>
                                    @error('sapu')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                
                                
                                <div class="col-md-4">
                                    <span>Vacum</span>
                                    <div class="form-check">
                                        <input class="form-check-input @error('vacum') is-invalid @enderror" type="radio" id="vacumSudah" name="vacum" value="sudah" {{ old('vacum') == 'sudah' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vacumSudah">Sudah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('vacum') is-invalid @enderror" type="radio" id="vacumBelum" name="vacum" value="belum" {{ old('vacum') == 'belum' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="vacumBelum">Belum</label>
                                    </div>
                                    @error('vacum')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <span>Disemprot</span>
                                    <div class="form-check">
                                        <input class="form-check-input @error('disemprot') is-invalid @enderror" type="radio" id="disemprotSudah" name="disemprot" value="sudah" {{ old('disemprot') == 'sudah' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="disemprotSudah">Sudah</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('disemprot') is-invalid @enderror" type="radio" id="disemprotBelum" name="disemprot" value="belum" {{ old('disemprot') == 'belum' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="disemprotBelum">Belum</label>
                                    </div>
                                    @error('disemprot')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Choke</span>
                            <input
                                type="number"
                                class="form-control @error('choke') is-invalid @enderror"
                                name="choke"
                                placeholder="0"
                                aria-label="Choke"
                                aria-describedby="basic-addon41"
                                value="{{ old('choke') }}" />
                            @error('choke')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Stopper</span>
                            <input
                                type="number"
                                class="form-control @error('stopper') is-invalid @enderror"
                                name="stopper"
                                placeholder="0"
                                aria-label="Stopper"
                                aria-describedby="basic-addon41"
                                value="{{ old('stopper') }}" />
                            @error('stopper')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Sling</span>
                            <input
                                type="number"
                                class="form-control @error('sling') is-invalid @enderror"
                                name="sling"
                                placeholder="0"
                                aria-label="Sling"
                                aria-describedby="basic-addon41"
                                value="{{ old('sling') }}" />
                            @error('sling')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Silica Gel</span>
                            <input
                                type="number"
                                class="form-control @error('silica_gel') is-invalid @enderror"
                                name="silica_gel"
                                placeholder="0"
                                aria-label="Silica Gel"
                                aria-describedby="basic-addon41"
                                value="{{ old('silica_gel') }}" />
                            @error('silica_gel')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Fumigasi</span>
                            <select class="form-select @error('fumigasi') is-invalid @enderror" name="fumigasi" aria-label="Fumigasi">
                                <option value="iya" {{ old('fumigasi') == 'iya' ? 'selected' : '' }}>Iya</option>
                                <option value="tidak" {{ old('fumigasi') == 'tidak' ? 'selected' : '' }}>Tidak</option>
                            </select>
                            @error('fumigasi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>

            <!-- Basic -->
            <div class="col-md-6">
                <div class="card mb-4">
                    <h5 class="card-header">Step 2</h5>
                    <div class="card-body demo-vertical-spacing demo-only-element">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Selesai Muat</span>
                            <input
                                type="time"
                                class="form-control @error('selesai_muat') is-invalid @enderror"
                                name="selesai_muat"
                                placeholder="10:00"
                                aria-label="Selesai Muat"
                                aria-describedby="basic-addon41"
                                value="{{ old('selesai_muat') }}" />
                            @error('selesai_muat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">No Mobil</span>
                            <input
                                type="text"
                                class="form-control"
                                name="no_mobil"
                                placeholder="T 1000 TU"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$d->no_mobil}}" readonly />
                        </div>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Tonase / Tare</span>
                            <input
                                type="text"
                                class="form-control"
                                name="tonase_tare"
                                placeholder="T 1000 TU"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$tonase}}" readonly />
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">No Kontainer</span>
                            <input
                                type="text"
                                class="form-control"
                                name="no_container"
                                placeholder="container"
                                aria-label="Username"
                                aria-describedby="basic-addon41"
                                value="{{$d->no_container}}" readonly />
                        </div>
                    
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Cuaca</span>
                            <select class="form-select @error('cuaca') is-invalid @enderror" name="cuaca" aria-label="Cuaca">
                                <option value="cerah" {{ old('cuaca') == 'cerah' ? 'selected' : '' }}>Cerah</option>
                                <option value="berawan" {{ old('cuaca') == 'berawan' ? 'selected' : '' }}>Berawan</option>
                                <option value="hujan" {{ old('cuaca') == 'hujan' ? 'selected' : '' }}>Hujan</option>
                            </select>
                            @error('cuaca')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Kondisi Ban</span>
                            <select class="form-select @error('kondisi_ban') is-invalid @enderror" name="kondisi_ban" aria-label="Kondisi Ban">
                                <option value="bagus" {{ old('kondisi_ban') == 'bagus' ? 'selected' : '' }}>Bagus</option>
                                <option value="kurang bagus" {{ old('kondisi_ban') == 'kurang bagus' ? 'selected' : '' }}>Kurang Bagus</option>
                                <option value="kurang bagus" {{ old('kondisi_ban') == 'kurang bagus' ? 'selected' : '' }}>Jelek</option>
                            </select>
                            @error('kondisi_ban')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Kondisi Lantai</span>
                            <select class="form-select @error('kondisi_lantai') is-invalid @enderror" name="kondisi_lantai" aria-label="Kondisi Lantai">
                                <option value="bagus" {{ old('kondisi_lantai') == 'bagus' ? 'selected' : '' }}>Bagus</option>
                                <option value="kurang bagus" {{ old('kondisi_lantai') == 'kurang bagus' ? 'selected' : '' }}>Kurang Bagus</option>
                                <option value="kurang bagus" {{ old('kondisi_lantai') == 'kurang bagus' ? 'selected' : '' }}>Jelek</option>
                            </select>
                            @error('kondisi_lantai')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Rantai Webbing</span>
                            <select class="form-select @error('rantai_webbing') is-invalid @enderror" name="rantai_webbing" aria-label="Rantai Webbing">
                                <option value="lengkap" {{ old('rantai_webbing') == 'lengkap' ? 'selected' : '' }}>Lengkap</option>
                                <option value="tidak lengkap" {{ old('rantai_webbing') == 'tidak lengkap' ? 'selected' : '' }}>Tidak Lengkap</option>
                                <option value="tidak ada" {{ old('rantai_webbing') == 'tidak ada' ? 'selected' : '' }}>Tidak ada</option>
                            </select>
                            @error('rantai_webbing')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Tonase</span>
                            <select class="form-select @error('tonase') is-invalid @enderror" name="tonase" aria-label="Tonase">
                                <option value="sesuai kapasitas" {{ old('tonase') == 'sesuai kapasitas' ? 'selected' : '' }}>Sesuai Kapasitas</option>
                                <option value="tidak sesuai kapasitas" {{ old('tonase') == 'tidak sesuai kapasitas' ? 'selected' : '' }}>Tidak Sesuai Kapasitas</option>
                            </select>
                            @error('tonase')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Terpal</span>
                            <select class="form-select @error('terpal') is-invalid @enderror" name="terpal" aria-label="Terpal">
                                <option value="bagus" {{ old('terpal') == 'bagus' ? 'selected' : '' }}>Bagus</option>
                                <option value="jelek" {{ old('terpal') == 'jelek' ? 'selected' : '' }}>Jelek</option>
                            </select>
                            @error('terpal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon41">Stuffing</span>
                            <select class="form-select @error('stuffing') is-invalid @enderror" name="stuffing" aria-label="Stuffing">
                                <option value="eye to sky" {{ old('stuffing') == 'eye to sky' ? 'selected' : '' }}>Eye to Sky</option>
                                <option value="eye to slide" {{ old('stuffing') == 'eye to side' ? 'selected' : '' }}>Eye to Side</option>
                                <option value="eye to rear" {{ old('stuffing') == 'eye to rear' ? 'selected' : '' }}>Eye to Rear</option>
                            </select>
                            @error('stuffing')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                    </div>
                </div>
                {{-- text area --}}
                <div class="input-group mb-5">
                    <span class="input-group-text">Catatan</span>
                    <textarea
                        class="form-control"
                        name="catatan"
                        aria-label="With textarea"
                        placeholder="Comment"
                        style="height: 60px"></textarea>
                    </div>
            </div>
        </div>


        <button type="submit" class="btn btn-primary mb-5">Simpan</button>
    </form>
    @endforeach
</div>
@endsection
