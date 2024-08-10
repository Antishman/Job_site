<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->make('partials._hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

<?php if(isset($listings) && count($listings) > 0): ?>

 <?php $__currentLoopData = $listings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $listing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

 <?php $__env->startComponent('components.listing-card', ['listing' => $listing]); ?>
 <?php echo $__env->renderComponent(); ?>
 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php else: ?>
    <p>no listings found</p>
    
<?php endif; ?> 


</div>
<div class="mt-6 p-4">
    <?php echo e($listings->links()); ?>

</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b27406377e25a2e8d90de9fd6315a90)): ?>
<?php $attributes = $__attributesOriginal1b27406377e25a2e8d90de9fd6315a90; ?>
<?php unset($__attributesOriginal1b27406377e25a2e8d90de9fd6315a90); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b27406377e25a2e8d90de9fd6315a90)): ?>
<?php $component = $__componentOriginal1b27406377e25a2e8d90de9fd6315a90; ?>
<?php unset($__componentOriginal1b27406377e25a2e8d90de9fd6315a90); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Jobs_Site\resources\views/listings.blade.php ENDPATH**/ ?>