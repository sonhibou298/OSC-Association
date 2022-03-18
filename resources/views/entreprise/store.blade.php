<html>
<head>
    <title>Liste des pays</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
{{--NavBar--}}
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Gestion Pays <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gestion Entreprise</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Deconnexion</button>
            </form>
        </div>
    </nav>
</header>
{{--End NavBar--}}

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Ajouter une Ese</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('AjouterEntreprise')}}">
                <div class="form-group">
                    <label for="nom">Nom Entreprise</label>
                    <input type="text" name="nom" id="siege" class="form-control">
                </div>
                <div class="form-group">
                    <label for="prenom">Siege</label>
                    <input type="text" name="siege" id="siege" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Telephone</label>
                    <input type="number" name="telephone" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Date Creation</label>
                    <input type="date" name="dtecreation" id="dtecreation" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Registre de commerce</label>
                    <input type="text" name="registre" id="registre" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nom">Ninea</label>
                    <input type="text" name="ninea" id="ninea" class="form-control">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="dispositif">
                    <label class="form-check-label" for="flexCheckDefault">Dispositif Formation</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="organigramme">
                    <label class="form-check-label" for="flexCheckDefault">Organigramme</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="contrat">
                    <label class="form-check-label" for="flexCheckDefault">Contrat</label>
                </div>
                <div class="form-group">
                    <label for="nom">Localite</label>
                    <input type="number" name="quartier" class="form-control">
                </div>
                <div class="form-group"><br><br>
                    <button type="submit" class="btn btn-outline-success">Ajouter</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
