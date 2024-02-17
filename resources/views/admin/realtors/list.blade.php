<!DOCTYPE html>

<html lang="en-us" >
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/changelists.css') }}">  
<link rel="stylesheet" type="text/css" href="{{ asset('css/forms.css') }}">



    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.css">
    

<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" app-realtors model-realtor change-list"
  data-admin-utc-offset="0">

<!-- Container -->
<div id="container">

    
    <!-- Header -->
    <div id="header">
        <div id="branding">
        
  <h1 id="head">
    <img src="/static/img/logo.png" alt="BT Real Estate" height="50" width="80" class="brand_img"> Admin Area
  </h1>

        </div>
        
        
        <div id="user-tools">
            
                Welcome,
                <strong>jcbcouch</strong>.
            
            
                
                    <a href="/">View site</a> /
                
                
                    
                    
                
                
                <a href="/admin/password_change/">Change password</a> /
                
                <a href="/admin/logout/">Log out</a>
            
        </div>
        
        
        
    </div>
    <!-- END Header -->
    
<div class="breadcrumbs">
<a href="/admin/">Home</a>
&rsaquo; <a href="/admin/realtors/">Realtors</a>
&rsaquo; Realtors
</div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Select realtor to change</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            


  
  <li>
    
    <a href="/admin/realtors/realtor/add/" class="addlink">
      Add realtor
    </a>
  </li>
  


          
        </ul>
    
    
    <div class="module" id="changelist">
      

<div id="toolbar"><form id="changelist-search" method="get">
<div><!-- DIV needed for valid HTML -->
<label for="searchbar"><img src="/static/admin/img/search.svg" alt="Search"></label>
<input type="text" size="40" name="q" value="" id="searchbar" autofocus>
<input type="submit" value="Search">


</div>
</form></div>


      

      
        
      

      <form id="changelist-form" method="post" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="wKHrAgURdgPuJ4bjv54sMf4gE7fZXfo3bEgOEOZCtXlTXT59cH5kjIlYGtlLtq9S">
      

      
          
<div class="actions">
  
    
    <label>Action: <select name="action" required>
  <option value="" selected>---------</option>

  <option value="delete_selected">Delete selected realtors</option>

</select></label><input type="hidden" name="select_across" value="0" class="select-across">
    
    
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
    
    
        <span class="action-counter" data-actions-icnt="1">0 of 1 selected</span>
        
    
    
  
</div>

          


<div class="results">
<table id="result_list">
<thead>
<tr>

<th scope="col"  class="action-checkbox-column">
   
   {{-- <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-id"> --}}
   
     
   
   <div class="text"><a href="?o=1">ID</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-name">
   
     
   
   <div class="text"><a href="?o=2">Name</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-email">
   
     
   
   <div class="text"><a href="?o=3">Email</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-hire_date">
   
     
   
   <div class="text"><a href="?o=4">Hire date</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

  @foreach ($realtors as $realtor)
<tr class="row1">
  {{-- <td class="action-checkbox"><input type="checkbox" name="_selected_action" value="1" class="action-select"></td> --}}
  <th class="field-id"><a href="/admin/realtors/realtor/1/change/">{{$realtor->id}}</a></th>
  <td class="field-name"><a href="/admin/realtors/realtor/1/change/">{{$realtor->name}}</a></td>
  <td class="field-email">{{$realtor->email}}</td>
  <td class="field-hire_date nowrap">Feb. 6, 2024, 11:36 a.m.</td>
</tr>
@endforeach
</tbody>
</table>
</div>


          
      
      

<p class="paginator">

1 realtor


</p>

      </form>
    </div>
  </div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
