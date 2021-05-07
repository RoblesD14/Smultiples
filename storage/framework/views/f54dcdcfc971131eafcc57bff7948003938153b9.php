<?php $__env->startSection('template_title'); ?>
    Cliente
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Cliente')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Crear Nuevo')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>#</th>
                                        
										<th>Nombre</th>
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Ciudad</th>
										<th>Direccion</th>
										<th>Celular</th>
                                        <th>Acciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($cliente->Nombre); ?></td>
											<td><?php echo e($cliente->ApellidoPaterno); ?></td>
											<td><?php echo e($cliente->ApellidoMaterno); ?></td>
											<td><?php echo e($cliente->Ciudad); ?></td>
											<td><?php echo e($cliente->Direccion); ?></td>
											<td><?php echo e($cliente->Celular); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('clientes.destroy',$cliente->id)); ?>" method="POST">

                                                    <a class="btn btn-sm btn-primary" href="<?php echo e(route('clientes.edit',$cliente->id)); ?>"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $clientes->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\app4\resources\views/cliente/index.blade.php ENDPATH**/ ?>