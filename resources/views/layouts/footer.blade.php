<footer class="w-full font-body bg-primary">
    <div class="max-w-screen-xl mx-auto">
        <div class="text-gray-600 font-body">
            <div class="px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
                <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
                    <a class="flex items-center md:justify-start justify-center text-gray-900">
                        <img src="{{asset('images/logo1.svg')}}">
                    </a>
                    <p class="mt-2 text-sm text-gray-500 pb-2">{{$text_elements[7]->text}}</p>

                    <p class="mt-2 text-sm text-gray-300">{{$text_elements[0]->text}} </p>
                    <p class="mt-2 text-sm text-gray-300  ">{{$text_elements[2]->text}}</p>

                    <p class="mt-2 text-sm text-gray-300 ">  Tel. {{$text_elements[3]->text}}</p>
                    <p class="mt-2 text-sm text-gray-300 ">  Mob.tel.{{$text_elements[4]->text}}</p>
                    <p class="mt-2 text-sm text-gray-300 ">  El.paštas {{$text_elements[5]->text}}</p>



                </div>
                <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">

                    <div class="lg:w-1/2 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3">Nuorodos</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-electric">Baterijos</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-electric">Remontas</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-electric">Kainos</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-electric">D. U. K.</a>
                            </li>
                        </nav>
                    </div>

                    <div class="lg:w-1/2 md:w-1/2 w-full px-4">
                        <h2 class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3">Svarbu</h2>
                        <nav class="list-none mb-10">
                            <li>
                                <a class="text-gray-600 hover:text-electric">Apie įmonę</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-electric">Privatumo politika</a>
                            </li>
                            <li>
                                <a class="text-gray-600 hover:text-electric">Fourth Link</a>
                            </li>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        @php
        dd($text_elements);
        @endphp
    </div>
    <div class="bg-gray-800">
        <div class="container mx-auto py-4 px-5 ">
            <p class="text-gray-100 text-sm text-center">© {{ now()->year }} Batteries
            </p>

        </div>
    </div>

</footer>










