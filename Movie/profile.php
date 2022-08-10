<?php include('headernone.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
    
	//$qry2=mysqli_query($con,"select * from app_movie where movie_id='".$_SESSION['movie']."'");
	//$movie=mysqli_fetch_array($qry2);
	?>

    <!-- ==========Banner-Section========== -->
<!--
    <section class="details-banner hero-area bg_img seat-plan-banner" data-background="./assets/images/banner/banner04.jpg">
        <div class="container">
            <div class="details-banner-wrapper">
                <div class="details-banner-content style-two">
                    <h3 class="title">Welcome Back</h3>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- ==========Banner-Section========== -->

    <!-- ==========Page-Title========== -->
<!--
    <section class="page-title bg-one">
        <div class="container">
            <div class="page-title-area">
                <div class="item date-item">
                    <span class="date">MON, SEP 09 2020</span>
                </div>
                <div class="item">
                    <h5 class="title">05:00</h5>
                </div>
            </div>
        </div>
    </section>
-->
    <!-- ==========Page-Title========== -->

    <!-- ==========Movie-Section========== -->
    <div class="seat-plan-section padding-top">
        <div class="container">
            <div class="screen-area">
                <h4 class="screen">Booking History</h4>
                <div class="screen-thumb">
                    <img src="images/screen.png" alt="movie">
                </div>
            </div>
        </div>
    </div>

	


	<section class="movie-section padding-bottom bg-two">
<div class="container">
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from app_booking where user_id='".$_SESSION['user']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table class="table table-bordered">
						<thead>
						<th style="color:#31d7a9;">Booking Id</th>
						<th style="color:#31d7a9;">Movie</th>
						<th style="color:#31d7a9;">Cinema</th>
						<th style="color:#31d7a9;">Screen</th>
						<th style="color:#31d7a9;">Show</th>
						<th style="color:#31d7a9;">Ticket</th>
						<th style="color:#31d7a9;">Seat</th>
						<th style="color:#31d7a9;">Amount</th>
						<th style="color:#31d7a9;">Date</th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"select * from app_movie where movie_id=(select movie_id from app_show where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($con,"select * from app_hall where screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($con,"select * from app_cinemas where cinema_id='".$bkg['cinema_id']."'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($con,"select * from app_time_slot where st_id=(select st_id from app_show where s_id='".$bkg['show_id']."')");
							$stm=mysqli_fetch_array($st);
							?>
							<tr>
								<td style="color:white;">
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td style="color:white;">
									<?php echo $mov['movie_name'];?>
								</td>
								<td style="color:white;">
									<?php echo $thr['name'];?>
								</td>
								<td style="color:white;">
									<?php echo $srn['screen_name'];?>
								</td>
								<td style="color:white;">
									<?php echo $stm['name'];?>
								</td>
								<td style="color:white;">
							    	<?php echo $bkg['no_seats'];?>
								</td>
								<td style="color:white;">
							    	<?php echo $bkg['seatnum'];?>
								</td>
								<td style="color:white;">
									S$ <?php echo $bkg['amount'];?>
								</td>
								<td style="color:white;">
									<?php echo $bkg['ticket_date'];?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h3 style="color:red;" class="text-center">No Previous Bookings Found!</h3>
					<p> </p>
					<p> </p>
					<p> </p>
					<?php
				}
				?>
					</div>			
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>

<?php include('footer.php');?>
<script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script>