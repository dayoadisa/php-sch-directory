<?php

/**
 * Forgotten password form
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  Auth::getInstance()->sendPasswordReset($_POST['email']);
  $message_sent = true;
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Forgotten password';
include('includes/header.php');

?>

<h1>Forgotten password</h1>

<?php if (isset($message_sent)): ?>
  <p>If we found an account with that email address, we have sent password reset instructions to it. Please check your email.</p>

<?php else: ?>

  <form method="post" class="col s6">
    <div class="row">
      
      <div class="input-field col s6">
        <input id="email" name="email" placeholder="Email" type="email" required="required" autofocus="autofocus" class="validate" />
        <label for="email" class="active">Email Address</label>
      </div>
    </div>

    <div class="row">
     
        <button class="waves-effect waves-light btn deep-orange accent-1">Send password reset instructions</button>
   
    </div>
  </form>
  
<?php endif; ?>

<?php include('includes/footer.php'); ?>
