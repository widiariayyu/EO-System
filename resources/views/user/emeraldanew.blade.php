@extends('layouts.main')

@section('content')

<div class="container">
	<h2>Birthday Party</h2>
 
	<div class="row">
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Lights" style="width:100%">				
					<div class="caption">
						<span>d-inline</span>
						<button onclick="window.location.href='{{ url('user.BirthdayOrder') }}'" class="btn btn-primary">Order</button>
					</div>
			</a>
		</div>
		</div>
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Nature" style="width:100%">
			<div class="caption">
				<button type="submit" class="btn btn-primary">Order</button>
			</div>
			</a>
		</div>
		</div>
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Fjords" style="width:100%">
			<div class="caption">
				<button type="submit" class="btn btn-primary">Order</button>
			</div>
			</a>
		</div>
		</div>
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Lights" style="width:100%">
			<div class="caption">
				<button type="submit" class="btn btn-primary">Order</button>
			</div>
			</a>
		</div>
		</div>
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Nature" style="width:100%">
			<div class="caption">
				<button type="submit" class="btn btn-primary">Order</button>
			</div>
			</a>
		</div>
		</div>
		<div class="col-md-4">
		<div class="thumbnail">
			<a href="#" target="_blank">
			<img src="{{asset('theme/img/wedding.jpg')}}" alt="Fjords" style="width:100%">
			<div class="caption">
				<button type="submit" class="btn btn-primary">Order</button>
			</div>
			</a>
		</div>
		</div>
		
	</div>
	</div>
@endsection