<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200911115627 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE "user" (id SERIAL NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, password_status INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649F85E0677 ON "user" (username)');
        $this->addSql('CREATE TABLE state (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE source (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE district (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, cadastral_code VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE communication (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE classifier (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, min_price DOUBLE PRECISION NOT NULL, max_price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE category (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE bell (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE attribute (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE plot (id SERIAL NOT NULL, source_id INT NOT NULL, classifier_id INT NOT NULL, category_id INT NOT NULL, district_id INT NOT NULL, attribute_id INT NOT NULL, electricity_communication_id INT NOT NULL, gas_communication_id INT NOT NULL, water_communication_id INT NOT NULL, heating_communication_id INT NOT NULL, road_communication_id INT NOT NULL, bell_id INT NOT NULL, state_id INT NOT NULL, performer_user_id INT DEFAULT NULL, last_save_performer_user_id INT DEFAULT NULL, identifier VARCHAR(255) NOT NULL, announcement_text TEXT DEFAULT NULL, permitted_use TEXT DEFAULT NULL, permitted_use_doc TEXT DEFAULT NULL, address TEXT DEFAULT NULL, locality TEXT DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, area DOUBLE PRECISION DEFAULT NULL, unit_price DOUBLE PRECISION DEFAULT NULL, cadastral_number VARCHAR(255) DEFAULT NULL, url_link TEXT DEFAULT NULL, placement_date DATE DEFAULT NULL, relevance_date DATE DEFAULT NULL, screenshot_link TEXT DEFAULT NULL, comment_attribute TEXT DEFAULT NULL, comment_processing TEXT DEFAULT NULL, comment_general TEXT DEFAULT NULL, processing_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_BEBB8F89953C1C61 ON plot (source_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89D5C2493D ON plot (classifier_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F8912469DE2 ON plot (category_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89B08FA272 ON plot (district_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89B6E62EFA ON plot (attribute_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89364458E ON plot (electricity_communication_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F8922160448 ON plot (gas_communication_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89BEB35D7B ON plot (water_communication_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F898A4CE76 ON plot (heating_communication_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F89F298A138 ON plot (road_communication_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F896D4ED28E ON plot (bell_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F895D83CC1 ON plot (state_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F8911ABC224 ON plot (performer_user_id)');
        $this->addSql('CREATE INDEX IDX_BEBB8F895B9851D7 ON plot (last_save_performer_user_id)');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89953C1C61 FOREIGN KEY (source_id) REFERENCES source (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89D5C2493D FOREIGN KEY (classifier_id) REFERENCES classifier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F8912469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89B08FA272 FOREIGN KEY (district_id) REFERENCES district (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89B6E62EFA FOREIGN KEY (attribute_id) REFERENCES attribute (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89364458E FOREIGN KEY (electricity_communication_id) REFERENCES communication (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F8922160448 FOREIGN KEY (gas_communication_id) REFERENCES communication (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89BEB35D7B FOREIGN KEY (water_communication_id) REFERENCES communication (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F898A4CE76 FOREIGN KEY (heating_communication_id) REFERENCES communication (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F89F298A138 FOREIGN KEY (road_communication_id) REFERENCES communication (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F896D4ED28E FOREIGN KEY (bell_id) REFERENCES bell (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F895D83CC1 FOREIGN KEY (state_id) REFERENCES state (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F8911ABC224 FOREIGN KEY (performer_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE plot ADD CONSTRAINT FK_BEBB8F895B9851D7 FOREIGN KEY (last_save_performer_user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89B6E62EFA');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F896D4ED28E');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F8912469DE2');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89D5C2493D');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89364458E');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F8922160448');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89BEB35D7B');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F898A4CE76');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89F298A138');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89B08FA272');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F89953C1C61');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F895D83CC1');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F8911ABC224');
        $this->addSql('ALTER TABLE plot DROP CONSTRAINT FK_BEBB8F895B9851D7');
        $this->addSql('DROP TABLE attribute');
        $this->addSql('DROP TABLE bell');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE classifier');
        $this->addSql('DROP TABLE communication');
        $this->addSql('DROP TABLE district');
        $this->addSql('DROP TABLE plot');
        $this->addSql('DROP TABLE source');
        $this->addSql('DROP TABLE state');
        $this->addSql('DROP TABLE "user"');
    }
}
