<?php include('headernone.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	$qry2=mysqli_query($con,"select * from app_movie where movie_id='".$_SESSION['movie']."'");
	$movie=mysqli_fetch_array($qry2);
	?>

<body>


    <!-- ==========Banner-Section========== -->
    <section class="details-banner bg_img" data-background="./assets/images/banner/banner03.jpg"
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
            <!--    <a href="#" class="custom-button">book tickets</a> -->
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
                                    <p>Win Cashback Upto $S 25*</p>
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
                                        get 100% cashback up to $S. 20</p>
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

            <table class="table table-hover table-bordered text-center">
                <?php
								$s=mysqli_query($con,"select * from app_show where s_id='".$_SESSION['show']."'");
								$shw=mysqli_fetch_array($s);
								
									$t=mysqli_query($con,"select * from app_cinemas where cinema_id='".$shw['cinema_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
                <tr>
                    <td class="col-md-6" style="color:white;">
                        Theatre
                    </td>
                    <td style="color:white;">
                        <?php echo $theatre['name'].", ".$theatre['place'];?>
                    </td>
                </tr>
                <tr>
                    <td style="color:white;">
                        Screen
                    </td>
                    <td style="color:white;">
                        <?php 
							$ttm=mysqli_query($con,"select  * from app_time_slot where st_id='".$shw['st_id']."'");
							$ttme=mysqli_fetch_array($ttm);
							$sn=mysqli_query($con,"select  * from app_hall where screen_id='".$ttme['screen_id']."'");
							$screen=mysqli_fetch_array($sn);
							echo $screen['screen_name'];
						    ?>
                    </td>
                </tr>
                <tr>
                    <td style="color:white;">
                        Date
                    </td>
                    <td style="color:white;">
                        <?php 
							if(isset($_GET['date']))
							{
								$date=$_GET['date'];
							}
							else
							{
								if($shw['start_date']>date('Y-m-d'))
								{
									$date=date('Y-m-d',strtotime($shw['start_date'] . "-1 days"));
								}
								else
								{
									$date=date('Y-m-d');
								}
								$_SESSION['dd']=$date;
							}
							?>
                        <div class="col-md-12 text-center" style="padding-bottom:20px;">
                            <?php if($date>$_SESSION['dd']){?>
                                <a href="movie_booking.php?date=<?php echo date('Y-m-d',strtotime($date . "-1 days"));?>">
                                    <button class="btn btn-default" >
                                        <i class="glyphicon glyphicon-chevron-left" style="color:white;"><</i>
                                    </button>
                                </a> <?php } ?>
                                <span style="cursor:default;color:white;" class="btn btn-default"><?php echo date('d-M-Y',strtotime($date));?></span>
                            <?php if($date!=date('Y-m-d',strtotime($_SESSION['dd'] . "+4 days"))){?>
                                <a href="movie_booking.php?date=<?php echo date('Y-m-d',strtotime($date . "+1 days"));?>">
                                    <button class="btn btn-default">
                                        <i class="glyphicon glyphicon-chevron-right" style="color:white;">></i>
                                    </button>
                                </a>
                            <?php }
								$av=mysqli_query($con,"select sum(no_seats) from app_booking where show_id='".$_SESSION['show']."' and ticket_date='$date'");
								$avl=mysqli_fetch_array($av);
								?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="color:white;">
                        Show Time
                    </td>
                    <td style="color:white;">
                        <?php echo date('h:i A',strtotime($ttme['start_time']))." ".$ttme['name'];?> Show
                    </td>
                </tr>
                <tr>
                    <td style="color:white;">
                        Number of Seats
                    </td>
                    <td style="color:white;">
                        <form action="movie_process_booking.php" method="post">
                            <input type="hidden" name="screen" value="<?php echo $screen['screen_id'];?>" />
                            <input type="number" required tile="Number of Seats"
                                max="<?php echo $screen['seats']-$avl[0];?>" min="0" name="seats" class="form-control"
                                value="1" style="text-align:center" id="seats" />
                            <input type="hidden" name="amount" id="hm" value="<?php echo $screen['charge'];?>" />
                            <input type="hidden" name="date" value="<?php echo $date;?>" />
                    </td>
                </tr>
                <tr>
                    <td style="color:white;">
                        Amount
                    </td>
                    <td id="amount" style="font-weight:bold;color:white;">
                        S$ <?php echo $screen['charge'];?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><?php if($avl[0]==$screen['seats']){?>
                        <button type="button" class="btn btn-danger"
                            style="width:100%">House Full</button><?php } else { ?>
                        <button class="btn btn-info" style="width:25%">Book Now</button>
                        <?php } ?>
                        </form>
                    </td>
                </tr>
            </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ==========Movie-Section========== -->


    <?php include('footer.php');?>

    <script src="./assets/js/script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript">
    $('#seats').change(function() {
        var charge = <?php echo $screen['charge'];?>;
        amount = charge * $(this).val();
        $('#amount').html("$S " + amount);
        $('#hm').val(amount);
    });
    </script>
</body>
