<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        @yield('title', 'Our Little World')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style id="persistentMusicStyles">

        #musicPlayer {
            width: 340px !important;

            padding: 18px !important;

            position: fixed !important;

            top: 105px !important;
            right: 24px !important;

            z-index: 3000 !important;

            background: rgba(255, 255, 255, 0.98) !important;

            border: 3px solid #3c2633 !important;

            border-radius: 22px !important;

            box-shadow:
                8px 8px 0
                rgba(60, 38, 51, 0.14) !important;

            overflow: visible !important;
        }


        .music-header-new {
            display: flex !important;

            justify-content: space-between !important;
            align-items: center !important;

            margin-bottom: 16px !important;
        }


        .music-header-new-left {
            min-width: 0 !important;
        }


        .music-now-playing {
            display: block !important;

            margin-bottom: 3px !important;

            color: #e9347d !important;

            font-size: 9px !important;
            font-weight: 900 !important;

            letter-spacing: 2px !important;
        }


        #songName {
            margin: 0 !important;

            color: #3c2633 !important;

            font-family: 'Fredoka', sans-serif !important;

            font-size: 15px !important;

            white-space: nowrap !important;

            overflow: hidden !important;

            text-overflow: ellipsis !important;
        }


        #closeMusic {
            width: 30px !important;
            height: 30px !important;

            padding: 0 !important;

            display: flex !important;

            align-items: center !important;
            justify-content: center !important;

            background: transparent !important;

            border: none !important;

            cursor: pointer !important;

            font-size: 22px !important;
        }


        /* SONG ROW */

        .spotify-track-row {
            width: 100% !important;

            display: grid !important;

            grid-template-columns:
                78px minmax(0, 1fr) !important;

            gap: 14px !important;

            align-items: center !important;

            margin-bottom: 15px !important;
        }


        #albumCover {
            width: 78px !important;
            height: 78px !important;

            min-width: 78px !important;
            min-height: 78px !important;

            max-width: 78px !important;
            max-height: 78px !important;

            display: block !important;

            object-fit: cover !important;

            border: 2px solid #3c2633 !important;

            border-radius: 11px !important;

            box-shadow:
                4px 4px 0
                rgba(60, 38, 51, 0.12) !important;

            animation: none !important;

            transform: none !important;
        }


        .spotify-song-info {
            min-width: 0 !important;

            text-align: left !important;
        }


        #musicSongTitle {
            display: block !important;

            margin-bottom: 5px !important;

            overflow: hidden !important;

            color: #3c2633 !important;

            font-family: 'Fredoka', sans-serif !important;

            font-size: 17px !important;
            font-weight: 700 !important;

            white-space: nowrap !important;

            text-overflow: ellipsis !important;
        }


        #musicSongArtist {
            display: block !important;

            overflow: hidden !important;

            color:
                rgba(60, 38, 51, 0.6) !important;

            font-size: 12px !important;

            white-space: nowrap !important;

            text-overflow: ellipsis !important;
        }


        /* SELECT */

        #songSelector {
            width: 100% !important;

            margin-bottom: 12px !important;

            padding: 9px 10px !important;

            color: #3c2633 !important;

            background: #fff7fb !important;

            border:
                2px solid #3c2633 !important;

            border-radius: 10px !important;

            font-size: 12px !important;
        }


        /* PROGRESS */

        .spotify-progress-row {
            display: grid !important;

            grid-template-columns:
                34px 1fr 34px !important;

            gap: 8px !important;

            align-items: center !important;

            margin:
                5px 0 14px !important;
        }


        .spotify-time {
            color:
                rgba(60, 38, 51, 0.7) !important;

            font-size: 10px !important;

            font-weight: 800 !important;
        }


        #musicProgress {
            width: 100% !important;

            cursor: pointer !important;

            accent-color: #f94f94 !important;
        }


        /* CONTROLS */

        .spotify-controls {
            display: flex !important;

            justify-content: center !important;
            align-items: center !important;

            gap: 16px !important;
        }


        .spotify-controls button {
            width: 38px !important;
            height: 38px !important;

            padding: 0 !important;

            display: flex !important;

            align-items: center !important;
            justify-content: center !important;

            background: white !important;

            color: #3c2633 !important;

            border:
                2px solid #3c2633 !important;

            border-radius: 50% !important;

            cursor: pointer !important;
        }


        .spotify-controls #playPause {
            width: 48px !important;
            height: 48px !important;

            background: #ff78ad !important;

            font-size: 18px !important;
        }


        @media (max-width: 600px) {

            #musicPlayer {
                width:
                    calc(100% - 30px) !important;

                right: 15px !important;

                top: 90px !important;
            }

        }

    </style>

