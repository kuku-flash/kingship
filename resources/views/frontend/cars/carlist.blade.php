@extends('layouts.kingship')
    @section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/car-bg2.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="car-listing.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
              <h1 class="mb-3 bread">Car listing</h1>
            </div>
          </div>
        </div>
       
      </section>
  
      <section class="ftco-section contact-section">
        <div class="container">
          <div class="row d-flex mb-2 contact-info">
              <div class="col-lg-2 col-md-5 col-sm-5">
                  <div class="row">
                  
                        <div class="border w-100 p-4 rounded mb-2 d-flex bg-dark">
                            
                <form action="#" method="post" style="width: 100%;">
                  <div class="form-group">
                     <label>Filter:</label>
                  </div>
                 
                                 
                
  
                    
                  <!-- start form herer-->
                   <div class="form-group">
                    <label>Make</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>Toyota</option>
                      <option>Toyota</option>
                      <option>Benz</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Model</label>
                    <select class="form-control select2bs4" disabled="disabled" style="width: 100%;">
                      <option>Disable</option>
                      <option>Toyota</option>
                      <option>Benz</option>
                    </select>
                  </div>
  
                    <div class="form-group">
                    <label>Year</label>
                      <select class="form-control select2bs4" style="width: 70%;">
                      <option>From</option>
                      <option>1995</option>
                      <option>1996</option>
                    </select> - 
                    <select class="form-control select2bs4" style="width: 70%;">
                      <option>To</option>
                      <option>1995</option>
                      <option>1996</option>
                    </select>
                  </div>
  
                    <div class="form-group">
                    <label>Prices</label>
                    <select class="form-control select2bs4" style="width: 70%;">
                      <option>Min Ksh</option>
                      <option>KSh100,000</option>
                      <option>KS500,000</option>
                      <option>KS1,000,000</option>
                    </select> - 
                    <select class="form-control select2bs4" style="width: 70%;">
                      <option>Max Ksh</option>
                      <option>KSh100,000</option>
                      <option>KS500,000</option>
                      <option>KS1,000,000</option>
                    </select>
                  </div>
  
                   <div class="form-group">
                    <label>Location</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>Nairobi</option>
                      <option>Karen</option>
                      <option>Meru</option>
                    </select>
                  </div>
  
                   <div class="form-group">
                    <label>Conditon</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>Used</option>
                      <option>Brand New</option>
                      <option>Meru</option>
                    </select>
                  </div>
  
                   <div class="form-group">
                    <label>Fuel Type</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>Pertol</option>
                      <option>Diesel</option>
                      <option>Hybird and Electric</option>
                    </select>
                  </div>
  
                  <div class="form-group">
                    <label>Transmission</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>Automatic</option>
                      <option>Manual</option>
                    </select>
                  </div>
  
                  <div class="form-group">
                    <label>Transmission</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                      <option>White</option>
                      <option>Silver</option>
                      <option>Blue</option>
                      <option>Yellow</option>
                      <option>Red</option>
                      <option>Black</option>
                    </select>
                  </div>
  
                </form>
                        
                
  
                        </div>
                   
                  
                   
                  </div>
            </div>
            <div class="col-lg-10">
              <div class="row">
              <div class="col-lg-4 col-md-4">
              <div class="card car-wrap rounded ftco-animate">
                <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/benz-1.jpg);">
                </div>
                <div class="text">
                  <h2 class="mb-0"><a href="#">2010 Mercedes-Benz C200</a></h2>
                  <div class="d-flex mb-3">
                    <span class="cat">Benz</span>
                    <p class="price ml-auto">Ksh 1,470,000 <span>Negotiable</span></p>
                  </div>
                <p class="d-flex mb-0 d-block"><a href="{{ url('car_detail')}}" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="col-lg-6 col-md-6" class="btn btn-secondary py-2 ml-1">Details</a></p>
                </div>
                    </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="card car-wrap rounded ftco-animate">
                  <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/red-1.jpeg);">
                  </div>
                  <div class="text">
                    <h2 class="mb-0"><a href="#">2020 Volkswagen Jetta Red.</a></h2>
                    <div class="d-flex mb-4">
                      <span class="cat">Jetta </span>
                      <p class="price ml-auto">Ksh 30 Million <span>Negotiable</span></p>
                    </div>
                    <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                  </div>
                      </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/benz-5.jpg);">
                    </div>
                    <div class="text">
                      <h2 class="mb-0"><a href="#">Rolls Roys Ghost</a></h2>
                      <div class="d-flex mb-3">
                        <span class="cat">Rolls Roys </span>
                        <p class="price ml-auto">Ksh 30 Million <span>Negotiable</span></p>
                      </div>
                      <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                        </div>
                  </div>
                  <div class="col-lg-4 col-md-4">
                    <div class="car-wrap rounded ftco-animate">
                      <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/benz-1.jpg);">
                      </div>
                      <div class="text">
                        <h2 class="mb-0"><a href="#">Rolls Roys Ghost</a></h2>
                        <div class="d-flex mb-3">
                          <span class="cat">Rolls Roys </span>
                          <p class="price ml-auto">Ksh 30 Million <span>Negotiable</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                      </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                      <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/red-1.jpeg);">
                        </div>
                        <div class="text">
                          <h2 class="mb-0"><a href="#">Rolls Roys Ghost</a></h2>
                          <div class="d-flex mb-3">
                            <span class="cat">Rolls Roys </span>
                            <p class="price ml-auto">Ksh 30 Million <span>Negotiable</span></p>
                          </div>
                          <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                        </div>
                            </div>
                      </div>
                      <div class="col-lg-4 col-md-4">
                        <div class="car-wrap rounded ftco-animate">
                          <div class="img rounded d-flex align-items-end" style="background-image: url(images/cars/benz-5.jpg);">
                          </div>
                          <div class="text">
                            <h2 class="mb-0"><a href="#">Rolls Roys Ghost</a></h2>
                            <div class="d-flex mb-3">
                              <span class="cat">Rolls Roys </span>
                              <p class="price ml-auto">Ksh 30 Million <span>Negotiable</span></p>
                            </div>
                            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
                          </div>
                              </div>
                        </div>
                      
            </div>
  
          </div>
           
  
          </div>
        </div>
      </section>
      
      @endsection
       