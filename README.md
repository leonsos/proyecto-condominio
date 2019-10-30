crear base de datos llamada roles
una vez descargado el proyecto y colocado en htdocs ir a la terminal
ejecutar php artisan migrate
luego ejecutar php artisan migrate:refresh --seeder
loguearnos en el sistema y salir 
luego ir a la base de datos en phpmyadmin
y a tabla role_user e insertar 1 registro
luego colocamos role_id->admin y user_id->21(tu usuario creado) para que tenga privilegios de administrador
luego para probar el error ir en el dashboard, residencias-> ver-> crear
