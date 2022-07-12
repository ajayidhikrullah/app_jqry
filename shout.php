<?php
    include 'db.php';
    if (isset($_POST['name']) && isset($_POST['shout'])) {
        # code...
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $shout = mysqli_real_escape_string($conn, $_POST['shout']);
        // var_dump($name);exit();
        $query = "INSERT INTO shout_tb(`name`, `shout`) VALUES ('$name', '$shout')";

        if (!mysqli_query($conn, $query)) {
            # code...
            echo "Error: " .mysqli_error($conn);
        }else {
            echo'<li>'.$name.': '.$shout.'</li>';
        }
    }
?>