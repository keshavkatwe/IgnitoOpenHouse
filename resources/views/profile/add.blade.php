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
                        Profile
                        <small>it all starts here</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-body">
                                    <?php // var_dump($profile)?>
                                    <form id="profile_form" method="post" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label>Profile Picture</label><br/>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img src="<?php echo url('uploads/profile_pics/' . $profile->profile_pic) ?>" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span>
                                                        <input type="file" name="profile_picture" id="profile_picture">
                                                    </span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input name="designation" id="designation" type="text" class="form-control" value="<?php echo $profile->designation ?>"/>
                                            <span class="help-block"></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" id="address" class="form-control"><?php echo $profile->address ?></textarea>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>City</label>
                                            <input name="city" type="text" id="city" class="form-control" value="<?php echo $profile->city ?>"/>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>State</label>
                                            <input name="state" type="text" id="state" class="form-control" value="<?php echo $profile->state ?>"/>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" type="text" id="country" class="form-control" value="<?php echo $profile->country ?>"/>
                                            <span class="help-block"></span>
                                        </div>

                                        <div class="form-group">
                                            <label>Id Proof</label>
                                            <input type="file" name="proof" id="proof" class="form-control"/>
                                            <span class="help-block"></span>
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
            $('#profile_form').validate({
                rules: {
//                    profile_picture: {
//                        required: true,
//                    },
                    designation: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                    country: {
                        required: true,
                    },
                    proof: {
                        required: true,
                    },
                },
                messages: {
                    designation: {
                        required: "Please choose designation"
                    },
//                    profile_picture: {
//                        required: "Please choose profile picture"
//                    },
                    address: {
                        required: "Please enter address"
                    },
                    city: {
                        required: "Please enter city"
                    },
                    state: {
                        required: "Please enter state"
                    },
                    country: {
                        required: "Please enter country"
                    },
                    proof: {
                        required: "Please choose Id proof"
                    },
                }, submitHandler: function (form) {
                    form.submit();
                },
            });

        </script>
    </body>
</html>