<!--Coneccion a la base de datos de MYSQL-->

<!-- Aqui hago la conexion a la base de datos, utilizando una biblioteca de mysql (mysqli), para esto
hacemos uso de una funcion de esta biblioteca (connect).

1. Lo Primero que hacemos es agregar los parametros que hacen que pueda conectarme a la base de datos o bases de datos de mysql (

1.1. Osea que aqui debo saber, su localizacion, osea en donde se encuentra mi base de datos, en donde está el servidor de la base de datos
entonces se puede utilizar una ip o un dominio que nos diga en donde esta nuestra base de datos, ya sea local o remota, y como para este 
caso nuestra base de datos se encuentra instalada localmente en el mismo computador donde se esta creando la aplicacion entonces 
utilizamos (localhost).

1.2. Tambien debo especificarle el usuario, y para este caso, el usuario por defecto cuando se instala xammpp en nuestra pc es llamado root

1.3. Tambien debemos especificarle la contraseña que se utiliza para entrar a esta base de datos, y en este caso cuando se instala xampp
el crea este usuario root sin contraseña, por ende lo dejamos vacio

1.4. Por ultimo le damos el nombre de la base de datos a la cual voy a conectarme. En este caso seria el nombre de la db que creamos
en mysql.)

2. Ahora bien, lo anterior fue haber creado esta funcion, pero esta funcion nos retorna un objeto de conexion, por tanto lo que hacemos
es guardar lo que nos devuelve esta funcion en una variable ( $conn )

3. Esta funcion obviamente irá dentro de un archivo de configuracion php.
-->

<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'php_db_CRUD_basico'
);


?>