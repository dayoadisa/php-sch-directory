<?php

/**
 * Homepage
 */

// Initialisation
require_once('includes/init.php');

// Show the page header, then the rest of the HTML
include('includes/header.php');

?>

   

<?php if (Auth::getInstance()->isLoggedIn()): ?>

  <p>Hello <?php echo htmlspecialchars(Auth::getInstance()->getCurrentUser()->name); ?>.

<?php else: ?>

  <p><a href="signup.php">Sign up</a> or <a href="login.php">Log in</a></p>
  
<?php endif; ?>

  <h3>News</h3>
  
  <?php if (Auth::getInstance()->isLoggedIn()): ?>
  
   <p><strong>Logged in as Guest</strong></p>.
   
<?php else: ?>
 <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Login as guest</a>
 <?php endif; ?>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>To Log in as an Administrator</h4>
      <p>Username: admin@lapinamk.fi</p>
      <p>Password: admin</p>
    </div>
    <div class="modal-footer">
      <a class=" modal-action modal-close waves-effect waves-green btn-flat">CLOSE</a>
    </div>
  </div>
          
  
  <div class="row">
        <div class="col s12 m8 ">
          <div class="card">
            <div class="card-image">
              <img src="images/studying.jpg">
              <span class="card-title deep-orange darken-4-text">End of Semester Exams</span>
            </div>
            <div class="card-content">
              <p>The Semester is drawing to a close and students are preparing for their end of semester examination.
              The school will be resuming for the spring semester on the 18th of January 2016.</p>
            </div>
            <div class="card-action">
            
            </div>
          </div>
        </div>
        
          
              
              <?php
						//get the departments to select here
						
						include('db.php');
						$sql="SELECT * FROM event";
						$result = $conn->query($sql);
						while($row = $result->fetch_assoc()) {
							
							echo'<div class="col s12 m4">';
          					echo'<div class="card blue-grey darken-1">';
          
            				echo'<div class="card-content white-text">';
            				echo'<h4 class="white-text">Events</h4>';
							
							echo '<span class="card-title">'.$row['title'].'</span>';
							echo '<p>'.$row['message'].'</p>';
							echo'</div>';
            
            				
							echo'</div>';
							echo'</div>';	
							
						}
						$conn->close();
					?>
              
            
      
      
     
 
       
      
      
  

<?php include('includes/footer.php'); ?>
