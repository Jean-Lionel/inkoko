@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Animal {{ $animal->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/animal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/animal/' . $animal->id . '/edit') }}" title="Edit Animal"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/animal' . '/' . $animal->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Animal" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $animal->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $animal->name }} </td></tr><tr><th> Quantite </th><td> {{ $animal->quantite }} </td></tr><tr><th> Prix Unitaire </th><td> {{ $animal->prix_unitaire }} </td></tr>

                                    <tr>
                                        <th>Déscription</th>
                                        <td>{{ $animal->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Déscription</th>
                                        <td>{{ $animal->type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Age</th>
                                        <td>{{ $animal->age }} (Jours)</td>
                                    </tr>
                                    <tr>
                                        <td>Date d'enregistrement </td>
                                        <td>
                                            {{  $animal->created_at }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
