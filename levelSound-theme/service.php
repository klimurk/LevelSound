
<?php
/*
* Template name: Услуги
*/
get_header(); ?>

<svg style="display:none">
    <symbol viewBox="0 0 134 95" id='service_planet'>
        <path d="M133.134 47.3414C133.134 22.4591 105.963 2.10086 71.6209 0.404334C70.1114 0.215832 68.6019 0.21582 66.9037 0.21582C65.2055 0.21582 63.6959 0.215832 62.1864 0.404334C27.8446 2.10086 0.484375 22.6476 0.484375 47.3414C0.484375 72.2238 27.6559 92.582 62.1864 94.2785C63.6959 94.467 65.2055 94.4671 66.9037 94.4671C68.6019 94.4671 70.1114 94.467 71.6209 94.2785C105.774 92.7705 133.134 72.2238 133.134 47.3414ZM130.115 45.8334H116.341C115.775 29.4337 106.529 15.296 92.7544 7.19041C114.076 13.9765 129.172 28.6797 130.115 45.8334ZM65.3941 25.4751C65.3941 36.7853 56.1483 45.8334 45.0155 45.8334H39.5434C40.1095 23.5901 51.431 5.4939 65.3941 4.17438V25.4751ZM45.2042 49.0379C56.337 49.2265 65.3941 58.2746 65.3941 69.3962V91.2625C51.2423 89.943 39.9208 71.6583 39.5434 48.8495H45.2042V49.0379ZM68.2245 69.3962C68.2245 58.0861 77.2817 49.0379 88.4145 49.0379H94.2639C93.8865 71.8467 82.3764 90.32 68.0358 91.451V69.3962H68.2245ZM88.7918 45.8334C77.4704 45.8334 68.4132 36.5968 68.4132 25.4751V4.17438C82.565 5.3054 93.8865 23.4016 94.6413 45.8334H88.7918ZM36.5244 45.8334H20.4857H20.297C21.0517 25.8521 35.7696 9.26394 55.3935 4.55138C44.8268 11.3375 37.0905 27.1717 36.5244 45.8334ZM36.5244 49.0379C36.9018 67.1342 43.8834 82.5914 53.884 89.943C35.0149 84.6649 21.0517 68.4537 20.4857 49.0379H36.5244ZM97.4716 49.0379H113.322C112.567 68.2652 98.9812 84.4764 80.3007 89.7545C90.3014 82.4029 97.0943 66.9457 97.4716 49.0379ZM113.133 45.8334H97.4716C96.9056 27.1717 89.3579 11.3375 78.6025 4.55138C98.0377 9.45245 112.567 26.0407 113.133 45.8334ZM40.8643 7.19041C27.0898 15.296 17.844 29.4337 17.2779 45.8334H3.50345C4.4469 28.6797 19.5422 13.9765 40.8643 7.19041ZM3.69212 49.0379H17.4666C18.0327 65.4377 27.2785 79.5753 41.053 87.681C19.5422 80.8949 4.44688 66.1917 3.69212 49.0379ZM92.7544 87.681C106.529 79.5753 115.775 65.4377 116.341 49.0379H130.115C129.172 66.1917 114.076 80.8949 92.7544 87.681Z" />
    </symbol>
    <symbol viewBox="0 0 1298 67" id='service_starline'>
        <path d="M34.5799 17.5944V0.292236L32.4599 0.292236V17.5944C32.4599 25.6384 25.9486 32.3164 17.7715 32.3164H0.357422L0.357422 34.593H17.7715C25.7971 34.593 32.4599 41.1193 32.4599 49.315L32.4599 66.6172H34.5799L34.5799 49.1632C34.5799 41.1193 41.0912 34.4412 49.2683 34.4412L1298 34.4412V32.1646L49.2683 32.1646C41.0912 32.3164 34.5799 25.7902 34.5799 17.5944Z" fill="white"/>
    </symbol>
    <symbol id="service_arrow"  viewBox="0 0 30 30">
        <path d="M-2.42313e-07 24.4565L16.129 8.15217L0.64516 7.82609L8.3871 1.54074e-06L30 5.96007e-07L30 22.1739L22.2581 30L21.9355 13.0435L5.48387 30L-2.42313e-07 24.4565Z" />
    </symbol>

</svg>


