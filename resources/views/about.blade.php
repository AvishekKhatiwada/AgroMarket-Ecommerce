@extends('layout')
@section('title') AgroMarket About Us @endsection
@section('keywords')   @endsection
@section('description') @endsection
@section('content')
 
<div align="center" style="background:#1CD5E8;padding:20px;">
<h3  class="black-text" style="font-weight:bold;margin-top:15px;">
THE VEGETABLE CRISIS SOLVER</h3>
<p class="white-text" style="font-weight:bold;">    JOURNEY OF PLANT FROM FARMLAND TO YOUR DOORSTEP</p>
  

</div>

<div class="container-fluid" style="background:white;font-family: 'Balsamiq Sans', cursive;">
    <div class="row px-5"> 
        <div   class="col-md-12 ">
            <div align="center">
               <p class="col-md-4">
                    <img src="{{url('assets/img/Logo.webp')}}" class="img-fluid">
                </p>
            </div>
              <p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Agromarket is an online marketplace for fresh, local vegetables. We connect farmers with consumers, so you can be sure that the vegetables you buy are fresh, high-quality, and sustainably grown.
              </p>
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; We believe that everyone should have access to fresh, local vegetables, regardless of where they live. That's why we work with farmers from all over the country to bring you the best possible selection of vegetables.

We offer a wide variety of vegetables, including organic, heirloom, and conventional varieties. We also offer a variety of delivery options, so you can get your vegetables delivered to your door, or pick them up at a local farmers market.</p>

<h1 align="center" class="black-text" style="font-weight:bold;">  Our Values</h1>

    <div align="center">
               <p class="col-md-4">
                    <img src="{{url('Img/About/1.jpg')}}" class="img-fluid">
                </p>
    </div>
 

<h2 align="center" class="black-text" style="font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
At Agromarket, we believe in the following </h2>
<p style="text-align: justify;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<p>Freshness: We only sell fresh, local vegetables that have been picked within the past 24 hours. We know that the taste and nutritional value of vegetables starts to decline as soon as they are picked, so we make sure to get our vegetables to you as quickly as possible.</p>
<p>Quality: We only sell high-quality vegetables that have been grown using sustainable farming practices. We believe that the best way to grow vegetables is to use methods that protect the environment and the health of the farmers who grow them.</p>
<p>Convenience: We offer a variety of delivery options so you can get your vegetables delivered to your door, or pick them up at a local farmers market. We know that everyone's lifestyle is different, so we want to make it as easy as possible for you to get the vegetables you need.</p>
<p>Affordability: We offer our vegetables at a competitive price, so everyone can afford to eat healthy. We believe that everyone should have access to fresh, local vegetables, regardless of their income.</p>


</p> 
 
        </div>
        <div align="center" class="col-md-12">
        <div class="col-md-8  ">
            
<h1 align="center" class="black-text" style="font-weight:bold;">GALLARY</h1>

                                    <!--Carousel Wrapper-->
                        <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
                          <!--Indicators-->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                          </ol>
                          <!--/.Indicators-->
                          <!--Slides-->
                              <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/1.jpg')}}"
                                      alt="First slide">
                                    <div class="mask rgba-black-light"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"></h3>
                                    <p></p>
                                  </div>
                                </div>
                              
                                
                                  <div class="carousel-item">
                                  <!--Mask color-->
                                  <div class="view">
                                    <img class="d-block w-100" src="{{url('Img/Gallary/2.jpg')}}"
                                      alt="Third slide">
                                    <div class="mask rgba-black-slight"></div>
                                  </div>
                                  <div class="carousel-caption">
                                    <h3 class="h3-responsive"> </h3>
                                    <p> </p>
                                  </div>
                                </div>
                              </div>

                          <!--/.Slides -->
                          <!--Controls-->
                          <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                          <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->
        </div>
        </div>
        <div align="center" class="col-md-3"> </div>
         <div align="left"  class="col-md-6 mx-3">
              <br>    <br>
                <span class="black-text" style="font-weight:bold;font-size:25px;">Mission:</span> Our mission is to make it easy for people to eat healthy, sustainable food. <br>
        
            <span class="black-text" style="font-weight:bold;font-size:25px;">Vision:</span> Digitalize agriculture product
             
        </div>
    </div>
 <br><br>
   
</div>


@endsection