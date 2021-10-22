<div class="form-group {{ $errors->has('produit') ? 'has-error' : ''}}">
    <label for="produit_id" class="control-label">{{ 'Produit' }}</label>
    
    <select class="form-control" name="produit_id" type="text" id="produit_id" >
        <option></option>
        @foreach($produits as $produit)
        <option value="{{ $produit->id }}">{{ $produit->name }}</option>
        @endforeach
    </select>
    {!! $errors->first('produit', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
    <label for="quantite" class="control-label">{{ 'Quantite' }}</label>
    <input class="form-control" name="quantite" type="number" id="quantite" value="{{ isset($filealimentation->quantite) ? $filealimentation->quantite : ''}}" >
    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('observations') ? 'has-error' : ''}}">
    <label for="observations" class="control-label">{{ 'Observations' }}</label>
    <textarea class="form-control" rows="5" name="observations" type="textarea" id="observations" >{{ isset($filealimentation->observations) ? $filealimentation->observations : ''}}</textarea>
    {!! $errors->first('observations', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
