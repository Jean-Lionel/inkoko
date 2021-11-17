<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($vainqueur->nom) ? $vainqueur->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('age') ? 'has-error' : ''}}">
    <label for="age" class="control-label">{{ 'Age' }}</label>
    <input class="form-control" name="age" type="number" id="age" value="{{ isset($vainqueur->age) ? $vainqueur->age : ''}}" >
    {!! $errors->first('age', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prix_unitaire') ? 'has-error' : ''}}">
    <label for="prix_unitaire" class="control-label">{{ 'Prix Unitaire' }}</label>
    <input class="form-control" name="prix_unitaire" type="number" id="prix_unitaire" value="{{ isset($vainqueur->prix_unitaire) ? $vainqueur->prix_unitaire : ''}}" >
    {!! $errors->first('prix_unitaire', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('observations') ? 'has-error' : ''}}">
    <label for="observations" class="control-label">{{ 'Observations' }}</label>
    <textarea class="form-control" rows="5" name="observations" type="textarea" id="observations" >{{ isset($vainqueur->observations) ? $vainqueur->observations : ''}}</textarea>
    {!! $errors->first('observations', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($vainqueur->type) ? $vainqueur->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
