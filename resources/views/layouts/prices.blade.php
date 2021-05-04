@extends('layouts.master')
@section('content')
    <div class="bg-secondary font-body">

        <div class="max-w-screen-xl min-h-screen mx-0 lg:mx-auto flex flex-col text-center">


            <h2 class="mt-12 md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-100 ">
                Paslaugų kainos </h2>

<div class="rounded-lg h-auto m-5 pb-5 sm:w-5/6 mx-auto bg-gray-200 text-gray-800 shadow-2xl">


            <table class="mx-auto w-full bg-gray-200 text-gray-800 rounded-b-lg">
                <p class="pt-5  text-left px-5">Su visais klientais bendraujame individualiai pagal jų situaciją, todėl kainos irgi priklauso nuo situacijos. Preliminarios paslaugų kainos:</p>

                <tr class="text-left border-b-2 border-gray-300">
                    <th class="px-4 w-9/12">Paslauga</th>
                    <th class="px-4 w-3/12">Kaina, EUR</th>
                </tr>


                @foreach($prices as $price)

                    <tr class="bg-gray-100 text-left border-b border-gray-200">
                        <td class="px-4 py-3 w-9/12">{{$price->service_name}}</td>
                        <td class="pl-4 py-3 w-3/12">{{$price->price}}</td>
                    </tr>
                @endforeach


            </table>
</div>

        </div>
    </div>

@endsection