<div class="service ">
    <div class="service__description">
        <div><?= pll_e( 'Service service title' ); ?></div>
        <?= pll_e( 'Service service text' ); ?>
    </div>
    <ul class="service__list">
        <li class="service__list__item">
            <div class="service__list__item__global">
                <div class="service__list__item__global_col col1">
                    <div class="service__list__item__global_col_name">
                    <?= pll_e( 'Service service1 title' ); ?>
                        <svg viewBox="0 0 50 50">
                            <use xlink:href="#introStar"></use>
                        </svg>
                    </div>
                    <div class="service__list__item__global_col_num">
                        <span class="service__list__item__global_col_num Topnum"></span>
                        <br/>
                        <span class="service__list__item__global_col_num Btmnum"></span>
                    </div>
                    <div class="service__list__item__global_col_decor" >
                        <div>
                            <div style="height:100%; width:2px; left:16.666%"></div>
                            <div style="height:100%; width:2px; left:33.333%"></div>
                            <div style="height:100%; width:2px; left:50%"></div>
                            <div style="height:100%; width:2px; left:66.666%"></div>
                            <div style="height:100%; width:2px; left:83.333%"></div>

                            <div style="width:100%; height:2px; top:25%"></div>
                            <div style="width:100%; height:2px; top:50%"></div>
                            <div style="width:100%; height:2px; top:75%"></div>

                            <div style="height:17%; width:14%; top:66%; left:10.666%; border-radius: 50%;"></div>
                            <div style="height:17%; width:14%; top:17%; left:60.666%; border-radius: 50%;"></div>
                        </div>
                    </div>
                    <svg class="service__list__item__global_col_planet" viewBox="0 0 134 95">
                        <use xlink:href="#service_planet"></use>
                    </svg>
                    <svg class="service__list__item__global_col_starline" viewBox="0 0 1298 67" >
                        <use xlink:href="#service_starline"></use>
                    </svg>
                </div>
                <div class="service__list__item__global_col col2">
                <svg class="service__list__item__global_col_round"  viewBox="0 0 23 23" fill="none" >
                        <path d="M11.2497 21.3619C16.809 21.3619 21.3158 16.8551 21.3158 11.2958C21.3158 5.73649 16.809 1.22974 11.2497 1.22974C5.69034 1.22974 1.18359 5.73649 1.18359 11.2958C1.18359 16.8551 5.69034 21.3619 11.2497 21.3619Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                    <svg class="service__list__item__global_col_mobileanim" viewBox="0 0 208 132" fill="none">
                        <g id="gIntroAnim_Rec7">
                                <path id="Vector" d="M208 45.5739H179.339V132.205H208V45.5739Z"   />
                        </g>
                        <g id="gIntroAnim_Rec6">
                                <path id="Vector_2" d="M178.11 66.9238H149.449V132H178.11V66.9238Z"   />
                        </g>
                        <g id="gIntroAnim_Rec5">
                                <path id="Vector_3" d="M147.811 103.876H119.15V132H147.811V103.876Z"   />
                        </g>
                        <g id="gIntroAnim_Rec4">
                                <path id="Vector_4" d="M118.126 98.5381H89.4645V132H118.126V98.5381Z"   />
                        </g>
                        <g id="gIntroAnim_Rec3">
                                <path id="Vector_5" d="M88.441 104.902H59.7795V132H88.441V104.902Z"   />
                        </g>
                        <g id="gIntroAnim_Rec2">
                                <path id="Vector_6" d="M58.5513 117.014H29.8898V132H58.5513V117.014Z"   />
                        </g>
                        <g id="gIntroAnim_Rec1">
                                <path id="Vector_7" d="M28.8663 121.325H0.204834V132H28.8663V121.325Z" />
                        </g>
                        <!-- <g id="gIntroAnim_Elipse1">
                                <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z" fill="#EA0F0F" />
                        </g> -->
                    </svg>
                    <div class="service__list__item__global_col_open">
                        <button id="service_btn_1" class="service__list__item__global_col_open_btn">
                            <span class="service__list__item__global_col_open_btn_text open">
                                <?= pll_e( 'Service open' ); ?>
                            </span>
                            <span class="service__list__item__global_col_open_btn_text close">
                                <?= pll_e( 'Service close' ); ?>
                            </span>
                            <svg>
                                <use xlink:href="#nav_arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="service_list_1" class="service__list__item__service">
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/5.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service12 name' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service12 price' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                               if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                               if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                               if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Trackrecord">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/1.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service1 service1' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service1 price1' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn' href="<?php
                                        if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                        if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                        if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Record_1">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/2.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service2 service1' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service2 price1' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                             if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                             if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                             if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Mixing_1">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/3.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service2 service2' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service2 price2' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                             if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                             if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                             if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Mixing_2">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/4.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service3 service1' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service3 price1' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                        <a class='service__list__item__service__item__order_btn'
                        href="<?php
                                     if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                     if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                     if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Mastering_1">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>

            </ul>
        </li>
        <li class="service__list__item">
            <div class="service__list__item__global">
                <div class="service__list__item__global_col col1">
                    <div class="service__list__item__global_col_name">

                    <?= pll_e( 'Service service4 title' ); ?>

                    </div>
                    <div class="service__list__item__global_col_decor" >
                        <div>
                            <div style="height:100%; width:2px; left:16.666%"></div>
                            <div style="height:100%; width:2px; left:33.333%"></div>
                            <div style="height:100%; width:2px; left:50%"></div>
                            <div style="height:100%; width:2px; left:66.666%"></div>
                            <div style="height:100%; width:2px; left:83.333%"></div>

                            <div style="width:100%; height:2px; top:25%"></div>
                            <div style="width:100%; height:2px; top:50%"></div>
                            <div style="width:100%; height:2px; top:75%"></div>

                            <div style="height:17%; width:14%; top:66%; left:10.666%; border-radius: 50%;"></div>
                            <div style="height:17%; width:14%; top:17%; left:60.666%; border-radius: 50%;"></div>
                        </div>
                    </div>
                    <svg class="service__list__item__global_col_planet" viewBox="0 0 134 95">
                        <use xlink:href="#service_planet"></use>
                    </svg>
                    <svg class="service__list__item__global_col_starline" viewBox="0 0 1298 67" >
                        <use xlink:href="#service_starline"></use>
                    </svg>
                </div>
                <div class="service__list__item__global_col col2">
                <svg class="service__list__item__global_col_round"  viewBox="0 0 23 23" fill="none" >
                        <path d="M11.2497 21.3619C16.809 21.3619 21.3158 16.8551 21.3158 11.2958C21.3158 5.73649 16.809 1.22974 11.2497 1.22974C5.69034 1.22974 1.18359 5.73649 1.18359 11.2958C1.18359 16.8551 5.69034 21.3619 11.2497 21.3619Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                    <svg class="service__list__item__global_col_mobileanim" viewBox="0 0 208 132" fill="none">
                        <g id="gIntroAnim_Rec7">
                                <path id="Vector" d="M208 45.5739H179.339V132.205H208V45.5739Z"   />
                        </g>
                        <g id="gIntroAnim_Rec6">
                                <path id="Vector_2" d="M178.11 66.9238H149.449V132H178.11V66.9238Z"   />
                        </g>
                        <g id="gIntroAnim_Rec5">
                                <path id="Vector_3" d="M147.811 103.876H119.15V132H147.811V103.876Z"   />
                        </g>
                        <g id="gIntroAnim_Rec4">
                                <path id="Vector_4" d="M118.126 98.5381H89.4645V132H118.126V98.5381Z"   />
                        </g>
                        <g id="gIntroAnim_Rec3">
                                <path id="Vector_5" d="M88.441 104.902H59.7795V132H88.441V104.902Z"   />
                        </g>
                        <g id="gIntroAnim_Rec2">
                                <path id="Vector_6" d="M58.5513 117.014H29.8898V132H58.5513V117.014Z"   />
                        </g>
                        <g id="gIntroAnim_Rec1">
                                <path id="Vector_7" d="M28.8663 121.325H0.204834V132H28.8663V121.325Z" />
                        </g>
                        <!-- <g id="gIntroAnim_Elipse1">
                                <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z" fill="#EA0F0F" />
                        </g> -->
                    </svg>
                    <div class="service__list__item__global_col_open">
                        <button id="service_btn_2" class="service__list__item__global_col_open_btn">
                        <span class="service__list__item__global_col_open_btn_text open">
                                <?= pll_e( 'Service open' ); ?>
                            </span>
                            <span class="service__list__item__global_col_open_btn_text close">
                                <?= pll_e( 'Service close' ); ?>
                            </span>
                            <svg>
                                <use xlink:href="#nav_arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="service_list_2" class="service__list__item__service">
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/5.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service3 service2' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service3 price2' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                       if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                       if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                       if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Mastering_2">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/6.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service4 service1' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service4 price1' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                                if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                ?>?Starts_1">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/7.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service4 service2' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service4 price2' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                       if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                       if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                       if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Starts_2">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/8.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service4 service3' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service4 price3' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                                if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Starts_3">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
        <li class="service__list__item">
            <div class="service__list__item__global">
                <div class="service__list__item__global_col col1">
                    <div class="service__list__item__global_col_name">

                    <?= pll_e( 'Service service5 title' ); ?>
                        <svg viewBox="0 0 50 50">
                            <use xlink:href="#introStar"></use>
                        </svg>
                    </div>
                    <div class="service__list__item__global_col_num">
                        <span class="service__list__item__global_col_num Topnum"></span>
                        <br/>
                        <span class="service__list__item__global_col_num Btmnum"></span>
                    </div>
                    <div class="service__list__item__global_col_decor" >
                        <div>
                            <div style="height:100%; width:2px; left:16.666%"></div>
                            <div style="height:100%; width:2px; left:33.333%"></div>
                            <div style="height:100%; width:2px; left:50%"></div>
                            <div style="height:100%; width:2px; left:66.666%"></div>
                            <div style="height:100%; width:2px; left:83.333%"></div>

                            <div style="width:100%; height:2px; top:25%"></div>
                            <div style="width:100%; height:2px; top:50%"></div>
                            <div style="width:100%; height:2px; top:75%"></div>

                            <div style="height:17%; width:14%; top:66%; left:10.666%; border-radius: 50%;"></div>
                            <div style="height:17%; width:14%; top:17%; left:60.666%; border-radius: 50%;"></div>
                        </div>
                    </div>
                    <svg class="service__list__item__global_col_planet" viewBox="0 0 134 95">
                        <use xlink:href="#service_planet"></use>
                    </svg>
                    <svg class="service__list__item__global_col_starline" viewBox="0 0 1298 67" >
                        <use xlink:href="#service_starline"></use>
                    </svg>
                </div>
                <div class="service__list__item__global_col col2">
                    <svg class="service__list__item__global_col_round"  viewBox="0 0 23 23" fill="none" >
                        <path d="M11.2497 21.3619C16.809 21.3619 21.3158 16.8551 21.3158 11.2958C21.3158 5.73649 16.809 1.22974 11.2497 1.22974C5.69034 1.22974 1.18359 5.73649 1.18359 11.2958C1.18359 16.8551 5.69034 21.3619 11.2497 21.3619Z" stroke="white" stroke-width="2" stroke-miterlimit="10"/>
                    </svg>
                    <svg class="service__list__item__global_col_mobileanim" viewBox="0 0 208 132" fill="none">
                        <g id="gIntroAnim_Rec7">
                                <path id="Vector" d="M208 45.5739H179.339V132.205H208V45.5739Z"   />
                        </g>
                        <g id="gIntroAnim_Rec6">
                                <path id="Vector_2" d="M178.11 66.9238H149.449V132H178.11V66.9238Z"   />
                        </g>
                        <g id="gIntroAnim_Rec5">
                                <path id="Vector_3" d="M147.811 103.876H119.15V132H147.811V103.876Z"   />
                        </g>
                        <g id="gIntroAnim_Rec4">
                                <path id="Vector_4" d="M118.126 98.5381H89.4645V132H118.126V98.5381Z"   />
                        </g>
                        <g id="gIntroAnim_Rec3">
                                <path id="Vector_5" d="M88.441 104.902H59.7795V132H88.441V104.902Z"   />
                        </g>
                        <g id="gIntroAnim_Rec2">
                                <path id="Vector_6" d="M58.5513 117.014H29.8898V132H58.5513V117.014Z"   />
                        </g>
                        <g id="gIntroAnim_Rec1">
                                <path id="Vector_7" d="M28.8663 121.325H0.204834V132H28.8663V121.325Z" />
                        </g>
                        <!-- <g id="gIntroAnim_Elipse1">
                                <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z" fill="#EA0F0F" />
                        </g> -->
                    </svg>
                    <div class="service__list__item__global_col_open">
                        <button id="service_btn_3" class="service__list__item__global_col_open_btn">
                            <span class="service__list__item__global_col_open_btn_text open">
                                <?= pll_e( 'Service open' ); ?>
                            </span>
                            <span class="service__list__item__global_col_open_btn_text close">
                                <?= pll_e( 'Service close' ); ?>
                            </span>
                            <svg>
                                <use xlink:href="#nav_arrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <ul id="service_list_3" class="service__list__item__service">
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/9.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service5 service1' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service5 price1' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                                    if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                    if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                    if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                        ?>?Training_1">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/10.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service5 service2' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service5 price2' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                                if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                                if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                                if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                                ?>?Training_2">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
                <li class="service__list__item__service__item">
                    <div class="service__list__item__service__item__description">
                        <img src="<?= get_template_directory_uri( ).'/assets/images/service/2.png'?>">
                        <div class="service__list__item__service__item__description_name">
                            <?= pll_e( 'Service service5 service3' ); ?>
                        </div>
                        <div class="service__list__item__service__item__description_price">
                            <?= pll_e( 'Service service5 price3' ); ?>
                        </div>
                        <svg class="service__list__item__service__item__description_svg">
                            <use xlink:href="#service_arrow" ></use>
                        </svg>
                    </div>
                    <div class="service__list__item__service__item__order">
                    <a class='service__list__item__service__item__order_btn'
                    href="<?php
                              if (pll_current_language() == 'ru') {echo get_permalink( 62 );}
                              if (pll_current_language() == 'ua') {echo get_permalink( 64 );}
                              if (pll_current_language() == 'en') {echo  get_permalink( 66 );}
                            ?>?Training_3">
                            <?= pll_e( 'Service order' ); ?>
                        </a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>


</div>



<?php get_footer(); ?>