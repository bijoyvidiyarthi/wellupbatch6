<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = test_input($_POST["name"]);
    $email= test_input($_POST["email"]);
    $password= test_input($_POST["password"]);
    $number= test_input($_POST["number"]);
    $select= test_input($_POST["select"]);

    echo "<br>";
    echo "<h2> Your input: </h2>";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Name: $name";
    echo "<br>";
    echo "Password: $password";
    echo "<br>";
    echo "Number: $number";
    echo "<br>";
    echo "Place: $select";
}


    function test_input($data){
       
       $data= trim($data);
       $data= stripslashes($data);
       $data= htmlspecialchars($data);

       return $data;
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <html lang="en">
        <head>
              <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

              <!-- Bootstrap CSS -->
           <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
          <!-- Style Sheet-->
          <link rel="stylesheet" type="text/css" href="style.css">
          <title>Registration Form</title>
        </head>
<body>
    <section class="main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-12 d-flex align-items-center"  > 
                    <div class ="text text-center">
                          <h1 class="text-white"> Hi! Welcome To my Webpage</h1>
                          <h2 class="text-white">Here you can search for many information about technology</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-10 col-sm-12">
                    <div class="form-box px-5 py-4" >
                        <!--      -------Form-------         -->
                        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>  method="POST">
                            <h2 class = "text-center mb-4" >Register Now</h2>
                            <input type="text" name="name" placeholder="Name" class ="form-control mb-3">
                            <input type="text" name="email" placeholder="E-mail" class ="form-control mb-3">
                            <select name="select" id="select" class ="form-select mb-3">
                                <option value="city" >City</option>
                                <option value="hathazari" >Hathazari</option>
                            </select>
                            <input type="number" name="number" placeholder="Contuct Number" class ="form-control mb-3">
                           <div class ="input-group mb-3">
                            <input type="password" name ="password" placeholder="Password" 
                            class ="form-control border-end-0">
                            <span class ="input-group-text bg-white border-start-0" ><i class="fa-solid fa-eye"></i></span>
                            </div>
                            <div class ="mb-3">
                                <input type="checkbox" name="">
                                <label for=""><small>By signing up, i agree to <a href=""class ="link">term & condition</a></small></label>
                            </div>
                            <button class="register-btn form-control mb-3">Register</button>
                            <p class ="text-center">Already a member, <a href="" class ="link"><b>Log In</b></a> </p>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </section>
</body>
</html>