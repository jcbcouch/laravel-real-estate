<!DOCTYPE html>

<html lang="en-us" >
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="{{ asset('css/base.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/forms.css') }}">

    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/admin/css/responsive.css">
    

<meta name="robots" content="NONE,NOARCHIVE">
</head>


<body class=" app-listings model-listing change-form"
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
&rsaquo; <a href="/admin/listings/">Listings</a>
&rsaquo; <a href="/admin/listings/listing/">Listings</a>
&rsaquo; Add listing
</div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Add listing</h1>
        <div id="content-main">



<form enctype="multipart/form-data" action="/admin/listings/{{$listing->id}}" method="post" id="listing_form" novalidate>
    @csrf
    @method('PUT')
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-realtor">
            
            
                <div>
                    
                    
                        <label class="required" for="id_realtor">Realtor:</label>
                        
                            <div class="related-widget-wrapper">
    <select name="realtor_id" required id="id_realtor">
  {{-- <option value="" selected>---------</option> --}}
  @foreach ($realtors as $realtor)
  <option value="{{$realtor->id}}" @if($realtor->id == $listing->realtor->id) selected @endif>{{$realtor->name}}</option>
  @endforeach

</select>
    
        {{-- <a class="related-widget-wrapper-link change-related" id="change_id_realtor"
            data-href-template="/admin/realtors/realtor/__fk__/change/?_to_field=id&amp;_popup=1"
            title="Change selected realtor"><img src="/static/admin/img/icon-changelink.svg" alt="Change"></a><a class="related-widget-wrapper-link add-related" id="add_id_realtor"
            href="/admin/realtors/realtor/add/?_to_field=id&amp;_popup=1"
            title="Add another realtor"><img src="/static/admin/img/icon-addlink.svg" alt="Add"></a><a class="related-widget-wrapper-link delete-related" id="delete_id_realtor"
            data-href-template="/admin/realtors/realtor/__fk__/delete/?_to_field=id&amp;_popup=1"
            title="Delete selected realtor"><img src="/static/admin/img/icon-deletelink.svg" alt="Delete"></a> --}}
    
</div>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-title">
            
            
                <div>
                    
                    
                        <label class="required" for="id_title">Title:</label>
                        
                            <input type="text" name="title" class="vTextField" maxlength="200" required id="id_title" value="{{$listing->title}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-address">
            
            
                <div>
                    
                    
                        <label class="required" for="id_address">Address:</label>
                        
                            <input type="text" name="address" class="vTextField" maxlength="200" required id="id_address" value="{{$listing->address}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-city">
            
            
                <div>
                    
                    
                        <label class="required" for="id_city">City:</label>
                        
                            <input type="text" name="city" class="vTextField" maxlength="100" required id="id_city" value="{{$listing->city}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-state">
            
            
                <div>
                    
                    
                        <label class="required" for="id_state">State:</label>
                        
                            <input type="text" name="state" class="vTextField" maxlength="100" required id="id_state" value="{{$listing->state}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-zipcode">
            
            
                <div>
                    
                    
                        <label class="required" for="id_zipcode">Zipcode:</label>
                        
                            <input type="text" name="zipcode" class="vTextField" maxlength="20" required id="id_zipcode" value="{{$listing->zipcode}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-description">
            
            
                <div>
                    
                    
                        <label for="id_description">Description:</label>
                        
                            <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">{{$listing->description}}"
</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-price">
            
            
                <div>
                    
                    
                        <label class="required" for="id_price">Price:</label>
                        
                            <input type="number" name="price" class="vIntegerField" required id="id_price" value="{{$listing->price}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-bedrooms">
            
            
                <div>
                    
                    
                        <label class="required" for="id_bedrooms">Bedrooms:</label>
                        
                            <input type="number" name="bedrooms" class="vIntegerField" required id="id_bedrooms" value="{{$listing->bedrooms}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-bathrooms">
            
            
                <div>
                    
                    
                        <label class="required" for="id_bathrooms">Bathrooms:</label>
                        
                            <input type="number" name="bathrooms" step="0.1" required id="id_bathrooms" value="{{$listing->bathrooms}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-garage">
            
            
                <div>
                    
                    
                        <label class="required" for="id_garage">Garage:</label>
                        
                            <input type="number" name="garage" value="0" class="vIntegerField" required id="id_garage" value="{{$listing->garage}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-sqft">
            
            
                <div>
                    
                    
                        <label class="required" for="id_sqft">Sqft:</label>
                        
                            <input type="number" name="sqft" class="vIntegerField" required id="id_sqft" value="{{$listing->sqft}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-lot_size">
            
            
                <div>
                    
                    
                        <label class="required" for="id_lot_size">Lot size:</label>
                        
                            <input type="number" name="lot_size" step="0.1" required id="id_lot_size" value="{{$listing->lot_size}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_main">
            
            
                <div>
                    
                    
                        <label class="required" for="id_photo_main">Photo main:</label>
                        
                            <input type="file" name="photo_main" accept="image/*" required id="id_photo_main">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_1">
            
            
                <div>
                    
                    
                        <label for="id_photo_1">Photo 1:</label>
                        
                            <input type="file" name="photo_1" accept="image/*" id="id_photo_1">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_2">
            
            
                <div>
                    
                    
                        <label for="id_photo_2">Photo 2:</label>
                        
                            <input type="file" name="photo_2" accept="image/*" id="id_photo_2">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_3">
            
            
                <div>
                    
                    
                        <label for="id_photo_3">Photo 3:</label>
                        
                            <input type="file" name="photo_3" accept="image/*" id="id_photo_3">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_4">
            
            
                <div>
                    
                    
                        <label for="id_photo_4">Photo 4:</label>
                        
                            <input type="file" name="photo_4" accept="image/*" id="id_photo_4">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_5">
            
            
                <div>
                    
                    
                        <label for="id_photo_5">Photo 5:</label>
                        
                            <input type="file" name="photo_5" accept="image/*" id="id_photo_5">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo_6">
            
            
                <div>
                    
                    
                        <label for="id_photo_6">Photo 6:</label>
                        
                            <input type="file" name="photo_6" accept="image/*" id="id_photo_6">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-is_published">
            
            
                <div class="checkbox-row">
                    
                    
                        <input type="checkbox" name="is_published" id="id_is_published" checked><label class="vCheckboxLabel" for="id_is_published">Is published</label>
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-list_date">
            
            
                <div>
                    
                    
                        <label for="id_list_date_0">List date:</label>
                        
                            <p class="datetime">
  Date: <input type="text" name="list_date_0" value="2024-02-12" class="vDateField" size="10" id="id_list_date_0">

<br>
  Time: <input type="text" name="list_date_1" value="17:35:41" class="vTimeField" size="8" id="id_list_date_1">


</p><input type="hidden" name="initial-list_date_0" value="2024-02-12" id="initial-id_list_date_0"><input type="hidden" name="initial-list_date_1" value="17:35:41" id="initial-id_list_date_1">
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">


{{-- <input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue"> --}}


</div>



    <script type="text/javascript"
            id="django-admin-form-add-constants"
            src="/static/admin/js/change_form.js"
            
                data-model-name="listing"
            >
    </script>




<script type="text/javascript"
        id="django-admin-prepopulated-fields-constants"
        src="/static/admin/js/prepopulate_init.js"
        data-prepopulated-fields="[]">
</script>


</div>
</form></div>

        
        <br class="clear">
    </div>
    <!-- END Content -->

    <div id="footer"></div>
</div>
<!-- END Container -->

</body>
</html>
