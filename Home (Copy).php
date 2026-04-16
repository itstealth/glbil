<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5N5L8HB7');</script>
        <!-- End Google Tag Manager -->
        <?php //require_once APPPATH . 'Views/Include/gtag.php'; ?>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="" />

        <?php require_once APPPATH . 'Views/Include/css.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Best Institute for Legal Studies | GL BAJAJ Institute of Law, Greater Noida</title>
    </head>
    <body class="stretched">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5N5L8HB7" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="wrapper" class="clearfix">
            <?php require_once APPPATH . 'Views/Include/topbar.php'; ?>
            <?php require_once APPPATH . 'Views/Include/header.php'; ?>
            <section id="slider" class="slider-element">
                <div class="fslider" data-animation="fade" data-arrows="true">
                    <div class="flexslider">
                        <div class="slider-wrap">
                            <div class="slide">
                                <img src="<?= base_url('assets/images/banner.webp')?>" alt="Slide 1 | GLBIL, Greater Noida">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="enquiry-form-overlay d-none d-lg-block" id="enquiryFormOverlay" style="position: absolute; top: 50%; right: 5%; transform: translateY(-50%); width: 380px; z-index: 10;">
                    <div class="enquiry-form-wrap" style="background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.15);">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="fancy-title title-border mb-0">
                                <h3>Admission Enquiry</h3>
                            </div>
                           
                        </div>
                        <form id="enquiryForm" name="enquiryForm" class="mb-0" action="#" onsubmit="submitToGoogleSheet(event, 'enquiryForm')" novalidate>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <label for="name">Name <small>*</small></label>
                                    <input type="text" id="name" name="name" value="" class="sm-form-control" required oninput="validateForm('enquiryForm')"/>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <label for="email">Email <small>*</small></label>
                                    <input type="email" id="email" name="email" value="" class="sm-form-control" required oninput="validateForm('enquiryForm')"/>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="mobile">Mobile <small>*</small></label>
                                    <input type="tel" id="mobile" name="mobile" value="" class="sm-form-control" required maxlength="10" oninput="var v=this.value.replace(/[^0-9]/g,''); if(v.length==1 && !/[6-9]/.test(v)) v=''; this.value=v.slice(0,10); validateForm('enquiryForm');"/>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="program">Program <small>*</small></label>
                                    <select id="program" name="program" class="sm-form-control" required onchange="validateForm('enquiryForm')">
                                        <option value="">-- Select --</option>
                                        <option value="BALLB">BA. LL.B.</option>
                                        <option value="BCom-LLB">B.Com. LL.B.</option>
                                        <option value="LLB">LL.B.</option>
                                    </select>
                                </div>
                                  <div class="col-sm-6 form-group">
                                    <label for="state">State <small>*</small></label>
                                    <input type="text" id="state" name="state" value="" class="sm-form-control" required oninput="validateForm('enquiryForm')"/>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="city">City <small>*</small></label>
                                    <input type="text" id="city" name="city" value="" class="sm-form-control" required oninput="validateForm('enquiryForm')"/>
                                </div>
                              
                                
                                <div class="col-sm-12 center" style="padding-top: 15px;">
                                    <input type='submit' class="button" value='Submit Enquiry' disabled/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="enquiry-form-inline d-block d-lg-none w-100 px-3 py-4" id="enquiryFormInline" style="background-color: #fff;">
                    <div class="container">
                        <div class="fancy-title title-border">
                            <h3>Admission Enquiry</h3>
                        </div>
                        <form id="enquiryFormMobile" name="enquiryFormMobile" action="#" onsubmit="submitToGoogleSheet(event, 'enquiryFormMobile')" novalidate>
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="name_m">Name <small>*</small></label>
                                    <input type="text" id="name_m" name="name" value="" class="sm-form-control" required oninput="validateForm('enquiryFormMobile')"/>
                                </div>
                                <div class="col-12 form-group">
                                    <label for="email_m">Email <small>*</small></label>
                                    <input type="email" id="email_m" name="email" value="" class="sm-form-control" required oninput="validateForm('enquiryFormMobile')"/>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="mobile_m">Mobile <small>*</small></label>
                                    <input type="tel" id="mobile_m" name="mobile" value="" class="sm-form-control" required maxlength="10" oninput="var v=this.value.replace(/[^0-9]/g,''); if(v.length==1 && !/[6-9]/.test(v)) v=''; this.value=v.slice(0,10); validateForm('enquiryFormMobile');"/>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="city_m">City <small>*</small></label>
                                    <input type="text" id="city_m" name="city" value="" class="sm-form-control" required oninput="validateForm('enquiryFormMobile')"/>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="state_m">State <small>*</small></label>
                                    <input type="text" id="state_m" name="state" value="" class="sm-form-control" required oninput="validateForm('enquiryFormMobile')"/>
                                </div>
                                <div class="col-6 form-group">
                                    <label for="program_m">Program <small>*</small></label>
                                    <select id="program_m" name="program" class="sm-form-control" required onchange="validateForm('enquiryFormMobile')">
                                        <option value="">-- Select --</option>
                                        <option value="BALLB">BA. LL.B.</option>
                                        <option value="BCom-LLB">B.Com. LL.B.</option>
                                        <option value="LLB">LL.B.</option>
                                    </select>
                                </div>
                                <div class="col-12 center" style="padding-top: 15px;">
                                    <input type='submit' class="button" value='Submit Enquiry' disabled/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <div class="floating-enquiry-btn" id="floatingEnquiryBtn" style="position: fixed; right: -722px; top: 50%; transform: translateY(-50%) rotate(90deg); z-index: 9999;">
                <button class="button button-3d button-dark button-large" onclick="scrollToEnquiryForm()">Enquiry Now</button>
            </div>
            <script>
                function getUrlParams() {
                    var params = {};
                    var searchParams = new URLSearchParams(window.location.search);
                    params.utm_source = searchParams.get('utm_source') || "";
                    params.utm_medium = searchParams.get('utm_medium') || "";
                    params.utm_campaign = searchParams.get('utm_campaign') || "";
                    return params;
                }

                function validatePhone(phone) {
                    return /^[6-9]\d{9}$/.test(phone);
                }

                function validateEmail(email) {
                    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
                }

                function validateForm(formType) {
                    var name, email, phone, program, state, city;
                    var submitBtn;

                    if (formType === 'enquiryForm') {
                        name = document.getElementById('name').value.trim();
                        email = document.getElementById('email').value.trim();
                        phone = document.getElementById('mobile').value.trim();
                        program = document.getElementById('program').value;
                        state = document.getElementById('state').value.trim();
                        city = document.getElementById('city').value.trim();
                        submitBtn = document.querySelector('#enquiryForm input[type="submit"]');
                    } else {
                        name = document.getElementById('name_m').value.trim();
                        email = document.getElementById('email_m').value.trim();
                        phone = document.getElementById('mobile_m').value.trim();
                        program = document.getElementById('program_m').value;
                        state = document.getElementById('state_m').value.trim();
                        city = document.getElementById('city_m').value.trim();
                        submitBtn = document.querySelector('#enquiryFormMobile input[type="submit"]');
                    }

                    var isValid = name && email && phone && program && state && city &&
                                  validatePhone(phone) && validateEmail(email);

                    if (submitBtn) {
                        submitBtn.disabled = !isValid;
                    }
                }

                function submitToGoogleSheet(event, formType) {
                    event.preventDefault();
                    var form = event.target;
                    var submitBtn = form.querySelector('input[type="submit"], button[type="submit"]');
                    var googleScriptUrl = 'https://script.google.com/macros/s/AKfycbwLATwP0ULEKLUt-1BraxRsSRJGqsB_eOlxhg-QcWmhTlg-6jJo-1cSfDoYTGBREIaN/exec';

                    var Name, Phone, Email, Program, State, City;
                    var nameEl, emailEl, phoneEl, programEl, stateEl, cityEl;

                    if (formType === 'enquiryForm') {
                        Name = document.getElementById('name').value.trim();
                        Email = document.getElementById('email').value.trim();
                        Phone = document.getElementById('mobile').value.trim();
                        Program = document.getElementById('program').value;
                        State = document.getElementById('state').value.trim();
                        City = document.getElementById('city').value.trim();
                        nameEl = document.getElementById('name');
                        emailEl = document.getElementById('email');
                        phoneEl = document.getElementById('mobile');
                        programEl = document.getElementById('program');
                        stateEl = document.getElementById('state');
                        cityEl = document.getElementById('city');
                    } else {
                        Name = document.getElementById('name_m').value.trim();
                        Email = document.getElementById('email_m').value.trim();
                        Phone = document.getElementById('mobile_m').value.trim();
                        Program = document.getElementById('program_m').value;
                        State = document.getElementById('state_m').value.trim();
                        City = document.getElementById('city_m').value.trim();
                        nameEl = document.getElementById('name_m');
                        emailEl = document.getElementById('email_m');
                        phoneEl = document.getElementById('mobile_m');
                        programEl = document.getElementById('program_m');
                        stateEl = document.getElementById('state_m');
                        cityEl = document.getElementById('city_m');
                    }

                    // Validation
                    var errorMsg = '';
                    if (!Name) errorMsg += 'Name is required\n';
                    if (!Email) errorMsg += 'Email is required\n';
                    else if (!validateEmail(Email)) errorMsg += 'Enter a valid email\n';
                    if (!Phone) errorMsg += 'Phone is required\n';
                    else if (!validatePhone(Phone)) errorMsg += 'Phone must be 10 digits starting with 6-9\n';
                    if (!Program) errorMsg += 'Select a program\n';
                    if (!State) errorMsg += 'State is required\n';
                    if (!City) errorMsg += 'City is required\n';

                    if (errorMsg) {
                        alert(errorMsg);
                        return;
                    }

                    // Disable button and show loading
                    submitBtn.disabled = true;
                    submitBtn.value = 'Submitting...';

                    var urlParams = getUrlParams();
                    var url = new URL(googleScriptUrl);
                    url.searchParams.append("Name", Name);
                    url.searchParams.append("Phone", Phone);
                    url.searchParams.append("Email", Email);
                    url.searchParams.append("Program", Program);
                    url.searchParams.append("State", State);
                    url.searchParams.append("City", City);
                    url.searchParams.append("utm_source", urlParams.utm_source);
                    url.searchParams.append("utm_medium", urlParams.utm_medium);
                    url.searchParams.append("utm_campaign", urlParams.utm_campaign);

                    fetch(url.toString(), {
                        method: 'GET',
                        mode: 'no-cors'
                    }).then(function() {
                        window.location.href = '/index.php/resource/thank-you';
                    }).catch(function() {
                        window.location.href = '/index.php/resource/thank-you';
                    });
                }
                function scrollToEnquiryForm() {
                    var form = document.getElementById('enquiryFormOverlay');
                    if (form && window.innerWidth >= 992) {
                        form.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    } else {
                        var inlineForm = document.getElementById('enquiryFormInline');
                        if (inlineForm) {
                            inlineForm.scrollIntoView({ behavior: 'smooth', block: 'start' });
                        }
                    }
                }
                function closeEnquiryForm() {
                    document.getElementById('enquiryFormOverlay').style.display = 'none';
                }
                window.addEventListener('scroll', function() {
                    var slider = document.getElementById('slider');
                    var floatingBtn = document.getElementById('floatingEnquiryBtn');
                    if (slider && floatingBtn) {
                        var sliderBottom = slider.offsetTop + slider.offsetHeight;
                        if (window.scrollY > sliderBottom - 50) {
                            floatingBtn.style.right = '-72px';
                        } else {
                            floatingBtn.style.right = '-722px';
                        }
                    }
                });
            </script>
            <style>
                @media (max-width: 991px) {
                    #content .content-wrap {
                        padding-top: 20px !important;
                        padding-bottom: 20px !important;
                    }
                }
            </style>
            
            <section id="content">
                <div class="content-wrap pb-0">
                    <div class="container clearfix">
                        <div class="row bottommargin-lg">
                            <div class="col-md-5" data-animate="fadeInLeft">
                                <img src="<?= base_url('assets/images/glbil.webp')?>" alt="Building | GLBIL, Greater Noida" class="w-100">
                            </div>
                            <div class="col-md-7">
                                <div class="heading-block border-bottom-0">
                                    <span class="before-heading color" data-animate="fadeInRight" data-delay="100">Shaping Ethical &amp; Industry Ready Legal Professionals</span>
                                    <h2 data-animate="fadeInRight" data-delay="200">GL BAJAJ Institute of Law</h2>
                                </div>
                                <p data-animate="fadeInUp" data-delay="300"><strong>GL Bajaj Institute of Law (GLBIL), Greater Noida</strong>, is established and governed under the aegis of the <em>Institute of Dental and Medical Research Society</em> and is affiliated with <em>Chaudhary Charan Singh University, Meerut</em>.</p>
                                <p data-animate="fadeInUp" data-delay="400">Aligned with the vision of the GL Bajaj Group, the Institute is committed to quality legal education through a student-centric teaching–learning framework that integrates academic rigor, skill development, and ethical values, with the objective of fostering holistic development and professional competence.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section my-0 py-5" >
                        <div class="container clearfix">
                            <div class="heading-block center">
                                <h2>Programs Offered</h2>
                                <span>Three specialized programs are offered to nurture future-ready legal professionals with academic rigor and practical exposure.</span>
                            </div>
                            <div id="posts" class="post-grid row grid-container gutter-40">
                                <div class="entry col-md-4 col-sm-6 col-12" data-animate="zoomIn">
                                    <div class="grid-inner">
                                        <div class="entry-image">
                                            <img src="<?= base_url('assets/images/program-1.webp')?>" alt="BA LLB Program | GLBIL, Greater Noida">
                                        </div>
                                        <div class="entry-title">
                                            <h2><a href="<?= base_url('index.php/academics/ba-llb-5-year-integrated-program')?>">B.A. LL.B. (5-Year Integrated Program)</a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>An integrated program combining liberal arts and legal education to build strong analytical, advocacy, and ethical foundations.</p>
                                            <a href="<?= base_url('index.php/academics/ba-llb-5-year-integrated-program')?>" class="more-link">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry col-md-4 col-sm-6 col-12" data-animate="zoomIn" data-delay="100">
                                    <div class="grid-inner">
                                        <div class="entry-image">
                                            <img src="<?= base_url('assets/images/program-2.webp')?>" alt="BCom LLB Program | GLBIL, Greater Noida">
                                        </div>
                                        <div class="entry-title">
                                            <h2><a href="<?= base_url('index.php/academics/bcom-llb-5-year-integrated-program')?>">B.Com. LL.B. (5-Year Integrated Program)</a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>An integrated program merging business management and legal education to develop commercially aware, practice-ready professionals.</p>
                                            <a href="<?= base_url('index.php/academics/bcom-llb-5-year-integrated-program')?>" class="more-link">Explore</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry col-md-4 col-sm-6 col-12" data-animate="zoomIn" data-delay="300">
                                    <div class="grid-inner">
                                        <div class="entry-image">
                                            <img src="<?= base_url('assets/images/program-3.webp')?>" alt="LLB Program | GLBIL, Greater Noida">
                                        </div>
                                        <div class="entry-title">
                                            <h2><a href="<?= base_url('index.php/academics/llb-3-year-program')?>">LL.B. (3-Year Undergraduate Program)</a></h2>
                                        </div>
                                        <div class="entry-content">
                                            <p>A professionally focused undergraduate law program designed for graduates seeking comprehensive legal education.</p>
                                            <a href="<?= base_url('index.php/academics/llb-3-year-program')?>" class="more-link">Explore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="button button-full center">
                        <div class="container clearfix">
                            <b>Three Flagship Law Programs | One Vision of Legal Excellence</b>
                        </div>
                    </a>
                    <div class="row align-items-stretch">
                        <div class="col-lg-4 dark col-padding overflow-hidden" data-animate="fadeInLeft" style="background-color: #c48a47;">
                            <div>
                                <h3 class="text-uppercase" style="font-weight: 600;">Vision</h3>
                                <p style="line-height: 1.8;">To be a centre of excellence in legal education, developing globally competent, ethical, and socially responsive legal professionals committed to justice and the rule of law.</p>
                                <a href="<?= base_url('index.php/about-us/vision-mission-and-core-values')?>" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                                <i class="icon-bulb bgicon"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 dark col-padding overflow-hidden" data-animate="fadeInUp" style="background-color: #80471c;">
                            <div>
                                <h3 class="text-uppercase" style="font-weight: 600;">Mission</h3>
                                <ul class="iconlist mb-10">
                                    <li><i class="icon-line-circle-check"></i> Imparting strong foundational knowledge of law and analytical, advocacy, and research skills.</li>
                                    <li><i class="icon-line-circle-check"></i> Promoting experiential learning through moot courts, legal aid clinics, alternative dispute resolution mechanism, internships, and exposure to contemporary legal tools and technologies.</li>
                                </ul>
                                <a href="<?= base_url('index.php/about-us/vision-and-mission-and-core-values')?>" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                                <i class="icon-thumbs-up bgicon"></i>
                            </div>
                        </div>
                        <div class="col-lg-4 dark col-padding overflow-hidden" data-animate="fadeInRight" style="background-color: #472510">
                            <div>
                                <h3 class="text-uppercase" style="font-weight: 600;">Core Values</h3>
                                <ul class="iconlist mb-10">
                                    <li><i class="icon-line-circle-check"></i> Developing competent, responsible, and globally aware legal professionals through quality education and experiential learning.</li>
                                    <li><i class="icon-line-circle-check"></i> Fostering commitment to constitutional values, access to justice, and service to marginalized communities.</li>
                                </ul>
                                <a href="<?= base_url('index.php/about-us/vision-and-mission-and-core-values')?>" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
                                <i class="icon-cog bgicon"></i>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="row clearfix align-items-stretch">
                        <div class="col-lg-6 center col-padding" data-animate="zoomIn" style="background: url('<?= base_url('assets/images/court-room.webp')?>') center center no-repeat; background-size: cover;"></div>
                        <div class="col-lg-6 col-padding">
                            <div class="heading-block border-bottom-0">
                                <span class="before-heading color" data-animate="fadeIn">Begin Your Legal Journey with Confidence</span>
                                <h3 data-animate="fadeIn"">Why Choose GL BAJAJ?</h3>
                                <div class="row col-mb-50 mt-5">
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Industry-Oriented Legal Education</h4>
                                                <p>Our pedagogy emphasizes hands-on learning - ensuring students graduate with confidence and competence.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Practice-Ready Training</h4>
                                                <p>The practical approach prepares students for litigation, corporate law, judiciary, policy, and compliance roles.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Comprehensive Law Programs</h4>
                                                <p>Each program is carefully designed to combine legal theory with real-world application.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Advantage of Delhi-NCR Location</h4>
                                                <p>Located in Greater Noida, at the heart of Delhi-NCR, GLBIL provides students with unparalleled exposure.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Mentorship-Driven Learning Environment</h4>
                                                <p>With smaller batch sizes and accessible faculty, GLBIL ensures personalized academic mentoring.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Modern Infrastructure & Resources</h4>
                                                <p>Smart classrooms and digital learning tools with dedicated spaces for advocacy, debate, and research.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line-circle-check"></i></a>
                                            </div>
                                            <div class="fbox-content">
                                                <h4>Holistic Development</h4>
                                                <p>GLBIL nurtures not just lawyers, but responsible citizens. Students actively engage in ethical training, leadership development, and community outreach.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-yellow py-5">
                        <div class="container clearfix">
                            <div class="heading-block center">
                                <h2>Institutional Highlights</h2>
                                <span>Committed to academic excellence, professional competence, and ethical legal education.</span>
                            </div>
                            <div class="row col-mb-50">
                                <div class="col-sm-6 col-lg-2 offset-lg-1">
                                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0" data-animate="fadeIn">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="i-alt border-0 icon-building2"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Bar Council Recognition</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-2">
                                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0" data-animate="fadeIn" data-delay="100">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="i-alt border-0 icon-chalkboard-teacher"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Experienced Faculty</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-2">
                                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0" data-animate="fadeIn" data-delay="200">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="i-alt border-0 icon-gavel"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Moot Court</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-2">
                                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0" data-animate="fadeIn" data-delay="300">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="i-alt border-0 icon-handshake"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Legal Aid Clinic</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-2">
                                    <div class="feature-box fbox-center fbox-light fbox-effect border-bottom-0" data-animate="fadeIn" data-delay="400">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="i-alt border-0 icon-comments2"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>ADR Center</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
                        <div class="container clearfix">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="<?= base_url('assets/favicon/ms-icon-70x70.png')?>" alt="Shalini Singh Testimonais"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>I am currently pursuing my studies at GL Bajaj Institute of Law, and my experience here has been truly enriching and fulfilling. I receive special academic attention from experienced and dedicated faculty members, which has helped me understand subjects more clearly and build confidence. Along with strong theoretical learning, I am gaining valuable practical exposure through moot courts, interactive sessions, and hands-on learning. I genuinely enjoy studying here, as the institute supports my overall development, sharpens my critical thinking, and instills professional discipline. GL Bajaj Institute of Law is playing an important role in shaping my skills and preparing me for a successful legal career.</p>
                                            <div class="testi-meta">
                                                Shalini Singh
                                                <span>LL.B., 3 Years Programme, 2025-26</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="<?= base_url('assets/favicon/ms-icon-70x70.png')?>" alt="Steve Jobs Testimonail"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>I am a student at GL Bajaj Institute, and my experience here has been highly positive and enriching. The academic environment is supportive, and the faculty members guide me at every step, helping me build strong conceptual understanding. Along with classroom learning, I am actively involved in legal aid activities and various field visits, which have enhanced my overall learning experience. I enjoy being part of the institute, as it encourages discipline, confidence, and all-round development. Studying at GL Bajaj Institute is helping me grow both personally and professionally.</p>
                                            <div class="testi-meta">
                                                Shaurya Dutta Singh
                                                <span>B.Com. LL.B., 5 Years Integrated Programme, 2025-26</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="<?= base_url('assets/favicon/ms-icon-70x70.png')?>" alt="Teya Bhati Testimonail"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>I am a student at GL Bajaj Institute of Law, and I am truly enjoying my academic journey here. The institute provides excellent practical exposure through field visits, which helps me understand the real application of law. I am also actively involved in various student clubs such as the Literary Club, Mooting Club, and Debate Club, which have helped enhance my skills and confidence. In addition to academics, the vibrant events organized by GL Bajaj make campus life engaging and enjoyable. I truly enjoy studying here and feel confident about my personal and professional growth.</p>
                                            <div class="testi-meta">
                                                Teya Bhati
                                                <span>B.A. LL.B., 5 Years Integrated Programme, 2025-26</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require_once APPPATH . 'Views/Include/subscribe.php'; ?>
                </div>
            </section>
            <?php require_once APPPATH . 'Views/Include/footer.php'; ?>
        </div>

        <?php require_once APPPATH . 'Views/Include/js.php'; ?>
    </body>
</html>