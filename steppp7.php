<?php
$insert[] = "INSERT INTO `".$prefix."_hotele` (`h_int`, `nazwa`, `cena`, `active`) VALUES
(1, '*', '0.25', '1'),
(2, '**', '1.50', '1'),
(3, '***', '3.00', '1'),
(4, '****', '4.50', '1'),
(5, '*****', '6.00', '1'),
(6, '******', '7.50', '0');";

$insert[] .= "INSERT INTO `".$prefix."_moduls` (`m_id`, `modul`, `modul_name`, `icon`) VALUES
(1, 'users', 'Użytkownicy', 'people'),
(2, 'acl', 'Access Control List', 'ui-checks'),
(3, 'news', 'Wiadomości', 'newspaper'),
(4, 'orders', 'Zamówienia', 'basket'),
(5, 'products', 'Produkty', 'table'),
(6, 'customers', 'Klienci', 'people-fill');";

.
.
.

$insert[] .= "INSERT INTO `".$prefix."_roles` (`r_int`, `rola`, `nazwa`, `active`) VALUES
(1, 0, 'gość', '1'),
(2, 1, 'admin', '1'),
(3, 2, 'pracownik', '1'),
(4, 3, 'menadżer', '0');";
