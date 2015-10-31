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
                        List of properties
                        <small>it all starts here</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <?php foreach ($properties as $property) { ?>
                                <!-- Default box -->
                                <div class="box">
                                    <div class="box-header">
                                        <h3 class="box-title"><?php echo $property->name ?></h3>
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <img style="width: 100%;height: 200px;" src="<?php echo url('uploads/properties/' . $property->home_exterior_pic) ?>"/>
                                            </div>
                                            <div class="col-md-3">
                                                <h4><strong>Address:</strong></h4>
                                                <p><?php echo nl2br($property->address) ?></p>
                                                <br/>
                                                <strong>For:</strong> <span class="badge"><?php echo $property->property_sale_type ?></span><br/>
                                                <strong>Vastu:</strong> <span class="badge"><?php echo ($property->is_vastu) ? 'Yes' : 'No' ?></span><br/>
                                            </div>
                                            <div class="col-md-3">
                                                <strong>Door facing:</strong> <span class="badge"><?php echo $property->door_facing ?></span><br/>
                                                <strong>No of rooms:</strong> <span class="badge"><?php echo $property->no_of_rooms ?></span><br/>
                                                <strong>Furnished:</strong> <span class="badge"><?php echo ($property->is_furnished) ? 'Yes' : 'No' ?></span><br/>
                                                <strong>Type:</strong> <span class="badge"><?php echo $property->house_type ?></span><br/>
                                                <strong>Min Bid:</strong> <span class="badge">Rs. <?php echo $property->min_property_amount ?></span><br/>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <a class="btn btn-primary" href="<?php echo url('properties/edit/' . $property->id) ?>">Edit</a>
                                            </div>
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer">

                                    </div>
                                </div><!-- /.box -->
                            <?php } ?>

                        </div>
                    </div>


                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include ('layout.bottommenu')
        </div><!-- ./wrapper -->

        @include ('layout.jsfooter')
    </body>
</html>
