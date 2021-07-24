<!-- PHP Code -->
<?php
class Profile
{

    private $organizeName;
    private $companyName;
    private $ownerName;
    private $logo;

    function setOrganizeName($organizeName)
    {
        $this->organizeName = $organizeName;
    }
    function getOrganizeName()
    {
        return $this->organizeName;
    }
    function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }
    function getCompanyName()
    {
        return $this->companyName;
    }
    function setOwnerName($ownerName)
    {
        $this->ownerName = $ownerName;
    }
    function getOwnerName()
    {
        return $this->ownerName;
    }
    function setLogo($logo)
    {
        $this->logo = $logo;
    }
    function getLogo()
    {
        return $this->logo;
    }

}

class Person
{
    private $firstName;
    private $lastName;
    private $designation;

    function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }
    function getFirstName()
    {
        return $this->firstName;
    }
    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
    function getLastName()
    {
        return $this->lastName;
    }
    function setDesignation($designation)
    {
        $this->designation = $designation;
    }
    function getDesignation()
    {
        return $this->designation;
    }

}

class Contact
{
    private $whatsAppNo;
    private $mobileNumber;
    private $location;
    private $email;
    private $website;
    private $address;

    function setWhatsAppNo($whatsAppNo)
    {
        $this->whatsAppNo = $whatsAppNo;
    }
    function getWhatsAppNo()
    {
        return $this->whatsAppNo;
    }
    function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }
    function getMobileNumber()
    {
        return $this->mobileNumber;
    }
    function setLocation($location)
    {
        $this->location = $location;
    }
    function getLocation()
    {
        return $this->location;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function setWebsite($website)
    {
        $this->website = $website;
    }
    function getWebsite()
    {
        return $this->website;
    }
    function setAddress($address)
    {
        $this->address = $address;
    }
    function getAddress()
    {
        return $this->address;
    }

}

$profile = new Profile();

$profile->setOrganizeName('');
$profile->setCompanyName('Shri Gangadhar Shilpakala Vinyasa');
$profile->setOwnerName('Mahadev P  Vishwakarma');
$profile->setLogo('images/logo.jpg');

$person = new Person();

$person->setFirstName('Mahadev');
$person->setLastName('P Vishwakarma');
$person->setDesignation('B.V.A');

$contact = new Contact();
$contact->setWhatsAppNo('+91 6361277853');
$contact->setMobileNumber('+91 6361277853');
$contact->setLocation('');
$contact->setEmail('mahadev@gmail.com');
$contact->setWebsite('#');
$contact->setAddress('Bijapur Main Road, Opp Tower Near Bus Stop Gogi Kona, Shahapur, Yadgir - 585309');

class AboutUs
{

    private $aboutUs = '<p><span style="color: #ff6600;"><strong>Shri Gangadhar Shilpakala Vinyasa</strong></span> <span style="color: #333333;">including (3DModelling and Free-interior designing)   is behind Some projects that maybe you’ve appreciated or been to, but never thought of how they came to be. From stunning Modern architectural designs with Free-interior and 3D video animations of Residential buildings, apartments and churches built and to be build from the ground up to remodeled Residential buildings and General Constructions.<br> We were there in hard hats. These days, we’re both architects and builders because increasingly that is what our clients ask for ,Only their vision delivered from paper to structure. It’s more than a construction project, it’s a creative endeavor. Something new on the K konstruction that we’re all proud to put our names on Designed and  Built. <br>Through the knowledge and experience we have in designing, we offer trainings in Engineering softwares to Students/Person involved in Construction industry.</span></p>

';

    function setAboutUs($aboutUs)
    {
        $this->aboutUs = $aboutUs;
    }
    function getAboutUs()
    {
        return $this->aboutUs;
    }

}

class YoutubeVideos
{

    private $youtubeUrl;

