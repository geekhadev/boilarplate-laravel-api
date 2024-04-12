# Boilerplate de API con Laravel

Este repositorio contiene un boilerplate para la creación de APIs con Laravel, una framework de desarrollo web robusta y flexible en PHP.

## 🚀 Características

- **GitIgnore:** se incluye un archivo `.gitignore` preconfigurado para ignorar los archivos y carpetas comunes, de diferentes sistemas operativos y editores.
- **EditorConfig:** se incluye un archivo `.editorconfig` preconfigurado para mantener la preferencia de tabulación del código.
- **CommitLint:** se incluye un archivo de configuración de CommitLint para mantener un estilo de mensaje de commit consistente.

### Próximamente

- **Husky:** se incluirá un archivo de configuración de Husky para ejecutar scripts de pre-commit y pre-push.
- **Linter:** usamos [Pint](https://laravel.com/docs/11.x/pint) para mantener un estilo de código consistente.
- **Tests:** se incluirán pruebas unitarias y de integración para garantizar la calidad del código.
- **Documentación:** se incluirá Swagger para documentar la API y facilitar su uso.
- **Docker:** se incluirá un archivo de configuración de Docker para facilitar la ejecución del proyecto en diferentes entornos.
- **CI/CD:** se incluirá un archivo de configuración de GitHub Actions para automatizar las pruebas y la implementación.
- **Postman:** se incluirá una colección de Postman para realizar pruebas manuales de la API.
- **Websockets:** configuración de Laravel Reverb para implementación de websockets.
- **RabbitMQ:** configuración de RabbitMQ y un proceso de lectura de colas.

## ⚙️ Instalación

1. Clona el repositorio: `git clone https://github.com/geekhadev/boilerplate-api-laravel.git`
2. Instala las dependencias: `composer install`
3. Copia el archivo de configuración de ejemplo: `cp .env.example .env`
4. Genera una nueva clave de aplicación: `php artisan key:generate`
5. Configura tu base de datos en el archivo `.env`
6. Ejecuta las migraciones de la base de datos: `php artisan migrate`
7. ¡Listo para empezar!

## 📘 Uso

Una vez configurado, puedes comenzar a desarrollar tu API sobre esta base. Utiliza las rutas predefinidas para crear nuevos endpoints y expandir la funcionalidad según tus requisitos.

## ✅ Contribución

¡Las contribuciones son bienvenidas! Si deseas mejorar este proyecto, por favor, envía un pull request. Asegúrate de seguir las guías de contribución y de código.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT) - ver el archivo [LICENSE](LICENSE) para más detalles.
