<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UP FreshMart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
body {
   background: url(img/bgw.png) center center fixed ;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
/*# sourceMappingURL=bootstrap.css.map */

}
</style>
</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="home.php">
                        UP FreshMart
                    </a>
                </li>
                <li>
                     <a role="button" data-toggle="modal" data-target="#login-modal" type="submit">Login</a>
                </li>
                <li>
                    <a href="register.php">Register</a>
                </li>
                <li>
                    <a href="forgotpass.php">Forgot Password</a>
                </li>
                <li>
                    <a href="product.php">Product</a>
                </li>
                <li><a href="shoppingcart.php">Shopping Cart<img src="img/cart.png" width="35" height="35"></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
        <!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" align="center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </button>
                    <img src="img/upfmlg.png">
                </div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form">
                        <div class="modal-body">
                            <input id="login_username" class="form-control" type="email" placeholder="E-mail" required>
                            <input id="login_password" class="form-control" type="password" placeholder="Password" required>
                        </div>
                        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" onclick='location.href="product.php"'>Login</button>
                            </div>
                        </div>
                    </form>
                    <!-- End # Login Form -->                 
                </div>
                <!-- End # DIV Form -->
                
            </div>
        </div>
    </div>
    <!-- END # MODAL LOGIN -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>ยินดีต้อนรับเข้าสู่<img src="img/upfmlg.png" width="300" height="100"></h1>
                        <h3><u>สินค้าสุดฮิต !</u></h3>
                        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/xa2.png" alt="" height="200" width="200">
                    <div class="text">
                        <h3>xa2</h3>
                        <p>มีสายคล้องมือ กล่องพร้อมเมนูและสายชาร์ต
สภาพดี ไม่เคยตก พึ่งแกะออกจากฟิมล์รอบตัว
มีฟิมล์กันรอยกระจก ไม่มีรอยขีดข่วน
แถมเมมให้ด้วยเลย</p>
                        <p>
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now!</button> <p class="text-center">ราคา 14,000.00 บาท</p>
                        </p>
                    </div>
                </div>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ตะกร้าสินค้า</h4>
        </div>
        <div class="modal-body">
          <p>หยิบสินค้า ใส่ตะกร้าเรียบร้อยแล้ว</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/zr1200.png" alt="" height="200" width="200">
                    <div class="text">
                        <h3>zr1200 สีชมพู</h3>
                        <p>มีสายคล้องมือ กล่องพร้อมเมนูและสายชาร์ต
สภาพดี ไม่เคยตก พึ่งแกะออกจากฟิมล์รอบตัว
มีฟิมล์กันรอยกระจก ไม่มีรอยขีดข่วน
แถมเมมให้ด้วยเลย</p>
                        <p>
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now!</button> <p class="text-center">ราคา 9,000.00 บาท</p>
                        </p>
                    </div>
                </div>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ตะกร้าสินค้า</h4>
        </div>
        <div class="modal-body">
          <p>หยิบสินค้า ใส่ตะกร้าเรียบร้อยแล้ว</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/zr1500.png" alt="" height="200" width="200">
                    <div class="text">
                        <h3>zr1500 สีชมพู</h3>
                        <p>มีสายคล้องมือ กล่องพร้อมเมนูและสายชาร์ต
สภาพดี ไม่เคยตก พึ่งแกะออกจากฟิมล์รอบตัว
มีฟิมล์กันรอยกระจก ไม่มีรอยขีดข่วน
แถมเมมให้ด้วยเลย</p>
                        <p>
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now!</button> <p class="text-center">ราคา 7,500.00 บาท</p>
                        </p>
                    </div>
                </div>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ตะกร้าสินค้า</h4>
        </div>
        <div class="modal-body">
          <p>หยิบสินค้า ใส่ตะกร้าเรียบร้อยแล้ว</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="img/zr50.png" alt="" height="200" width="200">
                    <div class="text">
                        <h3>casio zr50 สีขาว</h3>
                        <p>มีสายคล้องมือ กล่องพร้อมเมนูและสายชาร์ต
สภาพดี ไม่เคยตก พึ่งแกะออกจากฟิมล์รอบตัว
มีฟิมล์กันรอยกระจก ไม่มีรอยขีดข่วน
แถมเมมให้ด้วยเลย</p>
                        <p>
                              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Buy Now!</button> <p class="text-center">ราคา 5,200.00 บาท</p>
                        </p>
                    </div>
                </div>
                <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ตะกร้าสินค้า</h4>
        </div>
        <div class="modal-body">
          <p>หยิบสินค้า ใส่ตะกร้าเรียบร้อยแล้ว</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
