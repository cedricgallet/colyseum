</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">
                
                <h3 class="bg-success">Exercice 2 - Afficher tous les types de spectacles possibles.</h3>

                <table class="table table-dark table-hover">
                    <thead class="thead-light">
                        <th scope="col">id</th>
                        <th scope="col">type</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user["id"] ?></td>
                                <td><?= $user["type"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>