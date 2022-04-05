@extends('layouts.main')

@section('tampilan')

<div class="main-content">
    <section class="section">
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
          <p>Lokasi</p> <input type="text" name="lokasi" class="form-control" placeholder="Masukkan Lokasi">
         </div>
         <div class="card-body">
          <p>Suhu</p> <input type="number" name="suhu" class="form-control" placeholder="Masukkan Suhu Tubuh">
         </div>
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
@endsection
