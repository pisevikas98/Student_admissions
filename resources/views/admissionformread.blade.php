@extends('layouts.app')

@section('content')

<div class="container-fluid"> 
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif 
<a href="{{url('admissionformPdf')}}" class="btn btn-danger">Export Pdf</a><br><br>         
<a href="{{url('admissionexport')}}" class="btn btn-success">Export Excel</a><br><br>         
<a href="{{url('admissionform')}}" class="btn btn-info">Add Details</a><br><br>         
  <table class="table table-striped table-bordered text-center">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Date of Birth</th>
        <!-- <th>Address</th> -->
        <th>Gender</th>
        <th>Signature</th>
        <!-- <th>College Name</th> -->
        <th>Branch</th>
        <th>Passing Year</th>
        <th>College Address</th>
        <th>HSC Result</th>
        <th>SSC Result</th>
        <th>Leaving Certificate</th>
        <th>Action</th>
      </tr>	
    </thead>
    <tbody>
    	@foreach($data as $key=>$pise)
      <tr>
        <td>{{$key+1}}</td>
        <td>
        	<img style="width: 100px;height: 100px" src = "/photo/{{$pise->photo}}" />
        </td>
        <td>{{$pise->name}}</td>
        <td>{{$pise->email}}</td>
        <td>{{$pise->phone}}</td>
        <td>{{$pise->dob}}</td>
        <!-- <td>{{$pise->address}}</td> -->
        <td>{{$pise->gender}}</td>
        <td>{{$pise->sign}}</td>
        <!-- <td>{{$pise->college_name}}</td> -->
        <td>{{$pise->branch}}</td>
        <td>{{$pise->passing_year}}</td>
        <td>{{$pise->clg_address}}</td>
        <td>
        	<img style="width: 100px;height: 100px" src="/hsc/{{$pise->hsc}}">
        </td>
        <td>
          	<img style="width: 100px;height: 100px" src="/ssc/{{$pise->ssc}}">
        </td>
        <td><img style="width: 100px;height: 100px" src="/leaving_certificate/{{$pise->leaving}}"></td>
        <td>
            <a href="{{url('admissionformedit')}}/{{$pise->id}}" class="btn btn-primary">Edit</a>
            <a href="{{url('admissionformdelete')}}/{{$pise->id}}" class="btn btn-danger">Delete</a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection