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
                                            <h2>Background Video</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-video-submit')}}" method="POST" enctype="multipart/form-data">
                                          @include('includes.form-error')
                                          @include('includes.form-success')
                                          {{csrf_field()}}

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="admin_name">Video URL *<span>(Youtube, Vimeo)&nbsp;&nbsp;&nbsp;</span></label>
                                            <div class="col-sm-6">
                                              <input class="form-control" name="vid" id="admin_name" placeholder="https://www.youtube.com/watch?v=u3MY3vIw4Aw" required="" value="{{$admin->vid}}" type="text">
                                            </div>
                                          </div> 
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_current_photo">Current Background Image*</label>
                                            <div class="col-sm-6">
     
                                            <img src="{{ $admin->vidimg ? asset('assets/images/'.$admin->vidimg):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="No Photo" style="height: 350px; width: 520px" id="adminimg">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_profile_photo">Choose Background Image</label>
                                            <div class="col-sm-6">
                                    <input type="file" id="uploadFile" class="hidden" name="vidimg" value="">
                                              <button type="button" id="uploadTrigger" onclick="uploadclick()" class="form-control"><i class="fa fa-download"></i> Select Photo</button>
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

</script>

@endsection

