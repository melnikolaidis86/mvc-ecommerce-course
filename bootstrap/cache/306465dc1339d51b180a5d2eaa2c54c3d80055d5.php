<?php $__env->startSection('title','Product Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="category">
        <div class="row expanded">
            <h2>Product Categories</h2>
        </div>

        <?php if($message): ?>
            <p><?php echo e($message); ?></p>
        <?php endif; ?>

        <div class="row expanded">
            <div class="small-12 medium-6 columns">
                <form action="" method="post">
                    <div class="input-group">
                        <input type="text" class="input-group-field" placeholder="Search by name">
                        <div class="input-group-button">
                            <input type="button" class="button" value="Search">
                        </div>
                    </div>
                </form>
            </div>
            <div class="small-12 medium-5 end columns">
                <form action="/admin/product/categories" method="post">
                    <div class="input-group">
                        <input type="text" class="input-group-field" name="name" placeholder="Category Name">
                        <input type="hidden" name="token" value="<?php echo e(\App\Classes\CSRSFToken::_token()); ?>">
                        <div class="input-group-button">
                            <input type="submit" class="button" value="Create">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row expanded">
            <div class="small-12 medium-11">
                <?php if(count($categories)): ?>
                    <table class="hover">
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><?php echo e($category->slug); ?></td>
                                    <td><?php echo e($category->created_at->toFormattedDateString()); ?></td>
                                    <td width="100" class="text-right">
                                        <a href="#"><i class="fa fa-edit"></i></a>
                                        <a href="#"><i class="fa fa-times"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h3>You have not created any category</h3>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>