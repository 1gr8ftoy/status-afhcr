<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131119145407 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, username_canonical VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, email_canonical VARCHAR(255) NOT NULL, enabled TINYINT(1) NOT NULL, salt VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, last_login DATETIME DEFAULT NULL, locked TINYINT(1) NOT NULL, expired TINYINT(1) NOT NULL, expires_at DATETIME DEFAULT NULL, confirmation_token VARCHAR(255) DEFAULT NULL, password_requested_at DATETIME DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT '(DC2Type:array)', credentials_expired TINYINT(1) NOT NULL, credentials_expire_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_1483A5E992FC23A8 (username_canonical), UNIQUE INDEX UNIQ_1483A5E9A0D96FBF (email_canonical), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE jobs (id INT AUTO_INCREMENT NOT NULL, customerFirstName VARCHAR(255) NOT NULL, customerLastName VARCHAR(255) NOT NULL, customerCompany VARCHAR(255) NOT NULL, alternatePickupFirstName VARCHAR(255) NOT NULL, alternatePickupLastName VARCHAR(255) NOT NULL, customerPhoneNumber1 VARCHAR(255) NOT NULL, customerPhoneNumber2 VARCHAR(255) NOT NULL, customerEmailAddress VARCHAR(255) NOT NULL, computerFormFactor VARCHAR(255) NOT NULL, computerManufacturer VARCHAR(255) NOT NULL, computerModel VARCHAR(255) NOT NULL, computerSerialNumber VARCHAR(255) NOT NULL, computerProductNumber VARCHAR(255) NOT NULL, computerPasswords VARCHAR(255) NOT NULL, jobNotes LONGTEXT NOT NULL, rushOrder TINYINT(1) NOT NULL, jobQuotedPrice NUMERIC(10, 0) NOT NULL, job_private_notes LONGTEXT NOT NULL, jobPromiseDate DATE NOT NULL, jobCreatedBy INT NOT NULL, computerSpecDustingNeeded TINYINT(1) NOT NULL, computerSpecRAM VARCHAR(255) NOT NULL, computerSpecAVType VARCHAR(255) NOT NULL, computerSpecAVExpired TINYINT(1) NOT NULL, computerSpecHardDrive VARCHAR(255) NOT NULL, jobAssignedTech INT NOT NULL, jobOriginalLocation VARCHAR(255) NOT NULL, jobCreatedAt DATETIME NOT NULL, jobUpdatedAt DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE private_notes (id INT AUTO_INCREMENT NOT NULL, job_id INT DEFAULT NULL, jobId INT NOT NULL, noteText LONGTEXT NOT NULL, noteTime DATETIME NOT NULL, createdBy INT NOT NULL, INDEX IDX_2D52FA73BE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("CREATE TABLE status_entries (id INT AUTO_INCREMENT NOT NULL, job_id INT DEFAULT NULL, jobId INT NOT NULL, entryTime DATETIME NOT NULL, entryType INT NOT NULL, entryNotes LONGTEXT NOT NULL, createdBy INT NOT NULL, INDEX IDX_2528C440BE04EA9 (job_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB");
        $this->addSql("ALTER TABLE private_notes ADD CONSTRAINT FK_2D52FA73BE04EA9 FOREIGN KEY (job_id) REFERENCES jobs (id)");
        $this->addSql("ALTER TABLE status_entries ADD CONSTRAINT FK_2528C440BE04EA9 FOREIGN KEY (job_id) REFERENCES jobs (id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE private_notes DROP FOREIGN KEY FK_2D52FA73BE04EA9");
        $this->addSql("ALTER TABLE status_entries DROP FOREIGN KEY FK_2528C440BE04EA9");
        $this->addSql("DROP TABLE users");
        $this->addSql("DROP TABLE jobs");
        $this->addSql("DROP TABLE private_notes");
        $this->addSql("DROP TABLE status_entries");
    }
}
