<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('log.store')}}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label>LoginName</label>
        <input id="loginName" type="text" name="loginName" class="form-control">
      </div>
      <div class="form-group">
        <label>Clave</label>
        <input id="clave" type="password" name="clave" class="form-control">
      </div>
      <input type="submit" name="Iniciar" value="Iniciar" class="btn btn-primary">
    </form>
  </body>
</html>
