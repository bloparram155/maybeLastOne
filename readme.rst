############
Repositorio Integrador 
############
Materias Diseño de aplicaciones interactivas, Seguridad informatica, Aplicaciones web.

############
Herramientas
############
GIT version 2.16.2<------------- MUST https://windows.php.net/download#php-7.2
Sublime Text <------------ Optional https://www.sublimetext.com/
PHP 7.2.4 <------------ MUST https://windows.php.net/download#php-7.2
Code Igniter <----------- Clonando este repositorio van a tener la version actual.
xampp

############
GIT Stuff
############

Para Crearse su user local y email para hacer commit/pulls al repositorio
git config --global user.name tuUser   <------Para crear user (El que ustedes quieran).
git config --global user.email tuEmail <------Para crear email (Debe ser el que usen en Github).

Una ves que tengan creado su User localmente deben de clonar el repositorio en xampp/htdocs:

git clone https://github.com/bloparram155/maybeLastOne.git <----- Para clonar el repositorio.

Ya que tengan clonado el repositorio MUCHO OJO con el branch en el que esten posicionados, principalmente estaran en (master) se les pone en color verde en GIT. 

*****
Para crear su propio branch:
git checkout -b suBranch

Verificar que estan en suBranch y no en Master. Luego deberan de unir su branch al origin:
git push -u origin suBranch

Verifiquen que su branch fue correctamente adherido al origin:
git branch -a

Para realizar cambios en su branch y cargarlos al origin se deben seguir los siguientes pasos:
git status <------------------- Para verificar los cambios que hicieron al igual que los archivos staged para commitear.

git add . <-------------------- Agrega todos los cambios que hicieron.

git reset HEAD archivo/ejemplo <------------- Para eliminar el archivo del commit (No elimina el archivo realmente simplemente lo saca del commit).

git commit -m "Su Mensaje de commit" <--------------Agrega mensaje al commit 

git push <------------ Para hacer push a su branch (Suponiendo que ya lo agregaron al origin).


NOTA: SIEMPRE QUE VAYAN HACER PUSH/PULL REVISAR QUE SIEMPRE ESTEN EN EL BRANCH QUE USTEDES CREARON Y NO EN MASTER.

*****

############
Documentacion Code Igniter
############

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Forums <http://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Community Slack Channel <https://codeigniterchat.slack.com>`_
-   Apoyo tutorial series en Youtube https://www.youtube.com/watch?v=I752ofYu7ag&t=1654s

