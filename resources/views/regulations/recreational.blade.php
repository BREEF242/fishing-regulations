@extends('layout.master')
@section('meta')
  <title>Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism</title>
  <meta name="description" content="Rules and regulations for recreational fishing in the Bahamas presented by BREEF &amp; Bahamas Ministry of Tourism.">
  <meta name="keywords" content="BREEF, Bahamas, Recreational fishing">
  <meta property="og:title" content="Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism">
  <meta property="og:description" content="Rules and regulations for recreational fishing in the Bahamas presented by BREEF &amp; Bahamas Ministry of Tourism.">
@stop

@section('banner')
  <div class="banner clearfix">

      <!-- slideshow start -->
      <!-- ================ -->
      <div class="slideshow">

          <!-- slider revolution start -->
          <!-- ================ -->
          <div class="slider-revolution-5-container">
              <div id="slider-banner-fullwidth-big-height" class="slider-banner-fullwidth-big-height rev_slider" data-version="5.0">
                  <ul class="slides">
                    <li data-transition="random" data-slotamount="default" data-masterspeed="default" data-title="">

                        <!-- main image -->
                        <img src="{{cloudinary('c_scale,w_1600/v1511994066/backgrounds/slider_shoal')}}.png" alt="slidebg1" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                        <!-- Transparent Background -->
                        <div class="tp-caption dark-translucent-bg" data-x="center" data-y="center" data-start="0" data-transform_idle="o:1;" data-transform_in="o:0;s:600;e:Power2.easeInOut;" data-transform_out="o:0;s:600;" data-width="5000" data-height="5000">
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_white" data-x="left" data-y="220" data-start="500" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Bahamas Recreational Fishing Regulations
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_white" data-x="left" data-y="290" data-start="750" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">
                          Capture of any fishery resource other than edible fish, conch or crawfish for subsistence, is not allowed. <br />
                          Recreational fishing vessels are not permitted to have onboard at any time more than 249 lbs. of fishery resources.
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption small_white" data-x="left" data-y="410" data-start="1000" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="/" class="btn btn-dark btn-default btn-animated">Learn More <i class="fa fa-arrow-right"></i></a>
                        </div>

                    </li>
                  </ul>
                  <div class="tp-bannertimer"></div>
              </div>
          </div>
          <!-- slider revolution end -->

      </div>
      <!-- slideshow end -->

  </div>
@stop


