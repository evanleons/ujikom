
@extends('layouts.main')

@section('tampilan')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>

<div class="row justify-content-flex">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Users</h4>
          </div>
          <div class="card-body">
            {{ Auth::user()->name }}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i href="tam" class="far fa-solid fa-square-pen"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Tambah</h4>
            </div>
            <div class="card-body">
              Catatan
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </div>
    {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
          <i class="fas fa-circle"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Online Users</h4>
          </div>
          <div class="card-body">
            47
          </div>
        </div>
      </div>
    </div> --}}
  </div>

@endsection
