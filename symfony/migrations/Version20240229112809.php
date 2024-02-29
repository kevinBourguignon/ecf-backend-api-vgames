<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229112809 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B38AAA43D0');
        $this->addSql('DROP INDEX IDX_97A931B38AAA43D0 ON gizmondo');
        $this->addSql('ALTER TABLE gizmondo DROP publisher_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo ADD publisher_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B38AAA43D0 FOREIGN KEY (publisher_id) REFERENCES publisher (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_97A931B38AAA43D0 ON gizmondo (publisher_id)');
    }
}
