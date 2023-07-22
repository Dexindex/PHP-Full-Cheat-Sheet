//? -------------------------------- Increment/Decrement Operators ------------------------------------------:
$i=0
$i++
->`1`
-----------------------
$i=0
$i--
->`-1`
//? ---------------------------------------------------------------------------------------------------------:











//? -------------------------------- Comparaison Operators -----------------------------------------------------------:
== Equal to (Note That If We use just one = ,php will read it as assignement operator so make sure to add two '==')
>= Greeter than Or Equal
<= Less than Or Equal
//? ------------------------------------------------------------------------------------------------------------------:














//? -------------------------------- Logical Operators  --------------------------------------------------------------:
&& and : Used To Check If All Conditions Are TRUE.
|| or  : Used To Check If At Least one Conditions is TRUE.
! Not  : Not operator used to reverse the Condition.( TRUE=FALSE - FALSE=TRUE ) 
//? ------------------------------------------------------------------------------------------------------------------:









//? -------------------------------- Post and Get Methods ---------------------------------------------------:

[ POST ]
Syntax :
*********************************************
<form action="index.php" method="post">
    Name : <input type="text" name="name">
</form>
echo "{$_POST["name"]}"
*********************************************
//* POST : Method used For Secured Data Transfering So I Cannot Apear In url after submitting form.

------------------------------------------------------------------------------------------------------

[ GET ]
Syntax :
*********************************************
<form action="index.php" method="get">
    Name : <input type="text" name="name">
</form>
echo "{$_GET["name"]}"
*********************************************
//* GET : While POST is not showing information in url . GET Method Do That After Submiting.
//*  So For That GET Is Not A Good Choice In Forms But It Can Be Used In other cases like Search Page.
//? ---------------------------------------------------------------------------------------------------------:













//? ----------------------------------------- Math Methods --------------------------------------------------:
abs(-15)      -> 15
round(3.6)    -> 4
round(3.4)    -> 3
floor(3.8)    -> 3
ceil(3.3)     -> 4
sqrt(100)     -> 10
pow(2, 2)     -> 4
min(12, 2, 7) -> 2
max(12, 2, 7) -> 12
pi()          -> 3.14
rand()        -> Random Number
rand(10, 80)  -> Random Number Between 10 and 80
//? ---------------------------------------------------------------------------------------------------------:










//? -------------------------------- Conditional if  -----------------------------------------------------------------:
Syntax :
            if (Condition) {
                block of code
            }
            elseif (Condition2) {
                block of code
            }
            else{
                block of code
            }
//? -------------------------------------------------------------------------------------------------------------------:














//? -------------------------------- Conditional switch  -----------------------------------------------------------------:
Syntax :
$vari = 2;
switch($vari){
    case "1":
        echo "Its First Number";
        break;
    case "2":
        echo "Its Second Number";
        break;
    default:
        echo "Its Other Number";
}
//? -------------------------------------------------------------------------------------------------------------------:












//? -------------------------------- For Loop  -----------------------------------------------------------------:
Syntax :
for ($i=0 ; $i < 10 ;$i++){
    echo $i . "|"
}

-> 0|1|2|3|4|5|6|7|8|9|
//? ------------------------------------------------------------------------------------------------------------:

















//? -------------------------------- While Loop  -----------------------------------------------------------------:
Syntax :

$status = true ;
$num = 0;

while ($status){
    echo $name;
    $name++;
}

-> The Programmes Will Print Numbers To Infinite.
//? -------------------------------------------------------------------------------------------------------------------:













//? -------------------------------- Arrays  -----------------------------------------------------------------:
$games = array("GTA","PES","Fifa","Hitman","GOW");

//* Display All Elements In Array --------------------------:
foreach($games as $game){
    echo $game . "<br>";
}
//*---------------------------------------------------------

