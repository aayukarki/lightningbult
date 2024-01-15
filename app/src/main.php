<header class="position-fixed bg-white w-100 py-1_5 z-2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-auto col-7">
                <a href="./"><?= renderImg("logo.png", "logo", "", "eager") ?></a>
            </div>
            <div class="col-auto">
                <div class="socials d-none d-md-flex gap-1">
                    <a href="https://www.facebook.com/lightningbult" target="_blank" class="text-tertiary"><?= $facebook_icon ?></a>
                    <a href="https://www.instagram.com/lightning_bult_/" target="_blank" class="text-tertiary"><?= $insta_icon ?></a>
                    <a href="https://www.linkedin.com/company/lightning-bult-electrical-and-plumbing-pty-ltd/" target="_blank" class="text-tertiary"><?= $linkedin_icon ?></a>
                </div>
            </div>
            <div class="col-auto d-none d-md-block">
                <div class="row gx-0_5">
                    <div class="col-auto">
                        <a href="tel:<?= $phone_number ?>" class="btn btn-outline-tertiary fw-500 rounded-pill py-0_75 px-1"><?= $phone_number ?></span></a>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <a href="#form" class="btn btn-outline-tertiary fw-500 rounded-pill py-0_75 px-1">Enquire Now</a>
                    </div>
                </div>
            </div>
            <div class="col-auto d-block d-md-none">
                <a href="tel:<?= $phone_number ?>">
                    <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="15.5" cy="15.5" r="15" transform="matrix(1 0 0 -1 0 31)" stroke="#0D1228" />
                        <path d="M18.77 22.674C12.83 22.674 8 17.834 8 11.904C8 11.214 8.07 10.504 8.21 9.81405C8.35 9.10405 8.94 8.53405 9.66 8.40405L11.75 8.01405C12.16 7.93405 12.56 8.20405 12.65 8.61405L13.58 12.744C13.66 13.124 13.46 13.504 13.11 13.644L12.49 13.884C12.41 13.914 12.36 14.014 12.39 14.094C13.07 16.074 14.62 17.614 16.61 18.284C16.69 18.314 16.78 18.274 16.82 18.194L17.24 17.324C17.4 16.994 17.76 16.824 18.12 16.904L22.15 17.824C22.56 17.914 22.83 18.324 22.74 18.734L22.28 21.034C22.14 21.754 21.58 22.314 20.87 22.464C20.17 22.604 19.47 22.674 18.77 22.674Z" fill="#0D1228" />
                    </svg>
                </a>
            </div>
            <div class="col-auto d-none">
                <button class="navbar-toggler collapsed border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
        </div>
    </div>
</header>
<div class="py-3"></div>

<section class="banner">
    <div class="container">
        <div class="banner-content position-relative overflow-hidden rounded-20 rounded-md-40 bg-primary p-1_75 py-lg-1 px-lg-3">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-4">
                    <h1 class="fs-35 fs-md-48 fs-xl-60 fw-500 lh-1 mb-1_25 mb-md-1_75"><span class="fw-300">Smart Heating, Cool Savings,</span> Happy Planet.</h1>
                    <p class="fs-18 fs-md-20 fw-300 mb-1_75">Save money, and help the planet with an environmentally friendly heat pump!</p>
                    <div class="row align-items-center justify-content-between gx-0 bg-white rounded-pill p-0_25 mb-3">
                        <div class="col">
                            <p class="fs-16 fs-md-20 fw-600 px-1 lh-1">100% FREE for business</p>
                        </div>
                        <div class="col-auto">
                            <a href="#form" class="btn btn-secondary fs-14 fs-md-16 rounded-pill fw-500 py-0_75 px-1">Enquire Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="row align-items-center gx-0">
                        <div class="col">
                            <div class="position-relative mt-n2 mt-md-0 mb-n6 mb-md-0 ms-n3 ms-md-n7 ms-xl-n2 me-md-n2 me-xl-n3"><?= renderImg("banner-img1.png", "lib", "", "eager") ?></div>
                        </div>
                        <div class="col-xl-auto col d-none d-md-block">
                            <?= renderImg("banner-img2.png", "lib", "", "eager") ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-absolute start-0 bottom-0 mb-2_5 mb-lg-0 mb-xl-6 w-100">
                <div class="rebate-slider bg-secondary py-1 text-white">
                    <div class="px-0_75">GOVERNMENT REBATE AVAILABLE</div>
                    <div class="px-0_75"><?= $bult ?></div>
                    <div class="px-0_75">GOVERNMENT REBATE AVAILABLE</div>
                    <div class="px-0_75"><?= $bult ?></div>
                    <div class="px-0_75">GOVERNMENT REBATE AVAILABLE</div>
                    <div class="px-0_75"><?= $bult ?></div>
                    <div class="px-0_75">GOVERNMENT REBATE AVAILABLE</div>
                    <div class="px-0_75"><?= $bult ?></div>
                </div>
            </div>
        </div>
        <div class="banner-mobile-slider mt-2 d-block d-md-none">
            <div><?= renderImg("banner-mobile-img1.png", "lib", "w-100", "eager") ?></div>
            <div><?= renderImg("banner-mobile-img2.png", "lib", "w-100", "eager") ?></div>
            <div><?= renderImg("banner-mobile-img3.png", "lib", "w-100", "eager") ?></div>
            <div><?= renderImg("banner-mobile-img4.png", "lib", "w-100", "eager") ?></div>
        </div>
    </div>
