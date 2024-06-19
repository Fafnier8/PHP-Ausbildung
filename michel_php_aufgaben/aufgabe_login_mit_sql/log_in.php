<?php
/**
 * This code was written by me.
 * You ask who me is?
 * Me a gay trans girl. Or differently said Mia surname Rücker.
 * Why did i wrote all this text just for a code signature, you ask?
 * Just felt like it *shrug*.
 * :3
 */

//if condition checks if a POST-requst happened and then executes this code
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // parameters from log-in formular
    /** @var string $get_username Value is Username entered from log-in page*/
    $get_username = $_POST['username'];
    /** @var string $get_password Value is entered password from log-in page*/
    $get_password = $_POST['password'];

    // encrypting password to compare with password in databank

    $get_password_encrypted = sha1($get_password);

    // Build up connection tophpmyadmi databank

    $pdo = new PDO('mysql:host=localhost;dbname=logIn', 'root', '');

    // get data for that username from databank

    /** @var string $sql SQL statement that will be used to get data from table logInData*/
    $sql = 'SELECT * FROM logInData WHERE username=\'' . $get_username . '\'';
    /*
     * The method query returns an object with the prepared SQL- Command as an object.
     * Prepared means you can use the object with fetch for example as the given data is available.
     * If an error accures, e.g. when the data asked for does not exist, it returns a false instead of an object.
     */
    /** @var object $stmt Prepares SQL command and executes it*/
    $stmt= $pdo->query($sql);
    /*
     * The fetch method takes the next row from an PDOStatement object, returns it and sets the pointer to the next rpw.
     * If there is no other rows it returns false.
     */
    /** @var array $data Contains the elements of the data asked from the database*/
    $data = $stmt->fetch();

    /** @var string $link_to_page Decides which site will be loaded after log-in*/
    $link_to_page= "";


    // if condition asks if either username or pasword is empty
    if(!empty($get_password) && !empty($get_username)){
        // if condition asks if username is not in databank or password is wrong if everything is right sends you to the
        // loged in site
        if($data === false || $data['passwort'] != $get_password_encrypted){ ?>
            <p>Username oder Passswort falsch</p>
        <?php } else { ?>
            <p>Username erfolgreich eingegeben</p>
            <?php header('location: formular.html');
        }
    } else {?>
        <p>Es wurden nicht alle Felder ausgefüllt!</p>
    <?php }} ?>

<html lang="en">
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