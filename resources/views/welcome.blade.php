<html>

<head>
    <link href="/app.css" rel="stylesheet">
    <script src="/app.js"></script>
</head>

<body>
    @livewire(App\Livewire\Counter::class)

    <script>
        // find all elements with wire:snapshot
        document.querySelectorAll('[wire\\:snapshot]')
            .forEach(el => {
                let snapshot = JSON.parse(el.getAttribute('wire:snapshot'))

                console.log(snapshot);
            })
    </script>
</body>

</html>
