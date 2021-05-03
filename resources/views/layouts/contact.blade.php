@extends('layouts.master')
@section('content')
    <div class="font-body">

        <div class="max-w-screen-xl min-h-screen mx-0 lg:mx-auto flex flex-col text-center">


            <h2 class="mt-12 md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-800 ">
                Kontaktai </h2>

            <div class="flex flex-col lg:flex-row ml-5">

                <div class="h-full w-full flex-col text-left">

                    <p class="text-xl mb-5 mr-12">{!! $text_elements[1]->text!!} </p>

                    <p class="text-xl leading-9">

                        {{$text_elements[0]->text}} <br/> <b>Adresas:</b>  {{$text_elements[2]->text}}<br/> <b>Tel.</b> {{$text_elements[3]->text}}<br/> <b> Mob.tel.</b> <a class="text-blue-700 font-semibold" href="tel:{{$text_elements[4]->text}}">{{$text_elements[4]->text}} </a> <br/> <b> El.paštas</b> <a class="text-blue-700 font-semibold" href="mailto:{{$text_elements[5]->text}}">{{$text_elements[5]->text}}</a>

                        <br/>

                        <br/>
                    </p>

                    <p class="text-xl leading-9 mb-2">
                        <b> Darbo laikas:</b></p>
                    <img class="h-4 w-auto" src="{{asset('images/workdays.png')}}">

                    <p class="text-xl leading-9 mb-10"> {{$text_elements[6]->text}} </p>


                    <form class="w-full max-w-lg" method="post" action="{{url('/susisiekti')}}">
                        @csrf
                        <p class="text-2xl font-bold leading-9 mb-2">
                            Susisiekite
                        </p>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-first-name">
                                    Vardas
                                </label>
                                <input class="appearance-none block w-full bg-gray-200 text-gray-700 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="name" placeholder="Vardenis" required>
                                <p class="text-red-500 text-xs italic"></p>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block  tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-password">
                                    El. paštas
                                </label>
                                <input placeholder="vardenis@paštas.lt" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email" required>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                                <label class="block tracking-wide text-gray-700 text-sm font-bold mb-2" for="grid-password">
                                    Pranešimas
                                </label>
                                <textarea class=" no-resize appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" id="message" name="content" required></textarea>
                            </div>
                        </div>

                        <div class="md:flex md:items-center pb-10">
                            <div class="md:w-1/3">
                                <button class="focus:shadow-outline bg-electric focus:outline-none text-black font-bold py-2 px-4 rounded" type="submit">
                                    Siųsti
                                </button>
                            </div>
                            <div class="md:w-2/3"></div>
                        </div>

                    </form>

                </div>

                <div class="h-full w-full flex-col text-left mt-7 sm:mt-0 mb-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1363.7594561972721!2d23.910487450614216!3d54.91062927284217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x37169aafb78278f0!2sTomita!5e0!3m2!1slt!2slt!4v1617109557016!5m2!1slt!2slt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1617109341504!6m8!1m7!1s4CCVGt3AG466IzpuNhj-8A!2m2!1d54.91116922184521!2d23.90894622707328!3f121.4086625807899!4f-0.09364422788053162!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div>


            </div>

        </div>
    </div>

@endsection




