<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="control-label">{{ 'Name' }}</label>
    <input class="form-control" name="name" type="text" id="name" value="{{ isset($produit->name) ? $produit->name : ''}}" required>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
    <label for="quantite" class="control-label">{{ 'Quantite' }}</label>
    <input class="form-control" name="quantite" type="number" id="quantite" value="{{ isset($produit->quantite) ? $produit->quantite : ''}}" required>
    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prix_unitaire') ? 'has-error' : ''}}">
    <label for="prix_unitaire" class="control-label">{{ 'Prix Unitaire' }}</label>
    <input class="form-control" name="prix_unitaire" type="number" id="prix_unitaire" value="{{ isset($produit->prix_unitaire) ? $produit->prix_unitaire : ''}}" >
    {!! $errors->first('prix_unitaire', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="control-label">{{ 'Description' }}</label>
    <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ isset($produit->description) ? $produit->description : ''}}</textarea>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="control-label">{{ 'Category' }}</label>
    <select name="category" class="form-control" id="category" >
    @foreach (json_decode('{"Vitamine": "Vitamine", "Minereau": "Minereau", "Torteau": "Torteau", "Autre":"Autre"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($produit->category) && $produit->category == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
    {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