//* Array Methods ---------------------------------------------------------------------------:
$games[0]                       -> "GTA"
$games[0]="RDR"                 -> Will Replace "GTA" With "RDR"
array_push($games, "TWD","POP") -> Will Add "TWD" and "POP" To The End Of The Array
array_pop($games)               -> Will Remove The Last Element Of Array
array_shift($games)             -> Will Remove The First Element Of Array
$games = array_reverse($games)  -> Will Reverse The Elements Of The Array
echo count($games)              -> 5
//*-------------------------------------------------------------------------------------------

//? ------------------------------------------------------------------------------------------------------------:














//? -------------------------------- Assosiative Arrays  --------------------------------------------------------------------------:
The Assosiative Arrays is An Array With Key => Value Structure.

$foods = array("Pizza"=>"Italian",
               "Couscous"=>"Moroccan",
               "Kouchari"=>"Egyptian",
               "Burger"=>"American");

//* Display All Elements In Array --------------------------:
foreach($foods as $food => $origin){
    echo $food . "=". $origin . "<br>";
}
//*---------------------------------------------------------


//* Assosiative Array Methods -------------------------------------------------------------------------------------:
echo $foods["Burger"]           -> American
$foods["Pizza"]="American"      -> Will Change The Value Of Pizza To "American" 
$foods["Sushi"]="Japanesse"     -> Will Add The New Item In The End Of Array 
array_pop($foods)               -> Will Remove The Last Element Of Array
array_shift($foods)             -> Will Remove The First Element Of Array
$keys = array_keys($foods)      -> Will Create An Array Contain Just The Keys Of The Selected Assosiative Array
$values = array_values($foods)  -> Will Create An Array Contain Just The Values Of The Selected Assosiative Array
$foods = array_flip($foods)     -> Will Replace The Keys With Values and The Values With Keys
$foods = array_reverse($foods)  -> Will Reverse The Elements Of The Array
echo count($foods)              -> 4
//*------------------------------------------------------------------------------------------------------------------
//? -------------------------------------------------------------------------------------------------------------------------------:













//? -------------------------------- isset  --------------------------------------------------------------------------------------:
This Function Return True if The Selected Variable is declared and not null.

$name = "Oussama";

if (isset($name)){
    echo "Hello " . $name;
}

else {
    echo "The Name Is Empty";
}
//? ----------------------------------------------------------------------------------------------------------------------------------:



















//? -------------------------------- empty  --------------------------------------------------------------------------------------:
This Function Return True if The Selected Variable is not declared, false, null.

$name = null;

if (empty($name)){
    echo "The Name Is Empty";
}

else {
    echo "Hello " . $name ;
}
//? -------------------------------------------------------------------------------------------------------------------------------:










//!----------------------------------------------------------------------------------------------------------------------------------:
//!----------------------------------------------------------------------------------------------------------------------------------:
//!--------------------------------------Example N1 ---------------------------------------------------------------------------------:
//!----------------------------------------------------------------------------------------------------------------------------------:
//!----------------------------------------------------------------------------------------------------------------------------------:
<form action="index.php" method="post">
        Full Name | 
        <input type="text" name="name">
        Email | 
        <input type="email" name="email">
        Password | 
        <input type="password" name="password">
        <input type="submit" value="login" name="log"><br><br>

    </form>
<?php

