<?php

require_once('Modele/Modele.php');

class Commentaire extends Modele
{

	public function getCommentaires($idBillet)
	{
		$sql = 'select COM_ID as id, COM_DATE as date,'
			. ' COM_AUTEUR as auteur, COM_CONTENU as contenu from t_commentaire'
			. ' where TIC_ID=?';
		$commentaires = $this->executerRequete($sql, array($idBillet));
		return $commentaires;
	}

	public function ModifierEtat($etat, $idBillet)
	{
		$sql = 'UPDATE t_ticket SET TIC_ETAT = ? WHERE TIC_ID = ?';
		$this->executerRequete($sql, array($etat, $idBillet));
	}

	public function ajouterCommentaire($auteur, $contenu, $idBillet)
	{
		$sql = 'INSERT INTO t_commentaire(COM_DATE, COM_AUTEUR, COM_CONTENU, tic_ID) values(NOW(), ?, ?, ?)';
		$this->executerRequete($sql, array($auteur, $contenu, $idBillet));
	}

	public function getNbComment($idBillet)
	{
		$sql = "SELECT COUNT(COM_ID) as nbComm FROM t_commentaire WHERE tic_ID = ? ";
		return $this->executerRequete($sql, array($idBillet))->fetchColumn();
	}
}
