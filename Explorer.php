<?php

class Explorer extends Personnage {
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
    // constructeurs
    public function __construct($nom,$classe,$civilisation,$endurance,$puissance,$orientation,$resistance)
    {
    parent::__construct($nom ,$classe ,$civilisation);
    $this ->puissance =$puissance;//identification
    $this ->endurance =$endurance;//identification
    $this ->orientation =$orientation;//identification
    $this ->resistance =$resistance;//identification
    }
}