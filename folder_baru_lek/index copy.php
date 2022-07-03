<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Sebaran Sarana Kesehatan Covid-19</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin=""/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <script src="leaflet.ajax.js"></script>
    <script src="leaflet.ajax.min.js"></script>

   <style>
    #mapid {height: 550px; width:500px; }
    .row {margin-top: 20px}
    h1{
        font-family: 'Oswald', sans-serif;

    }
   </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark" style="background-color: #FF869E;">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Peta Sebaran Sarana Kesehatan Covid-19</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index2.php">Peta RS Rujukan Covid-19</a>
            </li>    
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="Data RS Rujukan.xlsx">Data Rumah Sakit</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="Data Faskes Vaksinasi.xlsx">Data Faskes Vaksinasi</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data lainnya
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item " href="https://covid19.patikab.go.id/v4/peta">Statistik Covid 19 Kabupaten Pati</a></li>
                <li><a class="dropdown-item " href="https://covid19.patikab.go.id/v4/jadwal-vaksinasi">Jadwal Vaksinasi</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item " href="https://ugmofficial.maps.arcgis.com/apps/mapviewer/index.html?webmap=8ec39407d68141569c46d3d1aac00f20">WebMap Persebaran secara Nasional</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
            <h1>Peta Sebaran Sarana Kesehatan Fasilitas Vaksinasi Covid-19</h1>
            <h1>di Kabupaten Pati beserta Buffer 4 Tingkat</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            <div id="mapid"></div>
        </div>
        <div class="col-sm-6">
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Deskripsi Peta</h4>
                <p>Peta ini menampilkan data sebaran sarana kesehatan fasilitas vaksinasi Covid-19 di Kabupaten Pati beserta buffer dengan jarak 1.5, 3, 7, dan 14 kilometer terhadap jarak satu Kabupaten menuju ke Fasilitas pendukung penanggulangan Covid-19 tersebut..</p>
                <hr>
                <p class="mb-0">Peta ini dapat digunakan secara bebas dan disebarluaskan dengan tanggung jawab pihak yang menggunakan secara pribadi.</p>
            </div>
            <div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">Data Pendukung</h4>
                <p>Beberapa data tambahan dan pendukung dapat dilihat, diunduh, dan digunakan melalui link berikut dan pada navigation bar diatas sesuai dengan yang dicantumkan</p>
            </div>
            <a class="btn btn-danger" href="https://covid19.patikab.go.id/v4/" role="button">Website Covid-19 Pati</a>
            <a class="btn btn-danger" href="https://covid19.patikab.go.id/v4/harian" role="button">Data Harian</a>
            <a class="btn btn-danger" href="https://covid19.patikab.go.id/v4/#info_grafis" role="button">Infografis Lainnya</a>
            <br></br>
            <a class="btn btn-outline-dark" href="https://experience.arcgis.com/experience/ef9cd3cf8eaf4060a660e04e266b65ef" role="button">Dashboard Perkembangan Covid-19 Secara Nasional</a>
        </div>
    </div>
    </div>

</body>
    <script>
        var map = L.map('mapid').setView([-6.67535467284734, 111.0603579168687], 10);

        var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        }).addTo(map);

        var tiles = L.tileLayer(mapboxUrl, {
            id: 'mapbox/streets-v11', 
            tileSize: 512, 
            zoomOffset: -1, 
            attribution: mapboxAttribution}).addTo(map);
        

        

        var ikon = {
            "iconUrl": "plus_6.png",
            "image" : "plus_6.png"
        };
         
        var satu = {
            "color": "green",
            "weight": 2,
            "opacity": 0.75
        };
        
        var dua = {
            "color": "yellow",
            "weight": 2,
            "opacity": 0.75
        };
        
        var tiga = {
            "color": "orange",
            "weight": 2,
            "opacity": 0.75
        };

        var empat = {
            "color": "red",
            "weight": 3,
            "opacity": 0.75
        };

        var pati = {
            "color": "black",
            "weight": 1,
            "opacity": 0.25
        };

        function popUp(f,l){
            var out = [];
            if (f.properties){
                for(key in f.properties){
                    out.push(key+": "+f.properties[key]);
                }
                l.bindPopup(out.join("<br />"));
            }
        }
        
        var jsonTest = new L.GeoJSON.AJAX(["Faskes_Vaksinasi_Fix.geojson"],{onEachFeature:popUp, style: ikon }).addTo(map);
        var jsonTest = new L.GeoJSON.AJAX(["1500.geojson"],{onEachFeature:popUp, style: satu}).addTo(map);
        var jsonTest = new L.GeoJSON.AJAX(["3000.geojson"],{onEachFeature:popUp, style: dua}).addTo(map);
        var jsonTest = new L.GeoJSON.AJAX(["7000.geojson"],{onEachFeature:popUp, style: tiga}).addTo(map);
        var jsonTest = new L.GeoJSON.AJAX(["14000.geojson"],{onEachFeature:popUp, style: empat}).addTo(map);
        var jsonTest = new L.GeoJSON.AJAX(["Admin_Kecamatan_Pati.geojson"],{onEachFeature:popUp, style: pati}).addTo(map);

        // var jsonTest = new L.GeoJSON.AJAX([
        //     "Faskes_Vaksinasi_Fix.geojson",
        //     "7000.geojson",
        //     "14000.geojson",
        //     "3000.geojson",
        //     "1500.geojson",
        //     // "Buffer_Faskes_Vaksinasi.geojson",
        //     // "Buffer_RS_Rujukan_Pasien_Covid_19.geojson", 
        //     // "RS_Rujukan_Pasien_Covid_19.geojson", 
        //     // "Admin_Jalan_Pati.geojson", 
        //     "Admin_Kecamatan_Pati.geojson"
        // ],{onEachFeature:popUp}).addTo(map);
    </script>
</html>