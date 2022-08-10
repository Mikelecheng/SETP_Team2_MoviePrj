<?php include('headernone.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
<link rel="stylesheet" href="css/movie.css" type="text/css" media="all" />

<?php
    /*print_r($_SESSION);*/
	$bk=mysqli_query($con,"select * from app_booking where ticket_id='".$_SESSION['bookid']."'");
    /*print_r($bk);*/
    if(mysqli_num_rows($bk)) {
        $bkg=mysqli_fetch_array($bk);
        $m=mysqli_query($con,"select * from app_movie where movie_id=(select movie_id from app_show where s_id='".$bkg['show_id']."')");
        $mov=mysqli_fetch_array($m);
        $s=mysqli_query($con,"select * from app_hall where screen_id='".$bkg['screen_id']."'");
        $srn=mysqli_fetch_array($s);
        $tt=mysqli_query($con,"select * from app_cinemas where cinema_id='".$bkg['cinema_id']."'");
        $thr=mysqli_fetch_array($tt);
        $st=mysqli_query($con,"select * from app_time_slot where st_id=(select st_id from app_show where s_id='".$bkg['show_id']."')");
        $stm=mysqli_fetch_array($st);
    }
    
 ?>

<section>
<div class="movie-facility padding-bottom padding-top">
    <div style = "width:75%; margin: auto;text-align: center;background-color:red;color:Tomato;">
    <?php include('msgbox.php');?>
    </div>
    <div class="booking-summery bg-one">
        <h4 class="title">booking details</h4>
        <ul>
            <li>
                <h6 class="subtitle"><span>Booking ID</span><span>Date</span></h6>
                <div class="info">
                <span class="info"><?php echo $_SESSION['bookid'];?></span>
                <span class="info"><?php echo $_SESSION['date'];?></span>
                </div>
            </li>
            <li>
                <h6 class="subtitle"><span>Theatre</span><span>Screen</span></h6>
                <div class="info"><span><?php echo $thr['name'];?></span> <span><?php echo $srn['screen_name'];?></span></div>
            </li>
            <!--
            <li>
                <h6 class="subtitle mb-0"><span><?php echo $srn['screen_name'];?></span><span><?php echo $stm['name'];?></span></h6>
            </li>
-->
        </ul>
        <ul class="side-shape">
            <li>
                <h6 class="subtitle"><span>Screen</span><span>Show</span></h6>
                <div class="info"><span><?php echo $srn['screen_name'];?></span> <span><?php echo $stm['name'];?></span></div>
            <!--    <span class="info"><span>2 Nachos Combo</span></span> -->
            </li>
            <li>
                <h6 class="subtitle"><span>Movie</span><span>Seat</span></h6>
                <div class="info"><span><?php echo $mov['movie_name'];?></span><span><?php echo $bkg['seatnum'];?></span></div>
            </li>
        </ul>

        <ul >
            <li>
                <h6 class="subtitle"><span>Ticket Price</span><span>$<?php echo $bkg['amount'];?></span></h6>
            </li>

        </ul>
    </div>
</div>
</section>
    <?php include('footer.php');?>