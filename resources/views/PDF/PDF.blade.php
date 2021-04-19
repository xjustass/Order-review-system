<!DOCTYPE html>
<html>
<head>

    <title></title>

    <link href="http://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <style>


        body {
            font-family: 'Open Sans', sans-serif;
        }


        .img {
            max-width: 200px;
        }

        .column {
            float: left;
            width: 50%;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .right {

            text-align: right
        }

        h2, h1 {
            text-align: center;
        }

        .cyan {
            color: darkcyan;
        }

        .info {
            line-height: 1;
        }

        .line {

            line-height: 1;
        }

        h3 {
            margin: 0;
            line-height: 1;
            margin-top: 50px;
        }


        h2 {

            margin-top: 50px;
        }
    </style>


</head>
<body>


<div class="row">

    <div class="column">
        <img class="img" src="{{public_path('images/logo_pdf.png')}}" alt=""/>
        <p class="info"> UAB „Tomita“<br> Jonavos g. 104, Kaunas<br> Tel. (8-37) 32 32 02 <br> Mob.tel. +370 618 23 443 <br> El.paštas gamyba@tomita.lt</p>

    </div>

    <div class="column right">

        @php
            echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG('4', 'C39+') . '" alt="barcode"   />'


        @endphp

        <p>{{ $date }}</p>
        <p>Užsakymas numeris #{{ $id }} </p>
    </div>

</div>

<hr>
<h2>{{ $title }}</h2>


<h3>Užsakymo informacija</h3>

<p class="line"><b>Vardas pavardė:</b> <br>
    {{ $name }} {{ $last_name }}
</p>

@if(isset($company_name))
    <p class="line"><b>Įmonė:</b> <br>
        {{ $company_name }}
    </p>
@endif

<p class="line"><b>Remontuojmas įrenginys/gaminys:</b> <br>
    {{ $service }}
</p>


@if(isset($info))
    <p class="line"><b>Papildoma informacija:</b> <br>
        {{ $info }}
    </p>
@endif


<p class="line"><i> Apie užsakymo eigą informuosime el. paštu. Tai pat, suvedus žemiau pateiktą unikalų kodą į Batteries.lt internetinę svetainę, užsakymo eigą galite pasitikrinti savrankiškai. </i></p>

<h2>Unikalus kodas, užsakymo patikrinimui:</h2>
<h1 class="cyan">{{ $code }} </h1>


</body>
</html>