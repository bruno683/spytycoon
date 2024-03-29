<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210903122817 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skills DROP FOREIGN KEY FK_D5311670709770DC');
        $this->addSql('DROP INDEX IDX_D5311670709770DC ON skills');
        $this->addSql('ALTER TABLE skills DROP agents_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE skills ADD agents_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE skills ADD CONSTRAINT FK_D5311670709770DC FOREIGN KEY (agents_id) REFERENCES agents (id)');
        $this->addSql('CREATE INDEX IDX_D5311670709770DC ON skills (agents_id)');
    }
}
