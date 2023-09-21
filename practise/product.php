<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $products = [
            ['name' => 'Iphone 12','size' => '6' , 'color' => "black"],
            ['name' => 'Samsung','size' => '4' , 'color' => "red"]
        ]
    ?>

    <ul>
        <?php foreach($products as $product){ ?>
            <li><?php echo $product['name'] .  "-" . $product['size'] .  "-" . $product['color'] ; ?></li>
        <?php } ?>
    </ul>
    
</body>
</html>