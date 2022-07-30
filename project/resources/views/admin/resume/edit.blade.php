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
                                            <h2>Edit Content</h2>
                                            <a href="{{route('admin-rs-index')}}" class="btn add-back-btn"><i class="fa fa-arrow-left"></i> Back</a>  
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-rs-edit',$ad->id)}}" method="POST" enctype="multipart/form-data">
                                          @include('includes.form-error')
                                          {{csrf_field()}}

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_language">Title*</label>
                                            <div class="col-sm-6">
                                              <input class="form-control" name="title" id="edit_language" placeholder="Enter Title" required="" type="text" value="{{$ad->title}}">
                                            </div>
                                          </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="edit_language">Duration*</label>
                                            <div class="col-sm-6">
                                            <select class="form-control" name="duration" id="blood_group" required="">
                                                  <option value="">Select Position</option>
                                                  <option value="Left" {{$ad->duration == "Left" ? "selected":""}}>Left</option>
                                                  <option value="Middle" {{$ad->duration == "Middle" ? "selected":""}}>Middle</option>
                                                  <option value="Right" {{$ad->duration == "Right" ? "selected":""}}>Right</option>
                                              </select>
                                            </div>
                                          </div>
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update Content</button>
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

<script type="text/javascript" src="{{asset('assets/admin/js/nicEdit.js')}}"></script> 
<script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
</script>

@endsection

