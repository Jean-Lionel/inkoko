<div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
    <label for="quantite" class="control-label">{{ 'Quantite' }}</label>
    <input class="form-control" name="quantite" type="number" id="quantite" value="{{ isset($perteproduit->quantite) ? $perteproduit->quantite : ''}}" >
    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('produit_id') ? 'has-error' : ''}}">
    <label for="produit_id" class="control-label">{{ 'Produit Id' }}</label>
    <input class="form-control" name="produit_id" type="number" id="produit_id" value="{{ isset($perteproduit->produit_id) ? $perteproduit->produit_id : ''}}" >
    {!! $errors->first('produit_id', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
