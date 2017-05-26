@extends('master')

@section('content')
@if(count($errors))
  <div class="alert">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
{!! Form::open(array('route' => 'users.store', 'id' => 'result')) !!}
  <p>A blog made by you,<br>Just for you.</p>
  <div class="form-group">
    {{ Form::text('firstname', null, array("class" => "form-control", "placeholder" => "First Name" ))}}
  </div>
  <div class="form-group">
    {{ Form::text('lastname', null, array("class" => "form-control", "placeholder" => "Last Name" ))}}
  </div>
  <div class="form-group">
    {{ Form::text('email', null, array("class" => "form-control", "placeholder" => "Email Address" ))}}
  </div>
  <div class="form-group">
    {{ Form::text('username', null, array("class" => "form-control", "placeholder" => "Username" ))}}
  </div>
  <div class="form-group">
    {{ Form::text('password', null, array("class" => "form-control", "placeholder" => "Password" ))}}
  </div>
  <div class="form-group">
    {!! Form::label('Upload A Profile Picture') !!}
    {!! Form::file('image', null) !!}
  </div>
  {!! Form::token() !!}
  {{ Form::submit("Join Waffle", array("class" => "btn btn-default signup")) }}
  <div class="clearfix"></div>
{!! Form::close() !!}
@endsection
