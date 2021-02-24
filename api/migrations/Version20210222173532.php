<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222173532 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE etudiant ADD prenom VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD mail VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD mot_de_passe VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD petite_enveloppe INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD grande_enveloppe INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD avis_passage INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD colis INT DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD date_petite_enveloppe DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD date_grande_enveloppe DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD date_avis_passage DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD date_colis DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE etudiant ADD chambre VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE etudiant DROP prenom');
        $this->addSql('ALTER TABLE etudiant DROP mail');
        $this->addSql('ALTER TABLE etudiant DROP mot_de_passe');
        $this->addSql('ALTER TABLE etudiant DROP petite_enveloppe');
        $this->addSql('ALTER TABLE etudiant DROP grande_enveloppe');
        $this->addSql('ALTER TABLE etudiant DROP avis_passage');
        $this->addSql('ALTER TABLE etudiant DROP colis');
        $this->addSql('ALTER TABLE etudiant DROP date_petite_enveloppe');
        $this->addSql('ALTER TABLE etudiant DROP date_grande_enveloppe');
        $this->addSql('ALTER TABLE etudiant DROP date_avis_passage');
        $this->addSql('ALTER TABLE etudiant DROP date_colis');
        $this->addSql('ALTER TABLE etudiant DROP chambre');
    }
}
