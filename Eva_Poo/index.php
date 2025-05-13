



<?php

class Vetement
{
    // Propriétés
    private int $id;
    private string $nom;
    private string $categorie;
    private float $prix;
    private string $couleurVetement;
    private string $couleurPrix;

    // Constructeur
    public function __construct(
        int $id,
        string $nom,
        string $categorie,
        float $prix,
        string $couleurVetement,
        string $couleurPrix
    ) {
        $this->id = $id;
        $this->nom = $nom;
        $this->categorie = $categorie;
        $this->prix = $prix;
        $this->couleurVetement = $couleurVetement;
        $this->couleurPrix = $couleurPrix;
    }

    // Getters
    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCategorie(): string
    {
        return $this->categorie;
    }

    public function getPrix(): float
    {
        return $this->prix;
    }

    public function getCouleurVetement(): string
    {
        return $this->couleurVetement;
    }

    public function getCouleurPrix(): string
    {
        return $this->couleurPrix;
    }

    // Setters
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function setCategorie(string $categorie): void
    {
        $this->categorie = $categorie;
    }

    public function setPrix(float $prix): void
    {
        $this->prix = $prix;
    }

    public function setCouleurVetement(string $couleurVetement): void
    {
        $this->couleurVetement = $couleurVetement;
    }

    public function setCouleurPrix(string $couleurPrix): void
    {
        $this->couleurPrix = $couleurPrix;
    }

    // Méthode d'affichage stylisé
    public function afficherAvecStyle(): string
    {
        return "<div style='color: {$this->couleurVetement};'>
                    <strong>{$this->nom}</strong> ({$this->categorie}) - 
                    <span style='color: {$this->couleurPrix};'>{$this->prix} €</span>
                </div>";
    }
}

$chemise = new Vetement(1, "Chemise Slim", "Homme", 39.99, "blue", "green");
echo $chemise->afficherAvecStyle();
echo "<br>";
$chemise->setNom("Chemise Classique");

$chemise->setPrix(29.99);
echo "<br>";
$chemise->setCouleurVetement("red");
$chemise->setCouleurPrix("orange");
echo "<br>";
$chemise->setCategorie("homme");

echo $chemise->afficherAvecStyle();
echo "<br>";



echo "<br>";



// mettre en protected les propriétés du model car si tu veux dans tes class enfants faire :     public function direNom() {
    //     echo $this->nom; // ❌ ERREUR : propriété privée
    // }

    // 16/20
