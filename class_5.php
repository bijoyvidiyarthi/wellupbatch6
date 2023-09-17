<!--
$_SERVER
$_REQUEST
$_GET
$_POST
$_FILES
$_ENV
$_SESSION
$_COOKIE
$GLOBALS -->

<?php 
    // $countries = ['name' => 'brazil','population' => "20crore"];
    // var_dump($countries['name']);



    // echo $_SERVER['HTTP_HOST'];

    // echo "<pre>";
    // var_dump($_SERVER);
    // echo "<pre>";
?>  

<?php 

   if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];

        if($firstname != "" && $lastname != ""){
            echo "Registration Completed";
        }else{
            echo "Sorry Something is Missing";
        }

        if(empty($firstname) || empty($lastname)){
            echo "Sorry Something is Missing";
        }else{
            echo "Registration Completed";
        }
   }

?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <label>Firstname:</label>
    <input type="text" name="firstname">

    <br><br>

    <label>Last Name:</label>
    <input type="text" name="lastname">

    <br><br>

    <input type="submit" value="Sumbit">
</form>




