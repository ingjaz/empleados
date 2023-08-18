

<?php $__env->startSection('title', 'Ver lista Empleado'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Bienvenido a la lista de empleados</h1>

    <a class="button button1" href="<?php echo e(route('empleado.create')); ?>">Nuevo Empleado</a>
    <br>
    <a class="button button1" href="<?php echo e(route('empleado')); ?>">Menu</a>

    <table>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido paterno</th>
            <th>Apellido materno</th>
            <th>Correo</th>
            <th>Puesto</th>
            <th>Fecha de ingreso</th>
            <th>Compania</th>
            <th>Acciones</th>
        </tr>

        <?php $__currentLoopData = $empleados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <th><?php echo e($item->id); ?></th>
                <th><?php echo e($item->name); ?></th>
                <th><?php echo e($item->app); ?></th>
                <th><?php echo e($item->apm); ?></th>
                <th><?php echo e($item->email); ?></th>
                <th><?php echo e($item->idpuesto); ?></th>
                <th><?php echo e($item->created_at); ?></th>.
                <th><?php echo e($item->idcompania); ?></th>
                <th>
                    <a class="button button1" href="<?php echo e(route('empleado.detalle', $item->id)); ?>">Detalle</a>
                </th>
            </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
            
        
    </table>

    <?php echo e($empleados->links()); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/showList.blade.php ENDPATH**/ ?>