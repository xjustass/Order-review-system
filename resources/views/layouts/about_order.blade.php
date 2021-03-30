@extends('layouts.master')
@section('content')
    <div class="bg-secondary font-body">

        <div class="max-w-screen-lg min-h-screen mx-0 lg:mx-auto flex flex-col text-center">


            <h2 class="mt-12 md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-100 ">
                Užsakymo duomenys</h2>

            <div class="rounded-lg h-auto m-5 p-7 sm:w-5/6 mx-auto bg-gray-200 text-gray-800 shadow-2xl">

            <div class="flex flex-col sm:flex-row">

                    <div class="h-full w-full flex-col text-left">
                        <h2 class="text-2xl font-medium"> Užsakymo numeris:</h2>

                        <p class="mt-2 font-medium">a1881daw28189</p>

                        <h2 class="text-2xl font-medium mt-10"> Atlikti darbai:</h2>

                        <p class="mt-2 font-medium">Akumuliatorių testavimas, litavimas</p>

                        <h2 class="text-2xl font-medium mt-10"> Pastabos:</h2>

                        <p class="mt-2 font-medium">Kviečiame atsiimti Jonavos g. 104, Kaunas</p>

                    </div>

                    <div class="h-full w-full flex-col text-left mt-7 sm:mt-0">

                        <h2 class="text-2xl font-medium"> Užsakymo statusas:</h2>

                        <span class="iconify w-1/5 h-1/5 ml-12 text-green-400 fill-current" data-icon="bx:bxs-check-circle" data-inline="false"></span>

                        <p class="font-medium text-lg text-green-400">Užsakymas įvykdytas</p>

                        <h2 class="text-2xl font-medium mt-10"> Darbų kaina:</h2>

                        <p class="font-medium text-3xl ">50 €</p>

                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection




