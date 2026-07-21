<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo e(route('products.create')); ?>">Add a product</a>
    <table border="1px" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Category</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($product->id); ?>

                </td>
                <td>
                    <?php echo e($product->name); ?>

                </td>
                <td>
                    <?php echo e($product->price); ?>

                </td>
                <td>
                    <?php echo e($product->quantity); ?>

                </td>
                <td>
                    <?php echo e($product->category->name); ?>

                </td>
                <td>
                    <a href="<?php echo e(route('products.edit', $product->id)); ?>">Edit</a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('products.destroy', $product->id)); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/products/index.blade.php ENDPATH**/ ?>