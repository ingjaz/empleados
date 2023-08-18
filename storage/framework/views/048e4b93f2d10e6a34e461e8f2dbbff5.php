

<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la pagina principal</h1>
    <a class="button button1" href="<?php echo e(route('empleado')); ?>">Menu</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/home.blade.php ENDPATH**/ ?>