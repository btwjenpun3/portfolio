<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <style>
        body {
            font-family: "Press Start 2P", system-ui;
            font-weight: 400;
            font-style: normal;
        }
    </style>
    @livewireStyles
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 col-12">
                <h3>Hello</h3>
                <p>I'm Helmi</p>
                <p>You may find me on <a href="https://www.linkedin.com/in/muhamad-helmi-0785b3185/">LinkedIn</a>
                </p>
                <p>I'm a backend-developer, thats why you found this site s**k</p>
                <p>I dont know about UI/UX, i just know about the result of 1+1</p>
            </div>
        </div>


        <div class="col-md-12 col-12 mt-5">
            <h5 class="text-success">API ID Game Checker </h5>
            <small class="text-warning">(Private Source Code)</small>
            <p class="mt-3">As the name suggests, this API is useful for checking your favorite
                game nicknames like Free Fire, Mobile Legends, Undawn, and more.</p>
            <p>This API is registered on RapidAPI, and you can access it through this link</p>
            <p class="mb-1">
                <a href="https://rapidapi.com/muhamadkelmi/api/api-mobile-game-nickname-checker" target="_blank">Go
                    to RapidAPI</a>
            </p>
            <small class="text-info">If you find blank page, you need to register and sign-in first into
                RapidAPI</small>
            <p class="mt-3">Or you may try this API urself using this form below</p>
            <p>For example i was set this form for check ID Mobile Legends</p>
            <div class="d-flex justify-content-center">
                @livewire('api.game-nickname-checker-form')
            </div>
        </div>

        <div class="col-md-12 col-12">
            <h5 class="text-success">Fumola Store </h5>
            <small class="text-warning">(Private Source Code)</small>
            <p class="mt-3">This is a Top Up Store where you can buy Mobile Game Currency like Mobile Legend
                Diamonds, Free Fire Diamonds, etc.</p>
            <p class="mt-3">This site is build using Laravel and Livewire, connected to Xendit Payment Gateway,
                D*****z for the Merchant, Redis for Queue, and WebSocket for dispatching the real-time event.</p>
            <p class="mb-1">
                <a href="https://fumolastore.id" target="_blank">Go to Fumola Store</a>
            </p>
        </div>

        <div class="col-md-12 col-12 mt-5">
            <h5 class="text-success">E-Kan</h5>
            <small class="text-warning">(Private Source Code)</small>
            <p class="mt-3">Order from my friend. Made with ❤️ using Laravel and Livewire</p>
            <p class="mt-3">This site is Google-Classroom-Like where theres 2 users type, Student and Teacher. Teacher
                can create a class and student can join.</p>
            <p class="mt-3">Theres a messaging-like-chat-system so teacher can communicate with student.</p>
            <p class="mb-1">
                <a href="https://e-kan.id" target="_blank">Go to E-Kan</a>
            </p>
        </div>

        <div class="col-md-12 col-12 mt-5">
            <h5 class="text-success">Imatech eBilling</h5>
            <small class="text-warning">(Private Source Code)</small>
            <p class="mt-3">This is automatically Invoice Generator connected to Duitku.com</p>
            <p class="mt-3">This tool is a Billing System where user can create Single / Recurring Invoices and send
                to Customer using WhatsApp. Did i said WhatsApp ? YES! This tool connected to WhatsApp Gateway also so
                Customer received their Invoice through WhatsApp</p>
            <p class="mt-3">After Invoice sent, customer may choose one of many payment, like Virtual Account, QRIS,
                or e-Wallet.</p>
            <p class="mb-1 text-primary">
                <i>URL Private</i>
            </p>
        </div>

    </div>

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</body>

</html>
