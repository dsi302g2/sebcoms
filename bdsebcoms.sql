CREATE TABLE `compte` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `adresse` varchar(25) NOT NULL,
  `tel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id`, `login`, `password`, `email`, `nom`, `adresse`, `tel`) VALUES
(1, 'admin', 'admin1', 'admin@gmail.com', 'adminname', 'adminadress', '20221144');
