@extends(('voyager::master'))

@section('content')





    <div class="side-body padding-top" data-select2-id="14">
        <h1 class="page-title">
            <i class="voyager-person"></i>
            Darbų registracija
        </h1>

        <div id="voyager-notifications"></div>

        <div class="page-content container-fluid">


            <form class="edit-add" method="post" action="  {{route('orders.store')}}   ">

                @csrf

                <div class="form-group">
                    <label for="FormControlInput1">Vardas</label>
                    <input type="text" name="name" class="form-control" id="FormControlInput1" placeholder="Jonas" required>

                </div>


                <div class="form-group">
                    <label for="FormControlInput2">Pavardė</label>
                    <input type="text" name="last_name" class="form-control" id="FormControlInput2" placeholder="Jonaitis"required>
                </div>

                <div class="form-group">
                    <label for="FormControlInput3">Tel. nr.</label>
                    <input type="tel" name="phone" class="form-control" id="FormControlInput1" placeholder="+3706123456" required>
                </div>


                <div class="form-group">
                    <label for="exampleFormControlInput4">El. paštas</label>
                    <input type="email" name="email" class="form-control" id="FormControlInput4" placeholder="vardas@paštas.lt" required>
                </div>


                <div class="form-group">
                    <label for="FormControlInput5">Įmonės pavadinimas</label>
                    <input type="text" name="bussines" class="form-control" id="FormControlInput5" placeholder="UAB">
                </div>



                <div class="form-group">
                    <label for="FormControlInput6">Remontuojams daiktas/gaminys</label>
                    <input type="text" name="product" class="form-control" id="FormControlInput6" required>
                </div>


                <div class="form-group">
                    <label for="FormControlInput7">Pastabos</label>

                    <textarea class="form-control" name="additional_info" id="FormControlInput7" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Registruoti</button>



            </form>
        </div>
    </div>


@endsection