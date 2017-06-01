<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TV Store</title>
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/shop-homepage.css" rel="stylesheet">
</head>
 
<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <!-- <li>
                        <a href="#">Login</a>
                    </li> -->
                    <!--<li>
                        <a href="#">Contact</a>
                    </li>-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">TV Store</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Sepatu</a>
                    <a href="#" class="list-group-item">Aksesoris</a>
                    <a href="#" class="list-group-item">Lain lain</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url()?>gambar/Nike-Free-RN-Flyknit-Wolf-Grey-Front-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url()?>gambar/Nike-Free-RN-Flyknit-Wolf-Grey-Front-1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url()?>gambar/Nike-Free-RN-Flyknit-Wolf-Grey-Front-1.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-12">
                <!-- <div class="row">
                    <?php echo form_open('',['class' => 'navbar-form navbar-right','role'=>'search']); ?>
                    <div class="form-group">
                        <?php echo form_input(['name'=>'query','class' => 'form-control','placeholder'=>'Search']); ?>
                    </div>
                    <?php echo form_submit(['value'=>'Search','class' => 'btn btn-primary']); ?>
                    <?php echo form_close(); ?>
                    <?php echo form_error('query','<div class="text-danger">','</div>'); ?>
                </div> -->

                <div class="row">
                    <a href="#">
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url().$sepatu['image'] ?>" alt="">
                            <div class="caption">
                                <h4><?php echo $sepatu['nama_barang'] ?></h4>
                                <h5>Harga : Rp <?php echo $sepatu['harga'] ?></h5>
                                <h5>Size : <?php echo $sepatu['keterangan'] ?></h5>
                            </div>
                        </div>
                    </div>
                    </a>
                    
                </div>
                <a href="<?php echo base_url().'crud/viewformpemesanan/'.$sepatu['id'] ?>"><button>Pesan</button></a>


            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Anang 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>

</body>

</html>