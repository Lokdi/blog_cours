<form action="" method="POST" >
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <?php if ($_GET['op'] === 'account' ): ?>
                            <h3>Modification de mon profil</h3>
                        <?php else:?>
                            <h3>S'enregistrer</h3>
                        <?php endif; ?>
                        <form class="requires-validation" novalidate>

                            <div class="col-md-12">
                                <input class="form-control" type="text" name="username" placeholder="Username" value="<?= $getInformationsAccount->username ?? '' ?>" required>
                                <div class="valid-feedback">Le champ username est valide !</div>
                                <div class="invalid-feedback">Le champ username ne peut pas être vide !</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail" value="<?= $getInformationsAccount->email ?? '' ?>"  required>
                                <div class="valid-feedback">Le champ E-amil est valide!</div>
                                <div class="invalid-feedback">Le champ E-mail ne peut pas être vide !</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="password" name="password" placeholder="Password" required>
                                <div class="valid-feedback">Le champ password est valide!</div>
                                <div class="invalid-feedback">Le champ password ne peut être vide!</div>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label class="form-check-label">Je confirme que toutes les données sont correctes</label>
                                <div class="invalid-feedback">Veuillez confirmer que les données saisies sont toutes correctes !</div>
                            </div>
                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">
                                    <?php if ($_GET['op'] === 'account' ): ?>
                                    Modification
                                    <?php else:?>
                                    S'incrire
                                    <?php endif; ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>