<?php $__env->startSection('content'); ?>
 <script type="text/javascript">
        function xacnhanxoa(msg) {
            if (window.confirm(msg)) {
                return true;
            }
            return false;
        }
    </script>
            <div class="page-title">
              <div class="title_left">
                <h3>Category</h3>
              </div>
             
            </div>
            <div class="clearfix"></div>
              <div class="col-6">
              </div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên danh mục</th>
                          <th>Loại danh mục cha</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                          <th>Trạng thái</th>
                          <td>Hành động</td>

                         </tr>
                    </thead>
                      <tbody>
                      <?php $stt = 0 ?>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php $stt = $stt+1 ?>
                       <tr>
                         <td><?php echo $stt; ?></td>
                         <td>
                           <?php echo $value->Cate_name; ?>

                         </td>

                         <td>
                            <?php if($value->Parent_id==0): ?>
                             <?php echo $value->Cate_name; ?>

                            <?php else: ?>
                            <?php
                               $parent= DB::table('categories')->where('id',$value['Parent_id'])->first();
                               echo $parent->Cate_name;
                             ?>
                            <?php endif; ?>
                         </td>
                         <td><?php echo date(' d-m-y h:i:s', strtotime($value->created_at)); ?></td>
                         <td><?php echo date(' d-m-y h:i:s', strtotime($value->updated_at)); ?></td>
                         <td>
                           <?php if( $value->status=1): ?>
                          
                           <?php echo "<button class='label label-success'> Hien thi </button>"; ?>

                           <?php else: ?> 
                            <?php echo "<button class='btn btn-danger'> An</button>"; ?>

                           <?php endif; ?>
                         </td>
                        
                        <td>
                          <?php echo Form::open(array('route'=>array('category-list.destroy',$value->id,),'method'=>'DELETE','id'=>"delete")); ?>

                            <p class=" btn btn btn-success list " style="width: 50px" data-id="<?php echo $value->id; ?>" >Xem</p>
                          <p class=" btn btn btn-primary xoa " style="width: 50px" data-id="<?php echo $value->id; ?>">Sửa</p>
                          <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm" style="width: 50px">Xóa</button>
                      <?php echo Form::close(); ?>

                    </td>
                </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                  </table>
                     <a href="<?php echo e(action('CategoryController@create')); ?>" class="btn btn btn-primary">Thêm</a>
                </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>