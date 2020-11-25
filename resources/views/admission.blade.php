@extends('layouts.app')
<style type="text/css">
	#h3{
		color: darkblue;
	}
</style>
@section('content')
<img src="{{ url('assets/img/mumbai7.jpg') }}" width="100%" height="200px;">
<div class="container">
<h3 id="h3">About Online Admission</h3><br>
<a href="{{ url('admissionform') }}">
<h4>Click Here For Mumbai University Pre Admission online Registration 2020-21</h4></a><br>

<a href="{{ url('') }}">
<h4>Circular for Admission of International Students</h4></a><br>

<a href="{{ url('internationalform') }}">
<h4>Admission For International Students</h4></a>
</div>
</div>

@endsection
