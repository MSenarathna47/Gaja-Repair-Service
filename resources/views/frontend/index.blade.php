@extends('frontend.main_master')
@section('body')
        <!-- Carousel Start -->
        <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('img/top 2.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 text-light mb-5 animated slideInDown">ONE of the best repair sevice</h1>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                        <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Branch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('img/ft 2.jpg')}}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <h1 class="display-2 text-light mb-5 animated slideInDown">repair your vehical onspote</h1>
                                        <a href="" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                        <a href="" class="btn btn-light py-sm-3 px-sm-5 ms-3">Our Branch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
    
    
        <!-- Facts Start -->
        <div class="container-fluid facts py-5 pt-lg-0">
            <div class="container py-5 pt-lg-0">
                <div class="row gx-0">
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-car text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>frienly staff</h5>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-users text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>Experienced Technicians</h5>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white shadow d-flex align-items-center h-100 p-4" style="min-height: 150px;">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square bg-primary">
                                    <i class="fa fa-file-alt text-white"></i>
                                </div>
                                <div class="ps-4">
                                    <h5>Minimum fees</h5>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
    
    
        <!-- About Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/ft 2.jpg')}}" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="{{ asset('img/ft 3.jpg')}}" alt="" style="width: 220px; height: 200px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <h6 class="text-primary text-uppercase mb-2">About Us</h6>
                            <h1 class="display-6 mb-4">We will help to fix your car</h1>
                            <p>If your car is broken? Then come letv us help you to fix it.</p>
                            <p class="mb-4">Visit us today to get your vehicle reapired reliably and cheaply by experienced technicians.</p>
                            <p class="mb-4"><h2 class="text-primary text-uppercase mb-2">'GAJA'</h2>The one and only mobile vehical repair center.</p>
                            <div class="row g-2 mb-4 pb-2">
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>frienly staff
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Experienced Technicians
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>Afordable Fee 
                                </div>
                                <div class="col-sm-6">
                                    <i class="fa fa-check text-primary me-2"></i>fast service
                                </div>
                            </div>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                                </div>
                                <div class="col-sm-6">
                                    <a class="d-inline-flex align-items-center btn btn-outline-primary border-2 p-2" href="tel:+0123456789">
                                        <span class="flex-shrink-0 btn-square bg-primary">
                                            <i class="fa fa-phone-alt text-white"></i>
                                        </span>
                                        <span class="px-3">+094 763 676 239</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    
    
        <!--Features Start -->
        <div class="container-xxl courses my-6 py-6 pb-0">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Our Features</h6>
                    <h1 class="display-6 mb-4">Features of how to get service from our company</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">ONE</div>
                                <h5 class="mb-3">Modern techinical equipment</h5>
                                <p>Our aim is to provide the best service to our customer with the modern facilites of our company </p>
                               <!--- <ol class="breadcrumb justify-content-center mb-0">
                                    <li class="breadcrumb-item small"><i class="fa fa-signal text-primary me-2"></i>Beginner</li>
                                    <li class="breadcrumb-item small"><i class="fa fa-calendar-alt text-primary me-2"></i>3 Week</li>
                                </ol> -->
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/teck 4.jpg')}}" alt="">
                                <div class="courses-overlay">
                                    <!--<a class="btn btn-outline-primary border-2" href="">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">TWO</div>
                                <h5 class="mb-3">Wide service network</h5>
                                <p>A large number of customers can get service from us due to our extensive service network</p>
                                
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/repair 2.jpg')}}" alt="">
                                <div class="courses-overlay">
                                   <!--- <a class="btn btn-outline-primary border-2" href="">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">THREE</div>
                                <h5 class="mb-3">Specially trained skilled workers</h5>
                                <p>Our aim is to provide high qulity service to our customers with the help of trained workers </p>
                                
                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid" src="{{ asset('img/workers 1.jpg')}}" alt="">
                                <div class="courses-overlay">
                                  <!---  <a class="btn btn-outline-primary border-2" href="">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 my-6 mb-0 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg text-center p-5">
                            <h1 class="mb-4">Take Appointment</h1>
                            
                             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Make An Appointment</button>

                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->
    
    
        <!-- Features Start -->
        <!---
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-primary text-uppercase mb-2">Why Choose Us!</h6>
                        <h1 class="display-6 mb-4">Best Driving Training Agency In Your City</h1>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row gy-5 gx-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Fully Licensed</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Online Tracking</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Afordable Fee</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0 btn-square bg-primary me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <h5 class="mb-0">Best Trainers</h5>
                                </div>
                                <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="position-relative overflow-hidden pe-5 pt-5 h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100" src="{{ asset('img/about-1.jpg')}}" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-3 pb-3" src="{{ asset('img/about-2.jpg')}}" alt="" style="width: 200px; height: 200px">
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Features End -->
    
    
        <!-- Team Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6>
                    <h1 class="display-6 mb-4">We Have Great Experience Managers</h1>
                </div>
                <div class="row g-0 team-items">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('')}}" alt="">
                               
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">Mduwantha perera</h5>
                                <span>Manager of Rambewa main branch</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('')}}" alt="">
                              
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">supun jayasundara</h5>
                                <span>manager of madawachchiya branch</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('img/.jpg')}}" alt="">
                                
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">Kaumina perera</h5>
                                <span>Manager of mihinthale branch</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item position-relative">
                            <div class="position-relative">
                                <img class="img-fluid" src="{{ asset('')}}" alt="">
                                
                            </div>
                            <div class="bg-light text-center p-4">
                                <h5 class="mt-2">chamod madusanka</h5>
                                <span>Manager of Anuradhapura branch</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    
    
        <!-- Testimonial Start -->
        <!--<div class="container-xxl py-6">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <h6 class="text-primary text-uppercase mb-2">Testimonial</h6>
                    <h1 class="display-6 mb-4">What Our Clients Say!</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="owl-carousel testimonial-carousel">
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle mx-auto" src="{{ asset('img/testimonial-1.jpg')}}" alt="">
                                    <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                        <i class="fa fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle mx-auto" src="{{ asset('img/testimonial-2.jpg')}}" alt="">
                                    <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                        <i class="fa fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                            <div class="testimonial-item text-center">
                                <div class="position-relative mb-5">
                                    <img class="img-fluid rounded-circle mx-auto" src="{{ asset('img/testimonial-3.jpg')}}" alt="">
                                    <div class="position-absolute top-100 start-50 translate-middle d-flex align-items-center justify-content-center bg-white rounded-circle" style="width: 60px; height: 60px;">
                                        <i class="fa fa-quote-left fa-2x text-primary"></i>
                                    </div>
                                </div>
                                <p class="fs-4">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                                <hr class="w-25 mx-auto">
                                <h5>Client Name</h5>
                                <span>Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Testimonial End -->















