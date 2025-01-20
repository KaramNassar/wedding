<x-section :title="trans('common.count down.title')" :description="trans('common.count down.subtitle')">

    <div class="flex items-start justify-center w-full gap-1 sm:1.5 count-down-main mt-2 text-amber-700 mx-1">

        <div class="timer">
            <div
                class="rounded-xl bg-amber-900 backdrop-blur-sm py-3 min-w-[86px] flex items-center justify-center flex-col gap-1 px-3">
                <h3
                    class="countdown-element days font-semibold text-2xl text-amber-50 text-center">
                </h3>
                <p class="text-sm text-amber-100 mt-1 text-center w-full">{{ trans('common.days') }}</p>
            </div>
        </div>

        <div class="timer">
            <div
                class="rounded-xl bg-amber-900 backdrop-blur-sm py-3 min-w-[86px] flex items-center justify-center flex-col gap-1 px-3">
                <h3
                    class="countdown-element hours font-semibold text-2xl text-amber-50 text-center">
                </h3>
                <p class="text-sm text-amber-100 mt-1 text-center w-full">{{ trans('common.hours') }}</p>
            </div>
        </div>

        <div class="timer">
            <div
                class="rounded-xl bg-amber-900 backdrop-blur-sm py-3 min-w-[86px] flex items-center justify-center flex-col gap-1 px-3">
                <h3
                    class="countdown-element minutes font-semibold text-2xl text-amber-50 text-center">
                </h3>
                <p class="text-sm text-amber-100 mt-1 text-center w-full">{{ trans('common.minutes') }}</p>
            </div>
        </div>

        <div class="timer">
            <div
                class="rounded-xl bg-amber-900 backdrop-blur-sm py-3 min-w-[86px] flex items-center justify-center flex-col gap-1 px-3">
                <h3
                    class="countdown-element seconds font-semibold text-2xl text-amber-50 text-center">
                </h3>
                <p class="text-sm text-amber-100 mt-1 text-center w-full">{{ trans('common.seconds') }}</p>
            </div>
        </div>
    </div>
</x-section>
<script>
    // count-down timer
    let dest = new Date("{{ $settings->date }}").getTime();
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
