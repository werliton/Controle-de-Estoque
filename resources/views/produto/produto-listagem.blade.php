<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>{{$titulo}} Cadastrados
            </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">

            <p>Aqui estão listados todos os {{$titulo}} cadastrados</p>

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">Código</th>
                        <th class="column-title">Descrição</th>
                        <th class="column-title">Marca</th>
                        <th class="column-title">Unidade de medida</th>
                        <th class="column-title no-link last"><span class="nobr">Action</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span
                                        class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr class="even pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">121000040</td>
                        <td class=" ">May 23, 2014 11:47:56 PM</td>
                        <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                        <td class="a-right a-right ">$7.45</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                        </td>
                        </td>
                    </tr>
                    <tr class="odd pointer">
                        <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                        </td>
                        <td class=" ">121000039</td>
                        <td class=" ">May 23, 2014 11:30:12 PM</td>
                        <td class=" ">121000208 <i class="success fa fa-long-arrow-up"></i>
                        </td>
                        <td class=" ">John Blank L</td>
                        <td>
                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Editar </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Deletar </a>
                          </td>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
</div>