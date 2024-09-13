@extends('layouts.template')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <h3 class="text-center" id="city"></h3>
            </div>
            <h5 class="card-title">Current Weather</h5>
            <p class="card-text">
                <strong>Temperature:</strong> <span id="temp"></span><br>
                <strong>Weather:</strong> <span id="weather"></span><br>
                <strong>Description:</strong> <span id="description"></span><br>
                <strong>Wind Speed:</strong> <span id="wind_speed"></span> m/s<br>
                <strong>Sunrise:</strong> <span id="sunrise"></span><br>
                <strong>Sunset:</strong> <span id="sunset"></span>
            </p>
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
                    lat: lat,
                    lon: lon,
                    _token: "{{ csrf_token() }}" // Token CSRF necessário para requisições POST no Laravel
                },
                dataType: "json",
                success: function(response) {
                    let weatherData = response;

                    // Converte timestamp UNIX para horário legível
                    function formatTime(unixTime) {
                        var date = new Date(unixTime * 1000);
                        return date.toLocaleTimeString();
                    }

                    $('#city').text(weatherData.name + ', ' + weatherData.sys.country);
                    $('#temp').text((weatherData.main.temp - 273.15).toFixed(2) +
                        ' °C'); // Convertendo de Kelvin para Celsius
                    $('#weather').text(weatherData.weather[0].main);
                    $('#description').text(weatherData.weather[0].description);
                    $('#wind_speed').text(weatherData.wind.speed);
                    $('#sunrise').text(formatTime(weatherData.sys.sunrise));
                    $('#sunset').text(formatTime(weatherData.sys.sunset));
                },
                error: function(xhr, status, exception) {
                    console.log("Erro ao enviar localização: ", xhr, exception);
                }
            });
        }
    </script>
@endpush
