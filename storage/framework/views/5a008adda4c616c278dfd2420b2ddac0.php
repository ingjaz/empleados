

<?php $__env->startSection('title', 'Ver Empleado ' . $numempleado); ?>

<?php $__env->startSection('content'); ?>
    <h1>Vista de empleado <?php echo e($numempleado); ?></h1>
    <br><br><br>
    <a class="button button1" href="<?php echo e(route('empleado.listado')); ?>">Lista Empleado</a>
    <br>
    <a class="button button1" href="<?php echo e(route('empleado')); ?>">Menu</a>

    <table>

        <tr>
            <th>Id</th>
            <th><?php echo e($empleados->id); ?></th>
        </tr>
        <tr>
            <th>Nombre</th>
            <th><?php echo e($empleados->name); ?></th>
        </tr>
        <tr>
            <th>Apellido paterno</th>
            <th><?php echo e($empleados->app); ?></th>
        </tr>
        <tr>
            <th>Apellido materno</th>
            <th><?php echo e($empleados->apm); ?></th>
        </tr>
        <tr>
            <th>Correo</th>
            <th><?php echo e($empleados->email); ?></th>
        </tr>
        <tr>
            <th>Puesto</th>
            <th><?php echo e($puesto->name); ?></th>
        </tr>
        <tr>
            <th>Fecha de ingreso</th>
            <th><?php echo e($empleados->created_at); ?></th>
        </tr>
        <tr>
            <th>Compania</th>
            <th><?php echo e($companie->name); ?></th>
        </tr>
        <tr>
            <th>Estatus</th>
            <?php if($empleados->status == 1): ?>
                <th>ACTIVO</th>
            <?php else: ?>
                <th>DESACTIVADO</th>
            <?php endif; ?>
        </tr>
        <tr>
            <th>Acciones</th>
            <th>
                <a class="button button3" href="<?php echo e(route('empleado.edit', $empleados->id)); ?>">Modificar</a>
                <!-- <a class="button button2" href="<?php echo e(route('empleado.delete', $empleados->id)); ?>">Eliminar</a> -->
            </th>
        </tr>

        
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/show.blade.php ENDPATH**/ ?>