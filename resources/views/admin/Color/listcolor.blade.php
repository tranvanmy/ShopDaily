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
                <h3>Color</h3>
              </div>
             
            </div>
            <div class="clearfix"></div>
              <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>STT</th>
                          <th>Tên màu</th>
                          <th>Ngày tạo</th>
                          <th>Ngày cập nhật</th>
                          <th>Trạng thái</th>
                          <td>Hành động</td>
                         </tr>
                    </thead>
                      <tbody>
                      @foreach($data as $value)
                       <tr>
                         <td>{!!$value->id!!}</td>
                         <td>{!!$value->Color_name!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->created_at))!!}</td>
                         <td>{!!date(' d-m-y h:i:s', strtotime($value->updated_at))!!}</td>
                         <td>
                           @if( $value->Status=1)
                          
                           {!!"<button class='label label-success'> Hien thi </button>"!!}
                           @else 
                            {!!"<button class='btn btn-danger'> An</button>"!!}
                           @endif
                         </td>
                        
                         <td>
                            {!!Form::open(array('route'=>array('color-list.destroy',$value->id),'method'=>'DELETE'))!!}
                                <p class=" btn btn btn-success listcolor " style="width: 50px" data-id="{!!$value->id!!}" >Xem</p>
                                <p class=" btn btn btn-primary xoacolor " style="width: 50px" data-id="{!!$value->id!!}">Sửa</p>
                                 <button onclick="return xacnhanxoa('Bạn Có Chắc Muốn Xóa Không')" type="submit"  id="delete" class="btn btn-danger btn-sm" style="width: 50px">Xóa</button>
                            {!!Form::close()!!}
                          </td>
                        </tr>
                       @endforeach()
                      </tbody>
                  </table>
                     <a href="{{ action('ColorController@create') }}" class="btn btn btn-primary">Thêm</a>
                </div>
                
                
        <!-- /page content -->
@endsection
