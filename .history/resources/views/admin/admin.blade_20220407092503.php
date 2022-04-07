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
            {{ Auth::user()->name }}
          </div>
        </div>
      </div>
    </div>

        </div>

        <div class="card">
            <div class="card-header">
              <h4>Peduli Diri</h4>
              {{-- <a href="/login" class="btn btn-outline-primary"><i class="fas fa-sign-in-alt"></i> Login</a> --}}
            </div>
            <div class="card-body">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/img/news/img01.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/news/img07.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/news/img08.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Sebelumnya</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Selanjutnya</span>
                </a>
              </div>
            </div>
          </div>
        @else
        <div class="card">
            <div class="card-header">
              <h4>Login Untuk Melanjutkan</h4>
              <a href="/login" class="btn btn-outline-primary"><i class="fas fa-sign-in-alt"></i> Login</a>
            </div>
            <div class="card-body">
              <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="../assets/img/news/img01.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/news/img07.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="../assets/img/news/img08.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        {{-- <img src="../assets/img/travel.jpg" width="1210"> --}}
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
