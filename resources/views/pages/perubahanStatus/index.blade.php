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
        {!! Session::forget('success') !!}
        <div class="table-responsive">
          <table class="stripe" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>ID</th>
                <th>Agent</th>
                <th>Request ID</th>
                <th>Costumer</th>
                <th>No Kartu</th>
                <th>No Costumer</th>
                <th>No Rekening</th>
                <th>Product</th>
                <th>Category</th>
                <th>Status</th>
                <th>Transaction Time</th>
                <th>Created On</th>
                <th>Owner</th>
                <th>Status Approve</th>
                <!-- <th>Action</th> -->
              </tr>
            </thead>
            <tfoot>
              <tr>
                <th>ID</th>
                <th>Agent</th>
                <th>Request ID</th>
                <th>Costumer</th>
                <th>No Kartu</th>
                <th>No Costumer</th>
                <th>No Rekening</th>
                <th>Product</th>
                <th>Category</th>
                <th>Status</th>
                <th>Transaction Time</th>
                <th>Created On</th>
                <th>Owner</th>
                <th>Status Approve</th>
                <!-- <th>Action</th> -->
              </tr>
            </tfoot>
            <tbody>
              @php
              $i=1;
              @endphp
              @foreach($data as $d)
                  <tr>
                    <td>{{$d->id}}</td>
                    <td>{{$d->agent}}</td>
                    <td>{{$d->request_id}}</td>
                    <td>{{$d->costumer}}</td>
                    <td>{{$d->no_kartu}}</td>
                    <td>{{$d->no_costumer}}</td>
                    <td>{{$d->no_rekening}}</td>
                    <td>{{$d->product}}</td>
                    <td>{{$d->category}}</td>
                    <td>{{$d->status}}</td>
                    <td>{{$d->transaction_time}}</td>
                    <td>{{$d->created_on}}</td>
                    <td>{{$d->owner}}</td>
                    <th>{{$d->approveName}}</th>
                    <!-- <td>
                      <form action="{{route('perubahanstatus.destroy', $d->id)}}" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type='submit' class='submit-btn btn btn-danger' onclick='return confirm("Hapus BA?")'><i class="far fa-trash-alt icon-size"></i></button>
                      </form>
                    </td> -->
                  </tr>
                  @php
                  $i++;
                  @endphp
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
  </div>
    <!-- #END# Widgets -->
</div>
<style>

</style>

<script type="text/javascript">
//current month :
var date = new Date();
m = date.getMonth();
y = date.getFullYear();
//fungsi untuk filtering data berdasarkan tanggal
//var start_date = '1/'+m+'/'+y;
//var end_date = '31/'+m+'/'+y;
var start_date;
var end_date;
var DateFilterFunction = (function (oSettings, aData, iDataIndex) {
  var dateStart = parseDateValue(start_date);
  var dateEnd = parseDateValue(end_date);
  //Kolom tanggal yang akan kita gunakan berada dalam urutan 2, karena dihitung mulai dari 0
  //nama depan = 0
  //nama belakang = 1
  //tanggal terdaftar =2
  var evalDate= parseDateValue(aData[11]);
    if ( ( isNaN( dateStart ) && isNaN( dateEnd ) ) ||
         ( isNaN( dateStart ) && evalDate <= dateEnd ) ||
         ( dateStart <= evalDate && isNaN( dateEnd ) ) ||
         ( dateStart <= evalDate && evalDate <= dateEnd ) )
    {
        return true;
    }
    return false;
});

// fungsi untuk converting format tanggal dd/mm/yyyy menjadi format tanggal javascript menggunakan zona aktubrowser
function parseDateValue(rawDate) {
  console.log(rawDate);
  var dateArray= rawDate.split("/");
  var parsedDate= new Date(dateArray[2], parseInt(dateArray[1])-1, dateArray[0]);  // -1 because months are from 0 to 11
  return parsedDate;
}
$(document).ready(function() {
      var tabel = $('#dataTable').DataTable( {
          dom: '<Bf><"datesearchbox"><r>t<lip>',
          //"dom":'<Bflr<<'datesearchbox'>>tip>',
          buttons: [
              'copy', 'csv', 'excel', 'print'
          ],
          columnDefs: [
           { type: 'date-eu', targets: 11 }
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
      //menambahkan daterangepicker di dalam datatables
     $("div.datesearchbox").html('<div class="input-group"> <div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar" aria-hidden="true"></i></span></div><input type="text" class="" style="position: relative;width:25%" id="datesearch" placeholder="Search by date range.."></div>');

     document.getElementsByClassName("datesearchbox")[0].style.textAlign = "right";

     //konfigurasi daterangepicker pada input dengan id datesearch
     $('#datesearch').daterangepicker({
        autoUpdateInput: false
      });

     //menangani proses saat apply date range
      $('#datesearch').on('apply.daterangepicker', function(ev, picker) {
         $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
         start_date=picker.startDate.format('DD/MM/YYYY');
         end_date=picker.endDate.format('DD/MM/YYYY');
         $.fn.dataTableExt.afnFiltering.push(DateFilterFunction);
         tabel.draw();
      });

      $('#datesearch').on('cancel.daterangepicker', function(ev, picker) {
        $(this).val('');
        start_date='';
        end_date='';
        $.fn.dataTable.ext.search.splice($.fn.dataTable.ext.search.indexOf(DateFilterFunction, 1));
        tabel.draw();
      });
    });
    </script>

@endsection
