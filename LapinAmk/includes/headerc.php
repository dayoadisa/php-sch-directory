<!DOCTYPE html>
<html>
<head>
  <title><?php if (isset($page_title)): ?><?php echo $page_title; ?> | <?php endif; ?>Lapland UAS</title>
  <meta charset="utf-8" /> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/2.18.0/css/uikit.gradient.min.css" />
<link rel="stylesheet" href="css/uikit.gradient.css"  >
  <link rel="stylesheet" href="/css/styles.css" />
  
  
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <nav role="navigation" class="uk-navbar uk-navbar-attached">
 
    <a href="/LapinAmk" class="uk-navbar-brand"></a>
    

    <div class="uk-navbar-flip">
      <ul class="uk-navbar-nav">
       
       
        <?php if (Auth::getInstance()->isLoggedIn()): ?>

          <?php if (Auth::getInstance()->isAdmin()): ?>
            <li><a href="/LapinAmk/admin/users">Admin</a></li>
          <?php endif; ?>
          <li><a href="/LapinAmk/profile.php">Profile</a></li>
          <li><a href="/LapinAmk/logout.php">Logout</a></li>

        <?php else: ?>

          <li><a href="/LapinAmk/login.php">Login</a></li>

        <?php endif; ?>

      </ul>
      
       
    </div>
  </nav>

  <div id="content">
