
    <?php
include('header.php');
?>


<!-- saved from url=(0047)# -->
<head>
    
    
<!--
  <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 

    <link rel="stylesheet" href="css/main.css">
-->
</head>

    <!-- ==========Movie-Section========== -->
<!--     <section class="movie-section1 padding-top padding-bottom"> -->
<!--    <section class="movie-section"> -->
    <section class="movie-section padding-top padding-bottom">

<!--        <div class="container"> -->
            <div class="row flex-wrap-reverse justify-content-center">
                 <div class="col-lg-9 mb-50 mb-lg-0">
                    <div class="filter-tab tab">
                        <div class="tab-area">
                        <?php
          	              $today=date("Y-m-d");
          	              $qry2=mysqli_query($con,"select * from  app_movie where status = 0 ");
		
                       	  while($m=mysqli_fetch_array($qry2))
                          {
                         ?>
                            <div class="tab-item active">
                                <div class="movie-area mb-10">
                                    <div class="movie-list">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie_details.php?id=<?php echo $m['movie_id'];?>">
                                               <img src="<?php echo $m['image'];?>"" alt="">
                                            </a>
                                        </div>
                                        <?php    ?>
                                        <div class="movie-content bg-one">
                                            <h5 class="title">
                                              <a href="movie_details.php?id=<?php echo $m['movie_id'];?>" style="text-decoration:none;"><?php echo $m['movie_name'];?></a>
                                            </h5>
                                            <p class="duration"><?php echo $m['duration'];?> mins</p>
                                            <!--
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">fantasy</a>
                                            </div>
                                            -->
                                            <div class="release">
                                                <span>Release Date : <?php echo date('d-M-Y',strtotime($m['release_date'])); ?></span>
                                            </div>
                                            <div class="movie-text">
						                              		  <span>Cast : <?php echo $m['cast'];?></span><br>						  		
						  	                           </div>
                                            <ul class="movie-rating-percent">
                                                <li>
                                                    <div class="thumb">
                                                        <img src="images/tomato.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                                <li>
                                                    <div class="thumb">
                                                        <img src="images/cake.png" alt="movie">
                                                    </div>
                                                    <span class="content">88%</span>
                                                </li>
                                            </ul>
                                            <div class="book-area">
                                                <div class="book-ticket">
                                                    <div class="react-item">
                                                        <a href="movie_details.php?id=<?php echo $m['movie_id'];?>">
                                                            <div class="thumb">
                                                                <img src="images/heart.png" alt="icons">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="react-item mr-auto">
                                                        <a href="movie_details.php?id=<?php echo $m['movie_id'];?>">
                                                            <div class="thumb">
                                                                <img src="images/book.png" alt="icons">
                                                            </div>
                                                            <span>book ticket</span>
                                                        </a>
                                                    </div>
                                                    <div class="react-item">
                                                        
                                                        <a href="<?php echo $m['video_url']; ?>" target="_blank" class="watch_but" style="text-decoration:none;">
                                                            <div class="thumb">
                                                                <img src="images/play-button.png" alt="icons">
                                                            </div>
                                                            <span>watch trailer</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
  	    	}
  	    	?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section> 
    <!-- ==========Movie-Section========== -->

    <?php include('footer.php');?>

