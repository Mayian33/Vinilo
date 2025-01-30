-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-01-2025 a las 08:39:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vinilos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id`, `titulo`, `descripcion`, `precio`, `imagen`) VALUES
(1, 'Dark Side of the Moon', 'Álbum icónico de Pink Floyd lanzado en 1973.', 24.99, 'https://imgs.search.brave.com/OVBx-XTt_aFy1xb-sjXo2iJ90lwIUXYD8GeCI0sNVEo/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9wYXJj/YXN0cm9ub21pYy5j/YXQvd3AtY29udGVu/dC91cGxvYWRzLzIw/MjMvMTEvZGFyay1z/aWRlLTAxLmpwZw'),
(2, 'Abbey Road', 'El clásico álbum de los Beatles con canciones memorables.', 19.99, 'https://imgs.search.brave.com/Ct6xzikr2YcysWkRiDV2akKEO1rpNZMI4kGmK4YGXYU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMucmFkaW94LmNv/LnVrL2ltYWdlcy81/OTYxMDk_Y3JvcD0x/XzEmd2lkdGg9NjYw/JmZvcm1hdD13ZWJw/JnNpZ25hdHVyZT1E/OG1lOEU2ZEtEd1Fy/SFlFR1MtbWw4Vy1v/c3c9'),
(3, 'Thriller', 'El álbum más vendido de Michael Jackson, lanzado en 1982.', 29.99, 'https://imgs.search.brave.com/Ab6TzvJREP6G1wL2rB9njmTm-lRCNRxc75kx99tIZsI/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9zdG9y/YWdlLmdvb2dsZWFw/aXMuY29tL3BvZF9w/dWJsaWMvMTMwMC8x/MTIzMTguanBn'),
(4, 'Back in Black', 'Álbum de AC/DC, uno de los más vendidos de todos los tiempos.', 22.5, 'https://imgs.search.brave.com/KUfSiXk3XCit-EmzpZqjsvSbTlDHWMKqvOg06xXcNOA/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9kaXNj/b3Zpbmlsb3RvcC5j/b20vd3AtY29udGVu/dC91cGxvYWRzLzIw/MjMvMDkvYmFjay1p/bi1ibGFjay1hY2Rj/LmpwZw'),
(5, 'Hotel California', 'El álbum icónico de Eagles con su famosa canción.', 21.99, 'https://imgs.search.brave.com/zMXaE205xNZJY8sTaMs9Ggm3D1xynzEUD7xBGnMLde8/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzFkLzRk/L2MwLzFkNGRjMGEx/ZWU4NWUzNWI3NzJj/ZWYwOGI1ZDlkYTYy/LmpwZw'),
(6, 'Rumours', 'Álbum clásico de Fleetwood Mac lleno de éxitos.', 18.99, 'https://imgs.search.brave.com/DBeexAA_F8aWUqil-GfGXsZfg_G8ZlcJf89YoBN9Ajs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90aWVu/ZGF3YXJuZXJtdXNp/Yy5lcy9jZG4vc2hv/cC9maWxlcy8wMDkz/NjI0OTc5MzU3Xy1f/Mi53ZWJwP3Y9MTcz/Mjc5NzYzMCZ3aWR0/aD0xNDQ1'),
(7, 'Led Zeppelin IV', 'Incluye la legendaria canción \"Stairway to Heaven\".', 23.99, 'https://imgs.search.brave.com/Vps-PObDKwqu3eMUP0d6awP41ZVg7rb51bZVsnMqBr4/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bGFjYXNhZGVsZGlz/Y28uZXMvMzYyNTAt/aG9tZV9kZWZhdWx0/L2xlZC16ZXBwZWxp/bi12aW5pbG8taXYt/Y2xlYXIuanBn'),
(8, 'Born in the U.S.A.', 'El exitoso álbum de Bruce Springsteen lanzado en 1984.', 20.99, 'https://imgs.search.brave.com/HTM8NuoFqWwagPdfkvSOz7tCuF_jD_M8u-CPqerZ08o/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90aWVu/ZGEuZWxkcm9tZWRh/cmlvcmVjb3Jkcy5j/b20vY2RuL3Nob3Av/ZmlsZXMvYnJ1Y2Ut/c3ByaW5nc3RlZW4t/Ym9ybi1pbi10aGUt/dXNhXzE0MDB4Lmpw/Zz92PTE2ODczNjIz/OTI'),
(9, 'Mufasa sound track', 'Una nueva experiencia auditiva de la conocida saga del rey león', 26.5, 'https://imgs.search.brave.com/TpY1OU-Zn_Xe9ga3p4NW9SJ1eZQtr7ta_f3DncHe8jg/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cGxhdGVuemFhay5u/bC9jZG4vc2hvcC9m/aWxlcy9NdWZhc2FU/aGVMaW9uS2luZ19W/aW55bF9Qcm9kdWN0/U2hvdF8wNTAwODc1/NjUxNzZjb3B5XzEw/MjR4MTAyNC53ZWJw/P3Y9MTczNDAxMzI5/Mg'),
(10, 'Nevermind', 'El álbum revolucionario de Nirvana, liderado por Kurt Cobain.', 25.99, 'https://imgs.search.brave.com/YOVyQShXWXxGlvddlbAvFILKNjfcAtA65kU5e1Dcl0E/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9odHRw/Mi5tbHN0YXRpYy5j/b20vRF9OUV9OUF85/MTMyMDUtTUxVNzg4/MTQ1OTA3MDBfMDky/MDI0LU8ud2VicA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
