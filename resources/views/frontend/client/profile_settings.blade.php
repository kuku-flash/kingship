@extends('layouts.client')
    @section('content')
    <section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"> <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Profile Settings<span><i class="ion-ios-arrow-forward"></i></span></p>
              <h1 class="mb-3 bread">Profile  Settings</h1>
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
                                    <h4 class="card-title-2">Profile Detials</h4>
                    
                                    
                                  </div>
          
                                  <div class="card-body">
                                     
                                      <form class="form-group">
                                          <div class="form-group">
                                          <p>I'm a: </p>
                                          <input class="" type="radio" name="gender" value="male">male
                                          <input type="radio" name="gender" value="female">male
                                          <input type="radio" name="gender" value="other">other
                                          </div>
  
                                          <div class="form-group">
                                              <input class="form-control" type="text" name="username" placeholder="Username">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="email" name="email" placeholder="Email">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="text" name="firstname" placeholder="First Name">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="text" name="lastname" placeholder="Last Name">
                                          </div>
  
                                          
                                          
  
                                          <div class="form-group">
                                             <button type="submit" class="btn btn-success">Update</button> 
                                          </div>
  
                                      </form>
                                  </div>
          
                                  <div class="card-footer bg-light">
                                      
                                  </div>
                                </div>   
                          </div>
  
                          <div class="col-lg-5 col-sm-4"> 
                              <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title-2">Change Password</h4>
                    
                                    
                                  </div>
          
                                  <div class="card-body">
                                     
                                      <form class="form-group">
  
                                          <div class="form-group">
                                              <input class="form-control" type="password" name="password" placeholder="Current Password">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="password" name="newpassword" placeholder="New Password">
                                          </div>
                                          <div class="form-group">
                                              <input class="form-control" type="password" name="newpassword" placeholder="Confirm New Password">
                                          </div>
            
  
                                          <div class="form-group">
                                             <button type="submit" class="btn btn-success">Change Password</button> 
                                          </div>
  
                                      </form>
                                  </div>
          
                                  <div class="card-footer bg-light">
                                      
                                  </div>
                                </div>   
                          </div>
  
                          <div class="col-lg-5 col-sm-4"> 
                              <div class="card">
                                  <div class="card-header">
                                    <h4 class="card-title">Profile Photo</h4>
                                    <div class="avatar">
                                      <img src="images/person1.jpeg" alt="Avatar" class="avatar">
                                   </div>
                                    
                                  </div>
          
                                  <div class="card-body">
                                      <form class="form-group">
                                          <div class="form-group">
                                          <input class="form-control" type="file" name="image">
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-success">Upload</button> 
                                           </div>
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