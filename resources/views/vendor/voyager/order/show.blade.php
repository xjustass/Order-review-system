@extends(('voyager::master'))

@section('content')




    <div class="side-body padding-top" data-select2-id="14">
        <h1 class="page-title">
            <i class="voyager-person"></i>
            Užsakymas Nr. {{$order->id}}
        </h1>

        <div id="voyager-notifications"></div>


        <div class="page-content container-fluid">

            <div class="edit-add">

                <div class="row">
                    <div class="col-lg-4">

                        <h4 class="text-primary">Kontaktiniai duomenys</h4>

                        <div class="row">
                            <div class="col-sm-12">
                                <p class="h5">Vardas Pavardė:</p>
                                <p class="font-weight-bold h4">{{$order->first_name}} &nbsp; {{$order->last_name}}</p>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-4">
                                <p class="h5">Telefono numeris:</p>
                                <p class="font-weight-bold h4">   {{$order->phone_number}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p class="h5">El. paštas:</p>
                                <p class="font-weight-bold h4">{{$order->email}}</p>
                            </div>
                        </div>

                            @if($order->company_name != null)
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h5">Įmonės pavadinimas:</p>
                                    <p class="font-weight-bold h4">   {{$order->company_name}}</p>
                                </div>

                            </div>
                            @endif

                        @if($order->additional_info != null)
                            <div class="row">
                                <div class="col-sm-12">
                                    <p class="h5">Papildoma informacija:</p>
                                    <p class="font-weight-bold h4">   {{$order->additional_info}}</p>
                                </div>

                            </div>
                        @endif



                    </div>



                    <div class="col-lg-6">

                        <h4 class="text-primary">Užsakymo duomenys</h4>

                        <div class="row">
                            <div class="col-sm-4">
                                <p class="h5">Užsakymo numeris: </p>
                                <p class="font-weight-bold h4"> {{$order->id}} </p>
                            </div>

                            <div class="col-sm-4">
                                <p class="h5">Unikalus užsakymo kodas klientui:</p>
                                <p class="font-weight-bold h4"> {{$order->order_review_code}}</p>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-4">
                                <p class="h5">Remontuojamas įrenginys/gaminys:</p>
                                <p class="font-weight-bold h4">   {{$order->service}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p class="h5">Statusas:</p>
                                <p class="font-weight-bold h4">

                                    @switch($order->status)

                                        @case(0)
                                            Priimtas
                                            @break

                                        @case(1)
                                           Vykdomas
                                            @break

                                        @case(2)
                                            Užbaigtas
                                        @break

                                    @endswitch

                                </p>
                            </div>
                        </div>



                        <div class="row">

                            <div class="col-sm-4">
                            <p class="h5">Užsakymas pradėtas:</p>
                            <p class="font-weight-bold h4"> {{$order->created_at}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p class="h5">Užsakymas atnaujintas:</p>
                                <p class="font-weight-bold h4"> {{$order->updated_at}}</p>
                            </div>

                        </div>

                    <div class="row">

                        @if($order->work_performed != null)
                        <div class="col-sm-4" >
                            <p class="h5">Atlikti darbai:</p>
                            <p class="font-weight-bold h4"> {{$order->work_performed }} </p>
                        </div>
                        @endif

                        @if($order->notes_for_clioent != null)
                        <div class="col-sm-4">
                            <p class="h5">Pastabos klientui:</p>
                            <p class="font-weight-bold h4"> {{$order->notes_for_client}}</p>
                        </div>
                        @endif
                </div>

                        @if($order->price != null)
                        <div class="row">
                            <div class="col-sm-4" >
                                <p class="h5">Kaina:</p>
                                <p class="font-weight-bold h4"> {{$order->price}} EUR</p>
                            </div>
                        </div>
                        @endif


                    </div>

                </div>

        </div>

        </div>
    </div>


@endsection