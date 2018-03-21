<?php

/**
 * Log in a user
 */

// Initialisation
require_once('includes/init.php');

// Require the user to NOT be logged in before they can see this page.
Auth::getInstance()->requireGuest();

// Get checked status of the "remember me" checkbox
$remember_me = isset($_POST['remember_me']);

// Process the submitted form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['email'];

  if (Auth::getInstance()->login($email, $_POST['password'], $remember_me)) {

    // Redirect to home page or intended page, if set
    if (isset($_SESSION['return_to'])) {
      $url = $_SESSION['return_to'];
      unset($_SESSION['return_to']);
    } else {
      $url = '/index.php';
    }

    Util::redirect($url);
  }
}


// Set the title, show the page header, then the rest of the HTML
$page_title = 'Login';
include('includes/header.php');

?>

<h1>Login</h1>

<?php if (isset($email)): ?>
  <div class="uk-alert uk-alert-warning">Invalid login</div>
<?php endif; ?>

<form method="post" class="col s3">
  <div class="row">
    <div class="input-field col s3">
      <input id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" type="email" autofocus="autofocus" required="required" />
      <label for="email" class="active">Email Address</label>
    </div>
  </div>

  <div class="row">
   
    <div class="input-field col s3">
      <input type="password" id="password" name="password" required="required" />
       <label for="password" class="active">Password</label>
    </div>
  </div>

  
    <div >
     <input id="remember_me" name="remember_me" type="checkbox" value="1"
               <?php if ($remember_me): ?>checked="checked"<?php endif; ?>/>
      <label for="remember_me">
        remember me
      </label>
    </div>
  



  <div class="row">
    <div >
      <button class="waves-effect waves-light btn deep-orange accent-1">Login</button>
      <a href="forgot_password.php">I forgot my password</a>
    </div>
  </div>
</form>

<?php include('includes/footer.php'); ?>
