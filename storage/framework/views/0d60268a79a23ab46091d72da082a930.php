

<?php $__env->startSection('title', 'Editar Empleado ' . $numempleado->id); ?>

<?php $__env->startSection('content'); ?>
    <h1>Editar empleado <?php echo e($numempleado->id); ?></h1>
    <br><br><br>
    <a class="button button1" href="<?php echo e(route('empleado.listado')); ?>">Lista Empleado</a>
    <br>
    <a class="button button1" href="<?php echo e(route('empleado')); ?>">Menu</a>


    <form action="<?php echo e(route('empleado.update', $numempleado)); ?>" method="POST">
        
        <!-- TOKEN -->
        <?php echo csrf_field(); ?>

        <!-- PARA METODO PUT-->
        <?php echo method_field('put'); ?>

        <label>
            Nombre:
            <input type="text" name="name" id="name" value="<?php echo e(old('name', $numempleado->name)); ?>">
        </label>
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <br>
            <small>*<?php echo e($message); ?></small>
        <br>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <br>
        <label>
            Apellido paterno:
            <input type="text" name="app" id="app" value="<?php echo e($numempleado->app); ?>">
        </label>
        <br>
        <label>
            Apellido materno:
            <input type="text" name="apm" id="apm" value="<?php echo e($numempleado->apm); ?>">
        </label>
        <br>
        <label>
            Correo:
            <input type="text" name="email" id="email" value="<?php echo e($numempleado->email); ?>">
        </label>
        <br>
        <label>
            Puesto:
            <select name="puesto" id="puesto">
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item->id == $puesto->id): ?>
                        <option value="<?php echo e($item->id); ?>" selected><?php echo e($item->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </label>
        <br>
        <label>
            Compañia:
            <select name="company" id="company">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($items->id == $companie->id): ?>
                        <option value="<?php echo e($items->id); ?>" selected><?php echo e($items->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($items->id); ?>"><?php echo e($items->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        </label>
        <br>
        <label>
            Estatus:
            <select name="status" id="status">
                    <?php if($numempleado->status == 1): ?>
                        <option value="1" selected>ACTIVO</option>
                        <option value="0">DESACTIVADO (ELIMINADO)</option>
                    <?php else: ?>
                        <option value="1">ACTIVO</option>
                        <option value="0" selected>DESACTIVADO (ELIMINADO)</option>
                    <?php endif; ?>
        </select>
        </label>

        <BR>
        <button type="submit">Guardar</button>

    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/edit.blade.php ENDPATH**/ ?>