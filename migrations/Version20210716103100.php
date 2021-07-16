<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716103100 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moyen_transport (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, lib VARCHAR(255) NOT NULL)');
        $this->addSql('DROP TABLE moyentransport');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moyentransport (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, lib VARCHAR(255) NOT NULL COLLATE BINARY)');
        $this->addSql('DROP TABLE moyen_transport');
    }
}
