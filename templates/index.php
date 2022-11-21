<?php /* Template Name: Home Page */ ?>

<?php
get_header();
the_post();
?>


<main class="main">
    <section class="hero">
        <h1 class="title">
            <?php the_field('hero_title'); ?>
        </h1>
        <div id="tsparticles"></div>
    </section>
    <?php if (have_rows('discover_items')) : ?>
        <section class="discover">
            <div class="wrap">
                <h2 class="title"><?php the_field('discover_title'); ?></h2>
                <div class="discover__slider swiper">
                    <div class="swiper-wrapper">
                        <?php
                        while (have_rows('discover_items')) :
                            the_row();
                            $discover_item = get_sub_field('discover_item');
                        ?>
                            <div class="swiper-slide discover__item">

                                <h3 class="title">
                                    <?php echo $discover_item['discover_item_text']; ?>
                                </h3>
                                <img src="<?php echo $discover_item['discover_item_image']; ?>" alt="">
                            </div>
                        <?php
                        endwhile; ?>
                    </div>                    
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="how">
        <div class="wrap">
            <h2 class="title">
                How It Works
            </h2>
            <div class="how__items">
                <div current-index="1" class="how__item active">
                    <span>
                        1
                    </span>
                    <div class="how__text">
                        Leverage ubiquitous claims data to optimize care journeys and revenue flows. 
                    </div>
                    <div class="how__descr">
                        Effectively managing patient care means improving network utilization, controlling over and
                        under-treatment, creating health equity, and helping your providers and service-lines drive
                        better
                        patient outcomes. 
                    </div>
                </div>
                <div current-index="1" class="how__item  dublicate hide">
                    <span>
                        1
                    </span>
                    <div class="how__text">
                        Leverage ubiquitous claims data to optimize care journeys and revenue flows. 
                    </div>
                    <div class="how__descr">
                        Effectively managing patient care means improving network utilization, controlling over and
                        under-treatment, creating health equity, and helping your providers and service-lines drive
                        better
                        patient outcomes. 
                    </div>
                </div>
                <div index="1" class="how__item">
                    <span>
                        1
                    </span>
                    <div class="how__text">
                        Leverage ubiquitous claims data to optimize care journeys and revenue flows. 
                    </div>
                    <div class="how__descr">
                        Effectively managing patient care means improving network utilization, controlling over and
                        under-treatment, creating health equity, and helping your providers and service-lines drive
                        better
                        patient outcomes. 
                    </div>
                </div>
                <div index="2" class="how__item">
                    <span>
                        2
                    </span>
                    <div class="how__text">
                        Ingest anonymized claims data from standard sources like EDI 837s, CCLF, FHIR and more.
                    </div>
                    <div class="how__descr">
                        Working with readily transmissible data means we don’t need to integrate with your legacy EHR
                        system. No PHI or EHR data is required. 
                    </div>
                </div>
                <div index="3" class="how__item">
                    <span>
                        3
                    </span>
                    <div class="how__text">
                        Process the data to graph relationships, pathways, diagnoses, referrals, procedures and
                        interrelated
                        conditions.
                    </div>

                </div>
                <div index="4" class="how__item">
                    <span>
                        4
                    </span>
                    <div class="how__text">
                        Apply our proprietary deep learning Care Coordination Intelligence Engine (CCIE) to generate
                        KPIs,
                        trends and hidden networks of care.  
                    </div>
                </div>
                <div index="5" class="how__item">
                    <span>
                        5
                    </span>
                    <div class="how__text">
                        Optimize service line utilization and stem revenue leakage.
                    </div>
                    <div class="how__descr">
                        Reveal patterns of care, central providers and at-risk patients with a user-friendly dashboard
                        featuring trends and scorecards for healthcare managers.
                    </div>
                </div>
            </div>
            <div class="anim">
                <div id="step-1" class="anim__step active">
                    <div class="funnel">
                        <div class="docs">
                            <svg id="doc-1" width="182" height="188" viewBox="0 0 182 188" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g filter="url(#filter0_d_7248_3209)">
                                    <path d="M39.9779 58.1541L31.5701 63.0084C30.2959 63.744 29.3661 64.9558 28.9853 66.377C28.6045 67.7982 28.8038 69.3125 29.5395 70.5867L78.0821 154.665C78.8178 155.939 80.0295 156.869 81.4507 157.25C82.8719 157.631 84.3862 157.431 85.6604 156.696L150.521 119.248C151.795 118.513 152.725 117.301 153.106 115.88C153.486 114.459 153.287 112.944 152.551 111.67L104.009 27.5918C103.273 26.3176 102.061 25.3878 100.64 25.007C99.219 24.6262 97.7047 24.8256 96.4304 25.5612L64.0003 44.2848" fill="#FDFCFF" />
                                    <path d="M39.9779 58.1541L31.5701 63.0084C30.2959 63.744 29.3661 64.9558 28.9853 66.377C28.6045 67.7982 28.8038 69.3125 29.5395 70.5867L78.0821 154.665C78.8178 155.939 80.0295 156.869 81.4507 157.25C82.8719 157.631 84.3862 157.431 85.6604 156.696L150.521 119.248C151.795 118.513 152.725 117.301 153.106 115.88C153.486 114.459 153.287 112.944 152.551 111.67L104.009 27.5918C103.273 26.3176 102.061 25.3878 100.64 25.007C99.219 24.6262 97.7047 24.8255 96.4304 25.5612L64.0003 44.2848" stroke="#523EE5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path d="M35.1801 60.9275L36.6158 55.5696C36.9963 54.1485 37.9258 52.9367 39.1998 52.2008L58.8308 40.8668C59.4679 40.499 60.2251 40.3993 60.9357 40.5897C61.6463 40.7801 62.2522 41.245 62.62 41.8821L97.2933 101.938L78.3474 96.8615L73.2709 115.807L39.9846 58.1537M86.4468 138.629L134.491 110.89L86.4468 138.629ZM71.6351 57.4966L95.6574 43.6273L71.6351 57.4966ZM81.3436 74.3123L105.366 60.443L81.3436 74.3123ZM91.0521 91.1279L115.074 77.2586L91.0521 91.1279ZM76.7383 121.813L124.783 94.0743L76.7383 121.813Z" fill="#523EE5" />
                                <path d="M35.1801 60.9275L36.6158 55.5696C36.9963 54.1485 37.9258 52.9367 39.1998 52.2008L58.8308 40.8668C59.4679 40.499 60.2251 40.3993 60.9357 40.5897C61.6463 40.7801 62.2522 41.245 62.62 41.8821L97.2933 101.938L78.3474 96.8615L73.2709 115.807L39.9846 58.1537M86.4468 138.629L134.491 110.89M71.6351 57.4966L95.6574 43.6273M81.3436 74.3123L105.366 60.443M91.0521 91.1279L115.074 77.2586M76.7383 121.813L124.783 94.0743" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <defs>
                                    <filter id="filter0_d_7248_3209" x="2.7962" y="2.81799" width="176.498" height="184.621" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="12" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.12 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7248_3209" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7248_3209" result="shape" />
                                    </filter>
                                </defs>
                            </svg>
                            <svg id="doc-2" width="101" height="101" viewBox="0 0 101 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_7248_3212)">
                                    <g filter="url(#filter0_d_7248_3212)">
                                        <path d="M27 16.5L21.1751 16.9749C20.1859 17.0862 19.2814 17.5859 18.6606 18.364C18.0398 19.1422 17.7536 20.1351 17.8649 21.1243L25.2081 86.3965C25.3194 87.3858 25.8191 88.2902 26.5972 88.911C27.3754 89.5318 28.3683 89.8181 29.3575 89.7068L79.7104 84.042C80.6996 83.9307 81.6041 83.431 82.2249 82.6529C82.8457 81.8747 83.1319 80.8818 83.0206 79.8926L75.6774 14.6204C75.5661 13.6312 75.0665 12.7267 74.2883 12.1059C73.5101 11.4851 72.5172 11.1989 71.528 11.3101L47.0001 14" fill="#FDFCFF" />
                                        <path d="M27 16.5L21.1751 16.9749C20.1859 17.0862 19.2814 17.5859 18.6606 18.364C18.0398 19.1422 17.7536 20.1351 17.8649 21.1243L25.2081 86.3965C25.3194 87.3858 25.8191 88.2902 26.5972 88.911C27.3754 89.5318 28.3683 89.8181 29.3575 89.7068L79.7104 84.042C80.6996 83.9307 81.6041 83.431 82.2249 82.6529C82.8457 81.8747 83.1319 80.8818 83.0206 79.8926L75.6774 14.6204C75.5661 13.6312 75.0665 12.7267 74.2883 12.1059C73.5101 11.4851 72.5172 11.1989 71.528 11.3101L47.0001 14" stroke="#523EE5" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <path d="M23.9743 16.6605L26.3146 13.7268C26.9352 12.9486 27.8396 12.4488 28.8287 12.3373L44.0688 10.6228C44.5634 10.5672 45.0599 10.7103 45.449 11.0207C45.838 11.3311 46.0879 11.7833 46.1435 12.2779L51.3887 58.9009L41.015 50.6254L32.7395 60.999L27.7041 16.2409M34.7326 78.7157L72.031 74.5196M47.5073 24.3999L66.1565 22.3019M48.9759 37.4543L67.6251 35.3563M50.4445 50.5088L69.0937 48.4107M33.264 65.6613L70.5624 61.4652" stroke="#523EE5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <filter id="filter0_d_7248_3212" x="-7.90863" y="-10.4634" width="116.703" height="129.944" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                        <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                        <feOffset dy="4" />
                                        <feGaussianBlur stdDeviation="12" />
                                        <feComposite in2="hardAlpha" operator="out" />
                                        <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.12 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7248_3212" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7248_3212" result="shape" />
                                    </filter>
                                    <clipPath id="clip0_7248_3212">
                                        <rect width="90.0809" height="90.0809" fill="white" transform="translate(0.648438 10.7861) rotate(-6.41884)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg id="doc-3" width="90" height="90" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_7248_3218)">
                                    <path d="M60.6521 18.3393L71.3316 36.9142M32.4534 10.7288C31.6844 10.5414 30.8726 10.6621 30.1913 11.0651C29.5101 11.4682 29.0134 12.1216 28.8074 12.8858L14.937 64.2792C14.7306 65.0431 14.8309 65.8574 15.2165 66.5483C15.6022 67.2392 16.2426 67.7521 17.0012 67.9773L56.9741 78.7656C57.7506 78.9751 58.5786 78.8677 59.2758 78.4668C59.9731 78.0659 60.4825 77.4045 60.6921 76.628L71.405 36.934L59.6924 33.7729C58.9333 33.5478 58.2922 33.0348 57.9063 32.3434C57.5204 31.6521 57.4202 30.8372 57.6271 30.0729L60.7882 18.3603L32.4534 10.7288Z" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M33.1953 39.9409L57.0904 46.3899M28.4138 57.6574L52.3089 64.1064M30.8046 48.7992L54.6997 55.2482" stroke="#523EE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7248_3218">
                                        <rect width="73" height="73" fill="white" transform="translate(19.0234) rotate(15.1036)" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <svg id="doc-4" width="96" height="97" viewBox="0 0 96 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_7248_3215)">
                                    <path d="M50.5023 21.0001L46.9128 18.5276C46.3123 18.1065 45.569 17.9413 44.8466 18.0682C44.1242 18.1951 43.4818 18.6038 43.0607 19.2044L15.277 58.8321C14.8559 59.4327 14.6906 60.1759 14.8176 60.8983C14.9445 61.6207 15.3532 62.2631 15.9538 62.6842L46.5237 84.1174C47.1243 84.5384 47.8675 84.7037 48.5899 84.5768C49.3123 84.4498 49.9547 84.0411 50.3758 83.4406L78.1596 43.8129C78.5806 43.2123 78.7459 42.469 78.619 41.7466C78.492 41.0242 78.0833 40.3818 77.4828 39.9608L62.9964 29.4999" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M48.6155 19.7185L51.3389 19.24C52.0612 19.113 52.8044 19.2781 53.405 19.699L62.6576 26.1861C62.9578 26.3967 63.1622 26.7179 63.2256 27.0791C63.2891 27.4403 63.2065 27.8119 62.996 28.1122L43.1504 56.4177L41.4584 46.7875L31.8282 48.4795L50.8799 21.3062M24.2869 59.2356L46.9313 75.112M57.8361 35.4716L69.1583 43.4098M52.2794 43.3972L63.6016 51.3354M46.7226 51.3227L58.0448 59.2609M29.8436 51.31L52.488 67.1865" stroke="#523EE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7248_3215">
                                        <rect width="66.3734" height="71.1305" fill="white" transform="translate(41.6484 0.232422) rotate(35.0351)" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <svg class="funnel-front" width="256" height="202" viewBox="0 0 256 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <mask id="path-1-inside-1_7320_2778" fill="white">
                                <path d="M104.81 149.635L12.5751 17.9532C9.07295 12.9532 14.7195 5.68715 20.5914 7.35598C78.7186 23.8762 177.56 23.8581 235.599 7.30188C241.455 5.63135 247.093 12.8439 243.622 17.848L152.221 149.645C151.292 150.984 150.795 152.574 150.795 154.204V190.144C150.795 192.308 149.637 194.324 147.703 195.296C135.53 201.418 123.453 203.08 111.063 201.34C108.249 200.945 106.258 198.463 106.258 195.621V154.224C106.258 152.582 105.752 150.98 104.81 149.635Z" />
                            </mask>
                            <path d="M104.81 149.635L12.5751 17.9532C9.07295 12.9532 14.7195 5.68715 20.5914 7.35598C78.7186 23.8762 177.56 23.8581 235.599 7.30188C241.455 5.63135 247.093 12.8439 243.622 17.848L152.221 149.645C151.292 150.984 150.795 152.574 150.795 154.204V190.144C150.795 192.308 149.637 194.324 147.703 195.296C135.53 201.418 123.453 203.08 111.063 201.34C108.249 200.945 106.258 198.463 106.258 195.621V154.224C106.258 152.582 105.752 150.98 104.81 149.635Z" fill="#FDFCFF" />
                            <path d="M12.5751 17.9532L8.47977 20.8217L12.5751 17.9532ZM104.81 149.635L100.715 152.503L104.81 149.635ZM152.221 149.645L156.329 152.494L152.221 149.645ZM243.622 17.848L239.514 14.9986L243.622 17.848ZM235.599 7.30188L234.227 2.49369L234.227 2.49369L235.599 7.30188ZM20.5914 7.35598L19.2245 12.1655L20.5914 7.35598ZM111.063 201.34L110.368 206.291L111.063 201.34ZM147.703 195.296L145.457 190.829H145.457L147.703 195.296ZM8.47977 20.8217L100.715 152.503L108.905 146.766L16.6704 15.0846L8.47977 20.8217ZM101.258 154.224V195.621H111.258V154.224H101.258ZM155.795 190.144V154.204H145.795V190.144H155.795ZM156.329 152.494L247.731 20.6973L239.514 14.9986L148.112 146.796L156.329 152.494ZM234.227 2.49369C205.809 10.6003 167.09 14.7236 128.127 14.7326C89.1644 14.7415 50.4222 10.6361 21.9583 2.54645L19.2245 12.1655C48.8877 20.596 88.6301 24.7417 128.13 24.7326C167.628 24.7235 207.35 20.5597 236.97 12.1101L234.227 2.49369ZM110.368 206.291C123.72 208.167 136.829 206.362 149.95 199.763L145.457 190.829C134.232 196.475 123.186 197.994 111.759 196.389L110.368 206.291ZM247.731 20.6973C251.03 15.9398 249.723 10.47 247.071 7.02323C244.433 3.59374 239.585 0.965285 234.227 2.49369L236.97 12.1101C237.468 11.9679 238.368 12.1105 239.145 13.1207C239.496 13.5776 239.649 14.0248 239.68 14.3395C239.705 14.5999 239.658 14.7899 239.514 14.9986L247.731 20.6973ZM155.795 154.204C155.795 153.593 155.981 152.996 156.329 152.494L148.112 146.796C146.603 148.971 145.795 151.556 145.795 154.204H155.795ZM145.795 190.144C145.795 190.556 145.582 190.766 145.457 190.829L149.95 199.763C153.691 197.882 155.795 194.06 155.795 190.144H145.795ZM101.258 195.621C101.258 200.746 104.882 205.521 110.368 206.291L111.759 196.389C111.654 196.374 111.554 196.327 111.454 196.207C111.346 196.076 111.258 195.873 111.258 195.621H101.258ZM100.715 152.503C101.068 153.008 101.258 153.609 101.258 154.224H111.258C111.258 151.556 110.436 148.952 108.905 146.766L100.715 152.503ZM16.6704 15.0846C16.5253 14.8775 16.4773 14.6877 16.5022 14.4247C16.5323 14.1067 16.6855 13.6543 17.0395 13.1914C17.823 12.167 18.7287 12.0246 19.2245 12.1655L21.9583 2.54645C16.5821 1.01851 11.7287 3.67473 9.09646 7.11616C6.45131 10.5745 5.14782 16.0647 8.47977 20.8217L16.6704 15.0846Z" fill="#523EE5" mask="url(#path-1-inside-1_7320_2778)" />
                            <path d="M238.535 9.27794C213.848 18.9947 171.168 24 128 24C84.8318 24 42.1518 18.9947 17.465 9.27794L14.535 16.7221C40.6608 27.0053 84.5745 32 128 32C171.426 32 215.339 27.0053 241.465 16.7221L238.535 9.27794Z" fill="#523EE5" />
                        </svg>
                        <svg class="funnel-back" width="296" height="281" viewBox="0 0 296 281" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="129" y="225" width="38" height="56" fill="url(#paint0_linear_7320_2777)" />
                            <g filter="url(#filter0_dd_7320_2777)">
                                <mask id="path-2-inside-1_7320_2777" fill="white">
                                    <path d="M124.124 179.234L34.0815 51.3929C29.8586 45.3973 33.3141 37.0594 40.5653 35.9638C111.171 25.2959 184.831 25.3875 255.441 35.9848C262.691 37.0728 266.16 45.4011 261.952 51.4036L172.32 179.24C171.14 180.922 170.507 182.927 170.507 184.981V215.498C170.507 220.245 167.174 224.389 162.47 225.025C152.887 226.318 143.545 226.329 133.966 225.032C129.27 224.396 125.949 220.255 125.949 215.516V184.993C125.949 182.931 125.311 180.92 124.124 179.234Z" />
                                </mask>
                                <path d="M124.124 179.234L34.0815 51.3929C29.8586 45.3973 33.3141 37.0594 40.5653 35.9638C111.171 25.2959 184.831 25.3875 255.441 35.9848C262.691 37.0728 266.16 45.4011 261.952 51.4036L172.32 179.24C171.14 180.922 170.507 182.927 170.507 184.981V215.498C170.507 220.245 167.174 224.389 162.47 225.025C152.887 226.318 143.545 226.329 133.966 225.032C129.27 224.396 125.949 220.255 125.949 215.516V184.993C125.949 182.931 125.311 180.92 124.124 179.234Z" fill="#EAEBFF" />
                                <path d="M34.0815 51.3929L38.9869 47.9378H38.9869L34.0815 51.3929ZM124.124 179.234L119.219 182.689L119.219 182.689L124.124 179.234ZM172.32 179.24L177.232 182.685V182.685L172.32 179.24ZM261.952 51.4036L257.039 47.9591V47.9591L261.952 51.4036ZM133.966 225.032L134.772 219.086L134.772 219.086L133.966 225.032ZM162.47 225.025L161.667 219.079L162.47 225.025ZM40.5653 35.9638L41.4616 41.8965H41.4616L40.5653 35.9638ZM255.441 35.9848L254.551 41.9183L255.441 35.9848ZM29.1761 54.8479L119.219 182.689L129.03 175.779L38.9869 47.9378L29.1761 54.8479ZM119.949 184.993V215.516H131.949V184.993H119.949ZM176.507 215.498V184.981H164.507V215.498H176.507ZM177.232 182.685L266.865 54.8482L257.039 47.9591L167.407 175.795L177.232 182.685ZM133.161 230.977C143.279 232.348 153.161 232.336 163.272 230.971L161.667 219.079C152.612 220.301 143.811 220.311 134.772 219.086L133.161 230.977ZM41.4616 41.8965C111.468 31.3191 184.526 31.4088 254.551 41.9183L256.332 30.0512C185.137 19.3661 110.874 19.2727 39.6689 30.0312L41.4616 41.8965ZM266.865 54.8482C273.568 45.2875 268.1 31.8173 256.332 30.0512L254.551 41.9183C257.283 42.3283 258.753 45.5148 257.039 47.9591L266.865 54.8482ZM176.507 184.981C176.507 184.159 176.76 183.357 177.232 182.685L167.407 175.795C165.52 178.487 164.507 181.694 164.507 184.981H176.507ZM164.507 215.498C164.507 217.506 163.141 218.88 161.667 219.079L163.272 230.971C171.208 229.899 176.507 222.985 176.507 215.498H164.507ZM119.949 215.516C119.949 222.988 125.23 229.903 133.161 230.977L134.772 219.086C133.311 218.888 131.949 217.523 131.949 215.516H119.949ZM119.219 182.689C119.694 183.364 119.949 184.168 119.949 184.993H131.949C131.949 181.694 130.929 178.476 129.03 175.779L119.219 182.689ZM38.9869 47.9378C37.2665 45.4953 38.7335 42.3087 41.4616 41.8965L39.6689 30.0312C27.8947 31.8101 22.4508 45.2994 29.1761 54.8479L38.9869 47.9378Z" fill="#523EE5" mask="url(#path-2-inside-1_7320_2777)" />
                            </g>
                            <path d="M148 227L148 273.5" stroke="#523EE5" stroke-width="14" stroke-linecap="round" />
                            <defs>
                                <filter id="filter0_dd_7320_2777" x="0.249084" y="-0.000244141" width="295.523" height="262" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="16" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7320_2777" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="-16" dy="-8" />
                                    <feGaussianBlur stdDeviation="8" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_7320_2777" result="effect2_dropShadow_7320_2777" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7320_2777" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_7320_2777" x1="148" y1="225" x2="148" y2="281" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#D6CCFF" />
                                    <stop offset="1" stop-color="#FDFCFF" stop-opacity="0" />
                                </linearGradient>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div id="step-2" class="anim__step">
                    <svg class="line" width="105" height="300" viewBox="0 0 105 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 292.5C19.5 280 31.5 272.4 38.5 258.5C54.0545 227.614 51.3795 204.699 38.5 172.5C17.5 120 55.2608 95.4212 79.5 73C99.5 54.5 97 32 97 7.5" stroke="#523EE5" stroke-width="14" stroke-linecap="round" />
                    </svg>
                    <svg id="gear-2" class="gear" width="226" height="225" viewBox="0 0 226 225" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_dd_7248_3222)">
                            <path d="M60.5316 65.3091L61.6855 63.9199L60.7292 62.3879L56.1952 55.1242L70.203 43.0871L76.8071 49.0032L78.1401 50.1974L79.7002 49.3204C86.2591 45.6333 93.4851 43.0001 101.151 41.6482L102.791 41.3591L103.156 39.7348L105.189 30.6991H120.959L122.992 39.7348L123.357 41.3591L124.997 41.6482C132.663 43.0001 139.889 45.6333 146.448 49.3204L147.932 50.1545L149.252 49.0796L156.692 43.0206L170.671 55.0331L165.506 62.2578L164.385 63.8262L165.617 65.3091C170.508 71.1972 174.432 77.9188 177.146 85.2288L177.751 86.8586H179.49H188.364L191.014 104.128L183.127 106.764L181.42 107.334V109.135C181.42 116.951 180.115 124.456 177.715 131.448L177.16 133.064L178.465 134.168L185.698 140.289L177.074 156.25L168.597 152.293L166.849 151.477L165.617 152.96C160.662 158.925 154.718 164.032 148.037 168.027L146.577 168.901L146.854 170.58L148.175 178.587L131.531 185.261L127.64 177.914L126.789 176.305L124.997 176.621C121.127 177.304 117.143 177.66 113.074 177.66C109.005 177.66 105.021 177.304 101.151 176.621L99.4815 176.327L98.5904 177.77L93.9454 185.289L77.9686 178.616L79.2943 170.58L79.5713 168.901L78.1109 168.027C71.4304 164.032 65.4858 158.925 60.5316 152.96L59.2579 151.427L57.4794 152.327L49.8615 156.183L41.2267 140.202L47.7747 134.086L48.9591 132.98L48.4329 131.448C46.0329 124.456 44.7287 116.951 44.7287 109.135V107.334L43.021 106.764L35.1339 104.128L37.784 86.8586H46.6584H48.3969L49.0021 85.2288C51.7164 77.9188 55.6405 71.1972 60.5316 65.3091Z" stroke="#523EE5" stroke-width="5" shape-rendering="crispEdges" />
                        </g>
                        <path d="M169.194 109.552C169.194 140.922 144.035 166.29 113.077 166.29C82.1188 166.29 56.9604 140.922 56.9604 109.552C56.9604 78.1824 82.1188 52.8143 113.077 52.8143C144.035 52.8143 169.194 78.1824 169.194 109.552Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="7" />
                        <path d="M141.624 108.931C141.624 124.699 128.841 137.481 113.073 137.481C97.3054 137.481 84.5229 124.699 84.5229 108.931C84.5229 93.1632 97.3054 80.3807 113.073 80.3807C128.841 80.3807 141.624 93.1632 141.624 108.931Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="5" />
                        <defs>
                            <filter id="filter0_dd_7248_3222" x="0.343262" y="0.199097" width="225.462" height="224.22" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="16" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7248_3222" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-16" dy="-8" />
                                <feGaussianBlur stdDeviation="8" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="effect1_dropShadow_7248_3222" result="effect2_dropShadow_7248_3222" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7248_3222" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <svg id="gear-3" class="gear" width="224" height="227" viewBox="0 0 224 227" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_dd_7248_3226)">
                            <path d="M67.2764 57.5033L68.6572 56.3392L67.9859 54.6627L64.8031 46.7135L80.7133 37.3338L86.1711 44.3213L87.2728 45.7318L88.9631 45.1434C96.0692 42.6702 103.646 41.3518 111.431 41.3723L113.096 41.3767L113.742 39.8423L117.335 31.3062L132.858 34.0859L133.266 43.3384L133.34 45.0016L134.903 45.5752C142.211 48.2572 148.86 52.1228 154.666 56.9082L155.98 57.9908L157.468 57.1653L165.86 52.5125L177.503 66.8009L171.145 73.0021L169.765 74.3483L170.716 76.0252C174.493 82.6832 177.171 89.9912 178.554 97.6652L178.863 99.3761L180.574 99.6825L189.31 101.247L188.874 118.713L180.646 119.917L178.865 120.178L178.547 121.95C177.17 129.644 174.563 136.802 170.968 143.261L170.137 144.754L171.227 146.07L177.268 153.371L165.966 167.562L158.319 162.172L156.742 161.061L155.267 162.304C149.339 167.302 142.588 171.281 135.307 174.037L133.716 174.639L133.693 176.341L133.582 184.455L116.022 188.092L113.487 180.173L112.933 178.44L111.113 178.435C107.183 178.425 103.199 178.073 99.1938 177.356C95.1887 176.639 91.33 175.586 87.6409 174.232L86.049 173.648L84.9176 174.911L79.0198 181.495L64.4695 172.109L67.1908 164.433L67.7593 162.829L66.4758 161.712C60.6042 156.601 55.6527 150.526 51.8273 143.782L50.8438 142.049L48.9346 142.621L40.7562 145.074L35.0735 127.821L42.5969 122.955L43.9576 122.075L43.7099 120.474C42.5796 113.169 42.6187 105.551 43.9964 97.8575L44.3137 96.0852L42.7334 95.2225L35.4343 91.2379L41.0868 74.706L49.8223 76.2701L51.5335 76.5765L52.4165 75.0789C56.3767 68.3618 61.4241 62.4371 67.2764 57.5033Z" stroke="#523EE5" stroke-width="5" shape-rendering="crispEdges" />
                        </g>
                        <path d="M166.429 120.205C160.9 151.083 131.664 171.62 101.191 166.163C70.7171 160.707 50.4238 131.302 55.9529 100.423C61.482 69.5447 90.7178 49.0081 121.191 54.4647C151.665 59.9213 171.958 89.3265 166.429 120.205Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="7" />
                        <path d="M139.406 114.734C136.626 130.255 121.791 140.585 106.27 137.805C90.7491 135.026 80.4198 120.191 83.199 104.67C85.9782 89.1488 100.813 78.8195 116.335 81.5987C131.856 84.3779 142.185 99.2132 139.406 114.734Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="5" />
                        <defs>
                            <filter id="filter0_dd_7248_3226" x="0.0952148" y="0.49292" width="223.767" height="226.503" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="16" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7248_3226" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-16" dy="-8" />
                                <feGaussianBlur stdDeviation="8" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="effect1_dropShadow_7248_3226" result="effect2_dropShadow_7248_3226" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7248_3226" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <svg id="gear-1" class="gear" width="170" height="169" viewBox="0 0 170 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_dd_7248_3230)">
                            <path d="M44.0156 64.893L44.5262 63.535L43.3937 62.628L39.3548 59.3935L45.012 49.6808L49.9874 51.7422L51.3047 52.288L52.2501 51.2206C55.4424 47.6165 59.2597 44.5062 63.6127 42.0745L64.7752 41.4252L64.6245 40.1021L63.985 34.4897L73.0285 31.3353L76.0183 36.1279L76.7231 37.2577L78.0373 37.0432C82.9584 36.24 87.8819 36.3015 92.6233 37.1383L93.9587 37.374L94.672 36.2206L97.7604 31.226L108.202 35.302L106.685 40.4416L106.246 41.9271L107.575 42.7234C111.769 45.2373 115.554 48.4568 118.73 52.2851L119.616 53.3539L120.928 52.8965L126.031 51.1163L130.994 60.4541L127.001 63.5335L125.858 64.4142L126.333 65.776C127.975 70.4822 128.762 75.2756 128.779 79.9902L128.784 81.3621L130.066 81.8514L135.476 83.9167L133.707 94.7732L128.052 94.2082L126.523 94.0554L125.982 95.4944C124.238 100.131 121.716 104.461 118.515 108.276L117.637 109.322L118.292 110.52L120.642 114.825L112.395 121.992L108.718 118.591L107.652 117.605L106.384 118.313C104.187 119.54 101.852 120.596 99.3904 121.454C96.9287 122.313 94.444 122.939 91.9598 123.344L90.6247 123.562L90.33 124.882L89.1607 130.121L78.6298 129.503L77.7892 124.648L77.5564 123.303L76.219 123.029C71.3391 122.032 66.671 120.211 62.4223 117.664L61.0598 116.848L59.956 117.99L56.3817 121.688L48.2302 114.274L50.7865 109.436L51.3944 108.285L50.5888 107.263C47.6699 103.561 45.3053 99.3175 43.6638 94.6114L43.1888 93.2496L41.7467 93.2703L36.7041 93.3428L34.7829 82.9441L39.8866 81.1639L41.1978 80.7065L41.2274 79.3181C41.3334 74.345 42.2945 69.4704 44.0156 64.893Z" stroke="#523EE5" stroke-width="4" shape-rendering="crispEdges" />
                        </g>
                        <path d="M116.531 69.2135C122.635 86.7133 113.449 105.809 96.0451 111.879C78.6412 117.95 59.5719 108.71 53.4679 91.2101C47.3639 73.7102 56.5499 54.6151 73.9539 48.5445C91.3578 42.474 110.427 51.7136 116.531 69.2135Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="6" />
                        <path d="M100.624 74.763C103.648 83.4326 99.0973 92.8924 90.4754 95.8998C81.8535 98.9072 72.4064 94.3299 69.3824 85.6603C66.3584 76.9907 70.9093 67.5308 79.5312 64.5235C88.1532 61.5161 97.6003 66.0934 100.624 74.763Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="3" />
                        <defs>
                            <filter id="filter0_dd_7248_3230" x="0.504395" y="0.75708" width="169.208" height="167.46" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="16" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7248_3230" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="-16" dy="-8" />
                                <feGaussianBlur stdDeviation="8" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                <feBlend mode="normal" in2="effect1_dropShadow_7248_3230" result="effect2_dropShadow_7248_3230" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7248_3230" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <svg class="dots" width="41" height="95" viewBox="0 0 41 95" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="13" cy="7" r="7" fill="#523EE5" />
                        <circle cx="7" cy="34" r="7" fill="#523EE5" />
                        <circle cx="15" cy="62" r="7" fill="#523EE5" />
                        <circle cx="34" cy="88" r="7" fill="#523EE5" />
                    </svg>
                    <svg class="dot" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="7" cy="7" r="7" fill="#523EE5" />
                    </svg>

                </div>
                <div id="step-3" class="anim__step">
                    <svg class="circles" width="717" height="521" viewBox="0 0 717 521" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M33 314C33 319.523 28.5228 324 23 324C17.4772 324 13 319.523 13 314C13 308.477 17.4772 304 23 304C28.5228 304 33 308.477 33 314Z" fill="#EAEBFF" />
                        <path d="M30 314C30 317.866 26.866 321 23 321C19.134 321 16 317.866 16 314C16 310.134 19.134 307 23 307C26.866 307 30 310.134 30 314Z" fill="#523EE5" />
                        <path d="M418 465C418 470.523 413.523 475 408 475C402.477 475 398 470.523 398 465C398 459.477 402.477 455 408 455C413.523 455 418 459.477 418 465Z" fill="#EAEBFF" />
                        <path d="M415 465C415 468.866 411.866 472 408 472C404.134 472 401 468.866 401 465C401 461.134 404.134 458 408 458C411.866 458 415 461.134 415 465Z" fill="#523EE5" />
                        <path d="M519 461C519 466.523 514.523 471 509 471C503.477 471 499 466.523 499 461C499 455.477 503.477 451 509 451C514.523 451 519 455.477 519 461Z" fill="#EAEBFF" />
                        <path d="M516 461C516 464.866 512.866 468 509 468C505.134 468 502 464.866 502 461C502 457.134 505.134 454 509 454C512.866 454 516 457.134 516 461Z" fill="#523EE5" />
                        <path d="M315 461C315 466.523 310.523 471 305 471C299.477 471 295 466.523 295 461C295 455.477 299.477 451 305 451C310.523 451 315 455.477 315 461Z" fill="#EAEBFF" />
                        <path d="M312 461C312 464.866 308.866 468 305 468C301.134 468 298 464.866 298 461C298 457.134 301.134 454 305 454C308.866 454 312 457.134 312 461Z" fill="#523EE5" />
                        <path d="M584 458C584 463.523 579.523 468 574 468C568.477 468 564 463.523 564 458C564 452.477 568.477 448 574 448C579.523 448 584 452.477 584 458Z" fill="#EAEBFF" />
                        <path d="M581 458C581 461.866 577.866 465 574 465C570.134 465 567 461.866 567 458C567 454.134 570.134 451 574 451C577.866 451 581 454.134 581 458Z" fill="#523EE5" />
                        <path d="M636 404C636 409.523 631.523 414 626 414C620.477 414 616 409.523 616 404C616 398.477 620.477 394 626 394C631.523 394 636 398.477 636 404Z" fill="#EAEBFF" />
                        <path d="M633 404C633 407.866 629.866 411 626 411C622.134 411 619 407.866 619 404C619 400.134 622.134 397 626 397C629.866 397 633 400.134 633 404Z" fill="#523EE5" />
                        <path d="M441 66C441 71.5228 436.523 76 431 76C425.477 76 421 71.5228 421 66C421 60.4772 425.477 56 431 56C436.523 56 441 60.4772 441 66Z" fill="#EAEBFF" />
                        <path d="M438 66C438 69.866 434.866 73 431 73C427.134 73 424 69.866 424 66C424 62.134 427.134 59 431 59C434.866 59 438 62.134 438 66Z" fill="#523EE5" />
                        <path d="M370 37C370 42.5228 365.523 47 360 47C354.477 47 350 42.5228 350 37C350 31.4772 354.477 27 360 27C365.523 27 370 31.4772 370 37Z" fill="#EAEBFF" />
                        <path d="M367 37C367 40.866 363.866 44 360 44C356.134 44 353 40.866 353 37C353 33.134 356.134 30 360 30C363.866 30 367 33.134 367 37Z" fill="#523EE5" />
                        <path d="M162 461C162 466.523 157.523 471 152 471C146.477 471 142 466.523 142 461C142 455.477 146.477 451 152 451C157.523 451 162 455.477 162 461Z" fill="#EAEBFF" />
                        <path d="M159 461C159 464.866 155.866 468 152 468C148.134 468 145 464.866 145 461C145 457.134 148.134 454 152 454C155.866 454 159 457.134 159 461Z" fill="#523EE5" />
                        <path d="M158 131C158 136.523 153.523 141 148 141C142.477 141 138 136.523 138 131C138 125.477 142.477 121 148 121C153.523 121 158 125.477 158 131Z" fill="#EAEBFF" />
                        <path d="M155 131C155 134.866 151.866 138 148 138C144.134 138 141 134.866 141 131C141 127.134 144.134 124 148 124C151.866 124 155 127.134 155 131Z" fill="#523EE5" />
                        <path d="M100 155C100 160.523 95.5228 165 90 165C84.4772 165 80 160.523 80 155C80 149.477 84.4772 145 90 145C95.5228 145 100 149.477 100 155Z" fill="#EAEBFF" />
                        <path d="M97 155C97 158.866 93.866 162 90 162C86.134 162 83 158.866 83 155C83 151.134 86.134 148 90 148C93.866 148 97 151.134 97 155Z" fill="#523EE5" />
                        <path d="M141 199C141 204.523 136.523 209 131 209C125.477 209 121 204.523 121 199C121 193.477 125.477 189 131 189C136.523 189 141 193.477 141 199Z" fill="#EAEBFF" />
                        <path d="M138 199C138 202.866 134.866 206 131 206C127.134 206 124 202.866 124 199C124 195.134 127.134 192 131 192C134.866 192 138 195.134 138 199Z" fill="#523EE5" />
                        <path d="M80 257C80 262.523 75.5228 267 70 267C64.4772 267 60 262.523 60 257C60 251.477 64.4772 247 70 247C75.5228 247 80 251.477 80 257Z" fill="#EAEBFF" />
                        <path d="M77 257C77 260.866 73.866 264 70 264C66.134 264 63 260.866 63 257C63 253.134 66.134 250 70 250C73.866 250 77 253.134 77 257Z" fill="#523EE5" />
                        <path d="M219 387C219 392.523 214.523 397 209 397C203.477 397 199 392.523 199 387C199 381.477 203.477 377 209 377C214.523 377 219 381.477 219 387Z" fill="#EAEBFF" />
                        <path d="M216 387C216 390.866 212.866 394 209 394C205.134 394 202 390.866 202 387C202 383.134 205.134 380 209 380C212.866 380 216 383.134 216 387Z" fill="#523EE5" />
                        <path d="M307 359C307 364.523 302.523 369 297 369C291.477 369 287 364.523 287 359C287 353.477 291.477 349 297 349C302.523 349 307 353.477 307 359Z" fill="#EAEBFF" />
                        <path d="M304 359C304 362.866 300.866 366 297 366C293.134 366 290 362.866 290 359C290 355.134 293.134 352 297 352C300.866 352 304 355.134 304 359Z" fill="#523EE5" />
                        <path d="M308 415C308 420.523 303.523 425 298 425C292.477 425 288 420.523 288 415C288 409.477 292.477 405 298 405C303.523 405 308 409.477 308 415Z" fill="#EAEBFF" />
                        <path d="M305 415C305 418.866 301.866 422 298 422C294.134 422 291 418.866 291 415C291 411.134 294.134 408 298 408C301.866 408 305 411.134 305 415Z" fill="#523EE5" />
                        <path d="M425 412C425 417.523 420.523 422 415 422C409.477 422 405 417.523 405 412C405 406.477 409.477 402 415 402C420.523 402 425 406.477 425 412Z" fill="#EAEBFF" />
                        <path d="M422 412C422 415.866 418.866 419 415 419C411.134 419 408 415.866 408 412C408 408.134 411.134 405 415 405C418.866 405 422 408.134 422 412Z" fill="#523EE5" />
                        <path d="M515 339C515 344.523 510.523 349 505 349C499.477 349 495 344.523 495 339C495 333.477 499.477 329 505 329C510.523 329 515 333.477 515 339Z" fill="#EAEBFF" />
                        <path d="M512 339C512 342.866 508.866 346 505 346C501.134 346 498 342.866 498 339C498 335.134 501.134 332 505 332C508.866 332 512 335.134 512 339Z" fill="#523EE5" />
                        <path d="M515 235C515 240.523 510.523 245 505 245C499.477 245 495 240.523 495 235C495 229.477 499.477 225 505 225C510.523 225 515 229.477 515 235Z" fill="#EAEBFF" />
                        <path d="M512 235C512 238.866 508.866 242 505 242C501.134 242 498 238.866 498 235C498 231.134 501.134 228 505 228C508.866 228 512 231.134 512 235Z" fill="#523EE5" />
                        <path d="M475 277C475 282.523 470.523 287 465 287C459.477 287 455 282.523 455 277C455 271.477 459.477 267 465 267C470.523 267 475 271.477 475 277Z" fill="#EAEBFF" />
                        <path d="M472 277C472 280.866 468.866 284 465 284C461.134 284 458 280.866 458 277C458 273.134 461.134 270 465 270C468.866 270 472 273.134 472 277Z" fill="#523EE5" />
                        <path d="M472 511C472 516.523 467.523 521 462 521C456.477 521 452 516.523 452 511C452 505.477 456.477 501 462 501C467.523 501 472 505.477 472 511Z" fill="#EAEBFF" />
                        <path d="M469 511C469 514.866 465.866 518 462 518C458.134 518 455 514.866 455 511C455 507.134 458.134 504 462 504C465.866 504 469 507.134 469 511Z" fill="#523EE5" />
                        <path d="M455 151C455 156.523 450.523 161 445 161C439.477 161 435 156.523 435 151C435 145.477 439.477 141 445 141C450.523 141 455 145.477 455 151Z" fill="#EAEBFF" />
                        <path d="M452 151C452 154.866 448.866 158 445 158C441.134 158 438 154.866 438 151C438 147.134 441.134 144 445 144C448.866 144 452 147.134 452 151Z" fill="#523EE5" />
                        <path d="M525 111C525 116.523 520.523 121 515 121C509.477 121 505 116.523 505 111C505 105.477 509.477 101 515 101C520.523 101 525 105.477 525 111Z" fill="#EAEBFF" />
                        <path d="M522 111C522 114.866 518.866 118 515 118C511.134 118 508 114.866 508 111C508 107.134 511.134 104 515 104C518.866 104 522 107.134 522 111Z" fill="#523EE5" />
                        <path d="M374 100C374 105.523 369.523 110 364 110C358.477 110 354 105.523 354 100C354 94.4772 358.477 90 364 90C369.523 90 374 94.4772 374 100Z" fill="#EAEBFF" />
                        <path d="M371 100C371 103.866 367.866 107 364 107C360.134 107 357 103.866 357 100C357 96.134 360.134 93 364 93C367.866 93 371 96.134 371 100Z" fill="#523EE5" />
                        <path d="M304 114C304 119.523 299.523 124 294 124C288.477 124 284 119.523 284 114C284 108.477 288.477 104 294 104C299.523 104 304 108.477 304 114Z" fill="#EAEBFF" />
                        <path d="M301 114C301 117.866 297.866 121 294 121C290.134 121 287 117.866 287 114C287 110.134 290.134 107 294 107C297.866 107 301 110.134 301 114Z" fill="#523EE5" />
                        <path d="M349 135C349 140.523 344.523 145 339 145C333.477 145 329 140.523 329 135C329 129.477 333.477 125 339 125C344.523 125 349 129.477 349 135Z" fill="#EAEBFF" />
                        <path d="M346 135C346 138.866 342.866 142 339 142C335.134 142 332 138.866 332 135C332 131.134 335.134 128 339 128C342.866 128 346 131.134 346 135Z" fill="#523EE5" />
                        <path d="M458 211C458 216.523 453.523 221 448 221C442.477 221 438 216.523 438 211C438 205.477 442.477 201 448 201C453.523 201 458 205.477 458 211Z" fill="#EAEBFF" />
                        <path d="M455 211C455 214.866 451.866 218 448 218C444.134 218 441 214.866 441 211C441 207.134 444.134 204 448 204C451.866 204 455 207.134 455 211Z" fill="#523EE5" />
                        <path d="M574 189C574 194.523 569.523 199 564 199C558.477 199 554 194.523 554 189C554 183.477 558.477 179 564 179C569.523 179 574 183.477 574 189Z" fill="#EAEBFF" />
                        <path d="M571 189C571 192.866 567.866 196 564 196C560.134 196 557 192.866 557 189C557 185.134 560.134 182 564 182C567.866 182 571 185.134 571 189Z" fill="#523EE5" />
                        <path d="M584 245C584 250.523 579.523 255 574 255C568.477 255 564 250.523 564 245C564 239.477 568.477 235 574 235C579.523 235 584 239.477 584 245Z" fill="#EAEBFF" />
                        <path d="M581 245C581 248.866 577.866 252 574 252C570.134 252 567 248.866 567 245C567 241.134 570.134 238 574 238C577.866 238 581 241.134 581 245Z" fill="#523EE5" />
                        <path d="M610 287C610 292.523 605.523 297 600 297C594.477 297 590 292.523 590 287C590 281.477 594.477 277 600 277C605.523 277 610 281.477 610 287Z" fill="#EAEBFF" />
                        <path d="M607 287C607 290.866 603.866 294 600 294C596.134 294 593 290.866 593 287C593 283.134 596.134 280 600 280C603.866 280 607 283.134 607 287Z" fill="#523EE5" />
                        <path d="M543 283C543 288.523 538.523 293 533 293C527.477 293 523 288.523 523 283C523 277.477 527.477 273 533 273C538.523 273 543 277.477 543 283Z" fill="#EAEBFF" />
                        <path d="M540 283C540 286.866 536.866 290 533 290C529.134 290 526 286.866 526 283C526 279.134 529.134 276 533 276C536.866 276 540 279.134 540 283Z" fill="#523EE5" />
                        <path d="M422 128C422 133.523 417.523 138 412 138C406.477 138 402 133.523 402 128C402 122.477 406.477 118 412 118C417.523 118 422 122.477 422 128Z" fill="#EAEBFF" />
                        <path d="M419 128C419 131.866 415.866 135 412 135C408.134 135 405 131.866 405 128C405 124.134 408.134 121 412 121C415.866 121 419 124.134 419 128Z" fill="#523EE5" />
                        <path d="M526 165C526 170.523 521.523 175 516 175C510.477 175 506 170.523 506 165C506 159.477 510.477 155 516 155C521.523 155 526 159.477 526 165Z" fill="#EAEBFF" />
                        <path d="M523 165C523 168.866 519.866 172 516 172C512.134 172 509 168.866 509 165C509 161.134 512.134 158 516 158C519.866 158 523 161.134 523 165Z" fill="#523EE5" />
                        <path d="M587 131C587 136.523 582.523 141 577 141C571.477 141 567 136.523 567 131C567 125.477 571.477 121 577 121C582.523 121 587 125.477 587 131Z" fill="#EAEBFF" />
                        <path d="M584 131C584 134.866 580.866 138 577 138C573.134 138 570 134.866 570 131C570 127.134 573.134 124 577 124C580.866 124 584 127.134 584 131Z" fill="#523EE5" />
                        <path d="M251 83C251 88.5228 246.523 93 241 93C235.477 93 231 88.5228 231 83C231 77.4772 235.477 73 241 73C246.523 73 251 77.4772 251 83Z" fill="#EAEBFF" />
                        <path d="M248 83C248 86.866 244.866 90 241 90C237.134 90 234 86.866 234 83C234 79.134 237.134 76 241 76C244.866 76 248 79.134 248 83Z" fill="#523EE5" />
                        <path d="M458 10C458 15.5228 453.523 20 448 20C442.477 20 438 15.5228 438 10C438 4.47715 442.477 0 448 0C453.523 0 458 4.47715 458 10Z" fill="#EAEBFF" />
                        <path d="M455 10C455 13.866 451.866 17 448 17C444.134 17 441 13.866 441 10C441 6.13401 444.134 3 448 3C451.866 3 455 6.13401 455 10Z" fill="#523EE5" />
                        <path d="M574 349C574 354.523 569.523 359 564 359C558.477 359 554 354.523 554 349C554 343.477 558.477 339 564 339C569.523 339 574 343.477 574 349Z" fill="#EAEBFF" />
                        <path d="M571 349C571 352.866 567.866 356 564 356C560.134 356 557 352.866 557 349C557 345.134 560.134 342 564 342C567.866 342 571 345.134 571 349Z" fill="#523EE5" />
                        <path d="M574 398C574 403.523 569.523 408 564 408C558.477 408 554 403.523 554 398C554 392.477 558.477 388 564 388C569.523 388 574 392.477 574 398Z" fill="#EAEBFF" />
                        <path d="M571 398C571 401.866 567.866 405 564 405C560.134 405 557 401.866 557 398C557 394.134 560.134 391 564 391C567.866 391 571 394.134 571 398Z" fill="#523EE5" />
                        <path d="M498 401C498 406.523 493.523 411 488 411C482.477 411 478 406.523 478 401C478 395.477 482.477 391 488 391C493.523 391 498 395.477 498 401Z" fill="#EAEBFF" />
                        <path d="M495 401C495 404.866 491.866 408 488 408C484.134 408 481 404.866 481 401C481 397.134 484.134 394 488 394C491.866 394 495 397.134 495 401Z" fill="#523EE5" />
                        <path d="M364 415C364 420.523 359.523 425 354 425C348.477 425 344 420.523 344 415C344 409.477 348.477 405 354 405C359.523 405 364 409.477 364 415Z" fill="#EAEBFF" />
                        <path d="M361 415C361 418.866 357.866 422 354 422C350.134 422 347 418.866 347 415C347 411.134 350.134 408 354 408C357.866 408 361 411.134 361 415Z" fill="#523EE5" />
                        <path d="M155 391C155 396.523 150.523 401 145 401C139.477 401 135 396.523 135 391C135 385.477 139.477 381 145 381C150.523 381 155 385.477 155 391Z" fill="#EAEBFF" />
                        <path d="M152 391C152 394.866 148.866 398 145 398C141.134 398 138 394.866 138 391C138 387.134 141.134 384 145 384C148.866 384 152 387.134 152 391Z" fill="#523EE5" />
                        <path d="M80 392C80 397.523 75.5228 402 70 402C64.4772 402 60 397.523 60 392C60 386.477 64.4772 382 70 382C75.5228 382 80 386.477 80 392Z" fill="#EAEBFF" />
                        <path d="M77 392C77 395.866 73.866 399 70 399C66.134 399 63 395.866 63 392C63 388.134 66.134 385 70 385C73.866 385 77 388.134 77 392Z" fill="#523EE5" />
                        <path d="M96 221C96 226.523 91.5228 231 86 231C80.4772 231 76 226.523 76 221C76 215.477 80.4772 211 86 211C91.5228 211 96 215.477 96 221Z" fill="#EAEBFF" />
                        <path d="M93 221C93 224.866 89.866 228 86 228C82.134 228 79 224.866 79 221C79 217.134 82.134 214 86 214C89.866 214 93 217.134 93 221Z" fill="#523EE5" />
                        <path d="M40 164C40 169.523 35.5228 174 30 174C24.4772 174 20 169.523 20 164C20 158.477 24.4772 154 30 154C35.5228 154 40 158.477 40 164Z" fill="#EAEBFF" />
                        <path d="M37 164C37 167.866 33.866 171 30 171C26.134 171 23 167.866 23 164C23 160.134 26.134 157 30 157C33.866 157 37 160.134 37 164Z" fill="#523EE5" />
                        <path d="M20 114C20 119.523 15.5228 124 10 124C4.47715 124 0 119.523 0 114C0 108.477 4.47715 104 10 104C15.5228 104 20 108.477 20 114Z" fill="#EAEBFF" />
                        <path d="M17 114C17 117.866 13.866 121 10 121C6.13401 121 3 117.866 3 114C3 110.134 6.13401 107 10 107C13.866 107 17 110.134 17 114Z" fill="#523EE5" />
                        <path d="M73 69C73 74.5228 68.5228 79 63 79C57.4772 79 53 74.5228 53 69C53 63.4772 57.4772 59 63 59C68.5228 59 73 63.4772 73 69Z" fill="#EAEBFF" />
                        <path d="M70 69C70 72.866 66.866 76 63 76C59.134 76 56 72.866 56 69C56 65.134 59.134 62 63 62C66.866 62 70 65.134 70 69Z" fill="#523EE5" />
                        <path d="M171 57C171 62.5228 166.523 67 161 67C155.477 67 151 62.5228 151 57C151 51.4772 155.477 47 161 47C166.523 47 171 51.4772 171 57Z" fill="#EAEBFF" />
                        <path d="M168 57C168 60.866 164.866 64 161 64C157.134 64 154 60.866 154 57C154 53.134 157.134 50 161 50C164.866 50 168 53.134 168 57Z" fill="#523EE5" />
                        <path d="M270 10C270 15.5228 265.523 20 260 20C254.477 20 250 15.5228 250 10C250 4.47715 254.477 0 260 0C265.523 0 270 4.47715 270 10Z" fill="#EAEBFF" />
                        <path d="M267 10C267 13.866 263.866 17 260 17C256.134 17 253 13.866 253 10C253 6.13401 256.134 3 260 3C263.866 3 267 6.13401 267 10Z" fill="#523EE5" />
                        <path d="M591 69C591 74.5228 586.523 79 581 79C575.477 79 571 74.5228 571 69C571 63.4772 575.477 59 581 59C586.523 59 591 63.4772 591 69Z" fill="#EAEBFF" />
                        <path d="M588 69C588 72.866 584.866 76 581 76C577.134 76 574 72.866 574 69C574 65.134 577.134 62 581 62C584.866 62 588 65.134 588 69Z" fill="#523EE5" />
                        <path d="M642 30C642 35.5228 637.523 40 632 40C626.477 40 622 35.5228 622 30C622 24.4772 626.477 20 632 20C637.523 20 642 24.4772 642 30Z" fill="#EAEBFF" />
                        <path d="M639 30C639 33.866 635.866 37 632 37C628.134 37 625 33.866 625 30C625 26.134 628.134 23 632 23C635.866 23 639 26.134 639 30Z" fill="#523EE5" />
                        <path d="M662 74C662 79.5228 657.523 84 652 84C646.477 84 642 79.5228 642 74C642 68.4772 646.477 64 652 64C657.523 64 662 68.4772 662 74Z" fill="#EAEBFF" />
                        <path d="M659 74C659 77.866 655.866 81 652 81C648.134 81 645 77.866 645 74C645 70.134 648.134 67 652 67C655.866 67 659 70.134 659 74Z" fill="#523EE5" />
                        <path d="M642 144C642 149.523 637.523 154 632 154C626.477 154 622 149.523 622 144C622 138.477 626.477 134 632 134C637.523 134 642 138.477 642 144Z" fill="#EAEBFF" />
                        <path d="M639 144C639 147.866 635.866 151 632 151C628.134 151 625 147.866 625 144C625 140.134 628.134 137 632 137C635.866 137 639 140.134 639 144Z" fill="#523EE5" />
                        <path d="M649 214C649 219.523 644.523 224 639 224C633.477 224 629 219.523 629 214C629 208.477 633.477 204 639 204C644.523 204 649 208.477 649 214Z" fill="#EAEBFF" />
                        <path d="M646 214C646 217.866 642.866 221 639 221C635.134 221 632 217.866 632 214C632 210.134 635.134 207 639 207C642.866 207 646 210.134 646 214Z" fill="#523EE5" />
                        <path d="M710 257C710 262.523 705.523 267 700 267C694.477 267 690 262.523 690 257C690 251.477 694.477 247 700 247C705.523 247 710 251.477 710 257Z" fill="#EAEBFF" />
                        <path d="M707 257C707 260.866 703.866 264 700 264C696.134 264 693 260.866 693 257C693 253.134 696.134 250 700 250C703.866 250 707 253.134 707 257Z" fill="#523EE5" />
                        <path d="M672 294C672 299.523 667.523 304 662 304C656.477 304 652 299.523 652 294C652 288.477 656.477 284 662 284C667.523 284 672 288.477 672 294Z" fill="#EAEBFF" />
                        <path d="M669 294C669 297.866 665.866 301 662 301C658.134 301 655 297.866 655 294C655 290.134 658.134 287 662 287C665.866 287 669 290.134 669 294Z" fill="#523EE5" />
                        <path d="M717 356C717 361.523 712.523 366 707 366C701.477 366 697 361.523 697 356C697 350.477 701.477 346 707 346C712.523 346 717 350.477 717 356Z" fill="#EAEBFF" />
                        <path d="M714 356C714 359.866 710.866 363 707 363C703.134 363 700 359.866 700 356C700 352.134 703.134 349 707 349C710.866 349 714 352.134 714 356Z" fill="#523EE5" />
                        <path d="M639 349C639 354.523 634.523 359 629 359C623.477 359 619 354.523 619 349C619 343.477 623.477 339 629 339C634.523 339 639 343.477 639 349Z" fill="#EAEBFF" />
                        <path d="M636 349C636 352.866 632.866 356 629 356C625.134 356 622 352.866 622 349C622 345.134 625.134 342 629 342C632.866 342 636 345.134 636 349Z" fill="#523EE5" />
                        <path d="M535 54C535 59.5228 530.523 64 525 64C519.477 64 515 59.5228 515 54C515 48.4772 519.477 44 525 44C530.523 44 535 48.4772 535 54Z" fill="#EAEBFF" />
                        <path d="M532 54C532 57.866 528.866 61 525 61C521.134 61 518 57.866 518 54C518 50.134 521.134 47 525 47C528.866 47 532 50.134 532 54Z" fill="#523EE5" />
                        <path d="M307 282C307 287.523 302.523 292 297 292C291.477 292 287 287.523 287 282C287 276.477 291.477 272 297 272C302.523 272 307 276.477 307 282Z" fill="#EAEBFF" />
                        <path d="M304 282C304 285.866 300.866 289 297 289C293.134 289 290 285.866 290 282C290 278.134 293.134 275 297 275C300.866 275 304 278.134 304 282Z" fill="#523EE5" />
                        <path d="M241 148C241 153.523 236.523 158 231 158C225.477 158 221 153.523 221 148C221 142.477 225.477 138 231 138C236.523 138 241 142.477 241 148Z" fill="#EAEBFF" />
                        <path d="M238 148C238 151.866 234.866 155 231 155C227.134 155 224 151.866 224 148C224 144.134 227.134 141 231 141C234.866 141 238 144.134 238 148Z" fill="#523EE5" />
                        <path d="M273 204C273 209.523 268.523 214 263 214C257.477 214 253 209.523 253 204C253 198.477 257.477 194 263 194C268.523 194 273 198.477 273 204Z" fill="#EAEBFF" />
                        <path d="M270 204C270 207.866 266.866 211 263 211C259.134 211 256 207.866 256 204C256 200.134 259.134 197 263 197C266.866 197 270 200.134 270 204Z" fill="#523EE5" />
                        <path d="M103 342C103 347.523 98.5228 352 93 352C87.4772 352 83 347.523 83 342C83 336.477 87.4772 332 93 332C98.5228 332 103 336.477 103 342Z" fill="#EAEBFF" />
                        <path d="M100 342C100 345.866 96.866 349 93 349C89.134 349 86 345.866 86 342C86 338.134 89.134 335 93 335C96.866 335 100 338.134 100 342Z" fill="#523EE5" />
                        <path d="M168 322C168 327.523 163.523 332 158 332C152.477 332 148 327.523 148 322C148 316.477 152.477 312 158 312C163.523 312 168 316.477 168 322Z" fill="#EAEBFF" />
                        <path d="M165 322C165 325.866 161.866 329 158 329C154.134 329 151 325.866 151 322C151 318.134 154.134 315 158 315C161.866 315 165 318.134 165 322Z" fill="#523EE5" />
                        <path d="M237 253C237 258.523 232.523 263 227 263C221.477 263 217 258.523 217 253C217 247.477 221.477 243 227 243C232.523 243 237 247.477 237 253Z" fill="#EAEBFF" />
                        <path d="M234 253C234 256.866 230.866 260 227 260C223.134 260 220 256.866 220 253C220 249.134 223.134 246 227 246C230.866 246 234 249.134 234 253Z" fill="#523EE5" />
                        <path d="M216 186C216 191.523 211.523 196 206 196C200.477 196 196 191.523 196 186C196 180.477 200.477 176 206 176C211.523 176 216 180.477 216 186Z" fill="#EAEBFF" />
                        <path d="M213 186C213 189.866 209.866 193 206 193C202.134 193 199 189.866 199 186C199 182.134 202.134 179 206 179C209.866 179 213 182.134 213 186Z" fill="#523EE5" />
                        <path d="M165 267C165 272.523 160.523 277 155 277C149.477 277 145 272.523 145 267C145 261.477 149.477 257 155 257C160.523 257 165 261.477 165 267Z" fill="#EAEBFF" />
                        <path d="M162 267C162 270.866 158.866 274 155 274C151.134 274 148 270.866 148 267C148 263.134 151.134 260 155 260C158.866 260 162 263.134 162 267Z" fill="#523EE5" />
                        <path d="M216 328C216 333.523 211.523 338 206 338C200.477 338 196 333.523 196 328C196 322.477 200.477 318 206 318C211.523 318 216 322.477 216 328Z" fill="#EAEBFF" />
                        <path d="M213 328C213 331.866 209.866 335 206 335C202.134 335 199 331.866 199 328C199 324.134 202.134 321 206 321C209.866 321 213 324.134 213 328Z" fill="#523EE5" />
                        <path d="M381 342C381 347.523 376.523 352 371 352C365.477 352 361 347.523 361 342C361 336.477 365.477 332 371 332C376.523 332 381 336.477 381 342Z" fill="#EAEBFF" />
                        <path d="M378 342C378 345.866 374.866 349 371 349C367.134 349 364 345.866 364 342C364 338.134 367.134 335 371 335C374.866 335 378 338.134 378 342Z" fill="#523EE5" />
                        <path d="M363 314C363 319.523 358.523 324 353 324C347.477 324 343 319.523 343 314C343 308.477 347.477 304 353 304C358.523 304 363 308.477 363 314Z" fill="#EAEBFF" />
                        <path d="M360 314C360 317.866 356.866 321 353 321C349.134 321 346 317.866 346 314C346 310.134 349.134 307 353 307C356.866 307 360 310.134 360 314Z" fill="#523EE5" />
                        <path d="M435 356C435 361.523 430.523 366 425 366C419.477 366 415 361.523 415 356C415 350.477 419.477 346 425 346C430.523 346 435 350.477 435 356Z" fill="#EAEBFF" />
                        <path d="M432 356C432 359.866 428.866 363 425 363C421.134 363 418 359.866 418 356C418 352.134 421.134 349 425 349C428.866 349 432 352.134 432 356Z" fill="#523EE5" />
                        <path d="M403 267C403 272.523 398.523 277 393 277C387.477 277 383 272.523 383 267C383 261.477 387.477 257 393 257C398.523 257 403 261.477 403 267Z" fill="#EAEBFF" />
                        <path d="M400 267C400 270.866 396.866 274 393 274C389.134 274 386 270.866 386 267C386 263.134 389.134 260 393 260C396.866 260 400 263.134 400 267Z" fill="#523EE5" />
                        <path d="M388 221C388 226.523 383.523 231 378 231C372.477 231 368 226.523 368 221C368 215.477 372.477 211 378 211C383.523 211 388 215.477 388 221Z" fill="#EAEBFF" />
                        <path d="M385 221C385 224.866 381.866 228 378 228C374.134 228 371 224.866 371 221C371 217.134 374.134 214 378 214C381.866 214 385 217.134 385 221Z" fill="#523EE5" />
                        <path d="M377 179C377 184.523 372.523 189 367 189C361.477 189 357 184.523 357 179C357 173.477 361.477 169 367 169C372.523 169 377 173.477 377 179Z" fill="#EAEBFF" />
                        <path d="M374 179C374 182.866 370.866 186 367 186C363.134 186 360 182.866 360 179C360 175.134 363.134 172 367 172C370.866 172 374 175.134 374 179Z" fill="#523EE5" />
                        <path d="M318 172C318 177.523 313.523 182 308 182C302.477 182 298 177.523 298 172C298 166.477 302.477 162 308 162C313.523 162 318 166.477 318 172Z" fill="#EAEBFF" />
                        <path d="M315 172C315 175.866 311.866 179 308 179C304.134 179 301 175.866 301 172C301 168.134 304.134 165 308 165C311.866 165 315 168.134 315 172Z" fill="#523EE5" />
                        <path d="M332 235C332 240.523 327.523 245 322 245C316.477 245 312 240.523 312 235C312 229.477 316.477 225 322 225C327.523 225 332 229.477 332 235Z" fill="#EAEBFF" />
                        <path d="M329 235C329 238.866 325.866 242 322 242C318.134 242 315 238.866 315 235C315 231.134 318.134 228 322 228C325.866 228 329 231.134 329 235Z" fill="#523EE5" />
                    </svg>
                    <svg class="lines" width="699" height="504" viewBox="0 0 699 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M299 163.5L330.5 126M330.5 126L284.5 106.5L231.5 75M330.5 126L354.5 91.5L350.5 29M369.5 213L439.5 203M439.5 203L436 143M439.5 203L497.5 226.5M439.5 203L507 156.5M436 143L505 102.5L516 46M436 143L403 119.5M497.5 226.5L554 180.5M497.5 226.5L565 238M497.5 226.5L523 275M554 180.5L568 123M554 180.5L624 135.5L643 66L624 21M565 238L590 278.5M565 238L630.5 205.5L692 248M590 278.5L619 339.5L617 395.5M590 278.5L653 286.5L697.5 347M384 258L456 269L497.5 329.5M497.5 329.5L555.5 342V388L565 449.5M497.5 329.5L479 392L497.5 452L452.5 503M414 347L404 404M404 404L360.5 332.5M404 404L399.5 456M289 273.5V352.5M289 352.5V406.5M289 352.5L198.5 379L135.5 383M289 406.5H345M289 406.5L295.5 452M80.5 147.5L195.5 177.5L139.5 123.5L80.5 147.5ZM80.5 147.5L21.5 156M80.5 147.5L2 106.5L54 61M15 306L62.5 250L145 259.5L122 190L76.5 213M231.5 75L153 49.5M231.5 75L252.5 1.5M516 46L439.5 1.5L422 58M516 46L573 61.5M135.5 383L142.5 452M135.5 383L60.5 384.5" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                        <path d="M288 275L313 227M313.5 227L384 259M313.5 227L368 212M313.5 227L358 170.5M313.5 227L298.5 163.5M218 244.5L288 274.5L197 320.5M218 244.5L197 176.5L222.5 139.5L254.5 195M218 244.5L145.5 259.5M218 244.5L197 320.5M197 320.5L148.5 314L83 334M288.5 275L344 306.5L361.5 334L415.5 348" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                    </svg>

                </div>
                <div id="step-4" class="anim__step">
                    <div class="original">
                        <svg class="circles" width="352" height="228" viewBox="0 0 352 228" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="239" cy="97" r="10" fill="#EAEBFF" />
                            <circle cx="239" cy="97" r="7" fill="#523EE5" />
                            <circle cx="148" cy="10" r="10" fill="#EAEBFF" />
                            <circle cx="148" cy="10" r="7" fill="#523EE5" />
                            <circle cx="180" cy="66" r="10" fill="#EAEBFF" />
                            <circle cx="180" cy="66" r="7" fill="#523EE5" />
                            <circle cx="214" cy="144" r="10" fill="#EAEBFF" />
                            <circle cx="214" cy="144" r="7" fill="#523EE5" />
                            <circle cx="270" cy="176" r="10" fill="#EAEBFF" />
                            <circle cx="270" cy="176" r="7" fill="#523EE5" />
                            <circle cx="288" cy="204" r="10" fill="#EAEBFF" />
                            <circle cx="288" cy="204" r="7" fill="#523EE5" />
                            <circle cx="123" cy="190" r="10" fill="#EAEBFF" />
                            <circle cx="123" cy="190" r="7" fill="#523EE5" />
                            <circle cx="72" cy="129" r="10" fill="#EAEBFF" />
                            <circle cx="72" cy="129" r="7" fill="#523EE5" />
                            <circle cx="144" cy="115" r="10" fill="#EAEBFF" />
                            <circle cx="144" cy="115" r="7" fill="#523EE5" />
                            <circle cx="123" cy="48" r="10" fill="#EAEBFF" />
                            <circle cx="123" cy="48" r="7" fill="#523EE5" />
                            <circle cx="225" cy="34" r="10" fill="#EAEBFF" />
                            <circle cx="225" cy="34" r="7" fill="#523EE5" />
                            <circle cx="284" cy="41" r="10" fill="#EAEBFF" />
                            <circle cx="284" cy="41" r="7" fill="#523EE5" />
                            <circle cx="295" cy="83" r="10" fill="#EAEBFF" />
                            <circle cx="295" cy="83" r="7" fill="#523EE5" />
                            <circle cx="310" cy="129" r="10" fill="#EAEBFF" />
                            <circle cx="310" cy="129" r="7" fill="#523EE5" />
                            <circle cx="10" cy="204" r="10" fill="#EAEBFF" />
                            <circle cx="10" cy="204" r="7" fill="#523EE5" />
                            <circle cx="75" cy="184" r="10" fill="#EAEBFF" />
                            <circle cx="75" cy="184" r="7" fill="#523EE5" />
                            <circle cx="342" cy="218" r="10" fill="#EAEBFF" />
                            <circle cx="342" cy="218" r="7" fill="#523EE5" />
                        </svg>
                        <svg class="lines" width="334" height="211" viewBox="0 0 334 211" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M206 137L231 89M231.5 89L302 121M231.5 89L286 74M231.5 89L276 32.5M231.5 89L216.5 25.5M136 106.5L206 136.5L115 182.5M136 106.5L115 38.5L140.5 1.5L172.5 57M136 106.5L63.5 121.5M136 106.5L115 182.5M115 182.5L66.5 176L1 196M206.5 137L262 168.5L279.5 196L333.5 210" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div class="added">
                        <svg class="circles" width="717" height="521" viewBox="0 0 717 521" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="148" cy="131" r="10" fill="#EAEBFF" />
                            <circle cx="90" cy="155" r="10" fill="#EAEBFF" />
                            <circle cx="131" cy="199" r="10" fill="#EAEBFF" />
                            <circle cx="70" cy="257" r="10" fill="#EAEBFF" />
                            <circle cx="209" cy="387" r="10" fill="#EAEBFF" />
                            <circle cx="297" cy="359" r="10" fill="#EAEBFF" />
                            <circle cx="298" cy="415" r="10" fill="#EAEBFF" />
                            <circle cx="415" cy="412" r="10" fill="#EAEBFF" />
                            <circle cx="505" cy="339" r="10" fill="#EAEBFF" />
                            <circle cx="505" cy="235" r="10" fill="#EAEBFF" />
                            <circle cx="465" cy="277" r="10" fill="#EAEBFF" />
                            <circle cx="445" cy="151" r="10" fill="#EAEBFF" />
                            <circle cx="515" cy="111" r="10" fill="#EAEBFF" />
                            <circle cx="364" cy="100" r="10" fill="#EAEBFF" />
                            <circle cx="294" cy="114" r="10" fill="#EAEBFF" />
                            <circle cx="339" cy="135" r="10" fill="#EAEBFF" />
                            <circle cx="448" cy="211" r="10" fill="#EAEBFF" />
                            <circle cx="564" cy="189" r="10" fill="#EAEBFF" />
                            <circle cx="574" cy="245" r="10" fill="#EAEBFF" />
                            <circle cx="600" cy="287" r="10" fill="#EAEBFF" />
                            <circle cx="533" cy="283" r="10" fill="#EAEBFF" />
                            <circle cx="30" cy="164" r="10" fill="#EAEBFF" />
                            <circle cx="10" cy="114" r="10" fill="#EAEBFF" />
                            <circle cx="63" cy="69" r="10" fill="#EAEBFF" />
                            <circle cx="161" cy="57" r="10" fill="#EAEBFF" />
                            <circle cx="241" cy="83" r="10" fill="#EAEBFF" />
                            <circle cx="260" cy="10" r="10" fill="#EAEBFF" />
                            <circle cx="448" cy="10" r="10" fill="#EAEBFF" />
                            <circle cx="462" cy="511" r="10" fill="#EAEBFF" />
                            <circle cx="23" cy="314" r="10" fill="#EAEBFF" />
                            <circle cx="408" cy="465" r="10" fill="#EAEBFF" />
                            <circle cx="305" cy="461" r="10" fill="#EAEBFF" />
                            <circle cx="509" cy="461" r="10" fill="#EAEBFF" />
                            <circle cx="574" cy="458" r="10" fill="#EAEBFF" />
                            <circle cx="626" cy="404" r="10" fill="#EAEBFF" />
                            <circle cx="581" cy="69" r="10" fill="#EAEBFF" />
                            <circle cx="632" cy="30" r="10" fill="#EAEBFF" />
                            <circle cx="652" cy="74" r="10" fill="#EAEBFF" />
                            <circle cx="632" cy="144" r="10" fill="#EAEBFF" />
                            <circle cx="639" cy="214" r="10" fill="#EAEBFF" />
                            <circle cx="700" cy="257" r="10" fill="#EAEBFF" />
                            <circle cx="662" cy="294" r="10" fill="#EAEBFF" />
                            <circle cx="707" cy="356" r="10" fill="#EAEBFF" />
                            <circle cx="629" cy="349" r="10" fill="#EAEBFF" />
                            <circle cx="152" cy="461" r="10" fill="#EAEBFF" />
                            <circle cx="360" cy="37" r="10" fill="#EAEBFF" />
                            <circle cx="431" cy="66" r="10" fill="#EAEBFF" />
                            <circle cx="412" cy="128" r="10" fill="#EAEBFF" />
                            <circle cx="564" cy="398" r="10" fill="#EAEBFF" />
                            <circle cx="145" cy="391" r="10" fill="#EAEBFF" />
                            <circle cx="70" cy="392" r="10" fill="#EAEBFF" />
                            <circle cx="488" cy="401" r="10" fill="#EAEBFF" />
                            <circle cx="525" cy="54" r="10" fill="#EAEBFF" />
                            <circle cx="23" cy="314" r="7" fill="#523EE5" />
                            <circle cx="408" cy="465" r="7" fill="#523EE5" />
                            <circle cx="509" cy="461" r="7" fill="#523EE5" />
                            <circle cx="305" cy="461" r="7" fill="#523EE5" />
                            <circle cx="574" cy="458" r="7" fill="#523EE5" />
                            <circle cx="626" cy="404" r="7" fill="#523EE5" />
                            <circle cx="431" cy="66" r="7" fill="#523EE5" />
                            <circle cx="360" cy="37" r="7" fill="#523EE5" />
                            <circle cx="152" cy="461" r="7" fill="#523EE5" />
                            <circle cx="148" cy="131" r="7" fill="#523EE5" />
                            <circle cx="90" cy="155" r="7" fill="#523EE5" />
                            <circle cx="131" cy="199" r="7" fill="#523EE5" />
                            <circle cx="70" cy="257" r="7" fill="#523EE5" />
                            <circle cx="209" cy="387" r="7" fill="#523EE5" />
                            <circle cx="297" cy="359" r="7" fill="#523EE5" />
                            <circle cx="298" cy="415" r="7" fill="#523EE5" />
                            <circle cx="415" cy="412" r="7" fill="#523EE5" />
                            <circle cx="505" cy="339" r="7" fill="#523EE5" />
                            <circle cx="505" cy="235" r="7" fill="#523EE5" />
                            <circle cx="465" cy="277" r="7" fill="#523EE5" />
                            <circle cx="462" cy="511" r="7" fill="#523EE5" />
                            <circle cx="445" cy="151" r="7" fill="#523EE5" />
                            <circle cx="515" cy="111" r="7" fill="#523EE5" />
                            <circle cx="364" cy="100" r="7" fill="#523EE5" />
                            <circle cx="294" cy="114" r="7" fill="#523EE5" />
                            <circle cx="339" cy="135" r="7" fill="#523EE5" />
                            <circle cx="448" cy="211" r="7" fill="#523EE5" />
                            <circle cx="564" cy="189" r="7" fill="#523EE5" />
                            <circle cx="574" cy="245" r="7" fill="#523EE5" />
                            <circle cx="600" cy="287" r="7" fill="#523EE5" />
                            <circle cx="533" cy="283" r="7" fill="#523EE5" />
                            <circle cx="412" cy="128" r="7" fill="#523EE5" />
                            <circle cx="516" cy="165" r="10" fill="#EAEBFF" />
                            <circle cx="577" cy="131" r="10" fill="#EAEBFF" />
                            <circle cx="516" cy="165" r="7" fill="#523EE5" />
                            <circle cx="577" cy="131" r="7" fill="#523EE5" />
                            <circle cx="241" cy="83" r="7" fill="#523EE5" />
                            <circle cx="448" cy="10" r="7" fill="#523EE5" />
                            <circle cx="564" cy="349" r="10" fill="#EAEBFF" />
                            <circle cx="564" cy="349" r="7" fill="#523EE5" />
                            <circle cx="564" cy="398" r="7" fill="#523EE5" />
                            <circle cx="488" cy="401" r="7" fill="#523EE5" />
                            <circle cx="354" cy="415" r="10" fill="#EAEBFF" />
                            <circle cx="354" cy="415" r="7" fill="#523EE5" />
                            <circle cx="145" cy="391" r="7" fill="#523EE5" />
                            <circle cx="70" cy="392" r="7" fill="#523EE5" />
                            <circle cx="86" cy="221" r="10" fill="#EAEBFF" />
                            <circle cx="86" cy="221" r="7" fill="#523EE5" />
                            <circle cx="30" cy="164" r="7" fill="#523EE5" />
                            <circle cx="10" cy="114" r="7" fill="#523EE5" />
                            <circle cx="63" cy="69" r="7" fill="#523EE5" />
                            <circle cx="161" cy="57" r="7" fill="#523EE5" />
                            <circle cx="260" cy="10" r="7" fill="#523EE5" />
                            <circle cx="581" cy="69" r="7" fill="#523EE5" />
                            <circle cx="632" cy="30" r="7" fill="#523EE5" />
                            <circle cx="652" cy="74" r="7" fill="#523EE5" />
                            <circle cx="632" cy="144" r="7" fill="#523EE5" />
                            <circle cx="639" cy="214" r="7" fill="#523EE5" />
                            <circle cx="700" cy="257" r="7" fill="#523EE5" />
                            <circle cx="662" cy="294" r="7" fill="#523EE5" />
                            <circle cx="707" cy="356" r="7" fill="#523EE5" />
                            <circle cx="629" cy="349" r="7" fill="#523EE5" />
                            <circle cx="525" cy="54" r="7" fill="#523EE5" />
                        </svg>
                        <svg class="lines" width="699" height="504" viewBox="0 0 699 504" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M299 163.5L330.5 126M330.5 126L284.5 106.5L231.5 75M330.5 126L354.5 91.5L350.5 29M369.5 213L439.5 203M439.5 203L436 143M439.5 203L497.5 226.5M439.5 203L507 156.5M436 143L505 102.5L516 46M436 143L403 119.5M497.5 226.5L554 180.5M497.5 226.5L565 238M497.5 226.5L523 275M554 180.5L568 123M554 180.5L624 135.5L643 66L624 21M565 238L590 278.5M565 238L630.5 205.5L692 248M590 278.5L619 339.5L617 395.5M590 278.5L653 286.5L697.5 347M384 258L456 269L497.5 329.5M497.5 329.5L555.5 342V388L565 449.5M497.5 329.5L479 392L497.5 452L452.5 503M414 347L404 404M404 404L360.5 332.5M404 404L399.5 456M289 273.5V352.5M289 352.5V406.5M289 352.5L198.5 379L135.5 383M289 406.5H345M289 406.5L295.5 452M80.5 147.5L195.5 177.5L139.5 123.5L80.5 147.5ZM80.5 147.5L21.5 156M80.5 147.5L2 106.5L54 61M15 306L62.5 250L145 259.5L122 190L76.5 213M231.5 75L153 49.5M231.5 75L252.5 1.5M516 46L439.5 1.5L422 58M516 46L573 61.5M135.5 383L142.5 452M135.5 383L60.5 384.5" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>
                <div id="step-5" class="anim__step">
                    <svg class="lines" width="660" height="283" viewBox="0 0 660 283" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M129.5 2V281.5M129.5 281.5H0M129.5 281.5H250M250 281.5L208.5 137.5L370 2M250 281.5L289.5 137.5L370 2M250 281.5H370M489 281.5L530 137.5L370 2M489 281.5L448.5 137.5L370 2M489 281.5H370M489 281.5H578.5H659V137.5L530 2L370 137.5V281.5" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                    </svg>
                    <svg class="claims" width="852" height="48" viewBox="0 0 852 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="154" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="154" cy="24" r="12" fill="#523EE5" />
                        <circle cx="274" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="274" cy="24" r="12" fill="#523EE5" />
                        <circle cx="394" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="394" cy="24" r="12" fill="#523EE5" />
                        <circle cx="513" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="513" cy="24" r="12" fill="#523EE5" />
                        <circle cx="602" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="602" cy="24" r="12" fill="#523EE5" />
                        <circle cx="682" cy="24" r="16" fill="#EAEBFF" />
                        <circle cx="682" cy="24" r="12" fill="#523EE5" />
                        <circle cx="24.2969" cy="24" r="24" fill="#DFFAF0" />
                        <circle cx="24.2969" cy="24" r="20" fill="#24D18F" />
                        <g clip-path="url(#clip0_7248_3878)">
                            <path d="M24.0025 8C20.5545 8 17.75 10.8052 17.75 14.2533V17.4929C17.75 20.9412 20.5545 23.7464 24.0025 23.7464C27.4508 23.7464 30.255 20.9412 30.255 17.4929V14.2533C30.2551 10.8052 27.4508 8 24.0025 8Z" fill="white" fill-opacity="0.9" />
                            <path d="M37.7898 31.8956C35.7876 28.4837 32.5874 25.9542 28.7786 24.773C28.6903 24.7456 28.5948 24.7689 28.529 24.8339C28.529 24.8339 27.013 27.5 24.0053 27.5C20.9976 27.5 19.4718 24.8339 19.4718 24.8339C19.4063 24.7689 19.31 24.7456 19.2222 24.773C15.413 25.9544 12.213 28.484 10.2116 31.8959C10.1658 31.974 10.1658 32.071 10.2116 32.1491C13.0537 36.992 18.3372 40.0005 24.0004 40.0005C29.6639 40.0005 34.9477 36.992 37.7898 32.1491C37.8358 32.0707 37.8358 31.9737 37.7898 31.8956Z" fill="white" fill-opacity="0.9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_7248_3878">
                                <rect width="32" height="32" fill="white" transform="translate(8 8)" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg class="physicians" width="577" height="48" viewBox="0 0 577 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M48.2969 24C48.2969 37.2548 37.5517 48 24.2969 48C11.042 48 0.296875 37.2548 0.296875 24C0.296875 10.7452 11.042 0 24.2969 0C37.5517 0 48.2969 10.7452 48.2969 24Z" fill="#EAEBFF" />
                        <path d="M44.2969 24C44.2969 35.0457 35.3426 44 24.2969 44C13.2512 44 4.29688 35.0457 4.29688 24C4.29688 12.9543 13.2512 4 24.2969 4C35.3426 4 44.2969 12.9543 44.2969 24Z" fill="#523EE5" />
                        <path d="M38.0866 31.8956C36.0845 28.4837 32.8842 25.9542 29.0755 24.773C28.9872 24.7456 28.8917 24.7689 28.8259 24.8339C27.0542 26.5809 24.8526 27.9438 24.3022 28.273C23.7147 27.8975 21.2399 26.2844 19.7687 24.8339C19.7032 24.7689 19.6069 24.7456 19.5191 24.773C15.7099 25.9544 12.5099 28.484 10.5085 31.8959C10.4627 31.974 10.4627 32.071 10.5085 32.1491C13.3506 36.992 18.6341 40.0005 24.2973 40.0005C29.9607 40.0005 35.2445 36.992 38.0866 32.1491C38.1327 32.0707 38.1327 31.9737 38.0866 31.8956ZM32.8013 33.7608C32.8013 33.8988 32.67 34.0043 32.5322 34.0043H30.8388C30.7008 34.0043 30.5503 34.1228 30.5503 34.2611V36.0123C30.5503 36.1501 30.4766 36.2553 30.3386 36.2553H28.8177C28.6797 36.2553 28.5497 36.1501 28.5497 36.0123V34.2611C28.5492 34.1231 28.455 34.0043 28.317 34.0043H26.5506C26.4126 34.0043 26.2984 33.8986 26.2984 33.7608V32.253C26.2984 32.115 26.4126 32.0037 26.5506 32.0037H28.317C28.455 32.0037 28.5492 31.891 28.5492 31.7528V29.9995C28.5492 29.8615 28.6792 29.7527 28.8172 29.7527H30.3217C30.4594 29.7527 30.5501 29.8615 30.5501 29.9995V31.7579C30.5501 31.8961 30.6837 32.0034 30.8219 32.0034H32.5322C32.67 32.0034 32.8013 32.1202 32.8013 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M24.2994 8C20.8513 8 18.0469 10.8052 18.0469 14.2533V17.4929C18.0469 20.9412 20.8513 23.7464 24.2994 23.7464C27.7477 23.7464 30.5519 20.9412 30.5519 17.4929V14.2533C30.5519 10.8052 27.7477 8 24.2994 8Z" fill="#EAEBFF" />
                        <path d="M128.297 24C128.297 37.2548 117.552 48 104.297 48C91.042 48 80.2969 37.2548 80.2969 24C80.2969 10.7452 91.042 0 104.297 0C117.552 0 128.297 10.7452 128.297 24Z" fill="#EAEBFF" />
                        <path d="M124.297 24C124.297 35.0457 115.343 44 104.297 44C93.2512 44 84.2969 35.0457 84.2969 24C84.2969 12.9543 93.2512 4 104.297 4C115.343 4 124.297 12.9543 124.297 24Z" fill="#523EE5" />
                        <path d="M118.087 31.8956C116.084 28.4837 112.884 25.9542 109.076 24.773C108.987 24.7456 108.892 24.7689 108.826 24.8339C107.054 26.5809 104.853 27.9438 104.302 28.273C103.715 27.8975 101.24 26.2844 99.7687 24.8339C99.7032 24.7689 99.6069 24.7456 99.5191 24.773C95.7099 25.9544 92.5099 28.484 90.5085 31.8959C90.4627 31.974 90.4627 32.071 90.5085 32.1491C93.3506 36.992 98.6341 40.0005 104.297 40.0005C109.961 40.0005 115.245 36.992 118.087 32.1491C118.133 32.0707 118.133 31.9737 118.087 31.8956ZM112.801 33.7608C112.801 33.8988 112.67 34.0043 112.532 34.0043H110.839C110.701 34.0043 110.55 34.1228 110.55 34.2611V36.0123C110.55 36.1501 110.477 36.2553 110.339 36.2553H108.818C108.68 36.2553 108.55 36.1501 108.55 36.0123V34.2611C108.549 34.1231 108.455 34.0043 108.317 34.0043H106.551C106.413 34.0043 106.298 33.8986 106.298 33.7608V32.253C106.298 32.115 106.413 32.0037 106.551 32.0037H108.317C108.455 32.0037 108.549 31.891 108.549 31.7528V29.9995C108.549 29.8615 108.679 29.7527 108.817 29.7527H110.322C110.459 29.7527 110.55 29.8615 110.55 29.9995V31.7579C110.55 31.8961 110.684 32.0034 110.822 32.0034H112.532C112.67 32.0034 112.801 32.1202 112.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M104.299 8C100.851 8 98.0469 10.8052 98.0469 14.2533V17.4929C98.0469 20.9412 100.851 23.7464 104.299 23.7464C107.748 23.7464 110.552 20.9412 110.552 17.4929V14.2533C110.552 10.8052 107.748 8 104.299 8Z" fill="#EAEBFF" />
                        <path d="M208.297 24C208.297 37.2548 197.552 48 184.297 48C171.042 48 160.297 37.2548 160.297 24C160.297 10.7452 171.042 0 184.297 0C197.552 0 208.297 10.7452 208.297 24Z" fill="#EAEBFF" />
                        <path d="M204.297 24C204.297 35.0457 195.343 44 184.297 44C173.251 44 164.297 35.0457 164.297 24C164.297 12.9543 173.251 4 184.297 4C195.343 4 204.297 12.9543 204.297 24Z" fill="#523EE5" />
                        <path d="M198.087 31.8956C196.084 28.4837 192.884 25.9542 189.076 24.773C188.987 24.7456 188.892 24.7689 188.826 24.8339C187.054 26.5809 184.853 27.9438 184.302 28.273C183.715 27.8975 181.24 26.2844 179.769 24.8339C179.703 24.7689 179.607 24.7456 179.519 24.773C175.71 25.9544 172.51 28.484 170.508 31.8959C170.463 31.974 170.463 32.071 170.508 32.1491C173.351 36.992 178.634 40.0005 184.297 40.0005C189.961 40.0005 195.245 36.992 198.087 32.1491C198.133 32.0707 198.133 31.9737 198.087 31.8956ZM192.801 33.7608C192.801 33.8988 192.67 34.0043 192.532 34.0043H190.839C190.701 34.0043 190.55 34.1228 190.55 34.2611V36.0123C190.55 36.1501 190.477 36.2553 190.339 36.2553H188.818C188.68 36.2553 188.55 36.1501 188.55 36.0123V34.2611C188.549 34.1231 188.455 34.0043 188.317 34.0043H186.551C186.413 34.0043 186.298 33.8986 186.298 33.7608V32.253C186.298 32.115 186.413 32.0037 186.551 32.0037H188.317C188.455 32.0037 188.549 31.891 188.549 31.7528V29.9995C188.549 29.8615 188.679 29.7527 188.817 29.7527H190.322C190.459 29.7527 190.55 29.8615 190.55 29.9995V31.7579C190.55 31.8961 190.684 32.0034 190.822 32.0034H192.532C192.67 32.0034 192.801 32.1202 192.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M184.299 8C180.851 8 178.047 10.8052 178.047 14.2533V17.4929C178.047 20.9412 180.851 23.7464 184.299 23.7464C187.748 23.7464 190.552 20.9412 190.552 17.4929V14.2533C190.552 10.8052 187.748 8 184.299 8Z" fill="#EAEBFF" />
                        <path d="M288.297 24C288.297 37.2548 277.552 48 264.297 48C251.042 48 240.297 37.2548 240.297 24C240.297 10.7452 251.042 0 264.297 0C277.552 0 288.297 10.7452 288.297 24Z" fill="#EAEBFF" />
                        <path d="M284.297 24C284.297 35.0457 275.343 44 264.297 44C253.251 44 244.297 35.0457 244.297 24C244.297 12.9543 253.251 4 264.297 4C275.343 4 284.297 12.9543 284.297 24Z" fill="#523EE5" />
                        <path d="M278.087 31.8956C276.084 28.4837 272.884 25.9542 269.076 24.773C268.987 24.7456 268.892 24.7689 268.826 24.8339C267.054 26.5809 264.853 27.9438 264.302 28.273C263.715 27.8975 261.24 26.2844 259.769 24.8339C259.703 24.7689 259.607 24.7456 259.519 24.773C255.71 25.9544 252.51 28.484 250.508 31.8959C250.463 31.974 250.463 32.071 250.508 32.1491C253.351 36.992 258.634 40.0005 264.297 40.0005C269.961 40.0005 275.245 36.992 278.087 32.1491C278.133 32.0707 278.133 31.9737 278.087 31.8956ZM272.801 33.7608C272.801 33.8988 272.67 34.0043 272.532 34.0043H270.839C270.701 34.0043 270.55 34.1228 270.55 34.2611V36.0123C270.55 36.1501 270.477 36.2553 270.339 36.2553H268.818C268.68 36.2553 268.55 36.1501 268.55 36.0123V34.2611C268.549 34.1231 268.455 34.0043 268.317 34.0043H266.551C266.413 34.0043 266.298 33.8986 266.298 33.7608V32.253C266.298 32.115 266.413 32.0037 266.551 32.0037H268.317C268.455 32.0037 268.549 31.891 268.549 31.7528V29.9995C268.549 29.8615 268.679 29.7527 268.817 29.7527H270.322C270.459 29.7527 270.55 29.8615 270.55 29.9995V31.7579C270.55 31.8961 270.684 32.0034 270.822 32.0034H272.532C272.67 32.0034 272.801 32.1202 272.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M264.299 8C260.851 8 258.047 10.8052 258.047 14.2533V17.4929C258.047 20.9412 260.851 23.7464 264.299 23.7464C267.748 23.7464 270.552 20.9412 270.552 17.4929V14.2533C270.552 10.8052 267.748 8 264.299 8Z" fill="#EAEBFF" />
                        <path d="M368.297 24C368.297 37.2548 357.552 48 344.297 48C331.042 48 320.297 37.2548 320.297 24C320.297 10.7452 331.042 0 344.297 0C357.552 0 368.297 10.7452 368.297 24Z" fill="#EAEBFF" />
                        <path d="M364.297 24C364.297 35.0457 355.343 44 344.297 44C333.251 44 324.297 35.0457 324.297 24C324.297 12.9543 333.251 4 344.297 4C355.343 4 364.297 12.9543 364.297 24Z" fill="#523EE5" />
                        <path d="M358.087 31.8956C356.084 28.4837 352.884 25.9542 349.076 24.773C348.987 24.7456 348.892 24.7689 348.826 24.8339C347.054 26.5809 344.853 27.9438 344.302 28.273C343.715 27.8975 341.24 26.2844 339.769 24.8339C339.703 24.7689 339.607 24.7456 339.519 24.773C335.71 25.9544 332.51 28.484 330.508 31.8959C330.463 31.974 330.463 32.071 330.508 32.1491C333.351 36.992 338.634 40.0005 344.297 40.0005C349.961 40.0005 355.245 36.992 358.087 32.1491C358.133 32.0707 358.133 31.9737 358.087 31.8956ZM352.801 33.7608C352.801 33.8988 352.67 34.0043 352.532 34.0043H350.839C350.701 34.0043 350.55 34.1228 350.55 34.2611V36.0123C350.55 36.1501 350.477 36.2553 350.339 36.2553H348.818C348.68 36.2553 348.55 36.1501 348.55 36.0123V34.2611C348.549 34.1231 348.455 34.0043 348.317 34.0043H346.551C346.413 34.0043 346.298 33.8986 346.298 33.7608V32.253C346.298 32.115 346.413 32.0037 346.551 32.0037H348.317C348.455 32.0037 348.549 31.891 348.549 31.7528V29.9995C348.549 29.8615 348.679 29.7527 348.817 29.7527H350.322C350.459 29.7527 350.55 29.8615 350.55 29.9995V31.7579C350.55 31.8961 350.684 32.0034 350.822 32.0034H352.532C352.67 32.0034 352.801 32.1202 352.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M344.299 8C340.851 8 338.047 10.8052 338.047 14.2533V17.4929C338.047 20.9412 340.851 23.7464 344.299 23.7464C347.748 23.7464 350.552 20.9412 350.552 17.4929V14.2533C350.552 10.8052 347.748 8 344.299 8Z" fill="#EAEBFF" />
                        <path d="M448.297 24C448.297 37.2548 437.552 48 424.297 48C411.042 48 400.297 37.2548 400.297 24C400.297 10.7452 411.042 0 424.297 0C437.552 0 448.297 10.7452 448.297 24Z" fill="#EAEBFF" />
                        <path d="M444.297 24C444.297 35.0457 435.343 44 424.297 44C413.251 44 404.297 35.0457 404.297 24C404.297 12.9543 413.251 4 424.297 4C435.343 4 444.297 12.9543 444.297 24Z" fill="#523EE5" />
                        <path d="M438.087 31.8956C436.084 28.4837 432.884 25.9542 429.076 24.773C428.987 24.7456 428.892 24.7689 428.826 24.8339C427.054 26.5809 424.853 27.9438 424.302 28.273C423.715 27.8975 421.24 26.2844 419.769 24.8339C419.703 24.7689 419.607 24.7456 419.519 24.773C415.71 25.9544 412.51 28.484 410.508 31.8959C410.463 31.974 410.463 32.071 410.508 32.1491C413.351 36.992 418.634 40.0005 424.297 40.0005C429.961 40.0005 435.245 36.992 438.087 32.1491C438.133 32.0707 438.133 31.9737 438.087 31.8956ZM432.801 33.7608C432.801 33.8988 432.67 34.0043 432.532 34.0043H430.839C430.701 34.0043 430.55 34.1228 430.55 34.2611V36.0123C430.55 36.1501 430.477 36.2553 430.339 36.2553H428.818C428.68 36.2553 428.55 36.1501 428.55 36.0123V34.2611C428.549 34.1231 428.455 34.0043 428.317 34.0043H426.551C426.413 34.0043 426.298 33.8986 426.298 33.7608V32.253C426.298 32.115 426.413 32.0037 426.551 32.0037H428.317C428.455 32.0037 428.549 31.891 428.549 31.7528V29.9995C428.549 29.8615 428.679 29.7527 428.817 29.7527H430.322C430.459 29.7527 430.55 29.8615 430.55 29.9995V31.7579C430.55 31.8961 430.684 32.0034 430.822 32.0034H432.532C432.67 32.0034 432.801 32.1202 432.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M424.299 8C420.851 8 418.047 10.8052 418.047 14.2533V17.4929C418.047 20.9412 420.851 23.7464 424.299 23.7464C427.748 23.7464 430.552 20.9412 430.552 17.4929V14.2533C430.552 10.8052 427.748 8 424.299 8Z" fill="#EAEBFF" />
                        <path d="M576.297 24C576.297 37.2548 565.552 48 552.297 48C539.042 48 528.297 37.2548 528.297 24C528.297 10.7452 539.042 0 552.297 0C565.552 0 576.297 10.7452 576.297 24Z" fill="#EAEBFF" />
                        <path d="M572.297 24C572.297 35.0457 563.343 44 552.297 44C541.251 44 532.297 35.0457 532.297 24C532.297 12.9543 541.251 4 552.297 4C563.343 4 572.297 12.9543 572.297 24Z" fill="#523EE5" />
                        <path d="M566.087 31.8956C564.085 28.4837 560.884 25.9542 557.076 24.773C556.987 24.7456 556.892 24.7689 556.826 24.8339C555.054 26.5809 552.853 27.9438 552.302 28.273C551.715 27.8975 549.24 26.2844 547.769 24.8339C547.703 24.7689 547.607 24.7456 547.519 24.773C543.71 25.9544 540.51 28.484 538.508 31.8959C538.463 31.974 538.463 32.071 538.508 32.1491C541.351 36.992 546.634 40.0005 552.297 40.0005C557.961 40.0005 563.245 36.992 566.087 32.1491C566.133 32.0707 566.133 31.9737 566.087 31.8956ZM560.801 33.7608C560.801 33.8988 560.67 34.0043 560.532 34.0043H558.839C558.701 34.0043 558.55 34.1228 558.55 34.2611V36.0123C558.55 36.1501 558.477 36.2553 558.339 36.2553H556.818C556.68 36.2553 556.55 36.1501 556.55 36.0123V34.2611C556.549 34.1231 556.455 34.0043 556.317 34.0043H554.551C554.413 34.0043 554.298 33.8986 554.298 33.7608V32.253C554.298 32.115 554.413 32.0037 554.551 32.0037H556.317C556.455 32.0037 556.549 31.891 556.549 31.7528V29.9995C556.549 29.8615 556.679 29.7527 556.817 29.7527H558.322C558.459 29.7527 558.55 29.8615 558.55 29.9995V31.7579C558.55 31.8961 558.684 32.0034 558.822 32.0034H560.532C560.67 32.0034 560.801 32.1202 560.801 32.2581V33.7608Z" fill="#EAEBFF" />
                        <path d="M552.299 8C548.851 8 546.047 10.8052 546.047 14.2533V17.4929C546.047 20.9412 548.851 23.7464 552.299 23.7464C555.748 23.7464 558.552 20.9412 558.552 17.4929V14.2533C558.552 10.8052 555.748 8 552.299 8Z" fill="#EAEBFF" />
                    </svg>
                    <svg class="providers" width="851" height="40" viewBox="0 0 851 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="152" cy="19" r="16" fill="#FBE9F2" />
                        <circle cx="152" cy="19" r="12" fill="#E53E7E" />
                        <circle cx="393" cy="20" r="20" fill="#FBE9F2" />
                        <circle cx="393" cy="20" r="16" fill="#E53E7E" />
                        <circle cx="552" cy="19" r="16" fill="#FBE9F2" />
                        <circle cx="552" cy="19" r="12" fill="#E53E7E" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="how-mobile mobile">
        <div class="wrap">

            <h2 class="title">
                How It Works
            </h2>
            <div class="how-mobile__items">
                <div class="how-mobile__item">
                    <div class="how-mobile__text">
                        <div class="how-mobile__title">
                            Leverage ubiquitous claims data to optimize care journeys and revenue flows. 
                        </div>
                        <div class="how-mobile__descr">
                            Effectively managing patient care means improving network utilization, controlling over
                            and under-treatment, creating health equity, and helping your providers and
                            service-lines drive better patient outcomes. 
                        </div>
                    </div>
                    <div class="how-mobile__anim">
                        <svg width="250" height="330" viewBox="0 0 250 330" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="112.712" y="285.536" width="28.817" height="42.4644" fill="url(#paint0_linear_7352_3541)" />
                            <g filter="url(#filter0_dd_7352_3541)">
                                <mask id="path-2-inside-1_7352_3541" fill="white">
                                    <path d="M108.574 250.206L42.9269 157.007C38.7038 151.012 42.16 142.678 49.419 141.635C100.553 134.29 153.693 134.352 204.83 141.655C212.087 142.691 215.557 151.016 211.348 157.018L146.001 250.211C144.822 251.893 144.189 253.898 144.189 255.953V276.359C144.189 281.107 140.856 285.27 136.138 285.795C130.201 286.456 124.365 286.462 118.43 285.801C113.72 285.276 110.398 281.117 110.398 276.377V255.964C110.398 253.903 109.761 251.891 108.574 250.206Z" />
                                </mask>
                                <path d="M108.574 250.206L42.9269 157.007C38.7038 151.012 42.16 142.678 49.419 141.635C100.553 134.29 153.693 134.352 204.83 141.655C212.087 142.691 215.557 151.016 211.348 157.018L146.001 250.211C144.822 251.893 144.189 253.898 144.189 255.953V276.359C144.189 281.107 140.856 285.27 136.138 285.795C130.201 286.456 124.365 286.462 118.43 285.801C113.72 285.276 110.398 281.117 110.398 276.377V255.964C110.398 253.903 109.761 251.891 108.574 250.206Z" fill="#EAEBFF" />
                                <path d="M42.9269 157.007L47.8322 153.552H47.8322L42.9269 157.007ZM108.574 250.206L113.479 246.75L113.479 246.75L108.574 250.206ZM146.001 250.211L141.089 246.767V246.767L146.001 250.211ZM211.348 157.018L206.435 153.573V153.573L211.348 157.018ZM118.43 285.801L119.095 279.838H119.095L118.43 285.801ZM136.138 285.795L136.802 291.758H136.802L136.138 285.795ZM49.419 141.635L48.5659 135.696L48.5659 135.696L49.419 141.635ZM204.83 141.655L203.981 147.594L204.83 141.655ZM38.0216 160.462L103.668 253.661L113.479 246.75L47.8322 153.552L38.0216 160.462ZM104.398 255.964V276.377H116.398V255.964H104.398ZM150.189 276.359V255.953H138.189V276.359H150.189ZM150.914 253.656L216.261 160.463L206.435 153.573L141.089 246.767L150.914 253.656ZM117.766 291.764C124.146 292.475 130.427 292.468 136.802 291.758L135.474 279.832C129.974 280.445 124.584 280.449 119.095 279.838L117.766 291.764ZM50.2722 147.574C100.836 140.311 153.402 140.371 203.981 147.594L205.678 135.715C153.983 128.332 100.27 128.269 48.5659 135.696L50.2722 147.574ZM216.261 160.463C222.954 150.917 217.512 137.405 205.678 135.715L203.981 147.594C206.662 147.977 208.16 151.114 206.435 153.573L216.261 160.463ZM150.189 255.953C150.189 255.131 150.442 254.329 150.914 253.656L141.089 246.767C139.202 249.458 138.189 252.665 138.189 255.953H150.189ZM138.189 276.359C138.189 278.41 136.809 279.683 135.474 279.832L136.802 291.758C144.903 290.856 150.189 283.803 150.189 276.359H138.189ZM104.398 276.377C104.398 283.805 109.666 290.861 117.766 291.764L119.095 279.838C117.775 279.69 116.398 278.428 116.398 276.377H104.398ZM103.668 253.661C104.143 254.335 104.398 255.14 104.398 255.964H116.398C116.398 252.665 115.379 249.447 113.479 246.75L103.668 253.661ZM47.8322 153.552C46.1011 151.094 47.5967 147.958 50.2722 147.574L48.5659 135.696C36.7232 137.397 31.3064 150.929 38.0216 160.462L47.8322 153.552Z" fill="#523EE5" mask="url(#path-2-inside-1_7352_3541)" />
                            </g>
                            <path d="M127.121 287.052L127.121 322.313" stroke="#523EE5" stroke-width="14" stroke-linecap="round" />
                            <mask id="path-5-inside-2_7352_3541" fill="white">
                                <path d="M109.185 250.636L42.6287 155.621C39.1264 150.621 44.8681 143.131 50.7903 144.612C93.6292 155.321 160.877 155.305 203.643 144.564C209.549 143.08 215.281 150.512 211.81 155.516L145.833 250.646C144.905 251.985 144.407 253.576 144.407 255.205V281.007C144.407 283.171 143.253 285.193 141.304 286.134C132.713 290.285 124.177 291.522 115.446 290.494C112.624 290.162 110.633 287.669 110.633 284.827V255.226C110.633 253.583 110.127 251.981 109.185 250.636Z" />
                            </mask>
                            <path d="M109.185 250.636L42.6287 155.621C39.1264 150.621 44.8681 143.131 50.7903 144.612C93.6292 155.321 160.877 155.305 203.643 144.564C209.549 143.08 215.281 150.512 211.81 155.516L145.833 250.646C144.905 251.985 144.407 253.576 144.407 255.205V281.007C144.407 283.171 143.253 285.193 141.304 286.134C132.713 290.285 124.177 291.522 115.446 290.494C112.624 290.162 110.633 287.669 110.633 284.827V255.226C110.633 253.583 110.127 251.981 109.185 250.636Z" fill="#FDFCFF" />
                            <path d="M42.6287 155.621L46.7239 152.753V152.753L42.6287 155.621ZM109.185 250.636L105.09 253.505L105.09 253.505L109.185 250.636ZM145.833 250.646L149.942 253.496L145.833 250.646ZM211.81 155.516L207.702 152.667V152.667L211.81 155.516ZM203.643 144.564L204.861 149.413H204.861L203.643 144.564ZM50.7903 144.612L49.5777 149.462L50.7903 144.612ZM115.446 290.494L114.862 295.46H114.862L115.446 290.494ZM141.304 286.134L139.129 281.632L141.304 286.134ZM38.5335 158.49L105.09 253.505L113.28 247.767L46.7239 152.753L38.5335 158.49ZM105.633 255.226V284.827H115.633V255.226H105.633ZM149.407 281.007V255.205H139.407V281.007H149.407ZM149.942 253.496L215.919 158.366L207.702 152.667L141.725 247.797L149.942 253.496ZM202.425 139.714C160.458 150.254 94.0456 150.271 52.0029 139.761L49.5777 149.462C93.2128 160.37 161.295 160.355 204.861 149.413L202.425 139.714ZM114.862 295.46C124.502 296.595 133.999 295.216 143.479 290.636L139.129 281.632C131.426 285.353 123.851 286.449 116.031 285.528L114.862 295.46ZM215.919 158.366C219.248 153.566 217.842 148.045 215.231 144.592C212.63 141.151 207.826 138.358 202.425 139.714L204.861 149.413C205.366 149.286 206.381 149.467 207.255 150.623C208.118 151.765 207.843 152.463 207.702 152.667L215.919 158.366ZM149.407 255.205C149.407 254.594 149.594 253.998 149.942 253.496L141.725 247.797C140.216 249.972 139.407 252.557 139.407 255.205H149.407ZM139.407 281.007C139.407 281.205 139.353 281.365 139.29 281.471C139.232 281.569 139.174 281.61 139.129 281.632L143.479 290.636C147.318 288.782 149.407 284.902 149.407 281.007H139.407ZM105.633 284.827C105.633 289.917 109.246 294.799 114.862 295.46L116.031 285.528C115.971 285.521 115.905 285.501 115.821 285.399C115.723 285.282 115.633 285.083 115.633 284.827H105.633ZM105.09 253.505C105.443 254.009 105.633 254.61 105.633 255.226H115.633C115.633 252.557 114.811 249.953 113.28 247.767L105.09 253.505ZM46.7239 152.753C46.5838 152.553 46.3008 151.85 47.1723 150.69C48.0531 149.518 49.076 149.337 49.5777 149.462L52.0029 139.761C46.5823 138.406 41.7733 141.229 39.1782 144.683C36.574 148.148 35.1713 153.69 38.5335 158.49L46.7239 152.753Z" fill="#523EE5" mask="url(#path-5-inside-2_7352_3541)" />
                            <path d="M210.59 143.804C192.043 151.104 159.826 154.901 127.121 154.901C94.4156 154.901 62.1985 151.104 43.6513 143.804L40.7215 151.248C60.7077 159.114 94.1583 162.901 127.121 162.901C160.083 162.901 193.534 159.114 213.52 151.248L210.59 143.804Z" fill="#523EE5" />
                            <g filter="url(#filter1_d_7352_3541)">
                                <path d="M35.2616 48.3066L28.8856 51.9875C27.9193 52.5454 27.2142 53.4642 26.9254 54.5419C26.6366 55.6196 26.7878 56.7679 27.3457 57.7341L64.1576 121.49C64.7155 122.456 65.6344 123.161 66.7122 123.45C67.79 123.739 68.9383 123.588 69.9046 123.03L119.091 94.634C120.057 94.0762 120.762 93.1573 121.051 92.0796C121.34 91.0019 121.189 89.8536 120.631 88.8874L83.819 25.1314C83.2611 24.1652 82.3422 23.4601 81.2644 23.1713C80.1866 22.8826 79.0383 23.0338 78.072 23.5916L53.4788 37.7896" fill="#FDFCFF" />
                                <path d="M35.2616 48.3066L28.8856 51.9875C27.9193 52.5454 27.2142 53.4642 26.9254 54.5419C26.6366 55.6196 26.7878 56.7679 27.3457 57.7341L64.1576 121.49C64.7155 122.456 65.6344 123.161 66.7122 123.45C67.79 123.739 68.9383 123.588 69.9046 123.03L119.091 94.634C120.057 94.0762 120.762 93.1573 121.051 92.0796C121.34 91.0019 121.189 89.8536 120.631 88.8874L83.819 25.1314C83.2611 24.1652 82.3422 23.4601 81.2644 23.1713C80.1866 22.8826 79.0383 23.0337 78.072 23.5916L53.4788 37.7896" stroke="#523EE5" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <path d="M31.6233 50.4096L32.712 46.3467C33.0006 45.2691 33.7054 44.3502 34.6715 43.7921L49.5586 35.1976C50.0418 34.9187 50.6159 34.8431 51.1548 34.9875C51.6937 35.1319 52.1532 35.4844 52.4321 35.9675L78.7263 81.5075L64.3589 77.658L60.5092 92.0245L35.2667 48.3062M70.501 109.33L106.935 88.2957L70.501 109.33ZM59.2686 47.8079L77.4858 37.2909L59.2686 47.8079ZM66.631 60.5591L84.8482 50.0421L66.631 60.5591ZM73.9934 73.3103L92.2106 62.7933L73.9934 73.3103ZM63.1386 96.5785L99.573 75.5445L63.1386 96.5785Z" fill="#523EE5" />
                            <path d="M31.6233 50.4096L32.712 46.3467C33.0006 45.2691 33.7054 44.3502 34.6715 43.7921L49.5586 35.1976C50.0418 34.9187 50.6159 34.8431 51.1548 34.9875C51.6937 35.1319 52.1532 35.4844 52.4321 35.9675L78.7263 81.5075L64.3589 77.658L60.5092 92.0245L35.2667 48.3062M70.501 109.33L106.935 88.2957M59.2686 47.8079L77.4858 37.2909M66.631 60.5591L84.8482 50.0421M73.9934 73.3103L92.2106 62.7933M63.1386 96.5785L99.573 75.5445" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            <g clip-path="url(#clip0_7352_3541)">
                                <g filter="url(#filter2_d_7352_3541)">
                                    <path d="M131.588 23.545L127.171 23.9052C126.421 23.9895 125.735 24.3685 125.264 24.9585C124.793 25.5486 124.576 26.3015 124.66 27.0517L130.229 76.5472C130.313 77.2973 130.692 77.9831 131.283 78.4539C131.873 78.9246 132.626 79.1417 133.376 79.0573L171.561 74.7617C172.311 74.6774 172.997 74.2984 173.467 73.7084C173.938 73.1183 174.155 72.3654 174.071 71.6152L168.502 22.1197C168.418 21.3696 168.039 20.6838 167.449 20.213C166.859 19.7423 166.106 19.5252 165.355 19.6096L146.755 21.6493" fill="#FDFCFF" />
                                    <path d="M131.588 23.545L127.171 23.9052C126.421 23.9895 125.735 24.3685 125.264 24.9585C124.793 25.5486 124.576 26.3015 124.66 27.0517L130.229 76.5472C130.313 77.2973 130.692 77.9831 131.283 78.4539C131.873 78.9246 132.626 79.1417 133.376 79.0573L171.561 74.7617C172.311 74.6774 172.997 74.2984 173.467 73.7084C173.938 73.1183 174.155 72.3654 174.071 71.6152L168.502 22.1197C168.418 21.3696 168.039 20.6838 167.449 20.213C166.859 19.7423 166.106 19.5252 165.355 19.6096L146.755 21.6493" stroke="#523EE5" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <path d="M129.293 23.6668L131.068 21.4422C131.539 20.8521 132.225 20.4731 132.975 20.3886L144.532 19.0885C144.907 19.0463 145.284 19.1548 145.579 19.3902C145.874 19.6255 146.063 19.9685 146.105 20.3435L150.083 55.6975L142.216 49.4221L135.94 57.2884L132.122 23.3486M137.452 70.7229L165.737 67.541M147.139 29.5356L161.282 27.9446M148.253 39.4347L162.396 37.8437M149.367 49.3338L163.509 47.7428M136.338 60.8238L164.623 57.6419" stroke="#523EE5" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <g clip-path="url(#clip1_7352_3541)">
                                <path d="M215.387 72.4552L212.665 70.5802C212.209 70.261 211.646 70.1356 211.098 70.2319C210.55 70.3281 210.063 70.638 209.743 71.0935L188.674 101.143C188.354 101.598 188.229 102.162 188.325 102.71C188.422 103.258 188.732 103.745 189.187 104.064L212.37 120.317C212.825 120.636 213.389 120.761 213.936 120.665C214.484 120.569 214.971 120.259 215.291 119.803L236.36 89.7539C236.68 89.2985 236.805 88.7349 236.709 88.1871C236.612 87.6393 236.303 87.1522 235.847 86.8329L224.861 78.9005" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M213.956 71.4833L216.021 71.1205C216.569 71.0242 217.132 71.1494 217.588 71.4686L224.604 76.3877C224.832 76.5473 224.987 76.7909 225.035 77.0648C225.083 77.3387 225.021 77.6205 224.861 77.8482L209.811 99.3121L208.528 92.0096L201.225 93.2926L215.673 72.6872M195.506 101.449L212.679 113.488M220.948 83.4288L229.534 89.4483M216.734 89.4387L225.32 95.4582M212.52 95.4486L221.106 101.468M199.72 95.439L216.892 107.478" stroke="#523EE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <g clip-path="url(#clip2_7352_3541)">
                                <path d="M220.05 14.3237L228.149 28.4089M198.666 8.55275C198.083 8.41064 197.467 8.50217 196.951 8.80778C196.434 9.1134 196.057 9.60888 195.901 10.1884L185.383 49.1597C185.226 49.7389 185.302 50.3564 185.595 50.8803C185.887 51.4043 186.373 51.7931 186.948 51.964L217.261 60.1446C217.85 60.3035 218.478 60.222 219.007 59.918C219.535 59.614 219.922 59.1125 220.081 58.5237L228.205 28.424L219.322 26.0269C218.747 25.8563 218.261 25.4673 217.968 24.943C217.675 24.4187 217.599 23.8008 217.756 23.2212L220.153 14.3396L198.666 8.55275Z" stroke="#523EE5" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M199.229 30.7041L217.349 35.5943M195.603 44.1384L213.723 49.0286M197.416 37.4213L215.536 42.3115" stroke="#523EE5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <filter id="filter0_dd_7352_3541" x="9.0947" y="108.152" width="236.073" height="214.142" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="16" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3541" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="-16" dy="-8" />
                                    <feGaussianBlur stdDeviation="8" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_7352_3541" result="effect2_dropShadow_7352_3541" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7352_3541" result="shape" />
                                </filter>
                                <filter id="filter1_d_7352_3541" x="0.781982" y="1.02808" width="146.413" height="152.565" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="12" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.12 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3541" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7352_3541" result="shape" />
                                </filter>
                                <filter id="filter2_d_7352_3541" x="98.8926" y="-2.1582" width="100.946" height="110.983" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="12" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.12 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3541" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_7352_3541" result="shape" />
                                </filter>
                                <linearGradient id="paint0_linear_7352_3541" x1="127.121" y1="285.536" x2="127.121" y2="328" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#D6CCFF" />
                                    <stop offset="1" stop-color="#FDFCFF" stop-opacity="0" />
                                </linearGradient>
                                <clipPath id="clip0_7352_3541">
                                    <rect width="68.3121" height="68.3078" fill="white" transform="matrix(0.993732 -0.111788 0.111803 0.99373 111.604 19.2123)" />
                                </clipPath>
                                <clipPath id="clip1_7352_3541">
                                    <rect width="50.3327" height="53.939" fill="white" transform="matrix(0.818819 0.574052 -0.574103 0.818783 208.672 56.7072)" />
                                </clipPath>
                                <clipPath id="clip2_7352_3541">
                                    <rect width="55.3588" height="55.3557" fill="white" transform="matrix(0.965461 0.260549 -0.260581 0.965452 188.481 0.417114)" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="how-mobile__item">
                    <div class="how-mobile__text">
                        <div class="how-mobile__title">
                            Ingest anonymized claims data from standard sources like EDI 837s, CCLF, FHIR and more.
                        </div>
                        <div class="how-mobile__descr">
                            Working with readily transmissible data means we don’t need to integrate with your
                            legacy EHR system. No PHI or EHR data is required. 
                        </div>
                    </div>
                    <div class="how-mobile__anim">
                        <svg width="315" height="339" viewBox="0 0 315 339" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g filter="url(#filter0_dd_7352_3646)">
                                <path d="M53.2943 120.858L54.2174 119.746L53.4524 118.521L50.1515 113.232L60.3623 104.458L65.1715 108.766L66.238 109.722L67.4861 109.02C72.3419 106.29 77.6916 104.341 83.3672 103.34L84.6789 103.109L84.9712 101.809L86.4549 95.2129H97.9337L99.4175 101.809L99.7097 103.109L101.021 103.34C106.697 104.341 112.047 106.29 116.903 109.02L118.09 109.687L119.146 108.827L124.576 104.405L134.764 113.159L131.006 118.416L130.109 119.671L131.094 120.858C134.716 125.217 137.621 130.193 139.63 135.605L140.114 136.909H141.505H147.971L149.901 149.489L144.16 151.407L142.794 151.864V153.304C142.794 159.091 141.829 164.648 140.052 169.824L139.608 171.117L140.651 172L145.933 176.47L139.65 188.098L133.479 185.217L132.081 184.564L131.094 185.751C127.426 190.167 123.025 193.948 118.079 196.906L116.911 197.605L117.133 198.948L118.094 204.779L105.964 209.643L103.136 204.303L102.455 203.016L101.021 203.269C98.1563 203.774 95.2068 204.038 92.1943 204.038C89.1818 204.038 86.2323 203.774 83.3672 203.269L82.0313 203.033L81.3184 204.187L77.9342 209.666L66.2904 204.802L67.2561 198.948L67.4777 197.605L66.3094 196.906C61.3635 193.948 56.9622 190.167 53.2943 185.751L52.2753 184.525L50.8526 185.245L45.3215 188.044L39.0299 176.4L43.8104 171.935L44.7578 171.05L44.3369 169.824C42.5601 164.648 41.5945 159.091 41.5945 153.304V151.864L40.2284 151.407L34.4875 149.489L36.4179 136.909H42.8834H44.2742L44.7583 135.605C46.7678 130.193 49.6731 125.217 53.2943 120.858Z" stroke="#523EE5" stroke-width="4" shape-rendering="crispEdges" />
                            </g>
                            <path d="M133.459 153.614C133.459 176.687 114.956 195.338 92.1965 195.338C69.4369 195.338 50.9336 176.687 50.9336 153.614C50.9336 130.541 69.4369 111.89 92.1965 111.89C114.956 111.89 133.459 130.541 133.459 153.614Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="6" />
                            <path d="M113.247 153.153C113.247 164.781 103.821 174.207 92.1937 174.207C80.5661 174.207 71.1401 164.781 71.1401 153.153C71.1401 141.526 80.5661 132.1 92.1937 132.1C103.821 132.1 113.247 141.526 113.247 153.153Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="4" />
                            <g filter="url(#filter1_dd_7352_3646)">
                                <path d="M190.442 203.433L191.546 202.501L191.009 201.16L188.692 195.373L200.29 188.536L204.264 193.624L205.146 194.752L206.498 194.282C211.759 192.451 217.368 191.475 223.132 191.49L224.463 191.493L224.98 190.266L227.603 184.034L238.902 186.057L239.2 192.812L239.259 194.143L240.509 194.602C245.92 196.587 250.842 199.449 255.141 202.992L256.192 203.858L257.383 203.197L263.508 199.801L271.993 210.215L267.367 214.727L266.263 215.804L267.024 217.145C269.82 222.075 271.803 227.485 272.827 233.167L273.074 234.535L274.443 234.781L280.807 235.92L280.49 248.643L274.501 249.52L273.075 249.729L272.822 251.146C271.802 256.843 269.872 262.142 267.21 266.924L266.546 268.118L267.417 269.172L271.828 274.502L263.594 284.841L258.027 280.918L256.766 280.028L255.586 281.023C251.197 284.723 246.198 287.669 240.808 289.71L239.535 290.191L239.517 291.553L239.436 297.462L226.638 300.112L224.796 294.356L224.352 292.97L222.896 292.966C219.987 292.958 217.037 292.698 214.072 292.167C211.106 291.636 208.25 290.856 205.518 289.854L204.245 289.387L203.34 290.397L199.043 295.194L188.439 288.354L190.421 282.762L190.876 281.479L189.849 280.585C185.502 276.801 181.836 272.303 179.004 267.31L178.217 265.923L176.69 266.381L170.752 268.162L166.611 255.591L172.104 252.039L173.192 251.335L172.994 250.054C172.157 244.646 172.186 239.006 173.206 233.309L173.46 231.891L172.196 231.201L166.883 228.301L171.001 216.258L177.365 217.398L178.734 217.643L179.44 216.445C182.372 211.472 186.109 207.085 190.442 203.433Z" stroke="#523EE5" stroke-width="4" shape-rendering="crispEdges" />
                            </g>
                            <path d="M263.571 249.805C259.504 272.517 238.003 287.615 215.6 283.603C193.196 279.592 178.27 257.971 182.337 235.26C186.404 212.548 207.905 197.45 230.308 201.462C252.711 205.473 267.638 227.094 263.571 249.805Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="6" />
                            <path d="M243.761 245.789C241.711 257.234 230.771 264.851 219.326 262.802C207.88 260.753 200.263 249.813 202.313 238.367C204.362 226.922 215.302 219.305 226.747 221.354C238.193 223.403 245.81 234.343 243.761 245.789Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="4" />
                            <g filter="url(#filter2_dd_7352_3646)">
                                <path d="M193.139 108.582L193.522 107.564L192.673 106.884L189.684 104.49L193.871 97.3016L197.553 98.8271L198.541 99.2364L199.25 98.4359C201.619 95.7612 204.452 93.453 207.683 91.6485L208.555 91.1615L208.442 90.1692L207.968 86.0141L214.66 83.6801L216.873 87.2282L217.402 88.0755L218.387 87.9146C222.039 87.3186 225.693 87.3642 229.212 87.9852L230.213 88.162L230.748 87.297L233.035 83.5993L240.763 86.616L239.64 90.4187L239.311 91.5328L240.308 92.13C243.421 93.9956 246.229 96.3848 248.586 99.2259L249.251 100.027L250.234 99.6845L254.011 98.367L257.684 105.277L254.729 107.556L253.872 108.216L254.229 109.238C255.447 112.73 256.031 116.287 256.044 119.786L256.048 120.815L257.009 121.182L261.014 122.711L259.705 130.746L255.521 130.327L254.373 130.213L253.968 131.292C252.674 134.733 250.802 137.946 248.426 140.778L247.768 141.562L248.259 142.461L249.998 145.646L243.895 150.951L241.174 148.434L240.375 147.695L239.424 148.226C237.794 149.137 236.061 149.92 234.234 150.557C232.407 151.194 230.563 151.659 228.719 151.96L227.718 152.123L227.497 153.114L226.632 156.99L218.838 156.533L218.216 152.94L218.041 151.931L217.038 151.726C213.417 150.986 209.952 149.634 206.799 147.745L205.777 147.132L204.949 147.989L202.306 150.724L196.273 145.237L198.166 141.655L198.622 140.792L198.017 140.026C195.851 137.278 194.097 134.129 192.878 130.637L192.522 129.615L191.44 129.631L187.709 129.685L186.288 121.989L190.065 120.672L191.048 120.329L191.07 119.287C191.149 115.597 191.862 111.979 193.139 108.582Z" stroke="#523EE5" stroke-width="3" shape-rendering="crispEdges" />
                            </g>
                            <path d="M247.18 111.71C251.753 124.821 244.871 139.128 231.83 143.677C218.789 148.226 204.502 141.302 199.929 128.191C195.355 115.081 202.237 100.773 215.278 96.2244C228.319 91.6756 242.607 98.5993 247.18 111.71Z" fill="#EAEBFF" stroke="#523EE5" stroke-width="4" />
                            <path d="M235.026 115.95C237.247 122.316 233.905 129.262 227.575 131.47C221.245 133.678 214.308 130.317 212.088 123.951C209.867 117.585 213.209 110.639 219.539 108.431C225.869 106.224 232.806 109.584 235.026 115.95Z" fill="#FDFCFF" stroke="#523EE5" stroke-width="2.5" />
                            <circle cx="130.747" cy="233.39" r="5.19722" fill="#523EE5" />
                            <circle cx="126.292" cy="253.436" r="5.19722" fill="#523EE5" />
                            <circle cx="132.232" cy="274.225" r="5.19722" fill="#523EE5" />
                            <circle cx="146.339" cy="293.529" r="5.19722" fill="#523EE5" />
                            <circle cx="151.536" cy="315.803" r="5.19722" fill="#523EE5" />
                            <path d="M142.626 218.169C151.907 208.889 160.817 203.246 166.014 192.926C177.562 169.994 175.576 152.981 166.014 129.074C150.422 90.095 178.458 71.8463 196.455 55.1994C211.304 41.4639 209.448 24.7586 209.448 6.56836" stroke="#523EE5" stroke-width="12" stroke-linecap="round" />
                            <defs>
                                <filter id="filter0_dd_7352_3646" x="0.254944" y="65.2129" width="183.879" height="182.957" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="16" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3646" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="-16" dy="-8" />
                                    <feGaussianBlur stdDeviation="8" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_7352_3646" result="effect2_dropShadow_7352_3646" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7352_3646" result="shape" />
                                </filter>
                                <filter id="filter1_dd_7352_3646" x="132.228" y="153.783" width="182.621" height="184.652" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="16" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3646" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="-16" dy="-8" />
                                    <feGaussianBlur stdDeviation="8" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_7352_3646" result="effect2_dropShadow_7352_3646" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7352_3646" result="shape" />
                                </filter>
                                <filter id="filter2_dd_7352_3646" x="152.579" y="53.7476" width="142.113" height="140.815" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="16" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.490196 0 0 0 0 0.52549 0 0 0 0 0.858824 0 0 0 0.15 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_7352_3646" />
                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dx="-16" dy="-8" />
                                    <feGaussianBlur stdDeviation="8" />
                                    <feComposite in2="hardAlpha" operator="out" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.988235 0 0 0 0 1 0 0 0 1 0" />
                                    <feBlend mode="normal" in2="effect1_dropShadow_7352_3646" result="effect2_dropShadow_7352_3646" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_7352_3646" result="shape" />
                                </filter>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="how-mobile__item">
                    <div class="how-mobile__text">
                        <div class="how-mobile__title">
                            Process the data to graph relationships, pathways, diagnoses, referrals, procedures and
                            interrelated conditions.
                        </div>
                        <div class="how-mobile__descr">

                        </div>
                    </div>
                    <div class="how-mobile__anim">
                        <svg width="343" height="250" viewBox="0 0 343 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="70.9903" cy="62.9831" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="43.2635" cy="74.4563" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="62.8635" cy="95.4904" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="33.7025" cy="123.217" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="100.151" cy="185.363" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="142.22" cy="171.978" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="142.698" cy="198.749" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="198.629" cy="197.315" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="241.654" cy="162.417" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="241.654" cy="112.7" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="222.532" cy="132.778" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="212.971" cy="72.5439" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="246.434" cy="53.4221" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="174.249" cy="48.1635" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="140.785" cy="54.8562" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="162.298" cy="64.8952" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="214.405" cy="101.227" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="269.859" cy="90.7099" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="274.639" cy="117.481" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="287.068" cy="137.559" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="255.039" cy="135.646" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="14.5806" cy="78.7588" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="5.01959" cy="54.8562" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="30.3562" cy="33.344" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="77.205" cy="27.6074" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="115.449" cy="40.0368" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="124.532" cy="5.13913" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="214.405" cy="5.13913" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="221.098" cy="244.642" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="11.2342" cy="150.466" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="195.283" cy="222.651" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="146.044" cy="220.739" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="243.566" cy="220.739" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="274.639" cy="219.305" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="299.498" cy="193.49" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="277.985" cy="33.344" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="302.366" cy="14.7002" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="311.927" cy="35.7343" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="302.366" cy="69.1977" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="305.712" cy="102.661" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="334.873" cy="123.217" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="316.707" cy="140.905" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="338.22" cy="170.544" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="300.932" cy="167.198" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="72.9025" cy="220.739" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="172.337" cy="18.0464" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="206.278" cy="31.9099" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="197.195" cy="61.5488" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="269.859" cy="190.622" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="69.5562" cy="187.276" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="33.7025" cy="187.754" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="233.527" cy="192.056" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="251.215" cy="26.1733" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="154.171" cy="112.7" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="110.668" cy="71.1098" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="125.966" cy="97.8806" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="142.219" cy="135.168" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="168.99" cy="150.466" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="177.595" cy="163.851" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="203.41" cy="170.544" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="98.717" cy="157.159" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="74.3365" cy="127.998" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="108.756" cy="121.305" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="98.717" cy="89.2756" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="147.478" cy="82.583" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="175.683" cy="85.9294" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="180.941" cy="106.007" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="188.112" cy="127.998" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="44.6975" cy="163.851" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <ellipse cx="75.7707" cy="154.29" rx="4.78049" ry="4.78049" fill="#EAEBFF" />
                            <path d="M147.478 82.3441L162.537 64.4172M162.537 64.4172L140.546 55.0953L115.21 40.0367M162.537 64.4172L174.01 47.9245L172.098 18.0465M181.181 106.007L214.644 101.227M214.644 101.227L212.971 72.5441M214.644 101.227L242.371 112.461M214.644 101.227L246.912 78.9977M212.971 72.5441L245.956 53.1831L251.215 26.1733M212.971 72.5441L197.195 61.3099M242.371 112.461L269.381 90.4709M242.371 112.461L274.639 117.959M242.371 112.461L254.561 135.647M269.381 90.4709L276.073 62.9831M269.381 90.4709L302.844 68.9587L311.927 35.7343L302.844 14.2221M274.639 117.959L286.59 137.32M274.639 117.959L305.951 102.422L335.351 122.739M286.59 137.32L300.454 166.481L299.498 193.251M286.59 137.32L316.707 141.144L337.981 170.066M188.112 127.52L222.532 132.778L242.371 161.7M242.371 161.7L270.098 167.676V189.666L274.639 219.066M242.371 161.7L233.527 191.578L242.371 220.261L220.859 244.642M202.454 170.066L197.673 197.315M197.673 197.315L176.878 163.134M197.673 197.315L195.522 222.173M142.698 134.929V172.695M142.698 172.695V198.51M142.698 172.695L99.4342 185.364L69.3172 187.276M142.698 198.51H169.468M142.698 198.51L145.805 220.261M43.0245 74.6953L98.0001 89.0367L71.2294 63.2221L43.0245 74.6953ZM43.0245 74.6953L14.8196 78.7587M43.0245 74.6953L5.49765 55.0953L30.3562 33.3441M11.7123 150.466L34.4196 123.695L73.8586 128.237L62.8635 95.0124L41.1123 106.007M115.21 40.0367L77.683 27.8465M115.21 40.0367L125.249 4.90015M251.215 26.1733L214.644 4.90015L206.278 31.9099M251.215 26.1733L278.463 33.5831M69.3172 187.276L72.6635 220.261M69.3172 187.276L33.4635 187.993" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                            <path d="M142.22 135.646L154.171 112.7M154.41 112.7L188.112 127.998M154.41 112.7L180.463 105.529M154.41 112.7L175.683 85.6904M154.41 112.7L147.239 82.344M108.756 121.066L142.22 135.407L98.7171 157.398M108.756 121.066L98.7171 88.5587L110.907 70.8708L126.205 97.4026M108.756 121.066L74.0976 128.237M108.756 121.066L98.7171 157.398M98.7171 157.398L75.5317 154.29L44.2195 163.851M142.459 135.646L168.99 150.705L177.356 163.851L203.171 170.544" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                            <circle cx="11.2341" cy="150.466" r="3.34634" fill="#523EE5" />
                            <circle cx="195.283" cy="222.651" r="3.34634" fill="#523EE5" />
                            <circle cx="243.566" cy="220.739" r="3.34634" fill="#523EE5" />
                            <circle cx="146.044" cy="220.739" r="3.34634" fill="#523EE5" />
                            <circle cx="274.639" cy="219.305" r="3.34634" fill="#523EE5" />
                            <circle cx="299.497" cy="193.49" r="3.34634" fill="#523EE5" />
                            <circle cx="206.278" cy="31.9098" r="3.34634" fill="#523EE5" />
                            <circle cx="172.337" cy="18.0463" r="3.34634" fill="#523EE5" />
                            <circle cx="72.9024" cy="220.739" r="3.34634" fill="#523EE5" />
                            <circle cx="70.9902" cy="62.9831" r="3.34634" fill="#523EE5" />
                            <circle cx="43.2634" cy="74.4562" r="3.34634" fill="#523EE5" />
                            <circle cx="62.8634" cy="95.4904" r="3.34634" fill="#523EE5" />
                            <circle cx="33.7024" cy="123.217" r="3.34634" fill="#523EE5" />
                            <circle cx="100.151" cy="185.363" r="3.34634" fill="#523EE5" />
                            <circle cx="142.219" cy="171.978" r="3.34634" fill="#523EE5" />
                            <circle cx="142.698" cy="198.749" r="3.34634" fill="#523EE5" />
                            <circle cx="198.629" cy="197.315" r="3.34634" fill="#523EE5" />
                            <circle cx="241.654" cy="162.417" r="3.34634" fill="#523EE5" />
                            <circle cx="241.654" cy="112.7" r="3.34634" fill="#523EE5" />
                            <circle cx="222.532" cy="132.778" r="3.34634" fill="#523EE5" />
                            <circle cx="221.098" cy="244.642" r="3.34634" fill="#523EE5" />
                            <circle cx="212.971" cy="72.5439" r="3.34634" fill="#523EE5" />
                            <circle cx="246.434" cy="53.422" r="3.34634" fill="#523EE5" />
                            <circle cx="174.249" cy="48.1635" r="3.34634" fill="#523EE5" />
                            <circle cx="140.785" cy="54.8561" r="3.34634" fill="#523EE5" />
                            <circle cx="162.298" cy="64.8952" r="3.34634" fill="#523EE5" />
                            <circle cx="214.405" cy="101.227" r="3.34634" fill="#523EE5" />
                            <circle cx="269.858" cy="90.7099" r="3.34634" fill="#523EE5" />
                            <circle cx="274.639" cy="117.481" r="3.34634" fill="#523EE5" />
                            <circle cx="287.068" cy="137.559" r="3.34634" fill="#523EE5" />
                            <circle cx="255.039" cy="135.646" r="3.34634" fill="#523EE5" />
                            <circle cx="197.195" cy="61.5487" r="3.34634" fill="#523EE5" />
                            <circle cx="246.912" cy="79.2365" r="4.78049" fill="#EAEBFF" />
                            <circle cx="276.073" cy="62.9829" r="4.78049" fill="#EAEBFF" />
                            <circle cx="246.912" cy="79.2367" r="3.34634" fill="#523EE5" />
                            <circle cx="276.073" cy="62.9831" r="3.34634" fill="#523EE5" />
                            <circle cx="115.449" cy="40.0368" r="3.34634" fill="#523EE5" />
                            <circle cx="214.405" cy="5.13907" r="3.34634" fill="#523EE5" />
                            <circle cx="269.858" cy="167.198" r="4.78049" fill="#EAEBFF" />
                            <circle cx="269.858" cy="167.198" r="3.34634" fill="#523EE5" />
                            <circle cx="269.858" cy="190.622" r="3.34634" fill="#523EE5" />
                            <circle cx="233.527" cy="192.056" r="3.34634" fill="#523EE5" />
                            <circle cx="169.468" cy="198.749" r="4.78049" fill="#EAEBFF" />
                            <circle cx="169.468" cy="198.749" r="3.34634" fill="#523EE5" />
                            <circle cx="69.5561" cy="187.276" r="3.34634" fill="#523EE5" />
                            <circle cx="33.7024" cy="187.754" r="3.34634" fill="#523EE5" />
                            <circle cx="41.3512" cy="106.007" r="4.78049" fill="#EAEBFF" />
                            <circle cx="41.3512" cy="106.007" r="3.34634" fill="#523EE5" />
                            <circle cx="14.5804" cy="78.7587" r="3.34634" fill="#523EE5" />
                            <circle cx="5.01947" cy="54.8561" r="3.34634" fill="#523EE5" />
                            <circle cx="30.356" cy="33.3439" r="3.34634" fill="#523EE5" />
                            <circle cx="77.2048" cy="27.6073" r="3.34634" fill="#523EE5" />
                            <circle cx="124.532" cy="5.13907" r="3.34634" fill="#523EE5" />
                            <circle cx="277.985" cy="33.3439" r="3.34634" fill="#523EE5" />
                            <circle cx="302.366" cy="14.7001" r="3.34634" fill="#523EE5" />
                            <circle cx="311.927" cy="35.7343" r="3.34634" fill="#523EE5" />
                            <circle cx="302.366" cy="69.1977" r="3.34634" fill="#523EE5" />
                            <circle cx="305.712" cy="102.661" r="3.34634" fill="#523EE5" />
                            <circle cx="334.873" cy="123.217" r="3.34634" fill="#523EE5" />
                            <circle cx="316.707" cy="140.905" r="3.34634" fill="#523EE5" />
                            <circle cx="338.219" cy="170.544" r="3.34634" fill="#523EE5" />
                            <circle cx="300.932" cy="167.198" r="3.34634" fill="#523EE5" />
                            <circle cx="251.215" cy="26.1732" r="3.34634" fill="#523EE5" />
                            <ellipse cx="142.22" cy="135.168" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="110.668" cy="71.1098" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="125.966" cy="97.8805" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="44.6976" cy="163.851" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="75.7708" cy="154.29" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="108.756" cy="121.305" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="98.7171" cy="89.2755" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="74.3366" cy="127.997" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="98.7171" cy="157.159" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="177.595" cy="163.851" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="168.99" cy="150.466" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="203.41" cy="170.544" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="188.112" cy="127.997" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="180.942" cy="106.007" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="175.683" cy="85.9294" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="147.478" cy="82.5829" rx="3.34634" ry="3.34634" fill="#523EE5" />
                            <ellipse cx="154.171" cy="112.7" rx="3.34634" ry="3.34634" fill="#523EE5" />
                        </svg>

                    </div>
                </div>
                <div class="how-mobile__item">
                    <div class="how-mobile__text">
                        <div class="how-mobile__title">
                            Apply our proprietary deep learning Care Coordination Intelligence Engine (CCIE) to
                            generate KPIs, trends and hidden networks of care.  
                        </div>
                        <div class="how-mobile__descr">

                        </div>
                    </div>
                    <div class="how-mobile__anim">
                        <svg width="375" height="419" viewBox="0 0 375 419" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse cx="84.9817" cy="105.308" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="38.3323" cy="124.577" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="71.3086" cy="159.902" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="22.2463" cy="206.467" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="134.044" cy="310.837" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="204.822" cy="288.358" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="205.627" cy="333.317" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="299.73" cy="330.909" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="372.117" cy="272.301" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="372.117" cy="188.805" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="339.945" cy="222.524" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="323.859" cy="121.365" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="380.16" cy="89.2514" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="258.71" cy="80.4201" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="202.409" cy="91.6601" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="238.603" cy="108.52" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="326.272" cy="169.536" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="16.6162" cy="55.5319" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="95.4376" cy="45.8976" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="159.782" cy="66.7716" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="175.063" cy="8.16373" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="326.272" cy="8.16373" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="337.532" cy="410.391" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="294.1" cy="373.46" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="211.257" cy="370.248" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="375.334" cy="370.248" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="88.1989" cy="370.248" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="255.493" cy="29.8407" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="312.599" cy="53.1232" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="297.317" cy="102.9" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="82.5688" cy="314.049" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="22.2463" cy="314.852" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="358.444" cy="322.077" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="224.804" cy="188.83" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="151.737" cy="118.957" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="177.478" cy="163.916" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="204.707" cy="226.581" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="249.724" cy="252.285" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="264.194" cy="274.775" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="307.603" cy="286.02" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="131.553" cy="263.53" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="90.5555" cy="214.533" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="148.435" cy="203.288" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="131.553" cy="149.473" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="213.549" cy="138.227" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="260.978" cy="143.85" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="269.821" cy="177.585" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="281.879" cy="214.533" rx="8.03881" ry="8.03218" fill="#EAEBFF" />
                            <ellipse cx="40.7466" cy="274.709" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <ellipse cx="93.0229" cy="258.652" rx="8.043" ry="8.02848" fill="#EAEBFF" />
                            <path d="M204.878 227.625L225.004 188.972M225.407 188.972L282.162 214.741M225.407 188.972L269.282 176.894M225.407 188.972L261.231 143.475M225.407 188.972L213.331 137.839M148.526 203.064L204.878 227.222L131.62 264.264M148.526 203.064L131.62 148.307L152.024 119.208L176.388 164.591M148.526 203.064L90.1602 215.143M148.526 203.064L131.62 264.264M131.62 264.264L93.0265 258.701L40.2389 275.135M205.281 227.625L249.961 252.99L264.049 275.135L307.521 286.408" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                            <ellipse cx="204.708" cy="226.585" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="148.425" cy="203.286" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="131.54" cy="149.456" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="90.5336" cy="214.534" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="131.54" cy="263.543" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="264.207" cy="274.791" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="249.734" cy="252.295" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="307.625" cy="286.039" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="281.896" cy="214.534" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="269.835" cy="177.576" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="260.991" cy="143.832" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="213.552" cy="138.208" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="224.809" cy="188.824" rx="5.6283" ry="5.62402" fill="#523EE5" />
                            <ellipse cx="151.58" cy="118.625" rx="5.62458" ry="5.64111" fill="#523EE5" />
                            <ellipse cx="40.6982" cy="274.965" rx="5.62458" ry="5.64111" fill="#523EE5" />
                            <ellipse cx="92.9259" cy="258.847" rx="5.62458" ry="5.64111" fill="#523EE5" />
                            <ellipse cx="177.295" cy="163.754" rx="5.62458" ry="5.64111" fill="#523EE5" />
                        </svg>

                    </div>
                </div>
                <div class="how-mobile__item">
                    <div class="how-mobile__text">
                        <div class="how-mobile__title">
                            Optimize service line utilization and stem revenue leakage.
                        </div>
                        <div class="how-mobile__descr">
                            Working with readily transmissible data means we don’t need to integrate with your
                            legacy EHR system. No PHI or EHR data is required. 
                        </div>
                    </div>
                    <div class="how-mobile__anim">
                        <svg width="360" height="156" viewBox="0 0 360 156" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M73.8517 9.8999V143.421M73.8517 143.421H11.9875M73.8517 143.421H131.416M131.416 143.421L111.591 74.6304L188.742 9.8999M131.416 143.421L150.286 74.6304L188.742 9.8999M131.416 143.421H188.742M245.591 143.421L265.177 74.6304L188.742 9.8999M245.591 143.421L226.243 74.6304L188.742 9.8999M245.591 143.421H188.742M245.591 143.421H288.346H326.802V74.6304L265.177 9.8999L188.742 74.6304V143.421" stroke="#523EE5" stroke-opacity="0.2" stroke-width="1.5" />
                            <circle cx="73.6128" cy="9.8998" r="7.64345" fill="#FBE9F2" />
                            <circle cx="73.6128" cy="9.89958" r="5.73259" fill="#E53E7E" />
                            <circle cx="188.742" cy="10.3776" r="9.55432" fill="#FBE9F2" />
                            <circle cx="188.742" cy="10.3773" r="7.64345" fill="#E53E7E" />
                            <circle cx="264.699" cy="9.8998" r="7.64345" fill="#FBE9F2" />
                            <circle cx="264.699" cy="9.89958" r="5.73259" fill="#E53E7E" />
                            <circle cx="73.7546" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="73.7546" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M73.7558 67.2256C72.1087 67.2256 70.7689 68.5657 70.7689 70.2129V71.7605C70.7689 73.4078 72.1087 74.7479 73.7558 74.7479C75.4031 74.7479 76.7428 73.4078 76.7428 71.7605V70.2129C76.7428 68.5657 75.4031 67.2256 73.7558 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip0_7352_4636)">
                                <path d="M80.3422 78.6409C79.3857 77.011 77.8569 75.8026 76.0374 75.2383C75.9952 75.2252 75.9496 75.2363 75.9182 75.2674C75.0718 76.1019 74.0201 76.753 73.7571 76.9103C73.4765 76.7309 72.2942 75.9603 71.5914 75.2674C71.5601 75.2363 71.5141 75.2252 71.4722 75.2383C69.6524 75.8027 68.1238 77.0111 67.1677 78.641C67.1458 78.6783 67.1458 78.7247 67.1677 78.762C68.5254 81.0755 71.0494 82.5127 73.7548 82.5127C76.4603 82.5127 78.9845 81.0755 80.3422 78.762C80.3642 78.7245 80.3642 78.6782 80.3422 78.6409ZM77.8173 79.5319C77.8173 79.5978 77.7546 79.6482 77.6888 79.6482H76.8798C76.8139 79.6482 76.742 79.7049 76.742 79.7709V80.6075C76.742 80.6733 76.7067 80.7236 76.6408 80.7236H75.9143C75.8484 80.7236 75.7862 80.6733 75.7862 80.6075V79.7709C75.786 79.705 75.741 79.6482 75.6751 79.6482H74.8312C74.7653 79.6482 74.7108 79.5977 74.7108 79.5319V78.8116C74.7108 78.7457 74.7653 78.6925 74.8312 78.6925H75.6751C75.741 78.6925 75.786 78.6387 75.786 78.5727V77.7351C75.786 77.6691 75.8481 77.6172 75.914 77.6172H76.6328C76.6985 77.6172 76.7418 77.6691 76.7418 77.7351V78.5751C76.7418 78.6411 76.8057 78.6924 76.8717 78.6924H77.6888C77.7546 78.6924 77.8173 78.7481 77.8173 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="111.972" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="111.972" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M111.973 67.2256C110.326 67.2256 108.986 68.5657 108.986 70.2129V71.7605C108.986 73.4078 110.326 74.7479 111.973 74.7479C113.62 74.7479 114.96 73.4078 114.96 71.7605V70.2129C114.96 68.5657 113.62 67.2256 111.973 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip1_7352_4636)">
                                <path d="M118.559 78.6409C117.603 77.011 116.074 75.8026 114.255 75.2383C114.212 75.2252 114.167 75.2363 114.135 75.2674C113.289 76.1019 112.237 76.753 111.974 76.9103C111.694 76.7309 110.511 75.9603 109.809 75.2674C109.777 75.2363 109.731 75.2252 109.689 75.2383C107.87 75.8027 106.341 77.0111 105.385 78.641C105.363 78.6783 105.363 78.7247 105.385 78.762C106.743 81.0755 109.267 82.5127 111.972 82.5127C114.678 82.5127 117.202 81.0755 118.559 78.762C118.581 78.7245 118.581 78.6782 118.559 78.6409ZM116.035 79.5319C116.035 79.5978 115.972 79.6482 115.906 79.6482H115.097C115.031 79.6482 114.959 79.7049 114.959 79.7709V80.6075C114.959 80.6733 114.924 80.7236 114.858 80.7236H114.132C114.066 80.7236 114.003 80.6733 114.003 80.6075V79.7709C114.003 79.705 113.958 79.6482 113.892 79.6482H113.048C112.983 79.6482 112.928 79.5977 112.928 79.5319V78.8116C112.928 78.7457 112.983 78.6925 113.048 78.6925H113.892C113.958 78.6925 114.003 78.6387 114.003 78.5727V77.7351C114.003 77.6691 114.065 77.6172 114.131 77.6172H114.85C114.916 77.6172 114.959 77.6691 114.959 77.7351V78.5751C114.959 78.6411 115.023 78.6924 115.089 78.6924H115.906C115.972 78.6924 116.035 78.7481 116.035 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="150.189" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="150.189" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M150.19 67.2256C148.543 67.2256 147.203 68.5657 147.203 70.2129V71.7605C147.203 73.4078 148.543 74.7479 150.19 74.7479C151.838 74.7479 153.177 73.4078 153.177 71.7605V70.2129C153.177 68.5657 151.838 67.2256 150.19 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip2_7352_4636)">
                                <path d="M156.777 78.6409C155.82 77.011 154.291 75.8026 152.472 75.2383C152.43 75.2252 152.384 75.2363 152.353 75.2674C151.506 76.1019 150.455 76.753 150.192 76.9103C149.911 76.7309 148.729 75.9603 148.026 75.2674C147.995 75.2363 147.949 75.2252 147.907 75.2383C146.087 75.8027 144.558 77.0111 143.602 78.641C143.58 78.6783 143.58 78.7247 143.602 78.762C144.96 81.0755 147.484 82.5127 150.189 82.5127C152.895 82.5127 155.419 81.0755 156.777 78.762C156.799 78.7245 156.799 78.6782 156.777 78.6409ZM154.252 79.5319C154.252 79.5978 154.189 79.6482 154.123 79.6482H153.314C153.248 79.6482 153.177 79.7049 153.177 79.7709V80.6075C153.177 80.6733 153.141 80.7236 153.075 80.7236H152.349C152.283 80.7236 152.221 80.6733 152.221 80.6075V79.7709C152.221 79.705 152.176 79.6482 152.11 79.6482H151.266C151.2 79.6482 151.145 79.5977 151.145 79.5319V78.8116C151.145 78.7457 151.2 78.6925 151.266 78.6925H152.11C152.176 78.6925 152.221 78.6387 152.221 78.5727V77.7351C152.221 77.6691 152.283 77.6172 152.349 77.6172H153.067C153.133 77.6172 153.176 77.6691 153.176 77.7351V78.5751C153.176 78.6411 153.24 78.6924 153.306 78.6924H154.123C154.189 78.6924 154.252 78.7481 154.252 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="188.406" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="188.406" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M188.408 67.2256C186.76 67.2256 185.421 68.5657 185.421 70.2129V71.7605C185.421 73.4078 186.76 74.7479 188.408 74.7479C190.055 74.7479 191.395 73.4078 191.395 71.7605V70.2129C191.395 68.5657 190.055 67.2256 188.408 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip3_7352_4636)">
                                <path d="M194.994 78.6409C194.037 77.011 192.509 75.8026 190.689 75.2383C190.647 75.2252 190.601 75.2363 190.57 75.2674C189.724 76.1019 188.672 76.753 188.409 76.9103C188.128 76.7309 186.946 75.9603 186.243 75.2674C186.212 75.2363 186.166 75.2252 186.124 75.2383C184.304 75.8027 182.776 77.0111 181.819 78.641C181.798 78.6783 181.798 78.7247 181.819 78.762C183.177 81.0755 185.701 82.5127 188.407 82.5127C191.112 82.5127 193.636 81.0755 194.994 78.762C195.016 78.7245 195.016 78.6782 194.994 78.6409ZM192.469 79.5319C192.469 79.5978 192.406 79.6482 192.341 79.6482H191.532C191.466 79.6482 191.394 79.7049 191.394 79.7709V80.6075C191.394 80.6733 191.359 80.7236 191.293 80.7236H190.566C190.5 80.7236 190.438 80.6733 190.438 80.6075V79.7709C190.438 79.705 190.393 79.6482 190.327 79.6482H189.483C189.417 79.6482 189.363 79.5977 189.363 79.5319V78.8116C189.363 78.7457 189.417 78.6925 189.483 78.6925H190.327C190.393 78.6925 190.438 78.6387 190.438 78.5727V77.7351C190.438 77.6691 190.5 77.6172 190.566 77.6172H191.285C191.35 77.6172 191.394 77.6691 191.394 77.7351V78.5751C191.394 78.6411 191.457 78.6924 191.523 78.6924H192.341C192.406 78.6924 192.469 78.7481 192.469 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="226.624" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="226.624" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M226.625 67.2256C224.978 67.2256 223.638 68.5657 223.638 70.2129V71.7605C223.638 73.4078 224.978 74.7479 226.625 74.7479C228.272 74.7479 229.612 73.4078 229.612 71.7605V70.2129C229.612 68.5657 228.272 67.2256 226.625 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip4_7352_4636)">
                                <path d="M233.211 78.6409C232.255 77.011 230.726 75.8026 228.906 75.2383C228.864 75.2252 228.819 75.2363 228.787 75.2674C227.941 76.1019 226.889 76.753 226.626 76.9103C226.346 76.7309 225.163 75.9603 224.46 75.2674C224.429 75.2363 224.383 75.2252 224.341 75.2383C222.521 75.8027 220.993 77.0111 220.037 78.641C220.015 78.6783 220.015 78.7247 220.037 78.762C221.394 81.0755 223.918 82.5127 226.624 82.5127C229.329 82.5127 231.854 81.0755 233.211 78.762C233.233 78.7245 233.233 78.6782 233.211 78.6409ZM230.686 79.5319C230.686 79.5978 230.624 79.6482 230.558 79.6482H229.749C229.683 79.6482 229.611 79.7049 229.611 79.7709V80.6075C229.611 80.6733 229.576 80.7236 229.51 80.7236H228.783C228.717 80.7236 228.655 80.6733 228.655 80.6075V79.7709C228.655 79.705 228.61 79.6482 228.544 79.6482H227.7C227.634 79.6482 227.58 79.5977 227.58 79.5319V78.8116C227.58 78.7457 227.634 78.6925 227.7 78.6925H228.544C228.61 78.6925 228.655 78.6387 228.655 78.5727V77.7351C228.655 77.6691 228.717 77.6172 228.783 77.6172H229.502C229.568 77.6172 229.611 77.6691 229.611 77.7351V78.5751C229.611 78.6411 229.675 78.6924 229.741 78.6924H230.558C230.624 78.6924 230.686 78.7481 230.686 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="264.841" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="264.841" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M264.842 67.2256C263.195 67.2256 261.855 68.5657 261.855 70.2129V71.7605C261.855 73.4078 263.195 74.7479 264.842 74.7479C266.489 74.7479 267.829 73.4078 267.829 71.7605V70.2129C267.829 68.5657 266.489 67.2256 264.842 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip5_7352_4636)">
                                <path d="M271.429 78.6409C270.472 77.011 268.943 75.8026 267.124 75.2383C267.082 75.2252 267.036 75.2363 267.005 75.2674C266.158 76.1019 265.106 76.753 264.843 76.9103C264.563 76.7309 263.381 75.9603 262.678 75.2674C262.646 75.2363 262.6 75.2252 262.558 75.2383C260.739 75.8027 259.21 77.0111 258.254 78.641C258.232 78.6783 258.232 78.7247 258.254 78.762C259.612 81.0755 262.136 82.5127 264.841 82.5127C267.547 82.5127 270.071 81.0755 271.429 78.762C271.451 78.7245 271.451 78.6782 271.429 78.6409ZM268.904 79.5319C268.904 79.5978 268.841 79.6482 268.775 79.6482H267.966C267.9 79.6482 267.828 79.7049 267.828 79.7709V80.6075C267.828 80.6733 267.793 80.7236 267.727 80.7236H267.001C266.935 80.7236 266.873 80.6733 266.873 80.6075V79.7709C266.872 79.705 266.827 79.6482 266.761 79.6482H265.918C265.852 79.6482 265.797 79.5977 265.797 79.5319V78.8116C265.797 78.7457 265.852 78.6925 265.918 78.6925H266.761C266.827 78.6925 266.872 78.6387 266.872 78.5727V77.7351C266.872 77.6691 266.934 77.6172 267 77.6172H267.719C267.785 77.6172 267.828 77.6691 267.828 77.7351V78.5751C267.828 78.6411 267.892 78.6924 267.958 78.6924H268.775C268.841 78.6924 268.904 78.7481 268.904 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <circle cx="325.989" cy="74.869" r="11.4652" fill="#EAEBFF" />
                            <ellipse cx="325.989" cy="74.8688" rx="9.55432" ry="9.55432" fill="#523EE5" />
                            <path d="M325.99 67.2256C324.343 67.2256 323.003 68.5657 323.003 70.2129V71.7605C323.003 73.4078 324.343 74.7479 325.99 74.7479C327.637 74.7479 328.977 73.4078 328.977 71.7605V70.2129C328.977 68.5657 327.637 67.2256 325.99 67.2256Z" fill="#EAEBFF" />
                            <g clip-path="url(#clip6_7352_4636)">
                                <path d="M332.576 78.6409C331.62 77.011 330.091 75.8026 328.271 75.2383C328.229 75.2252 328.184 75.2363 328.152 75.2674C327.306 76.1019 326.254 76.753 325.991 76.9103C325.71 76.7309 324.528 75.9603 323.825 75.2674C323.794 75.2363 323.748 75.2252 323.706 75.2383C321.886 75.8027 320.358 77.0111 319.402 78.641C319.38 78.6783 319.38 78.7247 319.402 78.762C320.759 81.0755 323.283 82.5127 325.989 82.5127C328.694 82.5127 331.218 81.0755 332.576 78.762C332.598 78.7245 332.598 78.6782 332.576 78.6409ZM330.051 79.5319C330.051 79.5978 329.989 79.6482 329.923 79.6482H329.114C329.048 79.6482 328.976 79.7049 328.976 79.7709V80.6075C328.976 80.6733 328.941 80.7236 328.875 80.7236H328.148C328.082 80.7236 328.02 80.6733 328.02 80.6075V79.7709C328.02 79.705 327.975 79.6482 327.909 79.6482H327.065C326.999 79.6482 326.945 79.5977 326.945 79.5319V78.8116C326.945 78.7457 326.999 78.6925 327.065 78.6925H327.909C327.975 78.6925 328.02 78.6387 328.02 78.5727V77.7351C328.02 77.6691 328.082 77.6172 328.148 77.6172H328.867C328.932 77.6172 328.976 77.6691 328.976 77.7351V78.5751C328.976 78.6411 329.04 78.6924 329.106 78.6924H329.923C329.989 78.6924 330.051 78.7481 330.051 78.8141V79.5319V79.5319Z" fill="#EAEBFF" />
                            </g>
                            <ellipse cx="74.0905" cy="143.661" rx="7.64345" ry="7.64345" fill="#EAEBFF" />
                            <circle cx="74.0905" cy="143.66" r="5.73259" fill="#523EE5" />
                            <ellipse cx="131.416" cy="143.661" rx="7.64345" ry="7.64345" fill="#EAEBFF" />
                            <circle cx="131.416" cy="143.66" r="5.73259" fill="#523EE5" />
                            <circle cx="188.742" cy="143.661" r="7.64345" fill="#EAEBFF" />
                            <circle cx="188.742" cy="143.66" r="5.73259" fill="#523EE5" />
                            <ellipse cx="245.591" cy="143.661" rx="7.64345" ry="7.64345" fill="#EAEBFF" />
                            <circle cx="245.591" cy="143.66" r="5.73259" fill="#523EE5" />
                            <circle cx="288.107" cy="143.661" r="7.64345" fill="#EAEBFF" />
                            <circle cx="288.107" cy="143.66" r="5.73259" fill="#523EE5" />
                            <circle cx="326.325" cy="143.661" r="7.64345" fill="#EAEBFF" />
                            <circle cx="326.325" cy="143.66" r="5.73259" fill="#523EE5" />
                            <circle cx="12.1293" cy="143.66" r="11.4652" fill="#DFFAF0" />
                            <circle cx="12.1293" cy="143.66" r="9.55432" fill="#24D18F" />
                            <g clip-path="url(#clip7_7352_4636)">
                                <path d="M11.9887 136.017C10.3415 136.017 9.00177 137.357 9.00177 139.004V140.552C9.00177 142.199 10.3415 143.539 11.9887 143.539C13.636 143.539 14.9756 142.199 14.9756 140.552V139.004C14.9756 137.357 13.636 136.017 11.9887 136.017Z" fill="white" fill-opacity="0.9" />
                                <path d="M18.575 147.432C17.6185 145.802 16.0897 144.594 14.2702 144.03C14.2281 144.017 14.1824 144.028 14.151 144.059C14.151 144.059 13.4268 145.333 11.9899 145.333C10.5531 145.333 9.82423 144.059 9.82423 144.059C9.79293 144.028 9.74694 144.017 9.705 144.03C7.88526 144.594 6.35658 145.803 5.40048 147.433C5.37859 147.47 5.37859 147.516 5.40048 147.553C6.75819 149.867 9.28223 151.304 11.9876 151.304C14.6931 151.304 17.2173 149.867 18.575 147.553C18.597 147.516 18.597 147.47 18.575 147.432Z" fill="white" fill-opacity="0.9" />
                            </g>
                            <defs>
                                <clipPath id="clip0_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(66.1112 67.2256)" />
                                </clipPath>
                                <clipPath id="clip1_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(104.328 67.2256)" />
                                </clipPath>
                                <clipPath id="clip2_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(142.546 67.2256)" />
                                </clipPath>
                                <clipPath id="clip3_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(180.763 67.2256)" />
                                </clipPath>
                                <clipPath id="clip4_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(218.98 67.2256)" />
                                </clipPath>
                                <clipPath id="clip5_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(257.198 67.2256)" />
                                </clipPath>
                                <clipPath id="clip6_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(318.345 67.2256)" />
                                </clipPath>
                                <clipPath id="clip7_7352_4636">
                                    <rect width="15.2869" height="15.2869" fill="white" transform="translate(4.34402 136.017)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="how-mobile__leave">
                <div class="how-mobile__leave__title">
                    Leave the heavy lifting to us
                </div>
                <div class="how-mobile__leave__text">
                    We built a platform that makes data understandable. By providing data-science as a service
                    (DSaaS), with an intuitive interface, we enable users with no technical knowledge to dive into
                    their data and find critical insights. 
                </div>
                <a href="/" class="btn btn_blue">Let us show you</a>
            </div>
        </div>
    </section>
    <?php if (have_rows('features_items')) : ?>
        <section class="features">
            <div class="wrap">
                <h2 class="title"><?php the_field('features_title'); ?></h2>
                <div class="features__items">
                    <?php
                    while (have_rows('features_items')) :
                        the_row();
                        $features_item = get_sub_field('features_item');
                    ?>
                        <div class="features__item">
                            <div class="features__img">
                                <img src="<?php echo $features_item['features_item_image']; ?>" alt="">

                            </div>
                            <h4 class="title">
                                <?php echo $features_item['features_item_title']; ?>
                            </h4>
                            <h5 class="text">
                                <?php echo $features_item['features_item_text']; ?>
                            </h5>
                        </div>
                    <?php
                    endwhile; ?>
                </div>
                <a href="/" class="btn btn_blue">
                    Let’s Get Started
                </a>
            </div>
        </section>
    <?php endif; ?>
    <?php if (have_rows('benefits_items')) : ?>
        <section class="benefits">
            <div class="wrap">
                <h2 class="title">Benefits</h2>
                <div class="benefits__items">
                    <?php
                    while (have_rows('benefits_items')) :
                        the_row();
                        $benefits_item = get_sub_field('venefits_item');
                    ?>
                        <div class="benefits__item">
                            <img src="<?php echo $benefits_item['benefits_item_image']; ?>" alt="">

                            <h4 class="title">
                                <?php echo $benefits_item['benefits_item_title']; ?>
                            </h4>
                            <h5 class="text">
                                <?php echo $benefits_item['benefits_item_text']; ?>
                            </h5>
                        </div>
                    <?php
                    endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('who_items')) : ?>
        <section class="who">
            <div class="wrap">
                <h2 class="title"><?php the_field('who_title'); ?></h2>
                <div class="who__items">

                    <?php
                    while (have_rows('who_items')) :
                        the_row();
                        $who_item = get_sub_field('who_item');
                    ?>
                        <div class="who__item">
                            <div class="who__descr">
                                <?php echo $who_item['who_item_text']; ?>
                            </div>
                            <img src="<?php echo $who_item['who_item_image']; ?>" alt="">
                        </div>
                    <?php
                    endwhile; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <section class="learn">
        <div class="wrap">
            <h3 class="title">
                <?php the_field('learn_title'); ?>
            </h3>
            <a href="/" class="btn btn_blue modal-open">
                Learn More
            </a>
        </div>
    </section>
</main>

<?php get_footer();
