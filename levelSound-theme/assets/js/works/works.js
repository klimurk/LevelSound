// Mythium Archive: https://archive.org/details/mythium/
$(document).ready(function() {
    if (window.innerWidth < 1024) {
        $('#npTitle').detach().appendTo($('.works__music__col_first').filter('.first'));
        $('#npTitle').insertAfter($('#music_player_smile'));
    }
});

$(window).resize(function() {
    if (window.innerWidth < 1024) {
        $('#npTitle').detach().appendTo($('.works__music__col_first').filter('.first'));
        $('#npTitle').insertAfter($('#music_player_smile'));
    } else {
        $('#npTitle').detach().appendTo($('.works__music__col_first').filter('.third'));
    }
});

jQuery(function($) {
    'use strict'
    var supportsAudio = !!document.createElement('audio').canPlayType;
    if (supportsAudio) {
        // initialize plyr
        var player = new Plyr('#audio1', {
            controls: [
                'progress',
                'play',
                'current-time',
                'duration',
                'mute',
                'volume'
            ]
        });
        var index = 0,
            playing = false,
            mediaPath = 'https://intest.levelsound.com.ua/wp-content/themes/levelSound-theme/assets/music/',
            extension = '',
            tracks = [{
                "track": 1,
                "name": "Фир & Tof - Васап (Fir.Prod)",
                "duration": "2:05",
                "file": "Фир & Tof - Васап"
            }, {
                "track": 2,
                "name": "The Jealous & JamesHot - Паци шуму навели",
                "duration": "2:33",
                "file": "The Jealous & JamesHot - Паци шуму навели"
            }, {
                "track": 3,
                "name": "5ARCASM & KrazyRaf & PÖ - LINW",
                "duration": "2:54",
                "file": "5ARCASM & KrazyRaf & PÖ - LINW"
            }, {
                "track": 4,
                "name": "TriaGear & PÖ & KrazyRaf - Take me there",
                "duration": "3:30",
                "file": "TriaGear & PÖ & KrazyRaf - Take me there"
            }, {
                "track": 5,
                "name": "Franko",
                "duration": "1:27",
                "file": "Franko"
            }, {
                "track": 6,
                "name": "James Hot - Virsh",
                "duration": "1:30",
                "file": "James Hot - Virsh"
            }, {
                "track": 7,
                "name": "Wavy Dem - Hidden Gem",
                "duration": "1:02",
                "file": "Wavy Dem - Hidden Gem"
            }],
            buildPlaylist = $.each(tracks, function(key, value) {
                var trackNumber = value.track,
                    trackName = value.name,
                    trackDuration = value.duration;
                if (trackNumber.toString().length === 1) {
                    trackNumber = '0' + trackNumber;
                }
                $('#plList').append('<li> \
                    <div class="plItem"> \
                        <span class="plTitle">' + trackName + '</span> \
                    </div> \
                </li>');
            }),

            // <span class="plNum">' + trackNumber + '.</span> \
            // <span class="plLength">' + trackDuration + '</span> \

            trackCount = tracks.length,
            npAction = $('#npAction'),
            npTitle = $('#npTitle'),
            audio = $('#audio1')
            .on('play', function() {
                playing = true;
                npAction.text('Now Playing...');
                $('#music_player_smile').css('animation-play-state', 'running');
                $('.plyr__controls__item').filter('.plyr__control').find('svg').css('fill', '#EA0F0F');
            })
            .on('pause', function() {
                playing = false;
                npAction.text('Paused...');
                $('#music_player_smile').css('animation-play-state', 'paused');
                $('.plyr__controls__item').filter('.plyr__control').find('svg').css('fill', '#fff');
            })
            .on('ended', function() {
                npAction.text('Paused...');
                $('#music_player_smile').css('animation-play-state', 'paused');
                $('.plyr__controls__item').filter('.plyr__control').find('svg').css('fill', '#fff');
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    audio.play();
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            })
            .get(0),
            btnPrev = $('#btnPrev').on('click', function() {
                if ((index - 1) > -1) {
                    index--;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            btnNext = $('#btnNext').on('click', function() {
                if ((index + 1) < trackCount) {
                    index++;
                    loadTrack(index);
                    if (playing) {
                        audio.play();
                    }
                } else {
                    audio.pause();
                    index = 0;
                    loadTrack(index);
                }
            }),
            li = $('#plList li').on('click', function() {
                var id = parseInt($(this).index());
                if (id !== index) {
                    playTrack(id);
                }
            }),
            loadTrack = function(id) {
                $('.plSel').removeClass('plSel');
                $('#plList li:eq(' + id + ')').addClass('plSel');
                npTitle.text(tracks[id].name);
                index = id;
                audio.src = mediaPath + tracks[id].file + extension;
                updateDownload(id, audio.src);

                playerHorizontalTextScroll();
            },
            updateDownload = function(id, source) {
                player.on('loadedmetadata', function() {
                    $('a[data-plyr="download"]').attr('href', source);
                });
            },
            playTrack = function(id) {
                loadTrack(id);
                audio.play();
            };
        extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';
        loadTrack(index);

        // !added ->

        $('.plyr__controls__item').filter('.plyr__control').find('.icon--not-pressed').find('use').attr("href", "#player_play");
        $('.plyr__controls__item').filter('.plyr__volume').find('.icon--not-pressed').find('use').attr("href", "#player_sound_active");
        $('.plyr__controls__item').filter('.plyr__volume').find('.icon--pressed').find('use').attr("href", "#player_sound_deactive");
        playerHorizontalTextScroll();
        //  !added <-
    } else {
        // no audio support
        $('.column').addClass('hidden');
        var noSupport = $('#audio1').text();
        $('.container').append('<p class="no-support">' + noSupport + '</p>');
    }
});


function playerHorizontalTextScroll() {
    if (
        ((parseFloat($('#npTitle').css('width')) > parseFloat($('.works__music__col_first').filter('.third').css('width'))) && (window.innerWidth > 1024)) ||
        ((parseFloat($('#npTitle').css('width')) > parseFloat($('.works__music__col_first').filter('.first').css('width'))) && (window.innerWidth <= 1024))
    ) {
        if (window.innerWidth > 1024) {
            root.style.setProperty('--works-player-text-size', $('.works__music__col_first').filter('.third').css('width'));
        } else {
            // root.style.setProperty('---works-player-text-size', $('.works__music__col_first').filter('.first').css('width'));
            root.style.setProperty('---works-player-text-size', 45);
        }
        $('#npTitle').css({ animation: 'playerTextHorizontal 15s linear 1s infinite' });
    } else {
        $('#npTitle').css({ animation: 'none' });
    }
}