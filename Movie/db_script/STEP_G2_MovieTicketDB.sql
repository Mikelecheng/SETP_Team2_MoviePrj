SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+08:00";

-- Database: `STEP_G2_MovieTicketDB`

DROP DATABASE IF EXISTS STEP_G2_MovieTicketDB;

CREATE DATABASE STEP_G2_MovieTicketDB;

-- --------------------------------------------------------

USE STEP_G2_MovieTicketDB;

--

-- Table structure for table `app_booking`

--

DROP TABLE IF EXISTS APP_USER;

DROP TABLE IF EXISTS APP_MOVIE;

DROP TABLE IF EXISTS APP_BOOKING;

DROP TABLE IF EXISTS APP_SHOW;

DROP TABLE IF EXISTS APP_TIME_SLOT;

DROP TABLE IF EXISTS APP_HALL;

DROP TABLE IF EXISTS APP_CINEMAS;

CREATE TABLE
    `app_booking` (
        `book_id` int(11) NOT NULL,
        `ticket_id` varchar(30) DEFAULT NULL,
        `cinema_id` int(11) DEFAULT NULL,
        `user_id` int(11) DEFAULT NULL,
        `show_id` int(11) DEFAULT NULL,
        `screen_id` int(11) DEFAULT NULL,
        `no_seats` int(3) DEFAULT NULL,
        `amount` int(5) DEFAULT NULL,
        `ticket_date` date DEFAULT NULL,
        `date` date DEFAULT NULL,
        `status` int(1) DEFAULT NULL,
        `seatnum` varchar(60) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_booking`


-- --------------------------------------------------------
*/
--

-- Table structure for table `app_cinemas`

--

CREATE TABLE
    `app_cinemas` (
        `cinema_id` int(11) NOT NULL,
        `name` varchar(100) DEFAULT NULL,
        `address` varchar(100) DEFAULT NULL,
        `place` varchar(100) DEFAULT NULL,
        `state` varchar(50) DEFAULT NULL,
        `pin` int(11) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_cinemas`

--

INSERT INTO
    `app_cinemas` (
        `cinema_id`,
        `name`,
        `address`,
        `place`,
        `state`,
        `pin`
    )
VALUES (
        3,
        '313 Theatre',
        '8',
        'GRANGE ROAD',
        'Orchard',
        239695
    ), (
        4,
        'Grace Theater',
        '350 Shaw House',
        'Orchard Road',
        'Orchard',
        238868
    ), (
        5,
        'Love Cinemas',
        '3',
        'Temasek Boulevard',
        'Bugis',
        38983
    ), (
        6,
        'Golden Theater',
        '100 Beach Rd',
        '30A Shaw Towers Realty',
        'Buangkok',
        189702
    );

-- --------------------------------------------------------

--

-- Table structure for table `app_hall`

--

CREATE TABLE
    `app_hall` (
        `screen_id` int(11) NOT NULL,
        `cinema_id` int(11) DEFAULT NULL,
        `screen_name` varchar(110) DEFAULT NULL,
        `seats` int(11) DEFAULT NULL COMMENT 'number of seats',
        `charge` int(11) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_hall`

--

INSERT INTO
    `app_hall` (
        `screen_id`,
        `cinema_id`,
        `screen_name`,
        `seats`,
        `charge`
    )
VALUES 
(1, 3, 'Lido IMAX', 100, 15), 
(2, 3, 'Lido Hall ', 150, 16), 
(3, 4, 'Mido IMAX', 200, 16), 
(4, 14, 'Lido Prviate', 34, 17), 
(5, 6, 'Demo Screen', 150, 12), 
(6, 6, 'IMX Screen', 200, 17);

-- --------------------------------------------------------

--

-- Table structure for table `app_movie`

--

CREATE TABLE
    `app_movie` (
        `movie_id` int(11) NOT NULL,
        `cinema_id` int(11) DEFAULT NULL,
        `movie_name` varchar(255) DEFAULT NULL,
        `cast` varchar(500) DEFAULT NULL,
        `desc` varchar(1000) DEFAULT NULL,
        `release_date` date DEFAULT NULL,
        `image` varchar(200) DEFAULT NULL,
        `video_url` varchar(200) DEFAULT NULL,
        `status` int(1) DEFAULT NULL COMMENT '0 means active, 1 means upcoming',
        `duration` int(3) DEFAULT NULL,
        `language` varchar(50) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_movie`

-- Living movies

INSERT INTO
    `app_movie` (
        `movie_id`,
        `cinema_id`,
        `movie_name`,
        `cast`,
        `desc`,
        `release_date`,
        `image`,
        `video_url`,
        `status`,
        `duration`,
        `language`
    )
VALUES (
        1,
        3,
        'Bullet Train',
        'Brad Pitt, Joey King, Aaron Taylor-Johnson, Brian Tyree Henry',
        'An original movie event, Bullet Train is a fun, delirious action-thriller from the director of Deadpool 2, David Leitch. Brad Pitt headlines an ensemble cast of eclectic, diverse assassins all with connected yet conflicting objectives set against the backdrop of a non-stop ride through modern-day Japan.',
        '2022-08-04',
        'images/2022-poster-bulletrain.jpg',
        'https://www.youtube.com/watch?v=0IOsk2Vlc4o',
        0,
        127,
        'English(Sub: English, Chinese)'
    ), (
        11,
        6,
        'Love And Thunder',
        'Chris Hemsworth, Christian Bale, Tessa Thompson, Taika Waititi, Natalie Portman',
        'The film finds Thor (Chris Hemsworth) on a journey unlike anything his ever faced a quest for inner peace. But his retirement is interrupted by a galactic killer known as Gorr the God Butcher (Christian Bale), who seeks the extinction of the gods. To combat the threat, Thor enlists the help of King Valkyrie (Tessa Thompson), Korg (Taika Waititi) and ex-girlfriend Jane Foster (Natalie Portman), who to Thor surprise inexplicably wields his magical hammer, Mjolnir, as the Mighty Thor. ',
        '2022-07-07',
        'images/2022-07-07-TLAT-New-Payoff.jpg',
        'https://www.youtube.com/watch?v=Go8nTmfrQd8',
        0,
        119,
        'English(Sub: English, Chinese)'
    ), (
        12,
        6,
        'The Black Phone',
        'Mason Thames, Madeleine McGraw, Jeremy Davies, James Ransone and Ethan Hawke',
        'Finney Shaw, a shy but clever 13-year-old boy, is abducted by a sadistic killer and trapped in a soundproof basement where screaming is of little use. When a disconnected phone on the wall begins to ring, Finney discovers that he can hear the voices of the killers previous victims. And they are dead set on making sure that what happened to them doesnt happen to Finney.',
        '2022-07-21',
        'images/2022-01-27-Poster-TBP.jpg',
        'https://www.youtube.com/watch?v=3eGP6im8AZA',
        0,
        103,
        'English(Sub: Chinese)'
    ), (
        13,
        6,
        'EM Declaration',
        'Song Kang-ho, Lee Byung-hun, Kim Nam-gil, Jeon Do-yeon, Yim Si-wan',
        'Despite his phobia of flying, Jae-hyuk (Lee Byung-hun) decides to go to Hawaii for the sake of his daughters health. At the airport, he is distracted by a strange man who hangs around, speaking to them in a menacing way. Flight no. KI501 departs Incheon Airport for Hawaii, but soon afterwards a man dies for mysterious reasons. Fear and chaos spread quickly, not only inside the plane, but also on land. Hearing this news, Transport Minister Sook-hee (Jeon Do-yeon) sets up a counterterrorism task force and calls an emergency meeting in order to find a way to land the airplane.',
        '2022-08-04',
        'images/2022-08-04-Poster-EMD.jpg',
        'https://www.youtube.com/watch?v=uBcIJRuOpAY',
        0,
        140,
        'English(Sub: English, Chinese)'
    ), (
        17,
        6,
        'Detective Sleuths',
        'Charlene Choi, Sean Lau, Raymond Lam',
        'When HongKong is rocked by multiple gruesome murders, the police forms a task force to investigate. Jun (Sean Lau), once a brilliant detective who suffered a mental breakdown, begins his own investigation. Eventually, the police learn that the murder victims are all suspects of cold cases being rubbed out by a figure known as The Sleuth. Now, Jun and a detective from the task force are in a race against time to beat the brutal killer at its own game.',
        '2022-07-21',
        'images/2022-07-21-Poster-DVSS.jpg',
        'https://www.youtube.com/watch?v=v8huGX-vD4M',
        0,
        102,
        'English(Sub: English, Chinese)'
    ), (
        20,
        6,
        'The Rise Of Gru',
        'Steve Carell, Taraji P. Henson, Michelle Yeoh, Jean-Claude Van Damme, Lucy Lawless, Dolph Lundgren, Danny Trejo, Russell Brand, Julie Andrews, Alan Arkin',
        'From the biggest animated franchise in history and global cultural phenomenon comes the untold story of one 12-year-old''s dream to become the world greatest supervillain. In the 1970s, Gru (Steve Carell) is growing up in the suburbs. A fanboy of a supervillain supergroup known as the Vicious 6, Gru hatches a plan to become evil enough to join them, with the backup of his followers, the Minions. When the Vicious 6 oust their leader, Gru interviews to become their newest member. It doesnt go well (to say the least), and Gru suddenly finds himself the mortal enemy of the apex of evil.',
        '2022-06-30',
        'images/20222-06-30-Poster-Minions2.jpg',
        'https://www.youtube.com/watch?v=iGRGjZaPHRc',
        0,
        87,
        'English(Sub: Chinese)'
    );

-- --------------------------------------------------------

-- Upcoming movies

INSERT INTO
    `app_movie` (
        `movie_id`,
        `cinema_id`,
        `movie_name`,
        `cast`,
        `desc`,
        `release_date`,
        `image`,
        `video_url`,
        `status`,
        `duration`,
        `language`
    )
VALUES (
        3,
        6,
        'Kisaragi Station',
        'Yuri Tsunematsu, Eriko Sato',
        'Based on the true recount of the Japanese urban legend in 2004, “Kisaragi Station”. A girl nicknamed “Hasumi” posted online her strange experiences at “Kisaragi Station”, a train station not found on any map. The messages suddenly stopped and Hasumi was never heard from again. At that time, there was a huge debate online about the truth of her story. It became one of the most famous stories of modern mysterious disappearances even till today. This August, the chilling mysteries of Kisaragi Station will be unveiled on the big screen',
        '2022-08-18',
        'news_images/2022-08-18-Poster-KisaragiStation.jpg',
        'https://www.youtube.com/watch?v=JuA15hScolw',
        1,
        90,
        'Japanese(Sub: Chinese)'
    ), (
        9,
        6,
        'The Invitation',
        'Nathalie Emmanuel, Thomas Doherty, Stephanie Corneliussen, Alana Boden, Courtney Taylor, Hugh Skinner, Sean Pertwee',
        'After the death of her mother and having no other known relatives, Evie (Nathalie Emmanuel) takes a DNA test…and discovers a long-lost cousin she never knew she had. Invited by her newfound family to a lavish wedding in the English countryside, she at first seduced by the sexy aristocrat host but is soon thrust into a nightmare of survival as she uncovers twisted secrets in her family history and the unsettling intentions behind their sinful generosity.',
        '2022-08-25',
        'news_images/2022-08-25-Poster-TheInvitation.jpg',
        'https://www.youtube.com/watch?v=5bL1ftuxgOE',
        1,
        90,
        'English(Sub: English, Chinese)'
    ), (
        10,
        6,
        'Black Adam',
        'Dwayne Johnson, Aldis Hodge, Noah Centineo, Sarah Shahi, Marwan Kenzari, Quintessa Swindell',
        'Nearly 5,000 years after he was bestowed with the almighty powers of the Egyptian gods -- and imprisoned just as quickly -- Black Adam is freed from his earthly tomb, ready to unleash his unique form of justice on the modern world.',
        '2022-10-20',
        'news_images/2022-poster-BlackAdams.jpg',
        'https://www.youtube.com/watch?v=X0tOpBuYasI',
        1,
        120,
        'Japanese(Sub: Chinese)'
    ), (
        18,
        6,
        'sg topgun',
        'Francis Foo ,jennifer colloney ,Val Kilmer',
        'The story of the air force',
        '2022-08-20',
        'news_images/sg topgun.jpg',
        NULL,
        1,
        90,
        'English(Sub: English, Chinese)'
    ), (
        90,
        6,
        'Super Hero',
        'Masako Nozawa, Toshio Furukawa, Aya Hisakawa, Ryo Horikawa, Mayumi Tanaka, Takeshi Kusao, Yuko Minaguchi, Miyu Irino, Hiroshi Kamiya, Mamoru Miyano, Volcano Ota, Ryota Takeuchi',
        'The Red Ribbon Army was once destroyed by Son Goku. Individuals, who carry on its spirit, have created the ultimate Androids, Gamma 1 and Gamma 2. These two Androids call themselves “Super Heroes”. They start attacking Piccolo and Gohan... What is the New Red Ribbon Army objective? In the face of approaching danger, it is time to awaken, Super Hero!',
        '2022-09-01',
        'news_images/2022-09-01-Poster-DragonBallSuper.jpg',
        'https://www.youtube.com/watch?v=xs-t6lGMdXU',
        1,
        90,
        'Japanese(Sub: Chinese)'
    ), (
        91,
        6,
        'See How They Run',
        'Saoirse Ronan, Sam Rockwell, David Oyelowo, Adrien Brody, and Ruth Wilson',
        'In the West End of 1950s London, plans for a movie version of a smash-hit play come to an abrupt halt after a pivotal member of the crew is murdered. When world-weary Inspector Stoppard (Sam Rockwell) and eager rookie Constable Stalker (Saoirse Ronan) take on the case, the two find themselves thrown into a puzzling whodunit within the glamorously sordid theater underground, investigating the mysterious homicide at their own peril.',
        '2022-09-29',
        'news_images/2022-09-29-Poster-SHTR.jpg',
        'https://www.youtube.com/watch?v=Q00qh7Ab6Mk',
        1,
        90,
        'English(Sub: English, Chinese)'
    ), (
        92,
        6,
        'The Way Of Water',
        'Zoe Saldana, Sam Worthington, Sigourney Weaver, Stephen Lang, Cliff Curtis, Joel David Moore, CCH Pounder, Edie Falco, Jemaine Clement, Kate Winslet',
        'Set more than a decade after the events of the first film, “Avatar: The Way of Water” begins to tell the story of the Sully family (Jake, Neytiri, and their kids), the trouble that follows them, the lengths they go to keep each other safe, the battles they fight to stay alive, and the tragedies they endure.',
        '2022-12-15',
        'news_images/2022-12-31-Poster-ATWOW.jpg',
        'https://www.youtube.com/watch?v=a8Gx8wiNbs8',
        1,
        90,
        'English(Sub: English, Chinese)'
    );

--

-- Table structure for table `app_show`

--

CREATE TABLE
    `app_show` (
        `s_id` int(11) NOT NULL,
        `st_id` int(11) DEFAULT NULL COMMENT 'show time id',
        `cinema_id` int(11) DEFAULT NULL,
        `movie_id` int(11) DEFAULT NULL,
        `start_date` date DEFAULT NULL,
        `status` int(11) DEFAULT NULL COMMENT '1 means show available',
        `r_status` int(11) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_show`

--

INSERT INTO
    `app_show` (
        `s_id`,
        `st_id`,
        `cinema_id`,
        `movie_id`,
        `start_date`,
        `status`,
        `r_status`
    )
VALUES 
(19, 15, 6, 11, '2021-04-15', 0, 1), 
(20, 20, 6, 13, '2021-04-15', 0, 1), 
(21, 19, 6, 12, '2021-03-31', 1, 1), 
(22, 18, 6, 17, '2021-04-16', 1, 1);

-- --------------------------------------------------------

--

-- Table structure for table `app_time_slot`

--

CREATE TABLE
    `app_time_slot` (
        `st_id` int(11) NOT NULL,
        `screen_id` int(11) DEFAULT NULL,
        `name` varchar(40) DEFAULT NULL COMMENT 'noon,second,etc',
        `start_time` time DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_time_slot`

--

INSERT INTO
    `app_time_slot` (
        `st_id`,
        `screen_id`,
        `name`,
        `start_time`
    )
VALUES 
(1, 1, 'Morning', '10:00:00'), 
(2, 1, 'Noon', '14:00:00'), 
(3, 1, 'Evening', '18:00:00'), 
(4, 1, 'Night', '21:00:00'), 
(5, 2, 'Morning', '10:00:00'), 
(6, 2, 'Noon', '14:00:00'), 
(7, 2, 'Evening', '18:00:00'), 
(8, 2, 'Night', '21:00:00'), 
(9, 3, 'Morning', '10:00:00'), 
(10, 3, 'Noon', '14:00:00'), 
(11, 3, 'Evening', '18:00:00'), 
(12, 3, 'Night', '21:00:00'), 
(14, 4, 'Noon', '12:03:00'), 
(15, 5, 'Night', '00:20:00'), 
(16, 5, 'Noon', '15:10:00'), 
(17, 5, 'Evening', '18:10:00'), 
(18, 6, 'Morning', '10:30:00'), 
(19, 6, 'Noon', '14:30:00'), 
(20, 6, 'Evening', '18:30:00'), 
(21, 6, 'Night', '21:30:00'), 
(22, 5, 'Night', '20:00:00');

-- --------------------------------------------------------

--

-- Table structure for table `app_user`

--

CREATE TABLE
    `app_user` (
        `user_id` int(11) NOT NULL,
        `cinema_id` int(11) DEFAULT NULL,
        `username` varchar(50) DEFAULT NULL COMMENT 'email',
        `password` varchar(50) DEFAULT NULL,
        `user_type` int(1) DEFAULT NULL,
        `name` varchar(50) DEFAULT NULL,
        `email` varchar(50) DEFAULT NULL,
        `phone` varchar(12) DEFAULT NULL,
        `age` int(2) DEFAULT NULL,
        `gender` varchar(10) DEFAULT NULL
    ) ENGINE = InnoDB DEFAULT CHARSET = latin1;

--

-- Dumping data for table `app_user`

--

INSERT INTO
    `app_user` (
        `user_id`,
        `cinema_id`,
        `username`,
        `password`,
        `user_type`,
        `name`,
        `email`,
        `phone`,
        `age`,
        `gender`
    )
VALUES (
        0,
        1,
        'admin',
        'password',
        0,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        1,
        3,
        'theatre',
        'password',
        1,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        2,
        4,
        'theatre4',
        'password',
        1,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        4,
        5,
        'theatre5',
        'password',
        1,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        6,
        6,
        'theatre6',
        'password',
        1,
        NULL,
        NULL,
        NULL,
        NULL,
        NULL
    ), (
        7,
        1,
        'james@gmail.com',
        'password',
        2,
        'James',
        'james@gmail.com',
        '87902233',
        31,
        'Male'
    );

--

-- Indexes for dumped tables

--

--

-- Indexes for table `app_booking`

--

ALTER TABLE `app_booking` ADD PRIMARY KEY (`book_id`);

--

-- Indexes for table `app_cinemas`

--

ALTER TABLE `app_cinemas` ADD PRIMARY KEY (`cinema_id`);

--

-- Indexes for table `app_hall`

--

ALTER TABLE `app_hall` ADD PRIMARY KEY (`screen_id`);

--

-- Indexes for table `app_movie`

--

ALTER TABLE `app_movie` ADD PRIMARY KEY (`movie_id`);

--

-- Indexes for table `app_show`

--

ALTER TABLE `app_show` ADD PRIMARY KEY (`s_id`);

--

-- Indexes for table `app_time_slot`

--

ALTER TABLE `app_time_slot` ADD PRIMARY KEY (`st_id`);

--

-- Indexes for table `app_user`

--

ALTER TABLE `app_user` ADD PRIMARY KEY (`user_id`);

--

-- AUTO_INCREMENT for dumped tables

--

--

-- AUTO_INCREMENT for table `app_booking`

--

ALTER TABLE
    `app_booking` MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 15;

--

-- AUTO_INCREMENT for table `app_cinemas`

--

ALTER TABLE
    `app_cinemas` MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `app_hall`

--

ALTER TABLE
    `app_hall` MODIFY `screen_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

--

-- AUTO_INCREMENT for table `app_movie`

--

ALTER TABLE
    `app_movie` MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 19;

--

-- AUTO_INCREMENT for table `app_show`

--

ALTER TABLE
    `app_show` MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 23;

--

-- AUTO_INCREMENT for table `app_time_slot`

--

ALTER TABLE
    `app_time_slot` MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 22;

--

-- AUTO_INCREMENT for table `app_user`

--

ALTER TABLE
    `app_user` MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 20;

COMMIT;