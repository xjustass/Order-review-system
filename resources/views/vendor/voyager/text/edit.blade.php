@extends(('voyager::master'))

@section('content')




    <div class="side-body padding-top" data-select2-id="14">
        <h1 class="page-title">
            <i class="voyager-file-text"></i>
            Teksto komponentai
        </h1>

        <div id="voyager-notifications">


            @if(session()->has('success'))
                <div class="alert alert-success"  x-data="{ show: true }" x-show.transition.opacity.out.duration.1500ms="show" x-init="setTimeout(() => show = false, 3000)">
                    {{ session()->get('success') }}
                </div>
            @endif
        </div>


        <div class="page-content container-fluid">

            <form class="edit-add" method="post" action="{{route('text.update')}}">

                {{method_field('PUT')}}
                @csrf

                <div class="row">
                    <div class="">

                        @foreach($text as $t)

                        <div class="form-group">
                            <label>{{$t->name}}</label>

                            <textarea class="form-control" id="form1" name="form{{$t->id}}" rows="3">{{$t->text}}</textarea>

                        </div>
                        @endforeach

                    </div>
                    </div>



                <button type="submit" class="btn btn-primary">
                    <i class="icon wb-plus-circle"></i> Atnaujinti</button>




            </form>

        </div>
    </div>


@endsection


@section('javascript')


    <script src="{{ asset('js/app.js') }}" defer></script>



@endsection