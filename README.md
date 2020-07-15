# simpleCRUD
Create Table
-
CREATE TABLE `peserta` (
	`id` INT(10,0) NOT NULL AUTO_INCREMENT,
	`nama` VARCHAR(50) NOT NULL DEFAULT '0' COLLATE 'utf8mb4_0900_ai_ci',
	`jenis_kelamin` ENUM('L','P') NOT NULL COLLATE 'utf8mb4_0900_ai_ci',
	`tgl_lahir` DATE NOT NULL,
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_0900_ai_ci'
ENGINE=InnoDB
;
