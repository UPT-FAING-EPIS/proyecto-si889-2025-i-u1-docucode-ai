<center>

[comment]: <img src="./media/media/image1.png" style="width:1.088in;height:1.46256in" alt="escudo.png" />

![./media/logo-upt.png](./media/logo-upt.png)

**UNIVERSIDAD PRIVADA DE TACNA**  
**FACULTAD DE INGENIERÍA**  
**Escuela Profesional de Ingeniería de Sistemas**  

**Proyecto *DocuCode-AI: Sistema Web para la Evaluación de Código y Generación de Diagramas UML***  

Curso: *Patrones de Software*  
Docente: *Patrick José Cuadros Quiroga*  

Integrantes:  
**Jose Luis Jarro Cachi - 2020067148**  
**Farley Rodrigo Eduardo Viveros Blanco - 2020066896**  
**Ronal Daniel Lupaca Mamani - 202006146**

**Tacna – Perú**  
**2025**

</center>
---

## CONTROL DE VERSIONES

| Versión | Hecha por | Revisada por | Aprobada por | Fecha       | Motivo           |
|---------|------------|---------------|----------------|-------------|------------------|
| 1.0     | MPV        | ELV           | ARV            | 03/05/2025  | Versión Original |

---

# Sistema DocuCode-AI  
## Documento de Especificación de Requerimientos de Software  
**Versión 1.0**

---

## ÍNDICE GENERAL

1. INTRODUCCIÓN  
2. GENERALIDADES DE LA EMPRESA  
3. VISIONAMIENTO DE LA EMPRESA  
4. ANÁLISIS DE PROCESOS  
5. ESPECIFICACIÓN DE REQUERIMIENTOS DE SOFTWARE  
6. FASE DE DESARROLLO  
7. CONCLUSIONES  
8. RECOMENDACIONES  
9. BIBLIOGRAFÍA  
10. WEBGRAFÍA

---

## INTRODUCCIÓN

DocuCode-AI es un sistema web basado en Inteligencia Artificial, orientado a facilitar el análisis, documentación y evaluación del código fuente para uso académico. Este sistema está dirigido principalmente a docentes y estudiantes universitarios, brindando funcionalidades como generación automática de comentarios en código, elaboración de diagramas UML, análisis de calidad y detección de duplicados. El desarrollo del sistema se enmarca dentro de la asignatura de Patrones de Software y forma parte del proyecto académico correspondiente a la primera unidad.

## I. GENERALIDADES DE LA EMPRESA

### 1. Nombre de la Empresa
DocuCode-AI

### 2. Visión
Ser una plataforma líder a nivel académico en la generación automatizada de documentación de código y evaluación inteligente de software, contribuyendo a mejorar la enseñanza y aprendizaje en el área de programación.

### 3. Misión
Desarrollar una solución web basada en inteligencia artificial que permita a los docentes y estudiantes analizar, documentar y entender código fuente de manera rápida, precisa y estructurada, promoviendo buenas prácticas de desarrollo y facilitando la revisión académica.

### 4. Organigrama
*(Por incluir)*

## II. VISIONAMIENTO DE LA EMPRESA

### 1. Descripción del Problema
En el contexto educativo universitario, la revisión y comprensión del código fuente entregado por los estudiantes representa un desafío constante para los docentes. La falta de documentación, la presencia de código duplicado o mal estructurado, y el escaso uso de buenas prácticas de programación dificultan una evaluación objetiva, ágil y formativa. Esta problemática se agudiza cuando los cursos están orientados a proyectos prácticos, y los tiempos de revisión son limitados. Actualmente, la revisión del código se realiza de forma manual, lo cual genera demoras, evaluaciones subjetivas y una carga de trabajo innecesaria.

### 2. Objetivos de Negocios
- Reducir el tiempo de revisión del código por parte de los docentes.
- Mejorar la calidad del aprendizaje práctico en programación.
- Aumentar la objetividad en la evaluación de trabajos entregados.
- Promover buenas prácticas de desarrollo desde etapas tempranas.
- Integrar herramientas de inteligencia artificial en el proceso educativo.
- Posicionar a la institución como promotora de la innovación académica.

### 3. Objetivos de Diseño
- Modularidad: Separar responsabilidades en componentes reutilizables.
- Usabilidad: Interfaz clara e intuitiva.
- Portabilidad: Compatible con cualquier navegador moderno.
- Escalabilidad: Integración futura de nuevas funcionalidades.
- Seguridad: Autenticación segura y privacidad de historiales.

### 4. Alcance del Proyecto
- Subida de archivos individuales o comprimidos.
- Análisis del código con IA.
- Comentarios automáticos explicativos.
- Diagramas UML (clases, casos de uso, secuencia, actividad, paquetes, componentes).
- Evaluación de calidad y detección de duplicados.
- Registro/inicio de sesión por Google.
- Historial por usuario.

