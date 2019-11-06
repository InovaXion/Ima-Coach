<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191106103540 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE commande (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, statut VARCHAR(50) NOT NULL, INDEX IDX_6EEAA67DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_de_commande (id INT AUTO_INCREMENT NOT NULL, quantite INT DEFAULT NULL, prix_total INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_de_commande_commande (ligne_de_commande_id INT NOT NULL, commande_id INT NOT NULL, INDEX IDX_C7404E6DCA2A78B2 (ligne_de_commande_id), INDEX IDX_C7404E6D82EA2E54 (commande_id), PRIMARY KEY(ligne_de_commande_id, commande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_de_commande_produit (ligne_de_commande_id INT NOT NULL, produit_id INT NOT NULL, INDEX IDX_3FE3AFCBCA2A78B2 (ligne_de_commande_id), INDEX IDX_3FE3AFCBF347EFB (produit_id), PRIMARY KEY(ligne_de_commande_id, produit_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) NOT NULL, prix INT NOT NULL, path VARCHAR(255) DEFAULT NULL, nb_heures INT DEFAULT NULL, genre TINYINT(1) DEFAULT NULL, INDEX IDX_29A5EC27C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL, age INT DEFAULT NULL, rang1v1 VARCHAR(50) DEFAULT NULL, rang2v2 VARCHAR(50) DEFAULT NULL, rang3v3solo VARCHAR(50) DEFAULT NULL, rang3v3team VARCHAR(50) DEFAULT NULL, nb_heures INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande ADD CONSTRAINT FK_6EEAA67DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ligne_de_commande_commande ADD CONSTRAINT FK_C7404E6DCA2A78B2 FOREIGN KEY (ligne_de_commande_id) REFERENCES ligne_de_commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_de_commande_commande ADD CONSTRAINT FK_C7404E6D82EA2E54 FOREIGN KEY (commande_id) REFERENCES commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_de_commande_produit ADD CONSTRAINT FK_3FE3AFCBCA2A78B2 FOREIGN KEY (ligne_de_commande_id) REFERENCES ligne_de_commande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ligne_de_commande_produit ADD CONSTRAINT FK_3FE3AFCBF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE ligne_de_commande_commande DROP FOREIGN KEY FK_C7404E6D82EA2E54');
        $this->addSql('ALTER TABLE ligne_de_commande_commande DROP FOREIGN KEY FK_C7404E6DCA2A78B2');
        $this->addSql('ALTER TABLE ligne_de_commande_produit DROP FOREIGN KEY FK_3FE3AFCBCA2A78B2');
        $this->addSql('ALTER TABLE ligne_de_commande_produit DROP FOREIGN KEY FK_3FE3AFCBF347EFB');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27C54C8C93');
        $this->addSql('ALTER TABLE commande DROP FOREIGN KEY FK_6EEAA67DA76ED395');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE ligne_de_commande');
        $this->addSql('DROP TABLE ligne_de_commande_commande');
        $this->addSql('DROP TABLE ligne_de_commande_produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
    }
}
