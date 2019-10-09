
<!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top"  role="navigation" style="margin-bottom: 0 ; color: white; black;background: #374785;">

            <div class="navbar-header" >
                <a class="navbar-brand" style="color: #F7E9A0;" >Joshmar Printing Service</a>
            </div>

			<ul class="nav navbar-nav" >
                <li style="cursor:pointer">
                    <a href="./index.php" ><i class="fa fa-home"></i> Home</a>
                </li>
				<li id="history"><a href="history.php"><span class="fa fa-list-alt"></span> History</a></li>

                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="fa fa-list-alt">Request a Qoute</span> <i class="fa fa-caret-down"></i>
                    </a>
                <ul class="dropdown-menu">
                        <li><a href="./Request.php" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  Custom Quoute</a></li>
                        <li class="divider"></li>
                        <li><a href="./history_quote.php" data-toggle="modal"><span class="glyphicon glyphicon-duplicate"></span>Manage Quoute</a></li>
                    </ul>
                   </li>
			</ul>

            <ul class="nav navbar-top-links navbar-right">
                <li style="cursor:pointer">
                   <a href="./cart.php"><i class="fa fa-shopping-cart fa-fw"></i></a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<span class="glyphicon glyphicon-lock"></span> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu">
						<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span>  My Account</a></li>
						<li class="divider"></li>
						<li><a href="#profile" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>  My Profile</a></li>
						<li class="divider"></li>
                        <li><a href="#address" data-toggle="modal"><span class="glyphicon glyphicon-user"></span>  Address</a></li>
                        <li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>