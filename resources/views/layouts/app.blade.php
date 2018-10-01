<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Herald Discussion Forum</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" href="/assets/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-zh-CN.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  </head>
  <body>
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
    @if(Request::is('/'))
    @include('inc.welcome')
    @endif
    @include('inc.navbar')
    @if(Request::is('contact'))
    @include('inc.location')
    @endif
    <div class="container">
      <br>
      @include('inc.messeges')
      @yield('forum')
    </div>
    
    <div class="container">
      <br>
      @yield('contact')
      
      <div class="row">
        <div class=" col-lg-8 col-sm-8">
          @yield('content')
          
        </div>
        <div class="col-lg-4 col-sm-4">
          @if(Request::is('about'))
          @include('inc.info')
          
          @endif
          @if(Request::is('/'))
          @include('inc.sidebar')
          
          
          @if(Request::is('/'))
          @include('inc.highlight')
          @endif
          
          @include('inc.suscribe')
          
          @endif
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              
            </div>
            <div class="col-lg-6 col-sm-6">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid" >
    
    @yield('conten')
  </div>
  <div class="container">
    @if(Request::is('about'))
    @include('inc.slider')
    @endif
    @yield('contents')
  </div>
  
  @if(Request::is('contact'))
  @include('inc.social')
  @endif
  <footer id="footer" class="text-center">
    Copyright &copy; 2018 Herald Discussion ---. All Rights Reserved.
  </footer>
</body>
<style>
body{
background:#D9D7FF;
}
#footer {
position: relative;
left: 0;
bottom: 0;
width: 100%;
margin-top:10px;
background-color:#08ce22;
color: white;
text-align: center;
padding: 20px;
}
</style>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b4df91091379020b95ef18e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>