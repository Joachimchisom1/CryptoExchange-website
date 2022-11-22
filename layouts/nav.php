<header class="header-area header-area2">

    <div class="header-menu-wrapper">
        <div class="container">
            <div class="row">
                <!-- for logo -->
                <div class="col-lg-3">
                    <div class="logo">
                        <a href="index.php"> <img src="images/Acorntrade.png" height="50" width="50"></a>
                    </div><!-- end logo -->
                </div><!-- end col-lg-3-->
                <div class="col-lg-9 main-menu-wrapper">
                    <div class="main-menu-content">
                        <!--  style="background-color: black; border-radius: 15px;" -->
                        <nav>
                            <ul>
                                <?php
                                // $getCat = $db->query("SELECT * FROM categories");
                                // while ($rw = $getCat->fetch_assoc()) {
                                //     $cat_titel = $rw['cat_title'];
                                //     echo "<li><a href='#'>{$cat_title}</a></li>";
                                // }

                                ?>

                                <li><a href="index.php">Home</a></li>
                                <li class="has-dropdown mega-dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">ABOUT US</a>
                                    <ul class="dropdown-menu mega-dropdown-menu">
                                        <li>
                                            <div class="container">
                                                <div class="row">
                                                    <!-- Column #1 -->
                                                    <!-- Column #4 -->
                                                    <div class="col-md-12">

                                                        <p style="color: white; ">
                                                            Acorntrade.net is a trading company which invests with optimism and confidence to produce strong results in the stock market, bonds, currencies and commodities. Pay-wase provides instant payments up to 15% ROI
                                                        </p>

                                                    </div>
                                                    <!-- .col-md-3 end -->
                                                </div>
                                                <!-- .row end -->
                                            </div>
                                            <!-- container end -->
                                        </li>
                                    </ul>
                                    <!-- .mega-dropdown-menu end -->
                                </li>
                                <li class="">
                                    <a href="sign-up.php"><i class="fa fa-sign-in-alt"></i> Sign up</a>
                                </li>
                                <li class="" style="border-radius: 8px;">
                                    <a href="login.php"><i class="fa fa-sign-in-alt"></i> Login</a>
                                </li>
                                <!-- <li><a href="sign-up.php">Sign-In</a></li>
                                <li><a href="login.php">Login</a></li> -->

                            </ul>
                        </nav>
                        <div class="logo-right-button">
                            <!-- <ul>
                                <li><a href="javascript:void(0)" class="search-button"><i class="fa fa-search"></i></a></li>
                            </ul> -->
                            <div class="side-menu-open">
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                                <span class="menu__bar"></span>
                            </div><!-- end side-menu-open -->
                        </div><!-- end logo-right-button -->
                        <!-- <div class="search-option">
                            <form action="#">
                                <input class="form-control" type="text" placeholder="Search by keywords...">
                                <i class="fa fa-search search-icon"></i>
                            </form>
                        </div>end search-option -->
                    </div><!-- end main-menu-content -->
                </div><!-- end col-lg-9 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end header-menu-wrapper -->
    <div class="side-nav-container">
        <div class="humburger-menu">
            <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
        </div><!-- end humburger-menu -->
        <div class="side-menu-wrap">
            <ul class="side-menu-ul">
                <?php
                // $getCat = $db->query("SELECT * FROM categories");
                // while ($rw = $getCat->fetch_assoc()) {
                //     $cat_title = $rw['cat_title'];
                //     echo "<li><a href='#'>{$cat_title}</a></li>";
                // }

                ?>
                <li class="sidenav__item"><a href="index.php">Home</a></li>
                <li class="has-dropdown mega-dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle menu-item">ABOUT US</a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li>
                            <div class="container">
                                <div class="row">
                                    <!-- Column #1 -->
                                    <!-- Column #4 -->
                                    <div class="col-md-12">
                                        <ul>
                                            <li>
                                                <a href="elements-featured.html">
                                                    Acorntrade.net is a trading company which invests with optimism and confidence to produce strong results in the stock market, bonds, currencies and commodities. Pay-wase provides instant payments up to 15% ROI
                                                </a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- .col-md-3 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <!-- container end -->
                        </li>
                    </ul>
                    <!-- .mega-dropdown-menu end -->
                </li>
                <li class="sidenav__item sidenav__item2 text-center">
                    <a href="sign-up.php"><i class="fa fa-sign-in-alt"></i> Sign up</a>
                </li>
                <li class="sidenav__item sidenav__item2 text-center">
                    <a href="login.php"><i class="fa fa-sign-in-alt"></i> Login</a>
                </li>
            </ul>
        </div><!-- end side-menu-wrap -->
    </div><!-- end side-nav-container -->
</header>