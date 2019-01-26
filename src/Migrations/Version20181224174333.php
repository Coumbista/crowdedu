<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181224174333 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE projet ADD categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA9BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_50159CA9BCF5E72D ON projet (categorie_id)');
        $this->addSql('ALTER TABLE don ADD projet_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D9C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('CREATE INDEX IDX_F8F081D9C18272 ON don (projet_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D9C18272');
        $this->addSql('DROP INDEX IDX_F8F081D9C18272 ON don');
        $this->addSql('ALTER TABLE don DROP projet_id');
        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA9BCF5E72D');
        $this->addSql('DROP INDEX IDX_50159CA9BCF5E72D ON projet');
        $this->addSql('ALTER TABLE projet DROP categorie_id');
    }
}
