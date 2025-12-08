<div class="container">
    <form action="?action=updatePersonne" method="POST">
        <input type="text" name="id" value="<?= $personne['id'] ?>" hidden class="form-control">
        <label for="">Nom</label>
        <input type="text" name="nom" value="<?= $personne['nom'] ?>" class="form-control">
        <label for="">Prenom</label>
        <input type="text" name="prenom" value="<?= $personne['prenom'] ?>" class="form-control">
        <label for="">Age</label>
        <input type="text" name="age" value="<?= $personne['age'] ?>" class="form-control">
        <button type= "submit" class="btn btn-primary">Update</button>
    </form>
</div>