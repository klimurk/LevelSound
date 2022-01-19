
<?php get_header(); ?>
<svg style='display:none'>
        <symbol id="smile" viewBox="0 0 110 110" >
                    <path d="M69.0003 42.4444C72.3753 42.4444 75.1114 36.9724 75.1114 30.2222C75.1114 23.4721 72.3753 18 69.0003 18C65.6252 18 62.8892 23.4721 62.8892 30.2222C62.8892 36.9724 65.6252 42.4444 69.0003 42.4444Z" fill="black"/>
                    <path d="M40.4817 42.4444C43.8568 42.4444 46.5928 36.9724 46.5928 30.2222C46.5928 23.4721 43.8568 18 40.4817 18C37.1066 18 34.3706 23.4721 34.3706 30.2222C34.3706 36.9724 37.1066 42.4444 40.4817 42.4444Z" fill="black"/>
                    <path d="M90.8302 59.0255C87.5548 58.2977 84.6433 59.0255 84.2794 60.4813C83.9154 61.5731 85.0072 63.0288 86.8269 64.1206C81.3678 77.5863 68.994 86.3208 54.8005 86.3208C40.9709 86.3208 28.5971 77.5863 22.7741 64.4846C24.9577 63.3928 26.0495 61.937 25.6856 60.8452C25.3216 59.0255 22.4102 58.2976 19.1347 59.3894C15.8593 60.1173 13.6756 62.301 14.0395 63.7567C14.4035 64.8485 15.8592 65.5764 18.0429 65.5764C24.2298 81.2257 38.4233 91.052 54.4365 91.052C70.4497 91.052 84.6433 81.2257 90.8302 65.5764C93.0138 65.5764 94.8335 64.8485 95.1975 63.7567C96.2893 61.937 94.1056 59.7534 90.8302 59.0255Z" fill="black"/>
                    <circle cx="55" cy="55" r="53.5" stroke="black" stroke-width="3"/>
        </symbol>

</svg>

<div class="intro">

        <!-- <div class=""> -->
                <div class="intro__video">
                        <video id="video__intro"  autoplay playsinline muted loop poster="<?= get_template_directory_uri( ).'/assets/images/index/intro/poster.png'?>" >
                                <source src="<?= get_template_directory_uri( ).'/assets/videos/Intro_BG/Body_Background.mp4'?>" type="video/mp4">
                        </video>
                </div>
                <div class="intro__inner container">
                        <div class="intro__text"><?= pll_e( 'Intro text' ); ?></div>
                        <div class="intro__lines">
                                <div class="intro__lines__inner">
                                        <div class="intro__lines__text">
                                                <span id="intro_lines_topNum"></span>
                                                <br/>
                                                <span id="intro_lines_btmNum"></span>
                                        </div>
                                        <svg class="intro__anim" viewBox="0 0 208 132" fill="none">
                                                <g id="gIntroAnim_Rec7">
                                                        <path id="Vector" d="M208 45.5739H179.339V132.205H208V45.5739Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec6">
                                                        <path id="Vector_2" d="M178.11 66.9238H149.449V132H178.11V66.9238Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec5">
                                                        <path id="Vector_3" d="M147.811 103.876H119.15V132H147.811V103.876Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec4">
                                                        <path id="Vector_4" d="M118.126 98.5381H89.4645V132H118.126V98.5381Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec3">
                                                        <path id="Vector_5" d="M88.441 104.902H59.7795V132H88.441V104.902Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec2">
                                                        <path id="Vector_6" d="M58.5513 117.014H29.8898V132H58.5513V117.014Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Rec1">
                                                        <path id="Vector_7" d="M28.8663 121.325H0.204834V132H28.8663V121.325Z" fill="#EA0F0F" />
                                                </g>
                                                <g id="gIntroAnim_Elipse1">
                                                        <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z" fill="#EA0F0F" />
                                                </g>
                                        </svg>
                                </div>
                        </div>
                        <svg class="intro__star">
                                <use xlink:href=#introStar></use>
                        </svg>
                <!-- </div> -->
        </div> <!-- container-->
</div> <!-- intro -->

