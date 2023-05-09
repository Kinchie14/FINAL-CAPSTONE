@extends('layout')
@section('content')
<div class="d-flex justify-content-center">        
    <form action="" class="bg-danger rounded">        
        <div class="contact m-5">
            <h2 class="text-light"><b>Contact Us</b></h2>
            <p>Our team is happy to answer your questions. Fill out the form and we'll be in touch as soon as possible</p>
         </div>
        <div class="cigar m-5">            
            <input type="name" name="name" id="name" class="form-control" placeholder="Full Name">
        </div>        
    
        <div class="cigar m-5">            
            <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        </div>

        <div class="cigar m-5">
            <textarea name="message" rows="3" placeholder='Type Your Message Here' class="form-control"></textarea>
            <button type="submit" class="btn btn-warning p-3 my-3"><b>Submit</b></button>
        </div>        
    </form>    
    </div> 
    
    <div class="row d-flex justify-content-center gap-5 m-5 p-5">
        <div class="card p-0" style="width: 22rem;">
          <img src="{{ asset('image/allan.png') }}" class="card-img-top" alt="..." style="height: 22rem;">
          <div class="card-body">
            <h5 class="card-title">Allan Sarino</h5>
            <a href="#" class="start btn btn-danger text-white w-100 my-2">Github</a>
          </div>
        </div>

        <div class="card p-0" style="width: 22rem;">
            <img src="{{ asset('image/lester.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Jan Lester Cinco</h5>
              <a href="#" class="start btn btn-danger text-white w-100 my-2">Github</a>
            </div>
        </div>

        <div class="card p-0" style="width: 22rem;">
          <img src="{{ asset('image/earl.jpg') }}" class="card-img-top" alt="..." style="height: 22rem;">
          <div class="card-body">
            <h5 class="card-title">Earl Barquilla</h5>
            <a href="#" class="start btn btn-danger text-white w-100 my-2">Github</a>
          </div>
        </div>
    </div>
@endsection