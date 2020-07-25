@extends('layouts.client')
    @section('content')
        <section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
            <div class="overlay"> <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Privacy Settings<span><i class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Privacy Settings</h1>
                </div>
            </div>
            </div></div>
            
        </section>

            <section class="ftco-section"> 
                <div class="container">
                    
                    
                    <div class="row ml-auto">
                        @include('inc.client_sidebar_nav')
                        <div class="col-md-9">
                            <div class="row">

                                
                        
                            <div class="col-lg-7 col-sm-4"> 
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title-2">Privacy Settings</h4>
                        
                                        
                                    </div>
            
                                    <div class="card-body">
                                        
                                            <form class="form-group">
                                                
                                            <div class="privacy"> <input type="checkbox" name="privacy" value="#"> 
                                                I want my privacy be public
                                            </div>
                                            <div class="privacy"> <input type="checkbox" name="privacy" value="#"> 
                                                I want to recieve monthly newsletter
                                            </div>
                                            <div class="privacy"> <input type="checkbox" name="privacy" value="#"> 
                                                I want tpo recieve E-mail notification on message/offers
                                            </div>
                                            <div class="privacy"> <input type="checkbox" name="privacy" value="#"> 
                                                I want to recieve alert E-mails on new listings
                                            </div>
                                            <div class="privacy"> <input type="checkbox" name="privacy" value="#"> 
                                                I want my privacy be public
                                            </div>
                                                <button type="submit" class="btn btn-success">Update</button>
                                            </form>
                                        
                                        
                                    </div>
            
                                    <div class="card-footer bg-light">
                                        
                                    </div>
                                    </div>   
                            </div>
                        

                            <div class="col-lg-5 col-sm-4"> 
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Delete Account</h4>
                        
                                        
                                    </div>
            
                                    <div class="card-body">
                                        <form class="form-group">
                                            <div class="form-group">
                                            <select class="form-control">
                                                <option>Give Reason</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                            <textarea class="form-control" cols="4" rows="7">
                                                "description" 
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                                <button type="submit" class="btn btn-danger">Delete</button> </div>
                                            </form>
                                        
                                    </div>
            
                                    <div class="card-footer bg-light">
                                        
                                    </div>
                                    </div>   
                            </div>
                            
                            
                            
                            
                            
                    
                        

                            </div>
                        </div>
                    </div>

            </div>
            </section>
@endsection