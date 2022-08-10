<?php include('headernone.php');
	$qry2=mysqli_query($con,"select * from app_movie where movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
    $s=mysqli_query($con,"select DISTINCT cinema_id from app_show where movie_id='".$movie['movie_id']."'");
    $s1=mysqli_query($con,"select DISTINCT cinema_id from app_show where movie_id='".$movie['movie_id']."'");
	?>


<body>

    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background=""
        style="background-image: url(&quot;./assets/images/banner/banner03.jpg&quot;);">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-thumb">
                    <img src="<?php echo $movie['image']; ?>" alt="movie">
                    <a href="https://www.youtube.com/embed/KGeBMAgc46E" class="video-popup">
                        <img src="images/video-button.png" alt="movie">
                    </a>
                </div>
                <div class="details-banner-content offset-lg-3">
                    <h3 class="title"><?php echo $movie['movie_name']; ?></h3>
                    <div class="tags">
                        <a href="#"><?php echo $movie['language']; ?></a>
                    </div>
                    <a href="<?php echo $movie['video_url']; ?>" class="button">Trailer</a>
                    <div class="social-and-duration">
                        <div class="duration-area">
                            <div class="item">
                                <i class=""></i><span><?php echo $movie['release_date']; ?></span>
                            </div>
                            <div class="item">
                                <i class=""></i><span><?php echo $movie['duration']; ?> mins</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Book-Section========== -->
    <section class="book-section bg-one">
        <div class="container">
            <div class="book-wrapper offset-lg-3">
                <div class="left-side">
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="images/tomato2.png" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer odometer-auto-theme" data-odometer-final="88">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">88</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">8</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">88</span></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p>tomatometer</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="thumb">
                                <img src="images/cake2.png" alt="movie">
                            </div>
                            <div class="counter-area">
                                <span class="counter-item odometer odometer-auto-theme" data-odometer-final="88">
                                    <div class="odometer-inside"><span class="odometer-digit"><span
                                                class="odometer-digit-spacer">88</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">88</span></span></span></span></span><span
                                            class="odometer-digit"><span class="odometer-digit-spacer">88</span><span
                                                class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                        class="odometer-ribbon-inner"><span
                                                            class="odometer-value">88</span></span></span></span></span>
                                    </div>
                                </span>
                            </div>
                        </div>
                        <p>audience Score</p>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <h5 class="title">4.5</h5>
                        </div>
                        <p>Users Rating</p>
                    </div>
                </div>
                <?php 
                while($shw1=mysqli_fetch_array($s1))
                {
                 //print_r($shw1['cinema_id']);
                 //print_r(mysqli_query($con,"select * from app_cinemas where cinema_id='".$shw1['cinema_id']."'"));
                 $t1=mysqli_query($con,"select * from app_cinemas where cinema_id='".$shw1['cinema_id']."'");
                 $theatre1=mysqli_fetch_array($t1);
                 $tr1=mysqli_query($con,"select * from app_show where movie_id='".$movie['movie_id']."' and cinema_id='".$shw1['cinema_id']."'");
                 while($shh1=mysqli_fetch_array($tr1))
                 {
                 $ttm1=mysqli_query($con,"select  * from app_time_slot where st_id='".$shh1['st_id']."'");
                 $ttme1=mysqli_fetch_array($ttm1);  
                ?>
                <a href="check_login.php?show=<?php echo $shh1['s_id'];?>&movie=<?php echo $shh1['movie_id'];?>&theatre=<?php echo $shw1['cinema_id'];?>" class="custom-button">
                   book tickets
                </a>
                <?php } } ?>
            </div>
        </div>
    </section>
    <!-- ==========Book-Section========== -->

    <!-- ==========Movie-Section========== -->
    <section class="movie-details-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center flex-wrap-reverse mb--50">
                <div class="col-lg-3 col-sm-10 col-md-6 mb-50">
                    <div class="widget-1 widget-tags">
                        <ul>
                            <li>
                                <a href="#">2D</a>
                            </li>
                            <li>
                                <a href="#">imax 2D</a>
                            </li>
                            <li>
                                <a href="#">4DX</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget-1 widget-offer">
                        <h3 class="title">Applicable offer</h3>
                        <div class="offer-body">
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="images/offer01.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">Amazon Pay Cashback Offer</a>
                                    </h6>
                                    <p>Win Cashback Upto S$ 25*</p>
                                </div>
                            </div>
                            <div class="offer-item">
                                <div class="thumb">
                                    <img src="images/offer02.png" alt="sidebar">
                                </div>
                                <div class="content">
                                    <h6>
                                        <a href="#">PayPal Offer</a>
                                    </h6>
                                    <p>Transact first time with Paypal and
                                        get 100% cashback up to S$. 20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 mb-50">
                    <div class="movie-details">
                        <div class="tab summery-review">
                            <ul class="tab-menu">
                                <li class="active">
                                    summery
                                </li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item active">
                                    <div class="item">
                                        <h5 class="sub-title">Synopsis</h5>
                                        <p><?php echo $movie['desc']; ?></p>
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="header">
                                    </div>
                                </div>
                                <div class="tab-item active">
                                    <div class="item">
                                        <h5 class="sub-title">Cast</h5>
                                        <p><?php echo $movie['cast']; ?></p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="header">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="header">
                                        <h5 class="sub-title">shows</h5>
                                    </div>
                                    <?php if(mysqli_num_rows($s))
	                                    {
                                        ?>
                                    <table class="table table-hover table-bordered text-center">
                                        <h6 style="color:#31d7a9;">Available Shows</h6>
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="font-size:16px; color:white;"><b>Theatre</b></th>
                                                <th class="text-center" style="font-size:16px; color:white;"><b>Show Timings</b></th>
                                            </tr>
                                        </thead>
                                        <?php					
                                        while($shw=mysqli_fetch_array($s))
                                        {
                                         $t=mysqli_query($con,"select * from app_cinemas where cinema_id='".$shw['cinema_id']."'");
                                         $theatre=mysqli_fetch_array($t);
                                         ?>


                                        <tbody>
                                            <tr>
                                                <td style="color:white;">
                                                    <?php echo $theatre['name'].", ".$theatre['place'];?>
                                                </td>
                                                <td style="color:white;">
                                                    <?php $tr=mysqli_query($con,"select * from app_show where movie_id='".$movie['movie_id']."' and cinema_id='".$shw['cinema_id']."'");
                                                    while($shh=mysqli_fetch_array($tr))
                                                      {
                                                        $ttm=mysqli_query($con,"select  * from app_time_slot where st_id='".$shh['st_id']."'");
                                                        $ttme=mysqli_fetch_array($ttm);  
                                                        ?>

                                                    <a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>&theatre=<?php echo $shw['cinema_id'];?>">
                                                        <button
                                                            class="btn btn-default" style="color:white;"><?php echo date('h:i A',strtotime($ttme['start_time']));?>
                                                        </button>
                                                    </a>
                                                    <?php
                                                    }
                                                     ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php
                                        }
                                        ?>
                                    </table>
                                    <?php
                                    }
                                    else
                                    {
                                    ?>
                                    <h3 style="color:white; font-size:23px;" class="text-center">Currently there are no
                                        any shows available!</h3>
                                    <p></p>
                                    <p class="text-center">Please check back later!</p>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ==========Movie-Section========== -->

    <?php include('footer.php');?>

</body>
<script>
  var loader = document.getElementById("preloader");
  window.addEventListener("load", function(){
    loader.style.display = "none";
  })
</script>