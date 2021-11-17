@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">VenteOeuf {{ $venteoeuf->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/vente-oeuf') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/vente-oeuf/' . $venteoeuf->id . '/edit') }}" title="Edit VenteOeuf"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('venteoeuf' . '/' . $venteoeuf->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete VenteOeuf" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $venteoeuf->id }}</td>
                                    </tr>
                                    <tr><th> Quantite </th><td> {{ $venteoeuf->quantite }} </td></tr><tr><th> Client Id </th><td> {{ $venteoeuf->client_id }} </td></tr><tr><th> Prix Unitaire </th><td> {{ $venteoeuf->prix_unitaire }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
