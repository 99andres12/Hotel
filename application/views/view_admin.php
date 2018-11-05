<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>


  <div class="container">
    <h2>Habitaciones</h2>
    <p>Listado de habitaciones</p>
    <table class="table">
      <thead>
        <tr>
          <th>id</th>
          <th>habitación</th>
          <th>Eliminar</th>

        </tr>
      </thead>
      <tbody>
        <?php
        if(!empty($rooms)){
          foreach ($rooms as $row) {
            ?>
            <tr>
              <td><?php echo $row->id;  ?></td>
              <td><?php echo $row->name_room;  ?></td>
              <td><a href="<?php echo base_url(); ?>index.php/login/eliminarHa/<?php echo $row->id;  ?>">Eliminar
              </a>
            </td>
          </tr>

          <?php
        }

      }

      ?>


    </tbody>
  </table>
</div>
</body>
</html>
