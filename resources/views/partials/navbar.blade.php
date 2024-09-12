<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top h-10">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Weather App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="d-flex row">
                <input class="form-control col-12" id="searchInput" type="text" placeholder="Busque por uma cidade..."
                    aria-label="Search">
                    <!-- Lista de itens -->
                    <div class="card " id="searchCard">
                        <div class="card-body">
                            <h5 class="card-title text-center">Cidades</h5>
                            <ul class="list-group list-group-flush" id="dataList">
                                <li class="list-group-item list-group-item-secondary text-center">Item 1</li>
                                <li class="list-group-item list-group-item-secondary text-center">Item 2</li>
                                <li class="list-group-item list-group-item-secondary text-center">Item 3</li>
                                <li class="list-group-item list-group-item-secondary text-center">Outro item</li>
                                <li class="list-group-item list-group-item-secondary text-center">Exemplo de item</li>
                            </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</nav>
