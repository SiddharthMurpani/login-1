<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CompSci practice</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

            <?php

            if(ISSET($_SESSION['logged_in'])){

                ?>

                <form class="navbar-form navbar-right" action="logout.php" method="post">
                    <button type="submit" class="btn btn-success">logout</button>
                </form>
                <p class="navbar-text navbar-right">Logged in as: <?php echo $_SESSION['user_email']; ?> </p>

                <?php

            } else {

                ?>

                <form class="navbar-form navbar-right" action="check_user.php" method="post">
                    <div class="form-group">
                        <input type="email" name="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit"

                        <?php

                        if($_SESSION['locked_out'] == TRUE)
                        {

                            echo "class=\"btn btn-warning\" disabled";

                        } else {

                            echo "class=\"btn btn-success\"";
                        }

                        ?>

                    >Sign in</button>
                </form>

                <?php
            }

            ?>

        </div><!--/.navbar-collapse -->
    </div>
</nav>