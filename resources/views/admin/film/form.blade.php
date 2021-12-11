<div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
    <label for="titre" class="control-label">{{ 'Titre' }}</label>
    <input class="form-control" name="titre" type="text" id="titre" value="{{ isset($film->titre) ? $film->titre : ''}}" >
    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('cover') ? 'has-error' : ''}}">
    <label for="cover" class="control-label">{{ 'Cover' }}</label>
    <input class="form-control" name="cover" type="text" id="cover" value="{{ isset($film->cover) ? $film->cover : ''}}" >
    {!! $errors->first('cover', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('category_id') ? 'has-error' : ''}}">
    <label for="category_id" class="control-label">{{ 'Category Id' }}</label>
    <input class="form-control" name="category_id" type="number" id="category_id" value="{{ isset($film->category_id) ? $film->category_id : ''}}" >
    {!! $errors->first('category_id', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prix') ? 'has-error' : ''}}">
    <label for="prix" class="control-label">{{ 'Prix' }}</label>
    <input class="form-control" name="prix" type="number" id="prix" value="{{ isset($film->prix) ? $film->prix : ''}}" >
    {!! $errors->first('prix', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('quantite') ? 'has-error' : ''}}">
    <label for="quantite" class="control-label">{{ 'Quantite' }}</label>
    <input class="form-control" name="quantite" type="number" id="quantite" value="{{ isset($film->quantite) ? $film->quantite : ''}}" >
    {!! $errors->first('quantite', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
