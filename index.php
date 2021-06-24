<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Benne&display=swap" rel="stylesheet"> 
    <title>Home | Leaxiano</title>
</head>
<?php
    include('nav.html');


    if(!empty($_SERVER["HTTP_CLIENT_IP"])){
        $ip = $_SERVER["HTTP_CLIENT_IP"];
    }elseif(!empty($_SERVER["HTTP_X_FORWAREDED_FOR"])){
        $ip = $_SERVER["HTTP_X_FORWAREDED_FOR"];
    }else{
        $ip = $_SERVER["REMOTE_ADDR"];
    }

    $date = date("Y-m-d H:i:s");

    if($ip == "196.74.137.126"){
        $file = fopen("logs.txt" , "a");
        fwrite($file, "that's meeeh" . "\n");
        fclose($file);
    }else{
        $file=fopen("logs.txt" , "a");
        fwrite($file, $ip . " ");
        fwrite($file, $date . "\n");
        fclose($file);
    }
?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <div class="wrapper">
        <img src="img/0001.png">
        <h1>Make your activity grow just by one click!!</h1>
    </div>
    <div class="pre">
        <h1>What will change?</h1>
        <p>
        noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose<br>
        noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose<br>
        noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose<br>
        noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose<br>
        </p>
    </div>
                                                        <!-- SERVICES -->
    <div class="services" id="services">
        <h1>Our services</h1>
        <div class="line"></div>
        <div class="single-service">
            <div class="social"><i class="fa fa-file-photo-o"></i></div>
            <span></span>
            <h3>Service one</h3>
            <p>
                noi facciamo cose noi facciamo cose noi facciamo cose 
                noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose 
            </p>
        </div>
        <div class="single-service">
            <div class="social"><i class="fa fa-laptop"></i></div>
            <span></span>
            <h3>Service two</h3>
            <p>
                noi facciamo cose noi facciamo cose noi facciamo cose 
                noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose 
            </p>
        </div>
        <div class="single-service">
            <div class="social"><i class="fa fa-pie-chart"></i></div>
            <span></span>
            <h3>Service three</h3>
            <p>
                noi facciamo cose noi facciamo cose noi facciamo cose 
                noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose 
            </p>
        </div>
    </div>
    <div class="contact">
        <div class="row">
        
<?php
    if(isset($_GET['submit'])){
        $sub = htmlspecialchars($_GET['sub'], ENT_QUOTES, 'UTF-8');
        $msg = htmlspecialchars($_GET['msg'], ENT_QUOTES, 'UTF-8');
        
        $file=fopen("msg.txt" , "a");
        fwrite($file, $sub . "\n");
        fwrite($file, $sub . "\n" . "\n");
        fclose($file);
    }
?>
            <h1>Contact</h1>
        </div>
        <p id="contact">you can contact us through this form below or write to us directly at this emal: <br><a  href="mailto:leaxiano@gmail.com">leaxiano@gmail.com</a> .</p>
        <div class="row input-container">
                                                                <!--form -->
            <form method="post" action="">
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <input type="text" name="sub" required />
                        <label>Subject</label> 
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="styled-input wide">
                        <textarea name="msg" required></textarea>
                        <label>Message</label>
                    </div>
                </div>
                <div class="col-xs-12">
                    <input type="submit" name="submit" required class="btn-lrg submit-btn" value="Send Message">
                </div>
            </form>
        </div>
    </div>
                                                    <!-- ABOUT -->
    <div class="about" id="about">
      <h1>About us</h1>
      <p>
        noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose
      </p>
    </div>
<?php include('footer.php');?>
<?php include('top.html');?>
</body>
</html>
