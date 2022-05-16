<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>
 
        <!-- Header Part Ends --->
<!-- Main Content Section Starts --->
<div class="main-content">

            <h1>Manage Attendance</h1>
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
   <br> <a href="add-admin.php" class="btn-secondary">View Attendance</a><br><br>
    
    <!-- Button to Add Admin  Ends-->
    <div class="wrapper">

            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>attendance id</th>
                    <th>attendance user id</th>
                    <th>attendance user type</th>
                    <th>attendance date</th>
                    <th>attendance course id</th>
                    <th>attendance course type</th>
                    <th>Attendance</th>

                </tr>
                <?php 
                // query to get all admin from tbl-admin
                $sql = "SELECT * FROM attendance";
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
                            $attendance_id = $rows['attendance_id'];
                            $attendance_user_id = $rows['attendance_user_id'];
                            $attendance_user_type=$rows['attendance_user_type'];
                            $attendance_date=$rows['attendance_date'];
                            $attendance_course_id=$rows['attendance_course_id'];
                            $attendance_course_type=$rows['attendance_course_type'];
                            

                            //Display the value in tbl_admin Table
                 ?>
                
                <!-- Html Part Starts for Table -->
                
                <tr>
                    <td><?php  { echo $sn++;} ?></td>
                    <td><?php  {echo $attendance_id; }?></td>
                    <td><?php  {echo $attendance_user_id; }?></td>
                    <td><?php  {echo $attendance_user_type; }?></td>
                    <td><?php  {echo $attendance_date; }?></td>
                    <td><?php  {echo $attendance_course_id; }?></td>
                    <td><?php  {echo $attendance_course_type; }?></td>


                    <td> 
                   Present<input type="radio" name="attendance[]" value="Present">Absent<input name="attendance[]" value="Absent" type="radio">
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
 