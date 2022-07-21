<?php
    include "db.php";
    $query = "SELECT * FROM shout_tb ORDER BY id DESC";
    $shouts = mysqli_query($conn, $query);

    // get departments list
    // $query_dept = "SELECT * FROM department_tb ORDER BY id DESC";
    // $dept = mysqli_query($conn, $query_dept);

    //get courses list
    // $query_courses = "SELECT * FROM courses WHERE department_tb_id = department_tb.id ORDER BY id DESC";
    // $query_courses = "SELECT courses.name FROM `courses` RIGHT JOIN `department_tb` ON `department_tb_id` = department_tb.id";
    // $courses = mysqli_query($conn, $query_courses);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<div id="container">
    <header>
        <h1>Shout Out App</h1>
    </header>

    <div id="shouts">
        <ul class="messages">
            <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                <li id="user_message">
                    <?php echo '<span class="user_name">' . $row['name']. ':</span>
                    
                    ' . $row['shout'];?>
                </li>
            <?php endwhile;?>
        </ul>
    </div>

    <footer>
        <form action="" method="post">
            <label for="">Name:</label>
                <input type="text" id="name">
            
                <label for="">Shout Text</label>
                <input type="text" id="shout">



            <label for="">Departments</label>
                <select name="departments" id="departments" class="departments">
                    
                    <?php 
                    // while($row = mysqli_fetch_assoc($dept)) : ?>
                        <!-- <option value="
                            <?php
                            // echo $row['id']; 
                            ?>
                        "> -->
                            <?php
                                // echo $row['name']; 
                            ?>
                        <!-- </option> -->
                    <?php 
                        // endwhile
                    ?>
                </select>

            <label for="">Courses</label>
                <select name="courses" id="courses" class="courses">
                    <?php 
                        // foreach ($row as $key => $value) {
                            // while ($row = mysqli_fetch_assoc($courses)) : 
                    ?>
                        <!-- <option value="">
                            <?php
                                // echo $row['name'];exit;
                            ?>
                        </option>                         -->
                    <?php 
                        // endwhile
                    ?>
                </select>
                        

            <button type="submit" id="submit" name="submit">SHOUT</button>
        </form>
    </footer>
</div>

<!-- Examples -->
<h1>Examples IGNORE plss</h1>
<p id="demo">Click me!</p>

<p>jquery</p>
  <p>jquery</p>

  <a class="printPage" href="printPage" href="#">Print</a>
  
  <a href='#top'>Go Top</a>  

  <form action="">
      <label for="">Max 15 Characters</label>
      <textarea name="" id="textarea" maxlength="15" cols="30" rows="10">
      </textarea>
          <span id="rchars">15</span>Characters remaining
  </form>
  <p id="demo">Change this text</p>

<button>Change Content</button>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://jquery.com/jquery-1.11.1.min.js"></script>

    <!--     
    <h1>Countdown Timer</h1>
        <div value="0" max="10" id="timer">
    </div>
   
<h2>This is a heading</h2>

<p>This is a paragraph.</p>
<p id="test">This is another paragraph.</p>

<button>Click me</button>
 -->
<!-- ======================================-->

</body>
</html>