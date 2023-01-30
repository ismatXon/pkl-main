<div class="fixed-top">
  <nav class="navbar navbar-expand-lg">
    <div class="container">

      {{-- Navbar Brand --}}
      <a class="navbar-brand" href="/">
        <div class="brand-container">
          <img src="{{ url('img/logo.png') }}" class="brand" alt="AL Ittihad" />
        </div>
        <div class="brand-caption">
          <p class="title">Aplikasi PKL</p>
          <p class="caption">SMK Al - Ittihad - Cianjur</p>
        </div>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse nav-pills mb-3" id="pills-tab" role="tablist" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pengajuan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Magang</a>
          </li>
          <li class="nav-item mx-2">
            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="">
              <i class="fa-sharp fa-solid fa-bell"></i><span class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle"><span class=" visually-hidden">unread messages</span></span>
            </button>
          </li>
         
        </ul>
        <button class="btn bg-primary text-white rounded-pill mx-2 px-3" data-bs-toggle="modal" data-bs-target="#loginModal">
          A
        </button>
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li>
              <button type="button" class="dropdown-item btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-right-from-bracket"></i>
                Sign out
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>