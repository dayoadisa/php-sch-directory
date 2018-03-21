<?php

/**
 * User all - show a user
 */

// Initialisation
require_once('includes/init.php');

// Require the user to be logged in before they can see this page.
//Auth::getInstance()->requireLogin();

// Require the user to be an administrator before they can see this page.
//Auth::getInstance()->requireAdmin();

// Find the user or show a 404 page.
$user = User::getByIDor404($_GET);

// Show the page header, then the rest of the HTML
include('includes/header.php');

?>

<h1>User</h1>

<p><a href="/LapinAmk/contact.php">&laquo; back to list of users</a></p>

<table class="bordered">
  <tr>
  <th>Name</th>
  <td><?php echo htmlspecialchars($user->name); ?></td>
  </tr>
  <tr>
  <th>email address</th>
  <td><?php echo htmlspecialchars($user->email); ?></td>
  </tr>
  <tr>
  <th>Position</th>
  <td><?php echo htmlspecialchars($user->position); ?></td>
  </tr>
  <tr>
  <th>Active</th>
  <td><?php echo $user->is_active ? '&#10004;' : '&#10008;'; ?></td>
  </tr>
  <tr>
  <th>Administrator</th>
  <td><?php echo $user->is_admin ? '&#10004;' : '&#10008;'; ?></td>
  </tr>
</table>


    
<?php include('includes/footer.php'); ?>
