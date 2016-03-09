@extends('layouts.app')

@section('content')
<!--content body start-->
  <div id="content_wrapper"> 
   
    <div class="clearfix"></div>
    
    <!-- traveller story section start -->
      <section class="full_width ds_traveller_story">
        <div class="container">
            <div class="row">
               
                <div class="col-lg-12 col-md-12 col-sm-12 travelite_about_right_side">
                <div class="right_side_details">
                    <h3>Welcome <b class="traveller_text_b">{{Auth::user()->name}}</b></h3>
                    @if(Auth::user()->business==NULL)
                    <p>
                        You don't have any business Registered. You can create your business now and add lsitings.
                        <br>
                        <a href="{{route('business.create')}}" class="btn btn-success">Create Your Business</a>
                    </p>
                    @else
                        <br>
                        <br>
                        <a href="{{route('business.show')}}" class="btn btn-success">Your Business</a>
                    @endif
                
                </div>
            </div>
            
        </div>
        
      </section>
      <!-- traveller story section End -->


@endsection
