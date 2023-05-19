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
    <h1 align="center"  class="m-4">Ajouter un étudiant</h1>
    <div class="container min-vh-80 d-flex justify-content-center align-items-center">
<form action="/etudiants" method="post">
     @csrf
     @method('post')
  <div class="mb-3">
    <label for="nom" class="form-label">Nom :</label>
    <input type="text" class="form-control" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prenom :</label>
    <input type="text" class="form-control" name="prenom">
  </div>

  <div class="input-group-text m-4">
    <label for="sexe" class="form-label">Sexe :</label>&nbsp;&nbsp;
    <input class="form-check-input" type="radio" value="Male" name="sexe" >&nbsp;&nbsp;  Male
&nbsp;&nbsp;
    <input class="form-check-input " type="radio" value="Female" name="sexe" >&nbsp;&nbsp;  Female
  </div>

   <div class="mb-3">
    Filieres :
   <select name="filiere_id" >
    <option selected disabled >Select Filiere</option>
    <option value="1">informatique</option>
    <option value="2">Management</option>
    {{-- @foreach ($filieres as $item)
        <option >{{$item->nom}}</option>
    @endforeach --}}
   </select>
  </div>
  <input type="submit" class="btn btn-primary m-2"value="Envoyer">
  <input type="reset" class="btn btn-secondary"value="Annuler">
</form>
   </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
