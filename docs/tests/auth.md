### Módulo de autenticación

Tests NO implementados ❌
Tests implementados y satisfactorios 🟢
Tests implementados pero fallidos 🔴

Directorio raíz: /tests/Feature/Auth

#### Tests Login [LoginTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Login con credenciales válidas | Iniciar sesión con credenciales válidas |
| 🟢 | Login con credenciales inválidas | Iniciar sesión con credenciales inválidas |
| 🟢 | Login con credenciales vacías | Iniciar sesión con credenciales vacías |

#### Tests Register [RegisterTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Registro con datos válidos | Registrar un nuevo usuario con datos válidos |
| 🟢 | Registro con email duplicado | Registrar un nuevo usuario con un email duplicado |
| 🟢 | Registro con datos vacíos | Registrar un nuevo usuario con datos vacíos |

#### Tests Logout [LogoutTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Logout con token inválido | Debería devolver un status 401 si el token es inválido |
| 🟢 | Logout con token válido | Debería un 204 y cerrar sesión con un token válido |
