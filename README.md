# 🎬 MCU Next Film PHP

Este proyecto en PHP consume una API externa para mostrar información sobre la próxima película del Universo Cinematográfico de Marvel (MCU), incluyendo su título, fecha de estreno y días restantes para su lanzamiento. Se ha estructurado de manera modular y profesional para facilitar su mantenimiento y escalabilidad.

## 🚀 Características

- **Consumo de API externa utilizando `file_get_contents`**: En lugar de cURL, se utiliza esta función para obtener datos de la API.
- **Estructura modular con separación de responsabilidades**: El proyecto está organizado en carpetas y archivos que separan claramente las diferentes partes del código.
- **Uso de clases y funciones reutilizables**: Se promueve la reutilización de código a través de clases y funciones bien definidas.
- **Estilo moderno utilizando PicoCSS**: Aplica un diseño minimalista y actualizado con PicoCSS.
- **Implementación sencilla y ligera sin dependencias adicionales**: Sin necesidad de bibliotecas externas adicionales, facilitando su ejecución.

## 🛠️ Cómo Ejecutar en Local

Para ejecutar este proyecto en tu máquina local, sigue estos pasos:

1️⃣ **Clonar el repositorio**:

git clone https://github.com/TU-USUARIO/mcu-next-film-php.git
cd mcu-next-film-php


2️⃣ **Asegurar que PHP esté instalado**:
- Verifica si tienes PHP instalado ejecutando:
  ```
  php -v
  ```
- Si no lo tienes instalado, descárgalo desde: https://www.php.net/downloads

3️⃣ **Iniciar el servidor local de PHP**:
- Dentro del directorio del proyecto, ejecuta:
  ```
  php -S localhost:8000
  ```
- Luego, abre en tu navegador:
  ```
  http://localhost:8000
  ```

✅ **¡Listo!** Ahora deberías ver en pantalla la información sobre la próxima película de Marvel.

## 📂 Estructura del Proyecto

mcu-next-film-php/
│── index.php # Archivo principal que gestiona la lógica del proyecto
│── classes/
│ └─ NextMovie.php # Clase para manejar los datos de la película
│── templates/
│ │─ head.php # Plantilla para el encabezado del documento
│ │─ main.php # Plantilla para mostrar la información de la película
│ └─ styles.php # Estilos aplicados con PicoCSS
│── consts.php # Definición de constantes como la API URL
│── functions.php # Funciones auxiliares para manejo de datos y renderizado
│── README.md # Documentación del proyecto


## 📡 API Utilizada

El proyecto consume la API pública de [whenisthenextmcufilm.com](https://whenisthenextmcufilm.com), que proporciona información sobre las próximas películas de Marvel.

El consumo de esta API se realiza a través de la función `get_data($url)`, que obtiene los datos de la API utilizando `file_get_contents` y los decodifica en un array:

function get_data($url): array
{
$result = file_get_contents($url);
$data = json_decode($result, true);
return $data;
}

## 🎯 Autor

💡 Creado por **Tu Nombre o Usuario de GitHub**  
📧 Contacto: **tu-email@example.com**

Si te gustó el proyecto, ¡dale una estrella ⭐ en GitHub!

🚀 ¡Disfruta explorando las próximas películas del MCU con PHP!