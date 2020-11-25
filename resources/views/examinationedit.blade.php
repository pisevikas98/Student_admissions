@extends('layouts.app')

@section('content')

<style type="text/css">
	.responsive-map-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
}

.responsive-map-container iframe,   
.responsive-map-container object,  
.responsive-map-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 85%;
    height: 85%;
}
</style>
@section('content')
<div class="container">

<div class="row">
	<div class="col-sm-6" style="border: 1px solid black; padding: 10px; height: 295px">
		<i class="fa fa-map-marker">   Mahatma Gandhi Road, Fort, Mumbai, Maharashtra 400032.</i><br><br>
		<i class="fa fa-phone"> 22708700</i>
		<br><br>
		<h4>Campus</h4>
      	<i class="fa fa-map-marker">  University of Mumbai,Vidya Nagari, Kalina, Santacruz East, Mumbai, Maharashtra 400098.</i>
      	<br><br>
      	<i class="fa fa-phone"> 022 22708700</i> <br><br>

        <i class="fa fa-envelope-o "> Student@gmail.com</i>
	</div>
	<div class="col-sm-6">
		<div class="responsive-map-container">
  <!-- place the iframe code between here... -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1737.6221882978507!2d-98.48650795000005!3d29.421653200000023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58aa57e6a56f%3A0xf08a9ad66f03e879!2sHenry+B.+Gonzalez+Convention+Center!5e0!3m2!1sen!2sus!4v1393884854786" width="600" height="450" frameborder="0" style="border:0"></iframe>
  <!-- ... and here -->
</div>
	</div>
</div>
<hr>	
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

  <form action="{{ url('examinationupdate') }}/{{$data->id}}" method="post">
    {{csrf_field()}}
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" value="{{$data->name}}" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" value="{{$data->email}}" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" value="{{$data->mobile}}" id="" placeholder="Enter Number" name="mobile">
    </div>
    <div class="form-group">
      <label for="mobile">Message:</label>
      <textarea class="form-control" placeholder="Enter Message" name="msg">{{$data->msg}}</textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  <a href="{{url('examinationread')}}" class="btn btn-primary">View Contact</a>

</div>

@endsection
