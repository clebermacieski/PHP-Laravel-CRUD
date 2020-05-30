<div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Nome</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" id="name" name="name" value="{{ @$client->name }}">
    </div>
</div>
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" name="email" value="{{ @$client->email }}">
    </div>
</div>
<div class="form-group row">
    <label for="age" class="col-sm-2 col-form-label">Idade</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="age" name="age" value="{{ @$client->age }}">
    </div>
</div>

<div class="form-group row">
    <label for="photo" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
        <input type="file" class="form-control" id="age" name="photo">
    </div>
</div>

<div class="form-group row">
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>