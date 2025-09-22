<?php

namespace App\Repository;

use App\Entity\Contact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

// Cette classe s'appelle ContactRepository et gère les opérations de base de données
// pour l'entité Contact (comme chercher, sauvegarder, supprimer des contacts)
// "extends ServiceEntityRepository" signifie qu'on hérite des fonctions de base
// pour travailler avec la base de données
class ContactRepository extends ServiceEntityRepository
{
    // Le constructeur est une méthode spéciale qui s'exécute automatiquement
    // quand on crée un nouvel objet de cette classe
    // ManagerRegistry contient les informations de connexion à la base de données
    public function __construct(ManagerRegistry $registry)
    {
        // On appelle le constructeur de la classe parent (ServiceEntityRepository)
        // et on lui dit qu'on travaille avec l'entité Contact
        parent::__construct($registry, Contact::class);
    }

    // Ces méthodes sont commentées car elles sont des exemples générés automatiquement
    // par Doctrine (l'outil qui gère la base de données dans Symfony)
    // On peut les décommenter et les modifier selon nos besoins

    //    /**
    //     * Cette méthode cherche tous les contacts qui correspondent à un critère
    //     * @return Contact[] Retourne un tableau d'objets Contact
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        // createQueryBuilder crée une requête SQL pour chercher dans la base
    //        // 'c' est un alias (surnom) pour la table Contact
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')  // Condition : où le champ = valeur
    //            ->setParameter('val', $value)        // On remplace :val par la vraie valeur
    //            ->orderBy('c.id', 'ASC')             // Trier par id croissant
    //            ->setMaxResults(10)                  // Limiter à 10 résultats
    //            ->getQuery()                         // Créer la requête finale
    //            ->getResult()                        // Exécuter et récupérer les résultats
    //        ;
    //    }

    //    /**
    //     * Cette méthode cherche un seul contact qui correspond à un critère
    //     * @return Contact|null Retourne un objet Contact ou null si rien trouvé
    //     */
    //    public function findOneBySomeField($value): ?Contact
    //    {
    //        // Même principe que la méthode précédente mais pour un seul résultat
    //        return $this->createQueryBuilder('c')
    //            ->andWhere('c.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()  // Récupère un seul résultat ou null
    //        ;
    //    }
}
