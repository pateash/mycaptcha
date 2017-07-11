
<?php 
   session_start();
   $cur_page='puzzle-captcha';
 ?>
<?php require_once('./includes/layouts/header.php') ?>
<style type="text/css">
.auto-style1 {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
}
.auto-style2 {
  font-size: large;
}
.auto-style3 {
  font-size: small;
}
</style>
<?php 
$a=$b="";
   #code for validating input
   if(isset($_POST['small_image_number'])){
     if(isset($_SESSION['big_image_folder_number']))
     { 
      $a=(int)$_POST['small_image_number'];//x will be value which is folder number
      $b=(int)$_SESSION['big_image_folder_number'];
       if($a==$b)
       $msg="<span style='color:green'>Images match,Validation Successful!</span>";   
        else
        $msg="<span style='color:red'>Image do not match,Validation Failed!</span>";// Captcha verification is incorrect. 
        $_POST['small_image_number']=$_SESSION['big_image_number']=null;  //unsetting numbers again
     }
     else
        $msg="<span style='color:red'>Image do not match,Validation Failed!</span>";// Captcha verification is incorrect.   
  }


 ?>
 <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">PUZZLE CAPTCHA </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">In this captcha technique, user is shown a puzzle of images and he has to choose the pic according to his IQ, this is very good technique because robots are not supposed to 
											break a puzzle easily.                                    
                                    </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->
              <?php  
                 $folder_number=rand()%MAX;
                 $image_number=rand()%MAX;
                 $_SESSION['big_image_folder_number']=$folder_number;
                  $big_image= $folder_number."/".$image_number.".jpg";
                $array=array();
                for($i=0;$i<MAX;$i++)
                  if($i!=$folder_number)//if folder number will not be in $array
                  $array[]=$i;
                shuffle($array);//function for shuffling array randomly,array_rand() function only pick from some random position sequencially 
               // var_dump($array);
                $array_rand_numbers=array_rand($array,5);//to pick up 6 elements form $array which represents folder number
                for($i=0;$i<5;$i++)
                  $array_rand_numbers[$i]=$array[$array_rand_numbers[$i]];
                
             //  var_dump($a);
             //  var_dump($b);
                $array_rand_numbers[]=$folder_number;//folder number will be added after so that only one can come from answer
                shuffle($array_rand_numbers); 
                //var_dump($array_rand_numbers);
              ?>
               <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    </table>
     <div id='big-image'>
         <img src="./images/<?php echo $big_image  ?>" style="border: black double thick" height="220" width="251"/>
        &nbsp;&nbsp;&nbsp;<span class="auto-style1"><span class="auto-style2">
		  </span>		  <div id="question">  <strong>Q. </strong>  
			  Which smaller image is more relavant to bigger image?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <span class="auto-style3">&nbsp; (click most appropriate image)</span><span class="auto-style3">&nbsp; 
      </span>   </div>
        <form method="post" action='./puzzle.php#course-sec' >
             <div id="small-image">
             <?php foreach ($array_rand_numbers as $x) {//array_rand_number will have 6 folder names in which one is correct
                  $image_name=$x."/".(rand()%MAX).".jpg" ;//$x is folder number here and random            
              ?>
             <input type="image" src="./images/<?php echo $image_name; ?>" height="147" name='small_image_number' value="<?php echo $x; ?>" style="border: black double medium" width="159"/>&nbsp;&nbsp;&nbsp;
             <?php } ?>      
           </div>
      </form>
 </div>
 </span>
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