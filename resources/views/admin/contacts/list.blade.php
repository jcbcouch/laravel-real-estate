<x-admin>
    
<div class="breadcrumbs">
<a href="/admin/">Admin</a>
&rsaquo; <a href="/admin/contacts/">Contacts</a>
&rsaquo; List
</div>

    

    
        
    

    <!-- Content -->
    <div id="content" class="flex">
        
        <h1>Select contact to change</h1>
        
  <div id="content-main">
    
        <ul class="object-tools">
          
            


  
  {{-- <li>
    
    <a href="/admin/contacts/contact/add/" class="addlink">
      Add contact
    </a>
  </li> --}}
  


          
        </ul>
    
    
    <div class="module" id="changelist">
      

{{-- <div id="toolbar"><form id="changelist-search" method="get">
<div><!-- DIV needed for valid HTML -->
<label for="searchbar"><img src="/static/admin/img/search.svg" alt="Search"></label>
<input type="text" size="40" name="q" value="" id="searchbar" autofocus>
<input type="submit" value="Search">


</div>
</form></div>


      

      
        
      

      <form id="changelist-form" method="post" novalidate><input type="hidden" name="csrfmiddlewaretoken" value="KuHMyLAJ3mDmFSsYkA65tumrXZ3jg9VqyNkOYfdHSsEhkxgiViAfw52UPT82IVBA">
      

      
          
<div class="actions">
  
    
    <label>Action: <select name="action" required>
  <option value="" selected>---------</option>

  <option value="delete_selected">Delete selected contacts</option>

</select></label><input type="hidden" name="select_across" value="0" class="select-across">
    
    
    <button type="submit" class="button" title="Run the selected action" name="index" value="0">Go</button>
    
    
    
        <span class="action-counter" data-actions-icnt="1">0 of 1 selected</span>
        
    
    
  
</div> --}}

          


<div class="results">
<table id="result_list">
<thead>
<tr>

{{-- <th scope="col"  class="action-checkbox-column">
   
   <div class="text"><span><input type="checkbox" id="action-toggle"></span></div>
   <div class="clear"></div>
</th> --}}
<th scope="col"  class="sortable column-id">
   
     
   
   <div class="text"><a>ID</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-name">
   
     
   
   <div class="text"><a>Name</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-listing">
   
     
   
   <div class="text"><a>Listing</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-email">
   
     
   
   <div class="text"><a>Email</a></div>
   <div class="clear"></div>
</th>
<th scope="col"  class="sortable column-contact_date">
   
     
   
   <div class="text"><a>Contact date</a></div>
   <div class="clear"></div>
</th>
</tr>
</thead>
<tbody>

  @foreach ($contacts as $contact)
<tr class="row1">
    {{-- <td class="action-checkbox"><input type="checkbox" name="_selected_action" value="1" class="action-select"></td> --}}
    <th class="field-id"><a href="/admin/contacts/{{$contact->id}}/details">{{$contact->id}}</a></th>
    <td class="field-name"><a href="/admin/contacts/{{$contact->id}}/details">{{$contact->name}}</a></td>
    <td class="field-listing">{{$contact->listing}}</td>
    <td class="field-email">{{$contact->email}}</td>
    <td class="field-contact_date nowrap">{{$contact->created_at}}</td></tr>
    @endforeach
</tbody>
</table>
</div>


          
      
      

{{-- <p class="paginator">

1 contact


</p> --}}

      </form>
    </div>
  </div>

        
        <br class="clear">
    </div>
  </x-admin>
