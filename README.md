# Boilerplate de API con Laravel

Este repositorio contiene un boilerplate para la creación de APIs con Laravel, una framework de desarrollo web robusta y flexible en PHP.

## 🚀 Características

**GitIgnore:** se incluye un archivo `.gitignore` preconfigurado para ignorar los archivos y carpetas comunes, de diferentes sistemas operativos y editores.

**EditorConfig:** se incluye un archivo `.editorconfig` preconfigurado para mantener la preferencia de tabulación del código.

**CommitLint:** se incluye un archivo de configuración de CommitLint para mantener un estilo de mensaje de commit consistente.

**Husky:** se incluye un archivo de configuración de Husky para ejecutar scripts de pre-commit y pre-push.

- el pre-commit ejecuta: [linter]
- el pre-push ejecuta: []

**Linter:** usamos [Pint](https://laravel.com/docs/11.x/pint) para mantener un estilo de código consistente. El comando se agrega a los scripts de pre-commit. El linter detecta errores de estilo y de sintaxis en el código.

Para ejecutar el linter:

```bash
npm run lint
```

**Docker:** se incluye un `docker-compose.yml` preconfigurado para ejecutar los servicios necesarios para el proyecto.

- Postgres: base de datos
- Redis: cache y cola

Para ejecutar los servicios:

```bash
docker-compose up -d
```

- **Telescope:** se incluye Laravel Telescope para depurar y analizar las solicitudes de la aplicación. Puedes acceder a Telescope en la ruta `/telescope`. Se recomienda deshabilitar Telescope en producción cambiando la variable de entorno `TELESCOPE_ENABLED` a `false`.

- **Tests postman:** se incluye una [colección de Postman](https://github.com/geekhadev/boilerplate-laravel-api/blob/main/boilerplate-laravel-api.postman_collection.json) con las peticiones existentes en la API. Puedes descargarla e importarla en tu cliente de Postman para probar la API.

### Próximamente

- **Tests:** se incluirán pruebas unitarias y de integración para garantizar la calidad del código.
- **Documentación:** se incluirá Swagger para documentar la API y facilitar su uso.
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

### Commits y PRs

Por favor, sigue las convenciones de commit y PRs para mantener un historial de cambios limpio y fácil de leer.

#### Commits

Los mensajes de commit deben seguir la convención descrita [en este archivo de configuración](https://github.com/geekhadev/boilerplate-laravel-api/blob/main/commitlint.config.cjs) de [CommitLint](https://commitlint.js.org/guides/getting-started.html). Por favor mantén los mensajes de commit claros y concisos. No importa si son en inglés o español, pero deben ser consistentes.

Ten encuenta que hemos agregado `husky` para ejecutar una validación de los mensajes de commit antes de realizar un commit. Si el mensaje no cumple con la convención, no se permitirá realizar el commit y te mostrará un mensaje de error.

## 📚 Documentación

### 🔗 Rutas

En el directorio `docs/routes` encontrarás una serie de archivos Markdown con información sobre los diferentes módulos de la API. Puedes consultarlos para obtener más detalles sobre los endpoints y la funcionalidad de cada módulo.

[Módulo de autenticación](https://github.com/geekhadev/boilerplate-laravel-api/blob/main/docs/routes/auth.md)
[Sistema de seguimiento - Módulo de dispositivos](https://github.com/geekhadev/boilerplate-laravel-api/blob/main/docs/routes/tracking/devices.md)

### 🗂️ Base de datos

Se usan las siguientes bases de datos:

- **database:** para almacenar los datos de la aplicación.
- **testing:** para almacenar los datos de las pruebas.

Se usan los siguientes esquemas:

- **public:** para las tablas por defecto de Laravel.
- **tracking:** para las tablas de seguimiento de la aplicación.

### 🧪 Tests

En el directorio `docs/tests` encontrarás una serie de archivos Markdown con información sobre los tests creados para la API. Puedes consultarlos para obtener más detalles sobre los tests y la funcionalidad de cada módulo.

Para ejecutar los tests, utiliza el siguiente comando:

```bash
php artisan test
```

Para ejecutar el test de cobertura, utiliza el siguiente comando:

```bash
npm run test:coverage 
```

> Para poder hacer un push se necesita un mínimo del 90% de cobertura de código.

[Módulo de autenticación](https://github.com/geekhadev/boilerplate-laravel-api/blob/main/docs/tests/auth.md)

## ✅ Contribución

¡Las contribuciones son bienvenidas! Si deseas mejorar este proyecto, por favor, envía un pull request. Asegúrate de seguir las guías de contribución y de código.

## Licencia

Este proyecto está licenciado bajo la [Licencia MIT](https://opensource.org/licenses/MIT) - ver el archivo [LICENSE](LICENSE) para más detalles.
