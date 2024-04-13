### Módulo de autenticación

| endpoint | method | sanctum | description |
| --- | --- | --- | --- |
| /api/devices | GET | true | Obtener la lista de dispositivos registrados |
| /api/devices/{id} | GET | true | Obtener la información de un dispositivo |
| /api/devices | POST | true | Registrar un nuevo dispositivo |
| /api/devices/{id} | PUT | true | Actualizar la información de un dispositivo |
| /api/devices/{id} | DELETE | true | Eliminar un dispositivo |

El método get de la ruta `/api/devices` permite enviar los siguientes parámetros para complementar el páginado y los filtros avanzados:

| parameter | description |
| --- | --- |
| perPage | Número de elementos por página |
| page | Número de página |
| search | Búsqueda por nombre de dispositivo |
| orderBy | Ordenar por columna |
| orderType | Ordenar de forma ascendente o descendente |

**Filtros avanzados:**

| parameter | description |
| --- | --- |
| filters[name] | Filtrar por nombre de dispositivo |
