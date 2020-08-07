<!DOCTYPE html>
<html>
<head>
        <title> Oneshop</title>
        <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <meta name="viewport" content="width-device-width,initial-scale-1,user-scalable=no">
    <script src="https:ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>
    <script src="../js/bootstrap.min.js"></script>
    </head>
<body>
<div id="background-image">
        <div class="menu-bar">
    
    <ul>
        <li class="active"><a href="../index.php" >Home</a></li>

       <li>Products
       <div class="sub-menu-1">
       <ul>
               <li><a href="../products/phones.php">phones</a></li>
               <li><a href="laptop.php">Laptop</a></li>
               <li><a href="../products/Television.php">Television</a></li>
           </ul>
       </div></li>

    
 
       <li>Account
           <div class="sub-menu-1">
               <ul>
                   <li><a href="#">User login</a></li>
                   <li><a href="#">Admin login</a></li>
                  
               </ul>
           </div>
        </li>
        <li>Help
           <div class="sub-menu-1">
               <ul>
                  <li><a href="#">How to Use</a></li>
                  <li><a href="#">contacts</a></li>
               </ul>
           </div>
         </li>   
         <li > <button class="btn btn-warning" type="submit"><span class="glyphicon glyphicon-shopping-cart"></span>Add Cart</button>
        </li>
        </li>
    </div>
    </div>
   
    <div class="container">
    <div class="cols-md-1">
            <h2 class="text-center" ><br>Featured products</h2>
            <div class="row">
            <br><br>


            <div class="col-md-4"><br>
                <h4>Dell Inspiron</h4>
                <img src="../css/img/images (53).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh27,700.39</s></p>
                <p class="price">Our Price: sh24,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Hp pavillion 3plus</h4>
                <img src="../css/img/images (8).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh53,000.39</s></p>
                <p class="price">Our Price: sh48,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Dell Inspiron 3690</h4>
                <img src="../css/img/images (52).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh32,400.39</s></p>
                <p class="price">Our Price: sh29,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Dell I3460</h4>
                <img src="../css/img/download.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh29,900.39</s></p>
                <p class="price">Our Price: sh26,000.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Thinkpad Lenovo</h4>
                <img src="../css/img/images (51).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh27,400.39</s></p>
                <p class="price">Our Price: sh25,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Hp Max</h4>
                <img src="../css/img/images (54).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh30,500.39</s></p>
                <p class="price">Our Price: sh28,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>
<?php include '../footer/footer.php' ?>
</div>
<?php
        include '../detphp/details-13.php';
        include '../detphp/details-14.php';
        include '../detphp/details-15.php';
        include '../detphp/details-16.php';
        include '../detphp/details-17.php';
        include '../detphp/details-18.php';

        ?>
</body>
</html>