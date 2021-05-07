<?php $__env->startSection('template_title'); ?>
    <?php echo e($cliente->name ?? 'Show Cliente'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Cliente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="<?php echo e(route('clientes.index')); ?>"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            <?php echo e($cliente->Nombre); ?>

                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            <?php echo e($cliente->ApellidoPaterno); ?>

                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            <?php echo e($cliente->ApellidoMaterno); ?>

                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            <?php echo e($cliente->Ciudad); ?>

                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            <?php echo e($cliente->Direccion); ?>

                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            <?php echo e($cliente->Celular); ?>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app4\resources\views/cliente/show.blade.php ENDPATH**/ ?>