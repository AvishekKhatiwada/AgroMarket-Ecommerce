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
    @php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp
<!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">
  
    <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1> 
    <div align="center">
        <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
    </div>
    <div  class="row my-4 px-4 "  style="width:100%;" >
      @foreach($Products as $item)
      <div class="col-md-3 px-4 my-5"  >
          <a href="{{url('Shop/'.$item->url)}}">
              <img src=" {{asset('Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid"  >
              </a>
          <div class="py-2" style="background:white;">
            <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{$item->name}}</span>
            <br>
            Price : ₹ {{$item->price}}<br>
              @if($item->rating==1)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          @elseif($item->rating==2)
                          <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            @elseif($item->rating==3)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          
                            @elseif($item->rating==4)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                          
                            @else
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            @endif
                             
                            <br>
           
               <a href="Shop/{{$item->url}}" class="btn  btn-primary    "> Shop Now</a>
            
          </div>
      </div>  
     @endforeach
     

    </div>
   
    <hr class="col-md-6"> 
</section>

@endsection