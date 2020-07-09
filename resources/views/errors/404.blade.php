@extends('layout')

@section('content')

<section class="page-title page-bg bg-opacity section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Página No Encontrada</h2>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Inicio</a></li>
                        <li>Page Not Found</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-padding">
   <div class="container">
     <div class="row">
         <div class="col-md-7">
            <div class="error-page-content">
              <h3>The page you are looking for does not exist.</h3>
              <p>We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address incorrectly.</p>
            <a class="btn btn-default btn-style hvr-shutter-out-vertical" href="{{route('home')}}">Inicio</a>
            </div>
         </div>
         <div class="col-md-5">
            <div class="error-text text-center">
                 <h2>404</h2>
                 <span>Opps <i class="fa fa-meh-o" aria-hidden="true"></i></span>
             </div>
         </div>
     </div>
   </div>
</section>

@stop