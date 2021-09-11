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
        <form method="post" action="{{ route('agent.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Agent" required>
            </div>
            <div class="form-group">
              <input type="text" name="nama_crm" class="form-control form-control-user" placeholder="Nama CRM Agent" required>
            </div>
          <button type="submit" class="btn btn-primary">
              Simpan
          </button>
        </form>
        <hr>
        <label>Atau import dari Excel</label>
        <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 10px;" action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
      		{{ csrf_field() }}
      		<input type="file" name="import_file" />
      		<button class="btn btn-primary">Import File</button>
      	</form>
        <hr>

        </div>
      </div>
        <!-- #END# Widgets -->
    </div>
@endsection
