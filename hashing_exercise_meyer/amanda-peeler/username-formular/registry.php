<?php


/**
 * Class Registry is handling operations important for the registry process
 */
class Registry
{
    # Class properties
    private $username = '';
    private $email = '';
    private $firstname = '';
    private $surname = '';
    private $password = '';
    private $passwordAgain = '';
    private $residence = '';
    private $birthdate = '';

    # Class Methods

    /**
     * Initializes properties if request POST has happened
     */
    public function __construct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $this->username = $this->DefuseRegistryInput($_POST["username"]);
            $this->email = $this->DefuseRegistryInput($_POST["eMail"]);
            $this->firstname = $this->DefuseRegistryInput($_POST["firstname"]);
            $this->surname = $this->DefuseRegistryInput($_POST["surname"]);
            $this->password = $this->DefuseRegistryInput($_POST["password"]);
            $this->passwordAgain = $this->DefuseRegistryInput($_POST["passwordAgain"]);
            $this->residence = $this->DefuseRegistryInput($_POST["residence"]);
            $this->birthdate = $this->DefuseRegistryInput($_POST["birthdate"]);
        }
        else
        {
            $this->PrintError("No POST request was send!");
        }
    }

    /**
    * Method checks if properties are empty and throws error if they are
    *
     * @param $valueArray array Array of values
     * @return bool Is true if one property is empty
     */
    private function ArePropertiesEmpty($valueArray)
    {
        foreach ($valueArray as $value)
        {
            if(empty($value)){
                $this->PrintError("One or more input parameters are empty!");
                return true;
            }
        }
        return false;
    }

    private function FetchFromDataBank($sqlData, $sqlStatement)
    {
        $pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '' );
        $statementUser = $pdo->prepare($sqlStatement);
        $statementUser->execute([$sqlData]);
        return $statementUser->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Takes entry data and removes white space, removes slashes
     * and converts html tags to prevent code exploits
     *
     * @param $data string String that should be defused
     * @return string Returns defused string
     */
    private function DefuseRegistryInput($data)
    {
        return htmlspecialchars(trim(stripslashes($data)));
    }

    /**
     * Checks if Username is already used as primary key in data bank.
     *
     * @param $username string Input from user in GUI field 'Username'
     * @return bool Returns true if user exists in data bank
     */
    private function DoesUserExist($username)
    {
        //Build connection to the database, prepare and execute a SQL statement
        $pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '' );
        $statementUser = $pdo->prepare("SELECT username FROM CustomerAccount WHERE username = ?");
        $statementUser->execute([$username]);
        $checkUser = $statementUser->fetch(PDO::FETCH_ASSOC);
        if(!empty($checkUser))
        {
            $this->PrintError( "Username ist bereits vergeben! Bitte wähle einen anderen Usernamen.");
            return true;
        }
        return false;
    }

    private function EnterIntoDataBank()
    {

    }

    /**
     * Prints an error message and kills process
     *
     * @param $errorMsg string Error Message
     * @return void
     */
    private function PrintError($errorMsg)
    {
        echo $errorMsg;
        die;
    }
}
?>

