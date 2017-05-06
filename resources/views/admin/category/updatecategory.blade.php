  <div class="title_left">
                <h3>Update Cateory:{{ $data['Cate_name']}}</h3>
              </div>            
     </div>
      <div class="clearfix"></div>
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
              <div class="clearfix"></div>
              <div class="x_content">
                    <br />
                    {!!Form::open(array('route'=>array('category-list.destroy',$data['id']),'class'=>'form-horizontal form-label-left','method'=>'PUT'))!!}
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên danh mục <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="name" value="{{ $data['Cate_name']}}">
                          {!!$errors->first('name')!!}
                        </div>
                      </div>

                      <div class="form-group">
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Danh mục cha<span class="required">*</span>
                        </label>
                      <center>
                        <select class="form-control col-md-6 col-sm-6 col-xs-12" id="locID" style="width:500px;margin-left: 10px;" name="catparent">
                       <option value="0">Please Select</option>
                       @foreach($parent as $value)
                       <option value="{!!$value['id']!!}" name="catparent"   {{ ($data['Parent_id']==$value['id']) ? 'selected' : '' }} >{!!$value['Cate_name']!!}
                          
                       </option>
                       @endforeach

                      </select>
                      </center>
                      </div>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="checkbox" name="status" value='1' id="" {{ ($data['status']== 1) ? 'checked' : '' }}>
                        </div>
                      
                    <div class="form-group">
                          <button type="submit" class="btn btn-success" style="margin-top: 25px;
    margin-right: 500px;">Update</button>
                          
                      </div>

                    {!!Form::close()!!}
                  </div>
                </div>
              </div>
            </div>
            