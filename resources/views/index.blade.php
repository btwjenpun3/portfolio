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
                <p class="mb-0">You can catch me on <a
                        href="https://www.linkedin.com/in/muhamad-helmi-0785b3185/">LinkedIn</a> or my
                    <a href="https://github.com/btwjenpun3">Github</a>
                </p>
                <small class="text-info">p.s you wouldn't find much source code there, because 70% my source code are
                    private.</small>
                <p class="mt-3">I'm a backend-developer, thats why you found this site s**k</p>
                <p>I'm not really into UI/UX; I just know that 1+1 equals 2.</p>
            </div>
        </div>

        <hr>

        <h3 class="mt-4">Check out my projects</h3>

        <hr>

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
            <p class="mt-3">Built with Laravel and Livewire, it connects to Xendit for payments, D*****z for the
                merchant, Redis for queues, and WebSocket for real-time events.</p>
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
            <p class="mt-3">An automatic invoice generator connected to Duitku.com.</p>
            <p class="mt-3">This billing system lets you create single or recurring invoices and send them to
                customers via WhatsApp. Yes, WhatsApp! This tool is connected to a WhatsApp gateway, so customers
                receive their invoices through WhatsApp.</p>
            <p class="mt-3">After receiving the invoice, customers can choose from various payment options like
                Virtual Account, QRIS, or e-Wallet.</p>
            <p class="mb-1 text-primary">
                <i>URL Private</i>
            </p>
        </div>

        <div class="col-md-12 col-12 mt-5">
            <h5 class="text-success">Game Loot World</h5>
            <small class="text-warning">(Private Source Code)</small>
            <p class="mt-3">A game news site that keeps you updated on game giveaways.</p>
            <p class="mt-3">It fetches data from g******r.com using an API and connects to a Telegram bot. I can type
                a command to my Telegram bot, and the server will automatically update the news.
            </p>
            <p class="mt-3">Build using Laravel only</p>
            <p class="mb-1">
                <a href="https://gamelootworld.com" target="_blank">Go to gamelootworld.com</a>
            </p>
        </div>

        <p class="mt-5">etc...</p>
        <hr>
        <div class="col-md-12 col-12 mt-5">
            <p>There are still some projects I've completed, but I'm too lazy to add them to this portfolio.</p>
        </div>

    </div>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <div class="container">
            <p class="mb-0">© 2024 Muhamad Helmi. All rights reserved.</p>
        </div>
    </footer>

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
