@extends('layouts.client')
    @section('content')
    <section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"> <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Payments<span><i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Payments</h1>
            </div>
        </div>
        </div></div>
        
    </section>

        <section class="ftco-section"> 
            <div class="container">
                
                
                <div class="row ml-auto">
                    @include('inc.client_sidebar_nav')
                    <div class="col-md-9">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Payments</h4>
            
                            <div class="card-tools">
                            <nav class="navbar navbar-expand" style="float: left;">
                                <ul class="navbar-nav">
                                <li class="nav-item"><a href="#" class="nav-link">All Packages(12)</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">silver Package(3)</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Gold Package(5)</a></li>
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
                        <div class="card-body table-responsive pt-1 pr-4 pl-4">
                            <table  class="table  table-hover table-responsive text-wrap">
                            <thead class="thead bg-light">
                                <tr>
                                    <th><span class="tom-checkbox">
                                        <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                        <label for="tg-adone"></label>
                                    </span></th>
                                    <th>Package Title</th>
                                    <th>purchase Date</th>
                                    <th>Amount</th>
                                    <th>Expiry Date</th>
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
                                    <td>
                                        <h6>Silver Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>Jun 27, 2020</td>
                                    <td>
                                        <h6>Ksh 2,000</h6>                
                                    </td>
                                    <td>July 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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
                                    <td>
                                        <h6>Gold Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>May 27, 2020</td>
                                    <td>
                                        <h6>Ksh 3,000</h6>                
                                    </td>
                                    <td>Jun 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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
                                    <td>
                                        <h6>Basic Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>July 27, 2020</td>
                                    <td>
                                        <h6>Ksh 1,000</h6>                
                                    </td>
                                    <td>august 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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
                                    <td>
                                        <h6>Silver Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>Jun 27, 2020</td>
                                    <td>
                                        <h6>Ksh 2,000</h6>                
                                    </td>
                                    <td>July 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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
                                    <td>
                                        <h6>Gold Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>May 27, 2020</td>
                                    <td>
                                        <h6>Ksh 3,000</h6>                
                                    </td>
                                    <td>Jun 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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
                                    <td>
                                        <h6>Basic Package</h6>
                                        <span>Invoice ID: ng3D5hAMHPajQrM</span>
                                    </td>
                                    <td>July 27, 2020</td>
                                    <td>
                                        <h6>Ksh 1,000</h6>                
                                    </td>
                                    <td>august 27, 2020</td>
                                    <td>
                                        <div class="tg-btnsactions">
                                            <a href="javascript:void(0);"><i class="icon-eye"></i></a>
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