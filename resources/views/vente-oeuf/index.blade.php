@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Vente d' oeuf</div>
                    <div class="card-body">
                        <a href="{{ url('/vente-oeuf/create') }}" class="btn btn-success btn-sm" title="Add New VenteOeuf">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau vente
                        </a>

                        <form method="GET" action="{{ url('/vente-oeuf') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Quantite</th><th>Client Id</th><th>Prix Unitaire</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($venteoeuf as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->quantite }}</td><td>{{ $item->client_id }}</td><td>{{ $item->prix_unitaire }}</td>
                                        <td>
                                            <a href="{{ url('/vente-oeuf/' . $item->id) }}" title="View VenteOeuf"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/vente-oeuf/' . $item->id . '/edit') }}" title="Edit VenteOeuf"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/vente-oeuf' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete VenteOeuf" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $venteoeuf->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
