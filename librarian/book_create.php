<?php 
include "includes/header.php";
include "includes/sidebar.php";
include "connection.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      Book
	      <small>Create form element</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="book_list.php">Book List</a></li>
	      <li class="active">Create Form</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
	            <h3 class="box-title">Create Book</h3>
	          </div>   
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form name="form1" role="form" action="" method="post" enctype="multipart/form-data">
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group">
	                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
	              </div>
	              <div class="form-group">
	                <input type="file" class="form-control" id="image" name="f1" placeholder="Image">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control" id="author" name="author" placeholder="Author">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" id="publication" name="publication" placeholder="Publication">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control" id="purchase_date" name="purchase_date" placeholder="Purchase Date">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control" id="qty" name="qty" placeholder="Quantity">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" id="available_qty" name="available_qty" placeholder="Available Qty">
	              </div>
                  <div class="form-group">
	                <input type="text" class="form-control" id="librarian_username" name="librarian_username" placeholder="Librarian Username">
	              </div>
	            <div class="form-group">
	              <button type="submit" class="btn btn-primary" name="submit1" value="insert">Submit</button>
	              <a href='book_list.php' class="btn btn-warning">Back</a>
	            </div>
	            	
	            </div>
					
				</div>

	          </form>
<?php
    if(isset($_POST["submit1"]))
    {
        $tm=md5(time());
        $fnm=$_FILES["f1"]["name"];
        $dst="./books_image/".$tm.$fnm;
        $dsti="./books_image/".$tm.$fnm;
        move_uploaded_file($_FILES["f1"]["tmp_name"],$dst);
        mysqli_query($link,"insert into books values('','$_POST[name]','$dsti','$_POST[author]','$_POST[publication]','$_POST[purchase_date]','$_POST[price]','$_POST[qty]','$_POST[available_qty]','$_POST[librarian_username]')");    
        ?>
        <script type="text/javascript">
            alert("Book Inserted Successfully");
            window.location = "book_list.php";
            exit;
        </script>
        <?php
    }
?>
	        </div>
	        <!-- /.box -->

	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
<?php include "includes/footer.php"; ?>