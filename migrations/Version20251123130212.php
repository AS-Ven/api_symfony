<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251123130212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stable (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE uma (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, race VARCHAR(255) NOT NULL, style VARCHAR(255) NOT NULL, stable_id INT DEFAULT NULL, INDEX IDX_479D378DA6FA1C8B (stable_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE uma ADD CONSTRAINT FK_479D378DA6FA1C8B FOREIGN KEY (stable_id) REFERENCES stable (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE uma DROP FOREIGN KEY FK_479D378DA6FA1C8B');
        $this->addSql('DROP TABLE stable');
        $this->addSql('DROP TABLE uma');
    }
}
