
@extends('layouts.main')

@section('tampilan')

<div class="main-content">
    <section class="section">
        @auth
      <div class="section-header">
        <h1>Tambah Catatan</h1>
      </div>

      <div class="card mb-3">
        <form method="POST" action="/list-travel">
            @csrf
            @method('POST')
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Tambah Catatan</h6>
        </div>
        <div class="card-body">
          <p>Waktu</p> <input type="time" name="jam" class="form-control">
         </div>
        <div class="card-body">
         <p>Tanggal</p> <input type="date" name="tanggal" class="form-control">
        </div>
        <div class="card-body">
         <p>Lokasi</p> <input type="text" name="lokasi" placeholder="Masukkan lokasi" class="form-control">
        </div>
        <div class="card-body">
            <p>Suhu</p> <input  onkeypress="return hanyaAngka (event)" type="number" name="suhu" maxlength="2" class="form-control" placeholder="Masukkan Suhu Tubuh">
        </div>
        {{-- <div class="card-body">
         <p>Catatan</p> <textarea class="form-control" name="catatan" id="catatan" rows="3"></textarea>
        </div> --}}

         <div class="card-footer">
           <button type="submit" class="btn btn-primary float-right m-2">Tambah</button>
           <button type="reset" class="btn btn-warning float-right m-2">Batal</button>
         </div>
        </form>
      </div>

      <div class="section-body">
      </div>

    </section>
  </div>

  @else

  @endauth
  <script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < x   48 || charCode > 57))

        return false;
      return true;
    }
   </script>
@endsection

