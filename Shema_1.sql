CREATE TABLE `accessories` (
  `id` bigint(20),
  `title` varchar(255),
  `description` varchar(1000),
  `price` double,
  `discount` decimal(8,2),
  `image_url` varchar(255),
  `dimensions` varchar(255),
  `weight` varchar(255),
  `color` varchar(255),
  `type` varchar(255),
  `amount` int(11),
  `category_id` bigint(20),
  `manufacturer_id` bigint(20),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp,
  PRIMARY KEY (`category_id`, `manufacturer_id`)
);

CREATE TABLE `accessory_subcategory` (
  `id` bigint(20),
  `accessory_id` integer,
  `subcategory_id` integer,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp,
  PRIMARY KEY (`accessory_id`, `subcategory_id`)
);

CREATE TABLE `subcategories` (
  `id` bigint(20),
  `name` varchar(255),
  `value` varchar(255),
  `category_id` integer,
  `group_id` integer,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp,
  PRIMARY KEY (`category_id`, `group_id`)
);

CREATE TABLE `categories` (
  `id` bigint(20),
  `name` varchar(255),
  `description` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `manufactures` (
  `id` bigint(20),
  `name` varchar(255),
  `description` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `drones` (
  `id` bigint(20),
  `title` varchar(255),
  `description` varchar(255),
  `price` double,
  `discount` decimal,
  `image_url` varchar(255),
  `amount` int,
  `group_id` integer,
  `manufacturer_id` bigint,
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp,
  PRIMARY KEY (`group_id`, `manufacturer_id`)
);

CREATE TABLE `drone_subcategory` (
  `id` bigint(20),
  `drone_id` bigint,
  `subcategory_id` bigint,
  `deleted_at` timestamp,
  PRIMARY KEY (`drone_id`, `subcategory_id`)
);

CREATE TABLE `groups` (
  `id` bigint(20),
  `name` varchar(255),
  `description` varchar(255),
  `created_at` timestamp,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `group_subcategory` (
  `id` bigint(20),
  `group_id` integer,
  `subcategory_id` bigint,
  `deleted_at` timestamp,
  PRIMARY KEY (`group_id`, `subcategory_id`)
);

ALTER TABLE `accessories` ADD FOREIGN KEY (`manufacturer_id`) REFERENCES `manufactures` (`id`);

ALTER TABLE `accessory_subcategory` ADD FOREIGN KEY (`accessory_id`) REFERENCES `accessories` (`id`);

ALTER TABLE `accessory_subcategory` ADD FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

ALTER TABLE `accessories` ADD FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

ALTER TABLE `drones` ADD FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

ALTER TABLE `drone_subcategory` ADD FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

ALTER TABLE `drone_subcategory` ADD FOREIGN KEY (`drone_id`) REFERENCES `drones` (`id`);

ALTER TABLE `group_subcategory` ADD FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`);

ALTER TABLE `group_subcategory` ADD FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);
