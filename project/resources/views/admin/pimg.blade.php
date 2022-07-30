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
                                            <h2>Pricing Title</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-profile-submit')}}" method="POST" enctype="multipart/form-data">
                                          @include('includes.form-error')
                                        @include('includes.form-success')
                                          {{csrf_field()}}

                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">First Title *</label>
                                            <div class="col-sm-6">
                                              <input name="ptitle1" id="phone" class="form-control" placeholder="Enter Title" type="text" value="{{$admin->ptitle1}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Description *</label>
                                            <div class="col-sm-6">
                                              <textarea name="ptext1" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" required="">{{$admin->ptext1}}</textarea>
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Second Title *</label>
                                            <div class="col-sm-6">
                                              <input name="ptitle2" id="phone" class="form-control" placeholder="Enter Title" type="text" value="{{$admin->ptitle2}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="phone">Description *</label>
                                            <div class="col-sm-6">
                                              <textarea name="ptext2" id="street_address" class="form-control" rows="5" placeholder="Enter Description" style="resize: vertical;" required="">{{$admin->ptext2}}</textarea>
                                            </div>
                                          </div>
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update Information</button>
                                            </div>
                                        </form>
                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <h2 class="text-center">Basic</h2>
                                            <br>
                <form  action="{{route('admin-basic')}}" method="POST">
                  {{csrf_field()}}
                                        @if (Session::has('basic'))
                                              
                                              <div class="alert alert-success validation">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <p class="text-left">{{ Session::get('basic') }}</p> 
                                              </div>

                                        @endif
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger validation">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <ul class="text-left">
                                          @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                          @endforeach
                                          </ul>
                                        </div>
                                        @endif

                                         <div class="form-group">
                                            <label class="control-label" for="phone">Title *</label>
                                            <div>
                                              <input name="bt" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->bt}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Amount *</label>
                                            <div>
                                              <input name="ba" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->ba}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Link *</label>
                                            <div>
                                              <input name="bl" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->bl}}" required="">
                                            </div>
                                          </div> 
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Currency *</label>
                                            <div>
                                              <input name="h1" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h1}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Sign *</label>
                                            <div>
                                              <input name="h2" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h2}}" required="">
                                            </div>
                                           </div>
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update</button>
                                            </div>
          </form>
                                          </div>  



                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">                     
                                      <h2 class="text-center">Standard</h2>  <br>
                <form  action="{{route('admin-standard')}}" method="POST">
                  {{csrf_field()}}
                                        @if (Session::has('standard'))
                                              
                                              <div class="alert alert-success validation">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <p class="text-left">{{ Session::get('standard') }}</p> 
                                              </div>

                                        @endif
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger validation">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <ul class="text-left">
                                          @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                          @endforeach
                                          </ul>
                                        </div>
                                        @endif

                                       <div class="form-group">
                                            <label class="control-label text-center" for="phone">Title *</label>
                                            <div>
                                              <input name="stt" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->stt}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Amount *</label>
                                            <div>
                                              <input name="sa" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->sa}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Link *</label>
                                            <div>
                                              <input name="sl" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->sl}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Currency *</label>
                                            <div>
                                              <input name="h3" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h3}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Sign *</label>
                                            <div>
                                            <input name="h4" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h4}}" required="">
                                            </div>
                                        </div>
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update</button>
                                            </div>
          </form>
                                      </div>

                                          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> 
                                    <h2 class="text-center">Pro</h2>
                                    <br>
                <form  action="{{route('admin-pro')}}" method="POST">
                  {{csrf_field()}}
                                        @if (Session::has('pro'))
                                              
                                              <div class="alert alert-success validation">
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                    <p class="text-left">{{ Session::get('pro') }}</p> 
                                              </div>

                                        @endif
                                        @if(count($errors) > 0)
                                        <div class="alert alert-danger validation">
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                          <ul class="text-left">
                                          @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                          @endforeach
                                          </ul>
                                        </div>
                                        @endif

                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Title *</label>
                                            <div>
                                              <input name="pt" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->pt}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Amount *</label>
                                            <div>
                                              <input name="pa" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->pa}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Link *</label>
                                            <div>
                                              <input name="pl" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->pl}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Currency *</label>
                                            <div>
                                              <input name="h5" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h5}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label text-center" for="phone">Sign *</label>
                                            <div>
                                              <input name="h6" id="phone" class="form-control" placeholder="Enter Your Input" type="text" value="{{$admin->h6}}" required="">
                                            </div>
                                          </div>
                                         <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update</button>
                                            </div>
          </form>
                                      </div>
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


