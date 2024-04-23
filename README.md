Instituto Tecnológico Nacional de México Campus Tláhuac

Ingeniería en Sistemas Computacionales

Materia:
Programación Web PHP con MVC.

Profesor:
Cordero Ocampo Martin

Actividad:
Ensayo de un Modelo Vista Controlador

Alumno:
Barron Varela Brayan

Grupo 8S2.
Fecha de Entrega: 21/03/2024


Índice

Tabla de contenido
Índice	2
Resumen	3
Introducción	4
Desarrollo temático	5
1. Orígenes y Fundamentos del Modelo-Vista-Controlador:	5
2. Componentes del MVC:	5
3. Funcionamiento del Modelo-Vista-Controlador:	5
4. Beneficios y Aplicaciones del Modelo-Vista-Controlador:	5
5. Características del Modelo Vista Controlador	6
6. Ejemplos de Aplicaciones del MVC	6
7. Ejemplo de una página web con el modelo MVC	8
Conclusión	13
Referencias	13

















Resumen
El Modelo-Vista-Controlador (MVC) es un patrón arquitectónico ampliamente utilizado en el desarrollo de software para crear aplicaciones robustas y mantenibles. Este modelo organiza la aplicación en tres componentes principales: el Modelo, la Vista y el Controlador. El Modelo representa la lógica de negocio y la manipulación de datos, la Vista se encarga de la presentación de la información al usuario final, y el Controlador actúa como intermediario, gestionando las solicitudes del usuario y actualizando el Modelo y la Vista según sea necesario.

La clave del éxito del MVC radica en la clara separación de responsabilidades entre estos tres componentes, lo que facilita la modularidad del código, la reutilización de componentes y la realización de pruebas unitarias efectivas. Esta separación también promueve la escalabilidad y la mantenibilidad de las aplicaciones a medida que crecen en complejidad y tamaño.

El MVC ha demostrado ser especialmente útil en el desarrollo de aplicaciones web y de escritorio, así como en entornos móviles, donde la claridad en la estructura y la facilidad para adaptarse a cambios son fundamentales. Su adopción ha sido generalizada en la industria del software, convirtiéndose en un estándar de facto para el desarrollo de aplicaciones modernas y orientadas a objetivos.












Introducción
El Modelo-Vista-Controlador (MVC) es un patrón arquitectónico fundamental en el desarrollo de software que se utiliza para estructurar y organizar aplicaciones. Este ensayo explora los componentes principales del MVC, su funcionamiento y los beneficios que aporta a la creación de aplicaciones robustas y mantenibles.

En el vertiginoso mundo del desarrollo de software, la necesidad de estructuras y patrones que faciliten la creación de aplicaciones eficientes y mantenibles es cada vez más evidente. En este contexto, el Modelo-Vista-Controlador (MVC) emerge como una solución elegante y poderosa. Este ensayo tiene como objetivo profundizar en los fundamentos del MVC, destacando su importancia en el desarrollo de aplicaciones modernas y su influencia en la mejora de la productividad de los desarrolladores.
La historia del Modelo-Vista-Controlador (MVC) se remonta a la década de 1970, cuando fue desarrollado en el laboratorio de investigación de Xerox PARC (Palo Alto Research Center) como parte del lenguaje de programación Smalltalk. MVC surgió como una solución para separar las preocupaciones de presentación de datos y la lógica de la aplicación en sistemas de interfaz gráfica de usuario (GUI).

Alan Kay, Dan Ingalls y otros investigadores de Xerox PARC fueron pioneros en el desarrollo de MVC como una forma de organizar el software de interfaz gráfica de usuario de manera más estructurada y manejable. El objetivo era crear sistemas de software más flexibles y fáciles de mantener al separar claramente los componentes relacionados con la presentación de los datos (la Vista) de los componentes relacionados con la lógica de la aplicación (el Modelo y el Controlador).

Aunque MVC se originó en el contexto de la programación de GUI en Smalltalk, su concepto central de separación de responsabilidades resultó ser ampliamente aplicable en una variedad de contextos de desarrollo de software. Con el tiempo, el patrón MVC se popularizó y se adoptó en otras plataformas y tecnologías de desarrollo de software, incluidas aplicaciones web, de escritorio y móviles.

A medida que la tecnología avanzaba y las demandas de desarrollo de software evolucionaban, el MVC se convirtió en un estándar de facto en la industria del desarrollo de software. Ha sido ampliamente utilizado en una variedad de marcos y plataformas de desarrollo, y sigue siendo una herramienta fundamental para crear aplicaciones robustas y mantenibles en la actualidad.

