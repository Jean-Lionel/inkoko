<div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
    <label for="quantite" class="control-label">{{ 'Quantite' }}</label>
    <input class="form-control" name="quantite" type="number" id="quantite" value="{{ isset($ventepoule->quantite) ? $ventepoule->quantite : ''}}" >
    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($ventepoule->type) ? $ventepoule->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('client_id') ? 'has-error' : ''}}">
    <label for="client_id" class="control-label">{{ 'Client Id' }}</label>
    <input class="form-control" name="client_id" type="number" id="client_id" value="{{ isset($ventepoule->client_id) ? $ventepoule->client_id : ''}}" >
    {!! $errors->first('client_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prix_unitaire') ? 'has-error' : ''}}">
    <label for="prix_unitaire" class="control-label">{{ 'Prix Unitaire' }}</label>
    <input class="form-control" name="prix_unitaire" type="number" id="prix_unitaire" value="{{ isset($ventepoule->prix_unitaire) ? $ventepoule->prix_unitaire : ''}}" >
    {!! $errors->first('prix_unitaire', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
