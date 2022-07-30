@extends('layouts.admin')

@section('content')
<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard Office Address -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="add-product-box">
                                        <div class="add-product-header">
                                            <h2>Map Settings</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-gs-bginfoup')}}" method="POST">
                                        @include('includes.form-success')      
                                          {{csrf_field()}}
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="title">Latitude *</label>
                                            <div class="col-sm-6">
                                              <input name="bg_title" id="title" class="form-control" placeholder="Enter Your Input" required="" type="text" value="{{$data->bg_title}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Longitude *</label>
                                            <div class="col-sm-6">
                                              <input name="bg_link" id="phone" class="form-control" placeholder="Enter Your Input" required="" type="text" value="{{$data->bg_link}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Map Key *</label>
                                            <div class="col-sm-6">
                                                <textarea name="bg_text" id="phone" class="form-control" placeholder="Enter Your Input" required="" rows="3">{{$data->bg_text}}</textarea>
                                            </div>
                                          </div>
                                          
                                            <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update Setting</button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard Office Address -->
                </div>
            </div>
        </div>
    </div>
@endsection
