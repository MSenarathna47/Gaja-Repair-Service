@extends('frontend.main_master')
@section('body')
<style>
.checked {
  color: orange;
}
</style>
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center">
        <h1 class="display-4 text-white animated slideInDown mb-4">Reviews</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Reviews</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-6">
    
    <div class="container">
        
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            {{-- <h6 class="text-primary text-uppercase mb-2">Meet The Team</h6> --}}
          
            <h1 class="display-6 mb-4">CLIENT REVIEWS</h1>
            <div class="m-5">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Reviews</button>

            </div>
        </div>
        <div class="row g-0 team-items">
        @foreach ($review as $review )

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative">
                    <div class="position-relative">
                        <img class="img-fluid" src="" alt="">
                       
                    </div>
                    <div class="bg-light text-center p-4">
                        <h5 class="mt-2"></h5>
                        @if ($review->satisfied == 'Bad')
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>


                            <br>
                        
                        @elseif ($review->satisfied == 'Good')
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <br>
                        @else
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
<br>
                        
                        @endif
                        <span>
                            {{ $review->description }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach

        </div>



        
    </div>
</div>
<!-- Team End -->





<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
  
  
                  <form method="post"  action="{{route('add.review')}}">
                      @csrf
              <div class="container">               
                  <div class="row ">
                      
                      <div class="col-sm-5">
                          <div class="mb-3">
                          <label for="fullName" class="col-form-label">How satisfied are you with the Service? *
                        </label>
                          </div>
                      </div>
                      
                      <div class="col-sm-7">
                          <div class="mb-3">
                            <select class="form-control" name="satisfied" id="satisfied">
                                <option value="Bad">Bad</option>
                                {{-- <option value="Satisfied">Satisfied</option> --}}
                                <option value="Good">Good</option>
                                <option value="Excelent">Excelent</option>
                              </select>
                          </div>
                      </div>
                      
                    </div>

                    <div class="row ">
                      
                        <div class="col-sm-5">
                            <div class="mb-3">
                                <label for="description" class="col-form-label">Would you like to leave us some feedback?
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-sm-7">
                            <div class="mb-3">
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