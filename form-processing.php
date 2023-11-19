<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Ellen Herrera">
    <meta name="description" content="this is for class potd">
    <title>POTD: Friend Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<head>
<body>
<div class="container">
    Hi <?php echo $_POST['name']; ?> 
    You entered <br/> 
    <?php
    echo "Major:" . $_POST['major'] . " and Year: " . $_POST['year'];   
    ?>  
    </div>
</body>
</html> 