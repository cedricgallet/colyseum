</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">
    
                <h3 class="bg-success">Exercice 6 - Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure.
                <p>les titres par ordre alphabétique.</p>  
                <p>Afficher les résultat comme ceci : Spectacle par artiste, le date à heure.</p></h3>

                <table class="table table-dark align-items-center table-hover">
                    <thead class="thead-light">
                    <th scope="col">Titre spectacle</th>
                    <th scope="col">Artiste</th>
                    <th scope="col">Date</th>
                    <th scope="col">Heure de démarrage</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user["title"]?></td>
                                <td><?= $user["performer"]?></td>
                                <td><?= $user["date"]?></td>
                                <td><?= $user["startTime"]?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
