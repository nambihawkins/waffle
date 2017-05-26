@extends('master')

@section('content')
  <h1>Contact Us</h1>

  <div class="row">
	<div class="col-md-4 info">
		<p>Address: 2 15th St NW, Washington, DC 20024</p>
		<p>Phone: 123-456-7890</p>
		<p>Email Address: care&#64;waffle.com</p>
		<br>
		<p>Office Hours:
		<br>
		Monday - 8am-7pm
		<br>
		Tuesday - 9am-5pm
		<br>
		Wednesday - 9am-5pm
		<br>
		Thursday - 9am-5pm
		<br>
		Friday - 8am-7pm
		<br>
		Saturday - 8am-7pm
		<br>
		Sunday - closed
		<br>
		</p>
	</div>
	<div class="col-md-6 col-md-offset-1 map" style="width: 500px; height: 500px;">
	
		{!! Mapper::render() !!}
	</div>
</div>
@endsection
