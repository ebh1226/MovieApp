<?php
require("connect-db.php");
require("friend-db.php");

$list_of_user_info = ADMINviewUserInfo();

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">  
  <title>ADMIN: View User Information</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="icon" type="image/png" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" />
  <style>
      /* Global styles */
      body {
          font-family: 'Helvetica Rounded', 'Arial Rounded MT Bold', sans-serif;
          background-color: #b8d6e0;
          margin: 0;
          padding: 0;
      }

      /* Navigation styles */
      nav {
          background-color: #2E3D51;
          display: flex;
          justify-content: center;
          align-items: center;
          height: 80px;
      }

      nav ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          display: flex;
      }

      nav li {
          margin: 0 20px;
      }

      nav a {
          color: white;
          text-decoration: none;
          font-size: 20px;
          line-height: 10px;
      }

      nav a:hover {
          color: #cccccc;
      }

      /* Main container styles */
      .container-fluid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        /* Title styles */
        h1 {
            font-weight: bolder;
            text-align: center;
            font-size: 60px;
            margin-bottom: 20px;
        }

        /* Form styles */
        form {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button[type="submit"] {
            background-color: #2E3D51;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: auto;
        }

        button[type="submit"]:hover {
            background-color: #4A5C6B;
        }

        /* Class list styles */
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Message styles */
        ul.messages {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        ul.messages li {
            margin-bottom: 5px;
            padding: 8px;
            border-radius: 4px;
        }

        ul.messages li.success {
            background-color: #4CAF50;
            color: white;
        }

        ul.messages li.error {
            background-color: #f44336;
            color: white;
        }

        ul.messages li.warning {
            background-color: #ff9800;
            color: white;
        }

        ul.messages li.info {
            background-color: #2196F3;
            color: white;
        }
    </style>


  </head>



<body>
<nav>
      <ul>
          <li><a href="http://localhost/MoviePApp/index.html">Home</a></li>
          <li><a href="http://localhost/MoviePApp/simpleform.php">Add A Movie</a></li>
          <li><a href="http://localhost/MoviePApp/viewMovies.php">View All Movies</a></li>
          <li><a href="http://localhost/MoviePApp/addTimeStamp.php">Add A Time Stamp</a></li>
      </ul>
  </nav>

<h2>List of user information</h2>
<div class="row justify-content-center">  
<table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="20%">Username        
    <th width="20%">Password
  </tr>
  </thead>
<?php foreach ($list_of_user_info as $each_user): ?>
  <tr>
     <td><?php echo $each_user['Username']; ?></td>
     <td><?php echo $each_user['Password']; ?></td>           
  </tr>
<?php endforeach; ?>
</table>
</div>   

</body>

</div>    
</body>
</html>


