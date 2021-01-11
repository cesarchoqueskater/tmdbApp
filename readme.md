# Proyecto THE MOVIE DATABASE
## Aplicacion PHP + API de TMDB

>La aplicacion todavia esta en desarrollo, falta mejorar codigo

Este aplicacion esta basada en PHP y consume la api de la plataforma de peliculas The Movie Database [themoviedb](https://www.themoviedb.org/)

### Clave de la API
Para poder usar la aplicacion tenemos que crearnos una cuenta en https://www.themoviedb.org/ .
Luego tenemos que generar la clave de la API, y colocarla en el archivo a continuacion.


| Ruta   | Archivo |
| ------ | ------   |
| api | api_key.php    |

```php
<?php
//Colocar aqui la Clave de la API (v3 auth), que se obtendra al crear una cuenta en https://www.themoviedb.org/
$API_KEY = 'CLAVE_API';
```
### Screenshot de la Aplicación

[<img src="pictures_app/tmdb_1.png" />](pictures_app/tmdb_1.png)

[<img src="pictures_app/tmdb_2.png" />](pictures_app/tmdb_2.png)

>**Nota**
Tener en cuenta que el nombre de la carpeta en donde se almacenara la aplicacion tiene que ser igual al nombre que se le da RewriteBase en el archivo `.htaccess`
