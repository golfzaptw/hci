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
   background: url(img/1.png) center center fixed ;
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
        <!-- Page Content -->

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

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="product.php">UP FreshMart</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">รายการสินค้าทั้งหมด</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">แยกประเภทตามหมวด<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Digital Compact</a></li>
                            <li><a href="#">DSLR-like</a></li>
                            <li><a href="#">DSLR</a></li>
                        </ul>
                    </li>
                </ul>
                

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control pull-right" style="width: 300px; margin-right: 35px, border: 1px solid black; background-color: #e5e5e5;" placeholder="Search">
                        <span class="input-group-btn">
                            <button type="reset" class="btn btn-default">
                                <span class="glyphicon glyphicon-remove">
                                    <span class="sr-only">Close</span>
                                </span>
                            </button>
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search">
                                    <span class="sr-only">Search</span>
                                </span>
                            </button>
                        </span>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    


    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>UP FreshMart ยินดีต้อนรับ</h1>
            <img src="img/upfm.png" alt="" width="1000" height="500">
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>สินค้ายอดฮิต</h3>
            </div>
        </div>
        <!-- /.row -->

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
        <!-- /.row -->

        <hr>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
<!-- Footer -->
        
    </div>
    <!-- /.container -->

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