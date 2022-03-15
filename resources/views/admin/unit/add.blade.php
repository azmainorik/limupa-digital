@extends('admin.master')

@section('title')
@endsection

@section('body')

  
        <!-- Start app top navbar -->

        <!-- Start main left sidebar menu -->
     

        <!-- Start app main Content -->
        

        <div class="card">
                <form  action="{{route('unit.new')}}" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="card-header">
                                        <h4>Add Unit</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Unit Name</label>
                                    <input type="text" name="name" class="form-control" required="">
                                </div>
                                <div class="form-group mb-0">
                                           <label>Unit description</label>
                                            <textarea class="form-control" name="description" required=""></textarea>
                                </div>
                                <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <label for="" class=""><input type="radio" value="1" name="status"> Published</label>
                                            <label for="" class=""><input type="radio" value="0" name="status"> Unpublished</label>
                                        </div>
                                </div>
                            </div>
                            <div class="card-footer text-left">
                                     <button class="btn btn-primary">Submit</button>
                            </div>
                </form>
        </div>
        

        <!-- Start app Footer part -->        
 
@endsection

