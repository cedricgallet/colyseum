</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">

                <h3 class="bg-success">Exercice 3 - Afficher les 20 premiers clients.</h3>

                <table class="table table-dark table-hover">
                    <thead class="thead-light">
                        <th scope="col">Nom</th>
                        <th scope="col">Prenom</th>
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
