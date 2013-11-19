<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131119145849 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE jobs DROP job_private_notes, CHANGE customerCompany customerCompany VARCHAR(255) DEFAULT NULL, CHANGE alternatePickupFirstName alternatePickupFirstName VARCHAR(255) DEFAULT NULL, CHANGE alternatePickupLastName alternatePickupLastName VARCHAR(255) DEFAULT NULL, CHANGE customerPhoneNumber2 customerPhoneNumber2 VARCHAR(255) DEFAULT NULL, CHANGE customerEmailAddress customerEmailAddress VARCHAR(255) DEFAULT NULL, CHANGE computerFormFactor computerFormFactor VARCHAR(255) DEFAULT NULL, CHANGE computerManufacturer computerManufacturer VARCHAR(255) DEFAULT NULL, CHANGE computerModel computerModel VARCHAR(255) DEFAULT NULL, CHANGE computerSerialNumber computerSerialNumber VARCHAR(255) DEFAULT NULL, CHANGE computerProductNumber computerProductNumber VARCHAR(255) DEFAULT NULL, CHANGE computerPasswords computerPasswords VARCHAR(255) DEFAULT NULL, CHANGE jobNotes jobNotes LONGTEXT DEFAULT NULL, CHANGE computerSpecDustingNeeded computerSpecDustingNeeded TINYINT(1) DEFAULT NULL, CHANGE computerSpecRAM computerSpecRAM VARCHAR(255) DEFAULT NULL, CHANGE computerSpecAVType computerSpecAVType VARCHAR(255) DEFAULT NULL, CHANGE computerSpecAVExpired computerSpecAVExpired TINYINT(1) DEFAULT NULL, CHANGE computerSpecHardDrive computerSpecHardDrive VARCHAR(255) DEFAULT NULL, CHANGE jobAssignedTech jobAssignedTech VARCHAR(255) DEFAULT NULL, CHANGE jobCreatedAt jobCreatedAt DATETIME DEFAULT NULL, CHANGE jobUpdatedAt jobUpdatedAt DATETIME DEFAULT NULL");
        $this->addSql("ALTER TABLE private_notes CHANGE noteTime noteTime DATETIME DEFAULT NULL");
        $this->addSql("ALTER TABLE status_entries CHANGE entryTime entryTime DATETIME DEFAULT NULL, CHANGE entryType entryType INT DEFAULT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE jobs ADD job_private_notes LONGTEXT NOT NULL, CHANGE customerCompany customerCompany VARCHAR(255) NOT NULL, CHANGE alternatePickupFirstName alternatePickupFirstName VARCHAR(255) NOT NULL, CHANGE alternatePickupLastName alternatePickupLastName VARCHAR(255) NOT NULL, CHANGE customerPhoneNumber2 customerPhoneNumber2 VARCHAR(255) NOT NULL, CHANGE customerEmailAddress customerEmailAddress VARCHAR(255) NOT NULL, CHANGE computerFormFactor computerFormFactor VARCHAR(255) NOT NULL, CHANGE computerManufacturer computerManufacturer VARCHAR(255) NOT NULL, CHANGE computerModel computerModel VARCHAR(255) NOT NULL, CHANGE computerSerialNumber computerSerialNumber VARCHAR(255) NOT NULL, CHANGE computerProductNumber computerProductNumber VARCHAR(255) NOT NULL, CHANGE computerPasswords computerPasswords VARCHAR(255) NOT NULL, CHANGE jobNotes jobNotes LONGTEXT NOT NULL, CHANGE computerSpecDustingNeeded computerSpecDustingNeeded TINYINT(1) NOT NULL, CHANGE computerSpecRAM computerSpecRAM VARCHAR(255) NOT NULL, CHANGE computerSpecAVType computerSpecAVType VARCHAR(255) NOT NULL, CHANGE computerSpecAVExpired computerSpecAVExpired TINYINT(1) NOT NULL, CHANGE computerSpecHardDrive computerSpecHardDrive VARCHAR(255) NOT NULL, CHANGE jobAssignedTech jobAssignedTech INT NOT NULL, CHANGE jobCreatedAt jobCreatedAt DATETIME NOT NULL, CHANGE jobUpdatedAt jobUpdatedAt DATETIME NOT NULL");
        $this->addSql("ALTER TABLE private_notes CHANGE noteTime noteTime DATETIME NOT NULL");
        $this->addSql("ALTER TABLE status_entries CHANGE entryTime entryTime DATETIME NOT NULL, CHANGE entryType entryType INT NOT NULL");
    }
}
