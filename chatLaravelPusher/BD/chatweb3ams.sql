-- --------------------------------------------------------
-- Banco de dados: chatweb3ams
-- Projeto: Chat WebSocket - Laravel + Chatify
-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS `chatweb3ams`
DEFAULT CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE `chatweb3ams`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------
-- Tabela: cache
-- --------------------------------------------------------

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

-- --------------------------------------------------------
-- Tabela: cache_locks
-- --------------------------------------------------------

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

-- --------------------------------------------------------
-- Tabela: failed_jobs
-- --------------------------------------------------------

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
-- Tabela: jobs
-- --------------------------------------------------------

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
-- Tabela: job_batches
-- --------------------------------------------------------

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------
-- Tabela: migrations
-- --------------------------------------------------------

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_09_23_999999_add_active_status_to_users', 2),
(5, '2026_09_23_999999_add_avatar_to_users', 2),
(6, '2026_09_23_999999_add_dark_mode_to_users', 2),
(7, '2026_09_23_999999_add_messenger_color_to_users', 2),
(8, '2026_09_23_999999_create_chatify_favorites_table', 2),
(9, '2026_09_23_999999_create_chatify_messages_table', 2);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT=10;

-- --------------------------------------------------------
-- Tabela: password_reset_tokens
-- --------------------------------------------------------

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

-- --------------------------------------------------------
-- Tabela: sessions
-- --------------------------------------------------------

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

-- --------------------------------------------------------
-- Tabela: users
-- --------------------------------------------------------

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `avatar` varchar(255) NOT NULL DEFAULT 'avatar.png',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users`
(`id`, `name`, `email`, `email_verified_at`, `password`,
 `remember_token`, `created_at`, `updated_at`,
 `active_status`, `avatar`, `dark_mode`, `messenger_color`)
VALUES
(1, 'Julia', 'juju@gmail.com', NULL,
 '$2y$12$z5T2jcaXNwkzNiV0tQ7xO.jadiZu1/xdKYmHM5BlGRdYoToMy9UXu',
 NULL, '2026-09-23 22:09:58', '2026-09-23 22:25:00',
 1, 'julia.jpg', 1, '#3F51B5'),

(2, 'Jay', 'jay@gmail.com', NULL,
 '$2y$12$kdvLn4SwJBlqf9aKnpX1gOKVu1wnV1yJLX9bD.fkDnaOQloJHXuii',
 NULL, '2026-09-23 22:10:28', '2026-09-23 22:24:56',
 1, 'jay.jpg', 1, '#9C27B0');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT=3;

-- --------------------------------------------------------
-- Tabela: ch_favorites
-- --------------------------------------------------------

CREATE TABLE `ch_favorites` (
  `id` char(36) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ch_favorites`
(`id`, `user_id`, `favorite_id`, `created_at`, `updated_at`)
VALUES
('c377ab92-47c8-46f1-bdf7-0f2c48e9228f',
 2, 1, '2026-09-23 22:24:42', '2026-09-23 22:24:42');

ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------
-- Tabela: ch_messages
-- --------------------------------------------------------

CREATE TABLE `ch_messages` (
  `id` char(36) NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) DEFAULT NULL,
  `attachment` varchar(255) DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `ch_messages`
(`id`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`)
VALUES
('1c7bca73-ce03-4286-8a00-04df905db699',
 2, 1, 'Juliaaaa', NULL, 1,
 '2026-09-23 22:21:22', '2026-09-23 22:21:23'),

('5bec911a-e052-497e-8b8c-2d07385b03e0',
 2, 1, 'Oieeeeee', NULL, 1,
 '2026-09-23 22:21:06', '2026-09-23 22:21:07'),

('c6973a60-6440-4154-98bf-a0f41d18597d',
 1, 2, 'Oi, Jayy', NULL, 1,
 '2026-09-23 22:20:30', '2026-09-23 22:20:37'),

('d641bdbe-835b-4c65-a8fa-d4f8c9861dca',
 2, 1, 'q foi?', NULL, 1,
 '2026-09-23 22:20:49', '2026-09-23 22:20:50');

ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

-- --------------------------------------------------------
-- Finalização
-- --------------------------------------------------------

COMMIT;
