@extends('layouts.app')

@section('content')

<div class="container">
	@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif
	
  <form id="form" action="{{ url('scholarshipsave') }}" method="post" style="border: 1px solid black;padding: 10px;border-radius: 10px; background-color: lightgrey;">
    {{csrf_field()}}
    <div class="row">
      <div class="col-sm-6">
    	<div class="form-group">
          <label for="name">Student Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
       </div>
   </div>
   <div class="col-sm-6">
    	<div class="form-group">
          <label for="schoarship">Schoarship Amout:</label>
            <input type="text" class="form-control"  placeholder="Enter Amout" name="amout">
       </div>
   </div>
 </div> 

<h4>Requirement document for scholarship</h4>
<hr>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Income certificate</label>
			<input type="file" class="form-control"  name="income">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Domicile certificate</label>
			<input type="file" class="form-control"  name="domicile">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Non criminal certificate</label>
			<input type="file" class="form-control"  name="non_criminal">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Cast certificate</label>
			<input type="file" class="form-control"  name="cast">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group">
			<label>Aadhar Card Number</label>
			<input type="text" class="form-control" placeholder="Enter Aadhar Card Number"  name="aadhar">
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group">
			<label>Pan Card Number</label>
			<input type="text" class="form-control" placeholder="Enter Pan Card Number"  name="pan">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		<div class="form-group">
			<button type="submit">Submit</button>
		</div>
	</div>
</div>

</div>
   

@endsection