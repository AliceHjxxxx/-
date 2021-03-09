$(function () {
    var playerTrack = $("#player-track"),
        bgArtwork = $('#bg-artwork'),
        bgArtworkUrl, albumName = $('#album-name'),
        trackName = $('#track-name'),
        albumArt = $('#album-art'),
        sArea = $('#s-area'),
        seekBar = $('#seek-bar'),
        trackTime = $('#track-time'),
        insTime = $('#ins-time'),
        sHover = $('#s-hover'),
        playPauseButton = $("#play-pause-button"),
        i = playPauseButton.find('i'),
        tProgress = $('#current-time'),
        tTime = $('#track-length'),
        seekT, seekLoc, seekBarPos, cM, ctMinutes, ctSeconds, curMinutes, curSeconds, durMinutes, durSeconds, playProgress, bTime, nTime = 0,
        buffInterval = null,
        tFlag = false,
        albums = ['圣所', '伟大的渺小', '穿越', '四点四十四', '我继续', '剪云者', '黑夜问白天', '丹宁执着', '身为风帆', '小瓶子', 'Until The Day'],
        trackNames = ['林俊杰 - 圣所', '林俊杰 - 伟大的渺小', '林俊杰 - 穿越', '林俊杰 - 四点四十四', '林俊杰 - 我继续'
            , '林俊杰 - 剪云者', '林俊杰 - 黑夜问白天', '林俊杰 - 丹宁执着', '林俊杰 - 身为风帆', '林俊杰 - 小瓶子', '林俊杰 - Until The Day'],
        albumArtworks = ['_1', '_1', '_1', '_1', '_1', '_1', '_1', '_1', '_1', '_1', '_1'],
        trackUrl = ['../image/player/1.mp3', '../image/player/2.mp3', '../image/player/3.mp3', '../image/player/4.mp3', '../image/player/5.mp3',
            '../image/player/6.mp3', '../image/player/7.mp3', '../image/player/8.mp3', '../image/player/9.mp3', '../image/player/10.mp3', '../image/player/11.mp3'],
        playPreviousTrackButton = $('#play-previous'),
        playNextTrackButton = $('#play-next'),
        test = -1,
        currIndex = -1;
    function playPause() {
        setTimeout(function () {
            if (audio.paused) {
                playerTrack.addClass('active');
                albumArt.addClass('active');
                checkBuffering();
                i.attr('class', 'fa fa-pause');
                audio.play();
            } else {
                playerTrack.removeClass('active');
                albumArt.removeClass('active');
                clearInterval(buffInterval);
                albumArt.removeClass('buffering');
                i.attr('class', 'fa fa-play');
                audio.pause();
            }
        }, 300);
    }


    function showHover(event) {
        seekBarPos = sArea.offset();
        seekT = event.clientX - seekBarPos.left;
        seekLoc = audio.duration * (seekT / sArea.outerWidth());

        sHover.width(seekT);

        cM = seekLoc / 60;

        ctMinutes = Math.floor(cM);
        ctSeconds = Math.floor(seekLoc - ctMinutes * 60);

        if ((ctMinutes < 0) || (ctSeconds < 0))
            return;

        if ((ctMinutes < 0) || (ctSeconds < 0))
            return;

        if (ctMinutes < 10)
            ctMinutes = '0' + ctMinutes;
        if (ctSeconds < 10)
            ctSeconds = '0' + ctSeconds;

        if (isNaN(ctMinutes) || isNaN(ctSeconds))
            insTime.text('--:--');
        else
            insTime.text(ctMinutes + ':' + ctSeconds);

        insTime.css({
            'left': seekT,
            'margin-left': '-21px'
        }).fadeIn(0);

    }

    function hideHover() {
        sHover.width(0);
        insTime.text('00:00').css({
            'left': '0px',
            'margin-left': '0px'
        }).fadeOut(0);
    }

    function playFromClickedPos() {
        audio.currentTime = seekLoc;
        seekBar.width(seekT);
        hideHover();
    }

    function updateCurrTime() {
        nTime = new Date();
        nTime = nTime.getTime();

        if (!tFlag) {
            tFlag = true;
            trackTime.addClass('active');
        }

        curMinutes = Math.floor(audio.currentTime / 60);
        curSeconds = Math.floor(audio.currentTime - curMinutes * 60);

        durMinutes = Math.floor(audio.duration / 60);
        durSeconds = Math.floor(audio.duration - durMinutes * 60);

        playProgress = (audio.currentTime / audio.duration) * 100;

        if (curMinutes < 10)
            curMinutes = '0' + curMinutes;
        if (curSeconds < 10)
            curSeconds = '0' + curSeconds;

        if (durMinutes < 10)
            durMinutes = '0' + durMinutes;
        if (durSeconds < 10)
            durSeconds = '0' + durSeconds;

        if (isNaN(curMinutes) || isNaN(curSeconds))
            tProgress.text('00:00');
        else
            tProgress.text(curMinutes + ':' + curSeconds);

        if (isNaN(durMinutes) || isNaN(durSeconds))
            tTime.text('00:00');
        else
            tTime.text(durMinutes + ':' + durSeconds);

        if (isNaN(curMinutes) || isNaN(curSeconds) || isNaN(durMinutes) || isNaN(durSeconds))
            trackTime.removeClass('active');
        else
            trackTime.addClass('active');


        seekBar.width(playProgress + '%');

        if (playProgress == 100) {
            i.attr('class', 'fa fa-play');
            seekBar.width(0);
            tProgress.text('00:00');
            albumArt.removeClass('buffering').removeClass('active');
            clearInterval(buffInterval);
        }
    }

    function checkBuffering() {
        clearInterval(buffInterval);
        buffInterval = setInterval(function () {
            if ((nTime == 0) || (bTime - nTime) > 1000)
                albumArt.addClass('buffering');
            else
                albumArt.removeClass('buffering');

            bTime = new Date();
            bTime = bTime.getTime();

        }, 100);
    }

    function selectTrack(flag) {
        if (flag == 0 || flag == 1) {
            if (test == 11) {
                currIndex = 0;
                test = -1;

            }
            else if (test == 1) {

                currIndex = 1;
                test = -1;

            }
            else if (test == 2) {

                currIndex = 2;
                test = -1;

            }
            else if (test == 3) {

                currIndex = 3;
                test = -1;

            }
            else if (test == 4) {

                currIndex = 4;
                test = -1;

            }
            else if (test == 5) {

                currIndex = 5;
                test = -1;

            }
            else if (test == 6) {

                currIndex = 6;
                test = -1;

            }
            else if (test == 7) {

                currIndex = 7;
                test = -1;

            }
            else if (test == 8) {

                currIndex = 8;
                test = -1;

            }
            else if (test == 9) {

                currIndex = 9;
                test = -1;

            }
            else if (test == 10) {

                currIndex = 10;
                test = -1;

            }
            else if (currIndex == 10) {
                currIndex = 0;
            }

            else {
                ++currIndex;
            }

        }
        else
        { 
            if(currIndex==0)
            {
                currIndex=10;

            }
            else
            {
               --currIndex;
            }
          }
        if ((currIndex > -1) && (currIndex < albumArtworks.length)) {
            if (flag == 0)
                i.attr('class', 'fa fa-play');
            else {
                albumArt.removeClass('buffering');
                i.attr('class', 'fa fa-pause');
            }

            seekBar.width(0);
            trackTime.removeClass('active');
            tProgress.text('00:00');
            currAlbum = albums[currIndex];
            currTrackName = trackNames[currIndex];
            currArtwork = albumArtworks[currIndex];
            audio.src = trackUrl[currIndex];
            nTime = 0;
            bTime = new Date();
            bTime = bTime.getTime();

            if (flag != 0) {
                audio.play();
                playerTrack.addClass('active');
                albumArt.addClass('active');
                clearInterval(buffInterval);
                checkBuffering();
            }

            albumName.text(currAlbum);
            trackName.text(currTrackName);
            albumArt.find('img.active').removeClass('active');
            $('#' + currArtwork).addClass('active');

            bgArtworkUrl = $('#' + currArtwork).attr('src');

            bgArtwork.css({
                'background-image': 'url(' + bgArtworkUrl + ')'
            });
        } else {
            if (flag == 0 || flag == 1)
                --currIndex;
            else
                ++currIndex;
        }
    }

    function initPlayer() {
        audio = new Audio();

        selectTrack(0);

        audio.loop = false;

        playPauseButton.on('click', playPause);

        sArea.mousemove(function (event) {
            showHover(event);
        });

        sArea.mouseout(hideHover);

        sArea.on('click', playFromClickedPos);

        $(audio).on('timeupdate', updateCurrTime);

        playPreviousTrackButton.on('click', function () {
            selectTrack(-1);
        });
        playNextTrackButton.on('click', function () {
            selectTrack(1);
        });
        $("input[type='button']").bind('click', function () {
            if ($(this).attr("var") == "11") {
                test = 11;
                selectTrack(1);
            }
            if ($(this).attr("var") == "1") {
                test = 1;
                selectTrack(1);
            }
            if ($(this).attr("var") == "2") {
                test = 2;
                selectTrack(1);
            }
            if ($(this).attr("var") == "3") {
                test = 3;
                selectTrack(1);
            }
            if ($(this).attr("var") == "4") {
                test = 4;
                selectTrack(1);
            }
            if ($(this).attr("var") == "5") {
                test = 5;
                selectTrack(1);
            }
            if ($(this).attr("var") == "6") {
                test = 6;
                selectTrack(1);
            }
   
            if ($(this).attr("var") == "7") {
                test = 7;
                selectTrack(1);
            }
            if ($(this).attr("var") == "8") {
                test = 8;
                selectTrack(1);
            }
            if ($(this).attr("var") == "9") {
                test = 9;
                selectTrack(1);
            }
            if ($(this).attr("var") == "10") {
                test = 10;
                selectTrack(1);
            }

        });

    }

    initPlayer();
});



