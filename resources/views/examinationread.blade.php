@extends('layouts.app')

@section('content')
<div class="container"> 
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif          
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Message</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    	@foreach($data as $key=>$rahul)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$rahul->name}}</td>
        <td>{{$rahul->email}}</td>
        <td>{{$rahul->mobile}}</td>
        <td>{{$rahul->msg}}</td>
        <td>
        	<a href="{{url('examinationedit')}}/{{$rahul->id}}" class="btn btn-primary">Edit</a>
        	<a href="{{url('examinationdelete')}}/{{$rahul->id}}" class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{url('contact_us')}}" class="btn btn-info">Contact details</a>
</div>
@endsection