### 5. Viabilidad del Sistema
- **Técnica**: Uso de tecnologías dominadas por el equipo.
- **Operativa**: Fácil adopción por docentes.
- **Económica**: Inversión baja con retorno alto en eficiencia.
- **Académica**: Alta pertinencia curricular.

### 6. Información del Levantamiento
- Entrevistas a docentes.
- Revisión de entregas de ciclos anteriores.
- Comparación con herramientas actuales (GitHub Copilot, SonarQube).
- Casos de éxito en otras universidades.

## III. ANÁLISIS DE PROCESOS

### a) Diagrama del Proceso Actual
![image](https://github.com/user-attachments/assets/3e8eddf5-7590-4e97-84b8-074f8bee213d)

### b) Diagrama del Proceso Propuesto
![image](https://github.com/user-attachments/assets/2dacfe1a-f0ef-404d-bcff-b1a8a8d047a5)

## IV. ESPECIFICACIÓN DE REQUERIMIENTOS DE SOFTWARE

### a) Requerimientos Funcionales Iniciales

| ID   | Nombre                               | Descripción                                                                 | Prioridad |
|------|--------------------------------------|-----------------------------------------------------------------------------|-----------|
| RF01 | Registro de usuario                 | El sistema permitirá registrar nuevos usuarios con correo y contraseña.     | Alta      |
| RF02 | Inicio de sesión                    | El usuario podrá iniciar sesión con sus credenciales o cuenta de Google.    | Alta      |
| RF03 | Subida de archivos de código        | El sistema permitirá subir archivos individuales o comprimidos.             | Alta      |
| RF04 | Comentarios automáticos             | Se generarán comentarios mediante IA.                                       | Alta      |
| RF05 | Diagramas UML (básicos)             | Se generarán automáticamente clases, casos de uso y secuencia.              | Alta      |

### b) Requerimientos No Funcionales

| ID    | Requerimiento           | Descripción                                               | Prioridad |
|-------|--------------------------|-----------------------------------------------------------|-----------|
| RNF01 | Usabilidad               | Interfaz amigable para docentes y estudiantes.            | Media     |
| RNF02 | Rendimiento              | Análisis en menos de 10 segundos por archivo.             | Alta      |
| RNF03 | Seguridad                | Cifrado de contraseñas y protección de archivos.          | Alta      |
| RNF04 | Escalabilidad            | Soporte para múltiples usuarios simultáneamente.          | Media     |

### c) Requerimientos Funcionales Finales

| ID   | Nombre                                | Descripción                                                                             | Prioridad |
|------|----------------------------------------|-----------------------------------------------------------------------------------------|-----------|
| RF01 | Registro de usuario                    | Registro con correo y contraseña.                                                      | Alta      |
| RF02 | Inicio de sesión con Google            | Autenticación por Google OAuth.                                                        | Alta      |
| RF03 | Subida de archivos                     | .php, .py, .rar aceptados.                                                             | Alta      |
| RF04 | Comentarios automáticos                | Explicaciones línea por línea del código.                                              | Alta      |
| RF05 | Diagramas UML (completos)              | Clases, casos de uso, secuencia, actividades, paquetes, componentes.                   | Alta      |
| RF06 | Evaluación automática de calidad       | Métricas sobre claridad, modularidad y complejidad.                                    | Alta      |
| RF07 | Detección de código duplicado          | Identificación de fragmentos similares.                                                | Alta      |
| RF08 | Historial de análisis por usuario      | Visualización por usuario de análisis previos.                                         | Media     |

### d) Reglas de Negocio

| ID    | Regla                                                                 |
|-------|-----------------------------------------------------------------------|
| RN01  | Solo los usuarios registrados pueden analizar código.                |
| RN02  | Tamaño máximo de archivos: 10MB.                                     |
| RN03  | Los comentarios son referenciales y no reemplazan la revisión humana.|
| RN04  | Cada análisis queda almacenado por usuario con fecha y resultados.   |
| RN05  | No se aceptan archivos potencialmente peligrosos.                    |

## V. FASE DE DESARROLLO

### 1. Perfiles de Usuario

| Perfil            | Descripción                                                                 |
|-------------------|------------------------------------------------------------------------------|
| Administrador     | Gestión total del sistema, usuarios y mantenimiento.                        |
| Docente Evaluador | Analiza el código y revisa resultados generados.                           |
| Estudiante        | Envía código para análisis y consulta de historial.                         |
| Sistema Externo   | OpenAI, servicio externo que genera comentarios automáticos.                |

### 2. Modelo Conceptual

#### a) Diagrama de Paquetes
![image](https://github.com/user-attachments/assets/9a096de8-3070-4d83-9fdb-802d9c6e6187)

#### b) Diagrama de Casos de Uso
![image](https://github.com/user-attachments/assets/743f13bb-e974-4d67-aa5d-191ee0f9115b)

#### c) Escenarios de Caso de Uso
*(Por desarrollar)*
#### d) Diagrama de Clases
![image](https://github.com/user-attachments/assets/714371d4-8d2d-45ba-95a5-6156e60437f1)


