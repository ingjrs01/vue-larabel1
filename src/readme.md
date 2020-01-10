# Cosillas sobre las que escribir


## Instalación de mysql

Tenemos que hacer un par de cambios, nada más arrancar el contenedor, ....

## Las rutas de Laravel no Funcionan. 

Para solucionar esto, usaremos: 

```sh
sudo a2enmod rewrite
```

## Actualizar Node.js en debian. 

```sh
sudo apt update
sudo apt -y upgrade

sudo apt update
sudo apt -y install curl dirmngr apt-transport-https lsb-release ca-certificates
curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash -

sudo apt -y install nodejs

#También se puede instalar herramientas de desarrollo nativas
sudo apt -y  install gcc g++ make

node --version
npm --version

```


## Otras Notas. 

Laravel ya trae de serie vue


También nos trae un wrapper de webpack llamado laravel-mix. Su instalación viene definida en el archivo package .json, 
y para que quede instalado, solo tendremos que ejecutar npm install. ( Se instalaran más cosas). Los paquetes instalados 
se meten en una carpeta llamada node-modeles, que podemos encontrar en nuestra instalación de laravel. 

Para ejecutarlo, podmeos usar: 

```sh
npm run watch
```

Este comando se queda escuchando los cambios, y va generando los 

Si este comando no funciona, podemos usar el siguiente. En mis ejemplos este es el que funciona: 

```console
npm run watch-poll
```


## Revisar como funcionan los seeders

php artisan make seeder


