<footer id="footer" class="clearfix">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="footer-content">

                            <div class="row">
                                <div class="col-lg-6">
                                    <p class="lead">
                                        BREEF (Bahamas Reef Environment Educational Foundation) is a registered Bahamian non-profit foundation based in New Providence, Bahamas.
                                    </p>

                                    <ul class="social-links circle animated-effect-1">
                                        <li class="facebook"><a target="_blank" href="http://www.facebook.com/breef"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li class="twitter"><a target="_blank" href="http://www.twitter.com/breef242"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UC-_J4W55XDojRrdUnnCCJRQ"><i class="fa fa-youtube"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="list-icons">
                                        <li><i class="fa fa-map-marker pr-10 text-default"></i>
                                          <address>
                                                P.O. Box CB-11005, <br />Unit #11, <br />Caves Professional Center,<br /> West Bay St. & Blake Road,<br /> New Providence,<br /> The Bahamas.
                                          </address>
                                        </li>
                                        <li><i class="fa fa-phone pr-10 text-default"></i><a title="BREEF telephone number" href="tel:+12423279000">+1 242 327 9000</a>
                                        </li>
                                        <li><i class="fa fa-fax pr-10 text-default"></i><a title="BREEF fax number" href="tel:+12423279002">+1 242 327 9002</a>
                                        </li>
                                        <li><a title="BREEF email addressr" href="mailto:breef@breef.org"><i class="fa fa-envelope-o pr-10"></i>breef@breef.org</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="title">BREEF Office</h2>
                                    <br>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.010274781376!2d-77.45393518536324!3d25.067640883956575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x892f63c61ee94d27%3A0xc8d6da3552928fec!2sBahamas+Reef+Environmental+Educational+Foundation!5e0!3m2!1sen!2sbs!4v1511448931621" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-content">
                            <br />
                            <h2 class="title">Make A Donation</h2>
                            <br>
                            <div class="alert alert-success hidden-xs-up" id="MessageSent2">
                                We have received your message, we will contact you very soon.
                            </div>
                            <div class="alert alert-danger hidden-xs-up" id="MessageNotSent2">
                                Oops! Something went wrong please refresh the page and try again.
                            </div>
                            <form id="footer-form" class="margin-clear">
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="name2">Name</label>
                                    <select id="donation_project" name="wc_qd_donate_project_name" class="form-control">
                                        <option value="2166">Gift Donation</option>
                                        <option value="2138">Fish for the Future!</option>
                                        <option value="2129" selected>Helping where it is most needed</option>
                                        <option value="1464">Empowering Young Bahamian Marine Stewards</option>
                                        <option value="1436">Nurturing Bahamian Coral Reefs</option>
                                        <option value="1435">Marine Conservation Teacher Training Workshop</option>
                                    </select>
                                </div>
                                <div class="form-group has-feedback">
                                    <label class="sr-only" for="donation_price">Amount</label>
                                    <input type="number" class="form-control" id="donation_price" placeholder="$50.00" name="wc_qd_donate_project_price">
                                    <i class="fa fa-money form-control-feedback"></i>
                                </div>
                                <input type="submit" value="Send" class="margin-clear submit-button btn btn-default">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    @include('partials.bottom_strip')
    <!-- .subfooter end -->

</footer>
