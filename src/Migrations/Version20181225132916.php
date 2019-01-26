<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181225132916 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projet ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA9A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_50159CA9A76ED395 ON projet (user_id)');
        $this->addSql('ALTER TABLE user CHANGE role role LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON user (username)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64935C246D5 ON user (password)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9A76ED395');
        $this->addSql('DROP INDEX IDX_50159CA9A76ED395 ON projet');
        $this->addSql('ALTER TABLE projet DROP user_id');
        $this->addSql('DROP INDEX UNIQ_8D93D649F85E0677 ON user');
        $this->addSql('DROP INDEX UNIQ_8D93D64935C246D5 ON user');
        $this->addSql('ALTER TABLE user CHANGE role role VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
    }
}
