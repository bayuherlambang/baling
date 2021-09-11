@extends('layouts.app')

@section('content')
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
<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">{{$title}}</h6>
    </div>
    <div class="card-body">
      <button type="button" class="modalCreate btn btn-primary" data-toggle="modal" data-target="#modalCreate">
        Add Status
      </button><hr>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Status</th>
              <th>Created by</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Status</th>
              <th>Created by</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @foreach($data as $d)
                <tr>
                  <td>{{$d->status}}</td>
                  <td>{{$d->created_by}}</td>
                  <td>{{$d->created_at}}</td>
                  <td>
                    <form action="{{route('status.destroy', $d->id)}}" method="POST">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type='submit' class='submit-btn btn btn-danger' onclick='return confirm("Hapus status?")'><i class="far fa-trash-alt icon-size"></i></button>
                    </form>

                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
<style>

</style>

<script type="text/javascript">

  $(document).ready(function() {
        var tabel = $('#dataTable').DataTable( {
            "dom":'<fltip>',
            columnDefs: [
             { type: 'date-eu', targets: 0 }
           ],
           order: [0, 'desc'],
            initComplete: function () {
              this.api().columns().every( function () {
                  var column = this;
                  var select = $('<select><option value=""></option></select>')
                      .appendTo( $(column.footer()).empty() )
                      .on( 'change', function () {
                          var val = $.fn.dataTable.util.escapeRegex(
                              $(this).val()
                          );

                          column
                              .search( val ? '^'+val+'$' : '', true, false )
                              .draw();
                      } );
                  column.data().unique().sort().each( function ( d, j ) {
                      select.append( '<option value="'+d+'">'+d+'</option>' )
                  } );
              });
          },
        });
      });
</script>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form method="post" action="{{ route('status.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="status" class="form-control form-control-user" placeholder="Nama Status" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
@endsection
