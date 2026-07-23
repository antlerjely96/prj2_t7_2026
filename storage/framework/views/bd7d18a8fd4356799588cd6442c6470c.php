<?php $__env->startSection('main_yield'); ?>
    <form method="post" action="<?php echo e(route('categories.store')); ?>">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/Categories/create.blade.php ENDPATH**/ ?>