if(isset($_POST["log"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $id = rand(100000, 999999);


    if (empty($name)){
        echo "Please Write Your Full Name";
    }
    elseif (empty($email)){
        echo "Please Write Your Email";
    }
    elseif (empty($password)){
        echo "Please Write A Password";
    }
    else{
        echo "Hello {$name} You Registred Succefully You Unique id is : {$id}";
    }
}

?>

//!-----------------------------------------------------------------------------------------------------------------------------:
//!-----------------------------------------------------------------------------------------------------------------------------:
//!-----------------------------------------------------------------------------------------------------------------------------:
//!-----------------------------------------------------------------------------------------------------------------------------:
















//? -------------------------------- Radio Button Control  -----------------------------------------------------------------:
Radio Button Input Attribut Deffrent Than Usual Other Inputs , We Must Give The Same Name To All Buttons Group,
And More Important To That We Need To Give Each Radio Button A Value Represent It.

<input type="radio" name="gender" value="Male">  Male
<input type="radio" name="gender" value="Female">  Female
<input type="submit" value="login" name="log">
//? -------------------------------------------------------------------------------------------------------------------------:
















//? -------------------------------- Checkbox Button Control  -----------------------------------------------------------------:
Checkbox Button Input Attribut Is Similar To Radio Button Inputs , But We Don't Have to Give The Same Name To All Buttons Group,
We Need To Give Each Checkbox Button A Value Represent It.

<input type="checkbox" name="morocco" value="Morocco">Morocco
<input type="checkbox" name="usa" value="USA">USA
<input type="checkbox" name="spain" value="Spain">Spain
//? -------------------------------------------------------------------------------------------------------------------------:















//? -------------------------------- Functions  -----------------------------------------------------------------------------:
We Use Function To Simplify The Code And To Make It Reusable.
Syntax :

function name(type arg1,type arg2){
    block of code
    return (block of code result)
}

name(arg1,arg2)


//* Example :
if(isset($_POST["log"])){
    $num = $_POST["num"];
    function fardi(float $n1){
        if ($n1 % 2 == 0){
            $res = "This Number is زوجي ";
            return $res ;
        }
        else{
            $res = "This Number is فردي";
            return $res ; 
        }
    }
    echo fardi($num);
}

//? -------------------------------------------------------------------------------------------------------------------------:












//? -------------------------------- String Methods  ------------------------------------------------------------------------:
strtolower("HELLO")                 -> hello
strtoupper("hello")                 -> HELLO
trim("    Hello There    ")         -> Hello There
str_pad("Hello",20,"o")             -> Helloooooooooooooooo
str_replace("-", "/", "2023-04-30") -> 2023/04/30
strrev("Hello")                     -> olleH
str_shuffle("Hello")                -> ("oHlle") Randomly Shuffle The String .
strcmp("Hello","Hey")               -> (1) Compare The Two Strings If they are the same it will return 0 ,else he will return 1.
strlen("Hello")                     -> 5
strpos("123-456","-")               -> 3 Search In The String For The Index Of The First Occurence Of Given String.
substr("Hello There", 0, 5)         -> Hello
substr("Hello There", 6)            -> There


//* String Methods With Arrays -----------------------------------------------------------------------------------------------:
explode("-"."Hello-There")          -> The Result Will Be An Array With 2 Value ["Hello","There"] Because The explode function
                                       Seperate Them With The Given Seperator "-".
$arr = array("Hello","There","How Are You")
implode(" ",$arr)                   -> The Result Will Be A String Contain All The Given Array Values Separated With The Given
                                       String " "   : "Hello There How Are You" 
//*---------------------------------------------------------------------------------------------------------------------------:
//? ----------------------------------------------------------------------------------------------------------------------------:









//? -------------------------------- User Input Filter  ------------------------------------------------------------------------:
We Use This Filter Functions To Prevent The Users To Write A Malicious Scripts In Input Can Harm The Website.
The Filter Function Work Like That , If The User Enter Some special Characteres it will be deleted automaticly.
---------------------------------------------------------------------------------------------------------------
//*---------------------------------------------------------------------------------------------------------------------------:
//*  Number Filter :
Syntax :
$age = filter_input(INPUT_POST, "input name here", FILTER_VALIDATE_INT);
//! We Declare The input Variable in This Case Like We Declare $_POST or $_GET Variable.
//! In This Case If The User Enter Something Diffrent than number it will handle it as its empty.
//*---------------------------------------------------------------------------------------------------------------------------:
//*---------------------------------------------------------------------------------------------------------------------------:
//*  Email Filter :
Syntax :
$email = filter_input(INPUT_POST, "input name here", FILTER_VALIDATE_EMAIL);
//! We Declare The input Variable in This Case Like We Declare $_POST or $_GET Variable.
//! In This Case If The User Enter Something Diffrent than email it will handle it as its empty.
//*---------------------------------------------------------------------------------------------------------------------------:
//*---------------------------------------------------------------------------------------------------------------------------:
//*  Codes Filter/Sanitize :
Syntax :
$code = filter_input(INPUT_POST, "input name here", FILTER_SANITIZE_SPECIAL_CHARS);
//! We Declare The input Variable in This Case Like We Declare $_POST or $_GET Variable.
//! In This Case If The User Enter a code,The function will process it and return it as normal string.
//! We Can use This function If We Need to paste in some code in our website without excuting it.
//*---------------------------------------------------------------------------------------------------------------------------:
//? ----------------------------------------------------------------------------------------------------------------------------:











//? -------------------------------- Include  -------------------------------------------------------------------------------:
Include Give us ability to reuse other pages or file (.php / .html) in any page we need,
Example Of That If We Make A Header And Footer its difficult to write the code of them again in every page so we
make a seperate file for each of them (header.php - footer.php) and include one in very bigining of our page
and the other in the bottom of page.

Syntax :
<?php
    include("pagename.php");
?>

//? -------------------------------------------------------------------------------------------------------------------------:












//? -------------------------------- Cookies  -----------------------------------------------------------------------------------:
Cookies Are Basicly User Prefernces Such As Favourite Stuff Browsing Preference.
Sometimes We Use Cookies to target client need for advertisements.
//*---------------------------------------------------------------------------------------------------------------------------:
//* Create A Cookie :
setcookie("key", "value", time() + (86400 *30), "/")

First Argument = Prefernce Type
Second Argument = Prefernce Name
Third Argument = Expiring Date (current time function + Number Of Days For Each day = 86400)
Forth Argument = cookie File Path ("/" -> Default)
//*---------------------------------------------------------------------------------------------------------------------------:
//*---------------------------------------------------------------------------------------------------------------------------:
//* Delete A Cookie :
setcookie("key", "value", time() - 0, "/")

Instead Of set A number of day we Substract -0 From Time To delete a Cookie
//*---------------------------------------------------------------------------------------------------------------------------:
//*---------------------------------------------------------------------------------------------------------------------------:
//* Read A Cookie :
foreach($_COOKIE as $key => $value){
    echo "{$key}={$value} <br>"
}

This Will Show All The Cookie In Our Page.
//*---------------------------------------------------------------------------------------------------------------------------:
//*---------------------------------------------------------------------------------------------------------------------------:
//* Controling A Cookie :
if(isset($_COOKIE["key name"])){
    echo "You Like This ....";
}
else{
    echo "I Dont Know What You Like";
}
//*---------------------------------------------------------------------------------------------------------------------------:
//? -----------------------------------------------------------------------------------------------------------------------------:










//? -------------------------------- Session ------------------------------------------------------------------------------------:
In PHP, a session is a way to store information about a user across multiple requests. When a user accesses a web page,
the server can create a unique session for that user and store information about the user in that session.
This information can then be accessed and modified as the user interacts with the website.

Syntax :

In login page After We Create HTML Form :
session_start();

if(isset($_POST["submit"])){
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("location : home.php")  -> This Will Redirect you to the home page.
}

In home page After We Create Logout submit button :
session_start();
echo "Hello {$$_SESSION["username"]}.";

if (isset($_POST["logout"])){
    session_destroy();
    header("location : login.php")  -> This Two Lines Will End your Seesion And Redirect You to the login page.
    
}

//? -------------------------------------------------------------------------------------------------------------------------------:











//? -------------------------------- Server ------------------------------------------------------------------------------------------------------:
The Server Super Global Give Us Informations About Working Server.$_SERVER Has A Lot Of Methods But We Only Use Some Of Them

Securing Form Action :
We Use The htmlspecialchars Function To Protect Page From Malicious Codes.
PHP_SELF Is Represent The Same Page We Have Created Code In It.
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post"></form>


Testing Submitting If The User Change The method Either To POST or GET :

if($_SERVER["REQUEST_METHOD"] == "POST"){
    our block of code
}



//? -----------------------------------------------------------------------------------------------------------------------------------------------------:










//? -------------------------------- Password Hashing ----------------------------------------------------------------------------:
Hashing In PHP Used To Hide Sensitive Data Like Passwords From 3rd Party Hacking Tools and Scripts.
The Process Convert The Password Into No Sense String With Mathematical Algorithm Called Bycrypt.

Syntax :

//* Hashing :
$pass = "Hello";
$hash = password_hash($pass, PASSWORD_DEFAULT);

//* Verifiyng :
if(password_verify("heyhey",$hash)){
    echo "The Password is Correct";
}
else {
    echo "Incorrect Password";
}

The Result Here Will Be "Incorrect Password" Because The Given password "heyhey" is diffrent than our password "Hello".  



//? -------------------------------------------------------------------------------------------------------------------------------:










//? -------------------------------- Error Handling----------------------------------------------------------------------------:
Error Handling Give us ability to print a nice error message to the user instead of the ugly message displayed by the server :

Syntax :

try {
    block of code processing
}

catch(name of exeption camed after ' fatal error : uncaught '){
    echo "Could Not Complet This Task Try Again"
}

if (block of code processing){
    echo "Operation Complet Succesfully.";
}

//? -------------------------------------------------------------------------------------------------------------------------------:








//? -------------------------------- Connection To Database------------------------------------------------------------------------:
In PHP We Can Connect To The Database In Two Ways (mysqli procedural - PDO OOP), 
In This Topic We Gonna Use mysqli Because Is Easier Than PDO.

1 - First We Gonna Create A PHP file called dbconn we gonna link this file to every page we have in our project using include() :
Syntax :
<?php
// DB Variables Creation :
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "our db name";
$conn = "";

// Assigning Connection With Error Handling Block :

try {
    $conn = mysqli_connect($server,$user,$pass,$dbname);
} 
catch (mysqli_sql_exception) {
    echo "Could not connect";
}
if($conn){
    echo "Connected succesfully";
}
?>


//? -------------------------------------------------------------------------------------------------------------------------------:









//? -------------------------------- Creating Tables -----------------------------------------------------------------------------:
There Is To ways To Create a table first using mysql query and second is using phpmyadmin.

Global Rules :
-The id should be primary, auto_increment
-Either username or email should be unique
-The password field is gonna recive a lot of chars after hashing process so we need to set the max chars to the biggest number
-We Can add a time stamp with a date with current time stamp function to know the time of new thing added 


//* Example With Query
CREATE TABLE users (
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) UNIQUE,
  email VARCHAR(255) UNIQUE,
  password VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

//? -------------------------------------------------------------------------------------------------------------------------------:






//? -------------------------------- Inserting Data -----------------------------------------------------------------------------:
Using SQL Queries WE Can insert data to our db:
<?php
//* 1 - We must include the dbconn.php file to establish connection.
include("dbconn.php");

//* 2 - Lets Make Some Dummy Data To Insert In Our DB :
$username = "Carl_Jhonson";
$password = "grooving123";
$hash = password_hash($password, PASSWORD_DEFAULT); // We Hashed The Password To Keep It Invisible For Hackers.

//* 3 - Insering Query :
$sql = "INSERT INTO users (user,password)
        VALUES ('$username','$hash')";

//* 4 - Query Excuting and  Seccessfull Message Appered To User :
try{
    mysqli_query($conn,$sql);
    echo "User Registred";
}

//* 5 - Error Message Appered To User :

catch(mysqli_sql_exception){
    echo "Could Not Register User";
}

//* 6 - Closing Connection :

mysqli_close($conn);
?>
//? -------------------------------------------------------------------------------------------------------------------------------:







//? -------------------------------- Displaying Data IN Tables -----------------------------------------------------------------------:
<?php
//* 1 - Always We Need To Include Our Db Connection File :
include("dbconn.php");

//* 2 - Set a  SQL Selecting :
$sql =  "SELECT * FROM users";

//* 3 -  Set a Query Excuting Varibale
$result = mysqli_query($conn, $sql);

//* 4 - Setting A Condition Block To Show our query results :
if(mysqli_num_rows($result) > 0){
//* 5 - First We Make An Infinite While Loop to repeat the process if multiple data is founded.
// Then We Maked An Array To store All table information by columns name index .
    while($row = mysqli_fetch_assoc($result)) { 
//* 6 - Showing Results :
        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["regdate"] . "<br>";
        echo "<br>";
    }
}

// * 7 - Setting An Else condition To Show A Message If No Data Found :
else{
    echo "Nothing Found";
}

mysqli_close($conn);

?>

//? -------------------------------------------------------------------------------------------------------------------------------:






//? -------------------------------- Displaying Data IN Tables With Foreach iteration ---------------------------------------------:
<?php
//* 1 - Always We Need To Include Our Db Connection File :
include("dbconn.php");

//* 2 - Set a  SQL Selecting :
$sql =  "SELECT * FROM users";

//* 3 -  Set a Query Excuting Varibale
$result = mysqli_query($conn, $sql);

//* 4 - Setting A Condition Block To Show our query results :
if(mysqli_num_rows($result) > 0){
//* 5 - First We Create the table header with column names
    echo "<table>";
    echo "<tr><th>ID</th><th>Username</th><th>Registration Date</th></tr>";
//* 6 - Then We loop over each row and display the data in table rows
    foreach($result as $row) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["regdate"]."</td></tr>";
    }
    echo "</table>";
}
// * 7 - Setting An Else condition To Show A Message If No Data Found :
else{
    echo "Nothing Found";
}

mysqli_close($conn);

?>

//? -------------------------------------------------------------------------------------------------------------------------------:










//? -------------------------------- Searching Data IN Tables -----------------------------------------------------------------------:
<?php
//* 1 - Always We Need To Include Our Db Connection File :
include("dbconn.php");

//* 2 - Set a  SQL Search Query Varibale :
$sql =  "SELECT * FROM users WHERE username = 'some_name' ";

//* 3 -  Set a Query Excuting Varibale
$result = mysqli_query($conn, $sql);

//* 4 - Setting A Condition Block To Show our query results :
if(mysqli_num_rows($result) > 0){
//* 5 - First We Make An Infinite While Loop to repeat the process if multiple data is founded.
// Then We Maked An Array To store All table information by columns name index 
    while($row = mysqli_fetch_assoc($result)) { 
//* 6 - Showing Results :
        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["regdate"] . "<br>";
        echo "<br>";
    }
}

// * 7 - Setting An Else condition To Show A Message If No Data Found :
else{
    echo "Nothing Found";
}

mysqli_close($conn);

?>

//? -------------------------------------------------------------------------------------------------------------------------------:













//? -------------------------------- Searching Data IN Tables With Foreach Iteration -------------------------------------------:
<?php
//* 1 - Always We Need To Include Our Db Connection File :
include("dbconn.php");

//* 2 - Set a  SQL Search Query Varibale :
$sql =  "SELECT * FROM users WHERE username = 'some_name' ";

//* 3 -  Set a Query Excuting Varibale
$result = mysqli_query($conn, $sql);

//* 4 - Setting A Condition Block To Show our query results :
if(mysqli_num_rows($result) > 0){
    //* 5 - First We Make an Array to store all table information by columns name index
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    //* 6 - Then We loop over each row and display the data
    foreach($rows as $row) { 
        //* 7 - Showing Results :
        echo $row["id"] . "<br>";
        echo $row["username"] . "<br>";
        echo $row["regdate"] . "<br>";
        echo "<br>";
    }
}

// * 8 - Setting An Else condition To Show A Message If No Data Found :
else{
    echo "Nothing Found";
}

mysqli_close($conn);
?>


//? -----------------------------------------------------------------------------------------------------------------------------: