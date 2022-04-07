<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <img src="../assets/img/book.svg" alt=""><a href="#">Peduli Diri</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <img src="../assets/img/book.svg" alt="">
      </div>
      <ul class="sidebar-menu">


          <li><a class="nav-link" href="#"><i class="fas fa-th-large"></i> <span>Dashboard</span></a></li>
          @auth
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown"><i class="far fa-sticky-note"></i> <span>Catatan Perjalanan</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/list-travel"><i class="far fa-file-alt"></i>List Catatan</a></li>
              <li><a class="nav-link" href="/add-travel"><i class="far fa-solid fa-square-pen"></i>Tambah Catatan</a></li>
            </ul>
          </li>
              @else
          @endauth




        </div>
    </aside>
  </div>
