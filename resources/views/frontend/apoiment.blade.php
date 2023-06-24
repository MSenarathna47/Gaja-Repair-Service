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






                <form method="post"  action="{{route('make.appointment')}}">
                    @csrf
                    {{-- <div class="form-group">
                        <label ></label>
                        <input type="text" class="form-control border-0 bg-light"  name="" required>
                    </div> --}}

                    <div class="form-group">
                        <label >Name :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="fullName" required>
                    </div>

                    <div class="form-group">
                        <label > Phone Number :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="phone" required>
                    </div>

                    <div class="form-group">
                        <label >Email :</label>
                        <input type="email" class="form-control border-0 bg-light"  name="email" required>
                    </div>

                    <div class="form-group">
                        <label >address :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="address" required>
                    </div>

                    <div class="form-group">
                        <label > Car Model :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="carmodel" required>
                    </div>

                    <div class="form-group">
                        <label >Car Year :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="caryear" required>
                    </div>

                    <div class="form-group">
                        <label >License Plate :</label>
                        <input type="text" class="form-control border-0 bg-light"  name="licensePlate" required>
                    </div>

                    <div class="form-group">
                        <label >Transmission Type :</label>
                        <select class="form-control border-0 bg-light" name="ttype">
                            <option  selected>Open this select menu</option>
                            <option>Auto</option>
                            <option>Manual</option>
                          </select>
                    </div>

                    <div class="form-group">
                        <label >Fuel Type :</label>
                        <select class="form-control border-0 bg-light" name="ftype">
                            <option  selected>Open this select menu</option>
                            <option>desail</option>
                            <option>petol</option>
                          </select>
                    </div>


                    <div class="form-group">
                        <label > Service Selection :</label>
                        <select class="form-control border-0 bg-light" name="serviceSelection">
                            <option  selected>Open this select menu</option>
                            <option>full</option>
                            <option>and</option>
                          </select>
                    </div>
                    <div class="form-group">
                        <label >Date :</label>
                        <input type="date" class="form-control border-0 bg-light"  name="date" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Discription</label>
                        <textarea class="form-control border-0 bg-light" placeholder="Leave a message here" name="des" id="des" style="height: 150px"></textarea>

                     </div>
                    <br><br>





                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Submit</button>
                    </div>
                </form>











            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->
@endsection
