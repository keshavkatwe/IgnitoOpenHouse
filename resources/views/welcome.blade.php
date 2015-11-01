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
        <div class="text-right" style="padding: 10px">
            <a class="btn btn-default" href="<?php echo url('auth/register')?>">Register</a>
            <a class="btn btn-default" href="<?php echo url('auth/login')?>">Login</a>
        </div>
        <div class="container text-center" style="margin-top: 100px">
            <h1><strong>Ignito</strong>OpenHouse</h1>
            <br/>
            <br/>
            <br/>
            <div class="row">
                <form action="<?php echo url('/search')?>">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="keyword" class="form-control" placeholder="Search for home">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Search</button>
                                </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </form>
            </div>

            <h3 style="color: white">Buy/Rent/Sell! Bid it Get it</h3>

        </div>



        @include ('layout.jsfooter')
    </body>
</html>
