<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
            'nombre' => "Trust Taro Teclado",
            'descripcion' => "Disposición QWERTY Español, Resistente a los Vertidos, Cable de 1.8m, Conexión USB, Windows, Mac, PC, Laptop, Ordenador Portátil, Negro",
            'descripcionextensa' => 'teclado', 
            'precio' => 10,
            'descuento' => 0,
            'autormarca' => "Trust",
            'img' => '/media/productos/teclado1.jpg',
            'cantidad' => 15,
            'tipo' => "teclado"
            ],
            [
                'nombre' => "AOC GK200 Teclado de gaming",
                'descripcion' => "Teclado para PC con distribución en español, 25 teclas anti-ghosting, 25-N-key rollover y 1,8 m de cable",
                'descripcionextensa' => 'teclado',
                'precio' => 15,
                'descuento' => 0,
                'autormarca' => "AOC",
                'img' => '/media/productos/teclado2.jpg',
                'cantidad' => 15,
                'tipo' => "teclado"
            ],
            [
                'nombre' => "HyperX Alloy Core RGB",
                'descripcion' => "Teclado de membrana para Gaming (ES layout)",               
                'descripcionextensa' => 'teclado',
                'precio' => 45,
                'descuento' => 0,
                'autormarca' => "HyperX",
                'img' => '/media/productos/teclado3.jpg',
                'cantidad' => 9,
                'tipo' => "teclado"
            ],
            [
                'nombre' => "Dierya DK61se",
                'descripcion' => "Teclado Mecánico Gaming Mini 60% Red Switch Mechanical Keyboard Retroiluminación Azul Hielo,Cable USB-Type C,Teclado Ultra-Compacto 61 Teclas Anti-Fantasma US Layout para PC/Windows",
                'descripcionextensa' => 'teclado',
                'precio' => 29.99,
                'descuento' => 0,
                'autormarca' => "Dierya",
                'img' => '/media/productos/teclado4.jpg',
                'cantidad' => 9,
                'tipo' => "teclado"
            ],
            [
                'nombre' => "Corsair K70 PRO RGB Teclado Óptico",
                'descripcion' => "Mecánico para Juegos - Interruptores lineales OPX, Teclas de policarbonato, Hipersondeo de 8.000 Hz - Disposición ES, QWERTY - Negro",
                'descripcionextensa' => 'teclado',
                'precio' => 195,
                'descuento' => 0,
                'autormarca' => "Corsair",
                'img' => '/media/productos/teclado5.jpg',
                'cantidad' => 5,
                'tipo' => "teclado"
            ],
            [
                'nombre' => "Logitech Signature K650",
                'descripcion' => "Teclado Inalámbrico Completo con Reposamanos, Bluetooth BLE o Receptor USB Logi Bolt, Alta Amortiguación, Teclado Numérico, para PC/Windows/Mac, QWERTY Español, Blanco",
                'descripcionextensa' => 'teclado',
                'precio' => 40,
                'descuento' => 0,
                'autormarca' => "Logitech",
                'img' => '/media/productos/teclado6.jpg',
                'cantidad' => 20,
                'tipo' => "teclado"
            ],
            [
                'nombre' => "Logitech G203 LIGHTSYNC",
                'descripcion' => "Ratón USB Gaming con Iluminación RGB Personalizable, 6 Botones Programables, Captor 8K para Gaming, Seguimiento de hasta 8,000 DPI, Ultra-ligero - Negro",
                'descripcionextensa' => 'raton',
                'precio' => 26.99,
                'descuento' => 0,
                'autormarca' => "Logitech",
                'img' => '/media/productos/raton1.jpg',
                'cantidad' => 9,
                'tipo' => "raton"
            ],
            [
                'nombre' => "Logitech M90",
                'descripcion' => "Ratón con Cable USB, Seguimiento Óptico 1000 DPI, Ambidiestro, PC, Mac, Portátil, Negro",
                'descripcionextensa' => 'raton',
                'precio' => 8.50,
                'descuento' => 0,
                'autormarca' => "Logitech",
                'img' => '/media/productos/raton2.jpg',
                'cantidad' => 30,
                'tipo' => "raton"
            ],
            [
                'nombre' => "Logitech M90",
                'descripcion' => "Ratón con Cable USB, Seguimiento Óptico 1000 DPI, Ambidiestro, PC, Mac, Portátil, Negro",
                'descripcionextensa' => 'raton',
                'precio' => 8.50,
                'descuento' => 0,
                'autormarca' => "Logitech",
                'img' => '/media/productos/raton3.jpg',
                'cantidad' => 30,
                'tipo' => "raton"
            ],
            [
            'nombre' => "Newskill Helios",
            'descripcion' => "Ratón con Cable USB, Seguimiento Óptico 1000 DPI, Ambidiestro, PC, Mac, Portátil, Negro",
            'descripcionextensa' => 'raton',
            'precio' => 35,
            'descuento' => 0,
            'autormarca' => "NEWSKILL",
            'img' => '/media/productos/raton4.jpg',
            'cantidad' => 20,
            'tipo' => "raton"
            ],
            [
                'nombre' => "Ovegna T10",
                'descripcion' => "ratón inalámbrico 2,4 GHz 4000 DPI, muy ligero, silencioso, ultrafino, para PC, portátil, Android Box, SmartTV con Windows 8/10/11, Mac OS y Linux (pila incluida)",
                'descripcionextensa' => 'raton',
                'precio' => 19.99,
                'descuento' => 0,
                'autormarca' => "Ovegna",
                'img' => '/media/productos/raton5.jpg',
                'cantidad' => 12,
                'tipo' => "raton"
            ],
            [
                'nombre' => "Razer DeathAdder Essential",
                'descripcion' => "Ratón Gaming con sensor óptico, 6400 DPI (5 botones programables, interruptores mecánicos, agarres laterales de goma), Negro",
                'descripcionextensa' => 'raton',
                'precio' => 18.50,
                'descuento' => 0,
                'autormarca' => "Razer",
                'img' => '/media/productos/raton6.jpg',
                'cantidad' => 10,
                'tipo' => "raton"
            ],
            [
                'nombre' => "KOORUI Monitor",
                'descripcion' => "Monitor de 24 Full HD (1920 x 1080, 24 Pulgadas, 75 Hz, IPS, 5 ms, 16:9, HDMI, VGA, VESA) FlickerFree Low Blue Light [Clase de eficiencia energética E]",
                'descripcionextensa' => 'monitor',
                'precio' => 105,
                'descuento' => 0,
                'autormarca' => "KOORUI",
                'img' => '/media/productos/monitor1.jpg',
                'cantidad' => 10,
                'tipo' => "monitor"
            ],
            [
                'nombre' => "Samsung LS27C312EAUXEN",
                'descripcion' => "Monitor de 27 FullHD (1920 x 1080, 16:9, 75Hz, 5ms, LED Diseño sin Bordes, Panel IPS, AMD FreeSync, Modo Eye Saver, Flicker Free), Negro",
                'descripcionextensa' => 'monitor',
                'precio' => 120,
                'descuento' => 0,
                'autormarca' => "Samsung",
                'img' => '/media/productos/monitor2.jpg',
                'cantidad' => 16,
                'tipo' => "monitor"
            ],
            [
                'nombre' => "Dell G2723HN",
                'descripcion' => "Full HD (1920x1080) Monitor Gaming, 165Hz, Fast IPS, 1ms, AMD FreeSync Premium, NVIDIA G-SYNC Compatible, 99% sRGB, DisplayPort, 2x HDMI, 3 Años de Garantía, Negro [Clase de eficiencia energética E]",
                'descripcionextensa' =>'portatil',
                'precio' => 230,
                'descuento' => 0,
                'autormarca' => "Dell",
                'img' => '/media/productos/monitor3.jpg',
                'cantidad' => 3,
                'tipo' => "monitor"
            ],
            [
                'nombre' => "Lenovo V15",
                'descripcion' => "Ordenador portátil 15 FHD (Celeron N4020, 8GB RAM, 256GB SSD, Intel UHD Graphics, Windows 10 Home) Gris - Teclado QWERTY Español",
                'descripcionextensa' => 'portatil',
                'precio' => 289.99,
                'descuento' => 0,
                'autormarca' => "Dell",
                'img' => '/media/productos/portatil1.jpg',
                'cantidad' => 4,
                'tipo' => "portatil"
            ],
            [
                'nombre' => "ASUS Chromebook CX9 CX9400CEA",
                'descripcion' => "KC0172 - Ordenador Portátil 14 Full HD (Intel Core i5-1135G7, 8GB RAM, 256GB SSD, Iris Xe Graphics, Sistema operativo Chrome) Color Negro - Teclado QWERTY españo",
                'descripcionextensa' => 'portatil',
                'precio' => 699.99,
                'descuento' => 0,
                'autormarca' => "ASUS",
                'img' => '/media/productos/portatil2.jpg',
                'cantidad' => 3,
                'tipo' => "portatil"
            ],
            [
                'nombre' => "ASUS ZenBook 13 OLED UX325EA-KG801",
                'descripcion' => "Ordenador Portátil 13.3 Full HD (Intel Core i5-1135G7, 16GB RAM, 512GB SSD, Iris Xe Graphics, Sin Sistema Operativo) Color Gris - Teclado QWERTY español",
                'descripcionextensa' => 'portatil',
                'precio' => 799.99,
                'descuento' => 0,
                'autormarca' => "ASUS",
                'img' => '/media/productos/portatil3.jpg',
                'cantidad' => 5,
                'tipo' => "portatil"
            ],
            [
                'nombre' => "HP 15s-fq4085ns",
                'descripcion' => "Ordenador Portátil de 15.6 Full HD (Intel Core i5-1155G7, 8GB RAM, 512GB SSD, Intel Iris Xe Graphics, Windows 11 Home) Plata - Teclado QWERTY Español",
                'descripcionextensa' => 'portatil',
                'precio' => 649.99,
                'descuento' => 0,
                'autormarca' => "HP",
                'img' => '/media/productos/portatil4.jpg',
                'cantidad' => 4,
                'tipo' => "portatil"
            ],
            [
                'nombre' => "Acer Nitro 5 AN515-57",
                'descripcion' => "Ordenador Portátil Gaming 15.6 Full HD IPS 144Hz (Intel Core i7-11800H, 16GB RAM, 512GB SSD, NVIDIA RTX 3070, Windows 11) Color Negro - Teclado QWERTY Español",
                'descripcionextensa' => 'portatil',
                'precio' => 1699.99,
                'descuento' => 0,
                'autormarca' => "Acer",
                'img' => '/media/productos/portatil5.jpg',
                'cantidad' => 6,
                'tipo' => "portatil"
            ],
            [
                'nombre' => "Curso de Programacion JAVA",
                'descripcion' => "Curso introductorio de Java: Aprende los fundamentos de programación en Java, desde la sintaxis básica hasta la creación de aplicaciones simples. Explora conceptos como variables, estructuras de control, funciones y manejo de objetos. Adquiere las habilidades necesarias para comenzar a desarrollar aplicaciones Java
                y sentar las bases para futuros aprendizajes en programación orientada a objetos.",
                'descripcionextensa' => ' <h1>Curso de Java para Principiantes</h1>

                        <p>Bienvenido al curso de Java para principiantes. Este curso está diseñado para personas sin experiencia previa en programación que desean aprender a programar en Java, uno de los lenguajes de programación más populares y versátiles.</p>
            
                        <h2>Temas a Cubrir:</h2>
            
                        <h3>1. Introducción a la Programación y Java</h3>
                        <ul>
                            <li>Conceptos básicos de programación.</li>
                                <li>Introducción a Java y su historia.</li>
                            <li>Configuración del entorno de desarrollo (IDE, JDK).</li>
                        </ul>
            
                        <h3>2. Fundamentos de Java</h3>
                    <ul>
                            <li>Sintaxis de Java: variables, tipos de datos, operadores.</li>
                            <li>Control de flujo: condicionales, bucles.</li>
                            <li>Funciones y métodos.</li>
                            <li>Trabajo con arrays y colecciones.</li>
                    </ul>
            
                    <h3>3. Programación Orientada a Objetos</h3>
                     <ul>
                          <li>Clases y objetos.</li>
                          <li>Herencia y polimorfismo.</li>
                          <li>Encapsulamiento y modificadores de acceso.</li>
                          <li>Interfaces y clases abstractas.</li>
                     </ul>
            
                     <h3>4. Manipulación de Archivos y Excepciones</h3>
                        <ul>
                          <li>Lectura y escritura de archivos.</li>
                         <li>Manejo de excepciones y errores.</li>
                        </ul>
            
                      <h3>5. Desarrollo de Aplicaciones Java</h3>
                      <ul>
                            <li>Desarrollo de aplicaciones de consola.</li>
                            <li>Interfaz gráfica de usuario (GUI) con JavaFX.</li>
                         <li>Conexión a bases de datos con JDBC.</li>
                      </ul>
            
                      <h3>6. Prácticas y Proyectos</h3>
                       <p>Se realizarán ejercicios prácticos y proyectos para aplicar los conocimientos adquiridos a lo largo del curso. Los estudiantes tendrán la oportunidad de trabajar en proyectos reales y mejorar sus habilidades de resolución de problemas.</p>
            
                      <h2>Requisitos</h2>
                      <p>No se requiere experiencia previa en programación, pero es útil tener conocimientos básicos de informática y lógica.</p>
            
                      <h2>Metodología</h2>
                      <p>El curso se basará en clases teóricas, ejercicios prácticos, discusiones en grupo y proyectos. Los estudiantes también tendrán acceso a recursos en línea y soporte continuo del instructor para resolver dudas y problemas.</p>
            
                      <h2>Certificación</h2>
                      <p>Al completar el curso, los estudiantes recibirán un certificado de participación que atestigua sus habilidades en programación Java para principiantes.</p>
                      <h2>¡Inscríbete Ahora!</h2>
                      <p>No pierdas la oportunidad de aprender Java desde cero y abrir las puertas a un mundo de posibilidades en el desarrollo de software.</p>',
                  
                'precio' => 30,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/javaprincipiantes.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [
                'nombre' => "Curso de Programacion JAVA Avanzado ",
                'descripcion' => "Curso Avanzado de Java: Profundiza en el mundo de la programación Java. Aprende técnicas avanzadas de desarrollo, como programación orientada a objetos avanzada, patrones de diseño, concurrencia y manipulación de bases de datos.
                Explora temas como streams, lambdas y API de colecciones.
                Domina la creación de aplicaciones robustas y eficientes en Java, adquiriendo las habilidades necesarias para enfrentar desafíos de programación más complejos
                y escenarios del mundo real.",
                'descripcionextensa' => '<h1>Curso de Programación Java Avanzado</h1>

                <p>Bienvenido al curso de programación Java avanzado. Este curso está diseñado para personas que ya tienen conocimientos básicos de Java y desean llevar sus habilidades de programación al siguiente nivel. A lo largo de este curso, exploraremos conceptos avanzados y técnicas de programación que te permitirán crear aplicaciones Java sofisticadas y eficientes.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Programación Orientada a Objetos Avanzada</h3>
                <ul>
                    <li>Patrones de diseño.</li>
                    <li>Programación genérica.</li>
                    <li>Programación concurrente.</li>
                    <li>Reflexión y anotaciones.</li>
                </ul>
            
                <h3>2. Estructuras de Datos y Algoritmos</h3>
                <ul>
                    <li>Árboles y grafos.</li>
                    <li>Algoritmos de ordenamiento y búsqueda.</li>
                    <li>Optimización y complejidad del algoritmo.</li>
                </ul>
            
                <h3>3. Desarrollo de Aplicaciones Web</h3>
                <ul>
                    <li>Servlets y JSP (JavaServer Pages).</li>
                    <li>Frameworks de desarrollo web como Spring y Hibernate.</li>
                    <li>Seguridad en aplicaciones web Java.</li>
                </ul>
            
                <h3>4. Desarrollo de Aplicaciones Empresariales</h3>
                <ul>
                    <li>Integración de bases de datos empresariales.</li>
                    <li>Desarrollo de servicios web RESTful.</li>
                    <li>Spring Boot y microservicios.</li>
                </ul>
            
                <h3>5. Pruebas y Depuración Avanzadas</h3>
                <ul>
                    <li>Pruebas unitarias y pruebas de integración.</li>
                    <li>Herramientas de depuración y perfiles de rendimiento.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos</h3>
                <p>Los estudiantes trabajarán en proyectos prácticos para aplicar los conocimientos avanzados adquiridos durante el curso. Los proyectos incluirán el desarrollo de aplicaciones web dinámicas, servicios empresariales y aplicaciones escalables.</p>
            
                <h2>Requisitos</h2>
                <p>Este curso está destinado a personas con experiencia previa en programación Java. Se espera que los estudiantes tengan conocimientos sólidos de programación orientada a objetos, estructuras de datos y conceptos básicos de desarrollo web.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases magistrales, sesiones prácticas, revisión de código y proyectos de equipo. Los estudiantes también tendrán acceso a recursos en línea, foros de discusión y sesiones de tutoría para resolver dudas y mejorar sus habilidades.</p>
            
                <h2>Certificación</h2>
                <p>Al completar con éxito el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación Java avanzada y su capacidad para desarrollar aplicaciones robustas y escalables.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>Este curso te proporcionará las habilidades necesarias para destacarte como desarrollador Java avanzado. No pierdas la oportunidad de avanzar en tu carrera profesional y crear aplicaciones Java de alto nivel.</p>',
                'precio' => 60,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/javaavanzado.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [
                'nombre' => "Curso de Programacion Python",
                'descripcion' => "Curso introductorio de Python: Aprende los fundamentos de programación en Python, desde la sintaxis básica hasta la creación de aplicaciones simples. Explora conceptos como variables, estructuras de control, funciones y manejo de objetos. Adquiere las habilidades necesarias para comenzar a desarrollar aplicaciones Java
        y sentar las bases para futuros aprendizajes en programación orientada a objetos.",
                'descripcionextensa' => '<h1>Curso de Python para Principiantes</h1>

                <p>Bienvenido al curso de Python para principiantes. Este curso está diseñado para personas sin experiencia previa en programación que desean aprender a programar en Python, uno de los lenguajes de programación más populares y versátiles del mundo. Python es conocido por su sintaxis simple y fácil de aprender, lo que lo convierte en una excelente opción para principiantes.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Introducción a la Programación y Python</h3>
                <ul>
                    <li>Conceptos básicos de programación.</li>
                    <li>Introducción a Python y su historia.</li>
                    <li>Configuración del entorno de desarrollo (IDE, intérprete).</li>
                </ul>
            
                <h3>2. Fundamentos de Python</h3>
                <ul>
                    <li>Sintaxis de Python: variables, tipos de datos, operadores.</li>
                    <li>Control de flujo: condicionales, bucles.</li>
                    <li>Funciones y modularidad.</li>
                    <li>Listas, diccionarios y tuplas.</li>
                </ul>
            
                <h3>3. Programación Orientada a Objetos en Python</h3>
                <ul>
                    <li>Clases y objetos.</li>
                    <li>Herencia y polimorfismo.</li>
                    <li>Encapsulamiento y modificadores de acceso.</li>
                </ul>
            
                <h3>4. Manipulación de Archivos y Excepciones en Python</h3>
                <ul>
                    <li>Lectura y escritura de archivos.</li>
                    <li>Manejo de excepciones y errores.</li>
                </ul>
            
                <h3>5. Desarrollo de Aplicaciones en Python</h3>
                <ul>
                    <li>Desarrollo de aplicaciones de consola.</li>
                    <li>Interfaz gráfica de usuario (GUI) con Tkinter.</li>
                    <li>Acceso a bases de datos con SQLite.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos</h3>
                <p>Los estudiantes trabajarán en proyectos prácticos que les permitirán aplicar los conocimientos adquiridos durante el curso. Los proyectos incluirán la creación de juegos simples, aplicaciones de gestión y más.</p>
            
                <h2>Requisitos</h2>
                <p>No se requiere experiencia previa en programación. Este curso es ideal para personas que están dando sus primeros pasos en el mundo de la programación y desean aprender Python como su primer lenguaje.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases teóricas, ejercicios prácticos, proyectos individuales y colaborativos. Los estudiantes también tendrán acceso a recursos en línea y soporte del instructor para resolver dudas y mejorar sus habilidades de programación.</p>
            
                <h2>Certificación</h2>
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación Python para principiantes.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>Este curso te proporcionará las habilidades fundamentales para convertirte en un programador Python competente. No pierdas la oportunidad de aprender un lenguaje de programación poderoso y versátil.</p>',
                'precio' => 30,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/pythonprincipiantes.png',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [
                'nombre' => "Curso de Programacion Python Avanzado ",
                'descripcion' => "Curso Avanzado de Python: Profundiza en el mundo de la programación Python. Aprende técnicas avanzadas de desarrollo, como programación orientada a objetos avanzada, patrones de diseño, concurrencia y manipulación de bases de datos.
                    Explora temas como streams, lambdas y API de colecciones.
                    Domina la creación de aplicaciones robustas y eficientes en Python, adquiriendo las habilidades necesarias para enfrentar desafíos de programación más complejos
                    y escenarios del mundo real.",
                'descripcionextensa' => '<h1>Curso de Python Avanzado</h1>

                <p>Bienvenido al curso de Python avanzado. Este curso está diseñado para personas con conocimientos básicos de Python que desean profundizar en el lenguaje y explorar sus capacidades avanzadas. A lo largo de este curso, aprenderás técnicas avanzadas de programación, patrones de diseño y bibliotecas poderosas que te permitirán desarrollar aplicaciones Python complejas y eficientes.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Programación Funcional y Orientada a Objetos Avanzada</h3>
                <ul>
                    <li>Funciones lambda y funciones de orden superior.</li>
                    <li>Decoradores y generadores.</li>
                    <li>Metaclases y introspección.</li>
                </ul>
            
                <h3>2. Estructuras de Datos Avanzadas</h3>
                <ul>
                    <li>Comprensiones de listas, conjuntos y diccionarios.</li>
                    <li>Manejo avanzado de cadenas y expresiones regulares.</li>
                    <li>Bibliotecas especializadas como NumPy y Pandas para manipulación de datos.</li>
                </ul>
            
                <h3>3. Desarrollo Web y API con Python</h3>
                <ul>
                    <li>Frameworks web como Flask o Django.</li>
                    <li>Desarrollo de APIs RESTful.</li>
                    <li>Integración con bases de datos NoSQL como MongoDB.</li>
                </ul>
            
                <h3>4. Desarrollo de Aplicaciones de Inteligencia Artificial y Aprendizaje Automático</h3>
                <ul>
                    <li>Bibliotecas de aprendizaje automático como Scikit-Learn.</li>
                    <li>Redes neuronales y bibliotecas como TensorFlow y PyTorch.</li>
                    <li>Aplicaciones prácticas en análisis de datos y reconocimiento de patrones.</li>
                </ul>
            
                <h3>5. Despliegue y Escalabilidad</h3>
                <ul>
                    <li>Contenedores y tecnologías como Docker.</li>
                    <li>Despliegue en la nube y servicios como AWS y Heroku.</li>
                    <li>Optimización y escalabilidad de aplicaciones Python.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos y Desafíos</h3>
                <p>Los estudiantes trabajarán en proyectos avanzados y desafíos que les permitirán aplicar los conocimientos adquiridos durante el curso en situaciones del mundo real. Los proyectos incluirán el desarrollo de aplicaciones web dinámicas, algoritmos de aprendizaje automático y más.</p>
            
                <h2>Requisitos</h2>
                <p>Este curso está destinado a personas con experiencia previa en Python o que hayan completado un curso básico de Python. Se espera que los estudiantes tengan un conocimiento sólido de los fundamentos de Python y la programación orientada a objetos.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases magistrales, proyectos prácticos, colaboraciones en equipo y desafíos individuales. Los estudiantes también tendrán acceso a recursos en línea, foros de discusión y sesiones de tutoría para resolver dudas y mejorar sus habilidades de programación.</p>
            
                <h2>Certificación</h2>
                <p>Al completar con éxito el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación Python avanzada y su capacidad para desarrollar aplicaciones complejas y de alto nivel.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>Este curso te proporcionará las habilidades necesarias para sobresalir como un desarrollador Python avanzado. No pierdas la oportunidad de expandir tus conocimientos y crear aplicaciones Python innovadoras.</p>
            ',
                'precio' => 60,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/pythonavanzado.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [

                'nombre' => "Curso de Programacion PHP",
                'descripcion' => "Curso introductorio de PHP: Aprende los fundamentos de programación en PHP, desde la sintaxis básica hasta la creación de aplicaciones simples. Explora conceptos como variables, estructuras de control, funciones y manejo de objetos. Adquiere las habilidades necesarias para comenzar a desarrollar aplicaciones Java
                    y sentar las bases para futuros aprendizajes en programación orientada a objetos.",
                'descripcionextensa' => '<h1>Curso de PHP para Principiantes</h1>

                <p>Bienvenido al curso de PHP para principiantes. PHP es un lenguaje de programación del lado del servidor ampliamente utilizado para el desarrollo web. Este curso está diseñado para personas sin experiencia previa en programación que desean aprender a crear sitios web dinámicos y funcionales utilizando PHP.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Introducción a PHP</h3>
                <ul>
                    <li>Sintaxis básica de PHP: variables, tipos de datos, operadores.</li>
                    <li>Estructuras de control: condicionales, bucles.</li>
                    <li>Funciones y arrays.</li>
                </ul>
            
                <h3>2. Trabajo con Formularios y Datos</h3>
                <ul>
                    <li>Recopilación de datos de formularios HTML.</li>
                    <li>Validación y procesamiento de datos del usuario.</li>
                    <li>Uso de cookies y sesiones.</li>
                </ul>
            
                <h3>3. Bases de Datos MySQL y PHP</h3>
                <ul>
                    <li>Conexión a bases de datos MySQL.</li>
                    <li>Consulta y manipulación de datos.</li>
                    <li>Preparación de consultas para evitar inyecciones SQL.</li>
                </ul>
            
                <h3>4. Programación Orientada a Objetos en PHP</h3>
                <ul>
                    <li>Clases y objetos.</li>
                    <li>Herencia y polimorfismo.</li>
                    <li>Encapsulamiento y namespaces.</li>
                </ul>
            
                <h3>5. Creación de Sitios Web Dinámicos</h3>
                <ul>
                    <li>Creación de páginas dinámicas y contenido dinámico.</li>
                    <li>Uso de plantillas y bibliotecas.</li>
                    <li>Integración de PHP con HTML y CSS.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos</h3>
                <p>Los estudiantes trabajarán en proyectos prácticos que les permitirán aplicar los conocimientos adquiridos durante el curso. Los proyectos incluirán el desarrollo de un sistema de gestión de usuarios, un carrito de compras y un blog dinámico.</p>
            
                <h2>Requisitos</h2>
                <p>No se requiere experiencia previa en programación, pero es útil tener conocimientos básicos de HTML y CSS. Este curso es ideal para personas que deseen entrar en el mundo del desarrollo web.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases teóricas, ejercicios prácticos, proyectos individuales y colaborativos. Los estudiantes también tendrán acceso a recursos en línea y soporte del instructor para resolver dudas y mejorar sus habilidades de programación.</p>
            
                <h2>Certificación</h2>
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación PHP para principiantes y su capacidad para desarrollar sitios web dinámicos.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>No pierdas la oportunidad de aprender PHP y abrir las puertas a un mundo de posibilidades en el desarrollo web. ¡Inscríbete ahora y comienza tu viaje en el mundo del desarrollo web!</p>
            ',
                'precio' => 30,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/phpprinci.png',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [

                'nombre' => "Curso de Programacion PHP Avanzado ",
                'descripcion' => "Curso Avanzado de PHP: Profundiza en el mundo de la programación PHP. Aprende técnicas avanzadas de desarrollo, como programación orientada a objetos avanzada, patrones de diseño, concurrencia y manipulación de bases de datos.
                    Explora temas como streams, lambdas y API de colecciones.
                    Domina la creación de aplicaciones robustas y eficientes en PHP, adquiriendo las habilidades necesarias para enfrentar desafíos de programación más complejos
                    y escenarios del mundo real.",
                'descripcionextensa' => '<h1>Curso de PHP Avanzado</h1>

                    <p>Bienvenido al curso de PHP avanzado. Este curso está diseñado para programadores con experiencia en PHP que desean llevar sus habilidades al siguiente nivel. Exploraremos técnicas avanzadas, patrones de diseño y prácticas recomendadas que te permitirán desarrollar aplicaciones PHP complejas y de alto rendimiento.</p>
            
                    <h2>Temas a Cubrir:</h2>
            
                    <h3>1. Programación Orientada a Objetos Avanzada</h3>
                    <ul>
                        <li>Patrones de diseño: Singleton, Factory, Strategy, etc.</li>
                        <li>Uso avanzado de interfaces y traits.</li>
                        <li>Programación orientada a eventos y observadores.</li>
                    </ul>
            
                    <h3>2. Manejo Avanzado de Bases de Datos</h3>
                    <ul>
                        <li>Optimización de consultas SQL.</li>
                        <li>Uso de índices y transacciones.</li>
                        <li>Modelado de datos avanzado.</li>
                    </ul>
            
                    <h3>3. Desarrollo de Aplicaciones Web Avanzadas</h3>
                    <ul>
                        <li>Frameworks PHP modernos: Laravel, Symfony.</li>
                        <li>Desarrollo de APIs RESTful.</li>
                        <li>Seguridad en aplicaciones web: protección contra ataques XSS, CSRF, etc.</li>
                    </ul>
            
                    <h3>4. Testing y Desarrollo Dirigido por Pruebas (TDD)</h3>
                    <ul>
                        <li>Uso de herramientas de pruebas unitarias.</li>
                         <li>Desarrollo de código a través de pruebas.</li>
                        <li>Pruebas de integración y automatización de pruebas.</li>
                    </ul>
            
                    <h3>5. Desarrollo de Aplicaciones Empresariales</h3>
                    <ul>
                        <li>Integración con sistemas de terceros.</li>
                        <li>Desarrollo de sistemas de gestión empresarial (ERP, CRM).</li>
                        <li>Manejo de grandes volúmenes de datos.</li>
                    </ul>
            
                    <h3>6. Proyectos Prácticos y Estudio de Casos</h3>
                    <p>Los estudiantes trabajarán en proyectos avanzados y estudios de casos que les permitirán aplicar los conocimientos adquiridos durante el curso en situaciones del mundo real. Los proyectos incluirán el desarrollo de aplicaciones empresariales completas y solución de problemas de rendimiento y escalabilidad.</p>
            
                    <h2>Requisitos</h2>
                    <p>Este curso está destinado a personas con experiencia previa en PHP y desarrollo web. Se espera que los estudiantes tengan un conocimiento sólido de los fundamentos de PHP, bases de datos y arquitectura web.</p>
            
                    <h2>Metodología</h2>
                    <p>El curso se basará en clases magistrales, proyectos prácticos, colaboraciones en equipo y análisis de casos reales. Los estudiantes también tendrán acceso a recursos en línea, foros de discusión y sesiones de tutoría para resolver dudas y mejorar sus habilidades de programación.</p>
            
                    <h2>Certificación</h2>
                    <p>Al completar con éxito el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación PHP avanzada y su capacidad para desarrollar aplicaciones PHP empresariales.</p>
            
                    <h2>¡Inscríbete Ahora!</h2>
                    <p>Este curso te proporcionará las habilidades necesarias para destacarte como un desarrollador PHP avanzado. No pierdas la oportunidad de expandir tus conocimientos y crear aplicaciones PHP innovadoras y robustas.</p>
            ',
                'precio' => 60,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/phpavanzado.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [

                'nombre' => "Curso de Programacion JavaScript",
                'descripcion' => "Introducción a JavaScript: Descubre los conceptos esenciales de programación web con JavaScript. Aprende a crear interactividad en páginas web mediante manipulación del DOM, eventos y funciones básicas.
                    Adquiere habilidades fundamentales para desarrollar pequeñas aplicaciones
                    y mejorar la experiencia del usuario en sitios web.",
                'descripcionextensa' => '<h1>Curso de JavaScript para Principiantes</h1>

                <p>Bienvenido al curso de JavaScript para principiantes. JavaScript es un lenguaje de programación ampliamente utilizado en el desarrollo web. Este curso está diseñado para personas sin experiencia previa en programación que desean aprender a crear sitios web interactivos y dinámicos. JavaScript es esencial para cualquier desarrollador web, ya que te permite agregar funcionalidades interactivas y mejorar la experiencia del usuario en los sitios web.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Fundamentos de JavaScript</h3>
                <ul>
                    <li>Sintaxis básica de JavaScript: variables, tipos de datos, operadores.</li>
                    <li>Estructuras de control: condicionales, bucles.</li>
                    <li>Funciones y objetos.</li>
                </ul>
            
                <h3>2. Manipulación del Documento y Eventos</h3>
                <ul>
                    <li>Selección y manipulación de elementos del DOM.</li>
                    <li>Manejo de eventos del usuario: clics, teclas, formularios.</li>
                    <li>Creación de interactividad dinámica en páginas web.</li>
                </ul>
            
                <h3>3. Trabajo con Arrays y Objetos</h3>
                <ul>
                    <li>Manipulación de arrays y objetos.</li>
                    <li>Métodos de arrays: map, filter, reduce.</li>
                    <li>Uso de objetos y JSON.</li>
                </ul>
            
                <h3>4. Asincronía y Promesas</h3>
                <ul>
                    <li>Trabajo con llamadas a APIs.</li>
                    <li>Introducción a promesas y async/await.</li>
                    <li>Manejo de errores en operaciones asíncronas.</li>
                </ul>
            
                <h3>5. Desarrollo de Aplicaciones Web Interactivas</h3>
                <ul>
                    <li>Creación de juegos y aplicaciones interactivas.</li>
                    <li>Uso de bibliotecas como jQuery para simplificar el desarrollo.</li>
                    <li>Integración de JavaScript con CSS y HTML.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos</h3>
                <p>Los estudiantes trabajarán en proyectos prácticos que les permitirán aplicar los conocimientos adquiridos durante el curso. Los proyectos incluirán el desarrollo de juegos simples, aplicaciones de lista de tareas y aplicaciones de búsqueda de películas utilizando APIs.</p>
            
                <h2>Requisitos</h2>
                <p>No se requiere experiencia previa en programación, pero es útil tener conocimientos básicos de HTML y CSS. Este curso es ideal para personas que deseen entrar en el mundo del desarrollo web y mejorar sus habilidades front-end.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases teóricas, ejercicios prácticos, proyectos individuales y colaborativos. Los estudiantes también tendrán acceso a recursos en línea y soporte del instructor para resolver dudas y mejorar sus habilidades de programación.</p>
            
                <h2>Certificación</h2>
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación JavaScript para principiantes y su capacidad para desarrollar sitios web interactivos.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>No pierdas la oportunidad de aprender JavaScript y transformar tus ideas en interactividad en la web. ¡Inscríbete ahora y comienza tu viaje en el desarrollo web!</p>
            ',
                'precio' => 30,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/javascriptprinci.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],

            [
                'nombre' => "Curso de Programacion JavaScript Avanzado ",
                'descripcion' => "JavaScript Avanzado y Aplicaciones Interactivas: Sumérgete en las técnicas de programación más sofisticadas de JavaScript.
                    Explora temas como promesas, asincronía, patrones de diseño, y consumo de APIs REST. Domina la creación de aplicaciones web dinámicas y complejas, incluyendo aplicaciones de una sola página (SPA) y optimización de rendimiento.
                    Adquiere las habilidades necesarias para desarrollar experiencias interactivas de alta calidad en el navegador.",
                'descripcionextensa' => '<h1>Curso de JavaScript Avanzado</h1>

                <p>Bienvenido al curso de JavaScript avanzado. Este curso está diseñado para desarrolladores con experiencia en JavaScript que desean profundizar en el lenguaje y explorar sus capacidades avanzadas. Aprenderás técnicas avanzadas de programación, patrones de diseño y el uso de las últimas características de ECMAScript para desarrollar aplicaciones web sofisticadas y eficientes.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Programación Funcional en JavaScript</h3>
                <ul>
                    <li>Funciones de orden superior y funciones lambda.</li>
                    <li>Programación declarativa con map, reduce y filter.</li>
                    <li>Uso de clausuras y funciones puras.</li>
                </ul>
            
                <h3>2. Programación Asíncrona</h3>
                <ul>
                    <li>Callbacks y Promesas.</li>
                    <li>Async/await y manejo avanzado de errores.</li>
                    <li>Operaciones asíncronas con Fetch API.</li>
                </ul>
            
                <h3>3. Patrones de Diseño y Arquitectura de Software</h3>
                <ul>
                    <li>Patrón Singleton, Factory, Module, etc.</li>
                    <li>Arquitectura MVC y MVVM.</li>
                    <li>Desarrollo modular con ES Modules.</li>
                </ul>
            
                <h3>4. Manipulación del DOM y Eventos Avanzados</h3>
                <ul>
                    <li>Uso avanzado de selección y manipulación de elementos del DOM.</li>
                    <li>Delegación de eventos y optimización de rendimiento.</li>
                    <li>Animaciones y transiciones con CSS y JavaScript.</li>
                </ul>
            
                <h3>5. Desarrollo de Aplicaciones con Frameworks Modernos</h3>
                <ul>
                    <li>Uso de React, Angular o Vue.js para desarrollo front-end.</li>
                    <li>Desarrollo de aplicaciones de una sola página (SPA).</li>
                    <li>Integración de APIs y servicios RESTful.</li>
                </ul>
            
                <h3>6. Testing y Depuración</h3>
                <ul>
                    <li>Pruebas unitarias con Jest o Mocha.</li>
                    <li>Herramientas de depuración en navegadores.</li>
                    <li>Optimización del rendimiento con herramientas como Lighthouse.</li>
                </ul>
            
                <h3>7. Proyectos Prácticos y Desarrollo Colaborativo</h3>
                <p>Los estudiantes trabajarán en proyectos avanzados y colaborarán en el desarrollo de aplicaciones web en tiempo real. Los proyectos incluirán el desarrollo de aplicaciones interactivas, juegos en línea y aplicaciones de productividad.</p>
            
                <h2>Requisitos</h2>
                <p>Este curso está destinado a desarrolladores con experiencia en JavaScript y desarrollo web. Se espera que los estudiantes tengan un conocimiento sólido de los fundamentos de JavaScript, HTML, CSS y programación orientada a objetos.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases magistrales, proyectos prácticos, desarrollo colaborativo y análisis de casos reales. Los estudiantes también tendrán acceso a recursos en línea, foros de discusión y sesiones de tutoría para resolver dudas y mejorar sus habilidades de programación.</p>
            
                <h2>Certificación</h2>
                <p>Al completar con éxito el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en programación JavaScript avanzada y su capacidad para desarrollar aplicaciones web dinámicas y modernas.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>Este curso te proporcionará las habilidades necesarias para destacarte como un desarrollador JavaScript avanzado. No pierdas la oportunidad de expandir tus conocimientos y crear aplicaciones web innovadoras y de alto rendimiento.</p>
            ',
                'precio' => 60,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/javascriptavan.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [


                'nombre' => "Curso de HTML",
                'descripcion' => "Fundamentos de HTML: Aprende a construir la estructura básica de páginas web con HTML.
                    Explora etiquetas, atributos y elementos fundamentales para crear contenido como texto, imágenes y enlaces.
                    Adquiere habilidades esenciales para dar vida a tus ideas en línea y comprender la base de la maquetación web.",
                'descripcionextensa' => ' <h1>Curso de HTML para Principiantes</h1>

                <p>Bienvenido al curso de HTML para principiantes. HTML (Hypertext Markup Language) es el lenguaje estándar utilizado para crear páginas web. En este curso, aprenderás desde los conceptos básicos hasta las técnicas avanzadas de HTML para crear sitios web atractivos y funcionales. HTML es la piedra angular del desarrollo web y es esencial para cualquier persona interesada en crear contenido en línea.</p>
            
                <h2>Temas a Cubrir:</h2>
            
                <h3>1. Introducción a HTML</h3>
                <ul>
                    <li>Estructura básica de un documento HTML.</li>
                    <li>Etiquetas, elementos y atributos HTML.</li>
                    <li>Listas, enlaces y formularios.</li>
                </ul>
            
                <h3>2. Estructura y Semántica</h3>
                <ul>
                    <li>Encabezados, párrafos y citas.</li>
                    <li>Elementos semánticos: article, section, nav, etc.</li>
                    <li>Tablas y formularios avanzados.</li>
                </ul>
            
                <h3>3. Multimedia y Gráficos</h3>
                <ul>
                    <li>Inserción de imágenes, audio y video.</li>
                    <li>Uso de la etiqueta canvas para gráficos interactivos.</li>
                    <li>Optimización de medios para la web.</li>
                </ul>
            
                <h3>4. Integración con CSS y JavaScript</h3>
                <ul>
                    <li>Estilización de páginas HTML con CSS.</li>
                    <li>Interactividad y dinamismo con JavaScript.</li>
                    <li>Integración de HTML, CSS y JavaScript para crear sitios web completos.</li>
                </ul>
            
                <h3>5. Responsive Web Design y Optimización</h3>
                <ul>
                    <li>Diseño web adaptable para dispositivos móviles y tabletas.</li>
                    <li>Optimización de sitios web para velocidad y SEO.</li>
                    <li>Pruebas y depuración en múltiples navegadores.</li>
                </ul>
            
                <h3>6. Proyectos Prácticos</h3>
                <p>Los estudiantes trabajarán en proyectos prácticos que les permitirán aplicar los conocimientos adquiridos durante el curso. Los proyectos incluirán la creación de un sitio web personal, un blog interactivo y una página web multimedia.</p>
            
                <h2>Requisitos</h2>
                <p>No se requiere experiencia previa en programación, pero es útil tener conocimientos básicos de informática y navegación en internet. Este curso es ideal para personas que deseen crear su propio contenido web.</p>
            
                <h2>Metodología</h2>
                <p>El curso se basará en clases teóricas, ejercicios prácticos, proyectos individuales y colaborativos. Los estudiantes también tendrán acceso a recursos en línea y soporte del instructor para resolver dudas y mejorar sus habilidades de desarrollo web.</p>
            
                <h2>Certificación</h2>
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en HTML y su capacidad para crear sitios web atractivos y funcionales.</p>
            
                <h2>¡Inscríbete Ahora!</h2>
                <p>No pierdas la oportunidad de aprender HTML y crear tu presencia en línea. ¡Inscríbete ahora y comienza tu viaje en el desarrollo web!</p>
            ',
                'precio' => 20,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/html.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [

                'nombre' => "Curso de CSS ",
                'descripcion' => "Introducción a CSS: Descubre cómo dar estilo y diseño a tus páginas web con CSS. Aprende a aplicar colores, fuentes, márgenes y efectos visuales a tus elementos HTML.
                    Adquiere habilidades básicas en diseño web para crear interfaces atractivas y agradables a la vista, mejorando la presentación de tus proyectos en línea.",
                'descripcionextensa' => ' <h1>Curso de CSS Básico</h1>

                <p>Bienvenido al curso de CSS básico. CSS (Cascading Style Sheets) es un lenguaje de diseño utilizado para controlar el aspecto y la presentación de los documentos HTML. En este curso, aprenderás los fundamentos de CSS, incluyendo selección de elementos, estilos de texto, propiedades de caja, diseño responsivo y animaciones básicas.</p>
        
                <h2>Temas a Cubrir:</h2>
        
                <ul>
                    <li>Introducción a CSS y sus selectores.</li>
                    <li>Estilización de texto y fuentes.</li>
                    <li>Modelo de caja: margen, borde y relleno.</li>
                    <li>Posicionamiento y diseño de elementos.</li>
                    <li>Creación de diseños responsivos con media queries.</li>
                    <li>Transiciones y animaciones simples.</li>
                </ul>
        
                <h2>Metodología</h2>
        
                <p>El curso se basará en clases teóricas, ejercicios prácticos y proyectos simples. Los estudiantes tendrán la oportunidad de aplicar los conocimientos adquiridos en ejercicios prácticos y mejorar sus habilidades de diseño web. Se proporcionará retroalimentación para ayudar a los estudiantes a comprender mejor los conceptos y técnicas de CSS.</p>
        
                <h2>Requisitos</h2>
        
                <p>No se requiere experiencia previa en diseño web, pero es útil tener conocimientos básicos de HTML. Este curso es ideal para personas que deseen mejorar la apariencia de sus sitios web y aprender las habilidades fundamentales de diseño web con CSS.</p>
        
                <h2>Certificación</h2>
        
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en CSS básico y su capacidad para diseñar y estilizar sitios web de manera efectiva.</p>
            </div>',
                'precio' => 20,
                'descuento' => 50,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/css.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [


                'nombre' => "Curso de Laravel",
                'descripcion' => "Desarrollo Web Eficiente con Laravel: Sumérgete en el mundo del desarrollo web moderno con el framework PHP Laravel.
                    Aprende a construir aplicaciones web robustas y escalables utilizando características avanzadas como enrutamiento, controladores, migraciones y relaciones de base de datos. Explora la autenticación, autorización y creación de APIs.
                    Adquiere habilidades esenciales para crear proyectos web complejos de manera eficiente y mantenible.",
                'descripcionextensa' => ' <h1>Curso de Laravel</h1>

                <p>Bienvenido al curso de Laravel. Laravel es un marco de desarrollo de PHP que facilita la creación de aplicaciones web robustas y escalables. En este curso, aprenderás los conceptos fundamentales de Laravel, incluyendo la configuración del entorno, el enrutamiento, las vistas, las migraciones de bases de datos, las relaciones de base de datos y el uso de Eloquent ORM. Además, te familiarizarás con las características avanzadas de Laravel, como el desarrollo de API, la autenticación, la autorización y las pruebas automatizadas.</p>
        
                <h2>Temas a Cubrir:</h2>
        
                <ul>
                    <li>Instalación y configuración de Laravel.</li>
                    <li>Conceptos básicos de MVC (Modelo-Vista-Controlador).</li>
                    <li>Enrutamiento y controladores.</li>
                    <li>Vistas y plantillas Blade.</li>
                    <li>Interacción con bases de datos usando Eloquent ORM.</li>
                    <li>Desarrollo de API RESTful.</li>
                    <li>Autenticación y autorización de usuarios.</li>
                    <li>Pruebas automatizadas con PHPUnit.</li>
                    <li>Despliegue de aplicaciones Laravel.</li>
                </ul>
        
                <h2>Metodología</h2>
        
                <p>El curso se basará en clases teóricas, ejercicios prácticos y proyectos completos. Los estudiantes tendrán la oportunidad de trabajar en proyectos de la vida real, desde la configuración inicial hasta el despliegue. Se proporcionará orientación y retroalimentación detallada para ayudar a los estudiantes a comprender los conceptos y técnicas de Laravel.</p>
        
                <h2>Requisitos</h2>
        
                <p>Se espera que los estudiantes tengan conocimientos básicos de PHP y programación orientada a objetos. Este curso es adecuado para desarrolladores web que deseen mejorar sus habilidades en el desarrollo de aplicaciones web utilizando Laravel.</p>
        
                <h2>Certificación</h2>
        
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en Laravel y su capacidad para desarrollar aplicaciones web avanzadas y eficientes.</p>
           ',
                'precio' => 30,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/laravel.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],

            [
                'nombre' => "Curso de Angular ",
                'descripcion' => "Construye Aplicaciones Interactivas con Angular: Explora el framework de JavaScript Angular y crea aplicaciones web dinámicas y potentes.
                    Aprende a utilizar componentes, directivas y enrutamiento para crear interfaces de usuario interactivas. Descubre cómo trabajar con observables y manejar la gestión del estado de la aplicación.
                    Adquiere las habilidades necesarias para desarrollar experiencias de usuario sofisticadas y aplicaciones de una sola página (SPA) de alto rendimiento.",
                'descripcionextensa' => '<h1>Curso de Angular</h1>

                <p>Bienvenido al curso de Angular. Angular es un framework de desarrollo de aplicaciones web y móviles de código abierto y mantenido por Google. Es ampliamente utilizado para construir aplicaciones web de una sola página (SPA) y aplicaciones móviles híbridas. En este curso, aprenderás los conceptos fundamentales de Angular, incluyendo componentes, servicios, enrutamiento, formularios y comunicación con API RESTful.</p>
        
                <h2>Temas a Cubrir:</h2>
        
                <ul>
                    <li>Introducción a Angular y configuración del entorno.</li>
                    <li>Componentes y enlace de datos.</li>
                    <li>Directivas y pipes.</li>
                    <li>Enrutamiento y navegación.</li>
                    <li>Formularios y validaciones.</li>
                    <li>Consumo de servicios y comunicación con APIs RESTful.</li>
                    <li>Manejo del estado de la aplicación con RxJS.</li>
                    <li>Desarrollo de aplicaciones móviles híbridas con Angular y Ionic.</li>
                </ul>
        
                <h2>Metodología</h2>
        
                <p>El curso se basará en clases teóricas, demostraciones prácticas y proyectos prácticos. Los estudiantes tendrán la oportunidad de trabajar en proyectos de la vida real y aplicar los conocimientos adquiridos en el desarrollo de aplicaciones Angular. Se fomentará la interacción con los instructores y otros estudiantes para resolver dudas y mejorar las habilidades de desarrollo Angular.</p>
        
                <h2>Requisitos</h2>
        
                <p>Se espera que los estudiantes tengan conocimientos previos de HTML, CSS y JavaScript. Experiencia previa con TypeScript es útil pero no obligatoria. Este curso es adecuado para desarrolladores web que deseen construir aplicaciones web interactivas y dinámicas utilizando Angular.</p>
        
                <h2>Certificación</h2>
        
                <p>Al completar el curso y los proyectos asignados, los estudiantes recibirán un certificado de finalización que valida sus habilidades en Angular y su capacidad para desarrollar aplicaciones web avanzadas y eficientes.</p>
            ',
                'precio' => 30,
                'descuento' => 20,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/angular.jpg',
                'cantidad' => 999,
                'tipo' => "curso"
            ],
            [
                'nombre' => "Hacking etico",
                'descripcion' => "Libro de Hacking: Explora el mundo de la ciberseguridad y la ética hacker a través de esta guía exhaustiva.
                    Descubre técnicas de penetración, análisis de vulnerabilidades y defensa cibernética.
                    Aprende cómo proteger sistemas, detectar riesgos y fortalecer la seguridad informática.
                    Este libro te proporciona una visión profunda de las habilidades necesarias para entender y combatir las amenazas digitales en la actualidad.",
                'descripcionextensa' => 'prueba',
                'precio' => 7.95,
                'descuento' => 0,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/ebook1.jpg',
                'cantidad' => 999,
                'tipo' => "ebook"
            ],
            [
                'nombre' => "Hacking",
                'descripcion' => "Libro de Programación: Sumérgete en el universo del código con esta guía integral.
                    Desde los conceptos básicos hasta técnicas avanzadas, explora múltiples lenguajes y paradigmas de programación. Aprende a resolver problemas, crear aplicaciones y desarrollar software de calidad.
                    Este libro te acompaña en un viaje de aprendizaje práctico y te proporciona las herramientas esenciales para convertirte en un programador competente y creativo.",
                'descripcionextensa' => 'prueba',
                'precio' => 4.95,
                'descuento' => 0,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/ebook2.jpg',
                'cantidad' => 999,
                'tipo' => "ebook"
            ],
            [
                'nombre' => "Redes Informaticas",
                'descripcion' => "Redes de Comunicación: Explora el mundo de las redes informáticas con esta guía completa.
                    Desde los fundamentos de la conectividad hasta los protocolos avanzados, descubre cómo funcionan Internet y las redes empresariales. Aprende sobre enrutamiento, seguridad, administración y resolución de problemas de red.
                    Este libro te proporciona el conocimiento necesario para comprender y construir infraestructuras de comunicación efectivas en la era digital.",
                'descripcionextensa' => 'prueba',
                'precio' => 7.95,
                'descuento' => 0,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/ebook3.jpg',
                'cantidad' => 999,
                'tipo' => 'ebook'
            ],
            [
                'nombre' => "Linux",
                'descripcion' => "Maestría en Linux: Sumérgete en el sistema operativo de código abierto líder en el mundo.
                    Desde la instalación hasta la administración avanzada, explora la filosofía de Linux, la línea de comandos y la gestión de paquetes. Aprende a configurar servidores, automatizar tareas y personalizar tu entorno.
                    Este libro te guía a través del mundo de Linux, proporcionándote las habilidades esenciales para aprovechar al máximo este poderoso sistema operativo.",
                'descripcionextensa' => 'prueba',
                'precio' => 4.95,
                'descuento' => 0,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/ebook4.jpg',
                'cantidad' => 999,
                'tipo' => 'ebook'
            ],
            [
                'nombre' => "Plantilla Larable White",
                'descripcion' => "Plantilla para laravel con fondo blanco y rosa ",
                'descripcionextensa' => 'prueba',
                'precio' => 50,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla1.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
            [
                'nombre' => "Plantilla Larable Black",
                'descripcion' => "Plantilla para laravel con fondo negro perfecto para no dañar los ojos ",
                'descripcionextensa' => 'prueba',
                'precio' => 50,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla2.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
            [
                'nombre' => "Plantilla Larable Blue",
                'descripcion' => "Plantilla para laravel con fondo azul oscuro con gestion de clientes ",
                'descripcionextensa' => 'prueba',
                'precio' => 50,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla3.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
            [
                'nombre' => "Plantilla Angular Black",
                'descripcion' => "Plantilla para Angular oscura ",
                'descripcionextensa' => 'prueba',
                'precio' => 60,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla4.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
            [
                'nombre' => "Plantilla Angular White",
                'descripcion' => "Plantilla para Angular con fondo blanco y rosa ",
                'descripcionextensa' => 'prueba',
                'precio' => 60,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla5.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
            [
                'nombre' => "Plantilla Angular Blue",
                'descripcion' => "Plantilla para Angular de color azul ",
                'descripcionextensa' => 'prueba',
                'precio' => 60,
                'descuento' => 10,
                'autormarca' => "Alejandro Ruiz",
                'img' => '/media/productos/plantilla6.jpg',
                'cantidad' => 999,
                'tipo' => 'plantilla',
            ],
        ]);
    }
}
