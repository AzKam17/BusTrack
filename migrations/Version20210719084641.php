<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210719084641 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE arret ADD description VARCHAR(255) NOT NULL, ADD photo VARCHAR(255) NOT NULL, ADD lattitude VARCHAR(255) NOT NULL, ADD longitude VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE moyen_transport ADD num_ordre VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE arret DROP description, DROP photo, DROP lattitude, DROP longitude');
        $this->addSql('ALTER TABLE moyen_transport DROP num_ordre');
    }
}
