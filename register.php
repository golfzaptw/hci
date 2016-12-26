<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register UP FreshMart</title>

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
   background: url() center center fixed ;
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
        <div ><a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a></div>
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
        <div class="col-lg-6 container" >
  <h2 class="col-lg-6">Register</h2>
</div>
        <div class="col-lg-12 well">
    <div class="row">
                <form>
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label>First Name</label>
                                <input type="text" placeholder="Enter First Name Here.." class="form-control" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label>Last Name</label>
                                <input type="text" placeholder="Enter Last Name Here.." class="form-control" required>
                            </div>
                        </div>
                        <div class="row">
                    <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <br>
                    <div class="col-sm-6">
                        <div class="row">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>

                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
               
                </div>
                        <div class="form-group">
                    <label>Date of Birth</label>
                        <input type="date" id="birthDate" class="form-control" required>
                </div>                  
                        <div class="form-group">
                            <label>Address</label>
                            <textarea placeholder="Enter Address Here.." rows="3" class="form-control"></textarea>
                        </div>  
                        <div class="row">
                        <div class="col-sm-4 form-group">
                        <label>City</label>
                        <select id="country" class="form-control" required>
                            <option>Phayao</option>
                            <option>Bangkok</option>
                            <option>Kanchanaburi</option>
                            <option>Kalasin</option>
                            <option>Kamphaeng phet</option>
                            <option>Khon kean</option>
                            <option>Chanthaburi</option>
                            <option>Chachoengsao</option>
                            <option>Chon buri</option>
                            <option>Chai nat</option>
                            <option>Chai yaphum</option>
                            <option>Chum phon</option>
                            <option>Chiang rai</option>
                            <option>Chiang mai</option>
                            <option>Trang</option>
                            <option>Trat</option>
                            <option>Tak</option>
                            <option>Nakhon nayok</option>
                            <option>Nakhon pathom</option>
                            <option>Nakhon phanom</option>
                            <option>Nakhon ratchasima</option>
                            <option>Nakhon si thammarat</option>
                            <option>Nakhon sawan</option>
                            <option>Nonthaburi</option>
                            <option>Narathiwat</option>
                            <option>Nan</option>
                            <option>Buri ram</option>
                            <option>Pathum thani</option>
                            <option>Prachuap khiri khan</option>
                            <option>Prachinburi</option>
                            <option>Pattani</option>
                            <option>Ayutthaya</option>
                            <option>Krabi</option>
                            <option>Phangnga</option>
                            <option>Phatthalung</option>
                            <option>phichit</option>
                            <option>Phitsanulok</option>
                            <option>Phetchaburi</option>
                            <option>Phetchabun</option>
                            <option>Phrae</option>
                            <option>Phuket</option>
                            <option>Mahasarakham</option>
                            <option>Mukdahan</option>
                            <option>Mae hong son</option>
                            <option>Yasothon</option>
                            <option>Yala</option>
                            <option>Roi et</option>
                            <option>Ranong</option>
                            <option>Rayong</option>
                            <option>Rachaburi</option>
                            <option>Lopburi</option>
                            <option>Loei</option>
                            <option>Lampang</option>
                            <option>Lamphun</option>
                            <option>Srisaket</option>
                            <option>Sakonnakhon</option>
                            <option>Songkhla</option>
                            <option>Satun</option>
                            <option>Samutprakan</option>
                            <option>Samut songkhram</option>
                            <option>Samut sakhon</option>
                            <option>Sra kaeo</option>
                            <option>Saraburi</option>
                            <option>Singburi</option>
                            <option>Sukhothai</option>
                            <option>Suphanburi</option>
                            <option>Surat thani</option>
                            <option>Surin</option>
                            <option>Nongkhai</option>
                            <option>Nongbualamphu</option>
                            <option>Angthong</option>
                            <option>Amnatcharoen</option>
                            <option>Udonthani</option>
                            <option>Uttaradit</option>
                            <option>Uthaithani</option>
                            <option>Uboratchathani</option>

                        </select>
                        </div>
                        <div class="col-sm-4 form-group" required>
                                <label>State</label>
                                <input type="text" placeholder="Enter State Here.." class="form-control">
                            </div>
                            <div class="col-sm-4 form-group" required>
                                <label>Zip Code</label>
                                <input type="text" placeholder="Enter Zip Code Here.." class="form-control">
                            </div>

                         </div>   
                        </form>
                        </div> 

                    <div class="form-group" required>
                        <label>Phone Number</label>
                        <input type="text" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>      
                    <div class="form-group" required>
                        <label>Email Address</label>
                        <input type="Email" placeholder="Enter Email Address Here.." class="form-control">
                    </div> 
                    <div class="form-group" required>
                        <label>Password</label>
                        <input type="Password" placeholder="Enter Password Here.." class="form-control">
                    </div> 
                    <div class="form-group" required>
                        <label>Comfirm Password</label>
                        <input type="Password" placeholder="Comfirm Password Here.." class="form-control">
                    </div> 
                 <div class="row">
                <div class="form-group">
                                            <div class="col-sm-8">
                        <button type="button" class="btn btn-lg btn-info"><a href="confirmemail.php">Submit</a></button>   
                        </div>
                    </div> 
                </div>
                </div>
                </form> 
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