<div class="benefits">
        <div class="container">
                <div class="benefits__inner">
                        <div class="benefits__col">

                        <div class="benefits__title"><?= pll_e( 'Benefits title 1' ); ?>
                                <div><?= pll_e( 'Benefits title 2' ); ?> </div>
                        </div>
                                <div class="benefits__description">
                                        <div class="benefits__description__text">
                                                <?= pll_e( 'Benefits text 1' ); ?>
                                                <br/>
                                                <?= pll_e( 'Benefits text 2' ); ?>
                                                <br/>
                                                <?= pll_e( 'Benefits text 3' ); ?>
                                                <br/>
                                                <?= pll_e( 'Benefits text 4' ); ?>
                                                <br/>
                                                <?= pll_e( 'Benefits text 5' ); ?>
                                                <br/>
                                                <?= pll_e( 'Benefits text 6' ); ?>
                                        </div>
                                        <a class="benefits__description__btn btn_lvl" href="<?php if (pll_current_language() == 'ru') {echo get_permalink( 62 );} if (pll_current_language() == 'ua') {echo get_permalink( 64 );}if (pll_current_language() == 'en') {echo  get_permalink( 66 );}?>?calendar">
                                                <?= pll_e( 'Benefits btn text' ); ?>
                                        </a>
                                        <div class="benefits__description__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/benefits/description1.png'?>" alt="">
                                        </div>
                                </div>
                        </div>
                        <div class="benefits__col">
                                        <div class="benefits__owl">
                                                <div id="benefits_sync1" class="owl-carousel owl-theme">
                                                        <div class="benefits__owl__carousel__item" data-dot="01">
                                                                <div class="benefits__owl__carousel__item__photo">
                                                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/benefits/slider/1.png'?>" alt="">
                                                                </div>

                                                        </div>
                                                        <div class="benefits__owl__carousel__item" data-dot="02">
                                                                <div class="benefits__owl__carousel__item__photo">
                                                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/benefits/slider/2.png'?>" alt="">
                                                                </div>
                                                        </div>
                                                        <div class="benefits__owl__carousel__item" data-dot="02">
                                                                <div class="benefits__owl__carousel__item__photo">
                                                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/benefits/slider/3.png'?>" alt="">
                                                                </div>
                                                        </div>
                                                        <div class="benefits__owl__carousel__item" data-dot="02">
                                                                <div class="benefits__owl__carousel__item__photo">
                                                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/benefits/slider/4.png'?>" alt="">
                                                                </div>
                                                        </div>

                                                </div>
                                                <div id="benefits_sync2" class="owl-carousel owl-theme">
                                                        <div class="benefits__owl__carousel__text__item">
                                                                <?= pll_e( 'Benefits carousel text1' ); ?>
                                                        </div>
                                                        <div class="benefits__owl__carousel__text__item">
                                                                <?= pll_e( 'Benefits carousel text2' ); ?>
                                                        </div>
                                                        <div class="benefits__owl__carousel__text__item">
                                                                <?= pll_e( 'Benefits carousel text3' ); ?>
                                                        </div>
                                                        <div class="benefits__owl__carousel__text__item">
                                                                <?= pll_e( 'Benefits carousel text4' ); ?>
                                                        </div>
                                                </div>
                                                <div class="benefits__owl__nav"></div>
                                                <svg class="benefits__owl__svg">
                                                        <use xlink:href=#text_round></use>
                                                </svg>
                                        </div>
                        </div>
                </div>
        </div>
</div>

