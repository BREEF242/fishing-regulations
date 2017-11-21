@extends('layout.master')
@section('meta')
  <title>Bahamas Sports Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta property="og:title" content="Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism">
  <meta property="og:description" content="">
@stop

@section('banner')
  <style>
  .overlay-container img {
    min-width: 100%;
    min-height: 180px;
    max-height: 180px;
  }
  </style>
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
                        <img src="/images/slider_rod.jpg" alt="slidebg1" data-bgposition="center top" data-bgrepeat="no-repeat" data-bgfit="cover" class="rev-slidebg">

                        <!-- Transparent Background -->
                        <div class="tp-caption dark-translucent-bg" data-x="center" data-y="center" data-start="0" data-transform_idle="o:1;" data-transform_in="o:0;s:600;e:Power2.easeInOut;" data-transform_out="o:0;s:600;" data-width="5000" data-height="5000">
                        </div>

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption large_white" data-x="left" data-y="220" data-start="500" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;o:0;s:1150;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">Bahamas Sports Fishing Regulations
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption medium_white" data-x="left" data-y="290" data-start="750" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;s:850;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;">

                          All foreign vessels intending to engage in sport fishing in The Bahamas <br />
                            must visit Bahamian <strong>Customs and Immigration</strong> at the port of <br />
                           entry to apply for cruising and sport fishing permits.

                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption small_white" data-x="left" data-y="410" data-start="1000" data-transform_idle="o:1;" data-transform_in="y:[100%];sX:1;sY:1;o:0;s:600;e:Power4.easeInOut;" data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"><a href="/regulations/citizens-residents" class="btn btn-dark btn-default btn-animated">Learn More <i class="fa fa-arrow-right"></i></a>
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


           <div class="row grid-space-10">
                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/conch.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Conch</h3>
                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                                <li><i class="icon-check"></i> Daily limit: <span class="text-danger">no more</span> than <strong>6</strong> conch per vessel at any time (not cumulative)</li>
                                <li><i class="icon-check"></i> Harvested conch must have a well-formed flared lip</li>
                              </ul>

                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/scalefish.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Reef Fish
                                 @if( isset($closed) && !$closed['grouper'] )
                                   @include('partials.season_open')
                                 @else
                                   @include('partials.season_closed')
                                 @endif
                               </h3>
                               <small>(INCLUDING ROCKFISH, GROUPERS, SNAPPERS)</small>

                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                               <li><i class="icon-check"></i> Daily catch limit: 20 fish or 60 lbs allowed per vessel.&nbsp;</li>
                               <li><i class="icon-check"></i> Annual closed season: Nassau Grouper, Dec. 1 – Feb 28</li>
                               <li><i class="icon-check"></i> Grouper and rockfish must weigh at least 3 lbs</li>
                               </ul>

                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/stone_crab.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Stone Crab
                                 @if( isset($closed) && !$closed['stonecrab'] )
                                   @include('partials.season_open')
                                 @else
                                   @include('partials.season_closed')
                                 @endif

                               </h3>
                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                                  <li><i class="icon-check"></i> Annual closed season: June 1 – October 15.</li>
                                  <li><i class="icon-check"></i> Capture, possession or sale of fresh stone crab is <span class="text-danger">prohibited during the closed season</span>.</li>
                                  <li><i class="icon-check"></i> Possession or sale of stone crab claws measuring less than 4” is <span class="text-danger">prohibited</span>.</li>
                              </ul>

                             </div>
                           </div>
                         </div>


                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/billfish.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Billfish</h3>
                               <small>(MARLIN, SAILFISH OR SWORDFISH)</small>

                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                                 <li><i class="icon-check"></i> Release of any Billfish (such as Marlin, Sailfish or Swordfish) caught is <span class="text-danger">mandatory</span>, unless permitted under an approved tournament</li>
                               </ul>

                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/tuna.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Deep Sea</h3>
                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                               <li><i class="icon-check"></i> Maximum of 18 migratory fish (such as Kingfish, Dolphin, Tuna or Wahoo) allowed on board any vessel at any time</li>
                               </ul>

                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">

                             <div class="overlay-container overlay-visible">

                                 <img src="/images/crawfish.jpg" alt="">


                             </div>
                             <div class="body">

                               <h3 class="margin-clear">
                                 Crawfish (Spiny Lobster)
                                 @if( isset($closed) && !$closed['crawfish'] )
                                   @include('partials.season_open')
                                 @else
                                   @include('partials.season_closed')
                                 @endif
                               </h3>
                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                                 <li><i class="icon-check"></i> Daily catch limit: no more than 10 crawfish per vessel at any time (not cumulative)</li>
                                 <li><i class="icon-check"></i> Annual closed season: April 1 – July 31</li>
                                 <li><i class="icon-check"></i> Minimum Tail length of 5.5 inches</li>
                                 <li><i class="icon-check"></i> Possession of egg bearing females and or removing eggs is <span class="text-danger">not allowed</span></li>
                                 <li><i class="icon-check"></i> Foreign persons are <span class="text-danger">not allowed</span> to use compressors or any compressed air device for fishing&nbsp;</li>
                               </ul>

                             </div>
                           </div>
                         </div>

                         <div class="col-md-6 col-lg-3">
                           <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                             <div class="overlay-container overlay-visible">
                               <img src="/images/bonefish.jpg" alt="">

                             </div>
                             <div class="body">
                               <h3 class="margin-clear">Bonefish &amp; Tarpon</h3>
                               <div class="separator mt-10"></div>
                               <ul class="list-icons text-left">
                                 <li><i class="icon-check"></i> The purchase and sale of bonefish is <span class="text-danger">not allowed</span></li>
                                 <li><i class="icon-check"></i> Netting of bonefish is <span class="text-danger">not allowed</span></li>
                                 <li><i class="icon-check"></i> All anglers are encouraged to use barbless hooks and release all their catch.</li>
                                 <li><i class="icon-check"></i> <a href="http://www.bahamas.com/sites/default/files/flat_fishing_regulations_.pdf">Click here for more information on the Bahamian Flyfishing Regulations</a></li>
                               </ul>

                             </div>
                           </div>
                         </div>


                       </div>


      </div>
  </section>

  @include('partials.warning_banner')

  <section class="light-gray-bg pv-30 padding-bottom-clear clearfix">
          <div class="container">
            <div class="row">
              <div class="col-md-6">



                <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <span class="icon without-bg"><i class="fa fa-diamond text-muted"></i></span>
                  <div class="body text-muted">
                    <h4 class="title"><strong>GEAR RULES</strong></h4>
                    <p>The following equipment rules apply in the Bahamas:</p>
                    <div class="separator-2"></div>
                    <ul class="list-icons">
                      <li><i class="icon-check"></i> Angling with a hook or lure attached to a line held in the hand or attached to a pole, rod or reel only</li>
                      <li><i class="icon-check"></i> A maximum of 6 rods or reels allowed per vessel, unless special permit is obtained</li>
                      <li><i class="icon-check"></i> Using a spear that has a trigger, a fish trap, or a net other than a landing net is not allowed unless a special permit is acquired</li>
                      <li><i class="icon-check"></i> Spearfishing within one mile of New Providence or the southern coast of Grand Bahama and 200 yards of a family island.</li>
                    </ul>

                  </div>
                </div>



              </div>

              <div class="col-md-6">

                <div class="pv-20 ph-20 feature-box-2 boxed shadow object-non-visible" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                  <span class="icon without-bg"><i class="fa fa-diamond text-muted"></i></span>
                  <div class="body text-muted">
                    <h4 class="title"><strong>PERMITS &amp; LICENSE</strong></h4>
                    <p>A permit or license is required for::</p>
                    <div class="separator-2"></div>
                    <ul class="list-icons">
                      <li><i class="icon-check"></i> Foreign vessels to engage in sport fishing.</li>
                      <li><i class="icon-check"></i> To conduct foreign fishing for scientific or research purposes.</li>
                    </ul>

                  </div>
                </div>


              </div>
            </div>


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
