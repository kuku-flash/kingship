@extends('layouts.kingship')
    @section('content')

    <section class="hero-wrap hero-wrap-2 js-fullheight " style="background-image: url('images/car-bg.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                  <div class="col-lg-4 col-md-5 col-sm-5 mt-5 p-5">
                    <form action="{{ url('/carlist') }}" class="form-group p-4 ftco-animate bg-gold"  style="width: 100%;border-radius: 6px;">
                      <h4 class="text-white text-center">Vehicles for Sale in Kenya</h4>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Make</option>
                          <option>Toyota</option>
                          <option>Toyota</option>
                          <option>Benz</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <select class="form-control">
                          <option>Model</option>
                          <option>Toyota</option>
                          <option>Benz</option>
                        </select>
                      </div>
                      <div class="d-flex">
                        <div class="form-group mr-2">
                          <select class="form-control">
                            <option>Year From:</option>
                            <option>1995</option>
                            <option>1996</option>
                          </select>
                        </div>
                        <div class="form-group ml-2">
                          <select class="form-control" >
                            <option>Year TO:</option>
                            <option>1995</option>
                            <option>1996</option>
                          </select>
                        </div>
                      </div>
                      <div class="d-flex">
                        <div class="form-group mr-2">
                          <select class="form-control select2bs4" >
                            <option>Ksh Min:</option>
                            <option>500,000</option>
                            <option>700,000</option>
                          </select>
                        </div>
                        <div class="form-group ml-2">
                          <select  class="form-control select2bs4">
                            <option>Ksh Max:</option>
                            <option>1,000,000</option>
                            <option>2,000,000</option>
                          </select> 
                        </div>
                      </div>
                     
                      <div class="form-group">
                      <input type="submit" value="Search Now" class="btn btn-dark w-100">
                      </div>
                    </form>
                  </div>
            </div>
        </div>
      </section>
     
   
    	<!--Main cocntent cars&Vehicles-->


<!--cars-->
 <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Feeatured Vehicles</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/car1.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">BMW i8</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">BMW</span>
			    						<p class="price ml-auto">Ksh 20 Million <span>Negotiable</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="car-details.html" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="car-details.html" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/car2.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Aston Martin DB9</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Aston Martin</span>
			    						<p class="price ml-auto">Ksh 10 Million <span>Negotiable</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Buy now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/car3.jpg);">
		    					</div>
		    					<div class="text">
		    						<h2 class="mb-0"><a href="#">Mercedes Benz E300</a></h2>
		    						<div class="d-flex mb-3">
			    						<span class="cat">Mercedes Benz</span>
			    						<p class="price ml-auto">Ksh 3 Million <span>Negotiable</span></p>
		    						</div>
		    						<p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="#" class="btn btn-secondary py-2 ml-1">Details</a></p>
		    					</div>
		    				</div>
    					</div>
    					<div class="item">
    						<div class="car-wrap rounded ftco-animate">
		    					<div class="img rounded d-flex align-items-end" style="background-image: url(images/car4.jpg);">
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



    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/thehouseofcars.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">About us</span>
	            <h2 class="mb-4">Welcome to KingShip Properties</h2>

	            <p>Kingship was an idea  founded by a group of young talanted gentlemen who had a vision of making buying and selling of Houses and Cars easily through the use of the concepts of E-Commerce.</p>
	            <p>Kingship has been brought up by three traits which are Love,Trust and Loyalty...</p>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Search Vehicle
                <p><a href=""class="btn btn-primary py-3 px-4">Search House</a>

                </p>
	            </a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Services</span>
            <h2 class="mb-3">Upcoming Services</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Wedding Car Hire</h3>
                <p>We offer luxury car hire services for executive events including, wedding, airport transfer, conferences, meetings, birthdays parties. For booking call the office</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Car detailing </h3>
                <p>We offer full auto detailing services</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Airport Pick up</h3>
                <p>Active Car Hire and Transport Services provides a simple and efficient airport transportation service, operating 24 hours/7 days a week</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Whole City Tour</h3>
                <p>................</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-intro" style="background-image: url(images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Do You Want To Post your property With Us? Click the icon below to begin the process.</h2>
            <a href="#" class="btn btn-primary btn-lg">Register Today</a>
          </div>
				</div>
			</div>
		</section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person1.jpeg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Joshua Mungai</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Kuku Fajak</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Joel Alukwe</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person4.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Kenneth Kobia</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/person5.jpeg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Sharon Njeri</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	
    
    @endsection