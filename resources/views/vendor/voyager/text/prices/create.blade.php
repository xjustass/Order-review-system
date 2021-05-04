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

    </style>
@endsection


@section('content')




    <div class="side-body padding-top" data-select2-id="14">
        <h1 class="page-title">
            <i class="voyager-list-add"></i>
            Pridėti paslaugą ir kainą
        </h1>

        <div id="voyager-notifications"></div>

        <div class="page-content container-fluid">


            <form class="edit-add" method="post" action="{{route('prices.store')}}">

                @csrf

                @error('service_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="FormControlInput1">Paslauga</label>
                    <input type="text" name="service_name" value="{{old('service_name')}}" class="form-control" id="FormControlInput1" required>

                </div>

                @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="FormControlInput1">Kaina, EUR</label>
                    <input type="text" name="price" value="{{old('price')}}" class="form-control" id="FormControlInput1" required>

                </div>


                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Pridėti</button>



            </form>
        </div>
    </div>


@endsection