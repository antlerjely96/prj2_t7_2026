<?php $__env->startSection('main_yield'); ?>
    <form method="post" action="<?php echo e(route('products.store')); ?>">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Quantity: <input type="text" name="quantity"><br>
        Category: <select name="category_id">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->id); ?>">
                    <?php echo e($category->name); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select><br>
        <button>Add</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/products/create.blade.php ENDPATH**/ ?>