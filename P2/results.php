<?php include'class.php'; 
$selected_item_name = $_POST['Name'];
$selected_item_Extra = $_POST['extra'];
$selected_item_description = $_POST['Description'];
$selected_item_price = $_POST['Price'];


?>
<html>
    <head>
        <title>Food Truck</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <main>
        <h1>Food Truck</h1>
        <form action="#" method="post">

            <input type="hidden" name="action" value="process_data">  
             
<h3>Name: <?= $selected_item_name ?></h3>
            <h3>Topping(s):<?= $selected_item_Extra ?></h3>    
            <h3>Description: <?= $selected_item_description?></h3>
            <h3>Price: <?= $selected_item_price ?></h3>
            </form>  
            
        </main>
</body>
</html>