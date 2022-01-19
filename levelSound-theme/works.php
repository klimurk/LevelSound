
<?php
/*
* Template name: Работы
*/
get_header(); ?>

<svg style="display:none">
    <symbol id="player_play" viewBox="0 0 23 26">
        <path d="M1 0.875643L22 13L0.999999 25.1244L1 0.875643Z" />
    </symbol>
    <symbol id="player_sound_active" viewBox="0 0 22 26">
        <path d="M16 1.99988L8 8.99988H1V16.9999H8L16 23.9999V1.99988Z" />
        <path d="M18 9.99988C18.5 10.9999 19.2 13.5999 18 15.9999" />
        <path d="M20 9.49988C20.3333 10.4999 21 13.4999 20 16.4999" />
    </symbol>
    <symbol id="player_sound_deactive" viewBox="0 0 21 26">
        <path d="M16 2L8 9H1V17H8L16 24V2Z"  />
        <rect x="12" y="8" width="9" height="10" stroke="#ffffff" />
        <rect x="18.707" y="10" width="1" height="8" transform="rotate(45 18.707 10)" />
        <rect width="1" height="8" transform="matrix(-0.707107 0.707107 0.707107 0.707107 13.707 10)" />
    </symbol>

</svg>
<div class="works__video">
        <img src="<?= get_template_directory_uri( ).'/assets/images/works/texture.png'?>" alt="">
    <div class="container">
        <div class="works__video__title title_fullwidth"><?= pll_e( 'Portfolio title' ); ?></div>
        <div class="works__video__inner">

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video1 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video1 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video2 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video2 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video3 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video3 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video4 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video4 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video5 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video5 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video6 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video6 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video7 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video7 Name' ); ?></div>
            </div>

            <div class="works__video__item">
                <iframe class="works__video__item__video" src="<?= pll_e( 'Works Video8 Link' ); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
                <div class="works__video__item__name"><?= pll_e( 'Works Video8 Name' ); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="works__music">
    <div class="works__music__inner container" id="mainwrap">
        <div class="works__music__col_first">

            <div class="works__music__col_first first" id="audiowrap">
                <svg id="music_player_smile" viewBox="0 0 110 110" fill="none">
                    <path d="M69.0003 42.4444C72.3753 42.4444 75.1114 36.9724 75.1114 30.2222C75.1114 23.4721 72.3753 18 69.0003 18C65.6252 18 62.8892 23.4721 62.8892 30.2222C62.8892 36.9724 65.6252 42.4444 69.0003 42.4444Z" fill="black"/>
                    <path d="M40.4817 42.4444C43.8568 42.4444 46.5928 36.9724 46.5928 30.2222C46.5928 23.4721 43.8568 18 40.4817 18C37.1066 18 34.3706 23.4721 34.3706 30.2222C34.3706 36.9724 37.1066 42.4444 40.4817 42.4444Z" fill="black"/>
                    <path d="M90.8302 59.0255C87.5548 58.2977 84.6433 59.0255 84.2794 60.4813C83.9154 61.5731 85.0072 63.0288 86.8269 64.1206C81.3678 77.5863 68.994 86.3208 54.8005 86.3208C40.9709 86.3208 28.5971 77.5863 22.7741 64.4846C24.9577 63.3928 26.0495 61.937 25.6856 60.8452C25.3216 59.0255 22.4102 58.2976 19.1347 59.3894C15.8593 60.1173 13.6756 62.301 14.0395 63.7567C14.4035 64.8485 15.8592 65.5764 18.0429 65.5764C24.2298 81.2257 38.4233 91.052 54.4365 91.052C70.4497 91.052 84.6433 81.2257 90.8302 65.5764C93.0138 65.5764 94.8335 64.8485 95.1975 63.7567C96.2893 61.937 94.1056 59.7534 90.8302 59.0255Z" fill="black"/>
                    <circle cx="55" cy="55" r="53.5" stroke="black" stroke-width="3"/>
                </svg>
                <div id="audio0">
                    <audio id="audio1" preload controls>Your browser does not support HTML5 Audio!</audio>
                    <!-- <div id="tracks"> -->
                        <a id="btnPrev">
                            <svg  viewBox="0 0 20 20" >
                                <rect x="2" y="20" width="2" height="20" transform="rotate(-180 2 20)" fill="#EA0F0F" />
                                <path d="M1.31134e-06 10L15 1.33975L15 18.6603L1.31134e-06 10Z" />
                            </svg>
                        </a>
                        <a id="btnNext">
                            <svg  viewBox="0 0 20 20">
                                <rect x="18" width="2" height="20" fill="#EA0F0F" />
                                <path d="M20 10L5 18.6603L5 1.33974L20 10Z" />
                            </svg>
                        </a>
                    <!-- </div> -->
                </div>

            </div>

            <div class="works__music__col_first second"></div>
            <div class="works__music__col_first third" id="nowPlay"><span id="npTitle"></span></div>
            <div class="works__music__col_first fourth">
                    <div >
                            <span id="works_btmNum"></span>
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
                            <g id="gIntroAnim_Elipse1" >
                                    <path id="Vector_8" d="M13.9213 83.1415C6.14173 83.1415 0 76.7776 0 69.1819C0 61.5863 6.34646 55.2224 13.9213 55.2224C21.4961 55.2224 27.8425 61.5863 27.8425 69.1819C27.8425 76.7776 21.7008 83.1415 13.9213 83.1415ZM13.9213 57.4805C7.5748 57.4805 2.45669 62.6127 2.45669 68.9766C2.45669 75.3405 7.5748 80.4727 13.9213 80.4727C20.2677 80.4727 25.3858 75.3405 25.3858 68.9766C25.3858 62.6127 20.2677 57.4805 13.9213 57.4805Z"/>
                            </g>

                    </svg>
            </div>
            <div class="works__music__col_first fifth">
                    <svg id="works_svg_planet" viewBox="0 0 66 65">
                        <path d="M17.0833 15.7512C21.2984 17.0823 25.9573 17.7479 31.0599 17.9697V-0.000244141C25.2917 0.887162 20.1892 7.09902 17.0833 15.7512Z"  />
                        <path d="M31.2806 64.999V47.0291C26.178 47.2509 21.5191 47.9165 17.304 49.2476C19.9662 57.8998 25.2906 64.1116 31.2806 64.999Z"  />
                        <path d="M16.4171 46.3641C20.8541 45.033 25.9568 44.1457 31.2812 43.9238V34.8279H14.6423C14.8642 39.0431 15.3079 43.0363 16.4171 46.3641Z"  />
                        <path d="M14.6423 32.1714H31.2812V20.8569C25.9568 20.6351 20.8541 19.9695 16.4171 18.6384C15.3079 22.6318 14.6423 27.2906 14.6423 32.1714Z"  />
                        <path d="M22.1857 1.55249C16.4176 3.54915 11.5369 6.87692 7.76538 11.5358C9.76204 12.8669 11.9806 13.9762 14.4209 14.8636C16.4176 9.31729 19.0798 4.88026 22.1857 1.55249Z"  />
                        <path d="M13.5333 17.5231C10.6492 16.4139 8.20877 15.0828 5.99026 13.7517C2.21879 19.0761 0.000244141 25.288 0.000244141 32.1653H11.5365C11.7584 27.0628 12.424 21.9602 13.5333 17.5231Z"  />
                        <path d="M7.76538 53.4662C11.5369 57.9032 16.6394 61.4529 22.1857 63.4495C18.858 60.3436 16.1957 55.6847 14.4209 50.1384C11.9806 51.0258 9.76204 52.1351 7.76538 53.4662Z"  />
                        <path d="M53.4672 32.1653H65.2253C65.2253 25.288 63.0067 19.0761 59.2353 13.7517C57.0167 15.3047 54.3545 16.6357 51.4705 17.5231C52.8016 22.182 53.4672 27.0628 53.4672 32.1653Z"  />
                        <path d="M11.7587 35.0544H0.222412C0.666115 41.0444 2.88458 46.5907 5.9905 51.2496C8.20901 49.6966 10.6494 48.5873 13.5335 47.4781C12.6461 43.7066 11.9806 39.4915 11.7587 35.0544Z"  />
                        <path d="M51.4705 47.2516C54.3545 48.3608 57.0167 49.6919 59.2353 51.023C62.563 46.3641 64.5598 40.8179 65.0035 34.8279H53.2452C53.2452 39.4868 52.5797 43.4801 51.4705 47.2516Z"  />
                        <path d="M50.5823 35.0544H34.1653V44.1503C39.4897 44.3721 44.3704 45.0377 48.8074 46.3688C49.6948 43.041 50.3605 39.0478 50.5823 35.0544Z"  />
                        <path d="M34.1653 47.0291V64.999C40.1553 64.1116 45.2578 57.8998 48.1419 49.2476C43.9267 47.9165 39.046 47.2509 34.1653 47.0291Z"  />
                        <path d="M42.8171 63.4495C48.5853 61.4529 53.6878 58.1251 57.6811 53.4662C55.6844 52.1351 53.466 51.0258 50.8037 50.1384C48.8071 55.6847 46.1449 60.3436 42.8171 63.4495Z"  />
                        <path d="M57.4605 11.5358C53.689 6.87692 48.5864 3.3273 42.5964 1.55249C45.9242 4.65841 48.5865 9.31729 50.5832 14.8636C53.2454 13.9762 55.4638 12.8669 57.4605 11.5358Z"  />
                        <path d="M34.1653 -0.000244141V17.9697C39.2679 17.7479 43.9267 17.0823 48.1419 15.9731C45.036 7.09903 39.9334 0.887162 34.1653 -0.000244141Z"  />
                        <path d="M48.8074 18.6384C44.3704 19.9695 39.4897 20.8569 34.1653 20.8569V32.1714H50.5823C50.5823 27.2906 49.9167 22.6318 48.8074 18.6384Z"  />
                    </svg>
                    <svg class="round" viewBox="0 0 23 23" fill="none">
                        <use xlink:href="#round"></use>
                    </svg>

                    <div>
                        <span><?= pll_e( 'Portfolio player' ); ?></span>
                        <svg viewBox="0 0 641 23">
                            <path d="M183.112 0C179.604 0 176.095 0 172.586 0L159.429 22.8066H169.955L183.112 0Z"  />
                            <path d="M222.144 0C218.636 0 215.346 0 211.838 0L198.68 22.8066H208.987L222.144 0Z"  />
                            <path d="M201.532 0C198.681 0 196.049 0 193.198 0L180.041 22.8066H188.374L201.532 0Z"  />
                            <path d="M263.153 0C259.645 0 256.355 0 252.846 0L239.689 22.8066H249.996L263.153 0Z"  />
                            <path d="M282.014 0C279.163 0 276.312 0 273.462 0L260.304 22.8066H268.856L282.014 0Z"  />
                            <path d="M321.925 0C318.855 0 315.785 0 312.715 0L299.557 22.8066H308.767L321.925 0Z"  />
                            <path d="M302.627 0C299.118 0 295.829 0 292.32 0L279.162 22.8066H289.469L302.627 0Z"  />
                            <path d="M242.76 0C239.251 0 235.961 0 232.453 0L219.295 22.8066H229.602L242.76 0Z"  />
                            <path d="M0 22.8066H9.21042L22.3681 0C19.0787 0 16.0085 0 13.1577 0L0 22.8066Z"  />
                            <path d="M82.016 0C78.9459 0 75.8758 0 72.8057 0L59.6479 22.8066H68.8583L82.016 0Z"  />
                            <path d="M62.4984 0C58.9897 0 55.4809 0 52.1915 0L39.0338 22.8066H49.3407L62.4984 0Z"  />
                            <path d="M41.8866 0C38.5971 0 35.527 0 32.6761 0L19.5184 22.8066H28.7289L41.8866 0Z"  />
                            <path d="M101.532 0C98.4624 0 95.3923 0 92.3221 0L79.1644 22.8066H88.3748L101.532 0Z"  />
                            <path d="M141.446 0C138.595 0 135.525 0 132.674 0L119.516 22.8066H128.288L141.446 0Z"  />
                            <path d="M162.278 0C158.769 0 155.261 0 151.752 0L138.594 22.8066H149.12L162.278 0Z"  />
                            <path d="M122.367 0C118.858 0 115.349 0 111.841 0L98.6829 22.8066H109.209L122.367 0Z"  />
                            <path d="M342.539 0C339.03 0 335.741 0 332.232 0L319.074 22.8066H329.381L342.539 0Z"  />
                            <path d="M561.394 0C558.324 0 555.035 0 551.745 0L538.588 22.8066H548.237L561.394 0Z"  />
                            <path d="M581.351 0C578.281 0 574.992 0 571.703 0L558.545 22.8066H568.194L581.351 0Z"  />
                            <path d="M601.527 0C598.457 0 595.167 0 591.878 0L578.72 22.8066H588.369L601.527 0Z"  />
                            <path d="M541.221 0C537.931 0 534.861 0 531.572 0L518.414 22.8066H528.063L541.221 0Z"  />
                            <path d="M521.264 0C517.974 0 514.904 0 511.615 0L498.457 22.8066H508.106L521.264 0Z"  />
                            <path d="M621.482 0C618.631 0 615.342 0 611.833 0L598.675 22.8066H608.324L621.482 0Z"  />
                            <path d="M641 0C638.15 0 634.86 0 631.352 0L618.194 22.8066H627.843L641 0Z"  />
                            <path d="M361.838 0C358.768 0 355.917 0 352.847 0L339.69 22.8066H348.681L361.838 0Z"  />
                            <path d="M402.187 0C398.678 0 394.95 0 391.442 0L378.284 22.8066H389.029L402.187 0Z"  />
                            <path d="M381.134 0C378.064 0 375.214 0 372.143 0L358.986 22.8066H367.977L381.134 0Z"  />
                            <path d="M501.309 0C498.019 0 494.949 0 491.66 0L478.502 22.8066H488.151L501.309 0Z"  />
                            <path d="M421.484 0C418.414 0 415.563 0 412.493 0L399.336 22.8066H408.327L421.484 0Z"  />
                            <path d="M481.133 0C478.062 0 475.211 0 472.141 0L458.984 22.8066H467.975L481.133 0Z"  />
                            <path d="M461.835 0C458.765 0 455.914 0 452.844 0L439.687 22.8066H448.678L461.835 0Z"  />
                            <path d="M442.539 0C439.03 0 435.302 0 431.793 0L418.636 22.8066H429.381L442.539 0Z"  />
                        </svg>
                    </div>
                    <span>Level sound studio</span>


            </div>
        </div>
        <div class="works__music__col_second" id="plwrap">
            <ul class="works__music__col_second__item" id="plList"></ul>
        </div>
    </div>
</div>


<?php get_footer(); ?>