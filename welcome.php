<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">

<style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }

        * {
  box-sizing: border-box;
}

#myInput {
  /* background-image: url('https://cdn1.iconfinder.com/data/icons/web-and-mobile-ui-outline-icon-kit/512/UI_Icons_2-01-512.png'); */
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #000000;
}


</style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    </div>
  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:35%;">Name</th>
    <th style="width:30%;">PhoneNo</th>
    <th style="width:35%;">GPA</th>
  </tr>
  <tr>
    <td>Saurav S B</td>
    <td>7012723582</td>
    <td>10.0</td>
  </tr>
  <tr>
    <td>Akshara Lakshmi</td>
    <td>9876543210</td>
    <td>6.38</td>
  </tr>
  <tr>
    <td>Ajay Duth</td>
    <td>7894561238</td>
    <td>8.89</td>
  </tr>
  <tr>
    <td>Abdul Khader</td>
    <td>8475961235</td>
    <td>9.98</td>
  </tr>
  <tr>
    <td>Abin Baby</td>
    <td>9254167712</td>
    <td>10.0</td>
  </tr>
  <tr>
    <td>Maneesh</td>
    <td>8758479110</td>
    <td>7.83</td>
  </tr>
  <tr>
    <td>Pranav</td>
    <td>8989455432</td>
    <td>8.72</td>
  </tr>
  <tr>
    <td>Rishon Krishna</td>
    <td>7878984565</td>
    <td>8.50</td>
  </tr>
  <tr>
    <td>Abhishek T</td>
    <td>7986944565</td>
    <td>F</td>
  </tr>
</table>     
         
    </div>
  </div>
</div>


<div class="footer">

   
        <a href="reset.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    

</div>

<script>

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

</script>

</body>

</html>