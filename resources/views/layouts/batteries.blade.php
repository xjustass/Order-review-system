@extends('layouts.master')
@section('content')
    <div class="font-body">

        <div class="max-w-screen-lg min-h-screen mx-0 lg:mx-auto flex flex-col text-center mx-2 md:mx-0">


            <h2 class="mt-12 md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-800 ">
                Akumuliatoriai </h2>

            <h3 class="text-left text-3xl sm:text-4xl mb-6 md:mb-6 leading-tight font-bold tracking-tight text-gray-800 ">
                Ni-Cd </h3>
            <p class="text-justify">
                Nikelio-kadmio akumuliatorius yra įkraunama baterija kurioje kaip elektrodų tipas naudojamas nikelio oksido hidroksidas ir kadmis. Santrumpa Ni-Cd kilęs iš cheminiais simboliais nikelio (Ni) ir kadmio (Cd): „NiCd“ yra registruotas prekinis ženklas „SAFT Corporation“, nors šis prekės pavadinimas yra paprastai naudojamas apibūdinti visas Ni-Cd baterijas. </p>


            <div class="py-8 w-full">
                <div class="shadow overflow-hidden rounded border-b border-gray-200">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Privalumai</th>
                            <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Trūkumai</th>

                        </tr>
                        </thead>
                        <tbody class="text-gray-700">
                        <tr>
                            <td class="w-1/2 text-center py-3 px-8">

                                <ul class="list-disc">
                                    <li>Greitas ir paprastas įkrovimas net po ilgo laikymo</li>
                                    <li>Didelis įkrovimo, iškrovimo ciklų skaičius, daugiau nei 1000 įkrovimo, iškrovimo ciklų</li>
                                    <li>Aukštos apkrovos charakteristikos</li>
                                    <li>Ilgas galiojimo laikas</li>
                                    <li>Paprastas sandėliavimas ir transportavimas</li>
                                    <li>Galimi įvairūs dydžiai ir pritaikymo būdai</li>
                                </ul>
                            </td>
                            <td class="w-1/2 text-center py-3 px-4">

                            <li>Santykinai nedidelės specifinės energijos, palyginti su naujesnių sistemų</li>
                            <li>Atminties efektas, reikia periodiškai pilnai iškrovinėti</li>
                            <li>Neekologiškas, kadmis yra toksiškas metalas ir negali būti išmetamas</li>
                            <li>Didelis savaiminis išsikrovimas, reikia įkrauti po sandėliavimo</li>
                            <li>Bijo žemų temperatūrų</li>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>


                <h3 class="text-left text-3xl sm:text-4xl mb-6 md:mb-6 leading-tight font-bold tracking-tight text-gray-800 mt-10 ">
                    Ni-MH </h3>

                <p class="text-justify">
                    Nikelio-metalo hidrido akumuliatorius, sutrumpintai NiMH arba Ni-MH, yra įkraunamų baterijų tipas. Jis yra labai panašus į nikelio-kadmio elementus (NiCd).
                    NiMH teigiamam elektrodui naudojamas nikelio oksido hidroksido (NiOOH), kaip ir NiCd, bet neigiamam elektrodui naudojamas vandenilio lydinys,
                    o ne kadmio. NiMH baterijos gali turėti du ar tris kartus daugiau talpos negu tokio pačio dydžio NiCd, beto jų energijos tankis artimas ličio jonų baterijoms.
                </p>

                <div class="py-8 w-full">
                    <div class="shadow overflow-hidden rounded border-b border-gray-200">
                        <table class="min-w-full bg-white">
                            <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/2 text-center py-3  uppercase font-semibold text-sm">Privalumai</th>
                                <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Trūkumai</th>

                            </tr>
                            </thead>
                            <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/2 text-left py-3 px-8">

                                    <ul class="list-disc">
                                        <li>30-40 procentų didesnės talpos nei standartinis NiCd</li>
                                        <li>Neturi atminties efekto</li>
                                        <li>Paprastas sandėliavimas ir transportavimas</li>
                                        <li>Žymiai ekologiškesnis už Ni-Cd</li>
                                        <li>Pelningas nikelio perdirbimas</li>
                                    </ul>
                                </td>
                                <td class="w-1/2 text-left py-3 px-4">

                                    <li>Ribotas tarnavimo laikas, gilūs iškrovimai labai sutrumpina eksploatavimą</li>
                                     <li>Reikalauja sudėtingo įkrovos algoritmo</li>
                                     <li>Jautrus perkrovimams</li>
                                     <li>Greito krovimo metu spinduliuoja daug šilumos</li>
                                     <li>Didelis savaiminis išsikrovimas</li>
                                     <li>Blogai veikia aukštose temperatūrose, turi būti laikomas vėsiai</li>
                                     <li>Bijo žemų temperatūrų</li>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>


                    <h3 class="text-left text-3xl sm:text-4xl mb-6 md:mb-6 leading-tight font-bold tracking-tight text-gray-800 mt-10 ">
                        Li </h3>

                    <p class="text-justify">
                        Panašiai kaip ir švino bei nikelio pagrindu pagaminti akumuliatoriai, naudoja katodą (teigiamas elektrodas), anodą (neigiamas elektrodas) ir
                        elektrolitą kaip laidininką. Katodas sudarytas iš
                        metalo oksido, o anodas iš akytos anglies. Iškrovimo metu jonai juda iš anodo į katodą per elektrolitą ir krovimo metu atvirkščiai.
                    </p>

                    <div class="py-8 w-full">
                        <div class="shadow overflow-hidden rounded border-b border-gray-200">
                            <table class="min-w-full bg-white">
                                <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="w-1/2 text-center py-3  uppercase font-semibold text-sm">Privalumai</th>
                                    <th class="w-1/2 text-center py-3 px-4 uppercase font-semibold text-sm">Trūkumai</th>

                                </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                <tr>
                                    <td class="w-1/2 text-left py-3 px-8">

                                        <ul class="list-disc">
                                            <li>Didelis energijos tankis</li>
                                            <li>Didelės talpos</li>
                                            <li>Perpus mažesnis savaiminis išsikrovimas už Ni-Cd ir Ni-MH</li>
                                            <li>Nereikalauja jokios priežiūros, neturi atminties efekto</li>
                                        </ul>
                                    </td>
                                    <td class="w-1/2 text-left py-3 px-4">

                                        <li>Būtina naudoti kartu su apsaugos schema</li>
                                        <li>Sensta net nenaudojamos</li>
                                        <li>Teisiniai suvaržymai dėl transportavimo didesniais kiekiai</li>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            </div>
        </div>

@endsection




