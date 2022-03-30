@extends('layouts.main')

@section('tampilan')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Riwayat Perjalanan</h1>
        <div class="section-header-button">
            <a href="/tambah" class="btn btn-primary">Add New</a>
          </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/list-travel">Riwayat Perjalanan</a></div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Hai, Yang Baca ;)</h6>
          </div>
          <div class="table-responsive p-3">
            <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-dark">
            <tr>
                <th style="color: rgb(71, 53, 235);">NO</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Suhu Tubuh</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $i=0 @endphp
            @foreach ($travels as $travel)
            @foreach ( as )

            @endforeach
            @php
                $i++
            @endphp

            <tr>
                <td>1</td>
                <td>192003097278</td>
                <td>Bambank</td>
                <td>02:00</td>
                <td>2011/04/25</td>
                <td>39 C</td>
                <td>
                  <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $users->nik }}</td>
                <td>{{ $travel->tanggal }}</td>
                <td>{{ $travel->jam }}</td>
                <td>{{ $travel->lokasi }}</td>
                <td>{{ $travel->suhu }}</td>
                <td>
                  <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>192003097278</td>
                <td>Bambank</td>
                <td>02:00</td>
                <td>2011/04/25</td>
                <td>39 C</td>
                <td>
                  <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            <tr>
              <td>5</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td>7</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td>8</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td>9</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            <tr>
              <td>12</td>
              <td>192003097278</td>
              <td>Atou</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            <tr>
              <td>12</td>
              <td>192003097278</td>
              <td>Udin</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr>
              <td>13</td>
              <td>192003097278</td>
              <td>Bambank</td>
              <td>02:00</td>
              <td>2011/04/25</td>
              <td>39 C</td>
              <td>
                <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>

            @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
  </div>
</div>
      </div>

@endsection
