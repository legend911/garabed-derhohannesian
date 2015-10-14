<?php
    if (isset($_POST["submit1"])) {
        $name1 = $_POST['name1'];
        $email1 = $_POST['email1'];
        $message1 = $_POST['message1'];
        $human1 = intval($_POST['human1']);
        $from1 = 'Contact Form'; 
        $to1 = 'info@garabedderhohannesian.com'; 
        $subject1 = 'GarabedDerHohannesian.com Contact Request ';
        
        $body1 = "From: $name1\n E-Mail: $email1\n Message:\n $message1";
 
        // Check if name has been entered
        if (!$_POST['name1']) {
            $errName1 = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email1'] || !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)) {
            $errEmail1 = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message1']) {
            $errMessage1 = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human1 !== 11) {
            $errHuman1 = 'Your anti-spam answer is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName1 && !$errEmail1 && !$errMessage1 && !$errHuman1) {
    if (mail ($to1, $subject1, $body1, $from1)) {
        $result1='<div class="alert alert-success">Thank You! We will respond shortly</div>';
    } else {
        $result1='<div class="alert alert-danger">We are sorry there was an error sending your message. Please try again</div>';
    }
}
    }
?>

<?php
    if (isset($_POST["submit2"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Contact Form'; 
        $to = 'webmaster@garabedderhohannesian.com'; 
        $subject = 'GarabedDerHohannesian.com Contact Request ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 11) {
            $errHuman = 'Your anti-spam answer is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! We will respond shortly</div>';
    } else {
        $result='<div class="alert alert-danger">We are sorry there was an error sending your message. Please try again</div>';
    }
}
    }
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
                    <li><a href="blog.php">Blog</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>

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
                            <label for="name1" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="name1" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name1']); ?>">
                                <?php echo "<p class='text-danger'>$errName1</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email1" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email1" name="email1" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email1']); ?>">
                                <?php echo "<p class='text-danger'>$errEmail1</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message1" class="col-sm-2 control-label">Message</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="message1"><?php echo htmlspecialchars($_POST['message1']);?></textarea>
                                <?php echo "<p class='text-danger'>$errMessage1</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="human1" class="col-sm-2 control-label">7 + 4 = ?</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="human1" name="human1" placeholder="Your Answer">
                                <?php echo "<p class='text-danger'>$errHuman1</p>";?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <input id="submit1" name="submit1" type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <?php echo $result1; ?>    
                            </div>
                        </div>
                    </fieldset>
                </form>   
            </div>
			
			<div class="col-md-6 col-sm-6">
                <form class="form-horizontal" role="form" method="post">
                    <fieldset>
                        <legend>Technical Issues</legend>
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
                                <input id="submit2" name="submit2" type="submit" value="Submit" class="btn btn-primary">
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
                    <a href="privacy.html" rel="nofollow" style="color: lightgray; text-decoration: none">Privacy</a>
                    |
                    <a href="disclaimer.html" rel="nofollow" style="color: lightgray; text-decoration: none">Disclaimer</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67685422-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
