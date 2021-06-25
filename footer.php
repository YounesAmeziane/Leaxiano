<footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose noi facciamo cose </p>
          </div>
        </div>
        <div class="center box">
          <h2>Social</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Maps</span>
            </div>
            <div class="phone">
              <span class="fas fa-instagra"><i class="fab fa-instagram"></i></span>
              <span class="text">Instagram</span>
            </div>
            <div class="phone">
              <span class="fas fa-facebook-squar"><i class="fab fa-facebook-square"></i></span>
              <span class="text">Facebook</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">leaxiano@egmail.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Join our newsletter</h2>
          <div class="content">
                                                    <!-- SAVING FOOTER EMAILS -->
<?php
    if(isset($_GET['submit'])){
        $email_footer = htmlspecialchars($_GET['email_footer'], ENT_QUOTES, 'UTF-8');
        if(!empty($email_footer)){
            $file=fopen("footer-mailist.txt" , "a");
            fwrite($file, $email_footer . "\n");
            fclose($file);
        }
    }
?>
            <form action="http://leaxiano.ml" method="get" onsubmit="validate()">
              <div class="email">
                <div class="text">Email</div>
                <input type="email" name="email_footer" required>
              </div>
              <div class="btn">
                <button type="submit" name="submit">Join</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By Leax</a> | </span>
          <span class="far fa-copyright"></span><a href="" class="rr"> 2021 All rights reserved.</a>
        </center>
      </div>
      <script>
      function validate(){
  alert("Thank you for joining our newsletter!!!");
}
</script>
    </footer>
    
