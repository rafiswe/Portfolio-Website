@extends('layouts.admin')
@section('add-about')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Update About's Information</strong>
            </div>

              <div class="col-sm-3">
                <a href="{{url('admin/all-about')}}" class="add-btn btn btn-default pull-right btn-md"> <i class="fa fa-plus-square"></i> About List</a>
              </div>

            <div class="clearfix"></div>
          </div>

          <div class="panel-body">
            @if(Session::has('success'))
            <div class="alert alert-success">
            <strong>Success!</strong> About Insert Successful.
            </div>
            @endif

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/about-insert')}}">
							@csrf
              <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="inputEmail3" class="col-sm-3 control-label">Title<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="title" class="form-control" id="inputEmail3" placeholder="" value="{{old('name')}}">
                  <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
              </div>
              <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                <label for="inputEmail3" class="col-sm-3 control-label">Details<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="details" class="form-control" id="inputEmail3" placeholder="" value="{{old('email')}}">
                  <span class="text-danger">{{ $errors->first('details') }}</span>
                </div>
              </div>
               <div class="form-group {{ $errors->has('subtitle') ? 'has-error' : '' }}">
                <label for="inputEmail3" class="col-sm-3 control-label">Sub_Title<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="subtitle" class="form-control" id="inputEmail3" placeholder="" value="{{old('phone')}}">
                  <span class="text-danger">{{ $errors->first('subtitle') }}</span>
                </div>
              </div>

              <div class="form-group {{ $errors->has('subdetails') ? 'has-error' : '' }}">
               <label for="inputEmail3" class="col-sm-3 control-label">Sub_Details<span class="req_span">*</span></label>
               <div class="col-sm-8">
                 <input type="text" name="subdetails" class="form-control" id="inputEmail3" placeholder="" value="{{old('phone')}}">
                 <span class="text-danger">{{ $errors->first('subdetails') }}</span>
               </div>
             </div>

              <!-- <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Username<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="username" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Password<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="password" name="pass" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Re-Password<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control" id="inputEmail3" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">User-Role</label>
                <div class="col-sm-5">
                  <select name="role" class="form-control">
                  <option value="">Select User Role</option>

                  <option value=""></option>

                  </select>
                </div>
              </div> -->
              <!-- <div class="form-group">
                <label for="" class="col-sm-3 control-label">Photo</label>
                <div class="col-sm-8">
                    <input type="file" name="pic" class="" id="" placeholder="">
                    <span class="text-danger"></span>
                </div>
              </div> -->
              <div class="form-group">

                <div class="col-sm-3">
                    <input type="submit" class="btn btn-default" name="send" value="Submit">
                </div>
                <!-- <div class="col-sm-3">
                  <a href="{{url('admin/all-user')}}" class="add-btn btn btn-default pull-right btn-md"> <i class="fa fa-plus-square"></i> User List</a>
                </div> -->
              </div>

            </form>
          </div>
          <div class="panel-footer">
            .
          </div>
        </div>
    </div>
</div>
@endsection
