@extends('layout.master')
@section('content')
<section class="content">
<h2>Data Kategori</h2>
<br>
<div class="box box-info">
  <div class="box-header">
      <h3 class="box-title">Data Kategori Film</h3>
  </div>
  <form action="" method="GET">
    <div class="box-body">
      <div class="row">
        <div class="col-xs-5">
          <div class="input-group">
            <input type="text" class="form-control" name="keyword" placeholder="Search">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-info">Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

 <div class="box-body">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
      Tambah Data
    </button>
    <br>
    <br>
  <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Form Input Data Kategori</h4>
              </div>
              <div class="modal-body">
                   <form class="form-horizontal" action="/inputdata/store" method="post">
                      {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_kategori" placeholder="Nama Kategori">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Slug</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="slug" placeholder="Slug">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Waktu Posting</label>

                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="waktu_posting" placeholder="Waktu Posting">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info pull-right" >Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
              </div>
            
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
<table class="table table-bordered">

<thead>
        <tr>
            <td>ID Kategori</td>
            <td>Nama Kategori</td>
            <td>Slug</td>
            <td>Tanggal Input</td>
            <td>Aksi</td>
        </tr>
        </thead>
        <tbody>
@foreach ($varKategori as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama_kategori }}</td>
            <td>{{ $row->slug }}</td>
            <td>{{ $row->waktu_posting }}</td>
            <td><a href="/kategoriedit/edit/{{ $row->id }}">Edit</a>
                | <a href="/hapus/destroy/{{ $row->id }}">Hapus</a>
            </td>    
        </tr> 
        @endforeach
        </tbody>
        </table>
        
            </div>
            <!-- /.box-body -->
          </div>
        </section>

@endsection