<div class="people">
        <div class="container">
                <div class="people__slick">
                        <div id='people_bigimage' class="slider trm-bigimage-slider">
                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/3.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/1.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/2.png'?>" alt="">
                                        </div>
                                </div>

                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/4.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/5.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_bigimages__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/6.png'?>" alt="">
                                        </div>
                                </div>

                        </div>
                        <div id='people_info' class="slider trm-categry-slider  ">
                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name3' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text3' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://instagram.com/fir_brdk?utm_medium=copy_link" target="_blank">
                                                        <?= pll_e( 'People slider social3' ); ?>
                                                </a>
                                        </div>
                                </div>
                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name1' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text1' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://instagram.com/alexeykostylev?utm_medium=copy_link" target="_blank">
                                                        <?= pll_e( 'People slider social1' ); ?>
                                                </a>
                                        </div>
                                </div>
                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name2' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text2' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://instagram.com/sashadidntwakeup?utm_medium=copy_link" target="_blank">
                                                        <?= pll_e( 'People slider social2' ); ?>
                                                </a>
                                        </div>
                                </div>

                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name4' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text4' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://instagram.com/tof_sg?utm_medium=copy_link" target="_blank">
                                                        <?= pll_e( 'People slider social4' ); ?>
                                                </a>
                                        </div>
                                </div>
                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name5' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text5' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://www.instagram.com/yukoua/?hl=ru" target="_blank">
                                                        <?= pll_e( 'People slider social5' ); ?>
                                                </a>
                                        </div>
                                </div>
                                <div>
                                        <div class="people_info_title">
                                                <?= pll_e( 'People slider name6' ); ?>
                                        </div>
                                        <div class="people_info_text">
                                                <?= pll_e( 'People slider text6' ); ?>
                                        </div>
                                        <div class="people_info_social">
                                                <a href="https://instagram.com/wavydem?utm_medium=copy_link target="_blank">
                                                        <?= pll_e( 'People slider social6' ); ?>
                                                </a>
                                        </div>
                                </div>
                        </div>
                        <div id='people_images' class="slider trm-sync-slider">
                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/1.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/2.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/4.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/5.png'?>" alt="">
                                        </div>
                                </div>
                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/6.png'?>" alt="">
                                        </div>
                                </div>

                                <div>
                                        <div class="people_images_name"></div>
                                        <div class="people_images__photo">
                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/people/slider/3.png'?>" alt="">
                                        </div>
                                </div>

                        </div>

                        <button class='btn_people left'>
                                <svg>
                                        <use xlink:href="#nav_arrow"></use>
                                </svg>
                        </button>
                        <button class='btn_people right'>
                                <svg>
                                        <use xlink:href="#nav_arrow"></use>
                                </svg>
                        </button>
                </div>
        </div>
</div>


<div class="clients" id="clients">
        <div class="title_fullwidth"><?= pll_e( 'Clients title' ); ?></div>
                <div class="clients__inner container">
                        <div class="clients__col">
                                <div class="animdisk">
                                        <img id='package'  src="<?= get_template_directory_uri( ).'/assets/images/index/clients/package.png'?>" alt="">
                                        <img id='vinyl' src="<?= get_template_directory_uri( ).'/assets/images/index/clients/vinyl.png'?>" alt="">
                                </div>
                        </div>
                        <div class="clients__col">
                                <div class="clients__text">
                                        <div class="clients__subtitle"><?= pll_e( 'Clients subtitle' ); ?></div>
                                        <div class="clients__subtext"><?= pll_e( 'Clients text' ); ?></div>
                                        <a class="clients__btn btn_lvl" href="<?php
                                                if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                                if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                                if (pll_current_language() == 'en') {echo  get_permalink( 66 );}?>?calendar">
                                                <?= pll_e( 'Clients btn' ); ?>
                                        </a>
                                </div>
                        </div>
                </div>
        </div>
</div>

