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

<body class="d-flex h-100 text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header>
            @include('partials.navbar')
        </header>

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
                var query = $(this).val().toLowerCase();
                var dropdownList = $("#dropdownList");


                // Se o campo não estiver vazio, faz a requisição à API
                if (query.length > 0) {
                    $.ajax({
                        url: "{{ route('geocode') }}",
                        method: 'POST',
                        data: {
                            query: query,
                            _token: "{{ csrf_token() }}" // Token CSRF necessário para requisições POST no Laravel
                        },
                        success: function(response) {
                            console.log(response);
                            // Limpa os itens antigos do dropdown
                            $("#dropdownList").empty();

                            // Preenche a lista com os novos dados da API
                            if (response.length > 0) {
                                response.forEach(function(item) {
                                    $("#dropdownList").append(
                                        '<li class="dropdown-item">' + item.name +
                                        '</li>');
                                });
                                // Exibe o dropdown
                                $("#dropdownList").show();
                            } else {
                                // Esconde o dropdown se não houver resultados
                                $("#dropdownList").hide();
                            }
                        },
                        error: function(xrh, status, error) {
                            // Esconde o dropdown em caso de erro na API
                            $("#dropdownList").hide();
                            console.log("Erro ao buscar cidades: ", xrh);
                        }
                    });
                } else {
                    // Esconde o dropdown se o campo de busca estiver vazio
                    $("#dropdownList").hide();
                }
            });

            // Esconde o dropdown quando clicar fora
            $(document).click(function(e) {
                if (!$(e.target).closest('.dropdown').length) {
                    $("#dropdownList").hide();
                }
            });
        });
    </script>
    @stack('scripts')
</body>


</html>
