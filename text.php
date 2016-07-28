<?php 
session_start();
 $cur_page='test-captcha'; 

if(isset($_POST['Submit'])){
  // code for check server side validation
  if(empty($_SESSION['captcha_code'] ) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0){  
    $msg="<span style='color:red'>The Validation code does not match!</span>";// Captcha verification is incorrect.   
  }else{// Captcha verification is Correct. Final Code Execute here!    
    $msg="<span style='color:green'>The Validation code has been matched.</span>";    
  }
} 
?> 
<?php require_once('./includes/layouts/header.php') ?>
<script type='text/javascript'>
function refreshCaptcha(){
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
 <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">TEST CAPTCHA </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">This is most basic captcha technique, In this technique user is shown a text  and user need to read this text and submit input,
                                    further it can be modified to use a image text and then we can also dynamically create an image text. 
                      </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
       <form action="#course-sec" method="post" name="form1" id="form1" >
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td align="right" valign="top"> Validation code:</td>
      <td><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'><br>  <!-- this is to generate a random number  and according to which captcha will be generated  -->
        <label for='message'>Enter the code above here :</label>
        <br>
        <input id="captcha_code" name="captcha_code" type="text">
        <br>
        Can't read the image? click <a href='javascript: refreshCaptcha();'>here</a> to refresh.</td><!--refreshCaptch()  of java script function is called for represhing -->
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" onclick="return validate();" value="Submit" class="button1"></td>
    </tr>
  </table>
  </form>
  </div>
      <!-- COURSES SECTION END--> 
    <!--HOME SECTION TAG LINE END-->   
       <?php 
     #code of displaying team
     include('./includes/layouts/aboutus.php'); 
     ?>
     <?php 
     #code of displaying team
     include('./includes/layouts/team.php'); 
     ?>
        
   <?php 
     #code of location and media connect
     include_once('./includes/layouts/loc_connect.php');
    ?>
   <?php 
     #code of footer
     include_once('./includes/layouts/footer.php');
    ?>