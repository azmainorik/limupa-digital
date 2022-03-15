@extends('admin.master')

@section('title')
    Edit  Unit
@endsection

@section('body')
    

<div class="card">
                <form  action="{{route('unit.update', ['id' => $unit->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                                <div class="card-header">
                                        <h4>Update Unit</h4>
                                </div>
                                <div class="card-body">                              
                                <div class="form-group">
                                    <label>Unit Name</label>
                                    <input type="text" name="name" value="{{$unit->name}}" class="form-control" required="">
                                </div>
                                <div class="form-group mb-0">
                                    <label>Unit description</label>
                                    <textarea class="form-control" name="description" required="">{{$unit->description}}</textarea>
                                </div>
                                     
                                <div class="form-group">
                                    <label class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <label for="" class=""><input type="radio" {{$unit->status == 1 ? 'checked' : '' }} value="1" name="status"> Published</label>
                                            <label for="" class=""><input type="radio" {{$unit->status == 0 ? 'checked' : '' }} value="0" name="status"> Unpublished</label>
                                        </div>
                                </div>
                                </div>
                                <div class="card-footer text-left">
                                     <button class="btn btn-primary">Update</button>
                                </div>
                </form>
    </div>
@endsection