<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ignito OpenHouse | Dashboard</title>

        @include ('layout.header')

        <style>
            body
            {
                background-image: url(<?php echo url('assets/img/background.png') ?>)
            }
        </style>
    </head>
    <body class="skin-blue">

        <div class="container text-center" style="margin-top: 20px">
            <h1><strong>Ignito</strong>OpenHouse</h1>
            <div class="row">
                <form action="<?php echo url('/search') ?>">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search for home" value="<?php echo $keyword ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </form>
            </div>

            <div class="row">
                <?php foreach ($properties as $property) { ?>
                    <div class="col-md-3">
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title"><?php echo $property->name?></h4>
                            </div>
                            <div class="box-body">
                                <img style="height: 200px" class="img-responsive" src="<?php echo url('uploads/properties/' . $property->home_exterior_pic) ?>"/>
                            </div>
                            <div class="box-footer">
                                <a class="btn btn-default" href="<?php echo url('auth/login')?>">Login to Bid</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>



        @include ('layout.jsfooter')
    </body>
</html>
