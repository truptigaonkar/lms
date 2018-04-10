<?php 
include"includes/header.php"; 
include"includes/sidebar.php";
include"connection.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students
        <small>List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <?php
            $result=mysqli_query($link,"select * from student_registration");
            echo "<table class='table table-striped table-bordered table-hover'>";
            echo "<tr>";
            echo "<th>"; echo "Firstname";  echo "</th>";
            echo "<th>"; echo "Lastname";  echo "</th>";
            echo "<th>"; echo "Username";  echo "</th>";
            echo "<th>"; echo "Email";  echo "</th>";
            echo "<th>"; echo "Contact";  echo "</th>";
            echo "<th>"; echo "Sem";  echo "</th>";
            echo "<th>"; echo "Enrollment";  echo "</th>";
            echo "<th>"; echo "Status";  echo "</th>";
            echo "<th>"; echo "Approve";  echo "</th>";
            echo "<th>"; echo "Not Approve";  echo "</th>";
            echo "<th>"; echo "Action";  echo "</th>";
            echo "</tr>";
            while($row=mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>"; echo $row["firstname"];  echo "</td>";
              echo "<td>"; echo $row["lastname"];  echo "</td>";
              echo "<td>"; echo $row["username"];  echo "</td>";
              echo "<td>"; echo $row["email"];  echo "</td>";
              echo "<td>"; echo $row["contact"];  echo "</td>";
              echo "<td>"; echo $row["sem"];  echo "</td>";
              echo "<td>"; echo $row["enrollment"];  echo "</td>";
              echo "<td>"; echo $row["status"];  echo "</td>";
              echo "<td>"; ?> <a href="approve.php?id=<?php echo $row["id"]; ?>">Approve</a> <?php  echo "</td>";
              echo "<td>"; ?> <a href="notapprove.php?id=<?php echo $row["id"]; ?>">Not Approve</a> <?php  echo "</td>";
              echo "<td>"; ?> <a href="student_delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure to delete !'); " >Delete</a> <?php echo "</td>";
              echo "</tr>";
            }
            echo "</table>";
          ?>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include"includes/footer.php"; ?>