Desarrollo temático

1. Orígenes y Fundamentos del Modelo-Vista-Controlador:
Contexto Histórico: El MVC fue concebido originalmente en la década de 1970 por Trygve Reenskaug mientras trabajaba en el paradigma de programación Smalltalk-80.
Principios Básicos: El MVC se basa en el principio de separación de responsabilidades, dividiendo una aplicación en tres componentes principales: el Modelo, la Vista y el Controlador.
2. Componentes del MVC:
Modelo (Model): Representa los datos y la lógica de la aplicación. Es responsable de la gestión de los datos y la lógica de negocio.
Vista (View): Es la interfaz de usuario que presenta la información al usuario final. Se encarga de la visualización de los datos.
Controlador (Controller): Actúa como intermediario entre el modelo y la vista. Gestiona las solicitudes del usuario y actualiza el modelo y la vista según sea necesario.
3. Funcionamiento del Modelo-Vista-Controlador:
Cuando un usuario interactúa con la aplicación, la solicitud se envía al controlador.
El controlador procesa la solicitud, actualiza el modelo si es necesario y selecciona la vista adecuada para presentar la información.
La vista accede al modelo para obtener los datos necesarios y los presenta al usuario de manera visualmente atractiva.
4. Beneficios y Aplicaciones del Modelo-Vista-Controlador:
Separación de Responsabilidades: El MVC facilita la gestión del código al separar las preocupaciones en componentes claramente definidos.
Reutilización del Código: La modularidad del MVC promueve la reutilización del código, lo que mejora la eficiencia del desarrollo.
Facilidad de Mantenimiento: La división de la aplicación en componentes independientes facilita la identificación y corrección de errores, así como la incorporación de nuevas funcionalidades.
5. Características del Modelo Vista Controlador
Separación de responsabilidades: Una de las características más destacadas del MVC es su capacidad para separar las diferentes responsabilidades de una aplicación en tres componentes claramente definidos: Modelo, Vista y Controlador. Esta separación facilita la organización del código y mejora su mantenibilidad.
Modularidad: El MVC promueve la modularidad del código al dividir la aplicación en componentes independientes y reutilizables. Cada componente (Modelo, Vista y Controlador) puede ser desarrollado, probado y mantenido de manera independiente, lo que facilita la colaboración entre equipos de desarrollo y la escalabilidad de la aplicación.
Reutilización de código: Gracias a la separación de responsabilidades y la modularidad del MVC, es más fácil reutilizar el código en diferentes partes de la aplicación o en proyectos futuros. Esto reduce la duplicación de código y acelera el proceso de desarrollo.
Facilidad de mantenimiento: Al tener una estructura clara y bien definida, el código desarrollado siguiendo el patrón MVC es más fácil de entender, depurar y mantener a lo largo del tiempo. Los cambios en una parte de la aplicación tienen menos probabilidades de afectar a otras partes, lo que facilita la evolución y la actualización continua del software.
Facilidad de pruebas: El MVC facilita la realización de pruebas unitarias y de integración, ya que cada componente puede ser probado de manera independiente. Esto permite detectar y corregir errores de manera más rápida y eficiente durante el ciclo de desarrollo de software.
Flexibilidad y extensibilidad: El patrón MVC proporciona una base sólida y flexible para el desarrollo de aplicaciones, lo que permite adaptarse fácilmente a cambios en los requisitos del negocio o en las tecnologías subyacentes. Además, es posible extender y personalizar el patrón para satisfacer necesidades específicas de la aplicación.
6. Ejemplos de Aplicaciones del MVC
Aplicaciones Web:
Sitios de comercio electrónico: Plataformas como Amazon, eBay o Shopify utilizan el patrón MVC para separar la lógica de negocio (Modelo) de la presentación de productos y la interacción del usuario (Vista y Controlador).
Redes sociales: Sitios como Facebook, Twitter o LinkedIn emplean el MVC para gestionar la creación y visualización de perfiles de usuario (Vista), la lógica de las publicaciones y relaciones de amistad (Modelo), y la gestión de interacciones como comentarios y mensajes (Controlador).
Aplicaciones de Escritorio:
Sistemas de gestión empresarial (ERP): Herramientas como SAP, Oracle E-Business Suite o Microsoft Dynamics utilizan el MVC para separar la lógica de negocio (Modelo) de la interfaz de usuario (Vista) y la gestión de eventos y acciones del usuario (Controlador).
Herramientas de diseño gráfico: Aplicaciones como Adobe Photoshop, Illustrator o AutoCAD aplican el MVC para separar la lógica de edición y manipulación de gráficos (Modelo), la representación visual de los elementos (Vista) y la interacción del usuario con las herramientas de diseño (Controlador).
Aplicaciones Móviles:
Aplicaciones de mensajería: Apps como WhatsApp, Messenger o Telegram utilizan el MVC para gestionar la creación y visualización de mensajes (Vista), el almacenamiento y gestión de chats y contactos (Modelo) y la interacción del usuario con la aplicación (Controlador).
Aplicaciones de gestión de tareas: Herramientas como Todoist, Trello o Asana aplican el MVC para separar la lógica de creación y organización de tareas (Modelo), la visualización de listas y tableros (Vista) y la gestión de eventos y acciones del usuario (Controlador).
Aplicaciones Híbridas y de Juegos:
Juegos en línea: Plataformas como Steam, Xbox Live o PlayStation Network utilizan el MVC para gestionar la interacción de los usuarios con la plataforma (Vista), la lógica de juego y los datos del jugador (Modelo) y la gestión de eventos en tiempo real (Controlador).
Aplicaciones de productividad: Herramientas como Microsoft Office, Google Workspace o Adobe Creative Cloud aplican el MVC para separar la lógica de edición y creación de documentos (Modelo), la visualización de documentos y herramientas de edición (Vista) y la gestión de acciones y eventos del usuario (Controlador).
7. Ejemplo de una página web con el modelo MVC
 
