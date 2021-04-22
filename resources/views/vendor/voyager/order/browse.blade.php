@extends(('voyager::master'))


@section('page_header')

    <div class="container-fluid">
        <h1 class="page-title">
            <i class="voyager-book"></i> Užsakymai
        </h1>
    </div>


    <div class="px-4">



        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif


            <script type="text/javascript">

                $(document).ready(function(){
                    $("#msgid").html("This is Hello World by JQuery");
                });

            </script>

        <div class="table-responsive">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="dataTable_length"><label>Rodyti <select name="dataTable_length" aria-controls="dataTable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> rezultatų</label></div>
                    </div>

                    <div class="col-sm-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Paieška:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label></div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-12">
                        <table id="dataTable" class="table table-hover dataTable no-footer" role="grid" aria-describedby="dataTable_info">
                            <thead>
                            <tr>
                                <th>
                                    <a href=""> Nr.</a>
                                </th>
                                    <th>
                                        <a href=""> Vardas Pavardė</a>
                                    </th>
                                <th>
                                    <a href=""> Įmonė</a>
                                </th>
                                <th>
                                    <a href=""> Užsakymas</a>
                                </th>
                                <th>
                                    <a href=""> Užsakymas pradėtas</a>
                                </th>

                                <th class="actions text-right dt-not-orderable">Veiksmai</th>
                            </tr>
                            </thead>

                            <tbody>

                            <p id="msgid">

                            </p>

                            @foreach( $orders  as $order)

                                <tr role="row" class="">
                                    <td>
                                        <div>{{$order->id}}</div>
                                    </td>
                                    <td>
                                        <div>{{$order->first_name}} {{$order->last_name}}</div>
                                    </td>
                                    <td>
                                        <div>
                                            {{$order->company_name}}
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            {{$order->service}}
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            {{$order->created_at}}
                                        </div>
                                    </td>


                                    <td class="no-sort no-click bread-actions">

                                        <form  method="post" action="{{ route("orders.destroy", $order->id) }}" >
                                            @csrf
                                            {{ method_field('delete') }}


                                            <button type="submit" onclick="return confirm('Ar tikrai norite ištrinti?')" class="btn btn-danger pull-right delete-confirm">
                                                <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Ištrinti</span> </button>

                                        </form>

                                        <a href="{{route('orders.edit', $order)}}" title="Redaguoti" class="btn btn-sm btn-primary pull-right edit"> <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Redaguoti</span> </a>
                                        <a href="{{route('orders.show', $order)}}" title="Žiūrėti" class="btn btn-sm btn-warning pull-right view"> <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Žiūrėti</span> </a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



                <div class="row">
                    <div class="col-sm-6">
                        <div>Rodoma nuo {{($orders->currentpage()-1)*$orders->perpage()+1}} iki {{$orders->currentpage()*$orders->perpage()}}
                             iš  {{$orders->total()}} rezultatų
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            {{ $orders->onEachSide(1)->links()}}
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
@stop

@section('content')



@endsection

@section('javascript')

    <!-- DataTables -->

    <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>

@endsection