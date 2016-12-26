<!-- section start -->
<!-- ================ -->
<section class="section dark-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title">Носталгија травел | Еднаш со Нас, Секогаш со Нас</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<section class="pv-30 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="block clearfix">
                    <h3 class="title">Актуелно </h3>
                    <div class="separator-2"></div>
                    <div class="media margin-clear">
                        <?php
                        /*top 5 najcitani vesti od baza */
                        $results4 = mysqli_query($con, "SELECT * FROM tekst ORDER BY views DESC LIMIT 4");
                        while ($row4 = mysqli_fetch_array($results4)) {
                            $id4 = $row4['id'];
                            $description4 = $row4['rte'];
                            $title4 = $row4['title'];
                            $image4 = $row4['slika'];
                            $kategorija4 = $row4['type'];
                            $date4 = $row4['date'];
                            $drzava4 = $row4['drzava'];
                            echo '  <div class="media-left">
            <div class="overlay-container">';
                            if (!($image4 = $row4['slika'])) {
                            } else {
                                echo ' <img class="media-object" src="http://dev.nostalgijatravel.mk/' . $image4 . '" width="200" height="200" alt="' . $title4 . '" class="img-responsive img-rounded">';
                            }
                            echo '<a href="/story/' . $row4['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
            </div>
        </div>
        <div class="media-body">';
                            $kopche4 = '... ';
                            $description4 = truncate($description4, $length = '200', $kopche4, '', 'true');
                            echo '<h6 class="media-heading"><a href="/story/' . $row4['id'] . '/">' . $title4 . '</a></h6>
            <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $drzava4 . '</p>
        </div>
        <hr>
        ';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="block clearfix">
                    <h3 class="title">По случаен избор</h3>
                    <div class="separator-2"></div>
                    <div class="media margin-clear">
                        <?php
                        /*top 5 najcitani vesti od baza */
                        $results5 = mysqli_query($con, "SELECT * FROM tekst ORDER BY RAND() LIMIT 4");
                        while ($row5 = mysqli_fetch_array($results5)) {
                            $id5 = $row5['id'];
                            $description5 = $row5['rte'];
                            $title5 = $row5['title'];
                            $image5 = $row5['slika'];
                            $kategorija5 = $row5['type'];
                            $date5 = $row5['date'];
                            $drzava5 = $row5['drzava'];
                            echo '  <div class="media-left">
            <div class="overlay-container">';
                            if (!($image5 = $row5['slika'])) {
                            } else {
                                echo ' <img class="media-object" src="http://dev.nostalgijatravel.mk/' . $image5 . '" width="200" height="200" alt="' . $title5 . '" class="img-responsive img-rounded">';
                            }
                            echo '<a href="/story/' . $row5['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
            </div>
        </div>
        <div class="media-body">';
                            $kopche5 = '... ';
                            $description5 = truncate($description5, $length = '200', $kopche5, '', 'true');
                            echo '<h6 class="media-heading"><a href="/story/' . $row5['id'] . '/">' . $title5 . '</a></h6>
            <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $drzava5 . '</p>
        </div>
        <hr>
        ';
                        }
                        ?>
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="block clearfix">
                    <h3 class="title">Најпродавани</h3>
                    <div class="separator-2"></div>
                    <div class="media margin-clear">
                        <?php
                        /*top 5 najcitani vesti od baza */
                        $results6 = mysqli_query($con, "SELECT * FROM tekst ORDER BY views DESC LIMIT 4");
                        while ($row6 = mysqli_fetch_array($results6)) {
                            $id6 = $row6['id'];
                            $description6 = $row6['rte'];
                            $title6 = $row6['title'];
                            $image6 = $row6['slika'];
                            $kategorija6 = $row5['type'];
                            $date6 = $row6['date'];
                            $drzava6 = $row6['drzava'];
                            echo '  <div class="media-left">
            <div class="overlay-container">';
                            if (!($image6 = $row6['slika'])) {
                            } else {
                                echo ' <img class="media-object" src="http://dev.nostalgijatravel.mk/' . $image6 . '" width="200" height="200" alt="' . $title6 . '" class="img-responsive img-rounded">';
                            }
                            echo '<a href="/story/' . $row6['id'] . '/" class="overlay-link small"><i class="fa fa-link"></i></a>
            </div>
        </div>
        <div class="media-body">';
                            $kopche6 = '... ';
                            $description6 = truncate($description6, $length = '200', $kopche6, '', 'true');
                            echo '<h6 class="media-heading"><a href="/story/' . $row5['id'] . '/">' . $title6 . '</a></h6>
            <p class="small margin-clear"><i class="fa fa-calendar pr-10"></i>' . $drzava6 . '</p>
        </div>
        <hr>
        ';
                        }
                        ?>

                    </div>

            </div>
        </div>
    </div>
</section>
<!-- section end -->
<!-- section start -->
<!-- ================ -->
<section class="section dark-bg">
    <div class="container">
        <div class="row grid-space-10">
            <div class="col-md-3 col-sm-6">
                <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="100">
                    <span class="icon default-bg"><i class="icon-globe"></i></span>
                    <h3>Авио билети</h3>
                    <div class="separator clearfix"></div>
                    <p></p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="150">
                    <span class="icon default-bg"><i class="icon-lock"></i></span>
                    <h3>Осигурување</h3>
                    <div class="separator clearfix"></div>
                    <p></p>
                </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-md-3 col-sm-6">
                <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="200">
                    <span class="icon default-bg"><i class="icon-direction"></i></span>
                    <h3 class="pl-10 pr-10">Рентакар</h3>
                    <div class="separator clearfix"></div>
                    <p></p>
            </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="pv-30 ph-20 feature-box text-center object-non-visible"
                     data-animation-effect="fadeInDownSmall" data-effect-delay="250">
                    <span class="icon default-bg"><i class="icon-thumbs-up"></i></span>
                    <h3>Услуги</h3>
                    <div class="separator clearfix"></div>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="call-to-action text-center">

                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->