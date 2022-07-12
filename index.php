<?php
    include "db.php";
    $query = "SELECT * FROM shout_tb ORDER BY id DESC";
    $shouts = mysqli_query($conn, $query);

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

<div id="container">
    <header>
        <h1>Shout Out App</h1>
    </header>

    <div id="shouts">
        <ul>
            <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                <li><?php echo $row['name']. ':  ' . $row['shout'];?></li>
            <?php endwhile;?>
        </ul>
    </div>

    <footer>
        <form action="">
            <label for="">Name:</label>
                <input type="text" id="name">
            <label for="">Shout Text</label>
                <input type="text" id="shout">

            <button type="submit" id="submit" name="submit">SHOUT</button>
        </form>
    </footer>
</div>


























<!-- Examples -->
<h1>Examples IGNORE plss</h1>
<p>Click me!</p>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="https://jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>