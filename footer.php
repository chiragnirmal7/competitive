<style>
@media (max-width: 990px){
        .update {
            margin: 0 !important;
            padding: 0 !important;
        }
    }
    @media (max-width: 650px){
        .update {
            flex-direction: column;
        }
        .footer-link-list{
            margin-top: 10px !important;
        }
        .footer-link-list li{
            font-size: 9.5px;
        }
    }
</style>
<section class="footer_main">
    <div class="container-fluid bg-dark py-4 fw-bold text-light text-uppercase">
        <div class="update d-flex justify-content-between align-items-center    mx-5 px-5">
            <ul class="d-flex justify-content-between m-0">
                <li class="list-unstyled mx-3"><?php echo "Last Update On : " .date('d-m-Y', strtotime("-1 Day"));  ?></li>
            </ul>
            <ul class="d-flex justify-content-between m-0 footer-link-list">
                <a href="footerdetails.php?sitemap=y"><li class="list-unstyled mx-3">Sitemap</li></a>
                <a href="footerdetails.php?help=y"><li class="list-unstyled mx-3">Help</li></a>
                <a href="footerdetails.php?policies=y"><li class="list-unstyled mx-3">Website Policies</li></a>
                <a href="footerdetails.php?desclaimer=y"><li class="list-unstyled mx-3">Disclaimer</li></a>
            </ul>
        </div>
        
    </div>
    <div class="footer fw-bold">
        <div class="rights text-center my-3"><i>
            &copy; 2021 COMPETITIVE. All Rights Reserved.
    </i></div>
    </div>
</section>
<!-- © -->