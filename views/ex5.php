</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">
    
                <h3 class="bg-success">Exercice 5 - Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".
                <p>Les afficher comme ceci :</p>

                <p>Nom : Nom du client</p>

                <p> Prénom : Prénom du client</p>

                <p>Trier les noms par ordre alphabétique.</p></h3>

                <table class="table table-dark align-items-center table-hover">
                    <thead class="thead-light">
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user["lastName"] ?></td>
                                <td><?= $user["firstName"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
