<?php $__env->startSection('content'); ?>
<div class="page-title">
<?php if(count($errors)>0): ?>
<ul>
   <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    
  <li> <?php echo $error; ?></li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>
              <div class="title_left">
                <h3>Add Cateory</h3>
              </div>
             </div>
      <div class="clearfix"></div>
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="<?php echo route('category-list.store'); ?>">
                     <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên danh mục <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="name">
                          <?php echo $errors->first('name'); ?>

                        </div>
                      </div>

                      <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Danh mục cha<span class="required">*</span>
                        </label>
                      <center>
                        <select class="form-control col-md-6 col-sm-6 col-xs-12" id="locID" style="width:500px;margin-left: 10px;" name="catparent">
                       <option value="0">Please Select</option>
                       <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value="<?php echo $value['id']; ?>" name="catparent" ><?php echo $value['Cate_name']; ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      </select>
                      </center>
                      </div>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     <?php echo Form::checkbox('status', '1', true);; ?>

                     </div>
                      
                    <div class="form-group">
                          <button type="submit" class="btn btn-success" style="margin-top: 25px;
    margin-right: 500px;">Submit</button>
                          
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
       <?php $__env->stopSection(); ?>
    
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>