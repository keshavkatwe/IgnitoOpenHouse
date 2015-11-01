<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ignito OpenHouse | Dashboard</title>

        @include ('layout.header')

    </head>
    <body class="skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            @include ('layout.topmenu')
            @include ('layout.leftmenu')



            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Home
                        <small>it all starts here</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">

                    <!-- Default box -->
                    <div class="box">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <h3>Post Property</h3>
                                            <p>Buy</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-plus"></i>
                                        </div>
                                        <a href="<?php echo url('properties/add')?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <h3>My Properties</h3>
                                            <p>Yours</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-building"></i>
                                        </div>
                                        <a href="<?php echo url('properties')?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <h3>Search Properties</h3>
                                            <p>Bid</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-search"></i>
                                        </div>
                                        <a href="<?php echo url('properties/search')?>" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                    </div><!-- /.box -->

                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include ('layout.bottommenu')
        </div><!-- ./wrapper -->

        @include ('layout.jsfooter')
    </body>
</html>
