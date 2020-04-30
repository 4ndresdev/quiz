-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2020 at 07:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat_archetype`
--

CREATE TABLE `cat_archetype` (
  `archetype` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `name_archetype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `character` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cat_archetype`
--

INSERT INTO `cat_archetype` (`archetype`, `name_archetype`, `descripcion`, `character`) VALUES
('ENFJ', 'Bondadoso', 'Una de las mejores maneras de ser un buen amigo para un \"Bondadoso\" es aceptar la atención y el apoyo que ofrecen de forma natural. Las personas con este tipo de personalidad disfrutan ayudando a sus amigos, y es importante demostrar que acepta y aprecia lo que tienen para ofrecer. Sin embargo, también es importante que ofrezca su apoyo a cambio. \"El Bondadoso\" no siempre son buenos para pedir ayuda cuando la necesitan. En muchos casos, simplemente estar dispuesto a escuchar lo que tengan que compartir puede ser muy útil.', '* Abraham Maslow, psicólogo\r\n* Peyton Manning, jugador de fútbol\r\n* Barack Obama, presidente de los Estados Unidos\r\n* Bono, músico\r\n* Elizabeth Bennet, personaje de Orgullo y prejuicio\r\n'),
('ENFP', 'Campeón', 'Hacen amigos divertidos y emocionantes. Disfrutan haciendo cosas nuevas y generalmente tienen un amplio círculo de amigos y conocidos. Perciben los sentimientos de otras personas y son buenos para comprender a otras personas con bastante rapidez. 5  \"El campeón\" brinda apoyo emocional a sus amigos para ayudarlos a alcanzar sus objetivos.', '* Andy Kaufmann, comediante\r\n* Dr. Seuss, autor de niños\r\n* Salvador Dali, artista\r\n* Ellen Degeneres, comediante y presentadora de programas de entrevistas\r\n* Ron Weasley, Harry Potter\r\n'),
('ENTJ', 'Comandante', 'Son personas sociales y adoran las conversaciones interesantes. Si bien pueden parecer argumentativos y conflictivos a veces, solo recuerde que esto es parte de su estilo de comunicación. Trate de no tomarlo como algo personal. Tienden a tener la amistad más fácil con personas que comparten sus intereses y puntos de vista, y pueden tener dificultades para comprender a las personas que son muy introvertidas, sensibles o emocionales.', '* Franklin D. Roosevelt, presidente de los EE. UU.\r\n* Bill Gates, fundador de Microsoft\r\n* Vince Lombardi, entrenador de fútbol\r\n* Carl Sagan, astrónomo\r\n* Lex Luthor, personaje de Superman\r\n'),
('ENTP', 'Polémico', 'El Polémico es excelente para llevarse bien con las personas sin importar su tipo de personalidad. Si bien suelen ser relajados, pueden ser bastante competitivos. Si son amigos de un polémico, tenga cuidado de no acostumbrarse a tratar de superarse unos a otros. Tenga en cuenta su amor por los debates y tenga cuidado de no intensificar las discusiones afables en argumentos combativos.', '* Thomas Edison, inventor\r\n* John Adams, presidente de los Estados Unidos\r\n* Walt Disney, cineasta\r\n* Julia Child, cocinera\r\n* Alejandro Magno, rey y líder militar\r\n'),
('ESFJ', 'Cuidador', 'Puede ser desinteresado hasta el punto de pasar por alto sus propias necesidades para garantizar que otras personas sean felices. Ser un buen amigo de alguien con este tipo de personalidad significa que debe expresar su aprecio por su naturaleza generosa, pero también asegurarse de corresponder a su amabilidad.', '* Sally Field, actriz\r\n* Sam Walton, fundador de Wal-Mart\r\n* William McKinley, presidente de los Estados Unidos\r\n* Barbara Walters, periodista de televisión\r\n* Alegría, personaje de cine, Inside Out\r\n'),
('ESFP', 'Ejecutor', 'Se cansan con las mismas viejas rutinas y siempre está listo para una nueva aventura. Para mantenerse al día con este tipo de personalidad, debe estar siempre preparado para nuevas experiencias, desde explorar nuevos lugares hasta conocer gente nueva. Es importante mantener las cosas interesantes, pero a los ESFP les encanta tener un conspirador confiable que esté tan listo para divertirse como ellos.', '* Bill Clinton, presidente de los Estados Unidos\r\n* Pablo Picasso, artista\r\n* Mark Cuban, empresario\r\n* Will Smith, actor\r\n* Fred y George Weasley, personajes de ficción de Harry Potter\r\n'),
('ESTJ', 'Director', 'Las personas con este tipo de personalidad son muy sociables y disfrutan involucrando a sus amigos en actividades que disfrutan. \"El Director\" a menudo valoran la fiabilidad sobre casi todo. Si eres un amigo estable que cumple tus compromisos, es probable que puedas forjar una gran amistad.', '* Lyndon B. Johnson, presidente de los Estados Unidos\r\n* Megyn Kelly, personalidad de televisión\r\n* Billy Graham, evangelista\r\n* Alec Baldwin, actor\r\n* Darth Vader, personaje de Star Wars\r\n'),
('ESTP', 'Persuasor', 'Tienen una sed inagotable de aventura. Puedes ser un buen amigo si siempre estás listo para salir a vivir una nueva experiencia, o incluso ideando planes que ofrezcan emoción, novedad y desafío.', '* Madonna, cantante\r\n* Ernest Hemingway, novelista\r\n* Thomas Edison, inventor\r\n* Capitán James T. Kirk, personaje de ficción, Star Trek\r\n'),
('INFJ', 'Abogado', 'Debido a que es reservado y privado, El \"Abogado\" pueden ser difíciles de conocer. Dan un gran valor a las relaciones cercanas y profundas y pueden lastimarse fácilmente, aunque a menudo ocultan estos sentimientos a los demás. Interactuar con un \"Abogado\" implica comprender y apoyar su necesidad de retirarse y recargarse. Las personas con este tipo de personalidad a veces se sienten incomprendidas. Puede ser un buen amigo al tomarse el tiempo para comprender su perspectiva y apreciar sus fortalezas.', '* Oprah Winfey, personalidad de televisión\r\n* Martin Luther King, Jr., líder de derechos civiles\r\n* Atticus Finch, para matar a un ruiseñor\r\n* Carl Jung, psicoanalista\r\n* Taylor Swift, músico\r\n'),
('INFP', 'Mediador', 'Generalmente solo tienen algunas amistades cercanas, pero estas relaciones tienden a ser duraderas. Si bien las personas con este tipo de personalidad son hábiles para comprender las emociones de los demás, a menudo luchan por compartir sus propios sentimientos con los demás. El contacto social puede ser difícil, aunque los INFP anhelan la intimidad emocional y las relaciones profundas. Conocer un \"Mediador\" puede llevar tiempo y trabajo, pero las recompensas pueden ser excelentes para quienes tienen paciencia y comprensión.', '* Audrey Hepburn, actriz\r\n* JRR Tolkien, autor\r\n* Princesa Diana, real británica\r\n* William Shakespeare, dramaturgo\r\n* Fred Rogers, personalidad de televisión\r\n'),
('INTJ', 'Arquitecto ', 'El Arquitecto tiende a ser solitario y autosuficiente, por lo que a veces puede ser difícil establecer amistades. Debido a que las personas con este tipo de personalidad tienden a pensar mucho en el futuro, pueden evitar conocer a las personas porque creen que una amistad a largo plazo no funcionará. La buena noticia es que si bien el Arquitecto no tienen muchos amigos, se vuelven muy cercanos y comprometidos con quienes persisten. El Arquitecto tienden a preferir amigos que también son introvertidos, racionales y con poco drama emocional.', '* Thomas Jefferson, U.S. Presidente\r\n* C.S. Lewis, Author\r\n* Arnold Schwarzenegger, Actor & Politician\r\n* Gandalf, The Lord of the Rings\r\n* Lance Armstrong, Ciclista\r\n'),
('INTP', 'Pensador', 'Los intereses compartidos son uno de los mejores caminos para formar una amistad con un Pensador. Tienden a valorar el intelecto sobre todo lo demás y pueden ser muy lentos para formar amistades. Si bien esto a menudo conduce a menos amistades, las que gana un Pensador tienden a ser muy cercanas. Recuerde que sus amigos de Pensador pueden no ser los mejores para lidiar con el exceso de emociones, pero les encanta unirse a conversaciones profundas y pasiones compartidas.', '* Albert Einstein, científico\r\n* Dwight D. Eisenhower, presidente de los Estados Unidos\r\n* Carl Jung, psicoanalista\r\n* Tiger Woods, golfista\r\n* Sheldon Cooper, La teoría del Big Bang\r\n'),
('ISFJ', 'Protector', 'Tienden a ser cálido y desinteresado. Aunque es bastante social para los introvertidos, no siempre son buenos para compartir sus propios sentimientos. Preguntarles cómo están y estar dispuestos a hablar puede ayudarlos a abrirse. Puedes ayudar a ser un buen amigo prestando atención a sus necesidades. Tómese el tiempo para ver qué podrían necesitar que haga por ellos.', '* Madre Teresa, monja y humanitaria\r\n* Louisa May Alcott, autora\r\n* Kristi Yamaguchi, patinadora artística\r\n* David Petraeus, general del ejército estadounidense\r\n* Dr. John Watson, serie Sherlock Holmes de Arthur Conan Doyle\r\n'),
('ISFP', 'Artista', 'Es amigable y se llevan bien con otras personas, pero por lo general necesitan conocerte bien antes de que realmente se abran. Puedes ser un buen amigo para un \"Artista\" si apoyas la aceptación de quiénes son. Pueden ser alegre y divertido, pero a veces también es bastante intensos. Reconozca que habrá momentos en que su amigo quiera compartir y momentos en los que quiera retirarse a un espacio más personal.', '* Marilyn Monroe, actriz\r\n* Auguste Rodin, escultor\r\n* David Beckham, jugador de fútbol\r\n* Neil Simon, dramaturgo\r\n* Harry Potter, personaje ficticio\r\n'),
('ISTJ', 'Inspector', 'Tienden a llevarse mejor con amigos que son similares a ellos. Si bien tienden a ser un poco serios y, según el libro, les gusta divertirse. Puede que no estén dispuestos a lanzarse a cosas nuevas, pero puedes ser un gran amigo al ayudarlos a dedicarse a pasatiempos y actividades que disfrutan.', '* George Washington, presidente de los Estados Unidos\r\n* Henry Ford, inventor\r\n* Johnny Carson, animador\r\n* Isabel II, reina de Inglaterra\r\n* Evander Holyfield, boxeador\r\n'),
('ISTP', 'Artesano', 'Tienden a ser curiosos e incluso aventurero, pero a veces también tienen una gran necesidad de estar solo. Puedes ser un gran amigo pidiéndoles que salgan y persigan nuevas cosas, pero prepárate para respetar su necesidad de paz y tranquilidad cuando no tienen ganas de salir.  ', '* Clint Eastwood, actor\r\n* Zachary Taylor, presidente de los Estados Unidos\r\n* Alan Shepherd, astronauta \r\n* Amelia Earhart, aviadora\r\n* Han Solo, personaje de Star Wars\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_register` int(11) NOT NULL,
  `id_profile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `update_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p_a`
--

CREATE TABLE `p_a` (
  `id_p_a` int(11) NOT NULL,
  `id_profile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `archetype` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE `references` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user_references` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id_response` int(11) NOT NULL,
  `id_profile` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `q_number` int(11) NOT NULL,
  `value` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat_archetype`
--
ALTER TABLE `cat_archetype`
  ADD PRIMARY KEY (`archetype`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_register`) USING BTREE;

--
-- Indexes for table `p_a`
--
ALTER TABLE `p_a`
  ADD PRIMARY KEY (`id_p_a`),
  ADD KEY `id_profile` (`id_profile`) USING BTREE;

--
-- Indexes for table `references`
--
ALTER TABLE `references`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `p_a`
--
ALTER TABLE `p_a`
  MODIFY `id_p_a` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `references`
--
ALTER TABLE `references`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id_response` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
