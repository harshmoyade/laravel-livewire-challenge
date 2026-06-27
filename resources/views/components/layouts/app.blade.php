<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>

{{ $slot }}

@livewireScripts

</body>
</html>