    function setYoutubeUrl($youtubeUrl)
    {
        $this->youtubeUrl = $youtubeUrl;
    }
    function getYoutubeUrl()
    {
        return $this->youtubeUrl;
    }

}

class Services
{
    private $services;

    function setServices($services)
    {
        $this->services = $services;
    }
    function getServices()
    {
        return $this->services;
    }
}
class ShareLink
{
    private $shareLink;

    function setShareLink($shareLink)
    {
        $this->shareLink = $shareLink;
    }
    function getShareLink()
    {
        return $this->shareLink;
    }

}

$aboutUs = new AboutUs();
//Youtube Video Section
$youtubeVideo1 = new YoutubeVideos();
$youtubeVideo1->setYoutubeUrl("https://youtu.be/pSmU0q6OchQ?list=PLNWQ8GZ0Bu5Y5qq6vbZJxn-eqWvSCNIOK");


//Services
$service = new Services();
$service->setServices('555');

//Share Link
$shareLink = new ShareLink();

$shareLink->setShareLink('http://wedigitizeu.com/dvcard/KKONSTRUCTION_SOLUTIONS_LTD');

?>
      <!-- PHP Code Ends -->


<!DOCTYPE html>
<html>
   <head>
      <head>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
         <script src="jquery.bvalidator.min.js"></script>
         <script src="themes/gray4/gray4.js"></script>
         <script src="themes/presenters/default.min.js"></script>
         <link  rel="stylesheet" href="themes/gray4/gray4.css" />



        

         <!-- HTML Meta Tags -->
         <title><?php echo $profile->getCompanyName(); ?></title>
         <meta name = "title" content="<?php echo $profile->getCompanyName(); ?>">
         <meta name = "author" content="WDU"> 
         <meta name = "keywords" content="Digital Visiting Card, Visiting Card, Online visiting card">
         <meta name = "description" content="K konstruction solutions
 is behind Some projects
 that maybe you’ve appreciated 
or been to, but never 
thought of how they came to be.
 From stunning Modern architectural 
designs with Free-interior and 
3D video animations of Residential 
buildings, apartments and churches 
built and to be build from the ground up
 to remodeled Residential buildings 
