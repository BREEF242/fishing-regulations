@extends('layout.master')
@section('meta')
  <title>Bahamas Sports Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism</title>
  <meta name="description" content="Rules and regulations for sport fishing in the Bahamas presented by BREEF &amp; Bahamas Ministry of Tourism.">
  <meta name="keywords" content="BREEF, Bahamas, sport fishing">
  <meta property="og:title" content="Bahamas Fishing Regulations presented by BREEF &amp; Bahamas Ministry of Tourism">
  <meta property="og:description" content="Rules and regulations for sport fishing in the Bahamas presented by BREEF &amp; Bahamas Ministry of Tourism.">
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
                    <ul class="list-icons text-left">
                     <li>Daily limit: no more than <strong>6</strong> per vessel at any time (not cumulative)</li>
                     <li>Harvested conch must have a well-formed flared lip</li>
                     <li>&nbsp;</li>
                   </ul>
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Conch" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
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
                    <h3 class="margin-clear">Reef Fish</h3>
                    <small>Rockfish, Snapper, Grouper</small>
                    <div class="separator mt-10"></div>
                    <ul class="list-icons text-left">
                      <li>Daily limit: 20 fish or 60 lbs allowed per vessel.&nbsp;</li>
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
                          @include('partials.season_open', ['text'=>'Annual closed season: <br />June 1 – October 15'])
                        @else
                          @include('partials.season_closed', ['text'=>'Annual closed season: <br />June 1 – October 15'])
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


          <div class="image-box text-center">
            <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                  <div class="overlay-container overlay-visible">
                    <img src="{{cloudinary('c_scale,w_500/v1511465499/species/billfish')}}.png" alt="Marlin, Sailfish, Swordfish">
                  </div>
                  <div class="body">
                    <h3 class="margin-clear">Billfish</h3>
                    <small>Marlin, Sailfish, Swordfish</small>
                    <div class="separator mt-10"></div>
                    <ul class="list-icons text-left">
                      <li>Release of catch is mandatory, unless permitted under an approved tournament</li>
                      <li>&nbsp;</li>
                      <li>&nbsp;</li>

                    </ul>
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Billfish" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                  </div>
            </div>
          </div>

          <div class="image-box text-center">
            <div class="team-member image-box style-2 mb-20 dark-bg text-center">
                  <div class="overlay-container overlay-visible">
                    <img src="{{cloudinary('c_scale,w_500/v1511445829/species/wahoo')}}.png" alt="Kingfish, Dolphin, Tuna, Wahoo">
                  </div>
                  <div class="body">
                    <h3 class="margin-clear">Deep Sea</h3>
                    <small>Kingfish, Dolphin, Tuna, Wahoo</small>
                    <div class="separator mt-10"></div>
                    <ul class="list-icons text-left">
                      <li>Maximum of 18 migratory fish allowed on board any vessel at any time.</li>
                      <li>&nbsp;</li>
                      <li>&nbsp;</li>
                    </ul>
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Deep_sea_fish" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
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
                          @include('partials.season_open', ['text'=>'Annual closed season: <br />April 1 – July 31'])
                        @else
                          @include('partials.season_closed', ['text'=>'Annual closed season: <br />April 1 – July 31'])
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
                    <img src="{{cloudinary('c_scale,w_500/v1511445762/species/bonefish')}}.png" alt="">
                  </div>
                  <div class="body">
                    <h3 class="margin-clear">Bonefish</h3>
                    <small>Inc. Tarpon</small>
                    <div class="separator mt-10"></div>
                    <ul class="list-icons text-left">
                      <li>Purchase, sale, and/or netting are prohibited</span></li>
                      <li>Barbless hooks and release of any catch.</li>
                      <li><a href="http://www.bahamas.com/sites/default/files/flat_fishing_regulations_.pdf">Read Flyfishing Regulations</a></li>
                    </ul>
                    <a target="_blank" href="https://en.wikipedia.org/wiki/Bonefish" class="btn btn-lg-link link-light"><i class="pr-10 fa fa-search"></i>More Info</a>
                  </div>
            </div>
          </div>

        </div>


      </div>
  </section>

  @include('partials.warning_banner')
  <a name="gear"></a>
  <a name="permits"></a>
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
