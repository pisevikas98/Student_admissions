@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">HOME</div><br>
                <hr>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- You are logged in! --><div class="container" style="height: 20%">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="{{ url('assets/img/mumbai1.jpg') }}" width="100%" alt="Los Angeles" height="30%">
        <!-- <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div> -->
      </div>

      <div class="item">
        <img src="{{ url('assets/img/mumbai9.jpg') }}" alt="Chicago" width="100%" height="25%">
        <!-- <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
 -->      </div>
    
      <div class="item">
        <img src="{{ url('assets/img/mumbai10.jpg') }}" alt="New York" width="100%" height="30%">
        <!-- <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div> -->
      </div>
  
    </div>

    <!-- Left and right controls -->
    <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a> -->
  </div>
</div>
        <div class="container" style="padding-top: 20px;text-align: left;">
            <div class="row">
                <div class="col-sm-6">
                    <h4>IMPORTANT INFORMATION</h4>
                    <p>Online Workshops on "Incorporating Universal Human Values in Education".</p><p> Shastri Indo-Canadian Institute's University Centre: Webinar on Humboldt fellowship for experienced researchers.</p>
                    <p>Online Applications invited for the BMS program - Alkesh Dinesh Mody Institute for financial and Management Studies - Admission Notice and Process.</p>
                </div><div class="col-sm-6">
                    <h4>LATESTS NEWS</h4>
                    <p>Online Workshops on "Incorporating Universal Human Values in Education".</p><p> Shastri Indo-Canadian Institute's University Centre: Webinar on Humboldt fellowship for experienced researchers.</p>
                    <p>Online Applications invited for the BMS program - Alkesh Dinesh Mody Institute for financial and Management Studies - Admission Notice and Process.</p>
                </div>
            </div>
            <br>
            <hr>
                <div class="row col-sm-12 text-center">
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/Gandhi.jpg')}}" width="80%" class="img-circle">
                        <h4>Mahatma Gandhi</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/Ambedkar.jpg')}}" width="80%" class="img-circle">
                        <h4>Dr.Ambedkar</h4>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{url('assets/img/Tilak.jpg')}}" width="80%" class="img-circle">
                        <h4>Lokmanya Tilak</h4>
                    </div>
                </div>     
            </div>  
                </div>
            </div>
        </div>
    </div>
</div>

<div  style="position: relative;left: 0;bottom: 0px;background-color: black;color: white;text-align: center; height: 50px;">
    <p style="padding-top: 12px;">&copy
Copyright University of Mumbai 2020.</p>
</div>
@endsection
