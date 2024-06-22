<!DOCTYPE html>
<html>

<head>
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
   <link rel="stylesheet" type="text/css" href="<?php echo e(asset('home/css/bootstrap.css')); ?>" />
   <!-- font awesome style -->
   <link href="<?php echo e(asset('home/css/font-awesome.min.css')); ?>" rel="stylesheet" />
   <!-- Custom styles for this template -->
   <link href="<?php echo e(asset('home/css/style.css')); ?>" rel="stylesheet" />
   <!-- responsive style -->
   <link href="<?php echo e(asset('home/css/responsive.css')); ?>" rel="stylesheet" />
</head>

<body>
   <div class="hero_area">
      <!-- header section strats -->
      <?php echo $__env->make('home.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end header section -->
      <!-- slider section -->
      <?php echo $__env->make('home.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end slider section -->
   </div>
   <!-- why section -->
   <?php echo $__env->make('home.why', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end why section -->

   <!-- arrival section -->
   <?php echo $__env->make('home.new_arrival', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end arrival section -->

   <!-- product section -->
   <?php echo $__env->make('home.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end product section -->

   <!-- subscribe section -->
   <?php echo $__env->make('home.subscribe ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end subscribe section -->
   <!-- client section -->
   <?php echo $__env->make('home.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- end client section -->
   <!-- footer start -->
   <?php echo $__env->make('home.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   <!-- footer end -->


   <script>
      document.addEventListener("DOMContentLoaded", function(event) {
         var scrollpos = localStorage.getItem('scrollpos');
         if (scrollpos) window.scrollTo(0, scrollpos);
      });

      window.onbeforeunload = function(e) {
         localStorage.setItem('scrollpos', window.scrollY);
      };
   </script>
   <!-- jQery -->
   <script src="home/js/jquery-3.4.1.min.js"></script>
   <!-- popper js -->
   <script src="home/js/popper.min.js"></script>
   <!-- bootstrap js -->
   <script src="home/js/bootstrap.js"></script>
   <!-- custom js -->
   <script src="home/js/custom.js"></script>
</body>

</html><?php /**PATH C:\GitHub\WebNangCao\Laravel Project\resources\views/home/userpage.blade.php ENDPATH**/ ?>