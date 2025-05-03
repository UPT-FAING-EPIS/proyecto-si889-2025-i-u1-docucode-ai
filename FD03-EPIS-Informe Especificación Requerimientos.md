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

## 1. INTRODUCCIÓN

Este documento describe los requerimientos funcionales y no funcionales del sistema web DocuCode-AI. Se enfoca en facilitar la evaluación y documentación de código fuente mediante el uso de inteligencia artificial y la generación automática de diagramas UML.

---

## 2. GENERALIDADES DE LA EMPRESA

### 2.1 Nombre de la Empresa
Universidad Privada de Tacna

### 2.2 Visión
Ser una universidad líder en innovación, investigación y desarrollo de tecnologías aplicadas a la educación.

### 2.3 Misión
Formar profesionales altamente calificados, con visión tecnológica y capacidad de implementar soluciones prácticas.

### 2.4 Organigrama
Rectorado → Facultad de Ingeniería → Escuela de Ingeniería de Sistemas → Equipo de Desarrollo de Proyectos

---

## 3. VISIONAMIENTO DE LA EMPRESA

### 3.1 Descripción del Problema
Los docentes de programación invierten muchas horas en evaluar código sin herramientas automatizadas, lo que retrasa la retroalimentación a los estudiantes.

### 3.2 Objetivos de Negocios
Automatizar la evaluación de código, mejorar la calidad de enseñanza, reducir tiempos de revisión.

### 3.3 Objetivos de Diseño
Crear una plataforma web intuitiva, segura, escalable y capaz de generar resultados en tiempo real.

### 3.4 Alcance del Proyecto
DocuCode-AI permitirá subir archivos de código, analizar automáticamente su calidad, detectar código duplicado y generar diagramas UML explicativos.

### 3.5 Viabilidad del Sistema
Totalmente viable técnica, económica y operativamente en el contexto universitario con uso de VPS y API de OpenAI.

### 3.6 Información Obtenida del Levantamiento
Entrevistas a docentes, encuestas a estudiantes y revisión de prácticas académicas.

---

## 4. ANÁLISIS DE PROCESOS

### 4.1 Diagrama del Proceso Actual
Los docentes descargan manualmente el código, lo leen y comentan uno por uno, generando retrabajo.

### 4.2 Diagrama del Proceso Propuesto
Los docentes suben archivos al sistema, que automáticamente analiza y devuelve comentarios, métricas y diagramas.

---

## 5. ESPECIFICACIÓN DE REQUERIMIENTOS DE SOFTWARE

### 5.1 Requerimientos Funcionales Iniciales

| Código | Descripción                                      |
|--------|--------------------------------------------------|
| RF01   | El sistema debe permitir subir archivos .zip     |
| RF02   | El sistema debe analizar el código fuente        |
| RF03   | El sistema debe generar comentarios automáticos  |
| RF04   | El sistema debe mostrar diagramas UML            |
| RF05   | El sistema debe guardar historial por usuario    |

### 5.2 Requerimientos No Funcionales

| Código | Descripción                                      |
|--------|--------------------------------------------------|
| RNF01  | La interfaz debe ser accesible desde navegadores |
| RNF02  | La plataforma debe estar operativa 24/7          |
| RNF03  | El análisis debe completarse en menos de 1 min   |

### 5.3 Requerimientos Funcionales Finales
(Se detallarán después de pruebas e iteraciones con usuarios)

### 5.4 Reglas de Negocio

- Solo usuarios autenticados pueden analizar código.
- El código subido no debe exceder 10 MB.
- Los archivos se almacenan temporalmente por 30 días.

---

## 6. FASE DE DESARROLLO

### 6.1 Perfiles de Usuario

- **Docente**: Accede al análisis, revisa resultados y retroalimenta al estudiante.
- **Estudiante**: Recibe comentarios y mejora su código.
- **Administrador**: Gestiona usuarios y recursos del servidor.

### 6.2 Diagramas UML

Incluye:
- Diagrama de paquetes
- Diagrama de casos de uso
- Diagrama de actividades
- Diagrama de clases
- Diagrama de secuencia

(Diagramas generados automáticamente a partir del código fuente usando PlantUML)

---

## 7. CONCLUSIONES

DocuCode-AI responde a una necesidad real en la enseñanza de la programación. Automatiza tareas repetitivas, mejora la objetividad en la evaluación y aporta herramientas visuales para el entendimiento del código. Su implementación es factible con los recursos disponibles.

---

## 8. RECOMENDACIONES

- Continuar el desarrollo con pruebas piloto en cursos reales.
- Incorporar soporte para más lenguajes de programación.
- Añadir funcionalidades de retroalimentación docente en tiempo real.

---

## 9. BIBLIOGRAFÍA

- Pressman, R. (2010). *Ingeniería de Software*.
- Sommerville, I. (2011). *Software Engineering*.

---

## 10. WEBGRAFÍA

- https://www.openai.com/
- https://plantuml.com/
- https://www.elastika.net/