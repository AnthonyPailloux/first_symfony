<?php

// Cette ligne indique que ce fichier contient du code PHP

// Le namespace définit l'emplacement de cette classe dans l'architecture
namespace App\Entity;

// Import des classes nécessaires pour Doctrine (l'outil de base de données)
use App\Repository\ContactRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

// Cette ligne dit à Doctrine que cette classe représente une table dans la base de données
// et qu'elle utilise ContactRepository pour les opérations de base de données
#[ORM\Entity(repositoryClass: ContactRepository::class)]
class Contact
{
    // Cette propriété représente l'identifiant unique de chaque contact
    // #[ORM\Id] dit que c'est la clé primaire (identifiant unique)
    // #[ORM\GeneratedValue] dit que cette valeur est générée automatiquement
    // #[ORM\Column] dit que c'est une colonne dans la base de données
    // "private" signifie que cette propriété n'est accessible que depuis cette classe
    // "?int" signifie que c'est un nombre entier ou null
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Cette propriété stocke le titre du contact
    // #[ORM\Column(length: 255)] dit que c'est une colonne avec maximum 255 caractères
    // "?string" signifie que c'est du texte ou null
    #[ORM\Column(length: 255)]
    private ?string $title = null;

    // Cette propriété stocke l'email du contact
    // #[ORM\Column(type: Types::TEXT)] dit que c'est une colonne de type TEXT
    // (peut contenir plus de texte qu'une colonne normale)
    #[ORM\Column(type: Types::TEXT)]
    private ?string $mail = null;

    // Cette méthode permet de récupérer l'identifiant du contact
    // "public" signifie qu'elle peut être appelée depuis l'extérieur de la classe
    // "?int" signifie qu'elle retourne un nombre entier ou null
    public function getId(): ?int
    {
        // "return" renvoie la valeur de la propriété $id
        return $this->id;
    }

    // Cette méthode permet de récupérer le titre du contact
    // "?string" signifie qu'elle retourne du texte ou null
    public function getTitle(): ?string
    {
        return $this->title;
    }

    // Cette méthode permet de définir (modifier) le titre du contact
    // "string $title" est un paramètre : on doit donner un texte en entrée
    // "static" signifie qu'elle retourne l'objet lui-même (pour pouvoir enchaîner les appels)
    public function setTitle(string $title): static
    {
        // On assigne la nouvelle valeur au titre
        $this->title = $title;

        // On retourne l'objet lui-même pour pouvoir faire des appels en chaîne
        return $this;
    }

    // Cette méthode permet de récupérer l'email du contact
    public function getMail(): ?string
    {
        return $this->mail;
    }

    // Cette méthode permet de définir (modifier) l'email du contact
    public function setMail(string $mail): static
    {
        // On assigne la nouvelle valeur à l'email
        $this->mail = $mail;

        // On retourne l'objet lui-même pour pouvoir faire des appels en chaîne
        return $this;
    }
}
