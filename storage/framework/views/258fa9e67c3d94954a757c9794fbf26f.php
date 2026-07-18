<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List category</title>
</head>
<body>
    <a href="<?php echo e(route('categories.create')); ?>">Add category</a>
    <table border="1px" cellspacing="0" cellpadding="0" width="100%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th></th>
            <th></th>
        </tr>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($category->id); ?></td>
                <td><?php echo e($category->name); ?></td>
                <td>
                    <a href="<?php echo e(route('categories.edit', $category->id)); ?>">Edit</a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('categories.destroy', $category->id)); ?>">
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
<?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/Categories/index.blade.php ENDPATH**/ ?>