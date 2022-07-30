@extends('layouts.admin')

@section('content')

<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard area -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="add-product-box">
                                        <div class="add-product-header">
                                            <h2>Feature Title</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-proimg-submit')}}" method="POST" enctype="multipart/form-data">
                                          @include('includes.form-error')
                                        @include('includes.form-success')
                                          {{csrf_field()}}

                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Title*</label>
                                            <div class="col-sm-6">
                                              <input name="pfax" id="phone" class="form-control" placeholder="Title" type="text" value="{{$admin->pfax}}">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="street_address"> Description *</label>
                                            <div class="col-sm-6">
                                              <textarea name="pareas" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" required="">{{$admin->pareas}}</textarea>
                                            </div>
                                          </div>

                                       <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Background Image*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->fimg ? asset('assets/images/'.$admin->fimg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" style="height: 350px; width: 350px" id="adminimg">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile" class="hidden" name="fimg" value="">
                                              <button type="button" id="uploadTrigger" onclick="uploadclick()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div> 


                                       <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Mobile Background Image*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->hsimg ? asset('assets/images/'.$admin->hsimg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" style="height: 350px; width: 350px" id="adminimg1">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile1" class="hidden" name="hsimg" value="">
                                              <button type="button" id="uploadTrigger1" onclick="uploadclick1()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div> 
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update Information</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard area --> 
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')


<script type="text/javascript">
  
  function uploadclick(){
    $("#uploadFile").click();
    $("#uploadFile").change(function(event) {
          readURL(this);
        $("#uploadTrigger").html($("#uploadFile").val());
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


</script>

@endsection

