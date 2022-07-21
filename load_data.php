<?php
    include 'db.php';
    // // get departments list
    $query_dept = "SELECT * FROM department_tb ORDER BY id DESC";
    $dept = mysqli_query($conn, $query_dept);
            
                    while($row = mysqli_fetch_assoc($dept)){
                    $dept_id = $row['id'];
                    $dept_name = $row['name'];

                        echo "<option value='".$dept_id."'>".$dept_name."</option>";
                    
                    };
            ?>

<?php
//get courses list
    $dept_id = 0;
    
    if(isset($_POST['depart'])){
        $query_courses = "SELECT * FROM courses WHERE department_tb_id =".$dept_id;
    // $query_courses = "SELECT * FROM courses WHERE department_tb_id = department_tb.id ORDER BY id DESC";
    // $query_courses = "SELECT courses.name FROM `courses` RIGHT JOIN `department_tb` ON `department_tb_id` = department_tb.id";
    $courses = mysqli_query($conn, $query_courses);
            $courses_arr = array();
            
            while ($row = mysqli_fetch_array($courses)) {
                $course_id = $row['id'];
                $name = $row['name'];

                $courses_arr[] = array('id'=>$course_id, 'name'=>$name);
            }

        }
        echo json_encode($courses_arr);

                        // foreach ($row as $key => $value) {
                            // while ($row = mysqli_fetch_assoc($courses)) : 
                    ?>
                        <!-- <option value=""> -->
                            <?php
                                // echo $row['name'];
                            ?>
                        <!-- </option> -->
                    <?php 
                        // endwhile
                    ?>



<?php
    // if(isset($_POST["type"]))
    // {
    //     if($_POST["type"] == "dc_data")
    //     {
    //         $query_dept = "SELECT * FROM department_tb ORDER BY id DESC";
    //         // $dept = mysqli_query($conn, $query_dept);
    //         var_dump($query_dept);exit();
    //         $statement = $conn->prepare($query_dept);
    //         $statement->execute();
    //         $data = $statement->fetchAll();

    //         foreach ($data as $row) {
    //             $output[] = array(
    //                 // 'id' => $row['id'],
    //                 'name' => $row['name']
    //             );
    //         }
    //         echo json_encode($output);
    //     }
    //     else{
    //         $query_courses = "SELECT courses.name FROM `courses` RIGHT JOIN `department_tb` ON `department_tb_id` = department_tb.id";

    //         $statement = $conn->prepare($query_courses);
    //         $statement->execute();
    //         $data = $statement->fetchAll();

    //         foreach ($data as $row) {
    //             $output[] = array(
    //                 'id'  => $row["id"],
    //                 'name'  => $row["name"];
    //                );
    //         }
    //         echo json_encode($output);

    //     }
    
    // }




?>