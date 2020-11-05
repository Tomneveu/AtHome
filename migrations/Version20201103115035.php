<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201103115035 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations ADD prestataire_id INT NOT NULL');
        $this->addSql('ALTER TABLE prestations ADD CONSTRAINT FK_B338D8D1BE3DB2B7 FOREIGN KEY (prestataire_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B338D8D1BE3DB2B7 ON prestations (prestataire_id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations DROP FOREIGN KEY FK_B338D8D1BE3DB2B7');
        $this->addSql('DROP INDEX IDX_B338D8D1BE3DB2B7 ON prestations');
        $this->addSql('ALTER TABLE prestations DROP prestataire_id');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
