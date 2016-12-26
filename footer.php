<footer id="footer" class="clearfix dark">

    <!-- .footer start -->
    <!-- ================ -->
    <div class="footer">
        <div class="container">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-content">
                            <div class="logo-footer"><img id="logo-footer" src="/images/logo.png" alt="logo"></div>
                            <h2>Вашиот вистински избор</h2>
                            <div class="icons-block mt-10 mb-10">
                                <i class="fa fa-cc-amex"></i>
                                <i class="fa fa-cc-discover"></i>
                                <i class="fa fa-cc-mastercard"></i>
                                <i class="fa fa-cc-visa"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-content">
                            <h2 class="title">Новитети</h2>
                            <div class="separator-2"></div>
                            <div class="row grid-space-10">
                                <?php
                                $dbquery = mysqli_query($con, "SELECT * FROM tekst ORDER BY id DESC LIMIT 4");
                                while ($row = mysqli_fetch_array($dbquery)) {
                                    echo '

											<div class="col-xs-4 col-md-6">
												<div class="overlay-container mb-10 footer-img">
													<img class="slika" src="http://dev.nostalgijatravel.mk/' . $row['slika'] . '" alt="' . $row['title'] . '" responsive>
													<a href="/" class="overlay-link small">
														<i class="fa fa-link"></i>
													</a>
												</div>
											</div>
											';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-content">
                            <h2 class="title">За нас</h2>
                            <div class="separator-2"></div>
                            <p>“НОСТАЛГИЈА ТРАВЕЛ“ ул. Васил Ѓоргов 20Б локал 18 (ТЦ Капиштец)</p>
                            <ul class="social-links circle animated-effect-1">
                                <li class="facebook"><a target="_blank" href="http://www.facebook.com"><i
                                                class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a target="_blank" href="http://www.twitter.com"><i
                                                class="fa fa-twitter"></i></a></li>
                                <li class="googleplus"><a target="_blank" href="http://plus.google.com"><i
                                                class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i
                                                class="fa fa-linkedin"></i></a></li>
                                <li class="xing"><a target="_blank" href="http://www.xing.com"><i
                                                class="fa fa-xing"></i></a></li>
                            </ul>
                            <div class="separator-2"></div>
                            <ul class="list-icons">
                                <li><i class="fa fa-phone pr-10 text-default"></i> +389 78 342450</li>
                                <li><i class="fa fa-phone pr-10 text-default"></i> +389 23132010</li>
                                <li><a href="mailto:info@theproject.com"><i class="fa fa-envelope-o pr-10"></i>contact@nostalgijatravel.mk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer end -->

    <!-- .subfooter start -->
    <!-- ================ -->
    <div class="subfooter">
        <div class="container">
            <div class="subfooter-inner">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyright © 2016 Nostalgija Тravel create by <a target="_blank"
                                                                                  href="https://www.facebook.com/Sefot">Zoran Shefot Bogoevski</a>.
                            All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .subfooter end -->

</footer>
<!-- footer end -->

</div>
<!-- page-wrapper end -->

<!-- JavaScript files placed at the end of the document so the pages load faster -->
<!-- ================================================== -->
<!-- Jquery and Bootstap core js files -->
<script type="text/javascript" src="/plugins/jquery.min.js"></script>
<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>

<!-- Modernizr javascript -->
<script type="text/javascript" src="/plugins/modernizr.js"></script>

<!-- jQuery Revolution Slider  -->
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Isotope javascript -->
<script type="text/javascript" src="/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- Magnific Popup javascript -->
<script type="text/javascript" src="/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Appear javascript -->
<script type="text/javascript" src="/plugins/waypoints/jquery.waypoints.min.js"></script>

<!-- Count To javascript -->
<script type="text/javascript" src="/plugins/jquery.countTo.js"></script>

<!-- Parallax javascript -->
<script src="/plugins/jquery.parallax-1.1.3.js"></script>

<!-- Contact form -->
<script src="/plugins/jquery.validate.js"></script>

<!-- Owl carousel javascript -->
<script type="text/javascript" src="/plugins/owl-carousel/owl.carousel.js"></script>

<!-- SmoothScroll javascript -->
<script type="text/javascript" src="/plugins/jquery.browser.js"></script>
<script type="text/javascript" src="/plugins/SmoothScroll.js"></script>

<!-- Initialization of Plugins -->
<script type="text/javascript" src="/js/template.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="/js/custom.js"></script>
<!-- Google analitiks-->
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '/js/analytics.js', 'ga');

    ga('create', 'UA-48071106-11', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>
<?php require 'bottom-cache.php'; ?>