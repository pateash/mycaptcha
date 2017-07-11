
<?php 
   session_start();
   $cur_page='puzzle-captcha';
 ?>
<?php require_once('./includes/layouts/header.php') ?>
<style type="text/css">
.auto-style1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.auto-style3 {
  font-size: small;
}
.auto-style4 {
	margin-top: 7px;
	margin-bottom: 19px;
}
</style>
<?php 
   #code for validating input
   if(isset($_POST['submit'])){
       if(isset($_SESSION['big_image_folder_number']))
     { 
      $x=(int)$_POST['selected_option'];//value of option in drop down list
      $y=(int)$_SESSION['big_image_folder_number'];
      if($x==$y)
       $msg="<span style='color:green'>Images match,Validation Successful!</span>";   
        else
        $msg="<span style='color:red'>Image do not match,Validation Failed!</span>";// Captcha verification is incorrect.   
     }
     else
        $msg="<span style='color:red'>Image do not match,Validation Failed!</span>";// Captcha verification is incorrect.   
  }
 ?>
 <div id="course-sec" class="container set-pad">
               <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">
					 IDENTI-PIC CAPTCHA </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">&nbsp;IdentiPic 
					 is photo based CAPTCHA system where user has to identify 
					 a picture. The problem associated with identiPic is the 
					 user is given picture and no. of options and user has 
					 choose that object from list.&nbsp;                                    
                                    </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
              <?php  
                 $a=mt_rand(0,MAX-1);//we just need to select a number which indicates folder number                
                 $_SESSION['big_image_folder_number']=$a;
                 $big_image= $_SESSION['big_image_folder_number']."/".(mt_rand()%MAX).".jpg";
                 //so far we have selected a random image 
              ?>
               <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    </table>
     <div id='big-image'>
         <img src="./images/<?php echo $big_image  ?>" style="border: black double thick" height="220" width="251">
        &nbsp;&nbsp;&nbsp;
       </div>  <div id="question">  <strong>Q. </strong>  
        Which of the following options in list is relevant to <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			 the shown image?&nbsp;
        <span class="auto-style3">&nbsp; (click the right option and click submit)</span>
         <br/><br/>
       
         <div id="options">
        <form method="post" action='./identipic.php#course-sec' >
           &nbsp;<span class="auto-style1">
               <select name="selected_option" style="width: 320px; height: 28px;">
                <option value="0">Flower</option>  
                <option value="1">Dog</option>      <option value="17">Beach</option>
               <option value="2">River</option>     <option value="27">Lion</option>
                <option value="3">Baby</option>     <option value="37">Tiger</option>
                <option value="4">Elephant</option> <option value="47">Vehicle</option>
                <option value="5">Cat</option>      <option value="57">City</option>
                <option value="6">Cow</option>      <option value="67">Village</option>
                <option value="7">Mountain</option> <option value="77">Beer</option>
                <option value="8">Deer</option>     <option value="87">Bird</option>
                <option value="9">Car</option>      <option value="97">Fish</option>
             
             
                      
   </select><br></span><br/>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			 <span class="auto-style1">
              <input  type="submit" name="submit" value="Submit" style="width: 89px; height: 36px"  style="text-align:left" class="auto-style4" ></span>
          </form>
      </div></div></div>
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