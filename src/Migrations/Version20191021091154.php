<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191021091154 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kegiatan_absensi (id INT AUTO_INCREMENT NOT NULL, id_kegiatan_id INT NOT NULL, id_karyawan_id INT NOT NULL, waktu_hadir DATETIME NOT NULL, waktu_pulang DATETIME NOT NULL, INDEX IDX_ED2257919BD13FC7 (id_kegiatan_id), INDEX IDX_ED2257918E42DB06 (id_karyawan_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kegiatan_absensi ADD CONSTRAINT FK_ED2257919BD13FC7 FOREIGN KEY (id_kegiatan_id) REFERENCES kegiatan (id)');
        $this->addSql('ALTER TABLE kegiatan_absensi ADD CONSTRAINT FK_ED2257918E42DB06 FOREIGN KEY (id_karyawan_id) REFERENCES kegiatan_absensi (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kegiatan_absensi DROP FOREIGN KEY FK_ED2257918E42DB06');
        $this->addSql('DROP TABLE kegiatan_absensi');
    }
}
