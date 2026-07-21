<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit a product</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('products.update', $product->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        Name: <input type="text" name="name" value="<?php echo e($product->name); ?>"><br>
        Price: <input type="text" name="price" value="<?php echo e($product->price); ?>"><br>
        Quantity: <input type="text" name="quantity" value="<?php echo e($product->quantity); ?>"><br>
        Category: <select name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>"
                    <?php if($product->category_id == $category->id): ?>
                        <?php echo e('selected'); ?>

                    <?php endif; ?>
                >
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <button>Edit</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/products/edit.blade.php ENDPATH**/ ?>