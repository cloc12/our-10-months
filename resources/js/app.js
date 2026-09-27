import '@hotwired/turbo';


function initializeGiftWebsite() {

    setupMobileNavigation();
    setupPasscodeInput();
    setupMusicPlayer();
    setupMemoryReveal();
    setupRelationshipQuiz();
    setupLoveReasons();

}


document.addEventListener(
    'turbo:load',
    initializeGiftWebsite
);


function setupMobileNavigation() {

    const button = document.getElementById('mobileMenuButton');
    const menu = document.getElementById('navMenu');

    if (!button || !menu) {
        return;
    }

    button.addEventListener('click', () => {

        menu.classList.toggle('show');

    });

}


function setupPasscodeInput() {

    const passcode = document.getElementById('passcode');

    if (!passcode) {
        return;
    }

    passcode.addEventListener('input', (event) => {

        let value = event.target.value.replace(/\D/g, '');

        value = value.substring(0, 8);

        if (value.length >= 5) {

            value =
                value.substring(0, 2) +
                '/' +
                value.substring(2, 4) +
                '/' +
                value.substring(4);

        } else if (value.length >= 3) {

            value =
                value.substring(0, 2) +
                '/' +
                value.substring(2);

        }

        event.target.value = value;

    });

}

function setupMusicPlayer() {

    const player =
        document.getElementById('musicPlayer');


    if (!player) {
        return;
    }


    if (
        player.dataset.musicInitialized === 'true'
    ) {
        return;
    }

    const toggle =
        document.getElementById('musicToggle');

    const close =
        document.getElementById('closeMusic');

    const audio =
        document.getElementById('backgroundMusic');

    const playPause =
        document.getElementById('playPause');

    const previous =
        document.getElementById('previousSong');

    const next =
        document.getElementById('nextSong');

    const selector =
        document.getElementById('songSelector');

    const songName =
        document.getElementById('songName');

    const songTitle =
        document.getElementById('musicSongTitle');

    const songArtist =
        document.getElementById('musicSongArtist');

    const albumCover =
        document.getElementById('albumCover');

    const progress =
        document.getElementById('musicProgress');

    const currentTimeText =
        document.getElementById('musicCurrentTime');

    const durationText =
        document.getElementById('musicDuration');


if (
    !close ||
    !audio ||
    !playPause ||
    !previous ||
    !next ||
    !selector ||
    !songName ||
    !songTitle ||
    !songArtist ||
    !albumCover ||
    !progress ||
    !currentTimeText ||
    !durationText
) {
    return;
}


player.dataset.musicInitialized = 'true';


    /*
     * =========================================
     * YOUR SONGS
     * =========================================
     *
     * Change the title and artist below.
     *
     * Example:
     *
     * title: 'Ikaw At Ako',
     * artist: 'Moira Dela Torre & Jason Marvin'
     *
     */

    const songs = [

        {
            title: 'Wi$h Li$t',
            artist: 'Taylor Swift (Your favorite)',

            file:
                '/music/song1.mp3',

            cover:
                '/images/albums/song1.png'
        },

        {
            title: 'Lego House',
            artist: 'Ed Sheeran',

            file:
                '/music/song2.mp3',

            cover:
                '/images/albums/song2.png'
        },

        {
            title: 'Ikaw at Ako',
            artist: 'TJ Monterde (My favorite)',

            file:
                '/music/song3.mp3',

            cover:
                '/images/albums/song3.png'
        },

        {
            title: 'Ikaw at Ako',
            artist: 'Johnoy Danao',

            file:
                '/music/song4.mp3',

            cover:
                '/images/albums/song4.png'
        }

    ];


    /*
     * =========================================
     * SAVED MUSIC STATE
     * =========================================
     */

    let currentSong =
        Number(
            localStorage.getItem(
                'giftCurrentSong'
            ) || 0
        );


    let savedTime =
        Number(
            localStorage.getItem(
                'giftMusicTime'
            ) || 0
        );


    let shouldBePlaying =
        localStorage.getItem(
            'giftMusicPlaying'
        ) === 'true';


    if (
        currentSong < 0 ||
        currentSong >= songs.length
    ) {

        currentSong = 0;

    }


    /*
     * =========================================
     * CREATE SONG OPTIONS
     * =========================================
     */

    selector.innerHTML = '';


    songs.forEach(
        (song, index) => {

            const option =
                document.createElement(
                    'option'
                );

            option.value =
                index;

            option.textContent =
                `${song.title} — ${song.artist}`;

            selector.appendChild(
                option
            );

        }
    );


    /*
     * =========================================
     * FORMAT TIME
     * =========================================
     */

    function formatTime(seconds) {

        if (
            !Number.isFinite(seconds)
        ) {
            return '0:00';
        }


        const minutes =
            Math.floor(
                seconds / 60
            );


        const remainingSeconds =
            Math.floor(
                seconds % 60
            );


        return (
            minutes +
            ':' +
            String(
                remainingSeconds
            ).padStart(
                2,
                '0'
            )
        );

    }


    /*
     * =========================================
     * LOAD SONG
     * =========================================
     */

    function loadSong(
        index,
        restoreTime = false
    ) {

        currentSong =
            index;


        const song =
            songs[currentSong];


        audio.src =
            song.file;


        songName.textContent =
            song.title;


        songTitle.textContent =
            song.title;


        songArtist.textContent =
            song.artist;


        albumCover.src =
            song.cover;


        albumCover.alt =
            `${song.title} album cover`;


        selector.value =
            String(currentSong);


        localStorage.setItem(
            'giftCurrentSong',
            String(currentSong)
        );


        if (!restoreTime) {

            savedTime = 0;

            localStorage.setItem(
                'giftMusicTime',
                '0'
            );

        }

    }


    /*
     * =========================================
     * PLAY
     * =========================================
     */

    function playMusic() {

        audio.play()
            .then(
                () => {

                    playPause.textContent =
                        '⏸';

                    player.classList.add(
                        'music-playing'
                    );


                    shouldBePlaying =
                        true;


                    localStorage.setItem(
                        'giftMusicPlaying',
                        'true'
                    );

                }
            )
            .catch(
                () => {

                    /*
                     * Some browsers may block
                     * automatic playback after
                     * page navigation.
                     */

                    playPause.textContent =
                        '▶';

                    player.classList.remove(
                        'music-playing'
                    );

                }
            );

    }


    /*
     * =========================================
     * PAUSE
     * =========================================
     */

    function pauseMusic() {

        audio.pause();


        playPause.textContent =
            '▶';


        player.classList.remove(
            'music-playing'
        );


        shouldBePlaying =
            false;


        localStorage.setItem(
            'giftMusicPlaying',
            'false'
        );

    }


    /*
     * =========================================
     * SAVE CURRENT POSITION
     * =========================================
     */

    function saveMusicState() {

        if (
            Number.isFinite(
                audio.currentTime
            )
        ) {

            localStorage.setItem(
                'giftMusicTime',
                String(
                    audio.currentTime
                )
            );

        }


        localStorage.setItem(
            'giftCurrentSong',
            String(currentSong)
        );


        localStorage.setItem(
            'giftMusicPlaying',
            String(
                shouldBePlaying
            )
        );

    }


    /*
     * =========================================
     * FIRST LOAD
     * =========================================
     */

    loadSong(
        currentSong,
        true
    );


    audio.addEventListener(
        'loadedmetadata',
        () => {

            if (
                savedTime > 0 &&
                savedTime <
                    audio.duration
            ) {

                audio.currentTime =
                    savedTime;

            }


            durationText.textContent =
                formatTime(
                    audio.duration
                );


            if (shouldBePlaying) {

                playMusic();

            }

        }
    );


    /*
     * =========================================
     * PLAYER OPEN / CLOSE
     * =========================================
     * /


    close.addEventListener(
        'click',
        () => {

            player.classList.remove(
                'show'
            );

        }
    );


    /*
     * =========================================
     * PLAY / PAUSE
     * =========================================
     */

    playPause.addEventListener(
        'click',
        () => {

            if (audio.paused) {

                playMusic();

            } else {

                pauseMusic();

            }

        }
    );


    /*
     * =========================================
     * NEXT SONG
     * =========================================
     */

    next.addEventListener(
        'click',
        () => {

            currentSong++;


            if (
                currentSong >=
                songs.length
            ) {

                currentSong = 0;

            }


            loadSong(
                currentSong
            );


            playMusic();

        }
    );


    /*
     * =========================================
     * PREVIOUS SONG
     * =========================================
     */

    previous.addEventListener(
        'click',
        () => {

            currentSong--;


            if (
                currentSong < 0
            ) {

                currentSong =
                    songs.length - 1;

            }


            loadSong(
                currentSong
            );


            playMusic();

        }
    );


    /*
     * =========================================
     * SONG SELECTOR
     * =========================================
     */

    selector.addEventListener(
        'change',
        () => {

            const selected =
                Number(
                    selector.value
                );


            loadSong(
                selected
            );


            playMusic();

        }
    );


    /*
     * =========================================
     * PROGRESS BAR
     * =========================================
     */

    audio.addEventListener(
        'timeupdate',
        () => {

            if (
                Number.isFinite(
                    audio.duration
                ) &&
                audio.duration > 0
            ) {

                const percent =
                    (
                        audio.currentTime /
                        audio.duration
                    ) * 100;


                progress.value =
                    percent;


                currentTimeText
                    .textContent =
                        formatTime(
                            audio.currentTime
                        );


                durationText
                    .textContent =
                        formatTime(
                            audio.duration
                        );

            }


            saveMusicState();

        }
    );


    progress.addEventListener(
        'input',
        () => {

            if (
                Number.isFinite(
                    audio.duration
                )
            ) {

                const newTime =
                    (
                        Number(
                            progress.value
                        ) / 100
                    ) *
                    audio.duration;


                audio.currentTime =
                    newTime;


                saveMusicState();

            }

        }
    );


    /*
     * =========================================
     * AUTOMATIC NEXT SONG
     * =========================================
     */

    audio.addEventListener(
        'ended',
        () => {

            currentSong++;


            if (
                currentSong >=
                songs.length
            ) {

                currentSong = 0;

            }


            loadSong(
                currentSong
            );


            playMusic();

        }
    );


    /*
     * =========================================
     * SAVE BEFORE CHANGING PAGE
     * =========================================
     */

    window.addEventListener(
        'beforeunload',
        () => {

            saveMusicState();

        }
    );

}


