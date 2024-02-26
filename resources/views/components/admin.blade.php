<!DOCTYPE html>

<html lang="en-us" >
<head>
<title></title>

<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/forms.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/changelists.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">



    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.css">
    

<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" app-realtors model-realtor change-form"
  data-admin-utc-offset="0">

<!-- Container -->
<div id="container">

    
    <!-- Header -->
    <div id="header">
        <div id="branding">
        
  <h1 id="head">
    <img src="/static/img/logo.png" alt="Real Estate" height="50" width="80" class="brand_img"> Admin Area
  </h1>

        </div>
        
        
        <div id="user-tools">
            
                Welcome,
                <strong>{{auth()->user()->username}}</strong>.
            
            
                
                    <a href="/">View site</a> /
                
                {{-- <a href="/admin/logout/">Log out</a> --}}
                <a href="#" onclick="event.preventDefault();
                                document.getElementById('magic-form').submit();">
              Log out</a>

                  <form id="magic-form" action="/logout" 
                      method="POST" style="display: none;">
                      @csrf 
                      <input type="hidden" />
                    </form>

            
        </div>
        
        
        
    </div>


    {{$slot}}


    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>