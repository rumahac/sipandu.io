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
                                            <h2>Screen Section</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-spimg-submit')}}" method="POST" enctype="multipart/form-data">
                                          @include('includes.form-error')
                                          @include('includes.form-success')
                                          {{csrf_field()}}

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Feature Image*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->simg ? asset('assets/images/'.$admin->simg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" style="height: 350px; width: 350px" id="adminimg">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile" class="hidden" name="simg" value="">
                                              <button type="button" id="uploadTrigger" onclick="uploadclick()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div>  
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Title*</label>
                                            <div class="col-sm-6">
                                              <input name="paddress" id="phone" class="form-control" placeholder="Enter Title" type="text" value="{{$admin->paddress}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Description*</label>
                                            <div class="col-sm-6">
                                              <textarea name="pfone" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" required="">{{$admin->pfone}}</textarea>
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Apple Link*</label>
                                            <div class="col-sm-6">
                                              <input name="pmail" id="phone" class="form-control" placeholder="Enter URL" type="text" value="{{$admin->pmail}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Apple Icon*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->appico ? asset('assets/images/'.$admin->appico):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" id="adminimg1">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile1" class="hidden" name="appico" value="">
                                              <button type="button" id="uploadTrigger1" onclick="uploadclick1()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div>  
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Playstore Link*</label>
                                            <div class="col-sm-6">
                                              <input name="psite" id="phone" class="form-control" placeholder="Enter URL" type="text" value="{{$admin->psite}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Playstore Icon*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->plaico ? asset('assets/images/'.$admin->plaico):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" id="adminimg2">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile2" class="hidden" name="plaico" value="">
                                              <button type="button" id="uploadTrigger2" onclick="uploadclick2()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div>  
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Second Background Image*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->fsimg ? asset('assets/images/'.$admin->fsimg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" id="adminimg3">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile3" class="hidden" name="fsimg" value="">
                                              <button type="button" id="uploadTrigger3" onclick="uploadclick3()" class="form-control"><i class="fa fa-download"></i> Edit Photo</button>
                                              <p>Prefered Size: (600x600) or Square Sized Image</p>
                                            </div>
                                          </div> 
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 1 *</label>
                                            <div class="col-sm-6">
                                              <input name="p1" id="phone" class="form-control" placeholder="Counter 1 " type="text" value="{{$admin->p1}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 1 Text *</label>
                                            <div class="col-sm-6">
                                              <input name="p1t" id="phone" class="form-control" placeholder="Counter 1 Text" type="text" value="{{$admin->p1t}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 2 *</label>
                                            <div class="col-sm-6">
                                              <input name="p2" id="phone" class="form-control" placeholder="Counter 2 " type="text" value="{{$admin->p2}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 2 Text *</label>
                                            <div class="col-sm-6">
                                              <input name="p2t" id="phone" class="form-control" placeholder="Counter 2 Text" type="text" value="{{$admin->p2t}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 3 *</label>
                                            <div class="col-sm-6">
                                              <input name="p3" id="phone" class="form-control" placeholder="Counter 3 " type="text" value="{{$admin->p3}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 3 Text *</label>
                                            <div class="col-sm-6">
                                              <input name="p3t" id="phone" class="form-control" placeholder="Counter 3 Text" type="text" value="{{$admin->p3t}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 4 *</label>
                                            <div class="col-sm-6">
                                              <input name="p4" id="phone" class="form-control" placeholder="Counter 4 " type="text" value="{{$admin->p4}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Counter 4 Text *</label>
                                            <div class="col-sm-6">
                                              <input name="p4t" id="phone" class="form-control" placeholder="Counter 4 Text" type="text" value="{{$admin->p4t}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">App Screen Title *</label>
                                            <div class="col-sm-6">
                                              <input name="stitle" id="phone" class="form-control" placeholder="Enter Title" type="text" value="{{$admin->stitle}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">App Screen Test *</label>
                                            <div class="col-sm-6">
                                              <textarea name="stext" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" >{{$admin->stext}}</textarea>
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

  function uploadclick2(){
    $("#uploadFile2").click();
    $("#uploadFile2").change(function(event) {
          readURL2(this);
        $("#uploadTrigger2").html($("#uploadFile2").val());
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

<script type="text/javascript" src="{{asset('assets/admin/js/nicEdit.js')}}"></script> 
<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
</script>
@endsection

