<?php if(count($errors)>0): ?>
<ul>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
  <li> <?php echo $error; ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
<div class="title_left">
                <h3>Update Color:<?php echo e($data['Color_name']); ?></h3>
</div>
 <div class="clearfix"></div>
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
              <div class="clearfix"></div>
              <div class="x_content">
                    <br />
                    <?php echo Form::open(array('route'=>array('color-list.destroy',$data['id']),'class'=>'form-horizontal form-label-left','method'=>'PUT')); ?>

                     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên màu sắc <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="color" value="<?php echo e($data['Color_name']); ?>">
                          <?php echo $errors->first('color'); ?>

                        </div>
                      </div>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="checkbox" name="status" value='1' id="" <?php echo e(($data['Status']== 1) ? 'checked' : ''); ?>>
                     </div>
                      
                    <div class="form-group">
                          <button type="submit" class="btn btn-success" style="margin-top: 25px;
    margin-right: 500px;">Update</button>
                          
                      </div>

                    <?php echo Form::close(); ?>

                  </div>
                </div>
              </div>
            </div>
            