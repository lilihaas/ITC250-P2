
<!DOCTYPE html>
<html>
<head>
    <title>Food Truck</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Food Truck</h1>
        <h3>Chose your food:</h3>
        <form action="p2.php" method="post">
            
        <input type="hidden" name="action" value="process_data">    
       <select name='myItem'>
<option value="Taco">Taco</option>
<option value="Sundae">Sundae</option>
<option value="Salad">Salad</option>
</select>
       
    
            <br>
            <label>&nbsp;</label>
            <input type="submit" value="Submit">
            <br>
        </form>
        
<?php include'class.php'; ?>         
  
    </main>
</body>
</html>


