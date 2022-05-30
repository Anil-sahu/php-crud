<?php
include "../db/dbcon.php";
$id = $_GET['id'];
$deleteQuery = "delete from student where id = $id";
$query = mysqli_query($connection, $deleteQuery);
if ($query) {
?>
    <script>
        alert("Deleted successful");
        window.location.href = "view.php";
    </script>

<?php

} else {
?>
    <script>
        alert("Deleted failed");
    </script>

<?php
}
?>