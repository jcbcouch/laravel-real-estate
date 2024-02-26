<x-admin>
    
  <div class="breadcrumbs">
    <a href="/admin/">Admin</a>
    &rsaquo; <a href="/admin/realtors/">Realtors</a>
    &rsaquo; List
    </div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Select realtor to change</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            


  
  <li>
    
    <a href="/admin/realtors/create" class="addlink">
      Add realtor
    </a>
  </li>
  


          
        </ul>
    
    
    <div class="module" id="changelist">
      

<div id="toolbar"><form id="changelist-search" method="get">
<div><!-- DIV needed for valid HTML -->
<label for="searchbar"><img src="/static/admin/img/search.svg" alt="Search"></label>
<input type="text" size="40" name="name" value="" id="searchbar" autofocus>
<input type="submit" value="Search">


</div>
</form></div>


      

      
        
      

      <form id="changelist-form" method="post" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="wKHrAgURdgPuJ4bjv54sMf4gE7fZXfo3bEgOEOZCtXlTXT59cH5kjIlYGtlLtq9S">
      

      
          
{{-- <div class="actions">
  
    
    <label>Action: <select name="action" required>
  <option value="" selected>---------</option>

  <option value="delete_selected">Delete selected realtors</option>

</select></label><input type="hidden" name="select_across" value="0" class="select-across">
    
    
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
    
    
        <span class="action-counter" data-actions-icnt="1">0 of 1 selected</span>
        
    
    
  
</div> --}}

          


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
   
     
   
   <div class="text"><a href="?o=4">seller of the month</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

  @foreach ($realtors as $realtor)
<tr class="row1">
  {{-- <td class="action-checkbox"><input type="checkbox" name="_selected_action" value="1" class="action-select"></td> --}}
  <th class="field-id"><a href="/admin/realtors/{{$realtor->id}}/edit">{{$realtor->id}}</a></th>
  <td class="field-name"><a href="/admin/realtors/{{$realtor->id}}/edit">{{$realtor->name}}</a></td>
  <td class="field-email">{{$realtor->email}}</td>
  <td>@if($realtor->is_mvp == 1)<img src="{{asset('images/icon-yes.svg')}}" alt="True">@endif</td>
</tr>
@endforeach
</tbody>
</table>
{{$realtors->links()}}
</div>


          
      
      
{{-- 
<p class="paginator">

1 realtor


</p> --}}

      </form>
    </div>
  </div>

        
        <br class="clear">
    </div>
  </x-admin>
