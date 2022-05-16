
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>

        <!-- Header Part Ends --->
 <!-- Main Content Section Starts --->
 <div class="main-content">

            <h1>Manage Staff</h1>
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
    <br><a href="add-staff.php" class="btn-secondary">Add Staff</a> <br><br>

    <div class="tblwrapper">
    <!-- Button to Add Admin  Ends-->
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full name</th>
                    <th>email</th>
                    <th>User type</th>
                    <th>Actions</th>
                </tr>
                <?php 
                // query to get all staff from tbl-user
                $sql = "SELECT * FROM tbl_user WHERE user_type='staff'";
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
                            $id = $rows['uid'];
                            $username = $rows['username'];
                            $email=$rows['email'];
                            $user_type = $rows['user_type'];

                            //Display the value in tbl_admin Table
                 ?>
                
                <!-- Html Part Starts for Table -->
                
                <tr>
                    <td><?php  if($user_type=="staff"){ echo $sn++;} ?></td>
                    <td><?php  if($user_type=="staff"){echo $username; }?></td>
                    <td><?php  if($user_type=="staff"){echo $email; }?></td>
                    <td><?php  if($user_type=="staff"){echo $user_type; }?></td>
                    <td>
                    <a href="<?php echo SITEURL; ?>panel/Admin/update-staff.php?id=<?php echo $id; ?>" class="btn-primary">Update Staff</a>
                        <a href="<?php echo SITEURL; ?>Admin/update-password.php?id=<?php echo $id; ?>" class="btn-third">Change Password</a>
                        <a href="<?php echo SITEURL; ?>panel/Admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger">Delete Admin</a> 
                    </td>
                </tr>
                            <!-- Html Part Starts for Table -->

            <?php
                 }
                }else{
                    //We don't have data in database
                    echo "No Staff Added";
                }

            }


            ?>
      

           
        </table>
        </div>
    </div>
        <!-- Main Content Section Ends --->
 
  <!-- Footer Part Starts --->
  <?php include('C:/xampp/htdocs/cms/panel/Admin/partials/footer.php');?>
        <!-- Footer Part Ends --->