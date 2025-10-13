<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251013204821 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book_borrow (id INT AUTO_INCREMENT NOT NULL, borrower_id INT NOT NULL, book_id INT NOT NULL, borrowed_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', returned_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7C0CA33D11CE312B (borrower_id), INDEX IDX_7C0CA33D16A2B381 (book_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, borrowed_count INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE book_borrow ADD CONSTRAINT FK_7C0CA33D11CE312B FOREIGN KEY (borrower_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE book_borrow ADD CONSTRAINT FK_7C0CA33D16A2B381 FOREIGN KEY (book_id) REFERENCES book (id)');
        $this->addSql('ALTER TABLE book ADD available_count INT NOT NULL, ADD total_count INT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE book_borrow DROP FOREIGN KEY FK_7C0CA33D11CE312B');
        $this->addSql('ALTER TABLE book_borrow DROP FOREIGN KEY FK_7C0CA33D16A2B381');
        $this->addSql('DROP TABLE book_borrow');
        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE book DROP available_count, DROP total_count');
    }
}
