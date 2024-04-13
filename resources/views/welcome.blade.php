<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/resources/css/main.css">
    <link rel="stylesheet" href="/resources/css/normalize.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    <div class="wrapper">
        <header class="header">
            <img src="/img/logo.png" alt="logo" class="logo">
            <nav class="menu">
                <ul class="menu_list">
                    <li class="menu_item"><a id="category" href="#" class="menu_link">Category</a></li>
                    <li class="menu_item"><a id="courses" href="#" class="menu_link">Courses</a></li>
                    <li class="menu_item"><a href="#" class="menu_link">Home</a></li>
                    <li class="menu_item"><a id="contact" href="#" class="menu_link">Contact</a></li>
                </ul>
            </nav>
        </header>
        <div x-data="{ open: true }" class="hero">
            <h1 @click="open = ! open" class="hero_title">Super market - маркетплейс №1</h1>
            <h3 x-show="open" class="hero_text">Покупайте товары дешевле вместе с market</h3>
            <h2 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h2>
            <div id="info-block" class="hero_benefits">
                <div class="benefits">
                    <span>52 680</span>
                    <div class="benefits_text">Студентов купили себе обучение через час</div>
                </div>
                <div class="benefits">
                    <span>302</span>
                    <div class="benefits_text">Онлайн шкоы уже сотрудничают с edvibe</div>
                </div>
                <div class="benefits">
                    <span>10%</span>
                    <div class="benefits_text">Скидки от цены школы дает наш промокод</div>
                </div>
                <div class="benefits">
                    <span>5 280</span>
                    <div class="benefits_text">Курсов доступно к сравнению</div>
                </div>
            </div>
        </div>
    </div>
    <script src="/example-app/resources/js/app.js"></script>
</body>

</html>