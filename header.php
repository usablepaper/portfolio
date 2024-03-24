<!DOCTYPE html>
<html lang="<?= get_bloginfo( 'language' ); ?>">

<head>
    <?php wp_head(); ?>
    <script src=""></script>
    <meta charset="<?= get_bloginfo( 'charset' ); ?>">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <title><?= get_bloginfo( 'name' ); ?></title>
    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= get_bloginfo('name')?>">
    <meta property="og:description" content="<?= get_bloginfo('description')?>">
    <meta property="og:image" content="<?= get_template_directory_uri().'/assets/src/thumbnail.jpeg' ?>">
    <meta property="og:url" content="<?= home_url()?>">
    <meta name="description" content="<?= get_bloginfo('description')?>">
    <link rel="icon" type="image/x-icon" id='link'
        href="<?= get_template_directory_uri(  ).'/assets/src/favicons/fav-1@3x-100.jpg'?>">
    <script>
    function movingFavs() {
        let count = 0;
        setInterval(() => {
            count++;
            document.querySelector('#link').href =
                `<?= get_template_directory_uri(  ).'/assets/src/favicons/fav-';?>${count}<?='@3x-100.jpg'?>`
            if (count >= 11) count = 0;
        }, 1000);
    }
    movingFavs();
    </script>
</head>

<body <?php body_class(); ?>>
    <div class='header-logo header-logo--pc'>
        <a href='<?= home_url(); ?>'></a>
        <svg width="1415" height="177" viewBox="0 0 1415 177" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_14_489)">
                <path
                    d="M458.456 128.914L403.127 0.155273H347.518L287.899 126.056L338.783 173.676H338.908V125.963H411.644V174.888L458.456 128.914Z"
                    fill="black" />
                <path
                    d="M44.0458 0.155273L0 88.1893C4.91125 100.739 15.2311 122.328 36.0884 142.706C43.5485 150.006 51.133 155.939 58.3444 160.754C73.762 171.036 91.9772 176.285 110.503 176.285C128.718 176.285 146.623 171.222 161.854 161.282C169.5 156.281 177.582 150.006 185.54 142.116C205.962 121.831 215.753 100.397 220.291 88.2204C205.589 58.8343 190.917 29.5103 176.214 0.155273H132.169V88.2204L88.1228 0.155273H44.0769H44.0458Z"
                    fill="black" />
                <path
                    d="M261.664 65.513C257.965 53.4604 259.24 38.9848 272.419 38.9848C278.854 38.9848 292.779 43.52 284.946 70.4521C284.946 70.4521 319.356 34.2631 307.047 14.1961C302.664 7.05145 295.639 0.248535 274.315 0.248535H205.061L225.576 61.7543L242.765 113.258C248.578 129.442 249.386 139.662 242.579 143.545C234.404 148.204 222.468 138.512 219.546 121.49C219.546 121.49 201.983 176.379 259.924 176.379H298.716L261.726 65.513H261.664Z"
                    fill="black" />
                <path
                    d="M646.047 0.963013H602.001L571.757 91.6064C563.52 119.533 567.778 135.251 574.244 144.663C585.403 160.909 613.689 173.148 613.689 173.148C608.871 162.245 591.93 149.882 593.422 130.622C595.07 109.685 603.866 96.2659 614.155 76.5716C623.325 59.0829 635.137 33.8593 646.016 0.963013H646.047Z"
                    fill="black" />
                <path
                    d="M733.642 0.155315C723.943 -0.372765 698.361 -0.403829 673.37 16.0598C659.227 25.3789 650.461 36.5928 645.519 44.1723C633.147 63.1211 632.277 81.7281 632.059 87.1953C631.842 92.5072 631.096 123.757 654.564 149.322C685.151 182.685 729.756 176.845 733.642 176.254V88.1894H689.596L733.642 44.1723H689.596L733.642 0.155315Z"
                    fill="black" />
                <path
                    d="M1226.76 176.845C1217.06 177.373 1191.48 177.404 1166.48 160.94C1152.34 151.621 1143.58 140.407 1138.63 132.828C1126.26 113.879 1125.39 95.2718 1125.17 89.8046C1124.96 84.4928 1124.21 53.2429 1147.68 27.6776C1178.27 -5.68464 1222.9 0.186363 1226.76 0.745506V88.8106H1182.71L1226.76 132.828H1182.71L1226.76 176.845Z"
                    fill="black" />
                <path d="M537.316 62.4377V0.155273H449.846L472.817 176.254H557.458V62.4377H522.271H537.316Z"
                    fill="black" />
                <path
                    d="M837.866 0.434872H738.988L748.313 37.649L783.065 176.534H827.111V88.4689C859.593 81.2622 875.042 59.0518 875.384 37.649C875.384 37.4937 875.384 37.3694 875.384 37.2141C875.508 16.7743 858.319 0.403809 837.897 0.403809L837.866 0.434872Z"
                    fill="black" />
                <path
                    d="M1091.85 0.434872H992.974L1002.3 37.649L1037.05 176.534H1081.1V88.4689C1113.58 81.2622 1129.03 59.0518 1129.37 37.649C1129.37 37.4937 1129.37 37.3694 1129.37 37.2141C1129.49 16.7743 1112.31 0.403809 1091.88 0.403809L1091.85 0.434872Z"
                    fill="black" />
                <path
                    d="M1234.56 0.434872L1278.6 176.534H1322.65V88.4689L1366.7 176.534H1410.74L1366.7 88.4689C1399.18 81.2622 1414.63 59.0518 1414.97 37.649C1414.97 37.4937 1414.97 37.3694 1414.97 37.2141C1415.09 16.7743 1397.9 0.403809 1377.48 0.403809H1278.6"
                    fill="black" />
                <path
                    d="M1014.76 129.815L959.466 1.02515H903.826L844.238 126.957L895.122 174.546H895.247V126.832H967.983V175.758L1014.76 129.815Z"
                    fill="black" />
            </g>
            <defs>
                <clipPath id="clip0_14_489">
                    <rect width="1415" height="177" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </div>
    <div class="header-logo header-logo--mobile">
        <a href='<?= home_url(); ?>'></a>

        <svg version="1.1" id="레이어_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            x="0px" y="0px" viewBox="0 0 234.44 116.41" style="enable-background:new 0 0 234.44 116.41;"
            xml:space="preserve">
            <style type="text/css">
            .st0 {
                fill: #040000;
            }
            </style>
            <g>
                <polygon class="st0" points="147.49,41.5 129.69,0.05 111.8,0.05 92.62,40.58 108.99,55.91 109.03,55.91 109.03,40.55 
		132.43,40.55 132.43,56.3 	" />
                <path class="st0" d="M14.17,0.05L0,28.39c1.58,4.04,4.9,10.99,11.61,17.55c2.4,2.35,4.84,4.26,7.16,5.81c4.96,3.31,10.82,5,16.78,5
		h0c5.86,0,11.62-1.63,16.52-4.83c2.46-1.61,5.06-3.63,7.62-6.17c6.57-6.53,9.72-13.43,11.18-17.35
		c-4.72-9.45-9.45-18.9-14.17-28.35H42.52v28.35L28.35,0.05H14.17z" />
                <path class="st0" d="M84.18,21.09c-1.19-3.88-0.78-8.54,3.46-8.54c2.07,0,6.55,1.46,4.03,10.13c0,0,11.07-11.65,7.11-18.11
		c-1.41-2.3-3.67-4.49-10.53-4.49H65.96l6.6,19.8l0,0l5.53,16.58c1.87,5.21,2.13,8.5-0.06,9.75c-2.63,1.5-6.47-1.62-7.41-7.1
		c0,0-5.65,17.67,12.99,17.67h12.48L84.18,21.09z" />
                <line class="st0" x1="111.8" y1="0.05" x2="92.62" y2="40.58" />
                <path class="st0" d="M207.84,0.05h-14.17l-9.73,29.18c-2.65,8.99-1.28,14.05,0.8,17.08c3.59,5.23,12.69,9.17,12.69,9.17
		c-1.55-3.51-7-7.49-6.52-13.69c0.53-6.74,3.36-11.06,6.67-17.4C200.53,18.75,204.34,10.63,207.84,0.05z" />
                <path class="st0"
                    d="M234.44,0.05c-3.12-0.17-11.35-0.18-19.39,5.12c-4.55,3-7.37,6.61-8.96,9.05c-3.98,6.1-4.26,12.09-4.33,13.85
		c-0.07,1.71-0.31,11.77,7.24,20c9.84,10.74,24.19,8.86,25.44,8.67c0-9.45,0-18.9,0-28.35h-14.17l14.17-14.17h-14.17L234.44,0.05z" />
                <path class="st0" d="M168.55,116.37c-3.12,0.17-11.35,0.18-19.39-5.12c-4.55-3-7.37-6.61-8.96-9.05
		c-3.98-6.1-4.26-12.09-4.33-13.85c-0.07-1.71-0.31-11.77,7.24-20c9.84-10.74,24.19-8.86,25.44-8.67c0,9.45,0,18.9,0,28.35h-14.17
		l14.17,14.17h-14.17L168.55,116.37z" />
                <path class="st0" d="M172.86,20.1V0.05h-28.14l7.39,56.69h27.23V20.1h-11.32l0,0H172.86z" />
                <path class="st0" d="M43.44,59.58H11.62l3,11.98l11.18,44.71h14.17V87.92c10.45-2.32,15.42-9.47,15.53-16.36c0-0.05,0-0.09,0-0.14
		C55.54,64.84,50.01,59.58,43.44,59.58z" />
                <path class="st0" d="M125.15,59.58H93.34l3,11.98l11.18,44.71h14.17V87.92c10.45-2.32,15.42-9.47,15.53-16.36c0-0.05,0-0.09,0-0.14
		C137.26,64.84,131.73,59.58,125.15,59.58z" />
                <path class="st0" d="M171.06,59.58l14.17,56.69h14.17V87.92l14.17,28.35h14.17l-14.17-28.35c10.45-2.32,15.42-9.47,15.53-16.36
		c0-0.05,0-0.09,0-0.14c0.04-6.58-5.49-11.85-12.06-11.85h-31.81" />
                <polygon class="st0" points="100.35,101.22 82.56,59.76 64.67,59.76 45.49,100.3 61.86,115.62 61.9,115.63 61.9,100.27 
		85.3,100.27 85.3,116.02 	" />
            </g>
        </svg>

    </div>
    <header>
        <ul class="nav">
            <li class='trigger trigger--about' data-id='about'>
                <span>about</span>
                <div class="popup popup--about">
                    <div class="popup__exit">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 1L1 10.5" stroke="white" />
                            <path d="M10.5 10.5L1 1" stroke="white" />
                        </svg>
                    </div>
                    <?php 
                        $about = get_field('about', 'options');
                        $skills = get_field('skills', 'options');
                        $cvs = get_field('cv', 'options');
                        $contacts = get_field('contact', 'options');
                    ?>
                    <p><?= $about ?></p>
                    <div><?= $skills ?></div>
                    <ul class='contacts'>
                        <?php
                            foreach($contacts as $contact){
                                if($contact['label'] == 'Phone'){
                                    $link = '<a href="tel:'.$contact['link'].'">'.$contact['link'].'</a>';
                                } else if ($contact['label'] == 'Email'){
                                    $link = '<a href="mailto:'.$contact['link'].'">'.$contact['link'].'</a>';
                                } else if ($contact['label'] == 'Instagram'){
                                    $link = '<a href="'.$contact['link'].'">@usablepaper</a>';
                                } else {
                                    $link = '<a href="'.$contact['link'].'">'.$contact['link'].'</a>';
                                }
                                ?>
                                <li>
                                    <div><?= $contact['label'] ?></div><?= $link ?>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                </div>
            </li>
            <div class="trigger trigger--cv" data-id='cv'>
                <span>c.v.</span>
                <div class="popup popup--cv">
                    <div class="popup__exit">
                        <svg width="11" height="11" viewBox="0 0 11 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 1L1 10.5" stroke="white" />
                            <path d="M10.5 10.5L1 1" stroke="white" />
                        </svg>
                    </div>
                    <ul>
                        <?php
                            foreach($cvs as $cv){
                            ?>
                            <li>
                                <div class='year'><?= $cv['year'] ?></div>
                                <div><?= $cv['label'] ?></div>
                            </li>
                            <?php
                            }
                        ?>
                    </ul>
                </div>
            </div>
            <li class='trigger trigger--works' data-id='work'>
                <span><a href='<?= get_permalink('29')?>'>works</a></span>
            </li>
        </ul>
        </div>
    </header>