<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
  
                  <form method="post"  action="{{route('make.appointment')}}">
                      @csrf
              <div class="container">               
                  <div class="row ">
                      
                      <div class="col-sm-4">
                          <div class="mb-3">
                          <label for="fullName" class="col-form-label">Full Name</label>
                          <input type="text" class="form-control" name="fullName" id="fullName">
                          </div>
                      </div>
                      
                      <div class="col-sm-4">
                          <div class="mb-3">
                          <label for="phoneNumber" class="col-form-label">Phone Number</label>
                          <input type="tel" class="form-control" name="phoneNumber" id="phoneNumber">
                          </div>
                      </div>
                      
                      <div class="col-sm-4">
                          <div class="mb-3">
                          <label for="email" class="col-form-label">Email</label>
                          <input type="email" class="form-control" name="email" id="email">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" name="address" id="address">
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="carModel" class="col-form-label">Car Model</label>
                            <input type="text" class="form-control" name="carModel" id="carModel">
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="carYear" class="col-form-label">Car Year</label>
                            <input type="number" class="form-control" name="carYear" id="carYear">
                          </div>
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="licensePlate" class="col-form-label">License Plate</label>
                            <input type="text" class="form-control" name="licensePlate" id="licensePlate">
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="transmissionType" class="col-form-label">Transmission Type</label>
                            <select class="form-control" name="transmissionType" id="transmissionType">
                              <option value="">Auto</option>
                              <option value="">Manual</option>
                              {{-- <option value="service3">Service 3</option> --}}
                            </select>
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="fuelType" class="col-form-label">Fuel Type</label>
                            <select class="form-control" name="fuelType" id="fuelType">
                              <option value="">Disal</option>
                              <option value="">Petrol</option>
                            </select>
                          </div>
                        </div>
                        
                  </div>
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="serviceSelection" class="col-form-label">Service Selection</label>
                            <select class="form-control" name="serviceSelection" id="serviceSelection">
                              <option value="">Service 1</option>
                              <option value="">Service 2</option>
                              <option value="">Service 3</option>
                            </select>
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="preferredDateTime" class="col-form-label">Preferred Date</label>
                            <input type="date" class="form-control" name="preferredDateTime" id="preferredDateTime">
                          </div>
                        </div>
                        
                        <div class="col-sm-4">
                          <div class="mb-3">
                            <label for="time" class="col-form-label">Preferred Time</label>
                            <select class="form-control" name="time" id="time" required>
                              <option disabled selected>Open this select menu</option>
                              <option value="09:00">09:00 AM</option>
                              <option value="10:00">10:00 AM</option>
                              <option value="11:00">11:00 AM</option>
                              <option value="12:00">12:00 PM</option>
                              <option value="13:00">01:00 PM</option>
                              <option value="14:00">02:00 PM</option>
                              <option value="15:00">03:00 PM</option>
                              <option value="16:00">04:00 PM</option>
                              <option value="17:00">05:00 PM</option>
                              <option value="18:00">06:00 PM</option>
                            </select>
                          </div>
                        </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                          <div class="mb-3">
                          <label for="description" class="col-form-label">Description</label>
                          <textarea class="form-control" name="description" id="description"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
  
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button class="btn btn-primary">Send message</button>
                </div>
          </form>
  
        </div>
  
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
@endsection