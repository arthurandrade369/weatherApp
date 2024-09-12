<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Weather App</title>

    <!-- Link do CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
    <div class="min-vh-100 d-flex text-decoration-none">
        @include('partials.navbar')

        <div class="pt-5 mt-5">
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    <footer class="footer">
        <div>
            <span>Powered by</span>
            <a href="https://github.com/arthurandrade369">Arthur Andrade</a>
        </div>
    </footer>
    </div>

    <!-- Script do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script do jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <!-- Script para filtrar a lista de cidades na navbar-->
    <script>
        $(document).ready(function() {
            $("#searchInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                var searchCard = $("#searchCard");
                // Se o campo de entrada não estiver vazio, exibe a lista
                if (value) {
                    searchCard.removeClass("d-none");
                } else {
                    searchCard.addClass("d-none"); // Esconde a lista se o campo estiver vazio
                }

                // Filtra os itens da lista
                $("#dataList li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                });
            });
        });
    </script>
    @stack('scripts')
</body>


</html>
