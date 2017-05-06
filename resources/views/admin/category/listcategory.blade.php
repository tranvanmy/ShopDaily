@extends('admin.index')
@section('content')
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
                      @foreach($data as $value)
                      <?php $stt = $stt+1 ?>
                       <tr>
                         <td>{!!$stt!!}</td>
                         <td>
                           {!!$value->Cate_name!!}
                         </td>

                         <td>
                            @if($value->Parent_id==0)
                             {!!$value->Cate_name!!}
                            @else
                            <?php
                               $parent= DB::table('categories')->where('id',$value['Parent_id'])->first();
                               echo $parent->Cate_name;
                             ?>
                            @endif
                         </td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         <td>
                           @if( $value->status=1)
                           {!! "<span class='label label-success'>Success</span>" !!}
                           @else 
                            {!!"<span class='label label-danger'>Danger</span>"!!}
                           @endif
                         </td>
                        
                        <td>
                          {!!Form::open(array('route'=>array('category-list.destroy',$value->id,),'method'=>'DELETE','id'=>"delete"))!!}
                          <button class=" btn btn btn-success list" data-id="{!!$value->id!!}" > <i class="fa fa-list" aria-hidden="true"></i> View</button>
                          <button class=" btn btn btn-primary xoa " data-id="{!!$value->id!!}"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</button>
                          <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa</button>
                      {!!Form::close()!!}
                    </td>
                </tr>
                       @endforeach()
                      </tbody>
                  </table>
                     <a href="{{ action('CategoryController@create') }}" class="btn btn btn-primary">Thêm</a>
                </div>
@endsection
