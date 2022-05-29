<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style/style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <nav class="navebar">
      <div class="brand">CRUD</div>
      <div class="menu">
        <ul class="all-list">
          <li><a href="index.php" class="active">Home</a></li>

          <li><a href="pages/view.php">View</a></li>
        </ul>
      </div>
    </nav>
    <main>
      <!-- name,email, mobile,branch,fees,gender -->
      <div class="container">
        <div class="box-heading">Add Student</div>
        <br /><br />
        <form action =""method="POST">
        <?php include 'pages/form.php' ?>
        <button type="submit" id="btn" onclick="studentData()" name ="submit">Add</button>
        </form>
     
      </div>
    </main>
  </body>
</html>
<?php
if(isset($_POST['submit'])){

}

?>