@extends('frontend.main_master')
@section('body')
       <!-- Page Header Start -->
       <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Branchs</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Branchs</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Courses Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Branchs</h6>
                <h1 class="display-6 mb-4"></h1>
            </div>
            <div class="row g-6 justify-content-center">

                @foreach ($branch as $branch )
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white fs-5 py-1 px-4 mb-4">ONE</div>
                            <h5 class="mb-3">{{ $branch->branch_name }}</h5>
                            <p>Our aim is to provide the best service to our customer with the modern facilites of our company </p>
                           <ol class="breadcrumb justify-content-center mb-0">
                                <li class="breadcrumb-item small"><i class="fa fa-phone text-primary me-2"></i>{{ $branch->telephone }}</li>
                                <li class="breadcrumb-item small"><i class="fas fa-city text-primary me-2"></i>{{ $branch->city }}</li>
                            </ol> 
                        </div>
                        <div class="position-relative mt-auto">
                            <img class="img-fluid" src="http://127.0.0.1:8000/img/teck 4.jpg" alt="">
                            <div class="courses-overlay">
                                <a class="btn btn-outline-primary border-2" href="">Read More</a>                            </div>
                        </div>

                    </div>
                </div>       
                @endforeach
             

                
            </div>
        </div>
    </div>
    <!-- Courses End -->
@endsection