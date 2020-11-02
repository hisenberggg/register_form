
<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<?php  $errors=array(); ?>


<?php  if (count($success) > 0 ) : ?>
  <div class="error">
  	<?php foreach ($success as $succ) : ?>
  	  <p><?php echo $succ ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<?php  $success=array(); ?>