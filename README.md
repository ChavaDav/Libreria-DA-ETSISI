![Texto alternativo](https://etsisi.da.upm.es/wp-content/uploads/2020/03/cropped-Logo-web-2.png)

# Proyecto Libreria

---

El proyecto consiste en una aplicación web basada en servidor destinada a gestionar el préstamo y seguimiento de libros en una institución (por ejemplo, una escuela o universidad). El sistema está diseñado para llevar un control de los libros disponibles, su asignación a los estudiantes, y la asignatura a la que pertenecen. A continuación se detallan las funcionalidades principales:

1. **Gestión de Libros:**
  
  - Almacena información detallada de cada libro, como título, autor, año de publicación, asignatura a la que pertenece, y código de identificación único.
  - Permite agregar nuevos libros, editar la información de los existentes y eliminarlos cuando ya no sean necesarios.
2. **Préstamos y Asignaciones:**
  
  - Los estudiantes pueden solicitar el préstamo de libros, y el sistema realiza un seguimiento de qué libros están prestados, quién los tiene, y por cuánto tiempo.
  - El sistema gestiona la asignación de libros según la asignatura del estudiante, asegurándose de que el libro que se le otorga corresponda a la materia correspondiente.
  - Cada préstamo está vinculado al estudiante, lo que permite llevar un historial completo de qué libros han sido prestados, en qué fechas, y el estado del libro (si ha sido devuelto o está pendiente).
3. **Usuarios del Sistema:**
  
  - **Administradores:** Tienen acceso completo para gestionar los libros, asignaturas, usuarios y los préstamos.
  - **Estudiantes:** Pueden consultar qué libros están disponibles, hacer solicitudes de préstamo y ver el historial de los libros que tienen asignados.
  - **Profesores:** Pueden consultar los libros disponibles para su asignatura y realizar recomendaciones sobre los libros a añadir al sistema.
4. **Reportes y Estadísticas:**
  
  - El sistema permite generar reportes sobre el estado de los libros (disponibles, prestados, dañados), el historial de préstamos y la asignación de libros por asignatura.
  - Permite al administrador ver qué libros son más solicitados, y qué estudiantes han tenido préstamos activos.
5. **Notificaciones:**
  
  - Se implementan notificaciones para alertar a los estudiantes sobre fechas de devolución próximas o sobre libros disponibles.
  - El sistema envía recordatorios si un libro ha sido solicitado por mucho tiempo y necesita ser devuelto o renovado.

El sistema se ejecuta en un servidor centralizado para garantizar el acceso desde diferentes dispositivos, lo que facilita su uso en un entorno educativo o institucional. Además, se garantiza la seguridad de los datos mediante autenticación de usuarios y copias de seguridad periódicas de la base de datos.

En resumen, el proyecto tiene como objetivo optimizar la gestión de los libros y recursos educativos, mejorando la eficiencia en el control de los préstamos, su asignación correcta según asignatura y generando un historial accesible tanto para los usuarios como para los administradores del sistema.
