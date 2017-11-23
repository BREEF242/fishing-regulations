
<header class="header fixed fixed-desktop clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-auto hidden-md-down pl-3">
                <!-- header-first start -->
                <!-- ================ -->
                <div class="header-first clearfix">

                    <!-- logo -->
                    <div id="logo" class="logo">
                        <a href="/"><img id="logo_img" src="{{cloudinary('misc/bs-tourism-logo')}}.png" alt="Fishing Regulations" style="max-height: 4em; margin-bottom: 10px;">
                        </a>
                    </div>

                    <!-- name-and-slogan -->


                </div>
                <!-- header-first end -->

            </div>
            <div class="col-lg-8 ml-lg-auto">

                <!-- header-second start -->
                <!-- ================ -->
                <div class="header-second clearfix">

                    <div class="main-navigation main-navigation--mega-menu  animated">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <div class="navbar-brand clearfix hidden-lg-up">

                                <!-- logo -->
                                <div id="logo-mobile" class="logo">
                                    <a href="/"><img id="logo-img-mobile" src="{{cloudinary('misc/bs-tourism-logo')}}.png" alt="">
                                    </a>
                                </div>

                            </div>

                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                <!-- main-menu -->
                                <ul class="navbar-nav ml-xl-auto">

                                   <li class="nav-item dropdown {{isset($section) && $section == 'sports' ? 'active': ''}}">
                                      <a href="{{route('sports')}}" class="nav-link dropdown-toggle" id="sports-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="location.href=this.href;">
                                        <span class="label nav-label text-primary">VISITORS</span>
                                        <span class="nav-text clearfix">Sport Fishing</span>
                                        </a>
                                      <ul class="dropdown-menu" aria-labelledby="sports-dropdown">
                                        <li ><a title="Gear Rules & Methods" href="{{route('sports')}}#gear">Gear Rules &amp; Methods</a></li>
                                        <li ><a title="Protected Species" href="{{route('sports')}}#protected">Protected Species</a></li>
                                        <li ><a title="Permits &amp; Licenses" href="{{route('sports')}}#permits">Permits &amp; Licenses</a></li>
                                        <li ><a title="Catch Limits &amp; Closed Seasons" href="{{route('sports')}}#limits">Catch Limits &amp; Closed Seasons</a></li>
                                      </ul>
                                    </li>

                                    <li class="nav-item dropdown {{isset($section) && $section == 'recreational' ? 'active': ''}}">
                                       <a href="{{route('recreational')}}" class="nav-link dropdown-toggle" id="recreational-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="location.href=this.href;">
                                         <span class="label nav-label text-success">BAHAMIANS &amp; RESIDENTS</span>
                                         <span class="nav-text">Recreational Fishing</span></a>
                                       <ul class="dropdown-menu" aria-labelledby="recreational-dropdown">
                                         <li ><a title="Important Information" href="{{route('recreational')}}#important">Important Information</a></li>
                                         <li ><a title="Protected Species" href="{{route('recreational')}}#protected">Protected Species</a></li>
                                         <li ><a title="Catch Limits &amp; Closed Seasons" href="{{route('recreational')}}#limits">Catch Limits &amp; Closed Seasons</a></li>
                                       </ul>
                                     </li>

                                     <li class="nav-item dropdown {{isset($section) && $section == 'commercial' ? 'active': ''}}">
                                        <a href="{{route('commercial')}}" class="nav-link dropdown-toggle" id="commercial-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onClick="location.href=this.href;">
                                          <span class="label  nav-label text-warning">BAHAMIANS</span>
                                          <span class="nav-text">Commercial Fishing</span>

                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="commercial-dropdown">
                                          <li ><a title="Protected Species" href="{{route('commercial')}}#protected">Protected Species</a></li>
                                          <li ><a title="Catch Limits &amp; Closed Seasons" href="{{route('commercial')}}#limits">Catch Limits &amp; Closed Seasons</a></li>
                                        </ul>
                                      </li>

                                </ul>
                                <!-- main-menu end -->
                            </div>
                        </nav>
                    </div>
                    <!-- main-navigation end -->
                </div>
                <!-- header-second end -->

            </div>

        </div>
    </div>
</header>
