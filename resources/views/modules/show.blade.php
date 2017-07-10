@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Module {{ $module->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url('/modules') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/modules/' . $module->id . '/edit') }}" title="Edit Module"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <form method="POST" action="{{ url('/modules/'. $module->id) }}" style="display:inline">
                            <input type="hidden" name="_method" value="DELETE">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-danger btn-xs" title="Delete Module" onclick="return confirm('Se eliminaran todas las acciones y algunos roles perderan los respectivos privilegios. Seguro ?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>Cod</th><td>{{ $module->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Nombre </th><td> {{ $module->name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descripcion </th><td> {{ $module->description }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                     @include('accions.index')
                </div>
            </div>
        </div>
    </div>
@endsection

