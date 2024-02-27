<!DOCTYPE html>
<html>


<body>
    <?php
    require("layout/header.php")
    ?>
    <h1>Créer un article</h1>

    <form method="post" id="form" class="col-5 row g-3" action="fonctions/f_creation.php">
        <div class="col-md-6">
            <label for="user" class="form-label">Nom d'utilisateur :</label>
            <input type="text" class="form-control" id="inputEmail4" name="user" required>
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label">Titre :</label>
            <input type="text" class="form-control" id="inputPassword4" name="title">
        </div>
        <div class="col-md-6">
            <label for="title" class="form-label">Catégorie :</label>
            <input type="text" class="form-control" id="inputAddress" name="category">
        </div>
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Description :</label>
            <input type="text" class="form-control" id="inputAddress2" name="desc">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Contenu :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3" cols="2"></textarea>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>
    <?php
    require("layout/footer.php")
    ?>
</body>

</html>