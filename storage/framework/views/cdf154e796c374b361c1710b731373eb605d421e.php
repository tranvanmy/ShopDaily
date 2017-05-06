  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div>
                         <tr>
                           <th>Tên danh mục</th>
                           <th><?php echo $value->Cate_name; ?></th>
                         </tr>
                         <tr>
                           <th>Tên danh mục cha</th>
                           <th>
                             <?php if($value->Parent_id==0): ?>
                              <?php echo $value->Cate_name; ?>

                             <?php else: ?>
                              <?php
                               $parent= DB::table('categories')->where('id',$value['Parent_id'])->first();
                               echo $parent->Cate_name;
                              ?>
                              <?php endif; ?>
                           </th>
                          
                         </tr>
                          <tr>
                           <th>Ngày tạo</th>
                           <th><?php echo date(' d-m-y h:i:s', strtotime($value->created_at)); ?></th>
                         </tr>
                         <tr>
                           <th>Ngày cập nhật</th>
                           <th><?php echo date(' d-m-y h:i:s', strtotime($value->updated_at)); ?></th>
                         </tr>
                         <tr>
                         <th>Trạng thái</th>
                         <th>
                         <?php if($value->status==1): ?>
                          <?php echo "<button class='label label-success'> Hiển thị  </button>"; ?>

                         <?php else: ?>
                          <?php echo "<button class='btn btn-danger'> Ẩn</button>"; ?>

                         <?php endif; ?>
                         </th>
                      </tr>
                           
                       </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
             