</section>



<section class="py-3 py-md-5 py-xl-6">
    <div class="container">
        <p class="fs-28 fs-md-45 lh-1 fw-300 text-center mb-3">We Supply, Install, Service, and Repair the following <span class="fw-500">Brands</span></p>
    </div>
    <div class="brands-slider">
        <?php
        foreach (range(1, 12) as $n) { ?>
            <div class="mx-1 mx-md-2_25"><?= renderImg("brand-img$n.png", "lib") ?></div>
        <?php } ?>
    </div>
</section>

<section class="pb-4 pb-md-5">
    <div class="container">
        <div class="row align-items-center gy-2">
            <div class="col-lg-6 order-2 order-lg-1"><?= renderImg("heat-pumps.png", "lib") ?></div>
            <div class="col-lg-6 order-1 order-lg-2">
                <p class="fs-33 fs-md-55 fw-300 lh-1 mb-1_75">What are the benefits of <span class="fw-500">Heat Pumps?</span></p>
                <div class="fs-16 fs-md-18 fw-300 mb-lg-7">
                    <p>When it comes to efficient and environmentally friendly heating and cooling solutions, heat pumps are a standout choice. Whether you're considering one for your home or business, understanding the numerous benefits they offer can help you make an informed decision.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="features-slider position-relative mt-n2 mt-md-n4">
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M39.5349 19.2105L35.3107 14.2315L40.2897 10" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.6952 14.3694C46.6985 15.4799 54.8348 25.2203 53.9276 36.2961C53.7171 38.8582 53.0421 41.2752 51.9896 43.4671" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.3541 37.2324L15.1476 43.3873L9 41.1881" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.0749 42.9807C10.5386 32.8847 14.8934 20.9742 24.9386 16.2201C27.2612 15.1169 29.6927 14.4999 32.1096 14.3185" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M44.042 47.4446L50.4654 46.276L51.634 52.7067" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M50.1533 46.5446C43.6863 55.5228 31.1951 57.7075 22.0572 51.3785C19.9451 49.9123 18.1886 48.1196 16.8241 46.1163" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.9879 36.8041V48.4171L43.1493 33.1751H34.4395V20.8363L24.2782 36.0783H32.9879V36.8041Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Energy Efficiency</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps are renowned for their exceptional energy efficiency. They can provide up to 300% to 600% more heating or cooling energy than the electricity they consume. This means they can keep your indoor environment comfortable while significantly reducing your energy bills.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M34.5087 16.2998L35.3948 13" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M40.8969 18.0126L41.783 14.7128" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M31.7642 18.8722L31.4204 20.1485C30.6665 22.9722 32.3395 25.8686 35.1633 26.6291C37.987 27.383 40.8834 25.7099 41.6439 22.8862L41.9878 21.6099" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M38.7937 20.7569L31.7642 18.8722C31.4137 18.7796 31.2021 18.4159 31.2947 18.0654L31.6386 16.7891C31.7312 16.4386 32.0949 16.227 32.4453 16.3196L42.6623 19.0573C43.0128 19.1499 43.2244 19.5136 43.1318 19.8641L42.7879 21.1404C42.6953 21.4909 42.3316 21.7025 41.9812 21.6099L41.3397 21.438" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.6373 34.6243C33.1134 33.8439 33.2258 33.0636 33.2258 32.3031C33.2258 30.1804 31.7842 27.9915 29.9987 27.0062C25.826 24.7115 21.1903 28.1767 21.3292 28.1965C24.2323 28.6528 23.5776 32.4751 26.3881 34.3994C28.0215 35.517 29.2647 35.4707 29.926 35.4707" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.9354 29.5256C31.7907 31.4235 33.2257 34.816 33.1861 38.1224L33.2257 40.1129" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.871 35.4773C35.871 35.4773 35.8974 34.7499 36.0958 34.1878C36.6447 32.6271 38.331 31.3773 39.9842 31.0996C43.8395 30.4515 46.564 34.1613 46.4516 34.1415C44.0644 33.7513 43.5948 36.7271 40.9034 37.4347C39.3361 37.8513 38.3773 37.5075 37.8615 37.3421" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33.2258 39.445C33.8871 36.1385 37.1936 34.1547 40.5 34.1547" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20 40.1129L21.6598 51.7318C21.845 53.0345 22.9626 54 24.2785 54H42.1731C43.489 54 44.6066 53.0345 44.7918 51.7318L46.4516 40.1129H20Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.1634 26.6293C35.1634 26.6293 33.2258 33.4075 33.2258 38.1225" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Environmental Friendliness</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps are eco-friendly heating and cooling systems. They produce minimal direct emissions and reduce your carbon footprint, making them a responsible choice for those concerned about the environment and climate change.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M33.0001 14V54" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M28.8622 20.2069L33.0001 24.3448" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M28.8622 47.7931L33.0001 43.6552" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30.2415 16.069L33.0001 18.8276" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M30.2415 51.931L33.0001 49.1724" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33.0001 34L18.8552 48.1448" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M20.3243 40.8275H26.1795V46.6827" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.3726 44.7311H22.276V48.6345" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33.0001 34H13.0001" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.207 29.8621L23.345 34L19.207 38.1379" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M15.0691 31.2413L17.8277 34L15.0691 36.7586" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33.0001 34.0001L18.8552 19.8552" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M26.1726 21.3242V27.1794H20.3174" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M22.269 19.3724V23.2759H18.3656" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.7587 14V16.7586" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.7585 51.2413V54" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M45.7586 16.6827L44.3793 19.0689" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M53.0758 24L50.6896 25.3793" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M55.7586 34H53" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M53.0758 44L50.6896 42.6207" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M45.7586 51.3171L44.3793 48.9309" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35.7585 19.5172C43.7585 19.5172 50.2413 26 50.2413 34C50.2413 42 43.7585 48.4827 35.7585 48.4827" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Versatility</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps are versatile systems that can both heat and cool your space. They work efficiently in all seasons, providing consistent comfort year-round. This versatility means you don't need separate heating and cooling systems, saving you money and space.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M19 35.5484H45.3226C48.44 35.5484 51 32.9884 51 29.871C51 26.7536 48.44 24.1936 45.3226 24.1936C42.2052 24.1936 39.6452 26.7536 39.6452 29.871M42.7419 29.871C42.7419 28.4259 43.8774 27.2904 45.3226 27.2904C46.7677 27.2904 47.9032 28.4259 47.9032 29.871C47.9032 31.3162 46.7677 32.4517 45.3226 32.4517H19" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 41.7419H37.5806C39.0258 41.7419 40.1613 42.8774 40.1613 44.3226C40.1613 45.7677 39.0258 46.9032 37.5806 46.9032C36.1355 46.9032 35 45.7677 35 44.3226M31.9032 44.3226C31.9032 47.44 34.4632 50 37.5806 50C40.6981 50 43.2581 47.44 43.2581 44.3226C43.2581 41.2051 40.6981 38.6451 37.5806 38.6451H19" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19 29.3548H32.4194C35.5368 29.3548 38.0968 26.7948 38.0968 23.6774C38.0968 20.56 35.5368 18 32.4194 18C29.3019 18 26.7419 20.56 26.7419 23.6774M29.8387 23.6774C29.8387 22.2323 30.9742 21.0968 32.4194 21.0968C33.8645 21.0968 35 22.2323 35 23.6774C35 25.1226 33.8645 26.2581 32.4194 26.2581H19" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Improved Indoor Air Quality</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps don't rely on combustion to generate heat, which means they don't produce indoor air pollutants or emit harmful gases. This leads to better indoor air quality and a healthier living or working environment.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M33.9516 15C31.9703 15 30.371 16.5994 30.371 18.5806V36.1079C27.4587 37.4865 25.6028 40.4226 25.5968 43.6452C25.5968 48.2582 29.3386 52 33.9516 52C38.5647 52 42.3065 48.2582 42.3065 43.6452C42.3065 40.4226 40.4445 37.4865 37.5323 36.1079V18.5806C37.5323 16.5994 35.9329 15 33.9516 15Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33.9516 29.3226C33.2892 29.3226 32.758 29.8538 32.758 30.5162V38.4175C30.3172 38.9725 28.5866 41.1447 28.5806 43.6452C28.5806 46.6112 30.9856 49.0162 33.9516 49.0162C36.9176 49.0162 39.3226 46.6112 39.3226 43.6452C39.3226 41.1388 37.586 38.9725 35.1451 38.4115V30.5162C35.1451 29.8538 34.614 29.3226 33.9516 29.3226Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25 26.9354H27.9839" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25 31.7097H27.9839" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25 22.1613H27.9839" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Consistent Comfort</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps distribute heat or cool air evenly throughout your space, eliminating hot or cold spots. This ensures a consistent and comfortable indoor climate, no matter the weather outside.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M34 36C35.1046 36 36 35.1046 36 34C36 32.8954 35.1046 32 34 32C32.8954 32 32 32.8954 32 34C32 35.1046 32.8954 36 34 36Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M33 35L29 38.9924C29 38.9924 29 38.9924 29 39L33 35.0076C33 35.0076 33 35.0076 32.9924 35H33Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M34 32V25.0033C34 25.0033 34 24.9959 34 25.0033V32V32Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M34 18.8731C34 18.8731 33.9634 18.8585 33.9634 18.8365V15.0365C33.9634 15.0365 33.978 15 34 15C34.0219 15 34.0365 15.0146 34.0365 15.0365V18.8292C34.0365 18.8292 34.0219 18.8658 34 18.8658V18.8731Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M34 52.9999C34 52.9999 33.9634 52.9853 33.9634 52.9634V49.1707C33.9634 49.1707 33.978 49.1342 34 49.1342C34.0219 49.1342 34.0365 49.1488 34.0365 49.1707V52.9634C34.0365 52.9634 34.0219 52.9999 34 52.9999Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.8292 34.0365H15.0365C15.0365 34.0365 15 34.0218 15 33.9999C15 33.978 15.0146 33.9634 15.0365 33.9634H18.8292C18.8292 33.9634 18.8658 33.978 18.8658 33.9999C18.8658 34.0218 18.8512 34.0365 18.8292 34.0365Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M52.9634 34.0365H49.1707C49.1707 34.0365 49.1342 34.0218 49.1342 33.9999C49.1342 33.978 49.1488 33.9634 49.1707 33.9634H52.9634C52.9634 33.9634 53 33.978 53 33.9999C53 34.0218 52.9854 34.0365 52.9634 34.0365Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25.4646 19.2603C25.4646 19.2603 25.4354 19.2603 25.4281 19.2384L24.4781 17.5942C24.4781 17.5942 24.4781 17.5503 24.4927 17.543C24.5073 17.5284 24.5365 17.543 24.5438 17.5577L25.4938 19.2019C25.4938 19.2019 25.4938 19.2457 25.4792 19.253C25.4792 19.253 25.4646 19.253 25.4573 19.253L25.4646 19.2603Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M43.4782 50.4569C43.4782 50.4569 43.4489 50.4569 43.4416 50.435L42.4916 48.7907C42.4916 48.7907 42.4916 48.7469 42.5062 48.7396C42.5209 48.725 42.5501 48.7396 42.5574 48.7542L43.5074 50.3984C43.5074 50.3984 43.5074 50.4423 43.4928 50.4496C43.4928 50.4496 43.4782 50.4496 43.4709 50.4496L43.4782 50.4569Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M17.5796 43.5219C17.5796 43.5219 17.5504 43.5219 17.5431 43.4999C17.5358 43.478 17.5431 43.4561 17.5577 43.4488L19.2019 42.4988C19.2019 42.4988 19.2458 42.4988 19.2531 42.5134C19.2604 42.528 19.2531 42.5572 19.2385 42.5645L17.5942 43.5145C17.5942 43.5145 17.5796 43.5145 17.5723 43.5145L17.5796 43.5219Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M48.7761 25.5084C48.7761 25.5084 48.7469 25.5084 48.7396 25.4865C48.7323 25.4646 48.7396 25.4427 48.7542 25.4354L50.3984 24.4854C50.3984 24.4854 50.4423 24.4854 50.4496 24.5C50.4569 24.5146 50.4496 24.5438 50.435 24.5511L48.7907 25.5011C48.7907 25.5011 48.7761 25.5011 48.7688 25.5011L48.7761 25.5084Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M19.2239 25.5084C19.2239 25.5084 19.2093 25.5084 19.202 25.5084L17.5577 24.5584C17.5577 24.5584 17.5358 24.5218 17.5431 24.5072C17.5504 24.4853 17.5797 24.478 17.5943 24.4926L19.2385 25.4426C19.2385 25.4426 19.2604 25.4791 19.2531 25.4937C19.2531 25.5084 19.2312 25.5157 19.2166 25.5157L19.2239 25.5084Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M50.4204 43.5219C50.4204 43.5219 50.4058 43.5219 50.3985 43.5219L48.7542 42.5719C48.7542 42.5719 48.7323 42.5354 48.7396 42.5208C48.7469 42.4988 48.7762 42.4915 48.7908 42.5061L50.435 43.4561C50.435 43.4561 50.4569 43.4927 50.4496 43.5073C50.4496 43.5219 50.4277 43.5292 50.4131 43.5292L50.4204 43.5219Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M24.522 50.4569C24.522 50.4569 24.5074 50.4569 24.5001 50.4569C24.4782 50.4496 24.4782 50.4203 24.4855 50.4057L25.4355 48.7615C25.4355 48.7615 25.472 48.7323 25.4866 48.7469C25.5085 48.7542 25.5085 48.7834 25.5012 48.798L24.5512 50.4423C24.5512 50.4423 24.5293 50.4642 24.5147 50.4642L24.522 50.4569Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M42.5354 19.2604C42.5354 19.2604 42.5208 19.2604 42.5135 19.2604C42.4915 19.2531 42.4915 19.2239 42.4988 19.2093L43.4489 17.5651C43.4489 17.5651 43.4854 17.5431 43.5 17.5504C43.5219 17.5577 43.5219 17.587 43.5146 17.6016L42.5646 19.2458C42.5646 19.2458 42.5427 19.2677 42.5281 19.2677L42.5354 19.2604Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Long Lifespan</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps are known for their durability and long lifespan. With proper maintenance, they can last for 15 to 20 years or more, providing reliable performance over the long term.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M44 49H24C23.4477 49 23 49.4477 23 50V52C23 52.5523 23.4477 53 24 53H44C44.5523 53 45 52.5523 45 52V50C45 49.4477 44.5523 49 44 49Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M45 45H25C24.4477 45 24 45.4477 24 46V48C24 48.5523 24.4477 49 25 49H45C45.5523 49 46 48.5523 46 48V46C46 45.4477 45.5523 45 45 45Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M43 41H23C22.4477 41 22 41.4477 22 42V44C22 44.5523 22.4477 45 23 45H43C43.5523 45 44 44.5523 44 44V42C44 41.4477 43.5523 41 43 41Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M44 37H24C23.4477 37 23 37.4477 23 38V40C23 40.5523 23.4477 41 24 41H44C44.5523 41 45 40.5523 45 40V38C45 37.4477 44.5523 37 44 37Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M43 26C43 32.07 38.08 37 32 37C25.92 37 21 32.07 21 26C21 19.93 25.93 15 32 15C38.07 15 43 19.93 43 26Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M35 22C35 22 34 21 32 21C29.79 21 29 21.9 29 23C29 24 30.07 24.67 32 25C33.95 25.34 36 26 36 28C36 29.66 34.21 31 32 31C29.79 31 28 29.66 28 28" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32 19V21" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32 31V33" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Cost Savings</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Due to their energy efficiency, heat pumps can result in significant cost savings on your energy bills. Over time, the savings can offset the initial investment in the system.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M40.3548 53C46.7863 53 52 47.7863 52 41.3549C52 34.9234 46.7863 29.7097 40.3548 29.7097C33.9234 29.7097 28.7097 34.9234 28.7097 41.3549C28.7097 47.7863 33.9234 53 40.3548 53Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M40.3549 50.5484C45.4323 50.5484 49.5484 46.4323 49.5484 41.3548C49.5484 36.2773 45.4323 32.1613 40.3549 32.1613C35.2774 32.1613 31.1613 36.2773 31.1613 41.3548C31.1613 46.4323 35.2774 50.5484 40.3549 50.5484Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M42.1935 38.9032C42.1935 38.9032 41.5806 38.2903 40.3548 38.2903C39.0003 38.2903 38.5161 38.8419 38.5161 39.5161C38.5161 40.129 39.1719 40.5396 40.3548 40.7419C41.55 40.9503 42.8064 41.3548 42.8064 42.5806C42.8064 43.598 41.7093 44.4193 40.3548 44.4193C39.0003 44.4193 37.9032 43.598 37.9032 42.5806" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M40.3549 37.0646V38.2904" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M40.3549 44.4193V45.6451" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M21.3548 28.4839V38.2903L29.9355 25.4194H22.5806V15L14 27.871H21.3548V28.4839Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.4839 47.4839H22.5807C21.9065 47.4839 21.3549 46.9323 21.3549 46.2581V40.7419" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M25.0323 49.9355L27.4839 47.4838L25.0323 45.0322" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.3871 25.4193H39.129C39.8032 25.4193 40.3548 25.9709 40.3548 26.6451V27.258" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M34.8387 22.9678L32.3871 25.4194L34.8387 27.871" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Government Incentives</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Many governments and local authorities offer incentives, tax credits, and rebates to encourage the adoption of heat pumps. Taking advantage of these programs can make the upfront cost more affordable.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M43.6773 51.5797C44.8676 52.6378 46.8912 52.8692 48.4915 52.4857C50.4754 52.0095 51.8442 50.3497 52.3204 48.3526C52.7833 46.4349 52.8758 43.9154 52.0162 42.0968C50.6936 44.742 46.0645 43.4194 44.0145 45.562C42.6457 46.997 42.7581 48.7097 42.7581 48.7097" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M23.3228 15.4202C22.1325 14.3622 20.1089 14.1307 18.5086 14.5143C16.5247 14.9904 15.1559 16.6502 14.6797 18.6473C14.2168 20.5651 14.1242 23.0846 14.9839 24.9031C16.3065 22.258 20.9355 23.5806 22.9855 21.438C24.3544 20.003 24.242 18.2902 24.242 18.2902" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M48.0153 47.9757C44.3055 51.6988 39.1673 54.0001 33.5 54.0001C22.1787 54.0001 13 44.8214 13 33.5001C13 31.4435 13.3042 29.4596 13.8663 27.5815" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M18.978 19.0244C22.6945 15.3013 27.8261 13 33.5 13C44.8213 13 54 22.1787 54 33.5C54 35.5566 53.6958 37.5405 53.1337 39.4185" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M32.8387 35.4838V46.0645L42.0967 32.1774H34.1613V20.9354L24.9032 34.8225H32.8387V35.4838Z" stroke="#C6D6E6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Reduced Fossil Fuel Dependency</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>By using electricity to operate, heat pumps reduce the need for fossil fuels like natural gas or oil for heating, contributing to energy security and reducing greenhouse gas emissions.</p>
                </div>
            </div>
        </div>
        <div class="px-0_5">
            <div class="bg-tertiary text-white rounded-40 p-1_75 p-md-2_5 h-100">
                <div class="icon mb-3 mb-md-4">
                    <svg width="67" height="67" viewBox="0 0 67 67" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="33.5" cy="33.5" r="32.75" stroke="#C6D6E6" stroke-width="1.5" />
                        <path d="M46.9831 27.3932C46.6436 27.0537 46.0961 27.0537 45.7566 27.3932C45.4171 27.7327 45.4171 28.2802 45.7566 28.6197C47.1009 29.964 47.8423 31.7517 47.8423 33.6538C47.8423 35.5559 47.1009 37.3437 45.7566 38.688C45.4171 39.0275 45.4171 39.5749 45.7566 39.9145C45.9264 40.0842 46.1481 40.1674 46.3698 40.1674C46.5916 40.1674 46.8133 40.0842 46.9831 39.9145C48.6565 38.241 49.5747 36.0202 49.5747 33.6538C49.5747 31.2875 48.6531 29.0666 46.9831 27.3932Z" fill="#C6D6E6" />
                        <path d="M40.5666 15C40.0538 15 39.5306 15.2217 39.0109 15.6583L28.2913 24.6387H20.2914C18.4759 24.6387 17 26.1146 17 27.9301V39.7099C17 41.5254 18.4759 43.0013 20.2914 43.0013H28.2913L39.0109 51.9817C39.5306 52.4183 40.0538 52.64 40.5666 52.64C41.4258 52.64 42.292 51.9644 42.292 50.4503V17.1897C42.292 15.6791 41.4258 15 40.5666 15ZM18.7323 39.7099V27.9301C18.7323 27.0709 19.4322 26.371 20.2914 26.371H27.7404V41.269H20.2914C19.4322 41.269 18.7323 40.5691 18.7323 39.7099ZM40.5596 50.4503C40.5596 50.6825 40.525 50.8176 40.4973 50.8903C40.4245 50.8661 40.2998 50.8037 40.1231 50.6548L29.4728 41.7298V25.9067L40.1231 16.9818C40.3033 16.8328 40.428 16.7704 40.4973 16.7462C40.525 16.8155 40.5596 16.9506 40.5596 17.1862V50.4469V50.4503Z" fill="#C6D6E6" />
                    </svg>
                </div>
                <p class="fs-16 fs-md-24 fw-500 lh-1 mb-1_25 mb-md-2_5">Quiet Operation</p>
                <div class="fs-10 fs-md-16 fw-300">
                    <p>Heat pumps are known for their quiet operation. Unlike noisy traditional HVAC systems, they operate quietly, ensuring a peaceful and comfortable indoor environment.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center gap-1 mt-3">
        <div class="prev-arrow"><?= $rightarrow_icon ?></div>
        <div class="next-arrow"><?= $leftarrow_icon ?></div>
    </div>
