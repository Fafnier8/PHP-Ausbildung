<?php
/**
 * original code
 */
/*
$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '' );       //connection to the Database via PDO

    
$username = $_POST['username'];         //saves the Username put into the HTML form into $username
$passwort = $_POST['passwort'];         //saves the Password put into the HTML form into $passwort 

if(!empty($username) && !empty($passwort))      //checks to see if $username and $passwort are empty. if not.. 
{
    $statementUser = $pdo->prepare("SELECT username FROM logindata WHERE passwort = ? AND username = ?");       //it prepares a statement to get the username corresponding with the username and password put into the HTML form 
    $statementUser->execute([$passwort, $username]);                //excecutes the statement 
    $checkUser = $statementUser->fetch(PDO::FETCH_ASSOC);           //if the username and password put into the html file exists it saves the username into $checkUser
    if(!empty($checkUser))          //it checks if the username was put into $checkUser effectively checking if the username and password exsist in the database
    {
        $checkUser = $checkUser['username'];        // turns the assosiative array into a simple one
    }
    else        //if $checkUser is empty
    {
        echo "User and or Password incorrect";      //it tells the user that something was wrong
        die;
    }

    $statementPass = $pdo->prepare("SELECT passwort FROM logindata WHERE passwort = ? AND username = ?");           //it prepares a statement to get the password corresponding with the username and password put into the HTML form 
    $statementPass->execute([$passwort, $username]);                //excexutes the statement 
    $checkPass = $statementPass->fetch(PDO::FETCH_ASSOC);           //if the username and password put into the html file exists it saves the password into $checkPass
    $checkPass = $checkPass['passwort'];            //turns the assosiative array into a simple one 

    
}
*/
/**
 * Code of Mia
 */

$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '' );       //connection to the Database via PDO

/**
 * Saves the username hashed and the password put into the HTML form
 */

$username = $_POST['username'];
$passwort = $_POST['passwort'];

if(!empty($username) && !empty($passwort))      //checks to see if $username and $passwort are empty. if not..
{
    $statementUser = $pdo->prepare("SELECT username FROM CustomerAccount WHERE username = ?");       //it prepares a statement to get the username corresponding with the password put into the HTML form
    $statementUser->execute([$username]);                //excecutes the statement
    $checkUser = $statementUser->fetch(PDO::FETCH_ASSOC);           //if the username put into the html file exists it saves the username into $checkUser
    if(!empty($checkUser))          //it checks if the username was put into $checkUser effectively checking if the username exsist in the database
    {
        $checkUser = $checkUser['username'];        // turns the assosiative array into a simple one
    }
    else        //if $checkUser is empty
    {
        echo "User and or Password incorrect";      //it tells the user that something was wrong
        die;
    }

    $statementPass = $pdo->prepare("SELECT passwort FROM CustomerAccount WHERE username = ?");           //it prepares a statement to get the password corresponding with the username put into the HTML form
    $statementPass->execute([$username]);                //excexutes the statement
    $checkPass = $statementPass->fetch(PDO::FETCH_ASSOC);           //if the username put into the html file exists it saves the password into $checkPass
    $checkPass = $checkPass['passwort'];            //turns the assosiative array into a simple one


}
else
{
    echo "User and or Password was empty";      //it tells the user that something was wrong
    die;
}

/**
 * original code
 */
/*
    if(sha1($passwort) === sha1($checkPass) && sha1($username) === sha1($checkUser))        //if the hashed $password and the hashed password saved in $checkPass are the same and if teh same goes for the usernames 
    {
        header("refresh:1; url=https://dock-b.com/app");            //it goes to the liked website 
    }
    else            //if not...
    {
        echo "User and or Password incorrect\n";          //it tells the user that the login has failed
    }
*/

/**
 *  Code of Mia
 */

/*
 * Checks if the password to the given username is correct
 */

if(password_verify($passwort, $checkPass))
{
    header("refresh:1; url=https://dock-b.com/app");            //it goes to the liked website
}
else            //if not...
{
    echo "Login failed\n";          //it tells the user that the login has failed
}





?> 

