<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 align="center"  class="m-4">Modifier les filières</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
<form action="filiere/{{$filiere->id}}" method="post">
     @csrf
     @method('PUT')
  <div class="mb-3">
    <label for="nom" class="form-label">ID :</label>
    <input type="text" class="form-control" name="nom" value="{{$filiere->id}}" readonly>
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Nom de Filière :</label>
    <input type="text" class="form-control" name="prenom" value="{{$filiere->nom}}">
  </div>
  <input type="submit" class="btn btn-primary m-2"value="Envoyer">
  <input type="reset" class="btn btn-secondary"value="Annuler">
</form>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
