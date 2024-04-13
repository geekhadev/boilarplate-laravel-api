### Módulo de devices

**Sistema:** tracking

Tests NO implementados ❌
Tests implementados y satisfactorios 🟢
Tests implementados pero fallidos 🔴

Directorio raíz: /tests/Feature/Tracking/Devices

#### Devices list [DevicesListTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Estado 401 si no se envía el token | Devería devolver un status 401 si no se envía el token de login |
| 🟢 | 10 registros por defecto | Debería devolver 10 registros por defecto en el páginado |
| 🟢 | Buscar un registro por filtro search | Debería devolver un registro al buscar por nombre en el search |
| 🟢 | Buscar un registro por filtro name | Debería devolver un registro al buscar por nombre en filters[name] |
| 🟢 | Ordenar por nombre | Debería devolver los registros ordenados por nombre |

#### Devices show [DevicesShowTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Estado 401 si no se envía el token | Devería devolver un status 401 si no se envía el token de login |
| 🟢 | Mostrar un registro | Debería mostrar un registro |
| 🟢 | Estado 404 si el registro no existe | Debería devolver un status 404 si el registro no existe |

#### Devices store [DevicesStoreTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Estado 401 si no se envía el token | Devería devolver un status 401 si no se envía el token de login |
| 🟢 | Crear un nuevo registro | Debería crear un nuevo registro |
| 🟢 | Estado 422 si no se envían los datos requeridos | Debería devolver un status 422 si no se envían los datos requeridos |

#### Devices delete [DevicesDeleteTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Estado 401 si no se envía el token | Devería devolver un status 401 si no se envía el token de login |
| 🟢 | Eliminar un registro | Debería eliminar un registro |
| 🟢 | Estado 404 si el registro no existe | Debería devolver un status 404 si el registro no existe |

#### Devices update [DevicesUpdateTest.php]

| Estado | Título | Descripción |
| --- | --- | --- |
| 🟢 | Estado 401 si no se envía el token | Devería devolver un status 401 si no se envía el token de login |
| 🟢 | Estado 405 si no se envía el id | Debería devolver un status 405 si no se envía el id |
| 🟢 | Actualizar un registro | Debería actualizar un registro |
| 🟢 | Estado 404 si el registro no existe | Debería devolver un status 404 si el registro no existe |
| 🟢 | Estado 422 si no se envían los datos requeridos | Debería devolver un status 422 si no se envían los datos requeridos |
