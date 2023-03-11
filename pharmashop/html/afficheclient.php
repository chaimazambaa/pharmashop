<style>
    table {
        margin: 0 auto;
        width: 100%;
    }

    table td {
        text-align: center;
    }
</style>

<table border=2>
    <thead>
        <tr>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Mot de passe</th>
            <th>Ville</th>
            <th>Adresse</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $row): ?>
            <tr>
                <td>
                    <?= $row['cin'] ?>
                </td>
                <td>
                    <?= $row['nom'] ?>
                </td>
                <td>
                    <?= $row['prenom'] ?>
                </td>
                <td>
                    <?= $row['email'] ?>
                </td>
                <td>
                    <?= $row['mot_de_passe'] ?>
                </td>
                <td>
                    <?= $row['ville'] ?>
                </td>
                <td>
                    <?= $row['adresse'] ?>
                </td>
                <td>
                    <form method="post" action="supprimercl.php">
                        <input type="hidden" name="delete_row" value="<?= $row['cin'] ?>">
                        <button type="submit">Supprimer</button>
                    </form>

                    <input type="hidden" name="update_row" value="<?= $row['cin'] ?>">




                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>