# phpapitest

PHP Api Test

El webservice funciona con los archivos .htaccess, que tiene las reglas de reescritura del archivo service2.php y el archivo service2.php
El mismo recibe acepta los siguientes pedidos
PUT http://server/service2 : para insertar registros
DELETE http://server/service2/${id} : para borrar el id que se pasa como parametro
POST http://server/service2/${id} : para modificar el id que se pasa como parametro

Del lado del cliente se deben implementar los archivos:
client.php: que es el frontal
add.php: que formatea el formulario del frontal, para enviar el PUT por curl
select.php: que envio un POST al service2.php para ver todos los registros de la tabla scratchers
update.php: que envia un POST por curl al service2.php para modificar un registro
delete.php: que envia un DELETE por curl al service2.php, para borrar un registro

Cada uno de estos archivos tiene un headear() al final que hace un refresh del client.php
