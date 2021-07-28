</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">
    
                <h3 class="bg-success">Exercice 4 - N'afficher que les clients possédant une carte de fidélité.</h3>

                <table class="table table-dark align-items-center table-hover">
                    <thead class="thead-light">
                    <th scope="col">Carte</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user["card"] ?></td>
                                <td><?= $user["lastName"] ?></td>
                                <td><?= $user["firstName"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
