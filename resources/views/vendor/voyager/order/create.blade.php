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

        .is-invalid{
            border: 2px solid red;
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
            Darbų registracija
        </h1>

        <div id="voyager-notifications"></div>

        <div class="page-content container-fluid">


            <form class="edit-add" method="post" action="{{route('orders.store')}}">

                @csrf
                @error('fname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="required" for="FormControlInput1">Vardas</label>
                    <input type="text" name="fname" class="form-control" value="{{ old('fname') }}" id="FormControlInput1" placeholder="Jonas" required>

                </div>

                @error('lname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="required" for="FormControlInput2">Pavardė</label>
                    <input type="text" name="lname" class="form-control" value="{{ old('lname') }}" id="FormControlInput2" placeholder="Jonaitis"required>
                </div>

                <div class="form-group">


                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <label class="required" for="FormControlInput3">Tel. nr.</label>
                    <input type="tel" name="phone" class="form-control " value="{{ old('phone') }}" id="FormControlInput1" placeholder="+3706123456" required>


                </div>

                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="required" for="exampleFormControlInput4">El. paštas</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="FormControlInput4" placeholder="vardas@paštas.lt" required>
                </div>


                @error('product')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label class="required" for="FormControlInput6">Remontuojams daiktas/gaminys</label>
                    <input type="text" name="product" class="form-control " value="{{ old('product') }}" id="FormControlInput6" required>
                </div>

                @error('bussines')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="FormControlInput5">Įmonės pavadinimas</label>
                    <input type="text" name="bussines" class="form-control" id="FormControlInput5" value="{{ old('bussines') }}" placeholder="UAB">
                </div>






                @error('product')
                <div  class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="FormControlInput7">Pastabos</label>
                    <textarea class="form-control" name="additional_info" id="FormControlInput7" rows="3">{{ old('additional_info') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Registruoti</button>



            </form>
        </div>
    </div>


@endsection