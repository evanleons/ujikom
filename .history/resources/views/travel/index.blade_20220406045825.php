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
            @
        @endauth
  </div>
</div>
      </div>

@endsection
