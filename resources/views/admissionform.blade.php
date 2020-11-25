@extends('layouts.app')
@section('content')


<div class="container" style="border: 1px solid grey; background-color:lightgrey; border-radius: 10px; ">
	<h4>Personal Details</h4>
	<a href="{{ url('admissionformread') }}" class="btn btn-primary">Student Details</a> <br>
	@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
	<hr>
	<form action="{{ url('admissionformsave') }}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="name">Name:</label>
                     <input type="text" class="form-control" id="text" placeholder="Enter Full Name" name="name">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="email">Email:</label>
                     <input type="email" class="form-control" id="text" placeholder="Enter Email" name="email">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="phone">Phone No:</label>
                     <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="name">Date of birth:</label>
                     <input type="text" class="form-control" id="dob" placeholder="Enter Date of birth" name="dob">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="phone">Address:</label>
                     <textarea class="form-control" placeholder="Enter Address" rows="1" name="address"></textarea>
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label>Gender:</label><br>
                   <label for="male">Male</label>
                     <input type="radio"  value="male" name="gender">
                     <label for="Female">Female</label>
                     <input type="radio"  value="female" name="gender">
                </div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="photo">Photo:</label>
                     <input type="file" class="form-control" id="" placeholder="Upload photo" name="photo">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="sign">Signature:</label>
                      <input type="file" class="form-control" id="" placeholder="Upload Signature
                      photo" name="sign">
                </div>
			</div>
		</div>
		<h4>Acedemic details</h4>
		<hr>
		<div class="row">
			<div class="col-sm-3">
				<div class="form-group">
                   <label for="name">College Name:</label>
                     <input type="text" class="form-control"  placeholder="Enter College Name" name="college_name">
                </div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
                   <label for="email">Branch:</label>
                     <select class="form-control" name="branch">
                     	<option>--select--</option>
                     	<option>BSC CS</option>
                     	<option>BSC IT</option>
                     </select>
                </div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
                   <label for="phone">Passing Year:</label>
                     <input type="text" class="form-control"  placeholder="Enter Passing Year" name="passing_year">
                </div>
			</div>
			  <div class="col-sm-3">
				<div class="form-group">
                   <label for="phone">College Address:</label>
                     <textarea class="form-control" placeholder="Enter College Address" name="clg_address" rows="1">                   	
                     </textarea>
                </div>	
			</div>
		</div>
		<h4>Documnets</h4>
		<hr>
		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="HSC">HSC Result:</label>
                     <input type="file" class="form-control"  placeholder="Upload HSC Result " name="hsc">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="scc">SSC Result:</label>
                     <input type="file" class="form-control"  placeholder="Upload SSC Result " name="ssc">
                </div>
			</div>
			<div class="col-sm-4">
				<div class="form-group">
                   <label for="phone">Leaving Certificate:</label>
                     <input type="file" class="form-control"  placeholder="Upload Leaving Certificate " name="leaving">
                </div>
		</div>
	</div>
		<div class="row">
			<div class="col-sm-2">	
		<button type="submit">Submit</button>
			</div>
		</div>
	</form>
</div>

@endsection
