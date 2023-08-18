

<?php $__env->startSection('title', 'Eliminar Empleado ' . $numempleado); ?>

<?php $__env->startSection('content'); ?>
    <!--<h1>Elimina empleado <?php //echo $numempleado ?></h1> -->
    <h1>Elimina empleado <?php echo e($numempleado); ?></h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/delete.blade.php ENDPATH**/ ?>