Carpeta del proyecto en la ruta c del disco duro con el servidor apache 
 
Dentro de la carpeta de nuestro proyecto esta nuestro modelo mvc con el index .php 
 
Dentro de nuestro index.php se encuentra nuestro modelado de la pagina de inicio asi como los métodos y funciones del controlador
 
Dentro de la carpeta vista se encuentra nuestro encabezado y pie de pagina a si como el inicio de nuestra pagina y las vistas de los productos.
 
Dentro de la carpeta del modelado se encuentra nuestra conexión con la base de datos y los productos.
 
En la carpeta de diseño de encuentran los paquetes de diseño en javascript.
 
En la carpeta de controladores se encuentra el controlador de la pagina de inicio y el de productos estos controladores manejan las funciones de las vistas.
 
En la carpeta assets se encuentran los estilos de cascada de la pagina web. 
 
Código en html de la secuencia en la pagina y sus etiquetas 

 
Diagrama de Clases de la aplicación  mvc 
 
Ejemplo de un modelo entidad relación de una aplicación en mvc














Conclusión
En conclusión, el Modelo-Vista-Controlador (MVC) es un patrón arquitectónico que ha demostrado ser altamente efectivo y ampliamente adoptado en el desarrollo de software. Su claridad en la separación de responsabilidades entre los componentes Modelo, Vista y Controlador proporciona una estructura sólida para el diseño y la implementación de aplicaciones robustas y mantenibles.
La modularidad y la reutilización de código facilitadas por el MVC permiten un desarrollo más eficiente y escalable, mientras que la facilidad de mantenimiento resultante de esta separación de responsabilidades reduce la complejidad y el riesgo de errores en el código. Además, la capacidad de realizar pruebas unitarias y de integración de manera efectiva contribuye a mejorar la calidad y la confiabilidad del software desarrollado con este patrón.
La flexibilidad y extensibilidad inherentes al MVC permiten adaptarse fácilmente a cambios en los requisitos del negocio y en las tecnologías subyacentes, lo que garantiza que las aplicaciones desarrolladas con este patrón puedan evolucionar y crecer con el tiempo.

Referencias
MVC - Glosario de MDN Web Docs: Definiciones de términos relacionados con la Web. (s/f). MDN Web Docs. Recuperado el 21 de marzo de 2024, de https://developer.mozilla.org/es/docs/Glossary/MVC

SEOPRO Marketing Online. (2019, octubre 3). ¿Qué es MVC y cuáles son sus ventajas? SEOPRO Marketing Online SL. https://seopromarketing.online/que-es-mvc-ventajas/

Entendiendo Modelo-Vista-Controlador - 1.3. (s/f). Cakephp.org. Recuperado el 21 de marzo de 2024, de https://book.cakephp.org/1.3/es/The-Manual/Beginning-With-CakePHP/Understanding-Model-View-Controller.html

Qué es la arquitectura MVC. (2022, julio 13). KeepCoding Bootcamps. https://keepcoding.io/blog/que-es-la-arquitectura-mvc/

Patrón Modelo Vista Controlador. (s/f). Juntadeandalucia.es. Recuperado el 21 de marzo de 2024, de https://www.juntadeandalucia.es/servicios/madeja/contenido/recurso/122
