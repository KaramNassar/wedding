<section class="bg-pink-50 text-center">
    <div class="w-full h-80 rounded-2xl flex gap-4 flex-col items-center justify-center">
        <h2 class="text-3xl font-bold text-pink-700 sm:text-4xl">Countdown to Our Big Day</h2>
        <p class="text-lg text-pink-600">We can't wait to celebrate with you!</p>

        <div class="flex items-start justify-center w-full gap-1.5 count-down-main mt-2 text-pink-700">

            <div class="timer">
                <div
                    class="rounded-xl bg-pink-300 backdrop-blur-sm py-3 min-w-[96px] flex items-center justify-center flex-col gap-1 px-3">
                    <h3
                        class="countdown-element days font-manrope font-semibold text-2xl text-white text-center">
                    </h3>
                    <p class="text-lg uppercase font-normal text-white mt-1 text-center w-full">days</p>
                </div>
            </div>

            <div class="timer">
                <div
                    class="rounded-xl bg-pink-300 backdrop-blur-sm py-3 min-w-[96px] flex items-center justify-center flex-col gap-1 px-3">
                    <h3
                        class="countdown-element hours font-manrope font-semibold text-2xl text-white text-center">
                    </h3>
                    <p class="text-lg uppercase font-normal text-white mt-1 text-center w-full">Hour</p>
                </div>
            </div>

            <div class="timer">
                <div
                    class="rounded-xl bg-pink-300 backdrop-blur-sm py-3 min-w-[96px] flex items-center justify-center flex-col gap-1 px-3">
                    <h3
                        class="countdown-element minutes font-manrope font-semibold text-2xl text-white text-center">
                    </h3>
                    <p class="text-lg fo uppercasent-normal text-white mt-1 text-center w-full">Minutes</p>
                </div>
            </div>

            <div class="timer">
                <div
                    class="rounded-xl bg-pink-300 backdrop-blur-sm py-3 min-w-[96px] flex items-center justify-center flex-col gap-1 px-3">
                    <h3
                        class="countdown-element seconds font-manrope font-semibold text-2xl text-white text-center">
                    </h3>
                    <p class="text-lg fo uppercasent-normal text-white mt-1 text-center w-full">Seconds</p>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    // count-down timer
    let dest = new Date("apr 25, 2025 10:00:00").getTime();
    let x = setInterval(function () {
        let now = new Date().getTime();
        let diff = dest - now;

// Check if the countdown has reached zero or negative
        if (diff <= 0) {
            clearInterval(x); // Stop the countdown
            return; // Exit the function
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        if (days < 10) {
            days = `0${days}`;
        }
        if (hours < 10) {
            hours = `0${hours}`;
        }
        if (minutes < 10) {
            minutes = `0${minutes}`;
        }
        if (seconds < 10) {
            seconds = `0${seconds}`;
        }

// Get elements by class name
        let countdownElements = document.getElementsByClassName("countdown-element");

// Loop through the elements and update their content
        for (let i = 0; i < countdownElements.length; i++) {
            let className = countdownElements[i].classList[1]; // Get the second class name
            switch (className) {
                case "days":
                    countdownElements[i].innerHTML = days;
                    break;
                case "hours":
                    countdownElements[i].innerHTML = hours;
                    break;
                case "minutes":
                    countdownElements[i].innerHTML = minutes;
                    break;
                case "seconds":
                    countdownElements[i].innerHTML = seconds;
                    break;
                default:
                    break;
            }
        }
    }, 1000);
</script>