<div class="contactform" id="contacts">
       <div class="container">
               <div class="contactform__inner">
                        <div class="contactform__col">
                                <div class="casseteback">

                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/casseteBack.png'?>" alt="">
                                        <div class="casseteback_1">
                                                <div style="width:56%">
                                                        <div class="casseteBack_table">
                                                                <div class="casseteBack_table_col first">
                                                                        <div >
                                                                                <span id="animlines_topNum"></span>
                                                                                <br/>
                                                                                <span id="animlines_btmNum"></span>
                                                                        </div>

                                                                        <svg viewBox="0 0 208 132" >
                                                                                <g id="gIntroAnim_Rec7">
                                                                                        <path id="Vector" d="M208 45.5739H179.339V132.205H208V45.5739Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec6">
                                                                                        <path id="Vector_2" d="M178.11 66.9238H149.449V132H178.11V66.9238Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec5">
                                                                                        <path id="Vector_3" d="M147.811 103.876H119.15V132H147.811V103.876Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec4">
                                                                                        <path id="Vector_4" d="M118.126 98.5381H89.4645V132H118.126V98.5381Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec3">
                                                                                        <path id="Vector_5" d="M88.441 104.902H59.7795V132H88.441V104.902Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec2">
                                                                                        <path id="Vector_6" d="M58.5513 117.014H29.8898V132H58.5513V117.014Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Rec1">
                                                                                        <path id="Vector_7" d="M28.8663 121.325H0.204834V132H28.8663V121.325Z"/>
                                                                                </g>
                                                                                <g id="gIntroAnim_Elipse1" style="transform:translate(30%, -30%);">
                                                                                        <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z"/>
                                                                                </g>

                                                                        </svg>
                                                                </div>
                                                                <div class="casseteBack_table_col second">
                                                                        <div class="casseteBack_table_col_second first">
                                                                                <img src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/smile.png'?>" alt="">
                                                                        </div>
                                                                        <div class="casseteBack_table_col_second second">
                                                                                <div>
                                                                                        <span id="animlines_topNum1"></span>
                                                                                </div>
                                                                                <svg viewBox="0 0 28 28">
                                                                                        <g id="gIntroAnim_Elipse1" style="transform:translateY(-200%); fill:#fff">
                                                                                                <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z"/>
                                                                                        </g>
                                                                                </svg>
                                                                        </div>
                                                                        <div class="casseteBack_table_col_second third" >
                                                                                <svg id="cassette_arrow_1" style="transform:translateX(110%);" viewBox="0 0 27 31">
                                                                                        <path d="M7.1405 15.6115L0 0L13.3884 7.80576L27 15.6115L13.3884 23.1942L0 31L7.1405 15.6115Z" />
                                                                                </svg>
                                                                                <svg id="cassette_arrow_2" style="transform:translateX(240%);" viewBox="0 0 27 31">
                                                                                        <path d="M7.1405 15.6115L0 0L13.3884 7.80576L27 15.6115L13.3884 23.1942L0 31L7.1405 15.6115Z" />
                                                                                </svg>
                                                                                <svg id="cassette_arrow_3" style="transform:translateX(370%);" viewBox="0 0 27 31">
                                                                                        <path  d="M7.1405 15.6115L0 0L13.3884 7.80576L27 15.6115L13.3884 23.1942L0 31L7.1405 15.6115Z" />
                                                                                </svg>
                                                                                <svg id="cassette_arrow_4" style="transform:translateX(500%);" viewBox="0 0 27 31">
                                                                                        <path d="M7.1405 15.6115L0 0L13.3884 7.80576L27 15.6115L13.3884 23.1942L0 31L7.1405 15.6115Z" />
                                                                                </svg>
                                                                        </div>
                                                                </div>
                                                                <div class="casseteBack_table_col third" >
                                                                        <div style="width:100%; height:2px; top:16.666%"></div>
                                                                        <div style="width:100%; height:2px; top:33.333%"></div>
                                                                        <div style="width:100%; height:2px; top:50%"></div>
                                                                        <div style="width:100%; height:2px; top:66.666%"></div>
                                                                        <div style="width:100%; height:2px; top:83.333%"></div>

                                                                        <div style="height:100%; width:2px; left:25%"></div>
                                                                        <div style="height:100%; width:2px; left:50%"></div>
                                                                        <div style="height:100%; width:2px; left:75%"></div>

                                                                        <div style="height:12%; width:20%; left:16%; top:11.666%; border-radius: 50%;"></div>
                                                                        <div style="height:12%; width:20%; left:67%; top:60.666%; border-radius: 50%;"></div>
                                                                </div>
                                                        </div>

                                                </div>

                                        </div>
                                        <div class="casseteback_2" >Ultra precision mechnism cassette</div>
                                        <div class="casseteback_3" style="">

                                                <div class="casseteback_3_col second"style="">
                                                        <a href="https://www.google.ru/maps/place/%D0%BF%D1%80%D0%BE%D1%81%D0%BF.+%D0%9F%D0%BE%D0%B1%D0%B5%D0%B4%D1%8B,+80%2F57,+%D0%9A%D0%B8%D0%B5%D0%B2,+%D0%A3%D0%BA%D1%80%D0%B0%D0%B8%D0%BD%D0%B0,+02000/@50.4584355,30.4238682,20.25z/data=!4m5!3m4!1s0x40d4cc463aec0e53:0x2a568350a523c028!8m2!3d50.4584107!4d30.4240938" target="_blank"><?= pll_e( 'Cassette adress' ); ?></a>
                                                        <a href="mailto:info@levelsound.com.ua" target="_blank">info@levelsound.com.ua</a>
                                                        <a href="tel:+380 67 388 8088" target="_blank">+380 67 388 8088</a>
                                                </div>
                                                <div class="casseteback_3_col third"style="">
                                                        <a href="https://www.facebook.com/levelsoundstudio" target="_blank">
                                                                <svg viewbox="0 0 60.734 60.733">
                                                                        <path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914 v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462 v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
                                                                </svg>
                                                        </a>
                                                        <a href="https://www.instagram.com/level.sound/ " target="_blank">
                                                                <svg viewbox="0 0 511 511.9" >
                                                                        <path d="m510.949219 150.5c-1.199219-27.199219-5.597657-45.898438-11.898438-62.101562-6.5-17.199219-16.5-32.597657-29.601562-45.398438-12.800781-13-28.300781-23.101562-45.300781-29.5-16.296876-6.300781-34.898438-10.699219-62.097657-11.898438-27.402343-1.300781-36.101562-1.601562-105.601562-1.601562s-78.199219.300781-105.5 1.5c-27.199219 1.199219-45.898438 5.601562-62.097657 11.898438-17.203124 6.5-32.601562 16.5-45.402343 29.601562-13 12.800781-23.097657 28.300781-29.5 45.300781-6.300781 16.300781-10.699219 34.898438-11.898438 62.097657-1.300781 27.402343-1.601562 36.101562-1.601562 105.601562s.300781 78.199219 1.5 105.5c1.199219 27.199219 5.601562 45.898438 11.902343 62.101562 6.5 17.199219 16.597657 32.597657 29.597657 45.398438 12.800781 13 28.300781 23.101562 45.300781 29.5 16.300781 6.300781 34.898438 10.699219 62.101562 11.898438 27.296876 1.203124 36 1.5 105.5 1.5s78.199219-.296876 105.5-1.5c27.199219-1.199219 45.898438-5.597657 62.097657-11.898438 34.402343-13.300781 61.601562-40.5 74.902343-74.898438 6.296876-16.300781 10.699219-34.902343 11.898438-62.101562 1.199219-27.300781 1.5-36 1.5-105.5s-.101562-78.199219-1.300781-105.5zm-46.097657 209c-1.101562 25-5.300781 38.5-8.800781 47.5-8.601562 22.300781-26.300781 40-48.601562 48.601562-9 3.5-22.597657 7.699219-47.5 8.796876-27 1.203124-35.097657 1.5-103.398438 1.5s-76.5-.296876-103.402343-1.5c-25-1.097657-38.5-5.296876-47.5-8.796876-11.097657-4.101562-21.199219-10.601562-29.398438-19.101562-8.5-8.300781-15-18.300781-19.101562-29.398438-3.5-9-7.699219-22.601562-8.796876-47.5-1.203124-27-1.5-35.101562-1.5-103.402343s.296876-76.5 1.5-103.398438c1.097657-25 5.296876-38.5 8.796876-47.5 4.101562-11.101562 10.601562-21.199219 19.203124-29.402343 8.296876-8.5 18.296876-15 29.398438-19.097657 9-3.5 22.601562-7.699219 47.5-8.800781 27-1.199219 35.101562-1.5 103.398438-1.5 68.402343 0 76.5.300781 103.402343 1.5 25 1.101562 38.5 5.300781 47.5 8.800781 11.097657 4.097657 21.199219 10.597657 29.398438 19.097657 8.5 8.300781 15 18.300781 19.101562 29.402343 3.5 9 7.699219 22.597657 8.800781 47.5 1.199219 27 1.5 35.097657 1.5 103.398438s-.300781 76.300781-1.5 103.300781zm0 0"/>
                                                                        <path d="m256.449219 124.5c-72.597657 0-131.5 58.898438-131.5 131.5s58.902343 131.5 131.5 131.5c72.601562 0 131.5-58.898438 131.5-131.5s-58.898438-131.5-131.5-131.5zm0 216.800781c-47.097657 0-85.300781-38.199219-85.300781-85.300781s38.203124-85.300781 85.300781-85.300781c47.101562 0 85.300781 38.199219 85.300781 85.300781s-38.199219 85.300781-85.300781 85.300781zm0 0"/>
                                                                        <path d="m423.851562 119.300781c0 16.953125-13.746093 30.699219-30.703124 30.699219-16.953126 0-30.699219-13.746094-30.699219-30.699219 0-16.957031 13.746093-30.699219 30.699219-30.699219 16.957031 0 30.703124 13.742188 30.703124 30.699219zm0 0"/>
                                                                </svg>
                                                        </a>
                                                        <div>High output</div>
                                                </div>
                                        </div>

                                        <svg>
                                                <use xlink:href=#text_round></use>
                                        </svg>
                                </div>

                                <div class="casseteside">
                                        <img src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/casseteSide.png'?>" alt="" >
                                        <div class="casseteside__links">
                                                <a href="#">
                                                        <svg >
                                                                <use xlink:href=#social_viber></use>
                                                        </svg>
                                                </a>
                                                <a href="#">
                                                        <svg >
                                                                <use xlink:href=#social_telegram></use>
                                                        </svg>
                                                </a>
                                                <a href="#">
                                                        <svg >
                                                                <use xlink:href=#social_whatsapp></use>
                                                        </svg>
                                                </a>
                                        </div>
                                        <span id="casseteSide_topNum"></span>
                                        <span class="casseteside_text">Live Sound</span>
                                </div>
                        </div>
                        <div class="contactform__col">
                                <div class="casseteContact">
                                        <img class="casseteContact_background" src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/contactside.png'?>" alt="" >
                                        <div class="casseteContact_form">

                                                        <?php
                                                        if (pll_current_language() == 'ru') {
                                                        echo do_shortcode( '[cf7form cf7key="%d0%ba%d0%be%d0%bd%d1%82%d0%b0%d0%ba%d1%82%d0%bd%d0%b0%d1%8f-%d1%84%d0%be%d1%80%d0%bc%d0%b0-1"]' );
                                                        }
                                                        if (pll_current_language() == 'ua') {
                                                        echo do_shortcode( '[cf7form cf7key="%d0%b1%d0%b5%d0%b7-%d0%bd%d0%b0%d0%b7%d0%b2%d0%b0%d0%bd%d0%b8%d1%8f"]');
                                                        }
                                                        if (pll_current_language() == 'en') {
                                                        echo do_shortcode( '[cf7form cf7key="%d0%b1%d0%b5%d0%b7-%d0%bd%d0%b0%d0%b7%d0%b2%d0%b0%d0%bd%d0%b8%d1%8f-2"]');
                                                        }
                                                        ?>
                                        </div>
                                        <img class="casseteContact_animring" style="left:27%; top:36.5%;" src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/ring.png'?>" alt="">
                                        <img class="casseteContact_animring" style="left:63.6%; top: 36.5%;" src="<?= get_template_directory_uri( ).'/assets/images/index/contactform/ring.png'?>" alt="">
                                </div>
                                <!-- <div class="contactform__btn btn_lvl">Отправить</div> -->
                        </div>
                </div>
       </div>
