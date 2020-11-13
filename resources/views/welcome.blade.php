<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#223C78">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#223C78">
    <!-- iOS Safari -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta name="apple-mobile-web-app-status-bar-style" content="#223C78">
    <link rel="stylesheet" href="{{ asset('site/libs/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/main.min.css') }}">

    <title>Токен генератор ссылок</title>
</head>

<body>
<header>
    <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide">
        <div class="container">
        </div>
    </div>

</header>
<main>
    <div class="container mt-5">
        <h1 id="title">Тестовое задание</h1>
        <h3 id="description1">Создай свою короткую ссылку</h3>

        <form action="{{ route('store.url') }}" id="survey-form" method="post">
            @csrf
            <div class="form-group">
                <input type="text" id="name" name="url" placeholder="Введите ссылку" required>
            </div>

            <div class="d-flex justify-content-end">
                <button type="submit" id="submit" class="text-center text-white">Отправить</button>
            </div>
        </form>
    </div>

    <div class="modal fade" id="success">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body py-4 px-md-4 px-3 text-center">
                    <button class="close" data-dismiss="modal">
                        <i class="fal fa-times"></i>
                    </button>

                    <h2 class="section-title mt-4">Благодарим за пользование нашими услугами</h2>

                    <p class="mb-4">
                        Ваша ссылка <a href="{{ session('url') }}">{{ request()->fullUrl() }}/{{ session('token') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="container d-flex justify-content-between align-items-center flex-md-row flex-column">
    </div>
</footer>

<script src={{ asset('site/js/main.min.js') }}></script>

@if(Session::has('url'))
    <script type="text/javascript">
        $(document).ready(function () {
            $('#success').modal();
        });
    </script>
@endif
</body>

</html>
