@extends('layout')

@section('content')
<section class="page-title page-bg bg-opacity section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Contact Us</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
  <div class="container">
    <div class="section-title">
      <h2>Contact <span>Us</span></h2>
      <span class="s-title-icon"><i class="icofont icofont-diamond"></i></span>
    </div>
    <div class="row">
       <div class="col-md-3">
          <div class="contact-info text-center">
               <span><i class="fa fa-map-marker"></i></span>
               <h4>@lang('Our Address')</h4>
               <h6>25/1 London road, Brighum,London</h6>
          </div>
       </div>
       <div class="col-md-3">
           <div class="contact-info text-center">
               <span><i class="fa fa-phone" aria-hidden="true"></i></span>
               <h4>@lang('Call Us')</h4>
               <h6>+1 916-875-2586-458
            </h6>
          </div>
       </div>
       <div class="col-md-3">
           <div class="contact-info text-center">
               <span><i class="fa fa-map-marker"></i></span>
               <h4>Email Us</h4>
               <h6>info@domaim.com</h6>
          </div>
       </div>
       <div class="col-md-3">
           <div class="contact-info text-center">
               <span><i class="fa fa-globe" aria-hidden="true"></i></span>
               <h4>Our Website</h4>
               <h6>info@domaim.com</h6>
          </div>
       </div>
    </div>
    <div class="row padding-60">
       <div class="col-md-7 contact-team">
          <h3 class="text-center"> {{ __('Contact') }} <span> @lang('Our Team') </span></h3>
          <div class="contact-send-message">

          <form class="contact-form row" method="post" action="{{ route('contact') }}" role="form">
            @csrf
                <div class="col col-sm-6">
                  <input type="text" class="form-control" name="name"  placeholder="Enter Name*" value="{{ old('name') }}">
                  {!! $errors->first('name', '<small>:message</small><br>') !!}
                </div>
                <div class="col col-sm-6">
                <input type="text" class="form-control" name="email" placeholder="Enter E-mail*" value="{{ old('email') }}">
                  {!! $errors->first('email', '<small>:message</small><br>') !!}
                </div>
                <div class="col col-sm-6">
                  <input type="text" class="form-control" name="subjet" placeholder="Enter Subject*" value="{{ old('subjet') }}">
                  {!! $errors->first('subjet', '<small>:message</small><br>') !!}
                </div>
                <div class="col col-sm-6">
                  <input type="text" class="form-control" name="phone" placeholder="Enter Phone*" value="{{ old('phone') }}">
                  {!! $errors->first('phone', '<small>:message</small><br>') !!}
                </div>
                  <div class="col col-sm-12">
                     <textarea type="text" class="form-control" name="msg" placeholder="Enter Your Message*">{{ old('msg') }}</textarea>
                     {!! $errors->first('msg', '<small>:message</small><br>') !!}
                 </div>
                 <div class="col col-sm-12 text-center">
                    <button type="submit" class="btn btn-default btn-style hvr-shutter-out-vertical">Send Message</button>
                 </div>
             </form>

          </div>
       </div>
       <div class="col-md-5">
           <div id="map" class="thumbnail">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.5767342209324!2d-99.58683999955642!3d19.12621580905491!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd9281c048ac77%3A0xb1e1c6b63a63cba3!2sCalle%20I.%20Zaragoza%20Pte.%20128%2C%20Santiaguito%20Coaxustenco%2C%2052300%20Tenango%20del%20Valle%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1592871693897!5m2!1ses-419!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
       </div>
    </div>
  </div>
</section>

@stop