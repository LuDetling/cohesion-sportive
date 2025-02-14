<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250214092828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipment (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, image TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE equipment_muscle (equipment_id INT NOT NULL, muscle_id INT NOT NULL, PRIMARY KEY(equipment_id, muscle_id))');
        $this->addSql('CREATE INDEX IDX_549F66AF517FE9FE ON equipment_muscle (equipment_id)');
        $this->addSql('CREATE INDEX IDX_549F66AF354FDBB4 ON equipment_muscle (muscle_id)');
        $this->addSql('CREATE TABLE muscle (id SERIAL NOT NULL, name VARCHAR(255) NOT NULL, image TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product (id SERIAL NOT NULL, title VARCHAR(255) NOT NULL, video TEXT DEFAULT NULL, image TEXT DEFAULT NULL, description TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE product_muscle (product_id INT NOT NULL, muscle_id INT NOT NULL, PRIMARY KEY(product_id, muscle_id))');
        $this->addSql('CREATE INDEX IDX_916D584B4584665A ON product_muscle (product_id)');
        $this->addSql('CREATE INDEX IDX_916D584B354FDBB4 ON product_muscle (muscle_id)');
        $this->addSql('CREATE TABLE product_equipment (product_id INT NOT NULL, equipment_id INT NOT NULL, PRIMARY KEY(product_id, equipment_id))');
        $this->addSql('CREATE INDEX IDX_BD98630E4584665A ON product_equipment (product_id)');
        $this->addSql('CREATE INDEX IDX_BD98630E517FE9FE ON product_equipment (equipment_id)');
        $this->addSql('ALTER TABLE equipment_muscle ADD CONSTRAINT FK_549F66AF517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE equipment_muscle ADD CONSTRAINT FK_549F66AF354FDBB4 FOREIGN KEY (muscle_id) REFERENCES muscle (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product_muscle ADD CONSTRAINT FK_916D584B4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product_muscle ADD CONSTRAINT FK_916D584B354FDBB4 FOREIGN KEY (muscle_id) REFERENCES muscle (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product_equipment ADD CONSTRAINT FK_BD98630E4584665A FOREIGN KEY (product_id) REFERENCES product (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE product_equipment ADD CONSTRAINT FK_BD98630E517FE9FE FOREIGN KEY (equipment_id) REFERENCES equipment (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE equipment_muscle DROP CONSTRAINT FK_549F66AF517FE9FE');
        $this->addSql('ALTER TABLE equipment_muscle DROP CONSTRAINT FK_549F66AF354FDBB4');
        $this->addSql('ALTER TABLE product_muscle DROP CONSTRAINT FK_916D584B4584665A');
        $this->addSql('ALTER TABLE product_muscle DROP CONSTRAINT FK_916D584B354FDBB4');
        $this->addSql('ALTER TABLE product_equipment DROP CONSTRAINT FK_BD98630E4584665A');
        $this->addSql('ALTER TABLE product_equipment DROP CONSTRAINT FK_BD98630E517FE9FE');
        $this->addSql('DROP TABLE equipment');
        $this->addSql('DROP TABLE equipment_muscle');
        $this->addSql('DROP TABLE muscle');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE product_muscle');
        $this->addSql('DROP TABLE product_equipment');
    }
}
