<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shopping Cart</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="navbar.css" rel="stylesheet">
    <script type="stylesheet" src="js/navbar.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--bg Fullscreen -->

<style>
body {
   background: url(img/bg7.gif) center center fixed ;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
/*# sourceMappingURL=bootstrap.css.map */

}
<style>
.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
</style>
</style>
<style>
.button {
    background-color: red; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button5 {background-color: #555555;} /* Black */
.button6 {background-color: green;} /* Black */
</style>

<!-- end -->
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

            <div ><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a></div>
<div id="page-content-wrapper">
            <div class="col-lg-11 col-centered"><h1>Shopping Cart</h1></div>
            <table class="table table-hover">
  <thead>
    <tr>
      <th><font color="blue" size="4">No.</font></th>
      <th><font color="blue" size="4">Name Product</th>
      <th><font color="blue" size="4"><font color="blue" size="4"><font color="blue" size="4">Price Product</th>
      <th><font color="blue" size="4"><font color="blue" size="4">Amount Product</th>
      <th><font color="red" size="4">Delete Product</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><font color="blue" size="4">1</th>
      <td><font color="blue" size="4">XA-2</td>
      <td><font color="blue" size="4">14,000</td>
      <td><div class="col-md-3">
    <select class="form-control" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div></td>
      <td><button class="button button3" onclick="myFunction()">Delete</button></td>
    </tr>
    <tr>
      <th scope="row"><font color="blue" size="4">2</th>
      <td><font color="blue" size="4">Zr1500</td>
      <td><font color="blue" size="4">9,000</td>
      <td><div class="col-md-3">
    <select class="form-control" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div></td>
      <td><button class="button button3" onclick="myFunction()">Delete</button></td>
    </tr>
    <tr>
      <th scope="row"><font color="blue" size="4">3</th>
      <td><font color="blue" size="4">Zr1200</td>
      <td><font color="blue" size="4">7,500</td>
      <td><div class="col-md-3">
    <select class="form-control" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div></td>
      <td><button class="button button3" onclick="myFunction()">Delete</button></td>
    </tr>
    <tr>
      <th scope="row"><font color="blue" size="4">4</th>
      <td ><font color="blue" size="4">Zr50</td>
      <td><font color="blue" size="4">5,200</td>
      <td><div class="col-md-3">
    <select class="form-control" >
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div></td>
      <td><button class="button button3" onclick="myFunction()">Delete</button></td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td ><b><font size="5">ราคารวม</font></b></td>
      <td><b><font size="5">35,700</font></b></td>
      <td><button type="button" class="button button6 btn-lg" onclick="myFunction2()" >Update</button></td>
      <td><a href="detail.php"><button type="button" class="button button5 btn-lg" onclick="myFunction2()" >Next</button></a></td>
    </tr>
  </tbody>
</table>
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
function myFunction() {
    var x;
    if (confirm("คุณต้องการที่จะลบรายการนี้หรือไม่?") == true) {
        x = "Delete Success";
    } else {
        x = "Delete Fail";
    }
    document.getElementById("demo").innerHTML = x;
}
function myFunction2() {
    var x;
    if (confirm("ยืนยันการทำรายการ") == true) {
        x = "Delete Success";
    } else {
        x = "Delete Fail";
    }
    document.getElementById("demo").innerHTML = x;
}
</script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
</body>

</html>
