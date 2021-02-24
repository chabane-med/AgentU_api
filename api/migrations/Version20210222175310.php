<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210222175310 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE agent_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE rendez_vous_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE agent (id INT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE rendez_vous (id INT NOT NULL, etudiant_id INT DEFAULT NULL, agent_id INT NOT NULL, date DATE DEFAULT NULL, motif VARCHAR(255) DEFAULT NULL, disponible BOOLEAN DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_65E8AA0ADDEAB1A3 ON rendez_vous (etudiant_id)');
        $this->addSql('CREATE INDEX IDX_65E8AA0A3414710B ON rendez_vous (agent_id)');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0ADDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE rendez_vous ADD CONSTRAINT FK_65E8AA0A3414710B FOREIGN KEY (agent_id) REFERENCES agent (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE incident ADD date DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE incident ADD lieu VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE incident ADD description VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE incident ADD image_url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE incident ADD etat SMALLINT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE rendez_vous DROP CONSTRAINT FK_65E8AA0A3414710B');
        $this->addSql('DROP SEQUENCE agent_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE rendez_vous_id_seq CASCADE');
        $this->addSql('DROP TABLE agent');
        $this->addSql('DROP TABLE rendez_vous');
        $this->addSql('ALTER TABLE incident DROP date');
        $this->addSql('ALTER TABLE incident DROP lieu');
        $this->addSql('ALTER TABLE incident DROP description');
        $this->addSql('ALTER TABLE incident DROP image_url');
        $this->addSql('ALTER TABLE incident DROP etat');
    }
}
