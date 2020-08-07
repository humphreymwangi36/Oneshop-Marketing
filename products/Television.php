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
               <li><a href="../products/laptop.php">Laptop</a></li>
               <li><a href="Television.php">Television</a></li>
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
                <h4>Mi Mural Tv</h4>
                <img src="../css/img/images (58).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh18,000.39</s></p>
                <p class="price">Our Price: sh13,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Lg Ultra Hd</h4>
                <img src="../css/img/images (57).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh20,000.39</s></p>
                <p class="price">Our Price: sh16,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Sumsung Smart Hd</h4>
                <img src="../css/img/images (36).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh23,700.39</s></p>
                <p class="price">Our Price: sh19,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Vitron</h4>
                <img src="../css/img/images (25).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh17,000.39</s></p>
                <p class="price">Our Price: sh14,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Xiaomi Tv</h4>
                <img src="../css/img/LgTv.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh18,000.39</s></p>
                <p class="price">Our Price: sh15,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>

<div class="col-md-4"><br>
                <h4>Sumsung 43"</h4>
                <img src="../css/img/samsung1.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh32,000.39</s></p>
                <p class="price">Our Price: sh29,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
</div>


<?php include '../footer/footer.php' ?>
</div>
<?php
        include '../detphp/details-19.php';
        include '../detphp/details-20.php';
        include '../detphp/details-21.php';
        include '../detphp/details-22.php';
        include '../detphp/details-23.php';
        include '../detphp/details-24.php';

        ?>
</body>
</html>