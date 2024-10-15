<form method="POST" action="/utilisateurs/seconnecter" />

<?php echo e(csrf_field()); ?>


<label for="nom">Nom de connexion : </label>
	<input type="text" name="login" id="nom">

<label for="mdp">Mot de passe : </label>
	<input type="password" name="mdp" id="mdp">
	<input type="submit" value="Se connecter">

</form>
<?php /**PATH /var/www/html/fwSB/resources/views/connexion.blade.php ENDPATH**/ ?>