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

Ya que hicieron su push van al repositorio de Github dan click en la seccion "branches" buscan su branch y dan click en "New pull request".
Les debe de abrir el form de "Open a pull request" escriben el comentario especificando que cambios hicieron, area, componente, en el panel de la derecha en Reviewer ponen mi user bloparram155. Luego dan click en "Create pull request".
Una ves que dan click en el boton Create pull request los redirecciona a la seccion "Pull requests", traten de esperar a que le de review a lo que hicieron, si es muy urgente la implementacion que hicieron traten de buscarme por Whatsapp o Inbox y si ya de plano me tarde den click en "Merge pull request" y luego "Confirm Merge".


Para actualizar su BRANCH a la version actual del master. NOTA: VERIFIQUEN QUE ESTAN EN SU BRANCH Y NO EN MASTER.

git pull origin master

NOTA: SIEMPRE QUE VAYAN HACER PUSH/PULL REVISAR QUE SIEMPRE ESTEN EN EL BRANCH QUE USTEDES CREARON Y NO EN MASTER.

*****

############
Documentacion Code Igniter y GIT Cheat Sheet
############

-  `User Guide <https://codeigniter.com/docs>`_
-  `Language File Translations <https://github.com/bcit-ci/codeigniter3-translations>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki>`_
-  `Apoyo tutorial series en Youtube <https://www.youtube.com/watch?v=I752ofYu7ag&t=1654s>`_
-  `Git Cheat Sheet <https://www.git-tower.com/blog/git-cheat-sheet/>`_

