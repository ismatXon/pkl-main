@extends('layouts.main')

@section('content')
@include('layouts.partials.assets')
@include('layouts.partials.filter')
@include('layouts.partials.navbar')
@include('layouts.partials.notif')


<div class="content">
  <div class="container">
    <div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><h4>
    Daftar Pengajuan PKL
  </h4>
  <div class="row">
    <div class="col-2">
      <form class="form-inline">
        <div class="input-group input-group-sm mb-3">
          <input type="text" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" aria-label="Small" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
        </div>
      </form>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-sm btn-light ps-1" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="#filterModal">
        <i class="fa-sharp fa-solid fa-filter"></i>
        Filter
      </button>
    </div>
    <div class="col-1 ps-1 me-5">
      <button type="button" class="btn btn-sm btn-light" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="">
        <i class="fa-sharp fa-solid fa-trash-can"></i>
        Hapus
      </button>
    </div>
    <div class="col-7" style="text-align: right;">
      <button type="button" class="btn btn-sm" style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;" onClick="create()">
        <i class="fa-solid fa-plus" style="color: white;"></i>
        Tambah Pengajuan
      </button>
    </div>
  </div>
  <table class="table table-sm table-striped table-light">
    <thead>
      <tr>
        <th scope="col">
          <input type="checkbox">
        </th>
        <th scope="col">Nama Perushaan</th>
        <th scope="col">Document</th>
        <th scope="col">Tanggal Dikirim</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($assets as $asset)
      <tr>
        <th scope="row">
          <input type="checkbox">
        </th>
        <td>{{ $asset->nama }}</td>
        <td>{{ $asset->jenis }}</td>
        <td>{{ $asset->harga }}</td>
        <td>
          @if($asset->status == 'aktif')
          <button type="button" class="btn btn-sm btn-outline-success" disabled>Diterima</button>
          @else 
          <button type="button" class="btn btn-sm btn-outline-danger" disabled>Ditolak</button>
          @endif
        </td>
        <td>
          <button type="button" class="btn btn-sm btn-primary">
          <i class="fa-solid fa-comment" style="color: white;"></i>
          </button>
          <button type="button" class="btn btn-sm btn-warning"  onClick="edit(this)" data-id="{{ $asset-> id}}" data-nama="{{ $asset->nama }}" data-jenis="{{ $asset->jenis }}" data-harga="{{ $asset->harga }}" data-status="{{ $asset->status }}">
            <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
          </button>
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
            <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <ul class="nav">
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        <i class="fa-solid fa-chevron-left"></i>
        Sebelumnya
      </button>
    </li>
    <li class="nav-item mx-3">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
       1
      </button>
    </li>
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        2
       </button>
    </li>
    <li class="nav-item mx-3">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        3
       </button>
    </li>
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
      Selanjutnya  
      <i class="fa-solid fa-chevron-right"></i>
        
      </button>
      <span class="text-secondary mx-3">4 dari 10 dokumen</span>
    </li>
  </ul>
  
 
 
  
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><h4>
    Daftar Siswa PKL
  </h4>
  <div class="row">
    <div class="col-2">
      <form class="form-inline">
        <div class="input-group input-group-sm mb-3">
          <input type="text" class="form-control" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" aria-label="Small" placeholder="Search" aria-describedby="inputGroup-sizing-sm">
        </div>
      </form>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-sm btn-light ps-1" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="#filterModal">
        <i class="fa-sharp fa-solid fa-filter"></i>
        Filter
      </button>
    </div>
    <div class="col-1 ps-1 me-5">
      <button type="button" class="btn btn-sm btn-light" style="font-weight: 800; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" data-bs-toggle="modal" data-bs-target="">
        <i class="fa-sharp fa-solid fa-trash-can"></i>
        Hapus
      </button>
    </div>
    <div class="col-7" style="text-align: right;">
      <button type="button" class="btn btn-sm" style="font-weight: 600; box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2); background-color: #0C5045; color: white;" onClick="create()">
        <i class="fa-solid fa-plus" style="color: white;"></i>
        Tambah
      </button>
    </div>
  </div>
  <table class="table table-sm table-striped table-light">
    <thead>
      <tr>
        <th scope="col">
          <input type="checkbox">
        </th>
        <th scope="col">Nama Siswa</th>
        <th scope="col">Kelas / Jurusan </th>
        <th scope="col">Tanggal Mulai</th>
        <th scope="col">Tanggal Berakhir</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($assets as $asset)
      <tr>
        <th scope="row">
          <input type="checkbox">
        </th>
        <td>{{ $asset->nama }}</td>
        <td>{{ $asset->jenis }}</td>
        <td>{{ $asset->harga }}</td>
        <td>{{ $asset->harga }}</td>
        <td>
          @if($asset->status == 'aktif')
          <button type="button" class="btn btn-sm btn-outline-primary" disabled>Aktif</button>
          @else 
          <button type="button" class="btn btn-sm btn-outline-danger" disabled>Selesai</button>
          @endif
        </td>
        <td>
          <button type="button" class="btn btn-sm btn-primary">
          <i class="fa-solid fa-comment" style="color: white;"></i>
          </button>
          <button type="button" class="btn btn-sm btn-warning"  onClick="edit(this)" data-id="{{ $asset-> id}}" data-nama="{{ $asset->nama }}" data-jenis="{{ $asset->jenis }}" data-harga="{{ $asset->harga }}" data-status="{{ $asset->status }}">
            <i class="fa-sharp fa-solid fa-pencil" style="color: white;"></i>
          </button>
          <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="">
            <i class="fa-sharp fa-solid fa-trash-can" style="color: white;"></i>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <ul class="nav">
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        <i class="fa-solid fa-chevron-left"></i>
        Sebelumnya
      </button>
    </li>
    <li class="nav-item mx-3">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
       1
      </button>
    </li>
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        2
       </button>
    </li>
    <li class="nav-item mx-3">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
        3
       </button>
    </li>
    <li class="nav-item">
      <button type="button" class="btn btn-sm btn-light" style="box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);" >
      Selanjutnya  
      <i class="fa-solid fa-chevron-right"></i>
        
      </button>
      <span class="text-secondary mx-3">10 dari 14 dokumen</span>
    </li>
  </ul>
  
 
 
  
