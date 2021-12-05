<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Registartion Form</h2>
  <?php echo @$message; ?>
  <form method="post" enctype="multipart/formdata">
  <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" name="uname" placeholder="Enter Username">
    </div>

	<div class="form-group">
      <label for="passsword">Password:</label>
      <input type="text" class="form-control" name="password" placeholder="Enter Password">
    </div>

    <input type="submit" name="register" class="btn btn-success" value="Register"/>
  </form>
  <br>
  <li><a href="<?= base_url() ?>index.php">Login</a></li>
</div>

</body>
</html>