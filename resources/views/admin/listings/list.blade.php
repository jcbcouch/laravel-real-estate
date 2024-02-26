<x-admin>
    
  <div class="breadcrumbs">
    <a href="/admin/">Admin</a>
    &rsaquo; <a href="/admin/listings/">Listings</a>
    &rsaquo; List
    </div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Select listing to change</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            


  
  <li>
    
    <a href="/admin/listings/create" class="addlink">
      Add listing
    </a>
  </li>
  


          
        </ul>
    
    
    <div class="module" id="changelist">
      

<div id="toolbar"><form id="changelist-search" method="get">
<div><!-- DIV needed for valid HTML -->
<label for="searchbar"><img src="/static/admin/img/search.svg" alt="Search"></label>
<input type="text" size="40" name="title" value="" id="searchbar" autofocus>
<input type="submit" value="Search">


</div>
</form></div>


      

      
        
      

      <form id="changelist-form" method="post" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="6YAyfsPWXgmlZu64T6uLnpOML7gbqYMgLS9Vj0UHdXSKdj0UAIvDUS5uNtmXW9x5">
      
        <div><input type="hidden" name="form-TOTAL_FORMS" value="1" id="id_form-TOTAL_FORMS"><input type="hidden" name="form-INITIAL_FORMS" value="1" id="id_form-INITIAL_FORMS"><input type="hidden" name="form-MIN_NUM_FORMS" value="0" id="id_form-MIN_NUM_FORMS"><input type="hidden" name="form-MAX_NUM_FORMS" value="1000" id="id_form-MAX_NUM_FORMS"></div>
      

      
          
{{-- <div class="actions">
  
    
    <label>Action: <select name="action" required>
  <option value="" selected>---------</option>

  <option value="delete_selected">Delete selected listings</option>

</select></label><input type="hidden" name="select_across" value="0" class="select-across">
    
    
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
    
    
        <span class="action-counter" data-actions-icnt="1">0 of 1 selected</span>
        
    
    
  
</div> --}}

          

<div class="hiddenfields">
<input type="hidden" name="form-0-id" value="1" id="id_form-0-id">
</div>


<div class="results">
<table id="result_list">
<thead>
<tr>

{{-- <th scope="col"  class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th> --}}
<th scope="col"  class="sortable column-id">
   
     
   
   <div class="text"><a href="?o=1">ID</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-title">
   
     
   
   <div class="text"><a href="?o=2">Title</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-is_published">
   
     
   
   <div class="text"><a href="?o=3">Is published</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-price">
   
     
   
   <div class="text"><a href="?o=4">Price</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-list_date">
   
     
   
   <div class="text"><a href="?o=5">List date</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-realtor">
   
     
   
   <div class="text"><a href="?o=6">Realtor</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

  @foreach ($listings as $listing)
<tr class="row1">
  {{-- <td class="action-checkbox"><input type="checkbox" name="_selected_action" value="1" class="action-select"></td> --}}
  
  <th class="field-id"><a href="/admin/listings/{{$listing->id}}/edit">{{$listing->id}}</a></th>
  <td class="field-title"><a href="/admin/listings/{{$listing->id}}/edit">{{$listing->title}}</a></td>
  <td class="field-is_published">@if($listing->is_published == 1)<img src="{{asset('images/icon-yes.svg')}}" alt="True">@endif </td>
  <td class="field-price">{{$listing->price}}</td>
  <td class="field-list_date nowrap">{{$listing->created_at}}</td>
  <td class="field-realtor nowrap">{{$listing->realtor->name}}</td></tr>
  @endforeach
</tbody>
</table>
{{$listings->links()}}
</div>


          
      
      

{{-- <p class="paginator">

1 listing

<input type="submit" name="_save" class="default" value="Save">
</p> 

      </form> --}}
    </div>
  </div>

        
        <br class="clear">
    </div>
  </x-admin>