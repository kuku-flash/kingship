
@extends('layouts.client')
    @section('content')
    <section class="hero-wrap-3 js-smallheight" style="background-image: url('images/vw.jpeg');" data-stellar-background-ratio="0.5">
        <div class="overlay"> <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Messages<span><i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Messages/offers</h1>
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

                            
                        <div class="col-lg-12"> 
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Offers/Messages</h4>
                    
                                    
                                </div>
        
                                <div class="card-body">
                                    <div class="row">
                                    
                                    <div class="col-lg-4 col-sm-4 bg-light">
                                    <div class="input-group input-group-sm" >
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-list">
                                            <img class="chat-avatar" src="images/person_2.jpg">
                                            <span class="ads-text">flash kuku</span>
                                            <div class="chat-dot-green"></div> 
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-list">
                                            <img class="chat-avatar" src="images/person_2.jpg">
                                            <span class="ads-text">flash kuku</span>
                                            <div class="chat-dot-green"></div> 
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-list">
                                            <img class="chat-avatar" src="images/person_2.jpg">
                                            <span class="ads-text">flash kuku</span>
                                            
                                        </div>
                                    </div>
                                    <div class="chat">
                                        <div class="chat-list">
                                            <img class="chat-avatar" src="images/person_2.jpg">
                                            <span class="ads-text">flash kuku</span>
                                            <div class="chat-dot-green"></div> 
                                        </div>
                                    </div>
                                    </div>

                                    <div class="col-lg-8">
                                    <div class="direct-chat-messages">
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="images/Person2.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Is this template really for free? That's unbelievable!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                        
                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="images/person_3.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            You better believe it!
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                        
                                        <!-- Message. Default to the left -->
                                        <div class="direct-chat-msg">
                                            <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-left">Alexander Pierce</span>
                                            <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="images/person_2.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            Working with AdminLTE on a great new app! Wanna join?
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                        
                                        <!-- Message to the right -->
                                        <div class="direct-chat-msg right">
                                            <div class="direct-chat-infos clearfix">
                                            <span class="direct-chat-name float-right">Sarah Bullock</span>
                                            <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                                            </div>
                                            <!-- /.direct-chat-infos -->
                                            <img class="direct-chat-img" src="images/person_4.jpg" alt="message user image">
                                            <!-- /.direct-chat-img -->
                                            <div class="direct-chat-text">
                                            I would love to.
                                            </div>
                                            <!-- /.direct-chat-text -->
                                        </div>
                                        <!-- /.direct-chat-msg -->
                                        
                                        </div>
                                        <form action="#" method="post">
                                        <div class="input-group">
                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                            <span class="input-group-append">
                                            <button type="button" class="btn btn-primary">Send</button>
                                            </span>
                                        </div>
                                        </form>

                                    </div>
                                </div>
                                    
                                </div>
        
                                <div class="card-footer bg-light">
                                    
                                </div>
                                </div>
                                
                                
                            
                        </div>
                        <div class="col-lg-5 col-sm-4"> 
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title-2">Featured Ads</h4>
                    
                                    
                                </div>
        
                                <div class="card-body">
                                    <div class="form-group">
                                        <div class="input-group input-group-sm" style="height: 50;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                                            </div>
                                            </div>
                                    </div>
                                    <div class="ads">
                                        <div class="ads-list-sm">
                                            <img class="ads-img" src="images/car-4.jpg" width="20" height="20">
                                            <span class="ads-text">New lenovo laptop i5 for sale</span>
                                            <div class="chat-dot"></div>
                                        </div>
                                    </div>
                                    <div class="ads">
                                        <div class="ads-list-sm ads">
                                            <img class="ads-img" src="images/car-4.jpg" width="20" height="20">
                                            <span class="ads-text">Brand New lenovo laptop i5 for sale</span>                 
                                            
                                        </div>
                                        <div class="ads-list-sm ads">
                                            <img class="ads-img" src="images/car-4.jpg" width="20" height="20">
                                            <span class="ads-text">Brand New lenovo laptop i5 for sale</span>                 
                                            <div class="chat-dot"></div>
                                        </div>
                                        
                                    </div>
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