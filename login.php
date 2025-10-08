<?php include 'header.inc'; ?>

<?php


?>
<h2>Login</h2>
<form action="process.php" method="POST">
  <label>Username:
    <input type="text" name="username" required>
  </label><br><br>

  <label>Password:
    <input type="password" name="password" required>
  </label><br><br>


  <input type="hidden" name="token" value="h12345678">

  <input type="submit" value="Login">
</form>

<?php include 'footer.inc'; ?>
