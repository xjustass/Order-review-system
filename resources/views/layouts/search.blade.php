@extends('layouts.master')
@section('content')
<div class="bg-secondary font-body">

    <div class="max-w-screen-xl min-h-screen mx-0 lg:mx-auto flex flex-col text-center">


        <div class="my-36">

        <h2 class="md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-100">
            Sužinok apie užsakymo eigą </h2>

        <div class="font-body items-center justify-center" >
            <form class="rounded-full overflow-hidden inline-flex focus-within:ring-electric  focus-within:ring-2"  method="get" action="{{route('search')}}" >

                <input type="text" name="search" class="py-2 text-sm px-2 sm:px-4 sm:py-4 w-48 sm:w-96 focus:outline-none" autocomplete="off" placeholder="Kodas">

                <button class="sm:px-10 flex bg-primary hover:bg-electric focus:outline-none hover:text-primary text-3xl text-electric items-center justify-center px-4 border-l">
                    >
                </button>
            </form>
        </div>
        </div>

    </div>
</div>

@endsection




