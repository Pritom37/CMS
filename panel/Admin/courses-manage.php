<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>
 
        <!-- Header Part Ends --->
<!-- Main Content Section Starts --->
<div class="main-content">

<h1>Manage Courses</h1>
         <br>  </br>
         <?php
            // If we fail it will show the value that it failed
        if(isset($_SESSION['add'])){ //Checking whether the Session is set or not
            echo $_SESSION['add']; // Displaying Session Message
             unset($_SESSION['add']); // Removing Session Message
           }

         ?>
         <br>

    <!-- Button to Add Admin Starts-->
    <br><a href="add-course.php" class="btn-secondary">Add Course</a> <br> <br>



        <div class="tblWrapper">

    <!-- Button to Add Admin  Ends-->
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>course id</th>
                    <th>course code</th>
                    <th>course title</th>
                    <th>course session</th>
                    <th>course credit</th>
                    <th>instractor</th>
                    <th>instractor id</th>
                    <th>Action</th>

                </tr>
                <?php 
                // query to get all admin from tbl-admin
                $sql = "SELECT * FROM course";
                //Execute the query
                $res = mysqli_query($conn,$sql);
                //Check whether the query is executed or not
                if($res==TRUE)
                {
                    //1.Count Rows to check whether we have data in database or not
                    $count = mysqli_num_rows($res); // Function to get all the rows in database
                    $sn = 1; //Create a variable and assign the value for serial number
                    //2. Check the number of rows
                    if($count>0){
                        //We have data in database
                        while($rows=mysqli_fetch_assoc($res)){
                            //$rows=mysqli_fetch_assoc($res) will fetch the data of rows
                            //Using while loop to get all data from database
                            //This while loop will run as long as we have data in database

                            //Get Individual data $ declares variable and 'inside this column names are placed'
                            $course_id = $rows['course_id'];
                            $course_code = $rows['course_code'];
                            $course_title=$rows['course_title'];
                            $course_session=$rows['course_session'];
                            $course_credit=$rows['course_credit'];
                            $instractor=$rows['course_instructor'];
                            $instractor_id=$rows['course_instructor_id'];
                           
                           

                            //Display the value in tbl_admin Table
                 ?>
                
                <!-- Html Part Starts for Table -->
                
                <tr>
                    <td><?php  { echo $sn++;} ?></td>
                    <td><?php  {echo $course_id; }?></td>
                    <td><?php  {echo $course_code; }?></td>
                    <td><?php  {echo $course_title; }?></td>
                    <td><?php  {echo $course_session; }?></td>
                    <td><?php  {echo $course_credit; }?></td>
                    <td><?php  {echo $instractor; }?></td>
                    <td><?php  {echo $instractor_id; }?></td>
                    <td> 
                    <a href="<?php echo SITEURL; ?>panel/Admin/update-admin.php?id=<?php echo $id; ?>" class="btn-primary">Update Course</a>
                        <a href="<?php echo SITEURL; ?>panel/Admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Course</a> 
                    </td>
                </tr>
                            <!-- Html Part Starts for Table -->

            <?php

                        }
                    }else{
                        //We don't have data in database
                        echo "No Admin Added";
                    }

                }


                ?>
          

               
            </table>
            </div>
        </div>
        <!-- Main Content Section Ends --->
 