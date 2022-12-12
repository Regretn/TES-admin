<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="teacher.css?v=<?php echo time(); ?>">


    <title>Teacher Evaluation Teacher</title>
</head>

<body>

    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>


            <a class="nav-link"><?php echo date("l / Y/m/d"); ?></a>
            <form action="#">
                <div class="form-input">

                </div>
            </form>
            </a>
            <!-- login check user -->


            <div class="box">
                <a href="../student/profile.php" class="profile" id="m2-c"> <img src="./img/luffy.jpg"></a>


                <div id='mySwipe' class='swipe'>
                    <div class="modal-container" id="m2-o" style="--m-background: hsla(0, 0%, 0%, .4);">
                        <div class="modal">
                            <h1 class="modal__title">Modal 2 Title</h1>
                            <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>

                            <div style='text-align:center;padding-top:20px;'>

                                <a href="#m2-c" class="link-2"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /modal 2 -->

        </nav>
        <!-- NAVBAR -->



        <script src="script.js"></script>
</body>

</html>