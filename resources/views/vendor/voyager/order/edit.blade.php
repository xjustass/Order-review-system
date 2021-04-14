@extends(('voyager::master'))

@section('content')




    <div class="side-body padding-top" data-select2-id="14">
        <h1 class="page-title">
            <i class="voyager-person"></i>
            Užsakymo informacijos atnaujinimas
        </h1>

        <div id="voyager-notifications"></div>


        <div class="page-content container-fluid">

            <form class="edit-add" method="post" action="{{route('orders.update', $order->id)}}">

                {{method_field('PUT')}}
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="FormControlInput1">Vardas</label>
                            <input type="text" name="name" class="form-control" id="FormControlInput1" value="{{$order->first_name}}" placeholder="Jonas" required>

                        </div>



                        <div class="form-group">
                            <label for="FormControlInput2">Pavardė</label>
                            <input type="text" name="last_name" class="form-control" id="FormControlInput2" value="{{$order->last_name}}" placeholder="Jonaitis"required>
                        </div>

                        <div class="form-group">
                            <label for="FormControlInput3">Tel. nr.</label>
                            <input type="tel" name="phone" class="form-control" id="FormControlInput1" value="{{$order->phone_number}}" placeholder="+3706123456" required>
                        </div>


                        <div class="form-group">
                            <label for="exampleFormControlInput4">El. paštas</label>
                            <input type="email" name="email" class="form-control" id="FormControlInput4" value="{{$order->email}}" placeholder="vardas@paštas.lt" required>
                        </div>


                        <div class="form-group">
                            <label for="FormControlInput5">Įmonės pavadinimas</label>
                            <input type="text" name="bussines" class="form-control" id="FormControlInput5" value="{{$order->company_name}}" placeholder="UAB">
                        </div>



                        <div class="form-group">
                            <label for="FormControlInput6">Remontuojams daiktas/gaminys</label>
                            <input type="text" name="product" class="form-control" id="FormControlInput6" value="{{$order->service}}" placeholder="UAB"required>
                        </div>


                        <div class="form-group">
                            <label for="FormControlInput7">Pastabos</label>

                            <textarea class="form-control" name="additional_info" id="FormControlInput7" value="{{$order->additional_info}}" rows="3"></textarea>
                        </div>


                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="h5">Užsakymo numeris:</p>
                                <p class="font-weight-bold h4"> {{$order->id}}</p>
                            </div>

                            <div class="col-sm-4">
                                <p class="h5">Užsakymo kodas klientui:</p>
                                <p class="font-weight-bold h4"> {{$order->order_review_code}}</p>
                            </div>
                        </div>

                        <div class="row">

                            <div style="padding-left: 15px;">
                            <p class="h5">Užsakymas pradėtas:</p>
                            <p class="font-weight-bold h4"> {{$order->created_at}}</p>
                            </div>

                        </div>



                        <div class="form-group">
                            <label for="sel1">Užsakymo statusas:</label>

                            <select class="bg-danger form-control" name="status" id="sel1">
                                <option value="0"   {{ $order->status == 0 ? 'selected' : '' }} >Vykdomas</option>
                                <option value="1"{{ $order->status == 1 ? 'selected' : '' }}>Įvykdytas</option>
                                <option value="2"{{ $order->status == 2 ? 'selected' : '' }}>Užbaigtas</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="FormControlInput8">Kaina, EUR</label>
                            <input type="number" name="price" class="form-control" id="FormControlInput8" step=".01" value="{{$order->price}}">
                        </div>

                        <div class="form-group">
                            <label for="FormControlInput9">Atlikti darbai</label>
                            <input type="text" name="work_performed" class="form-control" id="FormControlInput9" value="{{$order->work_performed}}">
                        </div>

                        <div class="form-group">
                            <label for="FormControlInput10">Papildoma informacija klinetui</label>
                            <textarea name="notes_for_client" class="form-control" id="FormControlInput10" value="{{$order->notes_for_client}}" rows="3"></textarea>
                        </div>


                    </div>




                </div>



                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Atnaujinti</button>




            </form>

        </div>
    </div>


@endsection