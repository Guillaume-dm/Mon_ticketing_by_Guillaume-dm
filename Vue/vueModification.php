<h2> ⚠️MODIFIER OU SUPPRIMER LES TICKETS - </h2>

<hr />
<?php



foreach ($billets as $billet) : ?>
  <div>
    <!--AS REVIENT A UN EGAL -->
    <h1 style="display:flex; justify-content:space-between;" class="titreBillet"> 🏷️ <?= $billet['TIC_TITRE'] ?> </h1>
    <form action="index.php?action=suppressionT" method="POST">
      <input type="hidden" name="idBillet" value="<?= $billet['id_billet'] ?>">
      </br>
      <button type="submit" class="btn btn-danger">
        Suppresion 🗑️
      </button>
    </form>
  </div>
  <hr />
<?php endforeach;
echo "🟢 En ligne ";
?>
</br>

<button> <a href='index.php?deconnexion=true'><span><i class="icofont-sign-out"></i>Déconnexion</span></a> </button>
<hr />
