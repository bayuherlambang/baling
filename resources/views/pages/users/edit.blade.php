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
      <h6 class="m-0 font-weight-bold text-primary">Edit User</h6>
    </div>
    <div class="card-body">
        {!! Form::model($user, ['method' => 'PUT', 'route' => ['users.update', $user->id]]) !!}
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                @lang('quickadmin.edit')
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label class="control-label">Name* : </label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control form-control-user" placeholder="Nama Role" required>
                        <p class="help-block"></p>
                        @if($errors->has('name'))
                            <p class="help-block">
                                {{ $errors->first('name') }}
                            </p>
                        @endif
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="control-label">Domain* : </label>
                        <input type="text" name="domain" value="{{$user->domain}}" class="form-control form-control-user" placeholder="Domain" required>
                        <p class="help-block"></p>
                        @if($errors->has('domain'))
                            <p class="help-block">
                                {{ $errors->first('domain') }}
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
                  <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>

      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
