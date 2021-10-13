@extends('layouts.app')


@section('content')

<div class="container">

<form method="post" action="{{action('App\Http\Controllers\BookingsController@store') }}" method="POST" ,
    enctype="multipart/form-data">
    {{ csrf_field() }}
    <h4>Booking Form</h4>


    <input type="hidden" name="_method" value="post">
    <div style="width:100%;">
        <p>SERVICE</p>
        <select class="form-control" id="stype" name="stype">
            <option value="" disabled selected>SELECT A SERVICE</option>

            @foreach($services as $services)
            <option value="{{$services->serviceid}}">{{$services->servicename}}</option>
            @endforeach
          </select>    
        </div>
    <div style="width:100%;">
        <p>FULL NAME</p>
        <input name="bclientname" autofocus>
    </div>
  

    <div style="width:47%;">
        <p>EMAIL</p>
        <input name="bclientemail">
    </div>
    <div style="width:47%;margin-left:6%">
        <p>PHONE</p>
        <input name="bclientcontact">
    </div>
    <div style="width:100%;">
        <p>LOCATION</p>
        <input name="bclientlocation">
    </div>
    <div style="width:100%;">
        <p>CAR TYPE</p>
        <select class="form-control" id="sel" name="stype">

           
          </select>    
        </div>
        <br/>

        <div style="width:100%;">
            <p>Momo Number</p>
            <input name="bmomonumber">
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
            <label class="form-check-label" for="exampleRadios1">
                <img  src="{{ asset('img/momo.png')}}" width="40px" margin-left="40px">
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                <img  src="{{ asset('img/vodafone.jpeg')}}" width="40px">
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
            <label class="form-check-label" for="exampleRadios3">
                <img  src="{{ asset('img/airtel.jpeg')}}" width="40px">
            </label>
          </div>
        <input type="button" name="next" class="btn btn-primary" value="Book Appointment" />
 

   
</form>
</div>
<script>
  $(function() {
    var data = "{{ asset('library/carlist.json') }}" 
    for (var i = 0; i < data.length; ++i){
        $('#sel').append('<option>' + data[i] + '</option>');
    };


});


</script>
@endsection