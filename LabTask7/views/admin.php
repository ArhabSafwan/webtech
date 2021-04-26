<?php include_once('session_user.php'); ?>
<!DOCTYPE html>
<html>
    <head>   
        <title>Dashboard</title>
        <?php include_once('bootstrap.php'); ?>
    </head>
    <body>

        <?php include_once('header.php'); ?>

            <section class="col-md-8">
                <h1 style="text-align: center;">Welcome To <?php echo $_SESSION['name']; ?></h1>
            </section>
        </main>

        <?php include_once('javascript.php'); ?>
        <?php include_once('index_footer.php'); ?>

    </body>
</html>