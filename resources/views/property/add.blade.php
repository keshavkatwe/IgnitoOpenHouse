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
                        <?php echo $property->operation?> Property
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
                                    <form id="property" method="post" enctype="multipart/form-data">
                                        {!! csrf_field() !!}



                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" name="name" id="name" class="form-control" value=" <?php echo $property->name ?>"/>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Home exterior</label><br/>
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo url('uploads/properties/' . $property->home_exterior_pic) ?>" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                        <div>
                                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                                <input type="file" id="home_exterior_pic" name="home_exterior_pic">
                                                            </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Hall</label><br/>
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo url('uploads/properties/' . $property->home_hall_pic) ?>" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                        <div>
                                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                                <input type="file" name="home_hall_pic" id="home_hall_pic">
                                                            </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Bedroom</label><br/>
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo url('uploads/properties/' . $property->bedroom_pic) ?>" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                        <div>
                                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                                <input type="file" name="bedroom_pic" id="bedroom_pic">
                                                            </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Kitchen</label><br/>
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                            <img src="<?php echo url('uploads/properties/' . $property->kitchen_pic) ?>" alt="...">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                        <div>
                                                            <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                                <input type="file" name="kitchen_pic" id="kitchen_pic">
                                                            </span>
                                                            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea class="form-control" name="address" id="address"><?php echo $property->address ?></textarea>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Door facing</label>
                                                    <select class="form-control" name="door_facing" id="door_facing">
                                                        <option value="">:.Select.:</option>
                                                        <option value="East" <?php echo ($property->door_facing == 'East') ? 'selected' : '' ?>>East</option>
                                                        <option value="West" <?php echo ($property->door_facing == 'West') ? 'selected' : '' ?>>West</option>
                                                        <option value="South" <?php echo ($property->door_facing == 'South') ? 'selected' : '' ?>>South</option>
                                                        <option value="North" <?php echo ($property->door_facing == 'North') ? 'selected' : '' ?>>North</option>
                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row" >
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>House Type</label>
                                                    <select class="form-control" name="house_type" id="house_type">
                                                        <option value="">:.Select.:</option>
                                                        <option value="Single" <?php echo ($property->house_type == 'Single') ? 'selected' : '' ?>>Single</option>
                                                        <option value="Duplex" <?php echo ($property->house_type == 'Duplex') ? 'selected' : '' ?>>Duplex</option>
                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group"> 
                                                    <label>No of Rooms </label>
                                                    <input type="number" class="form-control" name="no_of_rooms" id="no_of_rooms" value="<?php echo $property->no_of_rooms ?>"/>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Property Amount</label>
                                                    <input type="text" class="form-control" name="min_property_amount" id="min_property_amount" value="<?php echo $property->min_property_amount ?>">
                                                    <span class="help-block"></span>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Property Sale Type</label>
                                                    <select class="form-control" name="property_sale_type" id="property_sale_type">
                                                        <option value="">:.Select.:</option>
                                                        <option value="Rent" <?php echo ($property->property_sale_type == 'Rent') ? 'selected' : '' ?>>Rent</option>
                                                        <option value="Sale" <?php echo ($property->property_sale_type == 'Sale') ? 'selected' : '' ?>>Sale</option>
                                                    </select>
                                                    <span class="help-block"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="1" name="is_vastu" <?php echo ($property->is_vastu == TRUE) ? 'checked' : '' ?>>
                                                            Is Vastu
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="1" name="is_furnished" <?php echo ($property->is_furnished == TRUE) ? 'checked' : '' ?>>
                                                            Is Furnished
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <button class="btn btn-primary pull-right">Save</button>
                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>


                </section><!-- /.content -->
            </div><!-- /.content-wrapper -->

            @include ('layout.bottommenu')
        </div><!-- ./wrapper -->

        @include ('layout.jsfooter')

        <script>
            $('#property').validate({
                rules: {
//                    
//                    home_exterior_pic: {
//                        required: true,
//                    },
//                    home_hall_pic: {
//                        required: true,
//                    },
//                    bedroom_pic: {
//                        required: true,
//                    },
//                    kitchen_pic: {
//                        required: true,
//                    },
                    address: {
                        required: true,
                    },
                    house_type: {
                        required: true,
                    },
                    no_of_rooms: {
                        required: true,
                    },
                    min_property_amount: {
                        required: true,
                    },
                    property_sale_type: {
                        required: true,
                    },
                    door_facing: {
                        required: true,
                    },
                    name: {
                        required: true,
                    },
                },
                messages: {
//                    home_exterior_pic: {
//                        required: "Please choose home exterior picture"
//                    },
//                    home_hall_pic: {
//                        required: "Please enter picture of hall"
//                    },
//                    bedroom_pic: {
//                        required: "Please enter bedroom picture"
//                    },
//                    kitchen_pic: {
//                        required: "Please enter kitchen picture"
//                    },
                    address: {
                        required: "Please enter address"
                    },
                    house_type: {
                        required: "Please select house type"
                    },
                    no_of_rooms: {
                        required: "Please select no of rooms"
                    },
                    min_property_amount: {
                        required: "Please select property amount"
                    },
                    property_sale_type: {
                        required: "Please select property sale type"
                    },
                    door_facing: {
                        required: "Please select door facing"
                    },
                    name: {
                        required: "Please enter name"
                    },
                }, submitHandler: function (form) {
                    form.submit();
                },
            });

        </script>
    </body>
</html>
