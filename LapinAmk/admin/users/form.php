<?php if ( ! empty($user->errors)): ?>
  <ul>
    <?php foreach ($user->errors as $error): ?>
      <li><?php echo $error; ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<div class="row">
<form method="post" id="userForm" class="col s12">
<div class="row">
  <div class="input-field col s6">
  
     <input id="name" name="name" required="required" type="text" class="validate" placeholder="Name" value="<?php echo htmlspecialchars($user->name); ?>" />
     
    <label for="name" class="active">Name</label>
    
    </div>
  </div>

  <div class="row">
   <div class="input-field col s6">
   
   <input id="email" name="email" required="required" placeholder="Email" type="email" class="validate" value="<?php echo htmlspecialchars($user->email); ?>" />
   
   <label for="email" class="active">Email address</label>
     
    </div>
  </div>
  
  <div class="row">
  <div class="input-field col s6">
  
     <input id="position" name="position" required="required" type="text" class="validate" placeholder="Name" value="<?php echo htmlspecialchars($user->position); ?>" />
     
    <label for="position" class="active">Position</label>
    
    </div>
  </div>

  <div class="row">
  <div class="input-field col s6">
  
   <input type="password" id="password" name="password" class="validate" placeholder="password" />
<label for="password" class="active">Password</label>
      <?php if (isset($user->id)): ?><p class="uk-form-help-block">Leave blank to keep current password</p><?php endif; ?>
    </div>
  </div>

  <?php $is_same_user = $user->id == Auth::getInstance()->getCurrentUser()->id; ?>
  
  
 <?php /*?> 
  <div class="uk-form-row">
    <div class="uk-form-controls uk-form-controls-text">
      <label for="is_active" class="uk-form-label">
        <?php if ($is_same_user): ?>
          <input type="hidden" name="is_active" value="1" />
          <input type="checkbox" disabled="disabled" checked="checked" /> active

        <?php else: ?>
          <input id="is_active" name="is_active" type="checkbox" value="1"
                 <?php if ($user->is_active): ?>checked="checked"<?php endif; ?>/> active

        <?php endif; ?>
      </label>
    </div>
  </div><?php */?>
  
<p>
	<?php if ($is_same_user): ?>
      <input type="hidden" name="is_active" value="1" />
      <input type="checkbox" id="is_active" disabled="disabled" checked="checked"/>
      
      <?php else: ?>
          <input id="is_active" name="is_active" type="checkbox" value="1"
                 <?php if ($user->is_active): ?>checked="checked"<?php endif; ?>/> 

        <?php endif; ?>
      <label for="is_active">
      
      Active
      </label>
    </p>
  
  
  <p>
	<?php if ($is_same_user): ?>
      <input type="hidden" name="is_admin" value="1" />
      <input type="checkbox" id="is_admin" disabled="disabled" checked="checked"/>
      
      <?php else: ?>
          <input id="is_admin" name="is_admin" type="checkbox" value="1"
                 <?php if ($user->is_admin): ?>checked="checked"<?php endif; ?>/> 

        <?php endif; ?>
      <label for="is_admin">
      
      Administrator
      </label>
    </p>
  
  

  <?php /*?><div class="uk-form-row">
    <div class="uk-form-controls uk-form-controls-text">
      <label for="is_admin" class="uk-form-label">
        <?php if ($is_same_user): ?>
          <input type="hidden" name="is_admin" value="1" />
          <input type="checkbox" disabled="disabled" checked="checked" /> administrator

        <?php else: ?>
          <input id="is_admin" name="is_admin" type="checkbox" value="1"
                 <?php if ($user->is_admin): ?>checked="checked"<?php endif; ?>/> administrator

        <?php endif; ?>
      </label>
    </div>
  </div><?php */?>
  
  
  
  

  <div class="uk-form-row">
    <div class="uk-form-controls">
      <button class="uk-button uk-button-primary">Save</button>
      <a href="/LapinAmk/admin/users<?php if (isset($user->id)) { echo '/show.php?id=' . $user->id; } ?>">Cancel</a>
    </div>
  </div>
</form>

<script>
  $userID = <?php echo isset($user->id) ? $user->id : 'null'; ?>;
</script>


</div>

