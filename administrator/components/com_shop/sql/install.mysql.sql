CREATE TABLE IF NOT EXISTS `#__edman_factor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `tarikh` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB COLLATE=utf8_persian_ci;

CREATE TABLE IF NOT EXISTS `#__edman_factor_det` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kala_id` int(11) NOT NULL,
  `ghimat_vahed` int(11) NOT NULL,
  `tedad` int(11) NOT NULL,
  `sabad_id` int(11) NOT NULL,
  `factor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB COLLATE=utf8_persian_ci;

CREATE TABLE IF NOT EXISTS `#__edman_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kala_id` int(11) NOT NULL,
  `pic` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `order_number` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB COLLATE=utf8_persian_ci;

CREATE TABLE IF NOT EXISTS `#__edman_kala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `toz` mediumtext COLLATE utf8_persian_ci NOT NULL,
  `tarikh_tolid` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tarikh_sabt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tolid_konande` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `vazn` int(11) NOT NULL,
  `abaad` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `mojoodi` int(11) NOT NULL,
  `ghimat` int(11) NOT NULL,
  `en` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB COLLATE=utf8_persian_ci;

CREATE TABLE IF NOT EXISTS `#__edman_sabad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kala_id` int(11) NOT NULL,
  `tarikh` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `tedad` int(11) NOT NULL,
  `ghimat_vahed` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB COLLATE=utf8_persian_ci;

