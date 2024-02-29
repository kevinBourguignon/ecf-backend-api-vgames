<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229105756 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo ADD publisher_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B340C86FCE FOREIGN KEY (publisher_id) REFERENCES publisher (id)');
        $this->addSql('CREATE INDEX IDX_97A931B340C86FCE ON gizmondo (publisher_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B340C86FCE');
        $this->addSql('DROP INDEX IDX_97A931B340C86FCE ON gizmondo');
        $this->addSql('ALTER TABLE gizmondo DROP publisher_id');
    }
}
