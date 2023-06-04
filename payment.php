<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container">
  <div style="margin: 20px">
    <a class="navbar-brand" href="index.php">
      <img src="images/logo.png" alt="">
    </a>
  </div>
  <h1>Payment</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Product Id</th>
        <th scope="col">Product_Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>

        <th scope="col">Delete</th>
        <th scope="col">Pay</th>
      </tr>
    </thead>
<?php
session_start();
include 'config.php';
$userEmail = $_SESSION['userEmail'];
$fetch_result = mysqli_query($connection, "SELECT * FROM `products` WHERE pd_email='$userEmail'");
$no=0;
if ($fetch_result) {
    while ($row = mysqli_fetch_array($fetch_result)) {
    $pd_id = $row["pd_id"];
    $pd_name = $row["pd_name"];
    $pd_price = $row["pd_price"];
    $pd_quantity = $row["pd_quantity"];
    $pd_date = $row["pd_date"];
    $no = $no+1;
    echo "
    <tbody>
      <tr>
        <th scope='row'>$no</th>
        <td>$pd_id</td>
        <td>$pd_name</td>
        <td>$pd_price</td>
        <td>$pd_quantity</td>
        <td>$pd_date</td>
        <td><button type='button' class='btn btn-danger'onclick=\"deleteform('$pd_id')\">DELETE</button></td>
        <td><button type='button' class='btn btn-info' onclick=\"addToForm('$pd_id', '$pd_name','$pd_price')\">PAY</button></td>
      </tr>
    </tbody>
 ";
  }
}else {
  echo "";
};
?>
</table>
</div>
<div class="container" >
<h1 style="margin-top: 10%;">Payment History</h1>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Product Id</th>
        <th scope="col">Product_Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Date</th>
      </tr>
    </thead>
<?php
$fetch_result = mysqli_query($connection, "SELECT * FROM `payments` WHERE py_email='$userEmail'");
$no=0;
if ($fetch_result) {
    while ($row = mysqli_fetch_array($fetch_result)) {
    $pd_id = $row["py_id"];
    $pd_name = $row["py_name"];
    $pd_price = $row["py_price"];
    $pd_quantity = $row["py_quantity"];
    $pd_date = $row["py_date"];
    $no = $no+1;
    echo "
    <tbody>
      <tr>
        <th scope='row'>$no</th>
        <td>$pd_id</td>
        <td>$pd_name</td>
        <td>$pd_price</td>
        <td>$pd_quantity</td>
        <td>$pd_date</td>
      </tr>
    </tbody>
 ";
  }
}else {
  echo "";
};
?>
  </table>
</div>


<script>
  function addToForm(pd_id, pd_name, pd_price, pd_quantity) {
      var form = document.createElement('form');
      form.method = 'post';
      form.action = 'paymentaction.php';

      var idInput = document.createElement('input');
      idInput.type = 'hidden';
      idInput.name = 'pd_id';
      idInput.value = pd_id;
      form.appendChild(idInput);

      var nameInput = document.createElement('input');
      nameInput.type = 'hidden';
      nameInput.name = 'pd_name';
      nameInput.value = pd_name;
      form.appendChild(nameInput);

      var priceInput = document.createElement('input');
      priceInput.type = 'hidden';
      priceInput.name = 'pd_price';
      priceInput.value = pd_price;
      form.appendChild(priceInput);

      document.body.appendChild(form);
      form.submit();
  }


  function deleteform(pd_id) {
    var form = document.createElement('form');
      form.method = 'post';
      form.action = 'deletepayment.php';

      var idInput = document.createElement('input');
      idInput.type = 'hidden';
      idInput.name = 'pd_id';
      idInput.value = pd_id;
      form.appendChild(idInput);
      
      document.body.appendChild(form);
      form.submit();
  }

</script>

  
</body>
</html>