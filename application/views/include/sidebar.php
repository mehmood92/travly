<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <div class="user-info-wrapper">	
                    <div class="user-info-profile-image">
                        <img src="<?php echo Base_url('assets/img/profile-1.jpg');?>" alt=""  width="65" height="65">
                    </div>
                    <div class="user-info">
                        <div class="user-welcome">Welcome</div>
                        <div class="username"><strong><?php
                                $res = $this->session->userdata('is_logged_in');
                                if ($res == true) {
                                    echo $this->session->userdata('Name');
                                }
                                ?></strong></div>
                        <div class="status">Status <span class="status-now"><i class="fa fa-circle text-emerald fa"></i> Online</span> </div>
                    </div>
                </div>
            </li>
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo Base_url('welcome/home'); ?>" class="active"><i class="fa fa-dashboard fa-fw fa-3x"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo Base_url('busstops/'); ?>"><i class="fa fa-envelope fa-fw fa-3x"></i> Bus Stops<span class="fa arrow"></span></a>
                <!--<ul class="nav nav-second-level">
                    <li>
                        <a id="compose" href="mail.html" class="text-center">
                            <span class="btn btn-block btn-primary">Compose</span>
                        </a>
                    </li>
                    <li>
                        <a href="mail.html">Inbox <span class="label label-primary pull-right">7</span></a>
                    </li>
                    <li>
                        <a href="mail.html">Drafts</a>
                    </li>
                    <li>
                        <a href="mail.html">Sent</a>
                    </li>
                    <li>
                        <a href="mail.html">Trash</a>
                    </li>
                    <li>
                        <a href="mail.html">Junk Mail</a>
                    </li>
                </ul>-->
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Base_url('routes/'); ?>"><i class="fa fa-bar-chart-o fa-fw fa-3x"></i> Routes<span class="fa arrow"></span></a>
                <!--<ul class="nav nav-second-level">
                    <li>
                        <a href="flot.html">Flot Charts</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris.js Charts</a>
                    </li>
                </ul>-->
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?php echo Base_url('buses/'); ?>"><i class="fa fa-th fa-fw fa-3x"></i> Buses</a>
            </li>
        </ul>
        <!-- /#side-menu -->
    </div>
    <!-- /.sidebar-collapse -->
</nav>
<!-- /.navbar-static-side -->