</section>
<section class="services position-relative overflow-hidden bg-tertiary text-white py-3 py-md-5 py-xl-7 z-1">
    <div class="container">
        <p class="fs-30 fs-md-55 fw-300 lh-1 text-center mb-3">Our <span class="fw-500">Services</span></p>
        <div class="d-flex flex-column gap-1_25">
            <div class="bg-tertiary border rounded-40 p-1_25 p-md-1_5">
                <div class="row align-items-xl-center justify-content-between gy-2">
                    <div class="col-xl-6 col-lg-7 order-2 order-lg-1">
                        <p class="fs-24 fs-md-35 fw-300 lh-1 mb-1_75 mb-md-2_5"><span class="fw-500">Residential</span> Heat Pumps</p>
                        <div class="fs-16 fs-md-18 fw-300 mb-1_75 mb-md-2">
                            <p>Discover the advantages of heat pump water heaters, a popular and efficient solution for meeting your water heating needs. These systems are highly energy-efficient, providing savings of up to 75% compared to conventional electric water heaters.</p>
                            <p>Take advantage of the cost-effectiveness of heat pump hot water systems, made even more affordable with government hot water rebates in NSW. These rebates, part of the renewable energy certificate program, make heat pumps a financially savvy choice. Traditional hot water systems, with installation costs ranging from $3,000 to $4,000, not only incur higher upfront expenses but also lead to increased operational costs over time.</p>
                            <p>For a complimentary consultation on selecting the ideal heat pump to meet your residential or business water heating requirements, contact us. Our professional services extend across NSW, ensuring access to efficient and cost-effective solutions.</p>
                        </div>
                        <div class="row gx-0_5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1"><?= $phone_number ?></span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#form" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="rounded-20 overflow-hidden h-100"><?= renderImg("residential-heat-pumps.jpg", "lib", "w-100 h-100 object-fit-cover") ?></div>
                    </div>
                </div>
            </div>
            <div class="bg-tertiary border rounded-40 p-1_25 p-md-1_5">
                <div class="row align-items-xl-center justify-content-between gy-2">
                    <div class="col-xl-6 col-lg-7 order-2 order-lg-1">
                        <p class="fs-24 fs-md-35 fw-300 lh-1 mb-1_75 mb-md-2_5"><span class="fw-500">Commercial</span> Heat Pumps</p>
                        <div class="fs-16 fs-md-18 fw-300 mb-1_75 mb-md-2">
                            <p>Secure a generously subsidised energy-efficient heat pump via the NSW Energy Savings Scheme. Take action against escalating electricity costs today!</p>
                            <p>Revolutionise your commercial water heating in Sydney with our advanced commercial hot water heat pumps. Designed for businesses seeking energy-efficient solutions, our systems deliver cost savings and environmental benefits. Benefit from government incentives, customized installations, and expert support for reliable and uninterrupted hot water supply.</p>
                            <p>Upgrade your commercial water heating with our professional services, ensuring efficiency, sustainability, and optimal performance for your business in Sydney.</p>
                        </div>
                        <div class="row gx-0_5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1"><?= $phone_number ?></span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#form" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="rounded-20 overflow-hidden h-100"><?= renderImg("commercial-heat-pumps.jpg", "lib", "w-100 h-100 object-fit-cover") ?></div>
                    </div>
                </div>
            </div>
            <div class="bg-tertiary border rounded-40 p-1_25 p-md-1_5">
                <div class="row align-items-xl-center justify-content-between gy-2">
                    <div class="col-xl-6 col-lg-7 order-2 order-lg-1">
                        <p class="fs-24 fs-md-35 fw-300 lh-1 mb-1_75 mb-md-2_5"><span class="fw-500">Swimming Pool</span> Heat Pumps</p>
                        <div class="fs-16 fs-md-18 fw-300 mb-1_75 mb-md-2">
                            <p>Swimming pool heat pumps are basically a reversed cycle of an air conditioner, refrigerant R32 is the working fluid in our heat pumps, initially the fluid is liquid, refrigerant absorbs energy from the ambient air through the evaporator causing it to evaporate which leaves the R32 in the gas state.</p>
                            <p>After that the gas refrigerant escapes to the compressor in which it’s heat and pressure are raised to the highest in it’s cycle, then it flows to the condenser, which operates as a heat exchanger, the heat of the refrigerant is exchanged with the low temperatures of the water in the pool system, causing the refrigerant to turn into liquid and heating the pool water.</p>
                            <p>Finally, the liquid refrigerant goes back to the initial point which is the evaporator to repeat the cycle again for pool heating.</p>
                        </div>
                        <div class="row gx-0_5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1"><?= $phone_number ?></span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#form" class="btn btn-outline-white fw-500 rounded-pill py-0_75 px-1">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-1 order-lg-2">
                        <div class="rounded-20 overflow-hidden h-100"><?= renderImg("swimming-pool-heat-pumps.jpg", "lib", "w-100 h-100 object-fit-cover") ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-absolute start-0 top-0 z-n1 mt-n10 ms-n1 d-none d-md-block">
        <?= renderImg("bolt.png", "lib", " ", "eager") ?>
    </div>
    <div class="position-absolute end-0 bottom-0 z-n1 mb-n16 me-n3 d-none d-md-block">
        <?= renderImg("bolt.png", "lib", " ", "eager") ?>
    </div>
