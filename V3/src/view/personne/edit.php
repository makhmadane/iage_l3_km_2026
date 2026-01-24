<div class="container">
    <form action="?action=updatePersonne" method="POST">
        <input type="text" name="id" value="<?= $personne->getId()?>" hidden class="form-control">
        <label for="">Nom</label>
        <input type="text" name="nom" value="<?= $personne->getNom() ?>" class="form-control">
        <label for="">Prenom</label>
        <input type="text" name="prenom" value="<?= $personne->getPrenom() ?>" class="form-control">
        <label for="">Age</label>
        <input type="text" name="age" value="<?= $personne->getAge() ?>" class="form-control">
        <button type= "submit" class="btn btn-primary">Update</button>
    </form>
</div>