<?php
include "headerfiles.html";
?>
<style>
    .home_main ul {
        font-size: 15px !important;
        color: darkblue;
        text-transform: capitalize;
    }

    /* .home_main {
  background: white;
  animation: mymove .5s infinite;
}

@keyframes mymove {
  from {background-color: black;}
  to {background-color: white;}
} */
</style>
<?php
if(isset($_POST['faq']))
{
    
    include "connection.php";
    $sql = "INSERT INTO faq (question) VALUES ('$question')";
    // $conn->query($sql);
}
    include "navbar.php";
if(isset($_GET['desclaimer']))
{
    
    ?>
<div class="container-fluid h-75">
    <div class="home_main m-5">
        <div>
            <h2 class="text-start my-5"><u><i>Disclaimer Details</i></u></h2>
        </div>
        <p class="h4 fw-light mt-5">WILL UPDATE SOON</p>
    </div>
</div>
</div>
<?php
    
}elseif(isset($_GET['help']))
{
    
    ?>
<div class="container-fluid h-75">
    <div class="help_main m-5">
        <div>
            <h2 class="text-start text-capitalize my-4"><u><i>Help</i></u></h2>
        </div>
        <h3 class="mt-5">ACCESSIBILITY HELP</h3>
        <p class="h4 fw-light my-4">
            Use the accessibility options provided by this Web site to control the screen display. These options allow
            increasing the text size for clear visibility and better readability.
        </p>
        <h3 class="mt-5">CHANGING THE TEXT SIZE</h3>
        <b class="h5 py-5">Changing the size of the text refers to making the text appearing smaller or bigger from its standard size. There are three options provided to you to set the size of the text that affects the readability. These are:</b>
        <p class="h4 fw-light mt-5"><b> Large:</b> Displays information in the large font size.</p>
        <p class="h4 fw-light my-2"><b>Medium:</b> Displays information in a standard font size, which is the default size.</p>
        <p class="h4 fw-light my-2"><b>Small:</b> Displays information in the small font size.</p>
        </p>
    </div>
</div>
<?php
    
}elseif(isset($_GET['sitemap']))
{
    
    ?>
<div class="container-fluid ">
    <div class="home_main p-5 m-5">
        <div>
            <h2 class="text-start mb-5"><u><i>Sitemap Details</i></u></h2>
        </div>
        <ul>
            <li>Header
                <ul>
                    <li>Competitive</li>
                    <li>Home Links
                        <ul>
                            <li>home</li>
                            <li>book</li>
                            <li>examlist</li>
                            <li>login</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Account
                <ul>
                    <li>changePassword</li>
                    <li>Logout</li>
                </ul>
            </li>
            <li>Profile
                <ul>
                    <li>LatestNews
                        <ul>
                            <li>examDate</li>
                            <li>MoreInfo</li>
                        </ul>
                    </li>
                    <li>Profile modification
                        <ul>
                            <li>terms and condition</li>
                            <li>Update profile details</li>
                        </ul>
                    </li>
                    <li>relatd books
                        <ul>
                            <li>bookDate</li>
                            <li>Download Book</li>
                        </ul>
                    </li>
                    <li>applicatoin history
                        <ul>
                            <li>Apply Exam Details</li>
                            <li>Generate challan</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>Footer
                <ul>
                    <li>sitemap</li>
                    <li>help</li>
                    <li>website policies</li>
                    <li>disclaimer</li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<?php
    
}elseif(isset($_GET['policies']))
{
    ?>
<div class="container-fluid">
    <div class="home_main m-5">
        <div>
            <h2 class="text-start text-capitalize my-4"><u><i>copyright policy</i></u></h2>
        </div>
        <p class="h4 fw-light my-5">
            Material featured on this Website may be reproduced free of charge. However, the material has to be
            reproduced accurately and not to be used in a derogatory manner or in a misleading context. Wherever the
            material is being published or issued to others, the source must be prominently acknowledged. However, the
            permission to reproduce this material shall not extend to any material which is identified as being
            copyright of a third party. Authorization to reproduce such material must be obtained from the departments/
            copyright holders concerned.
        </p>
        <p class="h4 fw-light my-5">
            These terms and conditions shall be governed by and construed in accordance with the Admin Laws. Any dispute
            arising under these terms and conditions shall be subject to the exclusive jurisdiction of Admin.
        </p>
    </div>
    <div class="home_main m-5 py-5">
        <div>
            <h2 class="text-start text-capitalize my-4"><u><i>privacy policy</i></u></h2>
        </div>
        <p class="h4 fw-light my-5">
            This website does not automatically capture any specific personal information from you (like name, phone
            number or e-mail address) that allows us to identify you individually. If the this website requests you to
            provide personal information, you will be informed for the particular purposes for which the information is
            gathered and adequate security measures will be taken to protect your personal information.
        </p>
        <p class="h4 fw-light my-5">
            We do not sell or share any personally identifiable information volunteered on this website to any third
            party (public/ private). Any information provided to this Website will be protected from loss, misuse,
            unauthorized access or disclosure, alteration, or destruction.
        </p>
    </div>
    <div class="home_main m-5 py-5">
        <div>
            <h2 class="text-start  my-4"><u><i>Terms and Conditions</i></u></h2>
        </div>
        <p class="h4 fw-light my-5">
            This website (competitive exams) has been developed to facilitate candidates for access to examination
            related process flow, Though all efforts have been made to ensure the accuracy and correctness of the
            content on this website, this website is made for educational purposes only.
        </p>
        <p class="h4 fw-light my-5">
            These terms and conditions shall be governed by and construed in accordance with the Admin Laws. Any dispute
            arising under these terms and conditions shall be subject to the exclusive jurisdiction of Admin.
        </p>
    </div>



</div>
<?php
    
}
include "footer.php";?>