<div class="container">
<a href="?action=addPersonne" class="btn btn-success">Add</a>
<table class="table tbal-striped">
    <tr>
        <td>Id</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Age</td>
        <td>Action(s)</td>
    </tr>
    <?php foreach($personnes  as $p){ ?>
        <tr>
            <td><?= $p['id'] ?></td>
            <td><?php echo $p['nom'] ?></td>
            <td><?php echo $p['prenom'] ?></td>
            <td><?php echo $p['age'] ?></td>
            <td>
                <a class="btn btn-danger" href="?action=deletePersonne&id=<?= $p['id'] ?>">Supprimer</a>
                <a class="btn btn-primary" href="?action=modifierPersonne&id=<?= $p['id'] ?>">Modifier</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>