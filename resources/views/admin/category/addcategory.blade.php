@extends('admin.index')
@section('content')
<div class="page-title">
@if(count($errors)>0)
<ul>
   @foreach($errors->all() as $error )
  <li> {!!$error!!}</li>
  @endforeach
</ul>
@endif
              <div class="title_left">
                <h3>Add Cateory</h3>
              </div>
             </div>
      <div class="clearfix"></div>
{{-- <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button> --}}
    <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{!!route('category-list.store')!!}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tên danh mục <span class="required">*</span>
                        </label>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" class="form-control col-md-7 col-xs-12" name="name">
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
                       <option value="{!!$value['id']!!}" name="catparent" >{!!$value['Cate_name']!!}</option>
                       @endforeach

                      </select>
                      </center>
                      </div>
                       <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Trạng thái <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     {!!Form::checkbox('status', '1', true);!!}
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
       @endsection
    