and General Constructions. ">
         <meta name = "language" content="English">
         <meta http-equiv = "Content-Type" content="text/html; UTF-8">
            <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
         <!-- Font-icon css-->
         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         

         <link rel='stylesheet' href='panel/all.css'>
         <link rel="stylesheet" href="panel/awesome.min.css">
         <!-- Required css  -->
         
         <link rel="stylesheet" href="css.css" >
         <link rel="stylesheet" href="mobile_css.css" >
         <script src="master_js.js"></script> -->
         <link rel="stylesheet" href="panel/card_css4.css" >

         <script>
            $(document).ready(function(){
               $('.mobile_home').on('click',function(){
                  $('#header').toggleClass('add_height');
                  
               })
            })
            
         </script>

         <style>
            .full_page_alert {position: fixed;
            width: -webkit-fill-available;
            height: -webkit-fill-available;
            background: white;
            top: 0;
            z-index: 9999999;
            padding: 63px;
            text-align: center;}
         </style>
        
   </head>
   <body>
      
      <!----------------------copy from here ------------------------->
      <div class="card" id="home" >
         <!-- <div class="view_counter"><i class="fa fa-eye"></i> <br>36</div> -->
         <div class="card_content">
          <center> <img src="images/logo.jpg"></center>
           
              <div class="card_content2">
                <center>
           <h2 style="font-size:14px;color:#ff6600;"><?php echo $profile->getOrganizeName(); ?></h2>
            <h2 style="font-size:17px"><?php echo $profile->getCompanyName(); ?></h2>
          
            <p><?php echo $person->getFirstName() . " " . $person->getLastName(); ?></p>
            <p><?php echo $person->getDesignation(); ?></p>
          </center>
         </div>
         <div class="dis_flex">
            <a href="tel:<?php echo $contact->getWhatsAppNo(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-phone"></i> Call</div>
            </a>
            <a href="https://api.whatsapp.com/send?phone=<?php echo $contact->getWhatsAppNo(); ?>&amp;text=Paul+Aubin" target="_blank">
               <div class="link_btn"><i class="fa fa-whatsapp"></i> WhatsApp</div>
            </a>
            <a href="<?php echo $contact->getLocation(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-map-marker"></i> <?php echo 'Location' ?></div>
            </a>
           
            <a href="Mailto:<?php echo $contact->getEmail(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-envelope"></i> Mail</div>
            </a>
            <a href="<?php echo $contact->getWebsite(); ?>" target="_blank">
               <div class="link_btn"><i class="fa fa-globe"></i> Website</div>
            </a>
         </div>
         
         <div class="contact_details">
            <strong style='color: #ff6600;'>Address :</strong>
            <div class="contact_d">
               <i class="fa fa-phone" aria-hidden="true"></i>
               <p><?php echo $contact->getMobileNumber(); ?></p>
            </div>
            <div class="contact_d">
               <i class="fa fa-map-marker"></i>
               <p>
                 <?php echo $contact->getAddress(); ?>                           
               </p>
            </div>
            <div class="contact_d">
               <i class="fa fa-envelope"></i>
               <p><?php echo $contact->getEmail(); ?></p>
            </div>
            
         </div>

        


         <div class="dis_flex">
            <div class="share_wtsp">
               <form action="https://api.whatsapp.com/send" id="wtsp_form" target="_blank">
                  <input type="text"  name="phone" placeholder="WhatsApp No. with Country code  " value="">
                  <input type="hidden" name="text" value="<?php echo $shareLink->getShareLink(); ?>">
                  <div class="wtsp_share_btn" onclick="subForm()">Share on <i class="fa fa-whatsapp"></i> </div>
               </form>
               <script>
                  $(document).ready(function(){
                     $('.wtsp_share_btn').on('click',function(){
                        $('#wtsp_form').submit();
                     })
                     
                  })
               </script>
            </div>
         </div>
         <div class="dis_flex">
            <a href="contact_Mahadev_Vishwakarma.vcf?id=117">
               <div class="big_btns">Save to Contacts <i class="fa fa-download"></i></div>
            </a>
            <div class="big_btns" id="share_box_pop">Share <i class="fa fa-share-alt"></i></div>
            <div class="share_box">
               <div class="close" id="close_sharer">&times;</div>
               <p>Share My Digital Card </p>
               <a href="https://api.whatsapp.com/send?text=<?php echo $shareLink->getShareLink(); ?>">
                  <div class="shar_btns">
                     <i class="fa fa-whatsapp" id="whatsapp2"  target="_blank"></i>
                     <p>WhatsApp</p>
                  </div>
               </a>
               <a href="sms:?body=<?php echo $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-comment" ></i>
                     <p>SMS</p>
                  </div>
               </a>
               <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-facebook" ></i>
                     <p>Facebook</p>
                  </div>
               </a>
               <a href="https://twitter.com/intent/tweet?text=<?php echo $shareLink->getShareLink(); ?>" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-twitter"></i>
                     <p>Twitter</p>
                  </div>
               </a>
               <a href="#" target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-instagram"></i>
                     <p>Instagram</p>
                  </div>
               </a>
               <a href="https://www.linkedin.com/cws/share?url=<?php echo $shareLink->getShareLink(); ?> " target="_blank">
                  <div class="shar_btns">
                     <i class="fa fa-linkedin"></i>
                     <p>Linkedin</p>
                  </div>
               </a>
            </div>
            <script>
               $(document).ready(function(){
                  $('#close_sharer,#share_box_pop').on('click',function(){
                     $('.share_box').slideToggle();
                  });
               })
               
               
            </script>
         </div>
         <div class="dis_flex">
         </div>
      </div>
      <div class="card2">
         <h3>Scan QR Code to download the contact details</h3>
         <img class = "img-responsive" src="images/image23.png" id="qr_code_d">
      </div>
      <!--------------about us ---------------------------> 
      <div class="card2" id="about_us">
         <h3>About Us</h3>
         <?php
