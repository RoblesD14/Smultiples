<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            <?php echo e(Form::label('Nombre')); ?>

            <?php echo e(Form::text('Nombre', $cliente->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre'])); ?>

            <?php echo $errors->first('Nombre', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Apellido Paterno')); ?>

            <?php echo e(Form::text('ApellidoPaterno', $cliente->ApellidoPaterno, ['class' => 'form-control' . ($errors->has('ApellidoPaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido paterno'])); ?>

            <?php echo $errors->first('ApellidoPaterno', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Apellido Materno')); ?>

            <?php echo e(Form::text('ApellidoMaterno', $cliente->ApellidoMaterno, ['class' => 'form-control' . ($errors->has('ApellidoMaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido materno'])); ?>

            <?php echo $errors->first('ApellidoMaterno', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Ciudad')); ?>

            <?php echo e(Form::text('Ciudad', $cliente->Ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad'])); ?>

            <?php echo $errors->first('Ciudad', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Direccion')); ?>

            <?php echo e(Form::text('Direccion', $cliente->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion'])); ?>

            <?php echo $errors->first('Direccion', '<div class="invalid-feedback">:message</p>'); ?>

        </div>
        <div class="form-group">
            <?php echo e(Form::label('Celular')); ?>

            <?php echo e(Form::text('Celular', $cliente->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular'])); ?>

            <?php echo $errors->first('Celular', '<div class="invalid-feedback">:message</p>'); ?>

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success mr-3">Enviar</button>
        <a class="btn btn-primary" href="<?php echo e(url('empleado/')); ?>">Regresar</a>
    </div>

</div><?php /**PATH C:\laragon\www\app4\resources\views/cliente/form.blade.php ENDPATH**/ ?>