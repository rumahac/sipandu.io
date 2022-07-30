@extends('layouts.admin')

@section('content')
<div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Add Product</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)"><?php date_default_timezone_set('Asia/Jakarta'); echo date('d-m-Y H:i:s'); ?></a></li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                <form class="form-horizontal" action="{{route('admin-info-submit')}}" method="POST" enctype="multipart/form-data">
                                        @include('includes.form-success')      
                                          {{csrf_field()}}
                                    <div class="card-header">
                                        <div class="card-title">Home Information</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label" for="site">Header Text <span class="text-red">*</span> :</label>
                                            <div class="col-md-9">
                                                <input name="st" id="site"  type="text" class="form-control" value="{{$admin->st}}" placeholder="Header Text">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="phone">Title <span class="text-red">*</span> :</label>
                                        <div class="col-md-9">
                                                <input name="fname" id="phone" type="text" class="form-control" value="{{$admin->fname}}" placeholder="Title">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="street_address">Description <span class="text-red">*</span> :</label>
                                        <div class="col-md-9">
                                            <textarea name="description" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" required="">{{$admin->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <label class="col-md-3 form-label mb-4">Choose Image <span class="text-red">*</span> :</label>
                                            <div class="col-md-9">
                                                <input class="dropify" onclick="uploadclick()" name="mimg" id="demo demo1" type="file" accept=".jpg, .png, image/jpeg, image/png" multiple>
                                            </div>
                                        </div>
                                        
                                        <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="phone">Playstore URL <span class="text-red">*</span> :</label>
                                        <div class="col-md-9">
                                        <input name="link" id="site" class="form-control" placeholder="https://www.google.com/" type="text" value="{{$admin->link}}" required="">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                        <label class="col-md-3 form-label" for="phone">Apple URL <span class="text-red">*</span> :</label>
                                        <div class="col-md-9">
                                        <input name="title" id="fax" class="form-control" placeholder="Enter Designation" type="text" value="{{$admin->title}}" required="">
                                            </div>
                                        </div>
                                      </div>
                                    <div class="card-footer">
                                        <!--Row-->
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button name="addProduct_btn" type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                        <!--End Row-->
                                    </div>
                                </form>
                                  </div>
                            </div>
                        </div>
                        <!-- /ROW-1 CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
</div>


@endsection

@section('scripts')


<script type="text/javascript">
  
  function uploadclick(){
    $("#uploadFile").click();
    $("#uploadFile").change(function(event) {
          readURL(this);
        $("#demo1").html($("#uploadFile").val());
    });

}

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }


  function uploadclick1(){
    $("#uploadFile1").click();
    $("#uploadFile1").change(function(event) {
          readURL1(this);
        $("#uploadTrigger1").html($("#uploadFile1").val());
    });

}

    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg1').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

  function uploadclick2(){
    $("#demo").click();
    $("#demo").change(function(event) {
          readURL2(this);
        $("#demo1").html($("#demo").val());
    });

}

    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg2').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

  function uploadclick3(){
    $("#uploadFile3").click();
    $("#uploadFile3").change(function(event) {
          readURL3(this);
        $("#uploadTrigger3").html($("#uploadFile3").val());
    });

}

    function readURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#adminimg3').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

@endsection
