<?php 
session_start();
if(!isset($_SESSION["librarian"]))
{
  ?>
    <script type="text/javascript">
      window.location="login.php";
    </script>
  <?php
}
include"includes/header.php"; 
include"includes/sidebar.php";
include"connection.php";
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Books
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
          <h3 class="box-title">Books List</h3>
          <a class='btn btn-primary' href="book_create.php">Add New</a>
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
          $result = mysqli_query($link, "select * from books");
          echo "<table class='table table-striped table-bordered table-hover'>";
          echo "<tr>"; 
            echo "<th>"; echo "Name"; echo "</th>";
            echo "<th>"; echo "Image"; echo "</th>";
            echo "<th>"; echo "Author"; echo "</th>";
            echo "<th>"; echo "Publication"; echo "</th>";
            echo "<th>"; echo "Purchase Date"; echo "</th>";
            echo "<th>"; echo "Price"; echo "</th>";
            echo "<th>"; echo "Quantity"; echo "</th>";
            echo "<th>"; echo "Available Quantity"; echo "</th>";
            echo "<th>"; echo "Librarian Username"; echo "</th>";
            echo "<th>"; echo "Action"; echo "</th>";
          echo "</tr>";
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
              echo "<td>"; echo $row["name"]; echo "</td>";
              echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
              echo "<td>"; echo $row["author"]; echo "</td>";
              echo "<td>"; echo $row["publication"]; echo "</td>";
              echo "<td>"; echo $row["purchase_date"]; echo "</td>";
              echo "<td>"; echo $row["price"]; echo "</td>";
              echo "<td>"; echo $row["qty"]; echo "</td>";
              echo "<td>"; echo $row["available_qty"]; echo "</td>";
              echo "<td>"; echo $row["librarian_username"]; echo "</td>";
              echo "<td>"; ?> <a href="book_delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure to delete !'); " class="label label-danger" >Delete</a> <?php echo "</td>";
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
<?php include "includes/footer.php"; ?>
