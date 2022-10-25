-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2022 a las 21:17:37
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre_corto` varchar(43) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_largo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_corta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_larga` text COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica1` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica2` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica3` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica4` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica5` varchar(130) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_categoria` tinyint(5) UNSIGNED NOT NULL,
  `estado` tinyint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre_corto`, `nombre_largo`, `descripcion_corta`, `descripcion_larga`, `caracteristica1`, `caracteristica2`, `caracteristica3`, `caracteristica4`, `caracteristica5`, `precio`, `id_categoria`, `estado`) VALUES
(1, 'Teclado Redragon Kumara K552 QWERTY', 'Teclado gamer Redragon Kumara K552 QWERTY Outemu Rojo', 'Su ergonomía, su base antidelizante y su rápido tiempo de respuesta permite que tus juegos favoritos se sientan mejores y más cerca que nunca, ahora al alcance de tus manos.', 'Su retroiluminación da un toque diferente a tu equipo y resalta su composición cuando es utilizado en espacios poco iluminados. Este dispositivo tiene teclas antighosting. Esta cualidad es indispensable si requieres de un uso intensivo del periférico. Gracias a esto podrás evitar fallas al tocar varias teclas al mismo tiempo.', 'Ergonómico y apto para diversos usos.', 'Función antighosting incorporada.', 'Tipo de teclado: mecánico.', 'Con conector USB.', 'Medidas: 37.5cm de ancho, 15.5cm de alto y 4.3cm de profundidad.', '214000.00', 2, 1),
(2, 'Mouse Redragon M908 Alámbrico Impact', 'Mouse Redragon M908 Alámbrico Impact Gaming Negro', 'El Impact es un ratón gamer que rinde perfectamente bien en cualquier tipo de juegos, pero está especialmente optimizado para ser un especialista en MOBA y MMORPG.', 'El Impact es un ratón gamer que rinde perfectamente bien en cualquier tipo de juegos, pero está optimizado para ser un especialista en MOBA y MMORPG. Sus doce botones laterales, por ejemplo, o su apoyo completo, con descanso para los dedos meñique y anular, le permiten destacarse y sobresalir en esos géneros.', 'Posee 8 pesas extraíbles de 2,4 gr.', 'Cuenta con 18 botones del Impact configurables por software.', 'Cuenta con una memoria interna que almacena los perfiles', 'Sensor Optico: 3327 Dpi', 'Baterias: No Requiere Pilas o Baterías.', '119000.00', 3, 1),
(3, 'Monitor LG Gamer 32\'\' GN650 OLED Negro', 'Monitor LG Gamer 32\'\' GN650 OLED Negro', 'Disfruta de tus videojuegos favoritos y sorprendete con la profundidad de los colores, que solo el único negro puro y los más de 33 millones de píxéles pueden darte.', 'Cambia las reglas del UltraGear™ de LG, el equipo más poderoso que aumenta tus posibilidades de ganar. Con su tasa de refresco 165Hz le permite a los jugadores ver rápidamente el próximo cuadro y hace que la imagen aparezca con fluidez. Los jugadores pueden responder rápidamente a los oponentes y apuntar a sus objetivos con facilidad. Los objetos dinámicos y de ritmo rápido en medio de toda la acción pueden dar a los jugadores una ventaja competitiva.', 'Panel OLED de frecuencia de actualización de 165Hz, y con < 5ms de velocidad de respuesta (GtG).', 'HDMI 2.1 para disfrutar de los últimos lanzamientos de videojuegos en consolas de última generación.', 'Estabilizador de Negros (Tecnología Black Stabilizer), que permite colores oscuros más diferenciados.', 'Tecnología AMD FreeSync™ Premium Pro.', 'Compatible con gráficas NVIDIA y con la interfaz G-Sync, para disfrutar de toda la acción sin parpadeos.', '1799900.00', 1, 1),
(4, 'Tarjeta Gráfica Nvidia GeForce GTX 1660 6GB', 'Tarjeta Gráfica Nvidia GeForce GTX 16 Series GTX 1660 GV-N1660OC-6GD OC Edition 6GB', 'Nvidia es el fabricante líder de placas de video; su calidad asegura una mejor experiencia positiva en el rendimiento y desarrollo del motor gráfico de tu computadora.', 'Los cálculos para el procesamiento de gráficos se realizarán de forma simultánea logrando un resultado óptimo del trabajo de la placa. Esto le permitirá ejecutar lecturas dispersas y rápidas hacia la GPU. Su resolución de 7680x4320 no te defraudará. La decodificación de los píxeles en tu pantalla te harán ver hasta los detalles más ínfimos en cada ilustración.', 'Interfaz PCI-Express 3.0', 'Bus de memoria: 192bit', 'Cantidad de núcleos: 1408', 'Frecuencia base del núcleo de 1830MHz', 'Compatible con directX y openGL.', '1569900.00', 5, 1),
(5, 'Nintendo Switch - Mario Kart 8 Deluxe Ed.', 'Nintendo Switch - Mario Kart 8 Deluxe Edition', 'Juega en tu casa o lleva la carrera donde quieras. Compite con tus amigos o lucha contra ellos en un modo de batalla revisado en las nuevas pistas. ¿Una carrera?', 'Juega en la pantalla grande de tu casa o llevate la carrera donde quieras. Compite con tus amigos o lucha contra ellos en un modo de batalla revisado en los campos de batalla nuevos y recurrentes. Ademas, los Inklings aparecen como personajes invitados completamente nuevos, junto con los favoritos que regresan.', 'Desarrollador del Juego: Nintendo', 'Plataforma: Switch', 'Género: Aventura, Carreras', 'Clasificación: E', 'Edad Sugerida: Menores de 8 años', '219900.00', 7, 1),
(6, 'PS 5 - Call Of Duty - Black Ops - Cold War', 'PS 5 - Call Of Duty - Black Ops - Cold War', 'Vuelve la emblemática serie Black Ops con Call of Duty: Black Ops Cold War, la secuela directa de uno de los títulos favoritos de los fans ahora en la batalla de la Guerra Fría.', 'Black Ops Cold War transportará a los jugadores a la batalla geopolítica de la Guerra Fría, a principios de los 80. Enfrentate cara a cara a figuras históricas y verdades incómodas mientras luchas por todo el mundo en escenarios icónicos como Berlín Oriental, Vietnam, la sede de la KGB y más.', 'Desarrollador del Juego: Activision', 'Plataforma: Play Station 5', 'Género: Acción', 'Clasificación: Mature +17', 'Edad Sugerida: Mayores de 18 años', '189900.00', 7, 1),
(7, 'PS 4 - Spider-Man Game of the Year - LATAM', 'PS 4 - Spider-Man Game of the Year - LATAM', 'Hazte con la edición juego del año y juega los capítulos de la historia de Marvel\'s Spider-Man: La ciudad que nunca duerme, con misiones y desafíos arácnidos adicionales.', 'Hazte con la edición juego del año y juega los capítulos de la historia de Marvel\'s Spider-Man: La ciudad que nunca duerme, con misiones y desafíos adicionales, nuevas facciones de enemigos del universo de Spider-Man y trajes que desbloquear.', 'Desarrollador del Juego: Insomniac Games', 'Plataforma: Play Station 4', 'Género: Acción', 'Clasificación: T - Adolescentes', 'Edad Sugerida: De 14 a 18 años', '169900.00', 7, 1),
(8, 'XBOX Series X - Guardians Of The Galaxy', 'XBOX Series X - Marvel\'s Guardians Of The Galaxy', 'Propúlsate a la aventura por el cosmos con Marvel\'s Guardians of the Galaxy. En este juego irreverente de acción y aventura en tercera persona encarnarás a Star-Lord.', 'Propúlsate a la aventura por el cosmos con esta novedosa entrega de Marvel\'s Guardians of the Galaxy. En esta historia original de Marvel\'s Guardians of the Galaxy, encarnarás a Star-Lord y guiarás a los Guardianes de la galaxia en la lucha por el destino de la galaxia. Es hora de demostrarle al universo quién eres.', 'Desarrollador del Juego: Square Enix', 'Plataforma: Xbox Series X', 'Género: Acción, Aventura', 'Clasificación: T - Adolescentes', 'Edad Sugerida: De 14 a 18 años', '199900.00', 7, 1),
(9, 'Auriculares Gaming Razer - BlackShark V2 X', 'Auriculares Gaming Razer - BlackShark V2 X Wired 7.1 Surround Sound Black', 'Compite con los Razer BlackShark V2 X, una amenaza por su sonido increíble, nitidez del micrófono superior y un aislamiento acústico inmejorable acreditado por profesionales.', 'Haz frente a la competencia con unos cascos para Esports ligeros que se crecen ante la presión. Presentamos los Razer BlackShark V2 X: una amenaza triple por su sonido increíble, nitidez del micrófono superior y un aislamiento acústico inmejorable acreditado por profesionales. Cuenta con un diseño ligero de 240 gramos y sonido envolvente 7.1', 'Compatibilidad multiplataforma (PC, Mac, PS4, Xbox One, Nintendo Switch y dispositivos móviles).', 'Diafragmas de 50 mm Razer™ TriForce para un rendimiento de audio de alta calidad.', 'Micrófono cardioide Razer™ HyperClear para una captura de voz mejorada.', 'Frecuencia de respuesta de los auriculares de 12 Hz–28 kHz y del micrófono de 100 Hz–10 kHz', 'Longitud del cable de 1,3 m y peso aproximado de 240 g/0,53 lb.', '229900.00', 4, 1),
(10, 'Mouse Logitech - G Series Lightsync G203', 'Mouse Logitech - G Series Lightsync G203 lila', 'Logitech diseña productos que ocupan un lugar cotidiano en la vida de las personas, poniendo foco en la innovación y la calidad. Los mouses Logitech te brindan una gran comodidad.', 'Logitech diseña productos y experiencias que ocupan un lugar cotidiano en la vida de las personas, poniendo foco en la innovación y la calidad. Su objetivo es crear momentos verdaderamente únicos y significativos para sus usuarios. Los mouses Logitech se adaptan a la forma de tu mano para proporcionarte horas de comodidad. Sin necesidad de mover el brazo para deslizar el cursor, tu mano se fatigará menos. Son ideales para cualquier espacio de trabajo y quienes tienen la mesa llena de diversos objetos.', 'Cuenta con 6 botones para un mayor control.', 'Con luces para mejorar la experiencia de uso.', 'Cuenta con sensor óptico.', 'Control inteligente y navegación fácil.', 'Creado para llevar a todas partes.', '106900.00', 3, 1),
(11, 'Teclado Gamer Hyperx Alloy Core RGB Negro', 'Teclado Gamer Hyperx Alloy Core RGB Negro', 'Con su barra de luz exclusiva de HyperX y los efectos de iluminación RGB dinámicos y fluidos, este teclado es perfecto para jugadores que quieran mejorar el estilo y rendimiento.', 'Gracias a su radiante barra de luz exclusiva de HyperX y a los efectos de iluminación RGB dinámicos y fluidos, el HyperX Alloy Core RGB™ es perfecto para jugadores que quieran mejorar el estilo y rendimiento de su teclado sin dejar la cartera tiritando. Cuenta con seis efectos de iluminación y tres niveles de brillo diferentes, lo que permite equilibrar la luminosidad y el presupuesto. Alloy Core RGB cuenta con una resistente carcasa de plástico reforzado; su estabilidad y fiabilidad son perfectas para los jugadores que busquen un teclado para un uso a largo plazo.', 'Las teclas cuentan con funcionalidades Anti-ghosting y Key rollover.', 'Posee controles multimedia específicos y los botones de acceso rápido para la iluminación y los modos de juego.', 'Cuenta con Keyboard Lock.', 'Es resistente a salpicaduras.', 'Es el teclado multimedia todoterreno perfecto para los jugadores.', '117900.00', 2, 1),
(12, 'Xbox One - Halo The Master Chief Collection', 'Xbox One - Halo The Master Chief Collection - Versión Digital', 'Halo: The Master Chief Collection es un recopilatorio de la épica saga de Halo para Xbox One que incluye seis juegos de la saga completamente remasterizados a 1080p.', 'Halo: The Master Chief Collection ofrece a los jugadores un emocionante viaje a través de seis juegos: Halo Reach, Halo: Combat Evolved Anniversary, Halo 2: Anniversary, Halo 3, Halo 3: ODST Campaña y Halo 4. Comienza con la increíble valentía de Noble seis en Halo: Reach y termina con el surgimiento de un nuevo enemigo en Halo 4, experimenta la saga completa del Jefe Maestro en un total de 67 misiones de campaña.', 'Desarrollador del Juego: Bungie Studios, 343 Industries', 'Plataforma: Xbox One', 'Género: Acción', 'Clasificación: Mature +17', 'Edad Sugerida: Mayores de 18 años', '149900.00', 7, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
