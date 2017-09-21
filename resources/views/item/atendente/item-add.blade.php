@extends('layout.main-atendente')
@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Cadastro de Item
                    <small>Preencha todos os campos e clique no botão Cadastrar produto</small>
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
                <br/>
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Produto <span
                                    class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select id="heard" class="form-control" required>
                                <option value="">Escolha um produto..</option>
                                <option value="press">Produto 1</option>
                                <option value="net">Produto 2</option>
                                <option value="mouth">Produto 3</option>
                            </select>

                        </div>
                    </div>
                    <div class="form-group">
                        <label for="middle-name"
                               class="control-label col-md-3 col-sm-3 col-xs-12">Quantidade</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="middle-name" class="form-control col-md-7 col-xs-12" type="text"
                                   name="middle-name">
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-primary" type="reset">Limpar formulário</button>
                            <button type="submit" class="btn btn-success">Cadastrar Novo Item</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @include('item.item-listagem')

@stop