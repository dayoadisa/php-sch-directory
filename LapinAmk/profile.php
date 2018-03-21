<?php

/**
 * Profile
 */

// Initialisation
require_once('includes/init.php');

// Require the user to be logged in before they can see this page.
Auth::getInstance()->requireLogin();

// Set the title, show the page header, then the rest of the HTML
$page_title = 'Profile';
include('includes/header.php');

?>

<h1>Profile</h1>

  <?php $user = Auth::getInstance()->getCurrentUser(); ?>

  <Table class="">
  <thead
  <tr>
    <th>Name</th>
    <td><?php echo htmlspecialchars($user->name); ?></td>
    </tr>
    </thead>
    <thead>
    <tr>
    <th>email address</th>
    <td><?php echo htmlspecialchars($user->email); ?></td>
    </tr>
    </thead>
    <thead>
    <tr>
    <th>Position</th>
  <td><?php echo htmlspecialchars($user->position); ?></td>
  </tr>
  </thead>
  </table>
    
<?php include('includes/footer.php'); ?>
