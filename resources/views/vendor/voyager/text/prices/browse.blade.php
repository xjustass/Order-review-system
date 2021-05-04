@extends(('voyager::master'))


@section('page_header')

    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-book"></i> Kainos ir paslaugos
        </h1>
        <a href="{{route('prices.create')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Pridėti</span>
        </a>
    </div>


    <div class="px-4">



        @if(session()->has('success'))
            <div class="alert alert-success"  x-data="{ show: true }" x-show.transition.opacity.out.duration.1500ms="show" x-init="setTimeout(() => show = false, 3000)">
                {{ session()->get('success') }}
            </div>
        @endif





        <div class="table-responsive">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">

                <div class="row">
                    <div class="col-sm-12">

                        <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>
                                    <a href=""> Nr.</a>
                                </th>
                                <th>
                                    <a href=""> Paslauga</a>
                                </th>
                                <th>
                                    <a href=""> Kaina</a>

                                <th class="actions text-right dt-not-orderable">Veiksmai</th>

                            </tr>
                            </thead>

                            <tbody>

                            @if( count($services)>0 )
                                @foreach( $services as $s)

                                    <tr role="row" class="">
                                        <td>
                                            <div>{{$s->id}}</div>
                                        </td>
                                        <td>
                                           {{$s->service_name}}
                                        </td>
                                        <td>
                                            <div>
                                                {{$s->price}} EUR
                                            </div>
                                        </td>

                                        <td class="no-sort no-click bread-actions">

                                            <form  method="post" action="{{ route("prices.destroy", $s->id) }}" >
                                                @csrf
                                                {{ method_field('delete') }}


                                                <button type="submit" onclick="return confirm('Ar tikrai norite ištrinti?')" class="btn btn-sm btn-danger pull-right delete-confirm">
                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Ištrinti</span> </button>

                                            </form>

                                            <a href="{{route('prices.edit', $s->id)}}" title="Redaguoti" class="btn btn-sm btn-primary pull-right edit"> <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Redaguoti</span> </a>
                                        </td>
                                    </tr>

                                @endforeach
                            @else

                                <tr role="row" class="">
                                    <td>
                                        <div class="">Kainų nėra</div>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop

@section('content')



@endsection

@section('javascript')

    <script src="{{ asset('js/app.js') }}" defer></script>


@endsection