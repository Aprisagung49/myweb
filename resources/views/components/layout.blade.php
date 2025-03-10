<!DOCTYPE html>
<html lang="en">
<x-head></x-head>

<body>
    <div class="bg-white">
        <x-navbar></x-navbar>
        {{ $slot }}
        {{-- <x-h1>{{ $title }}</x-h1> --}}
    </div>
    <x-footer></x-footer>
</body>

</html>
