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

# CONTROL DE VERSIONES

| Versión | Hecha por | Revisada por | Aprobada por | Fecha       | Motivo            |
|--------|------------|---------------|---------------|------------|-------------------|
| 1.0    | MPV        | ELV           | ARV           | 01/05/2025 | Versión Original  |

---

# **Sistema DocuCode-AI**  
**Documento de Visión**  
**Versión 1.0**

---

## ÍNDICE GENERAL

1. [Introducción](#1-introducción)  
2. [Posicionamiento](#2-posicionamiento)  
3. [Descripción de los interesados y usuarios](#3-descripción-de-los-interesados-y-usuarios)  
4. [Vista General del Producto](#4-vista-general-del-producto)  
5. [Características del producto](#5-características-del-producto)  
6. [Restricciones](#6-restricciones)  
7. [Rangos de calidad](#7-rangos-de-calidad)  
8. [Precedencia y Prioridad](#8-precedencia-y-prioridad)  
9. [Otros requerimientos del producto](#9-otros-requerimientos-del-producto)  
10. [Conclusiones](#10-conclusiones)  
11. [Recomendaciones](#11-recomendaciones)  
12. [Bibliografía](#12-bibliografía)  
13. [Webgrafía](#13-webgrafía)  

---

## 1. Introducción

### 1.1 Propósito  
Este documento tiene como propósito definir la visión del proyecto DocuCode-AI, un sistema web que automatiza la evaluación, documentación y generación de diagramas UML de código fuente, orientado a docentes de programación universitaria.

### 1.2 Alcance  
El sistema permitirá cargar código fuente, analizarlo con inteligencia artificial, generar comentarios explicativos, detectar duplicidad y errores comunes, y crear diagramas UML automáticos (clases, secuencia, casos de uso, actividad, componentes y paquetes).

### 1.3 Definiciones, Siglas y Abreviaturas  
- **IA:** Inteligencia Artificial  
- **UML:** Unified Modeling Language  
- **API:** Interfaz de Programación de Aplicaciones  
- **VPS:** Servidor Privado Virtual  
- **SSL:** Secure Socket Layer  

### 1.4 Referencias  
- Fowler, M. (2002). *Patterns of Enterprise Application Architecture*.  
- https://marp.app/  
- https://www.terraform.io/  
- Documentación de OpenAI API y PlantUML  

### 1.5 Visión General  
DocuCode-AI nace como una solución para agilizar y objetivizar la revisión de prácticas de programación en universidades, brindando herramientas visuales, comentarios automáticos y evaluación de calidad de código.

---

## 2. Posicionamiento

### 2.1 Oportunidad de negocio  
Actualmente, los docentes invierten horas revisando código sin retroalimentación objetiva o visual para los estudiantes. DocuCode-AI optimiza este proceso con IA, permitiendo revisiones en minutos con mayor calidad.

### 2.2 Definición del problema  
- Evaluación manual de prácticas de código.  
- Ausencia de diagramas visuales para comprensión.  
- Falta de retroalimentación detallada y automatizada.  

---

## 3. Descripción de los interesados y usuarios

### 3.1 Resumen de los interesados  
- **Docentes:** Uso directo del sistema.  
- **Estudiantes:** Reciben resultados y comentarios.  
- **UPT:** Institución que promueve innovación educativa.  

### 3.2 Resumen de los usuarios  
- Usuarios autenticados con historial de análisis.  
- Acceso desde navegadores comunes (Chrome, Firefox).  

### 3.3 Entorno de usuario  
Sistema web accesible desde PC, tablets o móviles. Requiere conexión a Internet.

### 3.4 Perfiles de los interesados  
| Interesado | Rol | Necesidad |
|------------|-----|-----------|
| Docente | Usuario principal | Evaluar código automáticamente |
| Estudiante | Receptor | Obtener retroalimentación |
| Universidad | Facilitador | Promover uso de IA educativa |

### 3.5 Perfiles de los Usuarios  
- Usuario básico: docente sin conocimientos técnicos avanzados.  
- Usuario administrador: encargado del mantenimiento y despliegue del sistema.

### 3.6 Necesidades de los interesados y usuarios  
- Facilidad de uso.  
- Resultados objetivos y rápidos.  
- Retroalimentación clara.  
- Visualización de UML sin conocimientos previos.  

---

## 4. Vista General del Producto

### 4.1 Perspectiva del producto  
DocuCode-AI será accesible mediante navegador, con backend en PHP/Python y análisis automatizado vía OpenAI. Almacenará resultados por usuario y generará reportes en PDF/Markdown.

### 4.2 Resumen de capacidades  
- Análisis de código fuente.  
- Comentarios automáticos.  
- Generación de diagramas UML.  
- Evaluación de calidad del código.  
- Historial de análisis por usuario.  
- Detección de código duplicado.  

### 4.3 Suposiciones y dependencias  
- Acceso a OpenAI API.  
- Servidor VPS disponible (Elastika).  
- Compatibilidad con múltiples lenguajes.  

### 4.4 Costos y precios  
Costos operativos entre S/ 150 – S/ 250 anuales por infraestructura, dominio, y API. Uso gratuito en entorno académico.

### 4.5 Licenciamiento e instalación  
Código liberado con licencia MIT. Instalación automatizada mediante Terraform en VPS Elastika.

---

## 5. Características del producto  
- Subida de archivos o carpetas comprimidas.  
- Análisis semántico y sintáctico.  
- UML dinámico con PlantUML.  
- Interfaz amigable para docentes.  
- Historial de prácticas por usuario.  
- Evaluación automatizada de calidad.  
- Panel administrativo para configuración.  

---

## 6. Restricciones  
- Requiere conexión a internet.  
- Limitación por uso de API de terceros (OpenAI).  
- Alojamiento en VPS autogestionado.  

---

## 7. Rangos de calidad  
- Precisión en el análisis > 90%.  
- Tiempo de respuesta < 10 segundos por análisis.  
- Accesibilidad en dispositivos móviles.  
- Alta disponibilidad en servidor VPS.  

---

## 8. Precedencia y Prioridad  
1. Generación de comentarios.  
2. UML automático.  
3. Historial de usuario.  
4. Evaluación de calidad.  
5. Detección de duplicidad.  

---

## 9. Otros requerimientos del producto

- **Estándares legales:** cumplimiento de protección de datos.  
- **Estándares de comunicación:** HTTPS, cifrado SSL.  
- **Estándares de plataforma:** Navegadores compatibles y arquitectura cliente-servidor.  
- **Estándares de calidad y seguridad:** Pruebas unitarias, escaneo con SonarQube, integración continua con GitHub Actions.

---

## 10. CONCLUSIONES  
DocuCode-AI es una solución efectiva, viable y académicamente útil. Mejora el proceso de evaluación de código con inteligencia artificial, reduce el tiempo de revisión y aporta valor al entorno educativo con herramientas automatizadas.

---

## 11. RECOMENDACIONES  
- Extender la cobertura a nuevos lenguajes de programación.  
- Implementar métricas de análisis más detalladas.  
- Evaluar integración con LMS como Moodle.  

---

## 12. BIBLIOGRAFÍA  
- Fowler, M. *Patterns of Enterprise Application Architecture*.  
- IEEE Std 830-1998. *Recommended Practice for Software Requirements Specifications*.

---

## 13. WEBGRAFÍA  
- https://www.terraform.io/  
- https://marp.app/  
- https://platform.openai.com/docs  
- https://plantuml.com/  
- https://elastika.pe/

---
## 14. GitHub Wiki y Roadmap del Proyecto

### 14.1 Contenido del Wiki del Proyecto

El repositorio oficial de DocuCode-AI en GitHub contiene un [Wiki](https://github.com/UPT-FAING-EPIS/proyecto-si889-2025-i-u1-docucode-ai/wiki/Home%E2%80%90DocuCode%E2%80%90IA) donde se detalla:

- Visión general del proyecto y objetivos.
- Guía de instalación del sistema.
- Descripción de funcionalidades principales.
- Manual de uso para docentes.
- Estructura del sistema y tecnologías utilizadas.
- Preguntas frecuentes (FAQ).

> El Wiki puede consultarse públicamente para conocer la documentación técnica y funcional actualizada del sistema.

### 14.2 Roadmap del Proyecto

A continuación se presenta el cronograma tentativo para el desarrollo iterativo del sistema:

| Fase | Tarea                                 | Fecha Estimada  | Estado      |
|------|---------------------------------------|------------------|-------------|
| F1   | Definición de requerimientos          | 15/04/2025       | ✅ Completado |
| F2   | Diseño del sistema y estructura       | 20/04/2025       | ✅ Completado |
| F3   | Implementación del backend PHP/Python | 01/04/2025       | ✅ Completado |
| F4   | Integración con OpenAI API            | 08/04/2025       | ✅ Completado |
| F5   | Generación automática de UML          | 15/04/2025       | ✅ Completado |
| F6   | Evaluación de código y duplicidad     | 28/05/2025       | ⏳ Pendiente |
| F8   | Pruebas y documentación final         | 28/05/2025       | 🔄 En progreso |
| F9   | Publicación del sistema en VPS        | 28/05/2025       | ⏳ Pendiente |

> Este Roadmap también se encuentra en la sección [Projects](https://github.com/usuario/repositorio/projects) del repositorio en GitHub, donde se actualiza conforme al avance del equipo.

---

