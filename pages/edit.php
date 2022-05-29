<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
  <?php include 'header.php' ?>
    <main>
     
      <div class="container">
        <div class="box-heading">Edit Student datail</div>
        <br /><br />
      <?php include 'form.php' ?>
        <button type="submit" id="btn">Save</button>
      </div>
    </main>
  </body>
</html>
