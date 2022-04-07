
@extends('layouts.main')

@section('tampilan')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
 @auth
 <div class="row">
    <div class="col-lg-3 col-md-2 col-sm-2 col-6">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
          <i class="far fa-user"></i>
        </div>
        <div class="card-wrap">
          <div class="card-header">
            <h4>Users</h4>
          </div>
          <div class="card-body">
            {{-- {{ Auth::user()->name }} --}}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-2 col-sm-2 col-6">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="far fa-solid fa-square-pen"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Tambah</h4>
            </div>
            <div class="card-body">
              <a href="/add-travel">Catatan</a>
            </div>
          </div>
        </div>
      </div>

        </div>
        @else
        <img src="../assets/img/travel.jpg" width="1000">
 @endauth

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
