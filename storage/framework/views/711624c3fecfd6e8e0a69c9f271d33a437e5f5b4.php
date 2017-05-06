  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div>
                         <tr>
                           <th>Tên màu sắc</th>
                           <td><?php echo $value->Color_name; ?></td>
                         </tr>
                         <tr>
                           <th>Ngày tạo</th>
                           <td><?php echo date(' d-m-y h:i:s', strtotime($value->created_at)); ?></td>
                         </tr>
                         <tr>
                           <th>Ngày cập nhật</th>
                           <td><?php echo date(' d-m-y h:i:s', strtotime($value->updated_at)); ?></td>
                         </tr>
                         <tr>
                         <th>Trạng thái</th>
                         <td>
                         <?php if($value->Status==1): ?>
                          <?php echo "<button class='label label-success'> Hiển thị  </button>"; ?>

                         <?php else: ?>
                          <?php echo "<button class='btn btn-danger'> Ẩn</button>"; ?>

                         <?php endif; ?>
                         </td>
                      </tr>
                           
                       </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
             