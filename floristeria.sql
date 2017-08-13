-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2017 a las 07:34:10
-- Versión del servidor: 10.0.17-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `floristeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `tipo`, `nombre`, `precio`, `descripcion`) VALUES
(1, 'Ramo', 'Ramo Especial Amor', 44.5, 'Un clásico, doce rosas rojas distribuidas con el volumen que le caracteriza a este tipo de ramo, con la dulzura de los verdes para conseguir ese espacio natural en un hogar.'),
(2, 'Ramo', 'Ramo de Margaritas blancas', 40.25, 'Margaritas y blanco. El resultado: fusión perfecta entre pureza, jovialidad e inocencia. \r\nLa combinación ideal, para regalar sin motivo alguno. El por qué? Simplemente porque la quieres, los quieres y quieres hacérselo saber de la forma más bonita. Para tu pareja, tus amigo, tus seres queridos. Porque si... sin más…'),
(3, 'Ramo', 'Templanza', 39.5, 'Precioso acabado para un detalle perfecto.\r\nRamo lleno de luz y romanticismo. Una combinación exquisita; donde las formas, colores y tonalidades están perfectamente estudiadas y medidas. Un ramo lleno de sentimiento: romanticismo, alegría y elegancia. \r\nDile que los quieres de la mejor forma.'),
(4, 'Ramo', 'Madeira', 44.6, 'Precioso acabado para un detalle perfecto.\r\nRomántico, alegre, colorista, jovial... ¿Que más necesitas para decirle a los tuyos que los quieres?\r\nEl detalle perfecto para cualquier ocasión.'),
(5, 'Ramo', 'Caspio', 45.6, 'Precioso acabado para un detalle perfecto.\r\nDivertido y alegre, con una explosión de color y formas. Suave, translúcida y dinámica, con protagonismo de la divertida Gerbera. \r\nEnvolverán de buen energía cualquier ambiente.'),
(6, 'Ramo', 'Sicilia', 50, 'Incluye rosas y gerberas para dar más volumen y detalles de acabado con toda al delicadeza y armonía de la composición.\r\nAlegre y colorido, es la composición perfecta para sacar una sonrisa a quien se lo mandes.'),
(7, 'Ramo', 'Aneto', 52, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nSencillo clásico y natural, con una gama de diversas flores desde la clásica rosa hasta la elegancia del Lilium. \r\nLlenará de elegancia y equilibrio el ambiente de los tuyos.'),
(8, 'Ramo', 'Egeo', 43.4, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición. Ramo multicolor de gerberas, clásico y alegre.  Las clásicas gerberas irradiarán de luz y color cualquier espacio.  Llena de color y alegría la vida de tus seres queridos. Será como enviar una sonrisa'),
(9, 'Ramo', 'Ramo Dominíca', 52, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nPara una madre es especial, regala un ramo donde la elegancia y la ternura son protagonistas.\r\nClaveles, rosas… Romanticismo y Dulzura en estado puro. \r\nFormas, colores y la mejor elección de flores se traducen en un ramo donde la elegancia y la ternura son protagonistas.'),
(10, 'Ramo', 'Tempus', 46.6, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nUna composición atrevida y colorida para impresionar.\r\nRamo primaveral con lirios y rosas.\r\nDecorado y entregado en mano.'),
(11, 'Ramo', 'Santa Lucia', 46.7, 'Precioso acabado para un detalle perfecto.\r\nLas rosas y el lilium hacen de esta composición un ramo ideal para cualquier ocasión. \r\nSencillo elegante y luminoso, fresco y natural. Acertarás.'),
(12, 'Ramo', 'Ródano', 43.5, 'Este tipo de composiciones requieren menos riego que otras plantas en maceta o jardín porque retienen más la humedad.'),
(13, 'Ramo', 'Índico', 56.44, 'Planta de orquidea de colores vivos y alegres. Ideal para tener un detalle bonito y que dure en el tiempo, ya que las flores de este tipo de orquídea pueden durar entre ocho y doce semanas. Florecen dos o tres veces al año.\r\nLas orquídeas necesitan abundante luz, aunque es conveniente evitar que les dé el sol directamente. Se aconseja aprovechar la luz de ultima hora de la tarde para estimular la floración.'),
(14, 'Ramo', 'Maldivas', 54.5, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nRamo con fuerza de colores, donde el rojo se vuelve protagonista, compitiendo con la forma del Lilium en tonalidades rosas. \r\nSe convierte en un ramo con carácter propio. ideal para regalar a esas personas especiales.'),
(15, 'Ramo', 'Chamaedorea', 67, 'Composición de plantas en la que la Chamaedorea es la protagonista.\r\nEste tipo de composiciones requieren menos riego que otras plantas en maceta o jardín porque retienen más la humedad.\r\nIncluye una cesta de mimbre que le da cierto aire rural.'),
(16, 'Ramo', 'Ramo Dominica', 54.5, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nPara una madre es especial, regala un ramo donde la elegancia y la ternura son protagonistas.\r\nClaveles, rosas… Romanticismo y Dulzura en estado puro. \r\nFormas, colores y la mejor elección de flores se traducen en un ramo donde la elegancia y la ternura son protagonistas.'),
(17, 'Ramo', 'Everest', 39, 'Precioso acabado para un detalle perfecto.\r\nElegancia y personalidad marcan este centro, donde la pureza del blanco se mezcla con el verde musgo. Sencillo, y elegante, envolverá de luz y de una sonrisa a quien lo reciba. Ideal para dar luz y armonía en cualquier espacio, en cualquier rincón. \r\nSi dudas de sus gustos, este es el mejor regalo: seguro, elegante, sobrio pero luminoso.'),
(18, 'Ramo', 'Ternura', 58.8, 'Llena el ambiente de color con este impresionante ramo.\r\nCesta de Gerberas rosas, clásica y resultona para cualquier ocasión.'),
(19, 'Ramo', 'Nassau', 69.96, 'Este tipo de orquídea deben su nombre a su similitud con las mariposas: "Phalaena =mariposa" y "Opsis= parecido".\r\nLa phalaenopsis tiene una floración muy duradera y abundante, pudiendo durar sus flores entre ocho y doce semanas, aportando elegancia y un toque de color a cualquier estancia.'),
(20, 'Ramo', 'Merlot', 67.9, 'Centro de plantas en tonos rosas donde la phalaenopsis es la protagonista.\r\nElegante y perfecto para cualquier ocasión '),
(21, 'Ramo', 'Recife', 56.78, 'Armonía y elegancia, perfecta para cualquier ocasión. Con forma angular, casi quebradiza, nerviosa, con torceduras y giros ángulos, dotándola de personalidad propia. \r\nLa elegancia de la orquídea con dominio del blanco otorgan luz y elegancia a esta composición, que dotará de luminosidad y armonía cualquier espacio. \r\nIncluye base.'),
(22, 'Ramo', 'Intenso', 69.9, 'Composición de plantas con Anthurium en una cesta de mimbre que le da cierto aire rural. El anthurium destaca sobre las demás por la intensidad de sus flores rojas en forma de corazón. Este tipo de composiciones requieren menos riego que otras plantas en maceta o jardín porque retienen más la humedad.'),
(23, 'Ramo', 'Derroche', 50.2, 'Con ese impresionante ramo, llenaras de alegría a esa persona tan especial. No se le olvidara nunca.'),
(24, 'Ramo', 'Prima', 60, 'Detalle de una rosa, sencillo, airoso. Su verticalidad junto al exquisito y medido uso de materiales lo dotan de elagancia y sofisticación. \r\nIncluye recipiente'),
(25, 'Ramo', 'Tata', 72.3, 'Impresionante y elegante centro vertical de natalicio. Inundará cualquier rincón de los tuyos.'),
(26, 'Ramo', 'Egeo', 49.8, 'Aun más volumen y detalles de acabado con toda la delicadeza y armonía de la composición.\r\nRamo multicolor de gerberas, clásico y alegre. \r\nLas clásicas gerberas irradiarán de luz y color cualquier espacio. \r\nLlena de color y alegría la vida de tus seres queridos. Será como enviar una sonrisa.'),
(27, 'Ramo', 'Mulhacen', 55.4, 'Impresionante centro vertical colorido.'),
(28, 'Ramo', 'Ternua', 44.6, 'Llena el ambiente de color con este impresionante ramo.\r\nCesta de Gerberas rosas, clásica y resultona para cualquier ocasión.'),
(29, 'Ramo', 'Sexta', 52.3, 'La flor estrella, simbología de pasión, color de fuerza, seis rosas rojas para esos días espontáneos donde te apetece decir que le amas.\r\nRegalando estas seis rosas rojas le dirás que tú amor está en aumento.'),
(30, 'Ramo', 'Ramo Especial Amor', 40, 'Un clásico, doce rosas rojas distribuidas con el volumen que le caracteriza a este tipo de ramo, con la dulzura de los verdes para conseguir ese espacio natural en un hogar.'),
(31, 'Ramo', 'Deseo', 50.5, '12 Rosas Rojas de Tallo Corto\r\nFuerza y carácter determinan este precioso ramo de rosas compactas. Rosas cortas distribuidas en un pequeño ramo lleno de pasión.\r\nLas rosas rojas evocan un sentimiento romántico, pensamientos de pasión... Una forma diferente de decir "te quiero".'),
(32, 'Ramo', 'Habana', 54.42, 'Precioso acabado para un detalle perfecto.\r\nLa calidez del campo de la primavera en tus manos. Con sus tonalidades naranjas, irradiarán luz y calidez en cualquier estancia. \r\nUn ramo con personalidad y fuerza, pero con mucha dulzura.'),
(33, 'Ramo', 'Seychelles', 56.7, 'Llena el ambiente de color con este impresionante ramo.\r\nRamo lleno de fuerza y pasión. Equilibrio perfecto de proporciones y formas con una gran intensidad de colores. \r\nTonos rojos, rosas y verdes inundan de colores cualquier hogar. Atrevido y elegante.'),
(34, 'Ramo', 'Calma', 46.7, 'Precioso acabado para un detalle perfecto.\r\nCesta de Gerberas monocolor. Clásica y resultona para cualquier ocasión. \r\nAlegrará cualquier espacio.'),
(35, 'Ramo', 'Susurro', 43.5, 'Precioso acabado para un detalle perfecto.\r\nDiscreto y elegante, ese ramo primaveral con anthurium y rosas es el regalo perfecto.'),
(36, 'Ramo', 'Cariño', 49.9, 'Verticalidad y dinamismo, se vuelven protagonistas en esta composición. Este precioso ramo compuesto de 18 rosas blancas de tallo largo es ideal como detalle para cualquier ocasión\r\nRosas frescas de tallo largo para un acabado vistoso con el volumen perfecto.'),
(37, 'Ramo', 'Toscana', 67.7, 'Llena el ambiente de color con este impresionante ramo.\r\nLa toscana en tu casa. Explosión de colores, formas y elementos que lo dotan de personalidad propia.'),
(38, 'Ramo', 'Pureza', 50, '12 Rosas Blancas de Tallo Corto\r\nDelicadeza, ternura, son muchos los detalles que caracterizan esta pequeña composición floral, en un apasionado regalo lleno de vida. Su aroma e impacto provocan un sincero gracias. Una composición deliciosa que hará las delicias de quién la reciba. \r\nLas rosas blancas son símbolo de pureza y de inocencia, significan amor puro, feliz y para siempre.'),
(39, 'Ramo', 'Antigua', 70, 'Precioso acabado para un detalle perfecto.\r\nEste ramo evoca el refinamiento y la elegancia.'),
(40, 'Ramo', 'Nona', 45, 'Elegancia y sobriedad caracterizan esa composición de 9 rosas de color blanca de tallo largo.'),
(41, 'Ramo', 'Caricia', 49.6, 'Ramo de rosas rosas, lleno de luz, de prosperidad, precioso ramo para esos momentos de invierno, aportando armonía calor y alegría a los espacios de los tuyos.'),
(42, 'Ramo', 'Atlántico', 56.7, 'Precioso acabado para un detalle perfecto.\r\nComposición fresca y colorida, donde rosas, Lilium y Áster, se entrecruzan en una perfecta fusión de colores y formas. \r\nUna composición que te brinda una manera maravillosa de expresar tus sentimientos a amigos, familiares y seres queridos. \r\nIdeal para cumpleaños, aniversarios, o motivos de agradecimiento.'),
(43, 'Ramo', 'Instante', 59.9, 'Precioso acabado para un detalle perfecto.\r\nEsa composición fina y sobria encantará a quien se lo regales.'),
(44, 'Ramo', 'Ramo de Rosas - Delicadeza', 30, '12 Rosas Multicolor de Tallo Corto\r\nUna sorpresa\r\ncon un significado especial para una madre\r\nCoqueto, delicado sutil; con un perfecto equilibrio de colores y formas. En su estado más puro, este ramo pide acudir a recibir a una personalidad.\r\nComposición de rosas frescas de colores variados de tallo corto.'),
(45, 'Ramo', 'Amanecer', 35, '12 Rosas Amarillas de Tallo Corto.\r\nEl lujo entra por la ventana con los rayos del sol, este ramo lleno de calor y color está compuesto de rosas amarillas de tallo corto. Llena de primavera los espacios de los tuyos.\r\nLas rosas amarillas significan satisfacción y alegría y son una buena forma de festejar entre amigos un cumpleaños o un día significativo.'),
(48, 'Rosa', 'Gerbera Rosa', 2.25, 'Flor Color Rosa'),
(49, 'Rosa', 'Gerbera Amarilla', 2.3, 'Flor Color Amarillo'),
(50, 'Rosa', 'Rosa Roja', 2, 'Rosa Color Roja'),
(51, 'Rosa', 'Zinnia', 2.3, 'Flor Color Rosa'),
(52, 'Rosa', 'Girasol', 3, 'Girasol'),
(53, 'Rosa', 'Cosmos Rosa', 3.25, 'Flor Color Rosa'),
(54, 'Rosa', 'Narciso', 3, 'Flor Color Amarillo'),
(55, 'Rosa', 'Clavel', 2.45, 'Flor Color Rojo'),
(56, 'Roja', 'Cosmos Amarilla', 2.5, 'Flor Color Amarillo'),
(57, 'Rosa', 'Margarita', 1.5, 'Margarita'),
(58, 'personal', 'SALITO', 13.1, 'andres'),
(59, 'personal', 'MALUMA', 29, 'andres'),
(60, 'personal', 'sasdasd', 6.3, 'andres'),
(61, 'personal', 'asd', 6.6, 'andres'),
(62, 'personal', 'asdf', 8.85, 'andres');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desc_metricas`
--

