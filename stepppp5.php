
<?php
$create[] = "CREATE TABLE `".$prefix."_acl` (
  `acl_id` int(9) UNSIGNED NOT NULL,
  `u_id` int(6) NOT NULL,
  `m_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;";

.
.
.

$create[] .= "CREATE TABLE `".$prefix."_hotele` (
  `h_int` int(3) UNSIGNED NOT NULL,
  `nazwa` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `cena` decimal(10,2) NOT NULL,
  `active` enum('1','0') COLLATE utf8mb4_polish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;";

$create[] .= "CREATE TABLE `".$prefix."_moduls` (
  `m_id` int(9) UNSIGNED NOT NULL,
  `modul` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `modul_name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;";

.
.
.

$create[] .= "ALTER TABLE `".$prefix."_roles` MODIFY `r_int` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;";
$create[] .= "ALTER TABLE `".$prefix."_users` MODIFY `u_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;";
$create[] .= "ALTER TABLE `".$prefix."_zamowienia` MODIFY `z_int` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;";
$create[] .= "COMMIT;";

Oczywiście jest fragment pliku wyeksportowanego z bazy danych za pomocą PhpMyAdmina. Kolejne zapytania są dodawane do zmiennej tablicowej. Prefix nazw tabel został zamieniony na zmienną $prefix.