@extends('layouts.main')

@section('tampilan')

<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Riwayat Perjalanan</h1>
        <div class="section-header-button">
            <a href="/add-travel" class="btn btn-primary">Add New</a>
          </div>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/list-travel">Riwayat Perjalanan</a></div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
          </div>
        @auth
        <div class="table-responsive p-3">
            <table class="table align-items-center table-bordered" id="dataTable">
        <thead class="thead-dark">
            <tr>
                <th style="color: rgb(101, 93, 175);">NO</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Suhu Tubuh</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php $i=0 @endphp
            @foreach ($travels as $travel)


            @php
                $i++
            @endphp

            <tr>
                <td>{{ $i }}</td>
                <td>{{ $travel->jam }}</td>
                <td>{{ $travel->tanggal }}</td>
                <td>{{ $travel->lokasi }}</td>
                <td>{{ $travel->suhu }}°C</td>
                <td>
                    <form method="POST" action="{{ route( 'travel.destroy',$travel->id) }}">
                        @csrf
                        @method('DELETE')
                  {{-- <a href="#" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></a> --}}
                  <button type="submit" class="btn btn-icon btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
        </tfoot>
    </table>
            @else
        @endauth
  </div>
</div>
      </div>

@endsection
