<!DOCTYPE html>
<html lang="en">
<x-head></x-head>
<body>
    <div class="bg-white">
        <x-h1>{{$title}}</x-h1>
       <x-navbar></x-navbar>
        {{ $slot }}
      </div>
     <x-footer></x-footer>
</body>
</html>