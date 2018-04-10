<?php
include "connection.php";
$id = $_GET["id"];
// To delete only image 
$result=mysqli_query($link,"SELECT * from books WHERE id=$id");
while($row=mysqli_fetch_array($result))
{
    $img=$row["image"];
}
unlink($img);
// Delete entire record with image
mysqli_query($link, "DELETE from books WHERE id=$id");
?>
<script type="text/javascript">
    alert("Book Deleted Successfully");
    window.location = "book_list.php";
    exit;
</script>



