@extends('home')

@section('link')

<link rel="stylesheet" href="{{asset('varial/css/jquery.dataTables.min.css')}}">
<script src="{{ asset('varial/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
@endsection

@section('module')
<script>
var $a = jQuery.noConflict();
$a(document).ready(function () {
    $a('#example').DataTable({
        "language": {"decimal": "",
            "emptyTable": "Sem dados disponíveis na tabela",
            "info": "Mostrando _START_ para _END_ de _TOTAL_",
            "infoEmpty": "Mostrando 0 a 0 de 0",
            "infoFiltered": "(Filtrado de _MAX_ entradas totais)",
            "infoPostFix": "",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_",
            "loadingRecords": "Carregando...",
            "processing": "Em processamento...",
            "search": "Pesquisa:",
            "zeroRecords": "Nenhum registro correspondente encontrado",
            "paginate": {
                "first": "Primeiro",
                "last": "Último",
                "next": "Próximo",
                "previous": "Anterior"
            },
            "aria": {
                "sortAscending": ": ativar para ordenar a coluna subindo",
                "sortDescending": ": ativar para classificar coluna descendente"
            }
        }
    });

});
</script>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">                        
                        <tbody>
                            @foreach($informativo as $informativos)
                            <tr>
                                <th>{{$informativos->titulo}}</th>
                            </tr>
                            <tr>
                                <th>{{$informativos->texto}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection

