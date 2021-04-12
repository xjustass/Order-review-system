@extends(('voyager::master'))


@section('page_header')

    <div class="px-4">


        <div class="table-responsive">
            <div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="form-control input-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select> entries</label></div>
                    </div>

                    <div class="col-sm-6">
                        <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="dataTable"></label></div>
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

                            @foreach( $orders  as $row)

                                <tr role="row" class="odd">
                                    <td>
                                        <div>{{$row->id}}</div>
                                    </td>
                                    <td>
                                        <div>{{$row->first_name}} {{$row->last_name}}</div>
                                    </td>
                                    <td>
                                        <div>
                                            {{$row->company_name}}
                                        </div>
                                    </td>

                                    <td>
                                        <div>
                                            {{$row->service}}
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            {{$row->created_at}}
                                        </div>
                                    </td>


                                    <td class="no-sort no-click bread-actions">
                                        <a href="javascript:" title="Ištrinti" class="btn btn-sm btn-danger pull-right delete" data-id="1" id="delete-1"> <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Ištrinti</span> </a> <a href="http://localhost:8000/admin/categories/1/edit" title="Redaguoti" class="btn btn-sm btn-primary pull-right edit"> <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Redaguoti</span> </a>
                                        <a href="http://localhost:8000/admin/categories/1" title="Žiūrėti" class="btn btn-sm btn-warning pull-right view"> <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">Žiūrėti</span> </a>
                                    </td>
                                </tr>

                            @endforeach



                            <tr role="row" class="even">
                                <td>
                                    <input type="checkbox" name="row_id" id="checkbox_2" value="2">
                                </td>
                                <td>
                                    <div>1</div>
                                </td>
                                <td>
                                    <div>Category 2</div>
                                </td>
                                <td>
                                    <div>category-2</div>
                                </td>
                                <td class="no-sort no-click bread-actions">
                                    <a href="javascript:" title="Delete" class="btn btn-sm btn-danger pull-right delete" data-id="2" id="delete-2"> <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span> </a> <a href="http://localhost:8000/admin/categories/2/edit" title="Edit" class="btn btn-sm btn-primary pull-right edit"> <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span> </a>
                                    <a href="http://localhost:8000/admin/categories/2" title="View" class="btn btn-sm btn-warning pull-right view"> <i class="voyager-eye"></i> <span class="hidden-xs hidden-sm">View</span> </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
                    </div>
                    <div class="col-sm-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" aria-controls="dataTable" tabindex="0" id="dataTable_previous"><a href="#">Previous</a></li>
                                <li class="paginate_button active" aria-controls="dataTable" tabindex="0"><a href="#">1</a></li>
                                <li class="paginate_button next disabled" aria-controls="dataTable" tabindex="0" id="dataTable_next"><a href="#">Next</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@stop

@section('content')



@endsection