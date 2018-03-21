<?php

/**
 * Sign up a new user
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $user = User::signup($_POST);

  if (empty($user->errors)) {

    // Redirect to signup success page
    Util::redirect('/signup_success.php');
  }
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Sign Up';
include('includes/header.php');

?>

<h1>Sign Up</h1>

<?php if (isset($user)): ?>
  <ul>
    <?php foreach ($user->errors as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<form method="post" id="signupForm" class="col s4">
  <div class="row">
    
    <div class="input-field col s4">
      <input id="name" name="name" required="required" type="text" value="<?php echo isset($user) ? htmlspecialchars($user->name) : ''; ?>" class="validate" />
      <label for="name" class="active">Name</label>
    </div>
  </div>

  <div class="row">
    
    <div class="input-field col s4">
      <input id="email" name="email" required="required" type="email" value="<?php echo isset($user) ? htmlspecialchars($user->email) : ''; ?>"  class="validate"/>
      <label for="email" class="active">email address</label>
    </div>
  </div>
  
  <div class="row">
 		
        <div class="input-field col s4">
      <input id="position" name="position" required="required" type="text" value="<?php echo isset($user) ? htmlspecialchars($user->position) : ''; ?>"  class="validate"/>
      <label for="position" class="active">Position</label>
    </div>
        
  </div>

  <div class="row">
    
    <div class="input-field col s4">
      <input type="password" id="password" name="password" required="required" pattern=".{5,}" title="minimum 5 characters" class="validate" />
      <label for="password" class="active">Password</label>
    </div>
  </div>

  <div class="row">
   <div class="input-field col s4">
      <button class="btn waves-effect waves-light red accent-4">Sign Up</button>
 </div>
  </div>
</form>

<?php include('includes/footer.php'); ?>
