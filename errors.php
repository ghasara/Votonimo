<?php if(count($errors) > 0): ?>
   <div class="error_show" style="width:90%;margin:2px auto;padding:10px;border: 1px solid #a94442;color:#a94442;background:#f2dede;border-radius:5px;text-align:left;">
      <?php foreach ($errors as $error): ?>
        <p><?php echo $error; ?></p>
      <?php endforeach ?>
   </div>
<?php endif ?>
