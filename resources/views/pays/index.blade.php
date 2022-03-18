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
                <a class="nav-link" href="{{route('ListePays')}}">Gestion Pays <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('ListeEntreprise')}}">Gestion Entreprise</a>
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
            <h2>Liste des pays</h2>
        </div>
        <div class="card-body">
            <a href="{{route('CreerPays')}}" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Indicatif</th>
                    <th>Action</th>
                </tr>
                @foreach($pays as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nom}}</td>
                        <td>{{$p->indicatif}}</td>
                        <td>
                        <a href=""><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                        <a onclick="return confirm('Voulez-vous supprimer ce pays ?')" href="{{ route('SupprimerPays', $p )}}"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
