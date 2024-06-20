<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .title_deg {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
        }

        .table_deg {
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        .th_deg {
            background-color: skyblue;
        }

        .img_size{
            width: 172px;
            height: 216px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                <h1 class="title_deg">All Orders</h1>

                <table class="table_deg">
                    <tr class="th_deg">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment status</th>
                        <th>Delivery status</th>
                        <th>Image</th>
                    </tr>

                    <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($order->name); ?></td>
                        <td><?php echo e($order->email); ?></td>
                        <td><?php echo e($order->address); ?></td>
                        <td><?php echo e($order->phone); ?></td>
                        <td><?php echo e($order->product_title); ?></td>
                        <td><?php echo e($order->quantity); ?></td>
                        <td><?php echo e($order->price); ?></td>
                        <td><?php echo e($order->payment_status); ?></td>
                        <td><?php echo e($order->delivery_status); ?></td>
                        <td>
                            <img class="img_size" src="/product/<?php echo e($order->image); ?>">
                        </td>
                    </tr>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- End custom js for this page -->
</body>

</html><?php /**PATH C:\GitHub\WebNangCao\Laravel Project\resources\views/admin/order.blade.php ENDPATH**/ ?>