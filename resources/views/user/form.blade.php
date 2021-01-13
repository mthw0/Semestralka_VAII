<div class="form-group text-danger">
    @foreach($errors->all() as $error)
        {{$error}}<br>
    @endforeach
</div>
<form method="post" action="{{$action}}">
    @csrf
    @method($method)
    <div class="form-group">
        <label for="name">Celé meno</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Celé meno" value="{{ old('name', @$model->name) }}">
    </div>
    <div class="form-group">
        <label for="email">Emailová adresa</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Zadajte email" value="{{ old('name',@$model->email) }}">
        <small id="emailHelp" class="form-text text-muted">Vaša emailová adresa ostane u nás v bezpečí.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Heslo</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Heslo">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Zopakovať heslo</label>
        <input type="password" class="form-control" id="password" name="password_confirmation" placeholder="Heslo">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary form-control">
    </div>
</form>
