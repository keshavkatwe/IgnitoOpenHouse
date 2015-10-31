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
                        Search
                        <small>it all starts here</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-body">
                                    <?php // var_dump($profile)?>
                                    <form id="property-search" method="get">
                                        {!! csrf_field() !!}
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Keyword<span class="text-danger">*</span></label>
                                                    <input name="keyword" type="text" id="keyword" class="form-control"/>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Min Price</label>
                                                    <input name="min" type="text" class="form-control"/>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Max Price</label>
                                                    <input name="max" type="text"class="form-control"/>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary pull-right">Search</button>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

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
                                                <button class="btn btn-success" onclick="interest(<?php echo $property->id ?>)">Interest</button>
                                                <a class="btn btn-primary" href="<?php echo url('properties/bid/' . $property->id) ?>">Bid</a>
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

        <script>
            $('#property-search').validate({
                rules: {
                    keyword: {
                        required: true,
                    },
                },
                messages: {
                    keyword: {
                        required: "Please enter keyword"
                    },
                }, submitHandler: function (form) {
                    form.submit();
                },
            });

            function interest(property_id)
            {
                $('#property_id').val(property_id);
                $('#appointmentModal').modal('show');
            }

            $(function () {
                $(".datepicker").date;
            });
        </script>
    </body>
</html>
