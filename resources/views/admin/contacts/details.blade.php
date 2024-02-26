<x-admin>
    
        <div class="breadcrumbs">
                <a href="/admin/">Admin</a>
                &rsaquo; <a href="/admin/contacts/">Contacts</a>
                &rsaquo; Details
                </div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Add contact</h1>
        <div id="content-main">

                <form method="POST" action='/admin/contacts/{{$contact->id}}'>
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">DELETE
                        </button>
                    </form>

<form action="" method="post" id="contact_form" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="FgAWECUcWIegWCUGj7Enfr9nT77sfcyktzdY46xaLOfbBhI0UP8xi2PQL1cbHYeu">
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-listing">
            
            
                <div>
                    
                    
                        <label class="required" for="id_listing">Listing:</label>
                        
                            <input type="text" value="{{$contact->listing}}" class="vTextField"  disabled>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-listing_id">
            
            
                <div>
                    
                    
                        <label class="required" for="id_listing_id">Listing id:</label>
                        
                            <input type="number"  class="vIntegerField"  value="{{$contact->id}}" disabled>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-name">
            
            
                <div>
                    
                    
                        <label class="required" for="id_name">Name:</label>
                        
                            <input type="text" value="{{$contact->name}}" required id="id_name" disabled>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email">Email:</label>
                        
                            <input type="text" value="{{$contact->email}}" class="vTextField"  disabled >
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone">
            
            
                <div>
                    
                    
                        <label class="required" for="id_phone">Phone:</label>
                        
                            <input type="text" value="{{$contact->phone}}" disabled id="id_phone">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-message">
            
            
                <div>
                    
                    
                        <label for="id_message">Message:</label>
                        
                            <textarea name="message" cols="40" rows="10" disabled>{{$contact->message}}
</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-contact_date">
            
            
                <div>
                    
                    
                        <label for="id_contact_date_0">Contact date:</label>
                        
                            <p class="datetime">
  <input type="text"  value="{{$contact->created_at}}"  disabled>


</p>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-user_id">
            
            
                <div>
                    
                    
                        <label for="id_user_id">User id:</label>
                        
                            <input type="number" value="{{$contact->user_id}}" disabled>
                        
                    
                    
                </div>
            
        </div>
    
</fieldset>












{{-- 
<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">


<input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue">


</div> --}}



    <script type="text/javascript"
            id="django-admin-form-add-constants"
            src="/static/admin/js/change_form.js"
            
                data-model-name="contact"
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
