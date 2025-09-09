<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/slider5.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .text-p {
        font-size: 14px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
    }

    .bg-primary {
        background-color: #22255B !important;
    }

    .bg_color {
        background-color: #F7F7F7;
    }

    .popular-services {
        width: 300px;
        position: relative;
    }

    .popular-services:before {
        background: #00000075;
        width: 100%;
        content: "";
        height: 100%;
        position: absolute;
    }

    .popular-ser-desc {
        bottom: 15px;
        left: 25px;
    }

    .choose_us_title h2::before,
    .popular_title h2::before {
        content: "";
        position: absolute;
        width: 55px;
        height: 2px;
        background: #e9732a;
        bottom: -15px;
        top: 60px;
    }

    .choose_us_title,
    .popular_title {
        position: relative;
    }

    .choose_us_title h2,
    .popular_title h2 {
        font-family: "Roboto", Sans-serif;
        font-size: 30px;
        font-weight: 600;
    }

    .choose_us {
        margin-top: 70px;
    }

    .choose_content h5 {
        font-family: "Roboto", Sans-serif;
    }

    .content_hover p {
        color: #D9D9E0;
        font-weight: 300;
        font-size: 16px;
    }

    .popular-services {
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }

    .popular-services img {
        transition: 0.3s ease;
        display: block;
        width: 100%;
    }

    .popular-ser-desc {
        position: absolute;
        bottom: 15px;
        left: 20px;
        z-index: 1;
    }

    .popular-ser-desc h3 {
        margin: 0;
    }

    .content_hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px 20px 0px 20px;
        background: #181A40;
        /* overlay bg */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
        z-index: 2;
    }

    .popular-services:hover .content_hover {
        opacity: 1;
        visibility: visible;
    }

.services-btn-color{

    background-color: #E9732A;
    color: #FFFFFF;
    border-color: #E9732A;
    border-radius: 5px;
}

    @media only screen and (max-width: 991px) {
        .logo {
            width: 160px;
        }
    }

    /* accordion */
    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #797672;
        text-align: left;
        background-color: #F7F7F7;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    }

    /* Default (closed) → show plus */
    .accordion-button::after {
        flex-shrink: 0;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        left: -5px;
        top: 9px;
        content: "+";
        font-size: 25px;
        text-align: center;
        background-image: none !important;
        transition: all .2s ease-in-out;
    }

    /* Open (not collapsed) → show minus */
    .accordion-button:not(.collapsed)::after {
        content: "–";
        /* en dash or use "-" */
        font-size: 25px;
        transform: rotate(0deg);
    }

    .accordion-button:not(.collapsed) {
        color: #797672;
        background-color: #F7F7F7;
        box-shadow: rgba(0, 0, 0, 0.125) 0px -1px 0px inset;
    }

    .accordion-body {
        background-color: #F7F7F7 !important;
    }
</style>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->



