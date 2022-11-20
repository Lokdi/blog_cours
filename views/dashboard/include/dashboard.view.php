<a href="/">Retour sur le front</a>
<div class="d-flex align-items-start">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link text-start active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
            Liste des posts
        </button>
        <button class="nav-link text-start" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
            Liste des commentaires
        </button>
        <button class="nav-link text-start" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">
            Liste des utilisateurs
        </button>
    </div>
    <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Image</th>
                    <th scope="col">Description</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Posté par</th>
                    <th scope="col">Date de création</th>
                    <th scope="col">Date de modification</th>
                    <th scope="col">Date de suppression</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($allPosts as $post): ?>
                <tr>
                    <th scope="row"><?= $post->id ?></th>
                    <td><?= $post->nom ?></td>
                    <td><?= $post->image ?></td>
                    <td><?= $post->description ?></td>
                    <td><?= $post->categorie ?></td>
                    <td><?= $post->username ?></td>
                    <td><?= $post->created_at ?></td>
                    <td><?= $post->modify_at ?></td>
                    <td><?= $post->delete_at ?></td>
                    <td><a href="?op=updatePost&id=<?= $post->id ?>">I</a></td>
                    <td><a href="?op=deletePost&id=<?= $post->id ?>">X</a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>




        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">

        </div>
    </div>
</div>