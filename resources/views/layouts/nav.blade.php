
<nav class="bg-primary nav-shadow w-full font-body z-20 absolute" x-data="{ isOpen: false }">

    <div class="py-2 px-0 w-full mx-auto max-w-screen-xl">
        <div class="flex items-center justify-between  mx-3 md:mx-3 lg:mx-0">


            <div class="flex items-center justify-between px-4 py-3">
                <a href="#">
                    <img src="{{ asset('/images/logo1.svg') }}" alt="Batteries logo" class="h-12">
                </a>
            </div>

            <div class="lg:hidden z-10">
                <button type="button" aria-label="toggle menu"
                        class="rounded-lg focus:outline-none focus:sha0dow-outline" @click="isOpen = !isOpen">
                    <svg viewBox="0 0 20 20" class="w-8 h-8 fill-current text-white">
                        <path x-show="!isOpen" fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                        <path x-show="isOpen" fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div  class="px-2 hidden md:visible md:flex-row items-center pt-3 pb-4 lg:flex">

                <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Akumuliatoriai</a>
                <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Kainos</a>
                <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Kontaktai</a>
                <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Paslaugos</a>

                <button type="button" aria-label="stebėti užsakymą"
                        class="z-20 bg-transparent whitespace-nowrap rounded-full px-4 py-2 border-2 border-electric hover:bg-electric text-white hover:text-black hover:border-transparent">
                    Stebėti užsakymo eigą
                </button>

            </div>

        </div>
    </div>

    <div :class="isOpen ? 'flex-col flex' : 'hidden'" class="px-2 md:flex-col items-center pt-3 pb-4 ">

        <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Akumuliatoriai</a>
        <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Kainos</a>
        <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Kontaktai</a>
        <a class="my-1 text-sm lg:mx-4 lg:my-0 font-medium text-white" href=""> Paslaugos</a>

        <button type="button" aria-label="stebėti užsakymą"
                class="z-20 bg-transparent whitespace-nowrap rounded-full px-4 py-2 border-2 border-electric hover:bg-electric text-white hover:text-black hover:border-transparent ">
            Stebėti užsakymo eigą
        </button>

    </div>

</nav>