@section('content')
  <section class="pv-30 light-gray-bg clearfix">
      <div class="container">

           <h3 class="mt-4 text-center">Catch Limits &amp; <span class="text-default">Closed Seasons</span></h3>
           <div class="separator"></div>

           <div class="owl-carousel carousel">

             <div class="image-box text-center">
               <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                     <div class="overlay-container overlay-visible">
                       <img src="{{cloudinary('c_scale,w_500/v1511445800/species/queen_conch_1')}}.png" alt="Conch">
                     </div>
                     <div class="body">
                       <h3 class="margin-clear">Conch</h3>
                       <small>Strombidae family</small>
                       <div class="separator mt-10"></div>
                       <ul class="list-icons text-left" style="margin-bottom: 38px;">
                        <li>Harvested conch must have a well-formed flared lip</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>

                      </ul>
                       <a target="_blank" href="https://en.wikipedia.org/wiki/Conch" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                     </div>
               </div>
             </div>

             <div class="image-box text-center">
               <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                     <div class="overlay-container overlay-visible">
                       <img src="{{cloudinary('c_scale,w_500/v1511445833/species/Crawfish')}}.png" alt="">
                       <div class="overlay-bottom">
                         <ul class="social-links circle dark margin-clear">
                           @if( isset($closed) && !$closed['crawfish'] )
                             @include('partials.season_open', ['text'=>'Annual closed season: <br /> April 1 – July 31'])
                           @else
                             @include('partials.season_closed', ['text'=>'Annual closed season: <br /> April 1 – July 31'])
                           @endif
                         </ul>
                       </div>
                     </div>
                     <div class="body">
                       <h3 class="margin-clear">Crawfish</h3>
                       <small>Spiny Lobster</small>
                       <div class="separator mt-10"></div>
                       <ul class="list-icons text-left">
                         <li>Daily catch limit: no more than 10 per vessel at any time (not cumulative)</li>
                         <li>Min. Tail length of 5.5 inches</li>
                         <li>Possession of egg bearing females and/or removing eggs is not allowed.</li>
                       </ul>
                       <a target="_blank" href="https://en.wikipedia.org/wiki/Spiny_lobster" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                     </div>
               </div>
             </div>

             <div class="image-box text-center">
               <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                     <div class="overlay-container overlay-visible">
                       <img src="{{cloudinary('c_scale,w_500/v1511445796/species/Nassau_Grouper')}}.png" alt="Rockfish, Snapper, Grouper">
                       <div class="overlay-bottom">
                         <ul class="social-links circle dark margin-clear">
                           @if( isset($closed) && !$closed['grouper'] )
                             @include('partials.season_open', ['text'=>'Annual closed season: Nassau Grouper: <br /> Dec. 1 – Feb 28'])
                           @else
                             @include('partials.season_closed', ['text'=>'Annual closed season: Nassau Grouper: <br /> Dec. 1 – Feb 28'])
                           @endif
                         </ul>
                       </div>
                     </div>
                     <div class="body">
                       <h3 class="margin-clear">ScaleFish</h3>
                       <small>Rockfish, Snapper, Grouper</small>
                       <div class="separator mt-10"></div>
                       <ul class="list-icons text-left">
                         <li>Purchase, sale, and/or netting of Bonefish is prohibite</li>
                         <li>Grouper and rockfish must weigh at least 3 lbs</li>
                         <li>&nbsp;</li>
                       </ul>
                       <a target="_blank" href="https://en.wikipedia.org/wiki/Coral_reef_fish" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                     </div>
               </div>
             </div>

             <div class="image-box text-center">
               <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                     <div class="overlay-container overlay-visible">
                       <img src="{{cloudinary('c_scale,w_500/v1511465421/species/stone_crab')}}.png" alt="Stone Crab">
                       <div class="overlay-bottom">
                         <ul class="social-links circle dark margin-clear">
                           @if( isset($closed) && !$closed['stonecrab'] )
                             @include('partials.season_open', ['text'=>'Annual closed season: <br /> June 1 – October 15'])
                           @else
                             @include('partials.season_closed', ['text'=>'Annual closed season: <br /> June 1 – October 15'])
                           @endif
                         </ul>
                       </div>
                     </div>
                     <div class="body">
                       <h3 class="margin-clear">Stone Crab</h3>
                       <small>Menippe mercenaria</small>
                       <div class="separator mt-10"></div>
                       <ul class="list-icons text-left">
                          <li>Capture, possession or sale is prohibited during the closed season.</li>
                          <li>Possession or sale of claws measuring less than 4” is prohibited.</li>
                          <li>&nbsp;</li>
                      </ul>
                       <a target="_blank" href="https://en.wikipedia.org/wiki/King_crab" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                     </div>
               </div>
             </div>



           </div>


      </div>
  </section>

  @include('partials.warning_banner')

  <!-- section start -->
  <!-- ================ -->
  <a name="important"></a>
  <section class="section clearfix">
      <div class="container">

        <h3 class="mt-4 text-center">Important Information</span></h3>
        <div class="separator"></div>

            <div class="row">
              <div class="col-sm-3">
                      <div class="image-box style-2 mb-20 bordered light-gray-bg">
                        <div class="overlay-container overlay-visible">
                          <img src="{{cloudinary('c_scale,w_400/v1511472572/misc/Snapper-Spearfishing-Charter-Mexico-')}}.jpg" alt="">

                        </div>
                        <div class="body">
                          <h3><i class="fa fa-warning text-warning"></i> SPEARFISHING</h3>
                          <div class="separator-2"></div>
                          <p class="small mb-10 text-muted"><i class="icon-calendar"></i> {{date('M, Y')}} <i class="pl-10 icon-tag-1"></i> IMPORTANT</p>
                          <p>Spearfishing is not permitted within 1 mile of New Providence or the southern coast of Grand Bahama and 200 yards off a family island.</p>
                        </div>
                      </div>
                </div>

                <div class="col-sm-3">
                        <div class="image-box style-2 mb-20 bordered light-gray-bg">
                          <div class="overlay-container overlay-visible">
                            <img src="{{cloudinary('c_scale,w_400/v1511472787/misc/Reef_killer_1_-_Overfishing_-_Fish_trap_Bahamas_c_Frank_Baensch_Marine_Photobank')}}.png" alt="">

                          </div>
                          <div class="body">
                            <h3><i class="fa fa-warning text-warning"></i> TRAPPING</h3>
                            <div class="separator-2"></div>
                            <p class="small mb-10 text-muted"><i class="icon-calendar"></i> {{date('M, Y')}} <i class="pl-10 icon-tag-1"></i> IMPORTANT</p>
                            <p>Use of fish traps without self-destruct panel or less than minimum mesh size is not allowed.</p>
                          </div>
                        </div>
                  </div>

                  <div class="col-sm-3">
                          <div class="image-box style-2 mb-20 bordered light-gray-bg">
                            <div class="overlay-container overlay-visible">
                              <img src="{{cloudinary('c_scale,w_400/v1511472957/misc/DolphinCay_DeepWater_CatBox')}}.png" alt="">
                            </div>
                            <div class="body">
                              <h3><i class="fa fa-warning text-warning"></i> EDIBILITY</h3>
                              <div class="separator-2"></div>
                              <p class="small mb-10 text-muted"><i class="icon-calendar"></i> {{date('M, Y')}} <i class="pl-10 icon-tag-1"></i> IMPORTANT</p>
                              <p>Capture of any fishery resource other than edible fish, conch or crawfish for subsistence, is not allowed.</p>
                            </div>
                          </div>
                    </div>

                    <div class="col-sm-3">
                            <div class="image-box style-2 mb-20 bordered light-gray-bg">
                              <div class="overlay-container overlay-visible">
                                <img src="{{cloudinary('c_scale,w_400/v1511473167/misc/FullSizeRender1')}}.png" alt="">
                              </div>
                              <div class="body">
                                <h3><i class="fa fa-warning text-warning"></i> VESSEL LIMITS</h3>
                                <div class="separator-2"></div>
                                <p class="small mb-10 text-muted"><i class="icon-calendar"></i> {{date('M, Y')}} <i class="pl-10 icon-tag-1"></i> IMPORTANT</p>
                                <p>Recreational fishing vessels are not permitted to have onboard at any time more than 249 lbs. of fishery resources. Above this amount is considered commercial fishing activity and a commercial licence is required. </p>
                              </div>
                            </div>
                      </div>

            </div>


      </div>
  </section>
  <!-- section end -->




  <a name="gear"></a>
  <a name="permits"></a>
  <section class="light-gray-bg pv-30 padding-bottom-clear clearfix">
          <div class="container">


            <a name="protected"></a>
            <a name="prohibited"></a>
            <div class="row">
              <div class="col-md-6">


                <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible left" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <span class="icon without-bg"><i class="fa fa-warning text-warning"></i></span>
                  <div class="body text-warning">
                    <h4 class="title text-white bg-warning" style="padding: 10px;"><strong>PROTECTED SPECIES</strong></h4>
                    <p>The following species receive special protection in the Bahamas: </p>
                    <div class="separator-3"></div>
                    <ul class="list-icons text-warning">
                      <li><i class="icon-cancel text-warning"></i> <strong>Marine mammals:</strong> capture or molestation is prohibited.</li>
                      <li><i class="icon-cancel text-warning"></i> <strong>Corals:</strong> harvest is prohibited</li>
                      <li><i class="icon-cancel text-warning"></i> <strong>Marine turtles:</strong> harvest, possession, purchase or sale of turtle, turtle parts and/or eggs and interfering with nests is prohibited.</li>
                      <li><i class="icon-cancel text-warning"></i> <strong>Sharks:</strong> sale, import and export of sharks, shark parts and shark product is prohibited.</li>
                    </ul>

                  </div>
                </div>




              </div>

              <div class="col-md-6">


                <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible left" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <span class="icon without-bg"><i class="fa fa-ban text-danger"></i></span>
                  <div class="body text-danger">
                    <h4 class="title text-white bg-danger" style="padding: 10px;"><strong>PROHIBITED FISHING GEAR AND METHODS</strong></h4>
                    <p>Use of any of the following is prohibited in Bahamian waters:</p>
                    <div class="separator-3"></div>
                    <ul class="list-icons text-danger">
                      <li><i class="icon-cancel text-danger"></i> Bleach or other noxious or poisonous substances</li>
                      <li><i class="icon-cancel text-danger"></i> Firearms or explosives</li>
                      <li><i class="icon-cancel text-danger"></i> Scuba gear spear guns.</li>
                    </ul>

                  </div>
                </div>





              </div>
            </div>


          </div>
        </section>



        @include('partials.gov_dept_banner')




@stop
