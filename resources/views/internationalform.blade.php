@extends('layouts.app')

@section('content')
<div class="container-fluid"> 
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

<div class="container">
	<b><h3>International Student Application Form</h3><br></b>
	<hr>
<form action="{{ url('internationalformsave') }}" method="post">
{{csrf_field()}}	
 <div class="row">
	<div class="col-sm-4">
	  <div class="form-group">
          <label>First Name:</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
          </div>
		</div>
		<div class="col-sm-4">
	  <div class="form-group">
          <label>Last Name:</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
          </div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
		<div class="form-group">
          <label>Date of Birth:</label>
            <input type="date" class="form-control" id="dob" name="dob">
          </div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
        <label>Age:</label>
           <input type="text" placeholder="Enter age" class="form-control" id="age" name="age">
          </div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			 <label>Gender:</label><br>
	         <label for="male">Male</label>
	         <input type="radio"  value="male" name="gender">
	         <label for="Female">Female</label>
	         <input type="radio"  value="female" name="gender">
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Country</label>
			<select class="form-control" name="country">
				<option>--select--</option>
				<option>America</option>
				<option>London</option>
				<option>China</option>
			</select>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Nationality</label>
			<input type="text" class="form-control" placeholder="Enter Nationality" name="nationality">
	    </div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label>Language spoken at home</label>
			<input type="text" class="form-control" placeholder="Enter Language " name="lang">
	    </div>
	</div>
</div>
<b><h3>Permanent Contact details</h3></b>
<hr>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Address</label>
			<textarea class="form-control" placeholder="Enter Address" rows="1" name="address">
			</textarea>
	    </div>
	</div>
	<div class="col-sm-4">
	<div class="form-group">
		<label>State</label>
		<input type="text" class="form-control" placeholder="Enter State " name="state">
	    </div>
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Postal/Zip code</label>
				<input type="text" class="form-control" placeholder="Enter Postal code " name="postal">
	    </div>
	   </div>
	   <div class="col-sm-4">
		<div class="form-group">
			<label>Email</label>
				<input type="email" class="form-control" placeholder="Enter Email " name="email">
	    </div>
	   </div>
	</div>
	<div class="row">
	<div class="col-sm-4">
		<div class="form-group">
			<label>Phone No</label>
				<input type="text" class="form-control" placeholder="Enter phoen Number " name="phone">
	    </div>
	   </div>
	   <div class="col-sm-4">
		<div class="form-group">
			<label>Name of Education Recruiter</label>
				<input type="text" class="form-control" placeholder="Enter Education Recruiter " name="ed">
	    </div>
	   </div>
	</div>
<div class="row">
	<div class="col-sm-4">	
	<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
</form>
</div>
@endsection
