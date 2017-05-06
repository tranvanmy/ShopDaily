  <div class="page-title">
            </div>
            <div class="clearfix"></div>
            </div>
             <table class="table table-striped table-bordered detail-view">
                  <tbody>
                      @foreach($data as $value)
                      <div>
                         <tr>
                           <th>Tên màu sắc</th>
                           <td>{!!$value->Color_name!!}</td>
                         </tr>
                         <tr>
                           <th>Ngày tạo</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         </tr>
                         <tr>
                           <th>Ngày cập nhật</th>
                           <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         </tr>
                         <tr>
                         <th>Trạng thái</th>
                         <td>
                         @if($value->Status==1)
                          {!!"<button class='label label-success'> Hiển thị  </button>"!!}
                         @else
                          {!!"<button class='btn btn-danger'> Ẩn</button>"!!}
                         @endif
                         </td>
                      </tr>
                           
                       </div>
                      @endforeach
                    </tbody>
                </table>
            </div>
             