</head>


<body class="gift-body">


    <div class="background-decoration">

        <span class="floating-heart heart-1">
            ♥
        </span>

        <span class="floating-heart heart-2">
            ♥
        </span>

        <span class="floating-heart heart-3">
            ♥
        </span>

        <span class="floating-star star-1">
            ★
        </span>

        <span class="floating-star star-2">
            ★
        </span>

    </div>


    <nav class="navbar">

        <a
            href="{{ route('gift.home') }}"
            class="logo"
        >
            💗 Our Little World
        </a>


        <button
            id="mobileMenuButton"
            class="mobile-menu-button"
        >
            ☰
        </button>


        <div
            class="nav-menu"
            id="navMenu"
        >

            <a href="{{ route('gift.home') }}">
                Home
            </a>

            <a href="{{ route('gift.memories') }}">
                Memories
            </a>

            <a href="{{ route('gift.quiz') }}">
                Quiz
            </a>

            <a href="{{ route('gift.reasons') }}">
                Love
            </a>

            <a href="{{ route('gift.distance') }}">
                Us
            </a>

            <a href="{{ route('gift.letter') }}">
                Letter
            </a>

        </div>


        <button
            class="music-toggle"
            id="musicToggle"
        >
            🎵 Music
        </button>

    </nav>


    {{-- =========================================
         ONE MUSIC PLAYER ONLY
    ========================================== --}}

    <div
        id="musicPlayer"
        class="music-player"
        data-turbo-permanent
    >

        <div class="music-header-new">

            <div class="music-header-new-left">

                <span class="music-now-playing">
                    NOW PLAYING
                </span>

                <h4 id="songName">
                    Our Song
                </h4>

            </div>


            <button
                type="button"
                id="closeMusic"
            >
                ×
            </button>

        </div>


        <div class="spotify-track-row">

            <img
                id="albumCover"
                src="/images/albums/song1.jpg"
                alt="Album Cover"
            >


            <div class="spotify-song-info">

                <strong id="musicSongTitle">
                    Song Title
                </strong>

                <span id="musicSongArtist">
                    Artist
                </span>

            </div>

        </div>


        <select id="songSelector">
        </select>


        <audio
            id="backgroundMusic"
            preload="auto"
        ></audio>


        <div class="spotify-progress-row">

            <span
                id="musicCurrentTime"
                class="spotify-time"
            >
                0:00
            </span>


            <input
                type="range"
                id="musicProgress"
                min="0"
                max="100"
                value="0"
                step="0.1"
            >


            <span
                id="musicDuration"
                class="spotify-time"
            >
                0:00
            </span>

        </div>


        <div class="spotify-controls">

            <button
                type="button"
                id="previousSong"
            >
                ⏮
            </button>


            <button
                type="button"
                id="playPause"
            >
                ▶
            </button>


            <button
                type="button"
                id="nextSong"
            >
                ⏭
            </button>

        </div>

    </div>


    <main class="main-content">

        @yield('content')

    </main>


    <footer class="footer">

        <p>
            Made with lots of love 💗
        </p>

        <p class="footer-small">
            Since November 29, 2025
        </p>

    </footer>


</body>

</html>