CREATE TABLE `desc_metricas` (
  `id_metrica` int(11) NOT NULL,
  `descripcion` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `desc_metricas`
--

INSERT INTO `desc_metricas` (`id_metrica`, `descripcion`) VALUES
(1, 'Cantidad de veces que el usuario accede a la función de ayuda en linea.'),
(2, 'Número de páginas web accedidas y rapidamente abandonadas.'),
(3, 'Número de mensajes de error visualizados durante una sesión.'),
(4, 'Numero inicio de sesion'),
(5, 'Numero de transacciones exitosas'),
(6, 'Numero de transacciones canceladas'),
(7, 'Numero sesiones abandonadas sin transacciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_detalle_pedido` int(11) NOT NULL,
  `ci_usuario` varchar(10) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `dedicatoria` varchar(500) DEFAULT NULL,
  `nombre_dest` varchar(30) NOT NULL,
  `apellido_dest` varchar(30) NOT NULL,
  `telefono_dest` int(11) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `direccion_entrega` varchar(150) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `cod_postal` varchar(8) DEFAULT NULL,
  `n_tarjeta` int(16) NOT NULL,
  `cod_seg_tar` int(3) NOT NULL,
  `mes_tarjeta` int(3) NOT NULL,
  `ano_tarjeta` int(4) NOT NULL,
  `cantidad` decimal(10,0) NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id_detalle_pedido`, `ci_usuario`, `id_articulo`, `dedicatoria`, `nombre_dest`, `apellido_dest`, `telefono_dest`, `ciudad`, `direccion_entrega`, `horario`, `fecha`, `cod_postal`, `n_tarjeta`, `cod_seg_tar`, `mes_tarjeta`, `ano_tarjeta`, `cantidad`, `total`) VALUES
(1, '1725359945', 7, 'bien', 'maria', 'martinez', 302187845, 'Quito', 'san fernando', 'mañana', '2017-07-20', '213546', 2147483647, 321, 4, 2017, '1', 54.5),
(2, '1725359945', 3, 'ADSGFHD', 'ASDSFF', 'DSFGGSA', 2147483647, 'Quito', 'FDSFSAD', 'mañana', '2017-07-19', '315468', 2147483647, 321, 1, 2017, '2', 81.5),
(3, '1725359945', 58, 'FDGHF', 'ASDF', 'ADSFG', 231641230, 'Quito', 'SSSDGFH', 'tarde', '2017-07-19', '231468', 2147483647, 16, 1, 2017, '1', 15.6),
(4, '1725359945', 6, 'sdsfgew', 'asdffgs', 'ssadfg', 354879456, 'Quito', 'dasfg', 'tarde', '2017-07-19', '231546', 2147483647, 134, 1, 2017, '2', 102.5),
(5, '1725359945', 60, 'asdasd', 'asdas', 'asdas', 2147483647, 'Quito', 'asdasd', 'tarde', '2017-07-19', '974651', 2147483647, 123, 1, 2017, '1', 8.8),
(6, '1725359945', 3, 'asdasd', 'asdasd', 'assdasd', 2147483647, 'Quito', 'asd', 'tarde', '2017-07-19', '213465', 2147483647, 134, 1, 2017, '3', 121),
(7, '1725359945', 7, 'asdfgsa', 'asddf', 'adsfg', 2147483647, 'Quito', 'asdf', 'tarde', '2017-07-19', '896451', 2147483647, 231, 1, 2017, '1', 54.5),
(8, '1725359945', 6, '4689746513sdafg', 'sadfg', 'asdfg', 465123, 'Guayaquil', 'asdfg', 'mañana', '2017-07-19', '946532', 2147483647, 364, 3, 2017, '2', 102.5),
(9, '1725359945', 61, '8465dsfgdsa', 'adsfssqsad', 'sadfg', 23645, 'Guayaquil', 'fsdgdgsa', 'tarde', '2017-07-19', '794636', 2147483647, 130, 1, 2017, '1', 9.1),
(10, '1725359945', 2, '2136489asdx', 'asdfa', 'sdfs', 3164865, 'Quito', 'sadf', 'mañana', '2017-07-19', '236449', 2147483647, 314, 1, 2017, '1', 42.75),
(11, '1725359945', 2, 'asdfsdfxc', 'sdfd', 'sdfg', 614961230, 'Guayaquil', 'adssf', 'tarde', '2017-07-19', '316496', 2147483647, 163, 1, 2017, '0', 0),
(12, '1725359945', 62, 'dsf', 'asdf', 'sad', 1364613, 'Guayaquil', 'sadsfgfd', 'mañana', '2017-07-19', '215645', 2147483647, 31, 1, 2017, '1', 11.35),
(13, '1725359945', 2, 'kjhgfdtsaertyg', 'kjlkhgjhdg', 'jhkgjfhgd', 2147483647, 'Quito', 'lkjhgfds', 'mañana', '2017-07-20', '231456', 2147483647, 23, 8, 2021, '1', 42.75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metricas`
--

CREATE TABLE `metricas` (
  `id` int(11) NOT NULL,
  `id_metrica` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `metricas`
--

INSERT INTO `metricas` (`id`, `id_metrica`, `fecha`, `valor`) VALUES
(4, 1, '2017-07-16', 2),
(5, 1, '2017-07-16', 3),
(6, 1, '2017-07-17', 3),
(7, 1, '2017-07-17', 2),
(8, 1, '2017-07-17', 4),
(9, 1, '2017-07-17', 1),
(10, 1, '2017-07-17', 3),
(11, 1, '2017-07-17', 6),
(12, 2, '2017-07-17', 4),
(13, 1, '2017-07-17', 2),
(14, 1, '2017-07-18', 5),
(15, 2, '2017-07-18', 9),
(16, 1, '2017-07-18', 2),
(17, 1, '2017-07-18', 5),
(18, 3, '2017-07-18', 0),
(19, 2, '2017-07-18', 4),
(20, 1, '2017-07-18', 1),
(21, 2, '2017-07-18', 4),
(22, 3, '2017-07-18', 0),
(23, 2, '2017-07-18', 5),
(24, 1, '2017-07-18', 1),
(25, 3, '2017-07-18', 0),
(26, 1, '2017-07-18', 2),
(27, 2, '2017-07-18', 3),
(28, 3, '2017-07-18', 0),
(29, 2, '2017-07-18', 18),
(30, 1, '2017-07-18', 2),
(31, 3, '2017-07-18', 0),
(32, 1, '2017-07-18', 4),
(33, 3, '2017-07-18', 0),
(34, 2, '2017-07-18', 5),
(35, 2, '2017-07-18', 4),
(36, 3, '2017-07-18', 0),
(37, 1, '2017-07-18', 4),
(38, 3, '2017-07-18', 5),
(39, 2, '2017-07-18', 3),
(40, 3, '2017-07-18', 0),
(41, 2, '2017-07-18', 5),
(42, 1, '2017-07-18', 1),
(43, 3, '2017-07-18', 0),
(44, 2, '2017-07-18', 3),
(45, 2, '2017-07-18', 3),
(46, 3, '2017-07-18', 0),
(47, 1, '2017-07-18', 2),
(48, 1, '2017-07-18', 3),
(49, 2, '2017-07-18', 3),
(50, 3, '2017-07-18', 2),
(51, 1, '2017-07-18', 1),
(52, 3, '2017-07-18', 9),
(53, 2, '2017-07-18', 5),
(54, 1, '2017-07-18', 2),
(55, 2, '2017-07-18', 4),
(56, 3, '2017-07-18', 3),
(57, 1, '2017-07-18', 1),
(58, 2, '2017-07-18', 3),
(218, 5, '2017-07-14', 1),
(219, 4, '2017-07-14', 1),
(220, 7, '2017-07-14', 1),
(221, 4, '2017-07-14', 1),
(222, 4, '2017-07-14', 1),
(223, 4, '2017-07-14', 1),
(224, 5, '2017-07-14', 1),
(225, 5, '2017-07-14', 1),
(226, 5, '2017-07-14', 1),
(227, 4, '2017-07-14', 1),
(228, 5, '2017-07-14', 1),
(229, 6, '2017-07-14', 1),
(230, 4, '2017-07-14', 1),
(231, 7, '2017-07-14', 1),
(232, 4, '2017-07-14', 1),
(233, 4, '2017-07-15', 1),
(234, 4, '2017-07-16', 1),
(235, 4, '2017-07-17', 1),
(236, 4, '2017-07-18', 1),
(237, 4, '2017-07-15', 1),
(238, 4, '2017-07-16', 1),
(239, 4, '2017-07-17', 1),
(240, 4, '2017-07-18', 1),
(241, 5, '2017-07-15', 1),
(242, 5, '2017-07-16', 1),
(243, 5, '2017-07-17', 1),
(244, 5, '2017-07-18', 1),
(245, 5, '2017-07-15', 1),
(246, 5, '2017-07-16', 1),
(247, 5, '2017-07-17', 1),
(248, 5, '2017-07-18', 1),
(249, 6, '2017-07-15', 1),
(250, 6, '2017-07-16', 1),
(251, 6, '2017-07-17', 1),
(252, 6, '2017-07-18', 1),
(253, 6, '2017-07-15', 1),
(254, 6, '2017-07-16', 1),
(255, 6, '2017-07-17', 1),
(256, 6, '2017-07-18', 1),
(257, 4, '2017-07-18', 1),
(258, 4, '2017-07-18', 1),
(259, 5, '2017-07-18', 1),
(260, 6, '2017-07-18', 1),
(261, 5, '2017-07-18', 1),
(262, 6, '2017-07-18', 1),
(263, 4, '2017-07-18', 1),
(264, 7, '2017-07-18', 1),
(265, 4, '2017-07-18', 1),
(266, 5, '2017-07-18', 1),
(267, 7, '2017-07-18', 1),
(268, 4, '2017-07-18', 1),
(269, 7, '2017-07-18', 1),
(270, 4, '2017-07-18', 1),
(271, 5, '2017-07-18', 1),
(272, 7, '2017-07-18', 1),
(273, 4, '2017-07-18', 1),
(274, 4, '2017-07-18', 1),
(275, 5, '2017-07-18', 1),
(276, 4, '2017-07-18', 1),
(277, 7, '2017-07-18', 1),
(278, 4, '2017-07-18', 1),
(279, 5, '2017-07-18', 1),
(280, 7, '2017-07-18', 1),
(281, 4, '2017-07-18', 1),
(282, 4, '2017-07-18', 1),
(283, 7, '2017-07-18', 1),
(284, 4, '2017-07-18', 1),
(285, 5, '2017-07-18', 1),
(286, 7, '2017-07-18', 1),
(287, 4, '2017-07-18', 1),
(288, 5, '2017-07-18', 1),
(289, 4, '2017-07-18', 1),
(290, 7, '2017-07-18', 1),
(291, 4, '2017-07-18', 1),
(292, 4, '2017-07-18', 1),
(293, 4, '2017-07-18', 1),
(294, 5, '2017-07-18', 1),
(295, 5, '2017-07-18', 1),
(296, 5, '2017-07-18', 1),
(297, 4, '2017-07-19', 1),
(298, 5, '2017-07-19', 1),
(299, 6, '2017-07-19', 1),
(300, 4, '2017-07-19', 1),
(301, 7, '2017-07-19', 1),
(302, 4, '2017-07-19', 1),
(303, 3, '2017-07-18', 0),
(304, 2, '2017-07-16', 5),
(305, 4, '2017-07-16', 3),
(306, 5, '2017-07-16', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocasion`
--

CREATE TABLE `ocasion` (
  `id_ocasion` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ocasion`
--

INSERT INTO `ocasion` (`id_ocasion`, `nombre`) VALUES
(1, 'Aniversario'),
(2, 'Amor'),
(3, 'Regalos'),
(4, 'Amistad'),
(5, 'Pedir Perdón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ocasionxarticulo`
--

CREATE TABLE `ocasionxarticulo` (
  `id_articulo` int(11) NOT NULL,
  `id_ocasion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ocasionxarticulo`
--

INSERT INTO `ocasionxarticulo` (`id_articulo`, `id_ocasion`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 2),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 5),
(42, 5),
(43, 5),
(44, 5),
(45, 5),
(1, 5),
(2, 5),
(3, 5),
(4, 5),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recomendaciones`
--

CREATE TABLE `recomendaciones` (
  `id_recomendaciones` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `contenido` varchar(500) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `aprobado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ci_usuario` varchar(10) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `num_telefono` decimal(15,0) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `correo` varchar(150) NOT NULL,
  `clave` varchar(350) NOT NULL,
  `apellidos` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ci_usuario`, `nombres`, `num_telefono`, `direccion`, `correo`, `clave`, `apellidos`) VALUES
('1725359945', 'andres', '3018178', 'san fernando', 'andres@mail.com', 'kQL6kYhBDPwVHUrLx0kG5fZ3TLfeQCUXptJEe1Un8tG3UVV6HhSw1Uh76gELunaM3KePb5ZqIewy3WRxh/ONow==', 'chisaguano');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `desc_metricas`
--
ALTER TABLE `desc_metricas`
  ADD PRIMARY KEY (`id_metrica`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_detalle_pedido`),
  ADD KEY `articulo_detalle_pedido_fk` (`id_articulo`),
  ADD KEY `usuarios_detalle_pedido_fk` (`ci_usuario`);

--
-- Indices de la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desc_metricas_metricas_fk` (`id_metrica`);

--
-- Indices de la tabla `ocasion`
--
ALTER TABLE `ocasion`
  ADD PRIMARY KEY (`id_ocasion`);

--
-- Indices de la tabla `ocasionxarticulo`
--
ALTER TABLE `ocasionxarticulo`
  ADD KEY `ocasion_ocasionxarticulo_fk` (`id_ocasion`),
  ADD KEY `articulo_ocasionxarticulo_fk` (`id_articulo`);

--
-- Indices de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  ADD PRIMARY KEY (`id_recomendaciones`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ci_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT de la tabla `desc_metricas`
--
ALTER TABLE `desc_metricas`
  MODIFY `id_metrica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  MODIFY `id_detalle_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `metricas`
--
ALTER TABLE `metricas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;
--
-- AUTO_INCREMENT de la tabla `ocasion`
--
ALTER TABLE `ocasion`
  MODIFY `id_ocasion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `recomendaciones`
--
ALTER TABLE `recomendaciones`
  MODIFY `id_recomendaciones` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `metricas`
--
ALTER TABLE `metricas`
  ADD CONSTRAINT `desc_metricas_metricas_fk` FOREIGN KEY (`id_metrica`) REFERENCES `desc_metricas` (`id_metrica`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
