📌 Proyecto de Asistencia Escolar
Este es un sistema de asistencia escolar desarrollado en PHP y MySQL, utilizando Docker y Nginx para su despliegue.

🛠️ Tecnologías utilizadas
✅ PHP 8.1 con MySQLi
✅ MySQL 5.7
✅ Nginx con PHP-FPM
✅ Docker y Docker Compose

📥 1️⃣ Clonar el repositorio desde GitHub
Para obtener el proyecto, abre una terminal y ejecuta:

bash
Copiar
Editar
git clone https://github.com/raptorn0000/Repositorio_de_verdad.git
cd Repositorio_de_verdad
Si ya tienes el repositorio clonado y quieres actualizarlo a la última versión:

bash
Copiar
Editar
git pull origin main
🐳 2️⃣ Desplegar el proyecto con Docker Compose
Asegúrate de tener Docker y Docker Compose instalados. Luego, ejecuta:

bash
Copiar
Editar
docker-compose up -d --build
Esto:
✅ Construirá y levantará los contenedores necesarios (PHP, MySQL y Nginx).
✅ Mapeará los volúmenes con el código fuente.

Si necesitas detener los contenedores en algún momento:

bash
Copiar
Editar
docker-compose down
🌐 3️⃣ Acceder a la aplicación
Una vez desplegado, puedes acceder a:

🔹 Aplicación web:
👉 http://localhost:8080

🔹 Base de Datos MySQL:
📌 Host: db
📌 Usuario: user
📌 Contraseña: password
📌 Base de datos: attendance_db

🔹 Verificar que los contenedores están corriendo:

bash
Copiar
Editar
docker ps
Si hay algún problema, revisa los logs con:

bash
Copiar
Editar
docker-compose logs -f
