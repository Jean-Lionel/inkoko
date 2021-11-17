@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Fiche d'Alimentation</div>
                    <div class="card-body">
                        <a href="{{ url('/file-alimentation/create') }}" class="btn btn-success btn-sm" title="Add New FileAlimentation">
                            <i class="fa fa-plus" aria-hidden="true"></i> 
                            Nouveau
                        </a>

                        <form method="GET" action="{{ url('/file-alimentation') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
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
                                        <th>#</th><th>Produit</th><th>Quantite</th><th>Prix Unitaire</th>
                                        <th>Prix Total</th>

                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($filealimentation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->produit->name ?? '' }}</td><td>{{ $item->quantite }}</td><td>
                                            {{ $item->produit->prix_unitaire  ?? 0}}</td>
                                            <td>
                                            {{ number_format( $item->quantite *  ($item->produit->prix_unitaire  ?? 0))}}

                                            </td>
                                        <td>
                                            <a href="{{ url('/file-alimentation/' . $item->id) }}" title="View FileAlimentation"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/file-alimentation/' . $item->id . '/edit') }}" title="Edit FileAlimentation"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/file-alimentation' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete FileAlimentation" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $filealimentation->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
