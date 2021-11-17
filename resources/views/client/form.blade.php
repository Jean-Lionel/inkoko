<div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
    <label for="nom" class="control-label">{{ 'Nom' }}</label>
    <input class="form-control" name="nom" type="text" id="nom" value="{{ isset($client->nom) ? $client->nom : ''}}" >
    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('prenom') ? 'has-error' : ''}}">
    <label for="prenom" class="control-label">{{ 'Prenom' }}</label>
    <input class="form-control" name="prenom" type="text" id="prenom" value="{{ isset($client->prenom) ? $client->prenom : ''}}" >
    {!! $errors->first('prenom', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('contact') ? 'has-error' : ''}}">
    <label for="contact" class="control-label">{{ 'Contact' }}</label>
    <input class="form-control" name="contact" type="text" id="contact" value="{{ isset($client->contact) ? $client->contact : ''}}" >
    {!! $errors->first('contact', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('type') ? 'has-error' : ''}}">
    <label for="type" class="control-label">{{ 'Type' }}</label>
    <input class="form-control" name="type" type="text" id="type" value="{{ isset($client->type) ? $client->type : ''}}" >
    {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
