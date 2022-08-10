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
          	              $qry2=mysqli_query($con,"select * from app_movie where status <> 0 order by release_date asc");
		
                       	  while($n=mysqli_fetch_array($qry2))
                          {
                         ?>
                    <div class="tab-item active">
                        <div class="movie-area mb-10">
                            <div class="movie-list">
                                <div class="movie-thumb c-thumb">
                                    <a href="<?php echo $n['video_url']; ?>" target="_blank">
                                        <img src="<?php echo $n['image'];?>"" alt="">
                                            </a>
                                        </div>
                                        <?php    ?>
                                        <div class=" movie-content bg-one">
                                        <h5 class="title">
                                            <a href="<?php echo $n['video_url']; ?>" target="_blank" style="text-decoration:none;"><?php echo $n['movie_name'];?></a>
                                        </h5>
                                        
                                        <p class="duration">Language : <?php echo $n['language']; ?></p>
                                        <!--
                                            <div class="movie-tags">
                                                <a href="#">action</a>
                                                <a href="#">adventure</a>
                                                <a href="#">fantasy</a>
                                            </div>
                                        -->
                                        <div class="release">
                                            <span>Release Date :
                                                <?php echo date('d-M-Y',strtotime($n['release_date'])); ?></span>
                                        </div>
                                        <div class="release">
                                            <span>Synopsis : <?php echo $n['desc']; ?></span>
                                        </div>
                                        <div class="release">
                                            <span>Cast : <?php echo $n['cast'];?></span><br>
                                        </div>
                                        <div class="book-area">
                                            <div class="book-ticket">
                                                <div class="react-item">
                                                    <a href="#">
                                                        <div class="thumb">
                                                            <img src="images/heart.png" alt="icons">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="react-item">

                                                    <a href="<?php echo $n['video_url']; ?>"
                                                        class="watch_but" style="text-decoration:none;" target="_blank">
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

<?php include('footer.php');?>