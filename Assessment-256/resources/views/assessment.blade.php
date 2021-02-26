@extends('layouts.appmaster') @section('title', 'Add Customer')
@section('content')
<form action="{{route('checkUser')}}" method="post">
	{{ csrf_field() }}
	<div>
		<!-- Begin Demo Table -->
		<div class="demo-table">

			<div class="form-head">Check User Properties</div>
			<!-- Begin First Name -->
			<div class="field-column">
				<div>
					<input name="firstName" id="firstName" type="text"
						class="demo-input-box" placeholder="First Name">
				</div>
			</div>
			<!-- End First Name -->
			<!-- Begin Last Name -->
			<div class="field-column">
				<div>
					<input name="lastName" id="lastName" type="text"
						class="demo-input-box" placeholder="Last Name">
				</div>
			</div>
			<!-- End Last Name -->
			<!-- Begin Username -->
			<div class="field-column">
				<div>
					<input name="username" id="username" type="text"
						class="demo-input-box" placeholder="Username">
				</div>
			</div>
			<!-- End Username -->
			<!-- Begin Password -->
			<div class="field-column">
				<div>
					<input name="password" id="password" type="text"
						class="demo-input-box" placeholder="Password">
				</div>
			</div>
			<!-- End Password -->
		</div>
		<!-- End Demo Table -->
		<div class="field-column">
			<input type="submit" class="button">
		</div>
	</div>
</form>
@if(isset($result))
@if ($result == false)
			<p style="color: red;">User Properties Did Not Contain 'CST-256'</p>
			<p style="color: red;">Username: {{$username}}</p>
			<p style="color: red;">Password: {{$password}}</p>
			<p style="color: red;">First Name: {{$firstName}}</p>
			<p style="color: red;">Last Name: {{$lastName}}</p>
		@else
			<p style="color: green;">'CST-256' Detected in the User Properties</p>
			<p style="color: green;">Username: {{$username}}</p>
			<p style="color: green;">Password: {{$password}}</p>
			<p style="color: green;">First Name: {{$firstName}}</p>
			<p style="color: green;">Last Name: {{$lastName}}</p>
		@endif
@endif
@endsection
