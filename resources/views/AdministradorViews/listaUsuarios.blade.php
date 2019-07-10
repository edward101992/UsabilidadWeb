@extends('PlantillaViews.layout')
    @section('contenido')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-dark">
            <i class="icon-settings font-dark">
            </i>
            <span class="caption-subject bold uppercase">
                {{ $titulo }}
            </span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-toolbar">
            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group">
                        <a class="btn btn-success" href="/usuarios/crear">
                            NUEVO USUARIO
                        </a>
                        <!--  
                        <button href="/usuarios/crear" id="sample_editable_1_new" class="btn sbold green"> Agregar Nuevo
                        <i class="fa fa-plus"></i>
                        </button>
                        !-->
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
            <thead>
                <tr>
                    <th>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                            <input class="group-checkable" data-set="#sample_1 .checkboxes" type="checkbox"/>
                            <span>
                            </span>
                        </label>
                    </th>
                    <th>
                        Nombre
                    </th>
                     <th>
                        Apellido
                    </th>
                       <th>
                        Email
                    </th>
                       <th>
                        Telefono
                    </th>
                     <th>
                        Accion
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                            <input class="checkboxes" type="checkbox" value="1"/>
                            <span>
                            </span>
                        </label>
                    </td>
                    <td>
                        shuxer
                    </td>
                    <td>
                        <a href="mailto:shuxer@gmail.com">
                            shuxer@gmail.com
                        </a>
                    </td>
                     <td>
                        shuxer
                    </td>
                     <td>
                        shuxer
                    </td>
                    <td>
                        <div class="btn-group">
                            <button aria-expanded="false" class="btn btn-xs green dropdown-toggle" data-toggle="dropdown" type="button">
                                Accion
                                <i class="fa fa-angle-down">
                                </i>
                            </button>
                            <ul class="dropdown-menu pull-left" role="menu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-user">
                                        </i>
                                        Editar Usuario
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @foreach($usuarios2 as $us)
                <tr class="odd gradeX">
                    <td>
                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                            <input class="checkboxes" type="checkbox" value="1"/>
                            <span>
                            </span>
                        </label>
                    </td>
                    <td>
                        {{ $us->usuario_nombre}}
                    </td>
                     <td>
                        {{ $us->usuario_apellido}}
                    </td>
                     <td>
                        {{ $us->usuario_telefono}}
                    </td>
                    <td>
                        <a href="mailto:{{$us->email }}">
                            {{ $us->email }}
                        </a>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button aria-expanded="false" class="btn btn-xs green dropdown-toggle" data-toggle="dropdown" type="button">
                                Accion
                                <i class="fa fa-angle-down">
                                </i>
                            </button>
                            <ul class="dropdown-menu pull-left" role="menu">
                                <li>
                                    <a href="javascript:;">
                                        <i class="icon-user">
                                        </i>
                                        Editar Usuario
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
  
        </table>
        {!! $usuarios2->render() !!}
    </div>
</div>
    

@endsection