</div>
<div id="contactform_response" class="contactform_response hidden">

        <div class="contactform_response_inner">
                <svg class="svg_smile">
                        <use id='response_smile_link' xlink:href='#cf7_smile_good'/>
                </svg>
                <span class='contactform_response_text'></span>
                <button class="btn_ok btn_lvl">OK</button>
                <button class="btn_cross">
                        <svg viewBox="0 0 16 16" >
                                <rect x="14.3682" width="2" height="20" transform="rotate(45 14.3682 0)" fill="black"/>
                                <rect width="2" height="20" transform="matrix(-0.707107 0.707107 0.707107 0.707107 1.41895 0)" fill="black"/>
                        </svg>
                </button>
        </div>
        <div class="contactform_response_num Topnum"></div>
        <svg class="submit_decor" viewBox="0 0 630 695">
                <path d="M330 683.62H504.135L617.272 600.277V382" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M607.709 693.58C611.736 693.58 615 684.067 615 672.332C615 660.598 611.736 651.085 607.709 651.085C603.682 651.085 600.417 660.598 600.417 672.332C600.417 684.067 603.682 693.58 607.709 693.58Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M607.71 679.625C619.445 679.625 628.957 676.36 628.957 672.333C628.957 668.306 619.445 665.042 607.71 665.042C595.975 665.042 586.462 668.306 586.462 672.333C586.462 676.36 595.975 679.625 607.71 679.625Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M622.479 687.863C625.327 685.016 620.909 675.981 612.611 667.683C604.314 659.386 595.279 654.968 592.431 657.815C589.584 660.663 594.002 669.697 602.299 677.995C610.597 686.293 619.632 690.711 622.479 687.863Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M612.611 677.994C620.909 669.697 625.327 660.662 622.479 657.814C619.632 654.967 610.597 659.385 602.299 667.683C594.002 675.98 589.584 685.015 592.431 687.862C595.279 690.71 604.314 686.292 612.611 677.994Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                <path d="M1 161V64H217" stroke="white" stroke-width="2"/>
                <path d="M18.3018 36.5311C8.7464 36.5311 1.00016 28.7848 1.00016 19.2294C1.00016 9.67398 8.7464 1.92773 18.3018 1.92773C27.8573 1.92773 35.6035 9.67398 35.6035 19.2294C35.6035 28.7848 27.8573 36.5311 18.3018 36.5311Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
</div>

<?php get_footer(); ?>