function setupMemoryReveal() {

    const memoryItems =
        document.querySelectorAll(
            '.reveal-memory'
        );


    if (!memoryItems.length) {
        return;
    }


    if (
        !('IntersectionObserver' in window)
    ) {

        memoryItems.forEach(
            (item) => {

                item.classList.add(
                    'memory-visible'
                );

            }
        );

        return;
    }


    const observer =
        new IntersectionObserver(
            (entries) => {

                entries.forEach(
                    (entry) => {

                        if (
                            entry.isIntersecting
                        ) {

                            entry.target.classList.add(
                                'memory-visible'
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    }
                );

            },
            {
                threshold: 0.08,
                rootMargin: '0px 0px 120px 0px'
            }
        );


    memoryItems.forEach(
        (item) => {

            /*
             * If the item was already revealed
             * by Turbo's cached page, leave it visible.
             */
            if (
                item.classList.contains(
                    'memory-visible'
                )
            ) {
                return;
            }


            observer.observe(item);

        }
    );

}


function setupRelationshipQuiz() {

    const intro =
        document.getElementById('journalIntro');

    const form =
        document.getElementById('relationshipQuizForm');

    const startButton =
        document.getElementById('startJournalQuiz');

    if (!intro || !form || !startButton) {
        return;
    }
    
    if (
    form.dataset.quizInitialized === 'true'
) {
    return;
}


form.dataset.quizInitialized = 'true';

    const questionPages =
        Array.from(
            document.querySelectorAll(
                '.journal-question'
            )
        );

    const nextButtons =
        document.querySelectorAll(
            '.journal-next-button'
        );

    const backButtons =
        document.querySelectorAll(
            '.journal-back-button'
        );

    let currentQuestion = 0;

    function showQuestion(index) {

        questionPages.forEach(
            (question, questionIndex) => {

                if (questionIndex === index) {

                    question.classList.add(
                        'active-question'
                    );

                } else {

                    question.classList.remove(
                        'active-question'
                    );

                }

            }
        );

        currentQuestion = index;

        const activeTextarea =
            questionPages[index]
                .querySelector('textarea');

        if (activeTextarea) {

            setTimeout(() => {

                activeTextarea.focus();

            }, 300);

        }

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }

    startButton.addEventListener(
        'click',
        () => {

            intro.classList.add('hidden');

            form.classList.remove('hidden');

            showQuestion(0);

        }
    );

    nextButtons.forEach(
        (button, index) => {

            button.addEventListener(
                'click',
                () => {

                    const currentPage =
                        questionPages[index];

                    const textarea =
                        currentPage
                            .querySelector('textarea');

                    if (
                        !textarea ||
                        textarea.value.trim() === ''
                    ) {

                        textarea.classList.add(
                            'journal-input-error'
                        );

                        textarea.focus();

                        setTimeout(() => {

                            textarea.classList.remove(
                                'journal-input-error'
                            );

                        }, 700);

                        return;
                    }

                    if (
                        index <
                        questionPages.length - 1
                    ) {

                        showQuestion(
                            index + 1
                        );

                    }

                }
            );

        }
    );

    backButtons.forEach(
        (button) => {

            button.addEventListener(
                'click',
                () => {

                    if (currentQuestion > 0) {

                        showQuestion(
                            currentQuestion - 1
                        );

                    }

                }
            );

        }
    );

    const textareas =
        document.querySelectorAll(
            '.journal-question textarea'
        );

    textareas.forEach(
        (textarea) => {

            const card =
                textarea.closest(
                    '.journal-question-card'
                );

            const counter =
                card.querySelector(
                    '.current-count'
                );

            function updateCount() {

                counter.textContent =
                    textarea.value.length;

            }

            textarea.addEventListener(
                'input',
                updateCount
            );

            updateCount();

        }
    );

    form.addEventListener(
        'submit',
        (event) => {

            let allAnswered = true;
            let firstEmptyIndex = -1;

            textareas.forEach(
                (textarea, index) => {

                    if (
                        textarea.value.trim() === ''
                    ) {

                        allAnswered = false;

                        if (firstEmptyIndex === -1) {
                            firstEmptyIndex = index;
                        }

                    }

                }
            );

            if (!allAnswered) {

                event.preventDefault();

                showQuestion(
                    firstEmptyIndex
                );

                const emptyTextarea =
                    textareas[firstEmptyIndex];

                emptyTextarea.classList.add(
                    'journal-input-error'
                );

                emptyTextarea.focus();

                setTimeout(() => {

                    emptyTextarea.classList.remove(
                        'journal-input-error'
                    );

                }, 700);

            }

        }
    );

}


/* =========================================
   LOVE REASONS
========================================= */
function setupLoveReasons() {

    const cards =
        document.querySelectorAll(
            '.love-reason-card'
        );

    if (!cards.length) {
        return;
    }

    const counter =
        document.getElementById(
            'openedLoveCount'
        );

    const progress =
        document.getElementById(
            'loveProgressFill'
        );

    const finalMessage =
        document.getElementById(
            'loveFinalMessage'
        );

    if (
        !counter ||
        !progress ||
        !finalMessage
    ) {
        return;
    }


    function updateLoveProgress() {

        const openedCards =
            document.querySelectorAll(
                '.love-reason-card.opened'
            );

        const openedCount =
            openedCards.length;

        counter.textContent =
            openedCount;

        const percent =
            (openedCount / cards.length) * 100;

        progress.style.width =
            `${percent}%`;


        if (
            openedCount === cards.length
        ) {

            finalMessage.classList.remove(
                'hidden'
            );

        } else {

            finalMessage.classList.add(
                'hidden'
            );

        }

    }


    cards.forEach(
        (card) => {

            /*
             * Using onclick here is intentional.
             *
             * It replaces any previous click handler
             * instead of stacking duplicate listeners
             * when Turbo reloads/restores the page.
             */
            card.onclick = function () {

                if (
                    card.classList.contains(
                        'opened'
                    )
                ) {
                    return;
                }

                card.classList.add(
                    'opened'
                );

                updateLoveProgress();


                const openedCards =
                    document.querySelectorAll(
                        '.love-reason-card.opened'
                    );

                if (
                    openedCards.length ===
                    cards.length
                ) {

                    setTimeout(
                        () => {

                            finalMessage.scrollIntoView({
                                behavior: 'smooth',
                                block: 'center'
                            });

                        },
                        800
                    );

                }

            };

        }
    );


    /*
     * Recalculate the counter every time Turbo
     * loads/restores this page.
     */
    updateLoveProgress();

}

document.addEventListener(
    'turbo:load',
    function () {

        if (!window.location.hash) {

            window.scrollTo(
                0,
                0
            );

        }

    }
);

/* =========================================
   PERMANENT MUSIC BUTTON
   Works even after Turbo page navigation
========================================= */

document.addEventListener(
    'click',
    function (event) {

        const musicButton =
            event.target.closest(
                '#musicToggle'
            );


        if (!musicButton) {
            return;
        }


        const musicPlayer =
            document.getElementById(
                'musicPlayer'
            );


        if (!musicPlayer) {
            return;
        }


        musicPlayer.classList.toggle(
            'show'
        );

    }
);
