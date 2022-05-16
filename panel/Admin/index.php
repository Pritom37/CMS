
<?php include('C:/xampp/htdocs/cms/panel/Admin/partials/menu.php');?>
        <!-- Header Part Ends --->
       <!-- Main content Section Start -->
       <div class="main-content">
    <div class="wrapper">

          <div class="col-4 text-center">
              <h1>Admin</h1></br>
              
              <?php 
                $sqladmin = "SELECT * FROM tbl_user WHERE user_type='admin'";
                $resadmin = mysqli_query($conn,$sqladmin);
                if($resadmin==TRUE)
                {
                    $countadmin = mysqli_num_rows($resadmin);
                    echo $countadmin;
                }else{
                    echo "No Data Available";
                }
            ?>
          </div>

          <div class="col-4 text-center">
              <h1>Teacher</h1></br>
              <?php 
                $sqlteacher = "SELECT * FROM tbl_user WHERE user_type='teacher'";
                $resteacher = mysqli_query($conn,$sqlteacher);
                if($resteacher==TRUE)
                {
                    $countteacher = mysqli_num_rows($resteacher);
                    echo $countteacher;
                }else{
                    echo "No Data Available";
                }
            ?>
          </div>

          <div class="col-4 text-center">
              <h1>Staff</h1></br>
              <?php 
                $sqlstaff = "SELECT * FROM tbl_user WHERE user_type='staff'";
                $resstaff = mysqli_query($conn,$sqlstaff);
                if($resstaff==TRUE)
                {
                    $countstaff = mysqli_num_rows($resstaff);
                    echo $countstaff;
                }else{
                    echo "No Data Available";
                }
            ?>
          </div>

          <div class="col-4 text-center">
              <h1>Student</h1></br>
              <?php 
                $sqlstudent = "SELECT * FROM tbl_user WHERE user_type='student'";
                $resstudent = mysqli_query($conn,$sqlstudent);
                if($resstudent==TRUE)
                {
                    $countstudent = mysqli_num_rows($resstudent);
                    echo $countstudent;
                }else{
                    echo "No Data Available";
                }
            ?>
              
          </div>
          
          <div class="col-4 text-center">
              <h1>Courses</h1></br>
              5
          </div>
          
          <div class="clearfix"></div>
        </div>
     
    </div>
    <!-- Main content Section End -->
     
