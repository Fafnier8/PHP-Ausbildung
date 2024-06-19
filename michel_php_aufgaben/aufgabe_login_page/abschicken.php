
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  
  // parameters from formular
  $get_username = $_POST['username'];
  $get_password = $_POST['password'];

  // encrypting password

  $get_password_encrypted = sha1($get_password);

  $true_username = 'Mia';
  $true_password = '332ad086941c4c3d7a125c295abe801f83e59370';

  $link_to_page= "";

  if(!empty($get_password) && !empty($get_username)){
    if($true_username === $get_username && $true_password === $get_password_encrypted){ ?>
      <p>Username erfolgreich eingegeben</p>
      <?php header('location: formular.html');
    } else { ?>
      <p>Username oder Passswort falsch</p>
    <?php  } 
  } else {?>
    <p>Es wurden nicht alle Felder ausgefüllt!</p>

<?php }} ?>

<html>
  <body>
    <form  method="post">
      <label for="username">Enter your username</label>
      <input type="text" name="username" id="username"/>
      <br>
      <label for="password">Enter your password</label>
      <input type="password" name="password"/>
      <input type="submit" value="Enter"/>
    </form>
  </body>
</html>

