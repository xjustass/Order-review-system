@extends('layouts.master')
@section('content')
<div class="bg-secondary font-body">
    <div class="w-full mx-auto h-full max-w-screen-xl pt-20 md:pt-28 lg:pt-32 mx-0 lg:mx-auto flex flex-col md:flex-row items-center hero">

        <!--Left Col-->
        <div class="flex flex-col h-full w-full lg:w-5/6 lg:inline justify-center mt-10 lg:mt-20 pt-2 pb-24 px-4 md:px-6 mb-80 ">

            <h1 class="font-bold text-white leading-tight text-3xl text-center lg:text-left sm:text-5xl md:text-7xl lg:leading-tight my-4 subpixel-antialiased">
                Pasirūpinsime jūsų akumuliatoriais</h1>

            <h2 class="leading-normal text-white text-base text-center lg:text-left lg:text-3xl lg:pt-3 lg:mb-16 font-light mb-4">Baterijų gamyba.
                Restauravimas.</h2>

            <a href="{{url('/kontaktai')}}" class="z-20 bg-primary whitespace-nowrap text-xl lg:text-2xl
        rounded-full px-8 py-2.5 mt-5  sm:py-3 sm:mt-5  md:px-12 mx-auto lg:px-16 lg:py-5 border-2 border-electric hover:bg-electric
        text-white hover:text-black hover:border-transparent items-center inline-flex focus:outline-none cursor-pointer">

                <span class="iconify text-xl sm:text-2xl  lg:text-3xl  mr-3" data-inline="false"
                      data-icon="clarity:phone-handset-solid"></span>
                <span class="text-base md:text-xl lg:text-2xl ">Susisiekite</span>

            </a>
        </div>


    </div>
</div>

<div class="pt-20 w-full font-body">
    <div class="max-w-screen-xl mx-auto mb-24">
        <div class="py-12 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="mt-2 text-4xl mb-24 leading-tight font-extrabold tracking-tight text-gray-900 sm:text-5xl">
                        Kodėl verta akumuliatorius patikėti mums? </h2>
                </div>

                <div class="mt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-16 w-16 rounded-md bg-electric">

                                    <span class="iconify h-8 w-8 text-black" data-inline="false" data-icon="grommet-icons:technology" style="font-size: 64px;"></span>


                                </div>
                                <p class="ml-20 text-lg leading-6 font-medium text-gray-900">Patirtis ir naujos technologijos</p>
                            </dt>

                            <dd class="mt-2 ml-20 text-base text-gray-500">
                                Darbai atliekami naudojant naujausias technologijas, todėl galime užtikrinti aukšta darbų kokybę.
                            </dd>

                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-16 w-16 rounded-md bg-electric">

                                    <span class="iconify" data-inline="false" data-icon="mdi:handshake-outline" style="font-size: 38px;"></span>


                                </div>
                                <p class="ml-20 text-lg leading-6 font-medium text-gray-900">Lanksti kaina</p>
                            </dt>

                            <dd class="mt-2 ml-20 text-base text-gray-500">
                                Su kiekvienu klientu bendraujama indvidualiai pagal situaciją, todėl galime pasiūlyti patrauklias kainas.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-16 w-16 rounded-md bg-electric">

                                    <span class="iconify" data-inline="false" data-icon="fluent:battery-saver-24-regular" style="font-size: 44px;"></span>


                                </div>
                                <p class="ml-20 text-lg leading-6 font-medium text-gray-900">Aukščiausios kokybės baterijos </p>
                            </dt>

                            <dd class="mt-2 ml-20 text-base text-gray-500">
                                Mūsų gaminiuose naudojamos patvariausios baterijos.
                            </dd>
                        </div>

                        <div class="relative">
                            <dt>
                                <div class="absolute flex items-center justify-center h-16 w-16 rounded-md bg-electric">

                                    <span class="iconify" data-inline="false" data-icon="ic:outline-beenhere" style="font-size: 44px;"></span>


                                </div>
                                <p class="ml-20 text-lg leading-6 font-medium text-gray-900">Garantinis aptarnavimas</p>
                            </dt>

                            <dd class="mt-2 ml-20 text-base text-gray-500">
                                Visiems baterijų paketams ir restauruotiems akumuliatoriams taikoma garantija.
                            </dd>
                        </div>


                    </dl>
                </div>
            </div>
        </div>


        <!-- Atliekami darbai -->

        <div class="text-center">
            <h2 class="mt-36 text-4xl sm:text-5xl mb-24 leading-tight font-extrabold tracking-tight text-gray-900 ">
                Mūsų atliekami darbai </h2>
        </div>


        <div class="lg:flex justify-center mx-auto max-w-xs md:max-w-sm lg:max-w-none items-center">

            <div class="bg-primary rounded-2xl  lg:w-1/4 px-5 pt-5 pb-20 mx-6 mb-10">

                <span class="mx-auto text-electric iconify mt-4" data-inline="false" data-icon="mdi:restore" style="font-size: 100px;"></span>

                <h4 class="text-center text-2xl mt-3 font-medium text-white">Akumuliatorių restauravimas</h4>

                <p class="text-center text-white mt-5">Restauruojame visų akumuliatorinių įrankių akumuliatorius</p>
            </div>

            <div class="bg-primary rounded-2xl  lg:w-1/4 px-5 pt-5 pb-20 mx-6 mb-10">

                <img class="w-32 mx-auto" src="{{asset('images/battery.svg')}}">

                <h4 class="text-center text-2xl mt-3 font-medium text-white">Akumuliatorių restauravimas</h4>

                <p class="text-center text-white mt-5">Restauruojame visų akumuliatorinių įrankių akumuliatorius</p>
            </div>


            <div class="bg-primary rounded-2xl  lg:w-1/4 px-5 pt-5 pb-20 mx-6 mb-10">

                <span class="mx-auto text-electric iconify mt-4" data-inline="false" data-icon="mdi:restore" style="font-size: 100px;"></span>

                <h4 class="text-center text-2xl mt-3 font-medium text-white">Akumuliatorių restauravimas</h4>

                <p class="text-center text-white mt-5">Restauruojame visų akumuliatorinių įrankių akumuliatorius</p>
            </div>

        </div>


        <!-- Naudinga informacija -->
        <div class="text-center">
            <h2 class="mt-36 text-4xl sm:text-5xl mb-24 leading-tight font-extrabold tracking-tight text-gray-900 ">
                Naudinga informacija </h2>
        </div>



        <div class="mx-auto">
            <div class="md:flex mx-5 xs:mx-16 xl:mx-56">

                @foreach($posts as $p)



                  <a href="{{route('post.view', $p->id)}}">
                    <div class="bg-white mx-4 border rounded-lg overflow-hidden hover:shadow-xl cursor-pointer">
                        <img class="h-48 w-full object-cover" src="{{ asset('storage/'.$p->image) }}">
                        <div class="p-6">
                            <div class="flex items-baseline">
                                <div class="ml-2 text-gray-600 text-xs uppercase font-semibold tracking-wide">
                                    {{ date('Y/m/d', strtotime($p->created_at))}}
                                </div>
                            </div>
                            <h4 class="mt-1 font-semibold text-lg leading-tight truncate">{{$p->title}}</h4>

                        </div>
                    </div>
                  </a>
                @endforeach





        </div>


    </div>
</div>
@endsection




