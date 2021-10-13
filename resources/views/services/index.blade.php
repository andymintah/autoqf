@extends('layouts.app')

@section('content')
    
<div class="container">

    <h2> Services Available</h2>

    <div class="card-deck mb-3 text-center">
        @foreach($service as $service)

      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">{{$service->servicename}}</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">GHS {{$service->servicecost}}</h1>
          <br>
          <p>{{$service->servicedesc}}</p>

          <button type="button" class="appoint btn btn-lg btn-block btn-outline-primary"><a href='book/create'>Book Now</a></button>
        </div>
      </div>
      @endforeach

    </div>
</div>

    @endsection
