@extends('layouts.admin')
@section('add-work')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="col-sm-9">
                <strong>Work's Information</strong>
            </div>

              <div class="col-sm-3">
                <a href="{{url('admin/all-work')}}" class="add-btn btn btn-default pull-right btn-md"> <i class="fa fa-plus-square"></i> Back To List</a>
              </div>

            <div class="clearfix"></div>
          </div>

          <div class="panel-body">
            @if(Session::has('success'))
            <div class="alert alert-success">
            <strong>Success!</strong> Works Insert Successful.
            </div>
            @endif

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{url('/admin/work-insert')}}">
							@csrf
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">Category<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <select name="category" class="form-control">
                  <option value="">Select Works Category</option>
                  @foreach($allworkcategory as $data)
                            <option value="{{$data->category_id}}">{{$data->category_name}}</option>
                  @endforeach


                  </select>
                </div>
              </div>
              <div class="form-group {{ $errors->has('about') ? 'has-error' : '' }}">
                <label for="inputEmail3" class="col-sm-3 control-label">About<span class="req_span">*</span></label>
                <div class="col-sm-8">
                  <input type="text" name="about" class="form-control" id="inputEmail3" placeholder="" value="{{old('about')}}">
                  <span class="text-danger">{{ $errors->first('about') }}</span>
                </div>
              </div>

              <div class="form-group">
                <label for="" class="col-sm-3 control-label">Photo (600*400)</label>
                <div class="col-sm-8">
                    <input type="file" name="pic" class="" id="" placeholder="">
                    <span class="text-danger"></span>
                </div>
              </div>
              <div class="form-group">

                <div class="col-sm-3">
                    <input type="submit" class="btn btn-default" name="send" value="Upload">
                </div>

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
