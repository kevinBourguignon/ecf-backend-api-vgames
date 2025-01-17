<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229104758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publisher DROP FOREIGN KEY FK_9CE8D5468AAA43D0');
        $this->addSql('DROP INDEX IDX_9CE8D5468AAA43D0 ON publisher');
        $this->addSql('ALTER TABLE publisher DROP publisher_id_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE publisher ADD publisher_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publisher ADD CONSTRAINT FK_9CE8D5468AAA43D0 FOREIGN KEY (publisher_id_id) REFERENCES gizmondo (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_9CE8D5468AAA43D0 ON publisher (publisher_id_id)');
    }
}
