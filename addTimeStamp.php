<?php
require("connect-db.php");

require("friend-db.php");
$list_of_times = getAllTimes();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (!empty($_POST['addBtn2']))
   {
      addTime($_POST['profileID'], $_POST['StartTime'], $_POST['EndTime']);
      $list_of_times = getAllTimes();  
   }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">  
  <title>Movie App</title>
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
          <li><a href="https://ebh1226.github.io/MovieApp/">Home</a></li>
          <li><a href="https://ebh1226.github.io/MovieApp/simpleform.php">Add A Movie</a></li>
          <li><a href="https://ebh1226.github.io/MovieApp/viewMovies.php">View All Movies</a></li>
          <li><a href="https://ebh1226.github.io/MovieApp/addTimeStamp.php">Add A Time Stamp</a></li>
      </ul>
  </nav>
<div class="container">
  <h1>Add Time</h1>  

  <form name="SecondForm" action="addTimeStamp.php" method="post">  
  <div class="row">
    <div class="col">
    Your profile ID:
    <input type="number" class="form-control" name="profileID" required />   
      </div>     
  </div>  
  <div class="row">
  <div class="col">
    Start Time:
    <input type="text" class="form-control" name="StartTime" required />        
      </div>
  </div>  
  <div class="row">
    <div class="col">
    End Time:
    <input type="text" class="form-control" name="EndTime" required />   
      </div>     
  </div>  
      </div>
  <div clss="container">
  <div class="row mb-5 mx-5">
        <input type="submit" value="Add Times" name="addBtn2" 
                class="btn btn-primary btn-lg btn-block" title="Insert a time into a timestamp table" />
      
      </div>
      </div>
  
</form>   


<h2>List of Time Stamps</h2>
<div class="row justify-content-center">  
<table class="w3-table w3-bordered w3-card-4 center" style="width:70%">
  <thead>
  <tr style="background-color:#B0B0B0">
    <th width="30%">Profile ID        
    <th width="30%">StartTime  
    <th width="30%">EndTime  
  </tr>
  </thead>
<?php foreach ($list_of_times as $each_time): ?>
  <tr>
     <td><?php echo $each_time['profileID']; ?></td>
     <td><?php echo $each_time['StartTime']; ?></td>  
     <td><?php echo $each_time['EndTime']; ?></td>             
  </tr>
<?php endforeach; ?>
</table>
</div>   

</body>

</div>    
</body>
</html>