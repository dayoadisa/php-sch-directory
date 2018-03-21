<!DOCTYPE html>
<html>
<head>
  <title><?php if (isset($page_title)): ?><?php echo $page_title; ?> | <?php endif; ?>Lapland UAS</title>
  <meta charset="utf-8" /> 
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.18.0/css/uikit.gradient.min.css" />
<link rel="stylesheet" href="css/uikit.gradient.css"  >
  <link rel="stylesheet" href="/css/styles.css" />-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.css">
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <div class="navbar-fixed">
  <nav class=" deep-orange darken-2 send-forward" role="navigation">
    <div class="nav-wrapper container send-forward">
 
   <!-- <a href="/LapinAmk" class="uk-navbar-brand"></a>-->
     <a id="logo-container" href="/LapinAmk" class="brand-logo">Lapin Amk</a>


      <ul class="right hide-on-med-and-down">
       
       
        <?php if (Auth::getInstance()->isLoggedIn()): ?>

          <?php if (Auth::getInstance()->isAdmin()): ?>
            <li><a href="/LapinAmk/admin/users">Admin</a></li>
          <?php endif; ?>
          <li><a href="/LapinAmk/contact.php">Contacts</a></li>
             <li><a href="/LapinAmk/eventForm.php">Create Events</a></li>
      
          <li><a href="/LapinAmk/profile.php">Profile</a></li>
          <li><a href="/LapinAmk/logout.php">Logout</a></li>

        <?php else: ?>
		<li><a href="/LapinAmk/contact.php">Contacts</a></li>
          
          <li><a href="/LapinAmk/login.php">Login</a></li>
        <?php endif; ?>

      </ul>
      
       
    </div>
  </nav>
</div>
<!--  <div id="content" class="row">-->
   <div class="container">

   
