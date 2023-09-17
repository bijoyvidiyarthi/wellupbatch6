<?php 
    // echo "hello world";

    // echo "<br>";

    // echo 'hello world';
    
    // echo "<br>";
    
    // echo 20;
    
    // echo "<br>";

    // echo 20.24 ;
    // echo "<br>";

    
    // $country = ['brazil','usa','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina','argentina'];

    // // print_r($country);
    // echo "<pre>";
    // var_dump($country);
    // echo "</pre>";

    // // 12 == 12

    // $country = 15;
    // $mahin = 100;
    // $fahim = 200;

    

    // if($mahin == $fahim){
    //     echo "Mahin and fahim are equal";
    // }else{
    //     echo "Mahin and fahim are not equal";
    // }
    
    // Ternary operator
    // echo  $mahin > $fahim ? 'Mahin is greater' : 'Its not greater than mahin';
    //    echo $whoisgreat;


    // $car = "BMW";
    // $car_tire = "small";
    // $car_color = "red";

    // if($car == "BMW" && $car_tire == "big" && $car_color == "red"){
    //     echo "I am buying it";
    // } else if( $car == "BMW" || $car_tire == "big" || $car_color == "red" ){
    //     echo "Ok Lets buy it what can else we do!!";
    // }

    // if($car == "Toyota"){
        
    // } else if($car == "BMW"){
    //     echo "This is my car BMW";
    // } else if($car == "Land Cruiser"){
    //     echo "This is my car Land Cruiser";
    // }else{
    //     echo "I have No Car";
    // }

    // switch ($car) {
    //     case 'Toyota':
    //         echo "This is my car Toyota";
    //         break;
    //     case 'BMW':
    //         echo "This is my car BMW";
    //         break;
        
    //     default:
    //         echo "I have No Car";
    //         # code...
    //         break;
    // }

    
?>



<?php 
    // $car = "BMW";
    // $car = "Toyota";
    // echo $car;
    


   



    

    // echo $sum;

    // $countThree = 60;
    // $countFour = 10;

    // $sumTwo = $countThree + $countFour;

    // echo $sumTwo;

    // function sum_of_two_number($countOne,$countTwo){
    
    //     $sum = $countOne + $countTwo;

    //     return $sum;
    // }

    // $sum_result = sum_of_two_number(30,20);

    // if($sum_result < 100){
    //     echo $sum_result;
    // }else{
    //     echo "Its not valid";
    // }

    // echo "<br>";

    // sum_of_two_number(30,60);


    // function demo(){
    //     $country = "Argentina";
    //     return $country;
    // }

    // $i_got_country = demo();

    // echo $i_got_country;

    // $products = array('ball','bat','watch','phone','racket',"t-shirt");



    // var_dump($products);
    
    // echo $products[0];
    // echo "<br>";
    // echo $products[1];
    // echo "<br>";
    // echo $products[2];

    // $products = array('ball','bat','watch','phone','racket','t-shirt');

    // $count = count($products);

    // for ($i=0; $i < $count ; $i++) { 
    //     echo $products[$i]. "<br>" ;
    // }
   


    // echo "<br>";

    // $j = 0;

    // while($j < $count){
    //     echo $products[$j]. "<br>" ;
    //     $j = $j + 3;
    // }



    // $details = array("name" => "Imran","address" => "Ranguniya" );

    // foreach ($details as $key => $value) {
    //     echo $key . " - " . $value . "<br>";
    // }

    // foreach ($products as $product) {
    //     echo $product . "<br>";
    // }

// Variable Scoper
    $y = 20;
    // echo "<pre>";
    // var_dump($GLOBALS['y']);
    // echo "<pre>";
    function play(){
        global $y;
        $x = 10;
        $GLOBALS['z'] = 40;
        $sum = $x + $y;
        return $sum;

    }   
    
    function dont_play(){
        global $z;
        $x = 10;
        // $sum = $x + $GLOBALS['y'];
        $sum = $x + $z;
        return $sum;

    }  

    echo play();
    echo "<br>";
    echo dont_play();



    







    



?>



