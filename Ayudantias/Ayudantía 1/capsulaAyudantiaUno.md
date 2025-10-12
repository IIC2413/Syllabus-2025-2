# Cápsula comandos CLI

En esta cápsula se va a mostrar el uso de diversos comando útiles para las entregas del proyecto dentro del servidor 

Link video:
[Presiona aquí](https://youtu.be/OrXb2cVUbUE)

## Conexión al servidor

Para establecer una conexión en un servidor se tiene que seguir el siguiente formato.

```bash
ssh {usuario}@{host}
```

En efectos de este semestre se va a tener el siguiente formato

```bash
ssh {usuario_uc}.bdd@stonebraker.ing.uc.cl
```

Por ejemplo, si mi usuario uc es `waldo.seguel` para conectarme al servidor tengo que ejecutar el siguiente comando

```bash
ssh waldo.seguel.bdd@stonebraker.ing.uc.cl
```

Donde la primera vez voy a tener que autorizar la conexión al servidor, y luego ingresar mi contraseña que es el número de alumno (esta aparecerá como si no se escribiera) donde la contraseña es el número de alumno (si incluye j, va en mayúscula).

### Desconexión

Una vez conectado, se puede terminar la sesión con el siguiente comando

```bash
exit
```

### Entregas proyecto

Este semestre para cada entrega se va a utilizar una cuenta distinta en el servidor, donde `x`representa el número de la entrega (se mantiene la misma contraseña)

```bash
ssh {usuario_uc}.e{x}@stonebraker.ing.uc.cl
```

Por ejemplo, si mi usuario uc es `waldo.seguel`para la entrega 1 se utilizaría el siguiente comando

```bash
ssh waldo.seguel.e1@stonebraker.ing.uc.cl
```
Y así sucesivamente para la entrega 2, 3 y 4


## Crear archivo

Para crear un archivo utiliza el siguiente (debe incluirse la extensión en el `nombre_archivo`, ej `.txt`)

```bash
touch {nombre_archivo}
```
## Editar un archivo

Permite abrir el archivo `nombre_archivo` y editarlo, también permite la creación de archivos si este no está presente en el directorio actual

```bash
nano {nombre_archivo}
```

## Crear carpeta

Crea una carpeta en el directorio actual

```bash
mkdir {nombre_carpeta}
```

## Revisar directorio actual

Muestra todos los elementos presentes en el directorio actual 

```bash
ls
```

## Navegar entre directorios

Permite ingresar a la carpeta `nombre_carpeta` que se indique

```bash
cd {nombre_carpeta}
```

Para retroceder de directorio se pude utilizar

```bash
cd ..
```

## Copiar un archivo/carpeta

Se copia el `nombre_archivo` - `nombre_carpeta` dentro de la `ruta_destino` que se indique 

```bash
cp {nombre_archivo} {ruta_destino}
```

```bash
cp -r  {nombre_carpeta} {ruta_destino}
```

## Mover un archivo/carpeta

Se mueve el `nombre_archivo` - `nombre_carpeta` dentro de la `ruta_destino` que se indique 

```bash
mv {nombre_archivo} {ruta_destino}
```

```bash
mv {nombre_carpeta} {ruta_destino}
```

## Renombrar un archivo/carpeta

Permite cambiar el nombre de un archivo de `nombre_actual` a `nombre_nuevo`

```bash
mv {nombre_actual} {nombre_nuevo}
```

## Eliminar archivo/carpeta

Elimina el archivo `nombre_archivo` - `nombre_carpeta` del directorio actual
```bash
rm {nombre_archivo}
```

```bash
rm -r {nombre_carpeta}
```

## Transferencia de archivo/carpeta

De forma local (desconectado del servidor), si quiero subir el archivo `nombre_archivo` o carpeta `nombre_carpeta` dentro del servidor en la ruta `ruta_destino`, se utilza el siguiente comando

```bash
scp {nombre_archivo} {usuario_uc}.bdd@stonebraker.ing.uc.cl:{ruta_destino}
```

```bash
scp -r {nombre_carpeta} {usuario_uc}.bdd@stonebraker.ing.uc.cl:{ruta_destino}
```

Caso contrario, si se quiere descargar el archivo `nombre_archivo` o carpeta `nombre_carpeta` del servidor hacia la ruta `ruta_destino`, estando desconectado, se tiene que ejecutar el siguiente comando

```bash
scp {usuario_uc}.bdd@stonebraker.ing.uc.cl:{nombre_archivo} {ruta_destino}
```

```bash
scp -r {usuario_uc}.bdd@stonebraker.ing.uc.cl:{nombre_carpeta} {ruta_destino}
```

## Limpiar consola

Si se tiene muchos comandos y se quiere limpiar el log se utiliza el siguiente comando

```bash
clear
```