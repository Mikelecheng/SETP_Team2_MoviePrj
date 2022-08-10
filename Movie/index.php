<html>

<body>
    <?php
include('header.php');
?>

    <body>
        <!-- ==========Banner-Section========== -->
        <section class="banner-section">
            <div class="banner-bg bg_img bg-fixed"></div>
            <div class="container">
                <div class="banner-content">
                    <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for
                        <span class="color-theme cd-words-wrapper p-0 m-0" style="width: 278.375px;">
                            <b class="is-visible">Movie</b>
                            <b class="is-hidden"></b>
                        </span>
                    </h1>
                    <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
                </div>
            </div>
        </section>
        <!-- ==========Banner-Section========== -->

        <!-- ==========Ticket-Search========== -->
        <section class="search-ticket-section padding-top pt-lg-0">
            <div class="container">
                <div class="search-tab bg_img">
                    <div class="row align-items-center mb--20">
                        <div class="col-lg-6 mb-20">
                            <div class="search-ticket-header">
                                <h6 class="category">welcome to KAPLAN SETP Team 2 </h6>
                                <h3 class="title">what are you looking for</h3>
                            </div>
                        </div>
                    </div>
                    <div class="tab-area">
                        <div class="tab-item active">
                            <form class="ticket-search-form" action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
                                <div class="form-group large">
                                    <input type="text" placeholder="Search fo Movies" name="search">
                                </div>
                                <div class="form-group large" style="width: 40%;">
                                    <input type="submit" value="Search" class="custom-button">
                                </div>
                            </form>
                        </div>
                        <!--
                        <div class="tab-item active">
                            <form class="ticket-search-form" action="process_search.php" id="reservation-form" method="post">
                            <fieldset>
                                    <div class="field">
                                        <input type="text" placeholder="Search fo Movies"
                                            style="height:30px;width:300px" required id="search" name="search">

                                        <input type="submit" value="Search" style="height:34px;padding-top:3px"
                                            id="button">
                                    </div>
                                </fieldset>
                            </form>
                            
                            <form action="process_search.php" id="reservation-form" method="post"
                                onsubmit="myFunction()">
                                <fieldset>
                                    <div class="field">
                                        <input type="text" placeholder="Search fo Movies"
                                            style="height:30px;width:300px" required id="search" name="search">

                                        <input type="submit" value="Search" style="height:34px;padding-top:3px"
                                            id="button111">
                                    </div>

                                </fieldset>
                            </form>
                            </div>
                            -->
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- ==========Ticket-Search========== -->

        <!-- ==========Movie-Main-Section========== -->
        <section class="movie-section padding-top padding-bottom bg-two">
            <div class="container">
                <div class="row flex-wrap-reverse justify-content-center">
                    <div class="col-lg-3 col-sm-10  mt-50 mt-lg-0">
                        <div class="widget-1 widget-facility">
                            <div class="widget-1-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="img"><img src="images/sidebar01.png" alt="sidebar"></span>
                                            <span class="cate">24X7 Care</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="img"><img src="images/sidebar02.png" alt="sidebar"></span>
                                            <span class="cate">100% Assurance</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="img"><img src="images/sidebar03.png" alt="sidebar"></span>
                                            <span class="cate">Our Promise</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="article-section padding-bottom">
                            <div class="section-header-1">
                                <h2 class="title">living</h2>
                                <a class="view-all" href="movie_list.php">View All</a>
                            </div>
                            <div class="row mb-30-none justify-content-center">
                                <?php
                            $today=date("Y-m-d");
          	                $qry2=mysqli_query($con,"select * from  app_movie where status='0' order by rand() limit 3");
          	                while($m=mysqli_fetch_array($qry2))
                            {
                            ?>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="movie_details.php?id=<?php echo $m['movie_id'];?>">
                                                <img src="<?php echo $m['image'];?>" alt="movie" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="movie_details.php?id=<?php echo $m['movie_id'];?>">
                                                    <?php echo $m['movie_name'];?>
                                                </a>
                                            </h5>
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
                                        </div>
                                    </div>
                                </div>
                                <?php }  ?>
                            </div>
                        </div>
                        <div class="article-section padding-bottom">
                            <div class="section-header-1">
                                <h2 class="title">upcoming</h2>
                                <a class="view-all" href="movie_upcome_list.php">View All</a>
                            </div>
                            <div class="row mb-30-none justify-content-center">
                                <?php
                            $today=date("Y-m-d");
                            $qry3=mysqli_query($con,"SELECT * FROM app_movie where status <> 0 LIMIT 3");
          	                while($n=mysqli_fetch_array($qry3))
                            {
                            ?>
                                <div class="col-sm-6 col-lg-4">
                                    <div class="movie-grid">
                                        <div class="movie-thumb c-thumb">
                                            <a href="<?php echo $n['video_url']; ?>" target="_blank">
                                                <img src="<?php echo $n['image'];?>" alt="movie">
                                            </a>
                                        </div>
                                        <div class="movie-content bg-one">
                                            <h5 class="title m-0">
                                                <a href="#">
                                                    <?php echo $n['movie_name'];?>
                                                </a>
                                            </h5>
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
                                        </div>
                                    </div>
                                </div>
                                <?php }  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    <?php include('footer.php');?>
    </div>

    <script>
    function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
}
    </script>
}