<h1> <?php echo e($modo); ?> Empleado </h1>

<?php if(count($errors)>0): ?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="form-group">
<label for="Nombre"> Nombre </label>
<input class="form-control" type="text" name="Nombre" 
value="<?php echo e(isset($empleado->Nombre)?$empleado->Nombre :old('Nombre')); ?>" id="Nombre">
</div>

<div class="form-group">
<label for="ApellidoPaterno"> Apellido Paterno </label>
<input class="form-control" type="text" name="ApellidoPaterno" 
value="<?php echo e(isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno :old('ApellidoPaterno')); ?>" id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno"> Apellido Materno </label>
<input class="form-control" type="text" name="ApellidoMaterno" 
value="<?php echo e(isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno :old('ApellidoMaterno')); ?>" id="ApellidoMaterno">
</div>

<div class="form-group">
<label for="Correo"> Correo </label>
<input class="form-control" type="text" name="Correo" 
value="<?php echo e(isset($empleado->Correo)?$empleado->Correo :old('Correo')); ?>" id="Correo">
</div>

<div class="form-group">
<?php if(isset($empleado->Foto)): ?>
<img class="img-thumbnail img-fluid" src="<?php echo e(asset('storage').'/'.$empleado->Foto); ?>" width="100" alt="">
<?php endif; ?>
<input type="file" name="Foto" id="Foto">
</div>

<input class="btn btn-success" type="submit" value="<?php echo e($modo); ?>">

<a class="btn btn-primary" href="<?php echo e(url('empleado/')); ?>">
Regresar
</a><?php /**PATH C:\xampp\htdocs\app4\resources\views/empleado/form.blade.php ENDPATH**/ ?>