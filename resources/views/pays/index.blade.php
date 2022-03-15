
<html>
<head>
    <title>Liste des pays</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Liste des pays</h2>
        </div>
        <div class="card-body">
            <a href="addAdmin" class="btn btn-outline-secondary">Ajouter un pays</a><br><br>
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Indicatif</th>
                </tr>
                @foreach($pays as $p)
                    <tr>
                        <td>{{$p->id}}</td>
                        <td>{{$p->nom}}</td>
                        <td>{{$p->indicatif}}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</body>
</html>
