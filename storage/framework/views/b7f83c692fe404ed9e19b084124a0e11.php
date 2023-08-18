

<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a empleados</h1>
    <!--empleado.listado  -->
    <a class="button button1" href="<?php echo e(route('empleado.create')); ?>">Nuevo Empleado</a>
    <br>
    <a class="button button1" href="<?php echo e(route('empleado.listado')); ?>">Lista Empleado</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/index.blade.php ENDPATH**/ ?>