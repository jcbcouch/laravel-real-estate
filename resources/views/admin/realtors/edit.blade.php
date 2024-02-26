<x-admin>
    
        <div class="breadcrumbs">
                <a href="/admin/">Admin</a>
                &rsaquo; <a href="/admin/realtors/">Realtors</a>
                &rsaquo; Edit Realtor
                </div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="colM">
        
        <h1>Add realtor</h1>
        <div id="content-main">
                <form method="POST" action='/admin/realtors/{{$realtor->id}}'>
                        @csrf
                        @method('DELETE')
                        <button class="text-red-500">DELETE
                        </button>
                    </form>


<form enctype="multipart/form-data" action="/admin/realtors/{{$realtor->id}}" method="post">
        @csrf
        @method('PUT')
<div>







  <fieldset class="module aligned ">
    
    
    
        <div class="form-row field-name">
            
            
                <div>
                    
                    
                        <label class="required" for="id_name">Name:</label>
                        
                            <input type="text" name="name" class="vTextField" maxlength="200" required id="id_name" value="{{$realtor->name}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-photo">
            
            
                <div>
                    
                    
                        <label class="required" for="id_photo">Photo:</label>
                        
                            <input type="file" name="photo" accept="image/*" id="id_photo">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-description">
            
            
                <div>
                    
                    
                        <label for="id_description">Description:</label>
                        
                            <textarea name="description" cols="40" rows="10" class="vLargeTextField" id="id_description">{{$realtor->description}}
</textarea>
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-phone">
            
            
                <div>
                    
                    
                        <label class="required" for="id_phone">Phone:</label>
                        
                            <input type="text" name="phone" class="vTextField" maxlength="20" required id="id_phone" value="{{$realtor->phone}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-email">
            
            
                <div>
                    
                    
                        <label class="required" for="id_email">Email:</label>
                        
                            <input type="text" name="email" class="vTextField" maxlength="50" required id="id_email" value="{{$realtor->email}}">
                        
                    
                    
                </div>
            
        </div>
    
        <div class="form-row field-is_mvp">
            
            
                <div class="checkbox-row">
                    
                    
                        <input type="checkbox" name="is_mvp" id="id_is_mvp" @if($realtor->is_mvp == 1) checked @endif><label class="vCheckboxLabel" for="id_is_mvp">Is mvp</label>
                    
                    
                </div>
            
        </div>
    
        {{-- <div class="form-row field-hire_date">
            
            
                <div>
                    
                    
                        <label for="id_hire_date_0">Hire date:</label>
                        
                            <p class="datetime">
  Date: <input type="text" name="hire_date_0" value="2024-02-05" class="vDateField" size="10" id="id_hire_date_0">

<br>
  Time: <input type="text" name="hire_date_1" value="20:49:54" class="vTimeField" size="8" id="id_hire_date_1">


</p><input type="hidden" name="initial-hire_date_0" value="2024-02-05" id="initial-id_hire_date_0"><input type="hidden" name="initial-hire_date_1" value="20:49:54" id="initial-id_hire_date_1">
                        
                    
                    
                </div>
            
        </div> --}}
    
</fieldset>













<div class="submit-row">

<input type="submit" value="Save" class="default" name="_save">


{{-- <input type="submit" value="Save and add another" name="_addanother">
<input type="submit" value="Save and continue editing" name="_continue"> --}}


</div>



    <script type="text/javascript"
            id="django-admin-form-add-constants"
            src="/static/admin/js/change_form.js"
            
                data-model-name="realtor"
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