<!-- Hero Banner Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-banner about-mci-hero">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Cook Islands Maritime Jurisdiction</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">

        </div>

        <div class="row choose_us">
            <div class="col-md-8 ">
                            <div class=" choose_us_title">
                <h2 class="mb-5">Seafarer Training Centres</h2>
            </div>
                <div class="row p-2 bg_color">
                    
                    <div class="col-md-12 py-3">
                        <div class="row">
                            
                            <div class="col-md-12">
                                
                                <div class="choose_content">
                                    <h5 class="fs-5 fw-bold">Cook Islands Certificate of Competency and Proficiency</h5>
                                    <p class="fw-lighter">Applications for Cook Islands Certificates of Competency (CoC) and Proficiency (CoP) are accepted for seafarers who have completed training at a Cook Islands approved Maritime Training Institution (MTC).</p>

                                    <p class="fw-lighter mt-5">For further course requirements and further information, please contact the nearest Cook Islands approved MTC near you:</p>
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <!-- Item 1 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseOne"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseOne">
                                                    Poseidon Maritime Academy (PMA), TURKEY
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">https://www.poseidonmaritimeacademy.com</a> or <a href="#">https://e-learning.poseidonmtc.com</a></p>
                                                    <p>Email: <a href="#">info@poseidonmtc.com</a> or <a href="#">info@poseidonmaritimeacademy.com</a></p>
                                                    <p>Phone: +90 532 496 35 69 or +90 533 363 26 21</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 2 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseTwo">
                                                    SSM United – Ship Management Ltd, CROATIA
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">https://www.ssm.hr</a></p>
                                                    <p>Email: <a href="#">ssm-training@ssm.hr</a></p>
                                                    <p>Phone: +385 21 558 502 or +385 21 558 507 or +385 21 558 548</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 3 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseThree">
                                                    Maritime Activities Consultants (MAC), GREECE & INDIA
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">https://mac.com.gr</a></p>
                                                    <p>Email: <a href="#">mac-gr@mac.com.gr</a></p>
                                                    <p>Phone: +302104287112</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 4 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseFour"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseFour">
                                                    International Maritime Science Academy (IMS), EGYPT
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">www.ims-academy.net</a></p>
                                                    <p>Email: <a href="#">info@ims-academy.net</a></p>
                                                    <p>Phone: +202 33358316</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 5 -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseFive"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseFive">
                                                    Seafarers Training Center Inc. (STC), PANAMA
                                                </button>
                                            </h2>
                                            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">www.stcpanama.net</a></p>
                                                    <p>Email: <a href="#">deptraining@stcpanama.net</a></p>
                                                    <p>Phone: +5073750278 or +5073835980</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Item 6 -->

                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseSix"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseSix">
                                                    Seafarers Training Center Inc. (STC), PANAMA
                                                </button>
                                            </h2>
                                            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Website: <a href="#">www.stcpanama.net</a></p>
                                                    <p>Email: <a href="#">deptraining@stcpanama.net</a></p>
                                                    <p>Phone: +5073750278 or +5073835980</p>
                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Item 7  -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed"
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseSeven"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseSix">
                                                    YASH Global Services LLC, INDIA
                                                </button>
                                            </h2>
                                            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <p>Phone: +971 585364744</p>
                                                    <p>Email: <a href="#">cy@yashglobalservices.com</a></p>

                                                    <h3 class="mb-3">Training Courses:</h3>
                                                    <?php include 'trainingcourses.php' ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="fs-5 fw-bold mt-5">Verification of Cook Islands Certificates of Competency and Cook Islands Certificates of Proficiency</p>
                                    <p class="fw-lighter">
                                        The Cook Islands Seafarers Registry is maintained through an Online database Upvise. For instant verification of any seafarer documentation issued through the Cook Islands Seafarers Registry, simply scan the QR code reflected on the certificate. For further information or assistance, please contact <a href="#">seafarers@maritimecookislands.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 d-none d-lg-block ">
                            <div class=" text-start mt-3 mb-5 mt-md-0 ps-4 popular_title">
                <h2 class="mb-0">Popular Services</h2>
            </div>
                <div class="col-md-4 ps-4 ">

                    <div class="popular-services position-relative ">
                        <img src="./img/image A training.jpg" alt="" class="image-fluid w-100">

                        <div class="popular-ser-desc position-absolute">
                            <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                        </div>

                        <div class="content_hover position-absolute">
                            <a href="">
                                <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                            </a>
                            <p class="text-p">
                                There is no legal or other impediment to any P&I Club / Insurer
                                offering cover to Cook Islands flagged vessels.
                            </p>
                        </div>
                    </div>
                    <div class="popular-services position-relative mt-5">
                        <img src="./img/image B training.jpg" alt="" class="image-fluid w-100">

                        <div class="popular-ser-desc position-absolute">
                            <h3 class="text-white fs-4">Merchant Ships</h3>
                        </div>

                        <div class="content_hover position-absolute">
                            <p class="text-p text-center">
For Endorsement of qualifications (Non-STCW) issued in accordance with National legislation, recognised International Maritime Institutions (RYA) or similar
                            </p>
<a href="#" class="services-btn-color p-2">
    Apply Now
</a>
                        </div>
                    </div>
                    <div class="popular-services position-relative mt-5">
                        <img src="./img/image C training.jpg" alt="" class="image-fluid w-100">

                        <div class="popular-ser-desc position-absolute">
                            <h3 class="text-white fs-4">Merchant Ships</h3>
                        </div>

                        <div class="content_hover position-absolute px-1">
                            <a href="">
                                <h3 class="text-white fs-4">Merchant Ships</h3>
                            </a>
                            <p class="text-p text-center">
                                Maritime Cook Islands Administrator of the Cook Islands ships registry, operates as an open registry with its main office in Rarotonga, Cook Islands, with additional offices in Italy and Monaco.
                            </p>
                            <a href="#" class="services-btn-color p-2 ">
 Verify Here
</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--========================================================================-->
        <!---------------------------- Your Content End Here ------------------------->
        <!--========================================================================-->
        <?php require 'footer.php'; ?>