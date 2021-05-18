@extends(('voyager::master'))

@section('css')

    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }

        .border-red{

            border: 2px solid #e74c3c;
        }

        .is-invalid{
            border: 2px solid red;
        }

        form label.required:after
        {
            color: red;
            content: " *";
        }

        form label.required:after
        {
            color: red;
            content: " *";
        }

    </style>
@endsection

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
                            <label  class="required" for="FormControlInput1">Vardas</label>
                            <input type="text" name="fname" class="form-control @error('fname')border-red @enderror" id="FormControlInput1" value="{{$order->first_name}}" placeholder="Jonas" required>
                        </div>
                        @error('fname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="form-group">
                            <label class="required"  for="FormControlInput2">Pavardė</label>
                            <input type="text" name="lname" class="form-control @error('lname')border-red @enderror" id="FormControlInput2" value="{{$order->last_name}}" placeholder="Jonaitis" required>
                        </div>
                        @error('lname')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="required"  for="FormControlInput3">Tel. nr.</label>
                            <input type="tel" name="phone" class="form-control @error('phone')border-red @enderror" id="FormControlInput1" value="{{$order->phone_number}}" placeholder="+3706123456" required>
                        </div>
                        @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="required"  for="FormControlInput4">El. paštas</label>
                            <input type="email" name="email" class="form-control @error('email')border-red @enderror" id="FormControlInput4" value="{{$order->email}}" placeholder="vardas@paštas.lt" required>
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label  for="FormControlInput5">Įmonės pavadinimas</label>
                            <input type="text" name="bussines" class="form-control @error('bussines')border-red @enderror" id="FormControlInput5" value="{{$order->company_name}}" placeholder="UAB">
                        </div>
                        @error('bussines')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label class="required"  for="FormControlInput6">Remontuojams daiktas/gaminys</label>
                            <input type="text" name="product" class="form-control @error('product')border-red @enderror" id="FormControlInput6" value="{{$order->service}}" placeholder="UAB" required>
                        </div>
                        @error('product')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="FormControlInput7">Pastabos</label>

                            <textarea class="form-control @error('additional_info')border-red @enderror" name="additional_info" id="FormControlInput7" rows="3">{{$order->additional_info}}
                            </textarea>
                        </div>
                        @error('additional_info')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

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


                        @error('status')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="sel1">Užsakymo statusas:</label>

                            <select class="bg-danger form-control" name="status" id="sel1">
                                <option value="0"   {{ $order->status == 0 ? 'selected' : '' }} >Priimtas</option>
                                <option value="1"{{ $order->status == 1 ? 'selected' : '' }}>Vykdomas</option>
                                <option value="2"{{ $order->status == 2 ? 'selected' : '' }}>Laukiama atsiėmimo</option>
                                <option value="3"{{ $order->status == 3 ? 'selected' : '' }}> Užbaigtas/apmokėtas</option>
                            </select>
                        </div>




                        <div class="form-group">
                            <label for="FormControlInput8">Kaina, EUR</label>
                            <input type="number" name="price" class="form-control @error('price')border-red @enderror" id="FormControlInput8" step=".01" value="{{$order->price}}">
                        </div>
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror



                        <div class="form-group">
                            <label for="FormControlInput9">Atlikti darbai</label>
                            <input type="text" name="work_performed" class="form-control @error('work_performed')border-red @enderror" id="FormControlInput9" value="{{$order->work_performed}}">
                        </div>
                        @error('work_performed')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror


                        <div class="form-group">
                            <label for="FormControlInput10">Papildoma informacija klinetui</label>
                            <textarea name="notes_for_client" class="form-control @error('notes_for_client')border-red @enderror" id="FormControlInput10" rows="3">{{$order->notes_for_client}}</textarea>
                        </div>
                        @error('notes_for_client')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                    </div>




                </div>



                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Atnaujinti</button>




            </form>

        </div>
    </div>


@endsection