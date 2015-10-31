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

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
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
                                        <div class="col-md-3">
                                            <form method="post" action="<?php echo url('properties/bid/' . $property->id) ?>">
                                                {!! csrf_field() !!}
                                                <div class="text-center">
                                                    <h4>Last Bid:</h4>
                                                    <h3>Rs. <?php // echo $property->min_property_amount ?></h3>
                                                    <hr/>
                                                    <h4>Your Bid:</h4>
                                                    <input type="text" placeholder="Amount" name="bid_amount" class="form-control"/><br/>
                                                    <button class="btn btn-success">Bid</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="text-center">
                                        <h3>Time left for bid: 5mins</h3>
                                    </div>
                                    <hr/>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Bid Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($property->Bids as $bid) { ?>
                                                        <tr>
                                                            <td><?php echo $bid->user->name ?></td>
                                                            <td><?php echo $bid->bid_amount?></td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div>
                    </div>


                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include ('layout.bottommenu')
        </div><!-- ./wrapper -->


        <!-- Modal -->
        <div class="modal fade" id="appointmentModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <form method="post" action="<?php echo url('properties/interest') ?>">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Appointment</h4>
                        </div>
                        <div class="modal-body">
                            {!! csrf_field() !!}
                            <input type="hidden" name="property_id" id="property_id" value=""/>
                            <div class="form-group">
                                <div class='input-group date datetime'>
                                    <input type="text" class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @include ('layout.jsfooter')

    </body>
</html>
