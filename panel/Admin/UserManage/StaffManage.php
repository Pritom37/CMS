
<?php include('C:/xampp/htdocs/cms/panel/Admin/UserManage/user-manage.php');?>
        <!-- Header Part Ends --->
 <!-- Main Content Section Starts --->
 <div class="main-content">
        <div class="wrapper">

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
    <!-- Button to Add Admin  Ends-->
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full name</th>
                    <th>User type</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Pritom Ghosh</td>
                    <td>staff</td>
                    <td>
                    <a href="#" class="btn-primary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a> 
                    </td>
                 </tr>
                 <tr>
                    <td>1.</td>
                    <td>Pritom Ghosh</td>
                    <td>staff</td>
                    <td>
                    <a href="#" class="btn-primary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a> 
                    </td>
                 </tr>
                 <tr>
                    <td>1.</td>
                    <td>Pritom Ghosh</td>
                    <td>staff</td>
                    <td>
                    <a href="#" class="btn-primary">Update Admin</a>
                    <a href="#" class="btn-danger">Delete Admin</a> 
                    </td>
                 </tr>
                  
                  

               
            </table>
            </div>
        </div>
        <!-- Main Content Section Ends --->
 
  <!-- Footer Part Starts --->
  <?php include('C:/xampp/htdocs/cms/panel/Admin/partials/footer.php');?>
        <!-- Footer Part Ends --->