<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "cruddb";

$connection = mysqli_connect($server, $user, $password, $db);
if ($connection) {
?>

    <script>
        console.log("Connection successful");
    </script>


<?php
} else {

?>
    <script>
        console.log("connection failed");
    </script>
<?php
}

?>