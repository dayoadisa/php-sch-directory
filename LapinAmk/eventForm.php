<?php


// Initialisation
require_once('includes/init.php');
// Show the page header, then the rest of the HTML
include('includes/header.php');





?>

<div class="row">
<h1> Create Event </h1>

<form method="post" action="event.php">
<div class="row col s12">
  <div class="input-field col s3">
  
     <input id="title" name="title" required="required" type="text" class="validate" placeholder="Title"  />
     
    <label for="title" class="active">Title</label>
    
    </div>
  </div>


   
      <div class="row col s12">
        <div class="input-field col s6">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="message" name="message" class="materialize-textarea"></textarea>
          <label for="message" class="active">Enter Event Here</label>
        </div>
      </div>
   
 
<button class="btn waves-effect waves-light" type="submit" name="action">Add Event
    <i class="material-icons right">send</i>
  </button>


</form>
</div>

</body>
</html>