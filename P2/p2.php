<?php
include 'class.php';
if(isset($_POST['myItem'])){
    $selected_item_name = $_POST['myItem'];
    $selected_item = $items[$selected_item_name];
    
}
?>
<html>
    <head>
        <title>Food Truck</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <main>
        <h1>Food Truck</h1>
        <form action="results.php" method="post">

            <input type="hidden" name="action" value="process_data">  
            <h3>Chose your toppings:</h3>   


            <?php
                foreach ($selected_item->Extras as $extra){
                    ?>
            <input type="checkbox" name="extra" value="<?= $extra ?>"><?= $extra ?><br>
            <input type="hidden" name="Name" value="<?= $selected_item->Name ?>">
            <input type="hidden" name="Description" value="<?= $selected_item->Description ?>">
            <input type="hidden" name="Price" value="<?= $selected_item->Price ?>">       
                   
            <?php
                } // foreach
                ?>

            <label>&nbsp;</label>
            <input type="submit" value="Submit">
            <br>
         </form>

         

        </main>
</body>
</html>

 



 