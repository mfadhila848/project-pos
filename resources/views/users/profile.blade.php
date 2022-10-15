@extends('templates.layout')

@push('styles')
    
@endpush

@section('title')
  <title>Profil Pegawai Page | Nama Perusahaan</title>
@endsection

@section('contents')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Profil Pegawai Page</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Profil Pegawai Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Profil Pegawai</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <form action="" method="POST">
                @csrf
                <div id="method"></div>
                <div class="form-group row">
                    <div class="form-group" style="width: 95%; margin: auto;">
                        <label for="nama">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama" placeholder="Nama Pegawai" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group" style="width: 95%; margin: auto;">
                        <label for="alamat">Alamat Pegawai</label>
                        <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group" style="width: 95%; margin: auto;">
                        <label for="tlp">Telepon</label>
                        <input type="text" class="form-control" id="tlp" placeholder="Telepon" name="tlp">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="form-group" style="width: 95%; margin: auto;">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" id="btn-submit" style="margin-left: 0.25rem;">Simpan Data</button>
            </form>
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection