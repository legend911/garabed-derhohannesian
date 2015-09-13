<?php  
    include 'contact_info.php';
?>

<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/padding.css" rel="stylesheet" />
    <link href="css/img.css" rel="stylesheet" />
    <title>Garabed DerHohannesian</title>
    <meta charset="utf-8" />
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Garabed DerHohannesian</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="biography.html">Biography<span class="sr-only">(current)</span></a></li>
                    <li><a href="paintings.html">Paintings</a></li>
                    <li><a href="reviews.html">Reviews</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li class="active"><a href="contact.html">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 garabed_bio_padding_bottom">
                <h1>Contact Forms</h1>
            </div>
            <div class="col-md-6 col-sm-6">
                <form class="form-horizontal" role="form" method="post">
                    <fieldset>
                        <legend>Artwork Questions</legend>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                                <?php echo "<p class='text-danger'>$errName</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human" class="col-sm-2 control-label">7 + 4 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                                <?php echo "<p class='text-danger'>$errHuman</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result; ?>    
                            </div>
                        </div>
                    </fieldset>
                </form>   
            </div>  
        </div>
    </div>

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<footer>
    <div class="navbar navbar" role="navigation">
        <div class="container">
            <div class="navbar-text pull-left">
                <p>
                    Copyright ©2015 GarabedDerHohannesian.com | by Dwight Norris | All Rights Reserved
                </p>
            </div>

            <div class="navbar-text pull-right">
                <p>
                    <a href="privacy.html" rel="nofollow" style="color: lightgray; text-decoration: none">Privacy Statement</a>
                    |
                    <a href="disclaimer.html" rel="nofollow" style="color: lightgray; text-decoration: none">Disclaimer</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</html>
