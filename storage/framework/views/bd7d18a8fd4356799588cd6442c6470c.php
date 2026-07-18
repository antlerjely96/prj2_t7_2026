<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add a category</title>
</head>
<body>
    <form method="post" action="<?php echo e(route('categories.store')); ?>">
        <?php echo csrf_field(); ?>
        Name: <input type="text" name="name"><br>
        <button>Add</button>
    </form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\prj2_t7_2026\resources\views/Categories/create.blade.php ENDPATH**/ ?>