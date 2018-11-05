<?php

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<body>
  <div class="row">
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">

      <form class="form_container" class=""
      action="<?php echo base_url(); ?>index.php/login/validaLogin" method="post">
        <div class="form-group">
          <img width="60%" src="<?php echo base_url(); ?>images/hotel.png" alt="">
        </div>
        <div class="form-group">
          <input type="text" name="user" value="">
        </div>
        <div class="form-group">
          <input type="password" name="pass" value="">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" name="" value="ingresar">
        </div>
      </form>

    </div>
    <div class="col-md-4 col-sm-4 col-xs-12">
    </div>

  </div>





</body>
</html>
