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
               <li><a href="phones.php">phones</a></li>
               <li><a href="../products/laptop.php">Laptop</a></li>
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
                <h4>Huawei P40</h4>
                <img src="../css/img/huaweiP40.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh23,000.39</s></p>
                <p class="price">Our Price: sh18,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>



</div>

<div class="col-md-4"><br>
                <h4>galaxy edge</h4>
                <img src="../css/img/galaxy.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh28,000.39</s></p>
                <p class="price">Our Price: sh24,200.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>



</div>

<div class="col-md-4"><br>
                <h4>Sumsung galaxyS7</h4>
                <img src="../css/img/galaxyS7.jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh32,000.39</s></p>
                <p class="price">Our Price: sh26,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>



</div>

<div class="col-md-4"><br>
                <h4>Nokia smart</h4>
                <img src="../css/img/images (6).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh23,000.39</s></p>
                <p class="price">Our Price: sh19,700.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>



</div>

<div class="col-md-4"><br>
                <h4>Itel 432s</h4>
                <img src="../css/img/images (5).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh4,100.39</s></p>
                <p class="price">Our Price: sh3,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>



</div>

<div class="col-md-4"><br>
                <h4>Tecno SPark 4 air</h4>
                <img src="../css/img/images (47).jpeg" alt="Lg Television" id="img">
                <p class="list-price text-danger">List price:<s>sh17,000.39</s></p>
                <p class="price">Our Price: sh14,500.99</p>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>

</div>
<p><h1>bbbshbn nbjs nbnn</h1></p>
<?php include '../footer/footer.php' ?>
</div>
<?php
        include '../detphp/details-7.php';
        include '../detphp/details-8.php';
        include '../detphp/details-9.php';
        include '../detphp/details-10.php';
        include '../detphp/details-11.php';
        include '../detphp/details-12.php';

        ?>
</body>
</html>