**ADMINISTRACIÓN GYM**

Maicol Romero

Santiago Carvajal

Bases de datos

Universidad EAN

2022

**INTRODUCCION**

Para el desarrollo de este proyecto decidimos trabajar con el entorno de desarrollo xampp que contiene la base de datos MariaDB, el servidor que funciona con el protocolo HTTP Apache, el lenguaje más usado para el desarrollo web PHP y el lenguaje de programación Perl.

Para tener una clara visualización de todas las relaciones de tablas que maneja el proyecto decidimos crear un diagrama del modelo relacional de nuestra base de datos. ![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.001.png)Aquí se encuentran nuestras 3 tablas principales, primero creamos la tabla de sede donde se encontrarán todos los datos de la sede relacionándose bilateralmente con la tabla de afiliados y la tabla de entrenadores relacionada con los afiliados. De esta forma las llaves foráneas de las tablas y entrenadores se encuentran en la tabla de afiliados, debido a que cada afiliado está relacionado con con una sede y cada entrenador tiene encargado a varios afiliados.

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.002.png)De la siguiente forma se pueden ver los registros en el gestor de bases de datos de phpMyAdmin.

Tabla entrenador

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.003.png)

Tabla afiliado![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.004.png)Tabla sede

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.005.png)

Con la relación de las tablas ya completamente claras, procedemos a crear todas las tablas correctamente relacionadas en PhpMyAdmin (escrita en PHP con la intención de manejar la administración de MySQL a través de páginas web).

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.006.png)

Ahora trabajando con ayuda del framework Laravel, facilitamos la entrada a la plataforma con un usuario previamente registrado y llevamos a relacionar todas las tablas creadas en phpMyAdmin con la web de página web de Laravel y aquí se pueden ver las 3 tablas de la CRUD.

Tabla Sede

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.007.png)

Tabla entrenador

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.008.png)

Tabla afiliado

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.009.png)

De esta forma se puede ver la interfaz al momento de agregar un nuevo registro en las diferentes tablas de la CRUD.

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.010.png)

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.011.png)

` `Para la base de datos la tecnología selecciona fue SQL Server haciendo uso de los procesos almacenados para realizar todas las funcionalidades que requiere nuestro programa de administración gimnasio.

**PROBLEMATICA**

En el gimnasio Esfuerzo Vital, realizar una gestión de los datos de sus afiliados se había convertido en todo un problema porque el manejo de esa gran cantidad de datos en un Excel es muy molesto y poco profesional, además de las posibles vulnerabilidades que genera para los datos de los clientes, entrenadores y datos del mismo gimnasio. Entre otros problemas se encuentra el de los procesos de crecimiento de la empresa con nuevas sedes y por ende más afiliados se convierte en una necesidad el desarrollo e implementación de una aplicación dedicada exclusivamente a la administración de los datos bajo una base de datos relacional.

La implementación de esta herramienta le permitirá a la empresa afrontar los nuevos retos que vendrán en los próximos años debido a su constante expansión, dándole posibilidades de ser más competente en su mercado laboral y diferenciarse de su competencia directa. Accediendo a una mayor capacidad de almacenamiento para sus registros, mejor eficiencia y diseño personalizado.

**LEVANTAMINETO DE REQUERIMINTOS**

En el momento que nos contactamos con el dueño del gimnasio y nos explicó sus necesidades pudimos realizar el levantamiento de requerimientos de la siguiente forma:

![](Aspose.Words.f683b4ad-c2fc-430a-a46d-f8d173e2b578.012.png)
