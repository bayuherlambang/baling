@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
        </div>
        <div class="card-body">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
          @endif
          @if($message = Session::get('success'))
      		<div class="alert alert-info alert-dismissible fade in" role="alert">
      	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      	        <span aria-hidden="true">×</span>
      	      </button>
      	      <strong>Success!</strong> {{ $message }}
      	    </div>
      	@endif
        <form method="post" action="{{ route('peminjamanuser.store') }}">
            {{ csrf_field() }}
          <div class="form-row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="small mb-1"> Nama Peminjam*</label>
                      <input class="form-control" name="nama_peminjam" id="nama_peminjam" type="text" placeholder="Masukan Nama Peminjam" required/>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="small mb-1" >Pemilik User*</label>
                      <!-- <input class="form-control py-4" name="agent" type="text" id="agent" placeholder="Masukan nama CRM CCO" required/> -->
                      <input class="form-control " name="pemilik_user" id="pemilik_user" type="text" placeholder="Masukan Pemilik User" required/>

                  </div>
              </div>
          </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Aplikasi*</label>
                        <input class="form-control " name="aplikasi" id="aplikasi" type="text" placeholder="Aplikasi user yang dipinjam" required />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">User ID</label>
                        <input class="form-control " name="userid" id="userid" type="text" placeholder="Masukan user ID yang akan dipinjam"/>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Alasan Pinjam*</label>
                        <input class="form-control py-4" name="reason" id="reason" type="text" placeholder="" required/>
                    </div>
                </div>
            </div>


            <!-- <button type="submit" class="btn btn-primary btn-block">
                Simpan Berita Acara
            </button> -->
            <button type="button" class="modalKonfirmasi btn btn-primary btn-block" data-toggle="modal" data-target="#modalKonfirmasi">
              Simpan Berita Acara
            </button>
        <!-- </form> -->
        <hr>
        </div>
      </div>
        <!-- #END# Widgets -->
    </div>
    <script type="text/javascript">
      $(document).on("click", ".modalKonfirmasi", function () {
          var nama_peminjam=$('#nama_peminjam').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-nama_peminjam"]').val(nama_peminjam); //set the valu
          $("#label_nama_peminjam").text(nama_peminjam);

          var pemilik_user=$('#pemilik_user').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-pemilik_user"]').val(pemilik_user); //set the valu
          $("#label_pemilik_user").text(pemilik_user);

          var aplikasi=$('#aplikasi').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-aplikasi"]').val(aplikasi); //set the valu
          $("#label_aplikasi").text(aplikasi);

          var userid=$('#userid').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-userid"]').val(userid); //set the valu
          $("#label_userid").text(userid);

          var reason=$('#reason').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-reason"]').val(reason); //set the valu
          $("#label_reason").text(reason);

      });
    </script>

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="modalKonfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="{{ route('peminjamanuser.store') }}">
          <div class="modal-body">
            <div class="row">
              <!-- {{ csrf_field() }} -->
              <div class="col-md-6">
                <div class="form-group">
                      <label class="control-label">Nama Peminjam : </label>
                      <label id="label_nama_peminjam" class="control-label"></label>
                      <input name="modal-nama_peminjam" id="modal-nama_peminjam" type="text" style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Pemilik User : </label>
                      <label id="label_pemilik_user" class="control-label"></label>
                      <input name="modal-pemilik_user" id="modal-pemilik_user" type="text"  style="display: none;"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                      <label class="control-label">Aplikasi : </label>
                      <label id="label_aplikasi" class="control-label"></label>
                      <input name="modal-aplikasi" id="modal-aplikasi" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">User ID : </label>
                      <label id="label_userid" class="control-label"></label>
                      <input name="modal-userid" id="modal-userid" type="text"  style="display: none;"/>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                      <label class="control-label">Alasan Pinjam : </label>
                      <label id="label_reason" class="control-label"></label>
                      <input name="modal-reason" id="modal-reason" type="text" style="display: none;"/>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
        </div>
      </div>
    </div>


@endsection
