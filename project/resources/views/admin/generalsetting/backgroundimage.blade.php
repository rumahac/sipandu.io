@extends('layouts.admin')

@section('content')
<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard Background Image -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="add-product-box">
                                        <div class="add-product-header">
                                            <h2>Background Image</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-gs-bgimgup')}}" method="POST" enctype="multipart/form-data">
                                         @include('includes.form-error')
                                            @include('includes.form-success')      
                                          {{csrf_field()}}
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="current_background_image ">Current Background Image </label>
                                            <div class="col-sm-6">
                                        <img id="adminimg" src="{{ $data->bgimg ? asset('assets/images/'.$data->bgimg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="" id="adminimg">      
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="setup_new_background">Setup New Background *</label>
                                            <div class="col-sm-6">
                                              <input name="bgimg"  type="file">
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
                    <!-- Ending of Dashboard Background Image -->
                </div>
            </div>
        </div>
    </div>
@endsection