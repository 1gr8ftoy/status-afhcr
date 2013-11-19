<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20131119150940 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE jobs ADD customer_first_name VARCHAR(255) NOT NULL, ADD customer_last_name VARCHAR(255) NOT NULL, ADD customer_company VARCHAR(255) DEFAULT NULL, ADD alternate_pickup_first_name VARCHAR(255) DEFAULT NULL, ADD alternate_pickup_last_name VARCHAR(255) DEFAULT NULL, ADD customer_phone_number1 VARCHAR(255) NOT NULL, ADD customer_phone_number2 VARCHAR(255) DEFAULT NULL, ADD customer_email_address VARCHAR(255) DEFAULT NULL, ADD computer_form_factor VARCHAR(255) DEFAULT NULL, ADD computer_manufacturer VARCHAR(255) DEFAULT NULL, ADD computer_model VARCHAR(255) DEFAULT NULL, ADD computer_serial_number VARCHAR(255) DEFAULT NULL, ADD computer_product_number VARCHAR(255) DEFAULT NULL, ADD computer_passwords VARCHAR(255) DEFAULT NULL, ADD computer_spec_dusting_needed TINYINT(1) DEFAULT NULL, ADD computer_spec_ram VARCHAR(255) DEFAULT NULL, ADD computer_spec_av_type VARCHAR(255) DEFAULT NULL, ADD computer_spec_av_expired TINYINT(1) DEFAULT NULL, ADD computer_spec_hard_drive VARCHAR(255) DEFAULT NULL, ADD job_assigned_tech VARCHAR(255) DEFAULT NULL, ADD job_original_location VARCHAR(255) NOT NULL, ADD job_created_at DATETIME DEFAULT NULL, ADD job_updated_at DATETIME DEFAULT NULL, DROP customerFirstName, DROP customerLastName, DROP customerCompany, DROP alternatePickupFirstName, DROP alternatePickupLastName, DROP customerPhoneNumber1, DROP customerPhoneNumber2, DROP customerEmailAddress, DROP computerFormFactor, DROP computerManufacturer, DROP computerModel, DROP computerSerialNumber, DROP computerProductNumber, DROP computerPasswords, DROP computerSpecDustingNeeded, DROP computerSpecRAM, DROP computerSpecAVType, DROP computerSpecAVExpired, DROP computerSpecHardDrive, DROP jobAssignedTech, DROP jobOriginalLocation, DROP jobCreatedAt, DROP jobUpdatedAt, CHANGE jobnotes job_notes LONGTEXT DEFAULT NULL, CHANGE rushorder rush_order TINYINT(1) NOT NULL, CHANGE jobquotedprice job_quoted_price NUMERIC(10, 0) NOT NULL, CHANGE jobpromisedate job_promise_date DATE NOT NULL, CHANGE jobcreatedby job_created_by INT NOT NULL");
        $this->addSql("ALTER TABLE private_notes ADD created_by INT NOT NULL, DROP jobId, DROP createdBy, CHANGE notetext note_text LONGTEXT NOT NULL, CHANGE notetime note_time DATETIME DEFAULT NULL");
        $this->addSql("ALTER TABLE status_entries ADD created_by INT NOT NULL, DROP jobId, DROP createdBy, CHANGE entrytime entry_time DATETIME DEFAULT NULL, CHANGE entrytype entry_type INT DEFAULT NULL, CHANGE entrynotes entry_notes LONGTEXT NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql", "Migration can only be executed safely on 'mysql'.");
        
        $this->addSql("ALTER TABLE jobs ADD customerFirstName VARCHAR(255) NOT NULL, ADD customerLastName VARCHAR(255) NOT NULL, ADD customerCompany VARCHAR(255) DEFAULT NULL, ADD alternatePickupFirstName VARCHAR(255) DEFAULT NULL, ADD alternatePickupLastName VARCHAR(255) DEFAULT NULL, ADD customerPhoneNumber1 VARCHAR(255) NOT NULL, ADD customerPhoneNumber2 VARCHAR(255) DEFAULT NULL, ADD customerEmailAddress VARCHAR(255) DEFAULT NULL, ADD computerFormFactor VARCHAR(255) DEFAULT NULL, ADD computerManufacturer VARCHAR(255) DEFAULT NULL, ADD computerModel VARCHAR(255) DEFAULT NULL, ADD computerSerialNumber VARCHAR(255) DEFAULT NULL, ADD computerProductNumber VARCHAR(255) DEFAULT NULL, ADD computerPasswords VARCHAR(255) DEFAULT NULL, ADD computerSpecDustingNeeded TINYINT(1) DEFAULT NULL, ADD computerSpecRAM VARCHAR(255) DEFAULT NULL, ADD computerSpecAVType VARCHAR(255) DEFAULT NULL, ADD computerSpecAVExpired TINYINT(1) DEFAULT NULL, ADD computerSpecHardDrive VARCHAR(255) DEFAULT NULL, ADD jobAssignedTech VARCHAR(255) DEFAULT NULL, ADD jobOriginalLocation VARCHAR(255) NOT NULL, ADD jobCreatedAt DATETIME DEFAULT NULL, ADD jobUpdatedAt DATETIME DEFAULT NULL, DROP customer_first_name, DROP customer_last_name, DROP customer_company, DROP alternate_pickup_first_name, DROP alternate_pickup_last_name, DROP customer_phone_number1, DROP customer_phone_number2, DROP customer_email_address, DROP computer_form_factor, DROP computer_manufacturer, DROP computer_model, DROP computer_serial_number, DROP computer_product_number, DROP computer_passwords, DROP computer_spec_dusting_needed, DROP computer_spec_ram, DROP computer_spec_av_type, DROP computer_spec_av_expired, DROP computer_spec_hard_drive, DROP job_assigned_tech, DROP job_original_location, DROP job_created_at, DROP job_updated_at, CHANGE job_notes jobNotes LONGTEXT DEFAULT NULL, CHANGE rush_order rushOrder TINYINT(1) NOT NULL, CHANGE job_quoted_price jobQuotedPrice NUMERIC(10, 0) NOT NULL, CHANGE job_promise_date jobPromiseDate DATE NOT NULL, CHANGE job_created_by jobCreatedBy INT NOT NULL");
        $this->addSql("ALTER TABLE private_notes ADD createdBy INT NOT NULL, CHANGE created_by jobId INT NOT NULL, CHANGE note_text noteText LONGTEXT NOT NULL, CHANGE note_time noteTime DATETIME DEFAULT NULL");
        $this->addSql("ALTER TABLE status_entries ADD createdBy INT NOT NULL, CHANGE created_by jobId INT NOT NULL, CHANGE entry_time entryTime DATETIME DEFAULT NULL, CHANGE entry_type entryType INT DEFAULT NULL, CHANGE entry_notes entryNotes LONGTEXT NOT NULL");
    }
}
