@extends('frontend.main_master')
@section('body')

     <!-- Page Header Start -->
 <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Appointment</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Appointment</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Appointment Start -->
<div class="container-xxl py-6">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="img/ft 2.jpg" alt="" style="object-fit: cover;">
                    <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="img/ft 1.jpg" alt="" style="width: 250px; height: 200px;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h6 class="text-primary text-uppercase mb-2">Appointment</h6>
                <h1 class="display-6 mb-4">Make An Appointment To repair or service your vehical</h1>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Make An Appointment</button>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment</h5>
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








<script>
    // Get the current date
    var today = new Date().toISOString().split('T')[0];
    
    // Get the date input element
    var dateInput = document.getElementById('date');

    // Set the minimum date to today
    dateInput.setAttribute('min', today);
  </script>
<!-- Appointment End -->
@endsection
