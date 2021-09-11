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
        <form method="post" action="{{ route('perubahanstatus.store') }}">
            {{ csrf_field() }}
          <div class="form-row">
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="small mb-1" for="inputPassword">ID Laporan*</label>
                      <input class="form-control " name="request_id" id="request_id" type="text" placeholder="Masukan ID Laporan" required/>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                      <label class="small mb-1" for="inputConfirmPassword">Nama Agent*</label>
                      <!-- <input class="form-control py-4" name="agent" type="text" id="agent" placeholder="Masukan nama CRM CCO" required/> -->
                      <input list="data_agent" name="agent" id="agent" class="form-control " placeholder="Masukan nama CRM CCO" />
                      <datalist id="data_agent">
                        @foreach ($dataAgent as $d)
                            <option value="{{$d->nama_crm}}">
                        @endforeach
                      </datalist>
                  </div>
              </div>
          </div>
            <div class="form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Costumer*</label>
                        <input class="form-control " name="costumer" id="costumer" type="text" placeholder="Masukan nama nasabah" required />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">No Costumer</label>
                        <input class="form-control " name="no_costumer" id="no_costumer" type="text" placeholder="Masukan No Costumer"/>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">No Rekening</label>
                        <input class="form-control " name="no_rekening" id="no_rekening" type="text" placeholder="Masukan No Rekening" />
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">No Kartu*</label>
                        <input class="form-control " name="no_kartu" id="no_kartu" type="text" placeholder="Masukan No Kartu" required/>
                    </div>
                </div>

            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="inputPassword">Product*</label>
                        <!-- <input class="form-control py-4" name="product" id="product" type="text" placeholder="Masukan Product" required/> -->
                        <input list="product-list" name="product" id="product" class="form-control " placeholder="Masukan Product" required/>
                        <datalist id="product-list">
                          @foreach ($dataProduct as $d)
                              <option value="{{$d->product}}">
                          @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="inputConfirmPassword">Category*</label>
                        <!-- <input class="form-control py-4" name="category" id="category" type="text" placeholder="Masukan Category" required/> -->
                        <input list="category-list" name="category" id="category" class="form-control " placeholder="Masukan Category" required/>
                        <datalist id="category-list">
                          @foreach ($dataCategory as $d)
                              <option value="{{$d->category}}">
                          @endforeach
                        </datalist>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Status*</label>
                        <!-- <input class="form-control " name="status" id="status" type="text" placeholder="Masukan status" required /> -->
                        <input list="status-list" name="status" id="status" class="form-control " type="text" placeholder="Masukan status" required/>
                        <datalist id="status-list">
                          @foreach ($dataStatus as $d)
                              <option value="{{$d->status}}">
                          @endforeach
                        </datalist>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Transaction Date*</label>
                        <input class="form-control" name="transaction_date" id="transaction_date" type="date" required/>

                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="small mb-1" for="inputLastName">Transaction Time*</label>
                      <input class="form-control" name="transaction_time" id="transaction_time" type="time" required/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="small mb-1" for="inputFirstName">Owner*</label>
                        <!-- <input class="form-control py-4" name="owner" id="owner" type="text" placeholder="Masukan owner laporan" required/>-->
                          <input list="data_agent" name="owner" id="owner" class="form-control " placeholder="Masukan owner laporan" />
                            <datalist id="data_agent">
                            @foreach ($dataAgent as $d)
                              <option value="{{$d->nama_crm}}">
                            @endforeach
                            </datalist>
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
          var request_id=$('#request_id').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-request_id"]').val(request_id); //set the valu
          $("#label_req_id").text(request_id);

          var agent=$('#agent').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-agent"]').val(agent); //set the valu
          $("#label_agent").text(agent);

          var agent=$('#agent').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-agent"]').val(agent); //set the valu
          $("#label_agent").text(agent);

          var costumer=$('#costumer').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-costumer"]').val(costumer); //set the valu
          $("#label_costumer").text(costumer);

          var no_costumer=$('#no_costumer').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-no_costumer"]').val(no_costumer); //set the valu
          $("#label_no_costumer").text(no_costumer);

          var no_rekening=$('#no_rekening').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-no_rekening"]').val(no_rekening); //set the valu
          $("#label_no_rekening").text(no_rekening);

          var no_kartu=$('#no_kartu').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-no_kartu"]').val(no_kartu); //set the valu
          $("#label_no_kartu").text(no_kartu);

          var product=$('#product').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-product"]').val(product); //set the valu
          $("#label_product").text(product);

          var category=$('#category').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-category"]').val(category); //set the valu
          $("#label_category").text(category);

          var status=$('#status').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-status"]').val(status); //set the valu
          $("#label_status").text(status);

          var transaction_date=$('#transaction_date').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-transaction_date"]').val(transaction_date); //set the valu
          $("#label_transaction_date").text(transaction_date);
          console.log(transaction_date);

          var transaction_time=$('#transaction_time').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-transaction_time"]').val(transaction_time); //set the valu
          $("#label_transaction_time").text(transaction_time);

          var owner=$('#owner').val(); //get the value..
          $("#modalKonfirmasi").find('input[name="modal-owner"]').val(owner); //set the valu
          $("#label_owner").text(owner);
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
          <div class="modal-body">
            <div class="row">
              <!-- <form method="post" action="{{ route('perubahanstatus.store') }}">
              {{ csrf_field() }} -->
              <div class="col-md-6">
                <div class="form-group">
                      <label class="control-label">Request ID : </label>
                      <label id="label_req_id" class="control-label"></label>
                      <input name="modal-request_id" id="modal-request_id" type="text" style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Agent : </label>
                      <label id="label_agent" class="control-label"></label>
                      <input name="modal-agent" id="modal-agent" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Costumer : </label>
                      <label id="label_costumer" class="control-label"></label>
                      <input name="modal-costumer" id="modal-costumer" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">No Costumer : </label>
                      <label id="label_no_costumer" class="control-label"></label>
                      <input name="modal-no_costumer" id="modal-no_costumer" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">No Rekening : </label>
                      <label id="label_no_rekening" class="control-label"></label>
                      <input name="modal-no_rekening" id="modal-no_rekening" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">No Kartu : </label>
                      <label id="label_no_kartu" class="control-label"></label>
                      <input name="modal-no_kartu" id="modal-no_kartu" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Product : </label>
                      <label id="label_product" class="control-label"></label>
                      <input name="modal-product" id="modal-product" type="text"  style="display: none;"/>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                      <label class="control-label">Category : </label>
                      <label id="label_category" class="control-label"></label>
                      <input name="modal-category" id="modal-category" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Status : </label>
                      <label id="label_status" class="control-label"></label>
                      <input name="modal-status" id="modal-status" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Transaction Date : </label>
                      <label id="label_transaction_date" class="control-label"></label>
                      <input name="modal-transaction_date" id="modal-transaction_date" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Transaction Time : </label>
                      <label id="label_transaction_time" class="control-label"></label>
                      <input name="modal-transaction_time" id="modal-transaction_time" type="text"  style="display: none;"/>
                </div>
                <div class="form-group">
                      <label class="control-label">Owner : </label>
                      <label id="label_owner" class="control-label"></label>
                      <input name="modal-owner" id="modal-owner" type="text"  style="display: none;"/>
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
