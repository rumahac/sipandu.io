@extends('layouts.admin')

@section('content')

<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard data-table area -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div class="add-product-box">
                                      <div class="add-product-header products">
                                          <h2>Testimonial Content</h2>
                                          <a href="{{route('admin-ad-create')}}" class="btn add-newProduct-btn"><i class="fa fa-plus"></i> Add New Testimonial</a>  
                                      </div>
                                      <hr>
                  <div >
                                 @include('includes.form-success')
<div class="row">
  <div class="col-sm-12">
    <table id="example" class="table table-striped table-hover products dt-responsive dataTable no-footer dtr-inline" role="grid" aria-describedby="product-table_wrapper_info" style="width: 100%;" width="100%" cellspacing="0">
                                              <thead>
                                                  <tr role="row"><th class="sorting" tabindex="0" aria-controls="product-table_wrapper" rowspan="1" colspan="1" style="width: 279px;" aria-label="Donor's Name: activate to sort column ascending">Review Text</th><th class="sorting_asc" tabindex="0" aria-controls="product-table_wrapper" rowspan="1" colspan="1" style="width: 110px;" aria-sort="ascending" aria-label="Donor's Photo: activate to sort column descending">Client's Name</th><th class="sorting" tabindex="0" aria-controls="product-table_wrapper" rowspan="1" colspan="1" style="width: 110px;" aria-label="Blood Group: activate to sort column ascending">Designation</th><th class="sorting" tabindex="0" aria-controls="product-table_wrapper" rowspan="1" colspan="1" style="width: 185px;" aria-label="City: activate to sort column ascending">Photo</th><th class="sorting" tabindex="0" aria-controls="product-table_wrapper" rowspan="1" colspan="1" style="width: 200px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                                              </thead>

                                              <tbody>
                                            @foreach($ads as $ad)                                                
                                              <tr role="row" class="odd">

                                                    <td>{{$ad->review}}</td>
                                                    <td>{{$ad->client}}</td>
                                                    <td>{{$ad->designation}}</td>
                                                      <td tabindex="0" class="sorting_1"><img src="{{ $ad->photo ? asset('assets/images/'.$ad->photo):'http://fulldubai.com/SiteImages/noimage.png'}}" alt="Ad Photo" style="height: 180px; width: 200px"></td>
                                                      <td>
                                                        <a href="{{route('admin-ad-edit',$ad->id)}}" class="btn btn-primary product-btn"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="{{route('admin-ad-delete',$ad->id)}}" class="btn btn-danger product-btn"><i class="fa fa-trash"></i> Remove</a>
                                                      </td>
                                                  </tr>
                                                  @endforeach
                                                  </tbody>
                                          </table></div></div>
                                        </div>
                    </div>
                                  </div>
                              </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard data-table area -->
                </div>
            </div>
        </div>

@endsection

@section('scripts')

<script type="text/javascript">
  $('#example').DataTable();
</script>

@endsection

