@extends('layouts.app')
@extends('layouts.navbar')
@section('title', 'Select Location Modal')

@section('location')


    <style>
        .cont-custom {
            background-color: #f0f0f0;
        }

        .title-location {
            margin-top: 5px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 39px;
            color: #000000;
        }

        .region-select {
            margin-bottom: 20px;
        }

        .form-custom {
            width: 50vh;
            border: none;
            height: 5vh;
        }

        .select-location-module {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .btn-select-location {
            background-color: #EE1313;
            color: #fff;
            height: 4vh;
            width: 10vh;
            background: #EE1313;
            border-radius: 30px;
            border: none;

        }
    </style>

    <div class="container ">
        <div class="select-location-module cont-custom ">
            <p class="title-location">SELECT LOCATION</p>
            <div class="mb-3 region-select">
                <select id="region" class="form-select form-custom">
                    <option selected>Region</option>
                    <option>Baringo</option>
                    <option>Bomet</option>
                    <option>Bungoma</option>
                    <option>Busia</option>
                    <option>Elgeyo-Marakwet</option>
                    <option>Embu</option>
                    <option>Garissa</option>
                    <option>Homa Bay</option>
                    <option>Isiolo</option>
                    <option>Kajiado</option>
                    <option>Kakamega</option>
                    <option>Kericho</option>
                    <option>Kiambu</option>
                    <option>Kilifi</option>
                    <option>Kirinyaga</option>
                    <option>Kisii</option>
                    <option>Kisumu</option>
                    <option>Kitui</option>
                    <option>Kwale</option>
                    <option>Laikipia</option>
                    <option>Lamu</option>
                    <option>Machakos</option>
                    <option>Makueni</option>
                    <option>Mandera</option>
                    <option>Meru</option>
                    <option>Murang'a</option>
                    <option>Nairobi</option>
                    <option>Nakuru</option>
                    <option>Nandi</option>
                    <option>Narok</option>
                    <option>Nyamira</option>
                    <option>Nyandarua</option>
                    <option>Nyeri</option>
                    <option>Samburu</option>
                    <option>Siaya</option>
                    <option>Taita-Taveta</option>
                    <option>Tana River</option>
                    <option>Tharaka-Nithi</option>
                    <option>Trans-Nzoia</option>
                    <option>Turkana</option>
                    <option>Uasin Gishu</option>
                    <option>Vihiga</option>
                    <option>Wajir</option>
                    <option>West Pokot</option>
                </select>
            </div>
            <div class="mb-3 region-select">
                <select id="city" class="form-select form-custom">
                    <option selected disabled>City/Town</option>
                    <option>Nairobi</option>
                    <option>Mombasa</option>
                    <option>Kisumu</option>
                    <option>Nakuru</option>
                    <option>Eldoret</option>
                    <option>Thika</option>
                    <option>Kitale</option>
                    <option>Malindi</option>
                    <option>Garissa</option>
                    <option>Kakamega</option>
                    <option>Bungoma</option>
                    <option>Machakos</option>
                    <option>Nyeri</option>
                    <option>Murang'a</option>
                    <option>Kericho</option>
                    <option>Nanyuki</option>
                    <option>Meru</option>
                    <option>Embu</option>
                    <option>Busia</option>
                    <option>Nyahururu</option>
                    <option>Voi</option>
                    <option>Isiolo</option>
                    <option>Mandera</option>
                    <option>Lamu</option>
                    <option>Kajiado</option>
                    <option>Garbatula</option>
                    <option>Wajir</option>
                    <option>Turkana</option>
                    <option>Homa Bay</option>
                    <option>Kisii</option>
                    <option>Migori</option>
                    <option>Bondo</option>
                    <option>Kilifi</option>
                    <option>Webuye</option>
                    <option>Karatina</option>
                    <option>Baringo</option>
                    <option>Emali</option>
                    <option>Lodwar</option>
                    <option>Maseno</option>
                    <option>Mwatate</option>
                    <option>Nandi Hills</option>
                    <option>Naivasha</option>
                    <option>Nyamira</option>
                    <option>Nyandarua</option>
                    <option>Othaya</option>
                    <option>Wote</option>
                    <option>Yala</option>
                </select>

            </div>
            <div class="mb-3 ">
                <button class="btn-custom btn-select-location w-100">SELECT PICK-UP LOCATION</button>
            </div>
        </div>
    </div>

@endsection
