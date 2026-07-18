<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit a category</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('categories.update', $category->id)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        Name: <input type="text" name="name" value="<?php echo e($category->name); ?>"><br>
        <button>Edit</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/Categories/edit.blade.php ENDPATH**/ ?>