</section>

<section class="py-3 py-md-5 py-xl-9">
    <div class="container">
        <div class="bg-primary rounded-40 position-relative overflow-hidden">
            <div class="row">
                <div class="col-lg-6">
                    <div class="h-100"><?= renderImg("ess.jpg", "lib", "w-100 h-100 object-fit-cover") ?></div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="py-2_5 py-md-7 px-1_25 px-md-2_5 position-relative">
                        <p class="fs-28 fs-md-35 fs-xl-45 fw-300 lh-1 mb-1 mb-md-2_5">New South Wales <span class="fw-500">Energy Savings Scheme (ESS)</span></p>
                        <div class="fs-18 fw-300 mb-2_5">
                            <p>ESS is a Government initiative to offer financial incentives to New South Wales households and businesses to encourage the installation, improvement, and replacement of energy-saving devices and appliances.</p>
                            <p><strong>This lets you upgrade to an energy-saving hot water system for just $33.</strong> You will save hundreds of dollars on your electricity bills with reduced operational costs of the hot water systems.</p>
                            <p>You can relish up to 80% lower running costs with the installation of these energy-efficient hot water systems.</p>
                        </div>
                        <div class="row gx-0_5">
                            <div class="col-auto">
                                <a href="tel:<?= $phone_number ?>" class="btn btn-outline-tertiary fw-500 rounded-pill py-0_75 px-1"><?= $phone_number ?></span></a>
                            </div>
                            <div class="col-auto">
                                <a href="#form" class="btn btn-outline-tertiary fw-500 rounded-pill py-0_75 px-1">Enquire Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 top-0 h-100 text-primary ms-n5 d-none d-lg-block">
                        <?= renderImg("wave-desktop.png", "lib", "h-100", "eager") ?>
                    </div>
                    <div class="position-absolute start-0 top-0 w-100 text-primary mt-n3 mt-md-n5 d-block d-lg-none">
                        <?= renderImg("wave-mobile.png", "lib", "w-100", "eager") ?>
                    </div>
                </div>
            </div>
            <div class="nsw-ess p-0_75">
                <?= renderImg("nsw-ess.png", "lib") ?>
            </div>
        </div>
    </div>
