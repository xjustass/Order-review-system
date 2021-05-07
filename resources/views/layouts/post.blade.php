@extends('layouts.master')
@section('content')
    <div class="font-body">
        <img class="h-64 w-full object-cover" src="{{ asset('storage/'.$p->image) }}">

        <div class="max-w-screen-md min-h-screen mx-auto px-8 lg:px-0 lg:mx-auto flex flex-col text-center mx-2 md:mx-0">



            <h2 class="mt-12 md:mt-28 text-4xl sm:text-5xl mb-12 md:mb-20 leading-tight font-extrabold tracking-tight text-gray-800 ">
                {{$p->title}} </h2>

            <p class="text-left text-base font-bold mb-6 md:mb-6 leading-tight tracking-tight text-gray-800 ">
                {{ date('Y/m/d', strtotime($p->created_at))}} </p>
            <p class="text-justify text-xl">

    {!!$p->body!!}

</div>
</div>

@endsection




