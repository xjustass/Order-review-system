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

    <script>
        $(document).ready(function(){

            $('#user_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('sample.index') }}",
                },
                columns: [
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    }
                ]
            });

            $('#create_record').click(function(){
                $('.modal-title').text('Add New Record');
                $('#action_button').val('Add');
                $('#action').val('Add');
                $('#form_result').html('');

                $('#formModal').modal('show');
            });

            $('#sample_form').on('submit', function(event){
                event.preventDefault();
                var action_url = '';

                if($('#action').val() == 'Add')
                {
                    action_url = "{{ route('sample.store') }}";
                }

                if($('#action').val() == 'Edit')
                {
                    action_url = "{{ route('sample.update') }}";
                }

                $.ajax({
                    url: action_url,
                    method:"POST",
                    data:$(this).serialize(),
                    dataType:"json",
                    success:function(data)
                    {
                        var html = '';
                        if(data.errors)
                        {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++)
                            {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success)
                        {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                        }
                        $('#form_result').html(html);
                    }
                });
            });

            $(document).on('click', '.edit', function(){
                var id = $(this).attr('id');
                $('#form_result').html('');
                $.ajax({
                    url :"/sample/"+id+"/edit",
                    dataType:"json",
                    success:function(data)
                    {
                        $('#first_name').val(data.result.first_name);
                        $('#last_name').val(data.result.last_name);
                        $('#hidden_id').val(id);
                        $('.modal-title').text('Edit Record');
                        $('#action_button').val('Edit');
                        $('#action').val('Edit');
                        $('#formModal').modal('show');
                    }
                })
            });

            var user_id;

            $(document).on('click', '.delete', function(){
                user_id = $(this).attr('id');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function(){
                $.ajax({
                    url:"sample/destroy/"+user_id,
                    beforeSend:function(){
                        $('#ok_button').text('Deleting...');
                    },
                    success:function(data)
                    {
                        setTimeout(function(){
                            $('#confirmModal').modal('hide');
                            $('#user_table').DataTable().ajax.reload();
                            alert('Data Deleted');
                        }, 2000);
                    }
                })
            });

        });
    </script>

@endsection