@extends('layouts.client')
    @section('content')
    <section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"> <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Dashbord <i class="ion-ios-arrow-forward"></i></span></p>
              <h1 class="mb-3 bread">My Ads</h1>
            </div>
          </div>
        </div></div>
        
      </section>
  
          <section class="ftco-section ftco-section ftco-cart"> 
              <div class="container">
                  
                  
                  <div class="row ml-auto">
                    @include('inc.client_sidebar_nav')
                      <div class="col-md-9">
                        <div class="card">
                          <div class="card-header">
                            <h4 class="card-title">My Ads</h4>
            
                            <div class="card-tools">
                              <nav class="navbar navbar-expand" style="float: left;">
                                <ul class="navbar-nav">
                                  <li class="nav-item"><a href="#" class="nav-link">All Ads(12)</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Featured(10)</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Active(5)</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Sold(2)</a></li>
                                  <li class="nav-item"><a href="#" class="nav-link">Expired(2)</a></li>
                                  </ul>
                              </nav>
                              <div class="input-group input-group-sm" style="width: 150px; float: right; ">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            
                                <div class="input-group-append">
                                  <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="card-body table-responsive pt-1 pr-1 pl-1">
                            <table  class="table  table-hover table-responsive text-wrap ">
                              <thead class="thead bg-light">
                                  <tr>
                                      <th>ID</th>
                                      <th>Photo</th>
                                      <th>Title</th>
                                      <th>Category</th>
                                      <th>Featured</th>
                                      <th>Ad Status</th>
                                      <th>Price &amp; Location</th>
                                      <th>Date</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr data-category="active">
                                      <td>
                                          <span class="tom-checkbox">
                                              <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                              <label for="tg-adone"></label>
                                          </span>
                                      </td>
                                      <td><img src="images/car4.jpg" width="50" height="50" alt="image description"></td>
                                      <td>
                                          <h6>2010 Mercedes-Benz C200</h6>
                                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                                      </td>
                                      <td><h6>cars</h6><span class="tg-adcategories">Benz</span></td>
                                      <td>Yes</td>
                                      <td><span class="round btn-success">active</span></td>
                                      <td>
                                          <h6>Ksh 2,000,000</h6>            
                                      </td>
                                      <td>
                                          <time datetime="2017-08-08">April 27, 2020</time>
                                          <span>Published</span>
                                      </td>
                                      <td>
                                          <div class="tg-btnsactions">
                                              <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr data-category="active">
                                      <td>
                                          <span class="tg-checkbox">
                                              <input id="tg-adtwo" type="checkbox" name="myads" value="myadtwo">
                                              <label for="tg-adtwo"></label>
                                          </span>
                                      </td>
                                      <td><img src="images/cars/red-1.jpeg" width="50" height="50"  alt="image description"></td>
                                      <td>
                                          <h6>2020 Volkswagen Jetta Red.</h6>
                                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                                      </td>
                                      <td><h6>cars</h6><span>Jetta</span></td>
                                      <td>Yes</td>
                                      <td><span class="btn-warning">inactive</span></td>
                                      <td>
                                          <h6>Ksh 1,470,000</h6>                         
                                      </td>
                                      <td>
                                          <time datetime="2017-08-08">Jun 27, 2017</time>
                                          <span>Published</span>
                                      </td>
                                      <td>
                                          <div class="tg-btnsactions">
                                              <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr data-category="active">
                                      <td>
                                          <span class="tom-checkbox">
                                              <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                              <label for="tg-adone"></label>
                                          </span>
                                      </td>
                                      <td><img src="images/house11.jpg" width="50" height="50" alt="image description"></td>
                                      <td>
                                          <h6>Swiss Lenana Mount Hotel Opens in new window4-star hotel</h6>
                                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                                      </td>
                                      <td><h6>Property</h6><span class="tg-adcategories">Appartment</span></td>
                                      <td>Yes</td>
                                      <td><span class="round btn-success">active</span></td>
                                      <td>
                                          <h6>Ksh 300,000,000</h6>                
                                      </td>
                                      <td>
                                          <time datetime="2017-08-08">May 27, 2020</time>
                                          <span>Published</span>
                                      </td>
                                      <td>
                                          <div class="tg-btnsactions">
                                              <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
                                  <tr data-category="active">
                                      <td>
                                          <span class="tg-checkbox">
                                              <input id="tg-adtwo" type="checkbox" name="myads" value="myadtwo">
                                              <label for="tg-adtwo"></label>
                                          </span>
                                      </td>
                                      <td><img src="images/cars/red-1.jpeg" width="50" height="50"  alt="image description"></td>
                                      <td>
                                          <h6>2020 Volkswagen Jetta Red.</h6>
                                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                                      </td>
                                      <td><h6>Cars</h6><span>Jetta</span></td>
                                      <td>Yes</td>
                                      <td><span class="btn-warning">inactive</span></td>
                                      <td>
                                          <h6>Ksh 1,470,000</h6>                         
                                      </td>
                                      <td>
                                          <time datetime="2017-08-08">Jun 27, 2017</time>
                                          <span>Published</span>
                                      </td>
                                      <td>
                                          <div class="tg-btnsactions">
                                              <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>
  
                                  <tr>
                                      <td >
                                          <span class="tg-checkbox">
                                              <input id="tg-adthree" type="checkbox" name="myads" value="myadthree">
                                              <label for="tg-adthree"></label>
                                          </span>
                                      </td>
                                      <td ><img src="images/house6.jpg" width="50" height="50"  alt="image description"></td>
                                      <td>
                                          <h6>sheka’s house </h6>
                                          <span>Ad ID: ng3D5hAMHPajQrM</span>
                                      </td>
                                      <td><h6>Property</h6><span>House</span></td>
                                      <td>Yes</td>
                                      <td>
                                          <span class="btn-success">active</span>
                                         
                                      </td>
                                      <td >
                                          <h6>Ksh 23,000,000</h6>             
                                      </td>
                                      <td>
                                          <time datetime="2017-08-08">Jun 27, 2017</time>
                                          <span>Published</span>
                                      </td>
                                      <td>
                                          <div class="tg-btnsactions">
                                              <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                              <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                          </div>
                                      </td>
                                  </tr>

                              </tbody>
  
                          </table>
                          <div class="card-footer">
                            <div class="block-27" style="float: left;">
                              <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                              </ul>
                            </div>
                          </div>
                          </div>
                          
  
                        </div>
                    
                      </div>
                  </div>
  
          </div>
          </section>
  
  
    @endsection