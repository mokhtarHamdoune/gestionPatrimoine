

INSERT INTO `departements` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Informatique', '2020-04-19 11:05:39', '2020-04-19 11:05:39'),
(2, 'Physique', '2020-04-19 11:05:39', '2020-04-19 11:05:39'),
(3, 'Englais', '2020-04-19 12:47:44', '2020-04-19 12:47:44');



INSERT INTO `facultes` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Science', '2020-04-19 10:55:48', '2020-04-19 10:55:48'),
(2, 'Biologie', NULL, NULL),
(3, 'Lettre', NULL, NULL),
(4, 'Sociologie', NULL, NULL);


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
(3, 2, 'N001', 30, 'TD', '2020-04-19 11:00:42', '2020-04-19 11:00:42'),
(4, 2, 'N002', 35, 'Labo Informatique', '2020-04-19 11:00:42', '2020-04-19 11:00:42'),
(5, 3, 'N001', 30, 'TD', '2020-04-19 11:00:48', '2020-04-19 11:00:48'),
(6, 3, 'N002', 35, 'Labo Informatique', '2020-04-19 11:00:48', '2020-04-19 11:00:48'),
(7, 1, 'N101', 30, 'TD', '2020-04-19 19:57:20', '2020-04-19 19:57:20'),
(8, 1, 'N102', 35, 'TD', '2020-04-19 19:57:20', '2020-04-19 19:57:20'),
(9, 1, 'S001', 30, 'TD', '2020-04-19 20:37:30', '2020-04-19 20:37:30'),
(10, 1, 'S101', 35, 'TD', '2020-04-19 20:37:30', '2020-04-19 20:37:30');




INSERT INTO `equipement_fixes` (`id`, `nom`, `reference`, `id_salle`, `created_at`, `updated_at`) VALUES
(1, 'Data Show', 'Toshiba', 2, '2020-04-21 16:45:27', '2020-04-21 16:45:27'),
(2, 'Haut Parleur', 'Philips', 2, '2020-04-20 23:00:00', '2020-04-20 23:00:00'),
(3, 'Haut Parleur', 'Samsung', 1, '2020-04-20 23:00:00', '2020-04-20 23:00:00'),
(5, 'PC', 'HP', 1, '2020-04-21 16:48:29', '2020-04-21 16:48:29'),
(6, 'PC', 'Dell', 2, '2020-04-21 16:48:29', '2020-04-21 16:48:29'),
(7, 'Data Show', 'Toshiba', 7, '2020-04-21 16:45:27', '2020-04-21 16:45:27'),
(8, 'Data Show', 'Philips', 9, '2020-04-20 23:00:00', '2020-04-20 23:00:00'),
(9, 'Haut Parleur', 'Samsung', 9, '2020-04-20 23:00:00', '2020-04-20 23:00:00'),
(10, 'PC', 'HP', 10, '2020-04-21 16:48:29', '2020-04-21 16:48:29');