<?php
class Personnage

{
//  Attributs
protected $nom;
protected $classe;
protected $civilisation;
public $puissance;
public $endurance;
public $orientation;
public $resistance;
}
// Méthodes
public function __construct($nom,$classe,$civilisation,$puissance,$endurance,$orientation,$resistance)
{
    $this ->nom = $nom; //identification
    $this ->classe = $classe;//identification
    $this ->civilisation =$civilisation;//identification
    $this ->puissance =$puissance;//identification
    $this ->endurance =$endurance;//identification
    $this ->orientation =$orientation;//identification
    $this ->resistance =$resistance;//identification
}
protected function affichage()
{
    echo "nom : $this->classe<BR>classe : $this->civilisation<br>puissance : $this->puissance
    <br>endurance : $this->endurance <br>orientation : $this->orientation <br>resistance : $this->resistance";//mise en place pour affichage avec this
}