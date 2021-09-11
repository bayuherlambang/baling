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
      <h6 class="m-0 font-weight-bold text-primary">@lang('quickadmin.users.title')</h6>
    </div>
    <div class="card-body">
        {!! Form::open(['method' => 'POST', 'route' => ['users.store']]) !!}
        {{ csrf_field() }}
        <div class="card">
            <div class="card-header">
                @lang('quickadmin.create')
            </div>

            <div class="card-body">
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
                      {!! Form::email('domain', old('domain'), ['class' => 'form-control', 'placeholder' => '']) !!}
                      <p class="help-block"></p>
                      @if($errors->has('email'))
                          <p class="help-block">
                              {{ $errors->first('email') }}
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
                </div>
                  {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
            </div>
        </div>

      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection
