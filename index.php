<?php require_once('./includes/layouts/header.php') ?>
 
 <div id="course-sec" class="container set-pad">
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CAPTCHA OPTION </h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s">
                     Following types of captchas are provided by us, Click to take a look 
                     </p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


       

           <div class="row set-row-pad" >
           <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                   <div class="panel-group" id="accordion">
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.5s">
                            <div class="panel-heading" >
                                <h4 class="panel-title" style="width: 1227px">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed">
                                  <strong>  TEXT</strong> CAPTCHA
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>This is most basic captcha technique, In this technique user is shown a text  and user need to read this text and submit input,
                                    further it can be modified to use a image text and then we can also dynamically create an image text using image processing. </p>
                                    <p><a href="./text.php" > <strong>try it</strong> </a></p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.7s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed">
                                      <strong>   PUZZLE</strong> CAPTCHA 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body">
                                    <p>
											In this captcha technique, user is shown a puzzle of images and he has to choose the pic according to his IQ, this is very good technique because robots are not supposed to 
											break a puzzle easily.                                    
                                    </p>
                                                  <p><a href="./puzzle.php" > <strong>try it</strong> </a></p>
                      
                                </div>
                            </div>
                        </div>
                      
                         <div class="panel panel-default" data-scroll-reveal="enter from the bottom after 0.9s">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="collapsed">
                                        <strong>   IDENTI PIC</strong> CAPTCHA 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse"  style="height: 0px;">
                                <div class="panel-body">
                                    <p>
                                      IdentiPic is photo based CAPTCHA system
                                      where user has to identify a picture. The problem
                                        associated with identiPic is the user is given picture and no. of options and user has choose that object from list.  
                                 </p>              <p><a href="./identipic.php" > <strong>try it</strong> </a></p>
                      
                                </div>
                            </div>
                        </div>

                    </div>
                   <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s" >
                       <span style="font-size:40px;">
                          <strong> 2500+ </strong> 
                           <hr />
                           Security Clients
                       </span>
                   </div>
           </div>
             
                 
                 
               </div>
             </div>
      <!-- COURSES SECTION END--> 
    <!--HOME SECTION TAG LINE END-->   
         <div id="features-sec" class="container set-pad" ><!--about us -->
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">
					 ABOUT US</h1>
                     <p data-scroll-reveal="enter from the bottom after 0.3s" >
                      MANIT-CAPTCHA-VALIDATION is a automactic captcha validation service used for preventing cyber attacks and pishing...</p>
                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >
           
               
                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="about-div">
                     <i class="fa fa-paper-plane-o fa-4x icon-round-border" ></i>
                   	  <h3 >Quality Security</h3>
						 <hr /><hr />
						 <p >we provide unhackable image captcha techniques . 
                       
                   </p>
						 <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
                </div>
                   </div>
				 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.5s">
					 <div class="about-div">
						 <i class="fa fa-bolt fa-4x icon-round-border" ></i>
						 <h3 >LATEST TECHNOLOGY</h3>
						 <hr /><hr />
						 <p >Our Captcha is based on latest technology.</p>
						 <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
					 </div>
				 </div>
				 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
					 <div class="about-div">
						 <i class="fa fa-magic fa-4x icon-round-border" ></i>
						 <h3 >OPEN SOURCE</h3>
						 <hr /><hr />
						 <p >Our all codes are open-source still we provides 
						 decent security..</p>
						 <a href="#contact-sec" class="btn btn-info btn-set"  >ASK THE EXPERT</a>
					 </div>
				 </div>
                 
                 
               </div>
             </div>
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