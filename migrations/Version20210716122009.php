<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210716122009 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trajet_arret (trajet_id INT NOT NULL, arret_id INT NOT NULL, INDEX IDX_DB8B374D12A823 (trajet_id), INDEX IDX_DB8B37468F1C150 (arret_id), PRIMARY KEY(trajet_id, arret_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE trajet_moyen_transport (trajet_id INT NOT NULL, moyen_transport_id INT NOT NULL, INDEX IDX_FE953364D12A823 (trajet_id), INDEX IDX_FE9533643ED8D53F (moyen_transport_id), PRIMARY KEY(trajet_id, moyen_transport_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE trajet_arret ADD CONSTRAINT FK_DB8B374D12A823 FOREIGN KEY (trajet_id) REFERENCES trajet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trajet_arret ADD CONSTRAINT FK_DB8B37468F1C150 FOREIGN KEY (arret_id) REFERENCES arret (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trajet_moyen_transport ADD CONSTRAINT FK_FE953364D12A823 FOREIGN KEY (trajet_id) REFERENCES trajet (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trajet_moyen_transport ADD CONSTRAINT FK_FE9533643ED8D53F FOREIGN KEY (moyen_transport_id) REFERENCES moyen_transport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE trajet ADD commune_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE trajet ADD CONSTRAINT FK_2B5BA98C131A4F72 FOREIGN KEY (commune_id) REFERENCES commune (id)');
        $this->addSql('CREATE INDEX IDX_2B5BA98C131A4F72 ON trajet (commune_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE trajet_arret');
        $this->addSql('DROP TABLE trajet_moyen_transport');
        $this->addSql('ALTER TABLE trajet DROP FOREIGN KEY FK_2B5BA98C131A4F72');
        $this->addSql('DROP INDEX IDX_2B5BA98C131A4F72 ON trajet');
        $this->addSql('ALTER TABLE trajet DROP commune_id');
    }
}
