 <!-- resources/views/mypage.blade.php -->
 @extends('layouts.app')
 @section('content')
<!doctype html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      
      }
    </style>

    
  </head>
<body>
    


<main>
  
  

  <!--<section class="py-5 text-center container">-->
    <div id="target"></div>
    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyB8yMxBqL8PNWMPHWoR8RkmqQUEpuGGvto&callback=initMap" async defer></script>
    <script>
      function initMap(){
        'use srtrict';
        //描画領域取得
        var target =document.getElementById('target');
        
        var map;
        
        var tokyo ={lat:35.681167, lng:139.767052};
        
        
        map = new google.maps.Map(target, {
          center: tokyo,
          zoom:15,
          disableDefaultUI: true,
          zooomControl : true,
          mapTypeId: 'hybrid',
          
          });
          
        
      }
    </script>
   
  <!--</section>-->
  <section>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($hotels as $hotel)
        <div class="col">
          <div class="card shadow-sm">
            <a  href="{{ url ('hotelpage/'.optional($hotel)->id) }}">
            <img class="bd-placeholder-img card-img-top" src="{{ asset ('/hotelImages/'.optional($hotel)->h_img ) }}" x="0" y="0"  width="100%" height="225"/>
            </a>
            <div class="card-body">
              <p class="card-text">"{{ optional($hotel)->h_name}}"</p>
                <div class="btn-group">
                  <form action="{{ url ('hotelpage/'.optional($hotel)->id) }}">
                  <button type="POST" class="btn btn-sm btn-outline-secondary">View</button>
                  
                  
                  <button type="button" class="btn btn-sm btn-outline-secondary"><img src="{{ asset('/images/heart_01.png')}}" height="18px"></button>
                  
                  <!--<button type="button" class="btn btn-sm btn-outline-secondary"><img src="{{ asset('/images/heart_gry.png')}}" height="18px"></button>-->
                  
                  </form>
                  
                </div>
                <small class="text-muted">9 mins</small>
            </div>
          </div>
        </div>
        @endforeach
      </div>
  
    </div>
  </div>
 </section>
</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="{{ url('/') }}">Back to top</a>
    </p>
    <!--<p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>-->
    <!--<p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>-->
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
@endsection