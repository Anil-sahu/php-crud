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
<?php include 'header.php'?>
    <br /><br /><br />
    <main>
      <table id="customers">
        <tr>
          <th>id</th>
          <th>name</th>
          <th>Mob_number</th>

          <th>Branch</th>
          <th>Fee</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <tr>
          <td>1</td>
          <td>Anil sahu</td>
          <td>986906567</td>

          <td>CSE</td>
          <td>27000</td>
          <td>
            <input type="submit" onclick="editData()" value="edit" />
          </td>
          <td>
            <input type="submit" onclick="deleteData()" value="delete" />
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Naveen Pal</td>
          <td>986906567</td>

          <td>CSE</td>
          <td>27000</td>
          <td>
            <input type="submit" onclick="editData()" value="edit" />
          </td>
          <td>
            <input type="submit" onclick="deleteData()" value="delete" />
          </td>
        </tr>
      </table>
    </main>
    <script src="index.js"></script>
  </body>
</html>
