<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('assets/dist') }}/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo Auth::user()->name ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="<?php echo url('home')?>">
                    <i class="fa fa-home"></i> <span>Home</span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('properties/add')?>">
                    <i class="fa fa-plus"></i>
                    <span>Post Property</span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('properties')?>">
                    <i class="fa fa-building"></i>
                    <span>My Properties</span>
                </a>
            </li>
            <li>
                <a href="<?php echo url('properties/search')?>">
                    <i class="fa fa-search"></i> <span>Search Property</span> 
                </a>
            </li>
            
<!--            <li class="header">LABELS</li>
            <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>