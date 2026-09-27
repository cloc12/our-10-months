<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>A Secret Just For You 💗</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="unlock-body">

    <div class="unlock-background">

        <span class="unlock-decoration decoration-1">
            ♥
        </span>

        <span class="unlock-decoration decoration-2">
            ★
        </span>

        <span class="unlock-decoration decoration-3">
            ♥
        </span>

        <span class="unlock-decoration decoration-4">
            ✦
        </span>

    </div>

    <main class="unlock-container">

        <div class="unlock-card">

            <div class="tape tape-left"></div>
            <div class="tape tape-right"></div>

            <div class="lock-icon">

                🔐

            </div>

            <p class="tiny-label">
                TOP SECRET
            </p>

            <h1>
                A little world
                <span>made just for you.</span>
            </h1>

            <p class="unlock-description">

                There is only one person who knows the
                special date that can open this.

            </p>

            <div class="hint-box">

                💭 Hint: the day our story officially began.

            </div>

            <form
                method="POST"
                action="{{ route('gift.unlock.submit') }}"
                id="passcodeForm"
            >

                @csrf

                <label for="passcode">
                    Enter our special date
                </label>

                <input
                    type="text"
                    name="passcode"
                    id="passcode"
                    placeholder="MM / DD / YYYY"
                    maxlength="10"
                    autocomplete="off"
                    value="{{ old('passcode') }}"
                    required
                >

                @error('passcode')

                    <p class="error-message">

                        {{ $message }}

                    </p>

                @enderror

                <button
                    type="submit"
                    class="unlock-button"
                >

                    Unlock It
                    <span>
                        💗
                    </span>

                </button>

            </form>

            <p class="unlock-bottom">

                Made especially for my favorite person ✨

            </p>

        </div>

    </main>

</body>

</html>