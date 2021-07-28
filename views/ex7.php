</head>
<body>

    <div class="container-fluid bg-gradiant text-center">
        <div class="row">
            <div class="col-12">
    
                <h3 class="bg-success">Exercice 7 - Afficher tous les clients comme ceci :

                <p>Nom de famille du client</p>

                <p>Prénom du client</p>

                <p>Date de naissance du client</p>

                <p>Carte de fidélité : Oui (Si le client en possède une) ou Non (s'il n'en possède pas)</p>

                <p>Numéro de la carte fidélité du client s'il en possède une.</p></h3>

                <table class="table table-dark align-items-center table-hover">
                    <thead class="thead-light">
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Date de Naissance</th>
                    <th scope="col">Carte de fidelité</th>
                    <th scope="col">Numéro de carte</th>
                    </thead>
                    <tbody>
                        <?php foreach($users as $user): ?>
                            <tr>
                                <td><?= $user["firstName"]?></td>
                                <td><?= $user["lastName"]?></td>
                                <td><?= $user["birthDate"]?></td>
                                <td><?= $user["card"]?></td>
                                <td><?= $user["cardNumber"]?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
