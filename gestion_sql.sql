

INSERT INTO `facultes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Science', '2020-04-19 10:55:48', '2020-04-19 10:55:48'),
(2, 'Biologie', NULL, NULL),
(3, 'Lettre', NULL, NULL),
(4, 'Sociologie', NULL, NULL);


INSERT INTO `departements` (`id`, `nom`, `faculte_id`, `created_at`, `updated_at`) VALUES
(1, 'Informatique', 1, '2020-09-11 11:14:12', '2020-09-11 11:14:12'),
(2, 'Physique', 1, '2020-09-11 11:14:42', '2020-09-11 11:14:42'),
(3, 'Englais', 3, '2020-09-11 11:15:35', '2020-09-11 11:15:35');




INSERT INTO `profs` (`id`, `nom`, `prenom`, `email`, `password`, `id_departement`, `created_at`, `updated_at`) VALUES
(1, 'Missbihi', 'Mohammed', 'Missabihi@gmail.com', '123456', 1, '2020-04-19 12:39:53', '2020-04-19 12:39:53'),
(2, 'Halfaoui', 'Asma', 'Halfaoui@gmail.com', '123456', 1, '2020-04-19 12:39:53', '2020-04-19 12:39:53'),
(3, 'Chaouch', 'Fatima', 'Chaouch@gmail.com ', '123456', 1, '2020-04-19 12:45:30', '2020-04-19 12:45:30'),
(4, 'Tedlaoui', 'Mohammed', 'Tedlaoui@gmail.com', '121345', 1, '2020-04-19 12:45:30', '2020-04-19 12:45:30'),
(5, 'Maheiddin', 'Mohammed', 'Maheiddin@gmail.com', '1234d56d', 2, '2020-04-19 12:47:12', '2020-04-19 12:47:12'),
(6, 'Benssafa', 'Abdelkader', 'Benssafa@gmail.com', '123456d', 3, '2020-04-19 12:48:41', '2020-04-19 12:48:41');


INSERT INTO `salles` (`id`, `id_faculte`, `nom`, `capacite`, `type_salle`, `created_at`, `updated_at`) VALUES
(1, 1, 'N001', 30, 'TD', NULL, NULL),
(2, 1, 'N002', 35, 'TD', NULL, NULL),
(3, 2, 'N001', 30, 'TD', '2020-04-19 10:00:42', '2020-04-19 10:00:42'),
(4, 2, 'N002', 35, 'Labo Informatique', '2020-04-19 10:00:42', '2020-04-19 10:00:42'),
(5, 3, 'N001', 30, 'TD', '2020-04-19 10:00:48', '2020-04-19 10:00:48'),
(6, 3, 'N002', 35, 'Labo Informatique', '2020-04-19 10:00:48', '2020-04-19 10:00:48'),
(7, 1, 'N101', 30, 'TD', '2020-04-19 18:57:20', '2020-04-19 18:57:20'),
(8, 1, 'N102', 35, 'Labo Informatique', '2020-04-19 18:57:20', '2020-04-19 18:57:20'),
(9, 1, 'S001', 30, 'TD', '2020-04-19 19:37:30', '2020-04-19 19:37:30'),
(10, 1, 'S101', 35, 'Labo Chimie', '2020-04-19 19:37:30', '2020-04-19 19:37:30');




INSERT INTO `equipement_fixes` (`id`, `nom`, `reference`, `id_salle`, `created_at`, `updated_at`) VALUES
(1, 'Data Show', 'Toshiba', 2, '2020-04-21 15:45:27', '2020-04-21 15:45:27'),
(2, 'Haut Parleur', 'Philips', 2, '2020-04-20 22:00:00', '2020-04-20 22:00:00'),
(3, 'Haut Parleur', 'Samsung', 1, '2020-04-20 22:00:00', '2020-04-20 22:00:00'),
(5, 'PC', 'HP', 1, '2020-04-21 15:48:29', '2020-04-21 15:48:29'),
(6, 'PC', 'Dell', 2, '2020-04-21 15:48:29', '2020-04-21 15:48:29'),
(7, 'Data Show', 'Toshiba', 7, '2020-04-21 15:45:27', '2020-04-21 15:45:27'),
(8, 'Data Show', 'Philips', 9, '2020-04-20 22:00:00', '2020-04-20 22:00:00'),
(9, 'Haut Parleur', 'Samsung', 9, '2020-04-20 22:00:00', '2020-04-20 22:00:00'),
(10, 'PC', 'HP', 10, '2020-04-21 15:48:29', '2020-04-21 15:48:29'),
(11, 'Data Show', 'HP', 1, '2020-04-21 15:48:29', '2020-04-21 15:48:29');


INSERT INTO `pannes` (`id`, `id_prof`, `id_equipement`, `commentaire`, `created_at`, `updated_at`) VALUES
(1, 1, 11, 'screen green', '2020-09-18 16:21:47', '2020-09-18 16:21:47'),
(2, 1, 5, 'le port HDMI ne marche pas', '2020-09-18 16:22:31', '2020-09-18 16:22:31'),
(3, 2, 1, 'red screen', '2020-09-18 16:23:10', '2020-09-18 16:23:10'),
(4, 3, 2, 'trop de bruit', '2020-09-18 16:23:50', '2020-09-18 16:23:50');