</div>
</div>
  </div>
    
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </div>

  <!-- Modal -->
  <div class="modal" id="modal-assets" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modal-title"></h5>
        </div>
        <form action="{{ route('asset.store') }}" method="POST" id="form-aset">
          <div class="modal-body">
            
              @csrf
              <input type="hidden" name="id" id="input-id-asset">
              <div class="form-group mb-2">
                <label for="nama-asset">Nama Aset</label>
                <input type="text" class="form-control" id="input-nama-asset" placeholder="Masukan Nama Aset" name="nama">
              </div>
              <div class="form-group mb-2">
                <label for="jenis-asset">Jenis Aset</label>
                <input type="text" class="form-control" id="input-jenis-asset" placeholder="Masukan Jenis Aset" name="jenis">
              </div>
              <div class="form-group mb-2">
                <label for="harga-asset">Harga Aset</label>
                <input type="text" class="form-control" id="input-harga-asset" placeholder="Masukan Harga Aset" name="harga">
              </div>
              <div class="form-group mb-2">
                <label for="nama-asset">Status</label>
                <select class="form-control" id="input-status-asset" name="status">
                  <option value="aktif">Aktif</option>
                  <option value="tidak aktif">Tidak Aktif</option>
                </select>
              </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script>
    const modalForm = $('#modal-assets');
    function create() {
      $('#modal-title').text('Create Form');
      $('#input-id-asset').val("");
      $('#input-nama-asset').val("");
      $('#input-jenis-asset').val("");
      $('#input-harga-asset').val("");
      $("#input-status-asset").val("");
      modalForm.modal('show');
    }
    
    function closeModal() {
      console.log('heheh');
      $('#input-id-asset').val();
      $('#input-nama-asset').val();
      $('#input-jenis-asset').val();
      $('#input-harga-asset').val();
      $("#input-status-asset").val();
      modalForm.modal('hide');
    }
    
    function edit(e) {
      $('#modal-title').text('Edit Form');
      let id = $(e).data('id');
      let nama = $(e).data('nama');
      let harga = $(e).data('harga');
      let jenis = $(e).data('jenis');
      let status = $(e).data('status');
      $('#input-id-asset').val(id);
      $('#input-nama-asset').val(nama);
      $('#input-jenis-asset').val(jenis);
      $('#input-harga-asset').val(harga);
      $("#input-status-asset").val(status).change();
      modalForm.modal('show');
    }
</script>
@endsection