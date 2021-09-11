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
        Add User
      </button><hr>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Domain</th>
              <th>Site</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>Nama</th>
              <th>Domain</th>
              <th>Site</th>
              <th>Role</th>
              <th>Action</th>
            </tr>
          </tfoot>
          <tbody>
            @if (count($users) > 0)
                @foreach ($users as $user)
                    <tr data-entry-id="{{ $user->id }}">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->domain }}</td>
                        <td>{{ $user->site->site or '' }}</td>
                        <td>{{ $user->role->title or '' }}</td>
                        <td>
                            <a href="{{ route('users.show',[$user->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.view')</a>
                            <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.edit')</a>
                            {!! Form::open(array(
                                'style' => 'display: inline-block;',
                                'method' => 'DELETE',
                                'onsubmit' => "return confirm('".trans("quickadmin.are_you_sure")."');",
                                'route' => ['users.destroy', $user->id])) !!}
                            {!! Form::submit(trans('quickadmin.delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">@lang('quickadmin.no_entries_in_table')</td>
                </tr>
            @endif
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
            dom: '<f><r>t<lip>',
            //"dom":'<Bflr<<'datesearchbox'>>tip>',
            buttons: [
                'copy', 'csv', 'excel', 'print'
            ],
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

    <div class="modal fade bd-example-modal-lg" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="m-0 font-weight-bold text-primary">@lang('quickadmin.users.title')</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {!! Form::open(['method' => 'POST', 'route' => ['users.store']]) !!}
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12 form-group">
                  {!! Form::label('name', 'Name*', ['class' => 'control-label']) !!}
                  {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '']) !!}
                  <p class="help-block"></p>
                  @if($errors->has('name'))
                      <p class="help-block">
                          {{ $errors->first('name') }}
                      </p>
                  @endif
                </div>
                <div class="col-md-12 form-group">
                  {!! Form::label('Domain', 'Domain*', ['class' => 'control-label']) !!}
                  {!! Form::text('domain', old('domain'), ['class' => 'form-control', 'placeholder' => '']) !!}
                  <p class="help-block"></p>
                  @if($errors->has('domain'))
                      <p class="help-block">
                          {{ $errors->first('domain') }}
                      </p>
                  @endif
                </div>
                <div class="col-md-12 form-group">
                  {!! Form::label('password', 'Password', ['class' => 'control-label']) !!}
                  {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '']) !!}
                  <p class="help-block"></p>
                  @if($errors->has('password'))
                      <p class="help-block">
                          {{ $errors->first('password') }}
                      </p>
                  @endif
                </div>
                <div class="col-md-12 form-group">
                  {!! Form::label('role_id', 'Role*', ['class' => 'control-label']) !!}
                  {!! Form::select('role_id', $roles, old('role_id'), ['class' => 'form-control']) !!}
                  <p class="help-block"></p>
                  @if($errors->has('role_id'))
                      <p class="help-block">
                          {{ $errors->first('role_id') }}
                      </p>
                  @endif
                </div>
                <div class="col-md-12 form-group">
                  {!! Form::label('site_id', 'Site*', ['class' => 'control-label']) !!}
                  {!! Form::select('site_id', $sites, old('site_id'), ['class' => 'form-control']) !!}
                  <p class="help-block"></p>
                  @if($errors->has('site_id'))
                      <p class="help-block">
                          {{ $errors->first('site_id') }}
                      </p>
                  @endif
                </div>
            </div>
              {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
              {!! Form::close() !!}
        </div>
      </div>
    </div>
@endsection
