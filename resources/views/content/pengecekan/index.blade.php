@extends('layouts.index')

@section('title', 'Daftar Pengecekan')

@section('content')
<div class="container-xxl">
    <h1 class="app-brand-text demo menu-text fw-bold ms-1 text-center">MAPPING MUAT & CEKLIST KONTAINER & TRAILER</h1>
    @foreach ($data as $d)
    <h4 class="app-brand-text demo menu-text fw-bold ms-1 text-center">No Gs : {{$d->no_gs}}</h4>
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
              class="form-control"
              name="awal_muat"
              placeholder="09.00"
              aria-label="Username"
              aria-describedby="basic-addon41" />
          </div>
          
            <div class="input-group">
              <span class="input-group-text" id="basic-addon41">Tanggal</span>
              <input
                type="date"
                class="form-control"
                name="awal_muat"
                placeholder="09.00"
                aria-label="Username"
                aria-describedby="basic-addon41"
                value="{{$d->tgl_gs}}" disabled />
            </div>

            <div class="input-group">
              <span class="input-group-text" id="basic-addon41">Customer</span>
              <input
                type="text"
                class="form-control"
                name="awal_muat"
                placeholder="09.00"
                aria-label="Username"
                aria-describedby="basic-addon41"
                value="{{$d->Kepada}}" disabled />
            </div>
            
            <div class="input-group">
              <span class="input-group-text" id="basic-addon41">Kota / Negara</span>
              <input
                type="text"
                class="form-control"
                name="kota_negara"
                placeholder="Jakarta"
                aria-label="Username"
                aria-describedby="basic-addon41"
                />
            </div>

            <p class="text-center" style="font-weight:bold;">KONTAINER / TRAILER / TRUK</p>
            
            <div class="input-group">
                <span class="input-group-text" id="basic-addon41">Lantai</span>
                <select class="form-select" id="floorRating" name="lantai" aria-label="Floor Rating">
                    <option value="bagus">Bagus</option>
                    <option value="kurang_bagus">Kurang Bagus</option>
                    <option value="jelek">Jelek</option>
                </select>
            </div>
            
            <div class="input-group">
                <span class="input-group-text" id="basic-addon41">Dinding</span>
                <select class="form-select" id="floorRating" name="dinding" aria-label="Floor Rating">
                    <option value="bagus">Bagus</option>
                    <option value="kurang_bagus">Kurang Bagus</option>
                    <option value="jelek">Jelek</option>
                </select>
            </div>
            
            <div class="input-group">
                <span class="input-group-text" id="basic-addon41">Pengunci Kontainer</span>
                <select class="form-select" id="floorRating" name="pengunci" aria-label="Floor Rating">
                    <option value="4_pengunci">4 Pengunci</option>
                    <option value="<_4_pengunci">< 4 Pengunci</option>
                </select>
            </div>

            <div class="card demo-vertical-spacing demo-only-element">
                    <div class="row">
                    <div class="col-md-4">
                        <span>Disapu</span>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuSudah" name="sapu" value="sudah">
                          <label class="form-check-label" for="sapuSudah">Sudah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuBelum" name="sapu" value="belum">
                          <label class="form-check-label" for="sapuBelum">Belum</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span>Vacum</span>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuSudah" name="vacum" value="sudah">
                          <label class="form-check-label" for="sapuSudah">Sudah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuBelum" name="vacum" value="belum">
                          <label class="form-check-label" for="sapuBelum">Belum</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <span>Disemprot</span>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuSudah" name="semprot" value="sudah">
                          <label class="form-check-label" for="sapuSudah">Sudah</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" id="sapuBelum" name="semprot" value="belum">
                          <label class="form-check-label" for="sapuBelum">Belum</label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="input-group">
                <span class="input-group-text" id="basic-addon41">Choke</span>
                <input
                  type="number"
                  class="form-control"
                  name="choke"
                  placeholder="20"
                  aria-label="choke"
                  aria-describedby="basic-addon41"
                  />
              </div>
              
              <div class="input-group">
                  <span class="input-group-text" id="basic-addon41">Stoper / Balok</span>
                  <input
                    type="number"
                    class="form-control"
                    name="stopper"
                    placeholder="20"
                    aria-label="choke"
                    aria-describedby="basic-addon41"
                    />
                </div>
                
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Silica Gel</span>
                    <input
                      type="number"
                      class="form-control"
                      name="silica"
                      placeholder="5"
                      aria-label="choke"
                      aria-describedby="basic-addon41"
                      />
                  </div>

                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Fumigasi</span>
                    <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                        <option value="sudah">Sudah</option>
                        <option value="belum">Belum</option>
                    </select>
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
                  class="form-control"
                  name="awal_muat"
                  placeholder="09.00"
                  aria-label="Username"
                  aria-describedby="basic-addon41" />
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
                    value="{{$d->no_mobil}}" disabled />
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
                    value="{{$d->no_container}}" disabled />
                </div>
          
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Cuaca</span>
                    <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                        <option value="sudah">Cerah</option>
                        <option value="belum">Berawan</option>
                        <option value="belum">Mendung</option>
                        <option value="belum">Hujan</option>
                    </select>
                </div>

                <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Tonase / Tare </span>
                    <input
                      type="text"
                      class="form-control"
                      name="no_container"
                      placeholder="container"
                      aria-label="Username"
                      aria-describedby="basic-addon41"
                      value="{{$tonase." / ".$d->tare_weight}}" disabled />
                  </div>

                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Kondisi Ban</span>
                    <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                        <option value="bagus">bagus</option>
                        <option value="kurang_bagus">Kurang Bagus</option>
                        <option value="jelek">Jelek</option>
                    </select>
                </div>
                
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon41">Kondisi Lantai</span>
                  <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                      <option value="bagus">bagus</option>
                      <option value="kurang_bagus">Kurang Bagus</option>
                      <option value="jelek">Jelek</option>
                  </select>
              </div>

                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon41">Rantai / Webing</span>
                    <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                        <option value="lengkap">Lengkap</option>
                        <option value="tidak_lengkap">Tidak Lengkap</option>
                        <option value="tidak_ada">Tidak Ada</option>
                    </select>
                </div>
                
                <div class="input-group">
                  <span class="input-group-text" id="basic-addon41">Tonase</span>
                  <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                      <option value="sesuai">Sesuai Kapasitas</option>
                      <option value="tidak">Tidak Sesuai Kapasitas</option>
                  </select>
              </div>

              <div class="input-group">
                <span class="input-group-text" id="basic-addon41">Terpal</span>
                <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                    <option value="bagus">Bagus</option>
                    <option value="jelek">Jelek</option>
                </select>
            </div>

            </div>
      </div>
      <div class="card mb-4">
          <h5 class="card-header">Posisi Stufing</h5>
          <div class="card-body demo-vertical-spacing demo-only-element">
              <div class="input-group">
                  <span class="input-group-text" id="basic-addon41">Type Stuffing</span>
                  <select class="form-select" id="floorRating" name="fumigasi" aria-label="Floor Rating">
                      <option value="sky">Eye to Sky</option>
                      <option value="side">Eye to Side</option>
                      <option value="rear">Eye to Rear</option>
                  </select>
              </div>
          </div>
      </div>
    </div>

