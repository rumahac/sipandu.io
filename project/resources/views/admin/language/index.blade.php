@extends('layouts.admin')

@section('content')
<div class="right-side">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Starting of Dashboard Contact Page Content -->
                        <div class="section-padding add-product-1">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="add-product-box">
                                        <div class="add-product-header">
                                            <h2>Website Languages</h2> 
                                        </div>
                                        <hr>
                                        <form class="form-horizontal" action="{{route('admin-lang-submit')}}" method="POST">
                                         @include('includes.form-success')      
                                        {{csrf_field()}}

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">About Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="home" placeholder="Enter Your Text" value="{{$data->home}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Features Text*<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="lm" placeholder="Enter Your Text" value="{{$data->lm}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Screen Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="home2" placeholder="Enter Your Text" value="{{$data->home2}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Testimonials Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="fht" placeholder="Enter Your Text" value="{{$data->fht}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Pricing Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="hcs" placeholder="Enter Your Text" value="{{$data->hcs}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="lns" placeholder="Enter Your Text" value="{{$data->lns}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Learn More Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="home1" placeholder="Enter Your Text" value="{{$data->home1}}">
                                            </div>
                                          </div>

                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Download on Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="dopd" placeholder="Enter Your Text" value="{{$data->dopd}}">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">App Store Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="doci" placeholder="Enter Your Text" value="{{$data->doci}}">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Get it on Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="dosp" placeholder="Enter Your Text" value="{{$data->dosp}}">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Google Play Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="cn" placeholder="Enter Your Text" value="{{$data->cn}}" required="">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Start Free Trial Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="doo" placeholder="Enter Your Text" value="{{$data->doo}}">
                                            </div>
                                          </div>

                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Subscribe Title Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="ston" placeholder="Enter Your Text" value="{{$data->ston}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Subscribe Heading Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="s" placeholder="Enter Your Text" value="{{$data->s}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Subscribe Placeholder Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="supl" placeholder="Enter Your Text" value="{{$data->supl}}" required="">
                                            </div>
                                          </div>

                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Name Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="con" placeholder="Enter Your Text" value="{{$data->con}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Email Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="cop" placeholder="Enter Your Text" value="{{$data->cop}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Subject Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="coe" placeholder="Enter Your Text" value="{{$data->coe}}" required="">
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Message Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="cor" placeholder="Enter Your Text" value="{{$data->cor}}" required="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-4" for="contact_form_success_text">Contact Button Text *<span>(In Any Language)</span></label>
                                            <div class="col-sm-6">
                                              <input id="contact_form_success_text" class="form-control" type="text" name="sm" placeholder="Enter Your Text" value="{{$data->sm}}" required="">
                                            </div>
                                          </div>
                                            <hr>
                                            <div class="add-product-footer">
                                                <button name="addProduct_btn" type="submit" class="btn add-product_btn">Update Language Setting</button>   
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <!-- Ending of Dashboard FAQ Page -->
                </div>
            </div>
        </div>
    </div>
@endsection