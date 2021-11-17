@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Vainqueur {{ $vainqueur->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vainqueur') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vainqueur/' . $vainqueur->id . '/edit') }}" title="Edit Vainqueur"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('vainqueur' . '/' . $vainqueur->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Vainqueur" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $vainqueur->id }}</td>
                                    </tr>
                                    <tr><th> Nom </th><td> {{ $vainqueur->nom }} </td></tr><tr><th> Age </th><td> {{ $vainqueur->age }} </td></tr><tr><th> Prix Unitaire </th><td> {{ $vainqueur->prix_unitaire }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