echo $aboutUs->getAboutUs();

?>
      </div>

      <!-- <div class="card2" id="product_services">
         <h3>We Conduct Coaching Classes for:</h3>
        
           <span style="color:black"> <?php echo $service->getServices(); ?></span> 
            
            
      </div> -->


     
      <!--------------youtube videos--------------------------->  
      <div class="card2" id="youtube_video">
         <h3>Youtube Videos</h3>
        <iframe width="853" height="480" src="https://www.youtube.com/embed/pSmU0q6OchQ?list=PLNWQ8GZ0Bu5Y5qq6vbZJxn-eqWvSCNIOK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       
      </div>
      </div>
      <!----------image gallery----------------------->     
      <div class="card2" id="gallery">
         <h3>Image Gallery</h3>

         <div class="img_gall">
            <img src="images/image1.jpg">
         </div>
         <div class="img_gall">
            <img src="images/image6.jpg">
         </div>
         <div class="img_gall">
            <img src="images/image7.jpg">
         </div>
        <div class="img_gall">
            <img src="images/images14.jpg">
         </div>
        

          
         
      </div>



      
      <!----------payment info----------------------->   
      <!----------email to  info-----------------------> 
      <div class="card2" id="enquery">
         <form data-bvalidator-validate action="#" method="post">
            <h3>Contact Us</h3>
             <div class="img_gall">
            <img src="images/images11.jpg">
         </div>
            <!-- <input type="" name="c_name" data-bvalidator="required" placeholder="Enter Your Name" required>
            <input type="" name="c_contact" maxlength="13"  data-bvalidator="required" placeholder="Enter Your Mobile No" required>
            <input type="email" name="c_email"   data-bvalidator="required" placeholder="Enter Your Email Address">
            <textarea name="c_msg"  data-bvalidator="required" placeholder="Enter your Message or Query" required></textarea>
            <input  type="submit" Value="Send!" name="email_to_client"> -->
         </form>
         

         <br>
         <br>
         <br>
               <a href="https://wedigitizeu.com/"><div class="create_card_btn">We Digitize U || Digital Support and Services || 2021</div></a>

         <style>
            .create_card_btn {
            background: linear-gradient(45deg, black, black);
            color: white;
            width: auto;
            padding: 20px;
            border-radius: 2px;
            line-height: 0.8;
            margin: 11px auto;
            font-size: 9px;
            text-align: center;
            }
            #svg_down{position: fixed;
            bottom: 0;
            z-index: -1;
            left: 0;}
         </style>
         <br>
         <br>
         <br>
         <br>
         <div class="menu_bottom">
            <div class="menu_container">
               <div class="menu_item" onclick="location.href='#home'"><i class="fa fa-home"></i> Home</div>
               <div class="menu_item" onclick="location.href='#about_us'"><i class="fa fa-briefcase"></i>About Us</div>
               <!-- <div class="menu_item" onclick="location.href='#product_services'"><i class="fa fa-ticket"></i>Courses</div> -->
       <!--         <div class="menu_item" onclick="location.href='#study_material'"><i class="fa fa-book"></i>Study Material </div>  -->
               <div class="menu_item" onclick="location.href='#gallery'"><i class="fa fa-image"></i>Gallery</div>
               <div class="menu_item" onclick="location.href='#youtube_video'"><i class="fa fa-video-camera"></i>Youtube Videos</div>
               <!-- <div class="menu_item" onclick="location.href='#payment'"><i class="fa fa-money"></i>Payment</div> -->
               <div class="menu_item" onclick="location.href='#enquery'"><i class="fa fa-comment"></i>Enquery</div>
            </div>
         </div>
      </div>
   </body>
</html>
