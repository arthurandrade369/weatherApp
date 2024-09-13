@extends('layouts.template')
@section('content')
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(sendLocation);
        } else {
            console.log("Geolocalização não é suportada pelo seu navegador.");
        }

        function sendLocation(position) {
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;

            // Envia os dados via AJAX
            $.ajax({
                url: "{{ route('weather') }}", // A rota para onde enviar os dados
                type: "POST",
                data: {
                    latitude: lat,
                    longitude: lon,
                    _token: "{{ csrf_token() }}" // Token CSRF necessário para requisições POST no Laravel
                },
                dataType: "json",
                success: function(response) {
                    console.log("Localização enviada com sucesso: ", response);
                },
                error: function(xhr) {
                    console.log("Erro ao enviar localização: ", xhr);
                }
            });
        }
    </script>
@endpush