</div>



<h1 class="app-brand-text demo menu-text fw-bold ms-1 text-center">MAPPING KONTAINER</h1>
<div class="row mb-5">
    <div class="col-md-12">
        <div class="row mb-4">
            <div class="col-md-12 bg-danger text-white text-center p-3">
                <h3>KONTAINER</h3>
            </div>
        </div>

        <div class="row">
            @for ($i = 0; $i < 15; $i++)
                <div class="col-md-4 mb-3">
                    <div class="input-group">
                        <select class="form-select" name="fumigasi[]" aria-label="Floor Rating">
                            <option value="">Pilih</option>
                            @foreach ($coil as $c)
                                <option value="{{ $c->id }}">{{ substr($c->kode_produk, -5) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @if (($i + 1) % 3 == 0)
                    <div class="w-100"></div>
                @endif
            @endfor
        </div>
    </div>
</div>

        {{-- text area --}}
          <div class="input-group mb-5">
            <span class="input-group-text">Catatan</span>
            <textarea
              class="form-control"
              aria-label="With textarea"
              placeholder="Comment"
              style="height: 60px"></textarea>
          </div>
          
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selects = document.querySelectorAll('select[name="fumigasi[]"]');
    
    function updateOptions() {
        const selectedValues = Array.from(selects).map(s => s.value).filter(v => v);
        
        selects.forEach(select => {
            const options = select.querySelectorAll('option');
            options.forEach(option => {
                if (selectedValues.includes(option.value) && option.value !== select.value) {
                    option.style.display = 'none';
                } else {
                    option.style.display = '';
                }
            });
        });
    }
    
    selects.forEach(select => {
        select.addEventListener('change', updateOptions);
    });

    // Initial call to hide selected options on page load
    updateOptions();
});


</script>
</div>
@endforeach
@endsection