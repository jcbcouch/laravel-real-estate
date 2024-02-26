<x-admin>
    
        <div class="breadcrumbs">
                <a href="/admin/">Admin</a>
                &rsaquo; <a href="/admin/listings/">Listings</a>
                &rsaquo; Create Listing
                </div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Add listing</h1>
        <div id="content-main">



<form enctype="multipart/form-data" action="/admin/listings" method="post" id="listing_form" novalidate>
    @csrf
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-realtor">
            
            
                <div>
                    
                    
                        <label class="required" for="id_realtor">Realtor:</label>
                        
                            <div class="related-widget-wrapper">
    <select name="realtor_id" required id="id_realtor">
  {{-- <option value="" selected>---------</option> --}}
  @foreach ($realtors as $realtor)
  <option value="{{$realtor->id}}">{{$realtor->name}}</option>
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
                        
                            <input type="text" name="title" class="vTextField" maxlength="200" required id="id_title">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-address">
            
            
                <div>
                    
                    
                        <label class="required" for="id_address">Address:</label>
                        
                            <input type="text" name="address" class="vTextField" maxlength="200" required id="id_address">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-city">
            
            
                <div>
                    
                    
                        <label class="required" for="id_city">City:</label>
                        
                            <input type="text" name="city" class="vTextField" maxlength="100" required id="id_city">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-state">
            
            
                <div>
                    
                    
                        <label class="required" for="id_state">State:</label>
                        
                            {{-- <input type="text" name="state" class="vTextField" maxlength="100" required id="id_state"> --}}
                            <select name="state" class="form-control">
                                <option selected="true" disabled="disabled">State (All)</option>
                                <option value="AL">Alabama</option>
                                <option value="AK">Alaska</option>
                                <option value="AZ">Arizona</option>
                                <option value="AR">Arkansas</option>
                                <option value="CA">California</option>
                                <option value="CO">Colorado</option>
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="DC">District Of Columbia</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="HI">Hawaii</option>
                                <option value="ID">Idaho</option>
                                <option value="IL">Illinois</option>
                                <option value="IN">Indiana</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NV">Nevada</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NM">New Mexico</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="ND">North Dakota</option>
                                <option value="OH">Ohio</option>
                                <option value="OK">Oklahoma</option>
                                <option value="OR">Oregon</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="SD">South Dakota</option>
                                <option value="TN">Tennessee</option>
                                <option value="TX">Texas</option>
                                <option value="UT">Utah</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WA">Washington</option>
                                <option value="WV">West Virginia</option>
                                <option value="WI">Wisconsin</option>
                                <option value="WY">Wyoming</option>
                              </select>
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-zipcode">
            
            
                <div>
                    
                    
                        <label class="required" for="id_zipcode">Zipcode:</label>
                        
                            <input type="text" name="zipcode" class="vTextField" maxlength="20" required id="id_zipcode">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-description">
            
            
                <div>
                    
                    
                        <label for="id_description">Description:</label>
                        
                            <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">
</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-price">
            
            
                <div>
                    
                    
                        <label class="required" for="id_price">Price:</label>
                        
                            <input type="number" name="price" class="vIntegerField" required id="id_price">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-bedrooms">
            
            
                <div>
                    
                    
                        <label class="required" for="id_bedrooms">Bedrooms:</label>
                        
                            <input type="number" name="bedrooms" class="vIntegerField" required id="id_bedrooms">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-bathrooms">
            
            
                <div>
                    
                    
                        <label class="required" for="id_bathrooms">Bathrooms:</label>
                        
                            <input type="number" name="bathrooms" step="0.1" required id="id_bathrooms">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-garage">
            
            
                <div>
                    
                    
                        <label class="required" for="id_garage">Garage:</label>
                        
                            <input type="number" name="garage" value="0" class="vIntegerField" required id="id_garage">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-sqft">
            
            
                <div>
                    
                    
                        <label class="required" for="id_sqft">Sqft:</label>
                        
                            <input type="number" name="sqft" class="vIntegerField" required id="id_sqft">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-lot_size">
            
            
                <div>
                    
                    
                        <label class="required" for="id_lot_size">Lot size:</label>
                        
                            <input type="number" name="lot_size" step="0.1" required id="id_lot_size">
                        
                    
                    
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
            
            
                {{-- <div>
                    
                    
                        <label for="id_list_date_0">List date:</label>
                        
                            <p class="datetime">
  Date: <input type="text" name="list_date_0" value="2024-02-12" class="vDateField" size="10" id="id_list_date_0">

<br>
  Time: <input type="text" name="list_date_1" value="17:35:41" class="vTimeField" size="8" id="id_list_date_1">


</p><input type="hidden" name="initial-list_date_0" value="2024-02-12" id="initial-id_list_date_0"><input type="hidden" name="initial-list_date_1" value="17:35:41" id="initial-id_list_date_1">
                        
                    
                    
                </div> --}}
            
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
</x-admin>