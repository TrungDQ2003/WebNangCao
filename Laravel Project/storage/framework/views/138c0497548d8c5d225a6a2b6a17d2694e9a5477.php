<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header section -->



        <div class="col-sm-6 col-md-4 col-lg-4" style="margin:auto; width: 50%; padding: 30px">

            <div class="img-box" style="padding: 20px">
                <img src="product/<?php echo e($product->image); ?>" alt="">
            </div>
            <div class="detail-box">
                <h5>
                    <?php echo e($product->title); ?>

                </h5>

                <?php if($product->discount_price!=null): ?>

                <h6 style="color: red;">
                    Discount price
                    <br>
                    $<?php echo e($product->discount_price); ?>

                </h6>

                <h6 style="text-decoration: linethrough; color:blue">
                    Price
                    <br>
                    $<?php echo e($product->price); ?>

                </h6>

                <?php else: ?>

                <h6 style="color: blue;">
                    Price
                    <br>
                    $<?php echo e($product->price); ?>

                </h6>

                <?php endif; ?>

                <h6>Product Category : <?php echo e($product->category); ?></h6>
                <h6>Product Details : <?php echo e($product->description); ?></h6>
                <h6>Available Quantity : <?php echo e($product->quantity); ?></h6>

                <a href="" class="btn btn-primary">Add to Cart</a>

            </div>
        </div>
    </div>

    <!-- footer start -->
    <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>
    <!-- jQery -->
    <script src="home/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="home/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="home/js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="home/js/custom.js"></script>
</body>

</html><?php /**PATH C:\GitHub\WebNangCao\Laravel Project\resources\views/home/product_details.blade.php ENDPATH**/ ?>