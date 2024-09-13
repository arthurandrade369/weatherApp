<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="{{ route('index') }}">Weather App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <div class="dropdown w-50 justify-content-center">
                <input class="form-control w-10" id="searchInput" type="text"
                    placeholder="Search for a city..." aria-label="Search">
                
                    <!-- Dropdown de sugestões -->
                <ul class="dropdown-menu w-100 text-center" id="dropdownList" style="display: none;"></ul>
            </div>
        </div>
    </div>
</nav>