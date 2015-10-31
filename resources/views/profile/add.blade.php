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
                                    <form method="post">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <label>Profile Picture</label><br/>
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img data-src="holder.js/100%x100%" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Designation</label>
                                            <input name="designation" type="text" class="form-control"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <textarea name="address" class="form-control"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>City</label>
                                            <input name="city" type="text" class="form-control"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>State</label>
                                            <input name="state" type="text" class="form-control"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input name="country" type="text" class="form-control"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Id Proof</label>
                                            <input type="file" class="form-control"/>
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
    </body>
</html>
