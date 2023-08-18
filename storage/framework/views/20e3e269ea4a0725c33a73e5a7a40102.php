

<?php $__env->startSection('title', 'Crear Empleado'); ?>

<?php $__env->startSection('content'); ?>
<h1>Bienvenido a la creacion de empleados</h1>
    <a class="button button1" href="<?php echo e(route('empleado.listado')); ?>">Lista Empleado</a>
    <br>
    <a class="button button1" href="<?php echo e(route('empleado')); ?>">Menu</a>

    <br><br><br><br>


    <form action="<?php echo e(route('empleado.store')); ?>" method="POST">
        
        <?php echo csrf_field(); ?>

        <label>
            Nombre:
            <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>">
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
            <input type="text" name="app" id="app" value="<?php echo e(old('app')); ?>">
        </label>
        <?php $__errorArgs = ['app'];
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
            Apellido materno:
            <input type="text" name="apm" id="apm" value="<?php echo e(old('apm')); ?>">
        </label>
        <?php $__errorArgs = ['apm'];
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
            Correo:
            <input type="text" name="email" id="email" value="<?php echo e(old('email')); ?>">
        </label>
        <?php $__errorArgs = ['email'];
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
            Puesto:
            <select name="puesto" id="puesto">
                <?php $__currentLoopData = $puestos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </label>
        <?php $__errorArgs = ['puesto'];
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
            Compañia:
            <select name="company" id="company">
                <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($items->id); ?>"><?php echo e($items->name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </label>
        <?php $__errorArgs = ['company'];
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
            

        <BR>
        <button type="submit">Enviar formulario</button>

    </form>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\empleados\resources\views/empleado/create.blade.php ENDPATH**/ ?>