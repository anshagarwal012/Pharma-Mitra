<!--header rightside links-->
<ul class="navbar-nav header-links ml-auto hide-arrow">
    <p class="dropdown-item mb-0 mt-1"><?php echo "Hello Mr. ".$_SESSION['name'];?></p>
    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3" id="userNav" href="#" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <div class="user-thumb">
                            <img class="rounded-circle" src="<?php echo $_SESSION['dp'];?>" alt="" />
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userNav">
                        <a class="dropdown-item" href="logout.php">Sign Out</a>
                    </div>
                </li>
            </ul>
            <!--/header rightside links-->

        </div>
    </nav>

    <!--main content wrapper-->
    <div class="content-wrapper">

        <div class="container-fluid">