<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
        {{-- <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-y=.8&w=2830&h=1500&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply" alt="" class="absolute inset-0 -z-10 size-full object-cover object-right md:object-center"> --}}
        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
            aria-hidden="true">
            <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
            aria-hidden="true">
            <div class="aspect-1097/845 w-[68.5625rem] bg-linear-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0" x-data="{ show: false }" x-init="setInterval(() => show = !show, 3000)">

                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-5xl transition-all duration-1000 ease-in-out transform"
                    :class="{ 'opacity-0 translate-y-5 blur-sm': !show, 'opacity-100 translate-y-0 blur-0': show }">
                    {{ $profile['nama'] }}
                </h2>

                <p class="mt-8 font-medium text-pretty text-gray-300 transition-all duration-1000 ease-in-out transform delay-200"
                    :class="{ 'opacity-0 translate-y-5 blur-sm': !show, 'opacity-100 translate-y-0 blur-0': show }">
                    {{ $profile['summary'] }}.
                </p>
            </div>

            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div
                    class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                    <a href="/projek" class=" hover:text-green-500">My Project <span
                            aria-hidden="true">&rarr;</span></a>
                    <a href="/follow" id="follow-link"
                        class="relative inline-block text-white hover:text-green-500 transition-all duration-300">
                        Follow Me <span aria-hidden="true">&rarr;</span>
                    </a>

                    <style>
                        .moving {
                            position: absolute;
                            transition: transform 0.3s ease-out;
                        }
                    </style>

                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const link = document.getElementById("follow-link");

                            link.addEventListener("mouseover", function() {
                                const x = (Math.random() - 0.5) * 200; // Acak antara -100px sampai 100px
                                const y = (Math.random() - 0.5) * 200;
                                link.style.transform = `translate(${x}px, ${y}px)`;
                            });
                        });
                    </script>

                    <a href="/articles" class="hover:text-green-500">My Article <span
                            aria-hidden="true">&rarr;</span></a>

                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Language Programming</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">5</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Full-time Learning</dt>
                        <dd id="counter" class="text-4xl font-semibold tracking-tight text-white">100 Jam</dd>

                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                let count = 100; // Angka awal
                                const counterElement = document.getElementById("counter");

                                function updateCounter() {
                                    if (count >= 10) {
                                        counterElement.textContent = count + " Jam"; // Menampilkan angka
                                        count--; // Mengurangi angka
                                        setTimeout(updateCounter, 70); // Kecepatan animasi (50ms)
                                    }
                                }

                                updateCounter(); // Jalankan animasi countdown
                            });
                        </script>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Hours per week</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-300">Paid time off</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-white">Unlimited</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-layout>