</section>

<section class="position-relative bg-tertiary text-white py-3 py-md-5 py-xl-7">
    <div class="container">
        <?php
        $testimonials = [
            [
                'title' => 'Christine S.',
                'content' => 'Professionalism and commitment to their clients has been evident throughout our interaction. I cannot recommend Rob and his team highly enough !'
            ],
            [
                'title' => 'Rose C.',
                'content' => 'Very professional, punctual and friendly, if you are on the Northern Beaches I would highly recommend using Lightning Bult.'
            ],
            [
                'title' => 'Maryam F.',
                'content' => 'I couldn&apos;t be more pleased with the service I received! From start to finish, the entire experience was outstanding.'
            ],
            [
                'title' => 'Ian G.',
                'content' => 'Had Rob and his team install a pool heat pump. They showed up when he said they would and completed the job without fuss and as described.'
            ],
            [
                'title' => 'Nigel W.',
                'content' => 'From ordering to installation the service was great and Rafael, Rory and Nick did a fantastic job. Happy to recommend these guys.'
            ],
        ]
        ?>
        <div class="row position-relative">
            <div class="col-lg-5">
                <p class="fs-33 fs-md-35 fs-xl-55 lh-1 fw-500 me-3">See what our happy customers have to say</p>
            </div>
            <div class="position-absolute start-0 top-50 translate-middle-y w-50 w-md-auto">
                <?= renderImg("quote.png", "lib") ?>
            </div>
        </div>
        <div class="testimonial-content w-100 mt-5 mt-lg-0">
            <div class="testimonials-slider">
                <?php
                $i = 0;
                foreach ($testimonials as $testimonial) {
                    $i++;
                ?>
                    <div class="testimonial-box bg-primary text-tertiary rounded-20 position-relative d-flex flex-column justify-content-end px-1_75 py-1_5 mx-0_5">
                        <div class="position-absolute top-0 end-0 p-1_75"><?= renderImg("google.png", "lib", "d-inline-block", "eager") ?></div>
                        <?= $stars ?>
                        <p class="fs-14 fw-300 my-1_5"><?= $testimonial['content'] ?></p>
                        <p class="fw-500 lh-1"><?= $testimonial['title'] ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary py-3 py-md-5 py-xl-7 position-relative overflow-hidden z-1">
    <div class="container">
        <div class="position-relative bg-white text-tertiary shadow-lg rounded-30 p-1_25 p-md-1_75 z-1" id="form">
            <div class="row align-items-center gy-3 gx-2">
                <div class="col-lg-7">
                    <p class="fs-30 fs-lg-35 fs-xl-40 fw-300 lh-1 mb-2_25"><span class="fw-500">Get in touch</span> with our team today!</p>
                    <form action="./src/form" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="token" id="recaptchaResponse" class="recaptchaResponse">
                        <div class="row gy-2_5 gx-1_5 align-items-end">
                            <div class="col-md-6">
                                <label for="name">Name*</label>
                                <input type="text" class="form-control" name="name" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="number">Contact number*</label>
                                <input type="tel" class="form-control" name="number" placeholder="Your best contact number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email address*</label>
                                <input type="email" class="form-control" name="email" placeholder="Your email address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="postcode">Suburb and postcode*</label>
                                <input type="text" class="form-control" name="postcode" placeholder="E.g. Sydney, 2000" required>
                            </div>
                            <div class="col-md-6">
                                <label for="service">Service</label>
                                <select class="form-select" name="service" aria-label="service" required>
                                    <option selected valuse disabled>Select service</option>
                                    <option>Residential Heat Pumps</option>
                                    <option>Commercial Heat Pumps</option>
                                    <option>Swimming Pool Heat Pumps</option>
                                </select>

                            </div>
                            <div class="col-md-6">
                                <label for="comment">Message</label>
                                <textarea class="form-control" name="comment" placeholder="Write your message"></textarea>
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-outline-tertiary w-100 fw-500 rounded-pill py-0_75 px-1">
                                    Send enquiry
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5">
                    <div class="map-iframe rounded-20 overflow-hidden">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13267.072311375112!2d151.2612047!3d-33.7666585!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12aa468f46623d%3A0xb2b696a6b0bec315!2sLightning%20Bult!5e0!3m2!1sen!2sau!4v1705281911689!5m2!1sen!2sau" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="position-absolute end-0 bottom-0 z-n1 mb-n2 me-n1">
        <?= renderImg("bolt2.png", "lib", "", "eager") ?>
    </div>
</section>

<footer class="bg-tertiary text-white">
    <div class="container">
        <div class="row justify-content-between border-bottom gy-2 py-3 py-md-5">
            <div class="col-7 col-md-4 col-lg-auto">
                <?= renderImg("footer-logo.png", "logo") ?>
            </div>
            <div class="col-lg col-xl-8">
                <div class="row gy-2">
                    <div class="col-lg-6">
                        <p class="fs-20 fs-md-24 lh-1 fw-300 border-bottom pb-1 mb-1_75">Contact Us</p>
                        <a href="tel:<?= $phone_number ?>" class="d-flex align-items-center gap-0_5 fs-18 fw-300 text-white mt-1_75"><?= $phone ?> <?= $phone_number ?></a>
                        <a href="mailto:<?= $admin_email ?>" class="d-flex align-items-center gap-0_5 fs-18 fw-300 text-white mt-1_75"><?= $email ?> <?= $admin_email ?></a>
                    </div>
                    <div class="col-lg-6">
                        <p class="fs-20 fs-md-24 lh-1 fw-300 border-bottom pb-1">Follow us</p>
                        <div class="socials d-flex gap-1 mt-1_75">
                            <a href="https://www.facebook.com/lightningbult" target="_blank" class="text-white"><?= $facebook_icon ?></a>
                            <a href="https://www.instagram.com/lightning_bult_/" target="_blank" class="text-white"><?= $insta_icon ?></a>
                            <a href="https://www.linkedin.com/company/lightning-bult-electrical-and-plumbing-pty-ltd/" target="_blank" class="text-white"><?= $linkedin_icon ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-md-between justify-content-center align-items-center gy-1 py-3 py-md-3_75">
            <div class="col-auto">
                <div class="row gy-1 gx-0 justify-content-center">
                    <div class="col-auto text-center">
                        <p class="d-flex gap-1_5 gap-md-2 align-items-center fs-12 fw-300"><span>Copyright <?= date('Y') ?></span> <span>|</span> <span class="d-none d-md-inline-block"><?= $site ?></span> <span class="d-none d-md-inline">|</span> <span>All Rights Reserved</span></p>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                    <?= renderImg("aiims.png", "logo") ?>
                </a>
            </div>
        </div>
    </div>
</footer>