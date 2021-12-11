@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Fiche d'Alimentation No  {{ $filealimentation->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/file-alimentation') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/file-alimentation/' . $filealimentation->id . '/edit') }}" title="Edit FileAlimentation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('filealimentation' . '/' . $filealimentation->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete FileAlimentation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $filealimentation->id }}</td>
                                    </tr>
                                    <tr><th> Produit </th><td> 
                                        {{ $filealimentation->produit->name }} </td></tr><tr><th> Quantite </th><td> {{ $filealimentation->quantite }} </td></tr><tr><th> Prix Unitaire </th><td> {{ $filealimentation->prix_unitaire }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
