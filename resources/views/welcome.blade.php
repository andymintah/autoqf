@extends('layouts.app')

@section('content')
    


        <div class="container hero">
            <div class="row">
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                    <h1>The revolution is here.</h1>
                    <p>Hire experienced professionals to service your vehicle to keep it running smoothly and efficiently</p>
                    <button class="appoint btn btn-light btn-lg action-button" type="button"><a href='book/create'>Book An Appointment Now!</a></button>
                </div>
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                    <img class="rubberBand animated" src="{{ asset('img/car-152280_1280.png')}}" width="450px">
                    <div class="phone-mockup">
                        <div class="screen"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="highlight-phone">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="intro">
                        <h2>Easy Car Care</h2>
                        <p>Apex Is Eager To Deliver Its Service In This Line Of Expertise To Help You Service And Maintain Your Fleets With A One-Stop Service By Coming To You And Cutting Of The Stress Of Spending Precious Time At The Bay For Servicing.</p>
                    </div>
                </div>
                <div class="col-sm-4 col-lg-2"></div>
            </div>
        </div>
    </section>
    <section class="highlight-clean" style="background: var(--gray-dark);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">About Us</h2>
                <p>Apex Auto Fix A Company Limited By Guarantee And Registered In Ghana.
                    It Has A Shareholding Structure Made Up Of Experience And Business Fortitude Spanning Over Two Decades In The Automobile Industry.
                    The Set Up Of This Business Is To Meet Both Corporate And Individuals Who Care About Their Official Fleet Or Personal Automobiles Which Has Become The Main Tool For Movement In Their Business Dealings.
                    Apex Is Eager To Deliver Its Service In This Line Of Expertise To Help You Service And Maintain Your Fleets With A One-Stop Service By Coming To You And Cutting Of The Stress Of Spending Precious Time At The Bay For Servicing.
                    We Create The Utmost Convenience For Our Clients As Far As Car Service Is Concerned.
                    We Are A Phone Call Away As You Do Your Bookings At Your Convenience And Our Professional Mechanics Will Be At Your Door.
                    Distance Is Not A Barrier So Please Reach Us Now.
                     </p>
            </div>
        </div>
    </section>

    <div class="brands"><a href="#"> <img src="{{ asset('img/Nissan-logo.svg.png')}}" width="100px">
        <img src="{{ asset('img/03e1b0207489ad32d10b9a860ffc6623.png')}}" width="100px">
        <img src="{{ asset('img/2048px-BMW.svg.png')}}" width="100px">
        <img src="{{ asset('img/Kia-Logo.png')}}" width="120px">
        <img src="{{ asset('img/Ford_logo_flat.svg.png')}}" width="150px">
        <img src="{{ asset('img/2216144.png')}}" width="150px"></a>
    </div>

    <section class="highlight-clean">
        <div class="container"style="padding:10px">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h5>
                        <i class="bi bi-envelope"></i>
                        <br>
                        APEX AUTO FIX<br>
                        P.O.BOX ST 593<br>
                        ACCRA
                    </h5>
                    <br>
                    <h5>
                        <i class="bi bi-geo-alt-fill"></i>
                        <br>
                        GA 006 -7006
                    </h5>
                    <br>
                    <br>
                    <h5>
                        <i class="bi bi-telephone-fill"></i>
                        <br>
                        0302260187
                    </h5>

                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">

                          <label for="exampleFormControlInput1">Name</label>
                          <input type="text" class="form-control" id="name" placeholder="John Mensah">
                        </div>
                          <div class="form-group">
                            
                          <label for="exampleFormControlInput1">Email address</label>
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Message</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                      </form>

                </div>

                
            </div>
            
        </div>
    </section>

    

@endsection