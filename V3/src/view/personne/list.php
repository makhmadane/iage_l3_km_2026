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
            <td><?= $p->getId() ?></td>
            <td><?php echo $p->getNom() ?></td>
            <td><?php echo $p->getPrenom() ?></td>
            <td><?php echo $p->getAge() ?></td>
            <td>
                <a class="btn btn-danger" href="?action=deletePersonne&id=<?= $p->getId() ?>">Supprimer</a>
                <a class="btn btn-primary" href="?action=modifierPersonne&id=<?= $p->getId() ?>">Modifier</a>
            </td>
        </tr>
    <?php } ?>
</table>
</div>