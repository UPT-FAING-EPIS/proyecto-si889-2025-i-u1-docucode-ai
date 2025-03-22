<center>

[comment]: <img src="./media/media/image1.png" style="width:1.088in;height:1.46256in" alt="escudo.png" />

![./media/media/image1.png](./media/logo-upt.png)

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

**Proyecto *DocuCode-AI: Asistente Inteligente para Evaluación de Código***

Curso: *PATRONES DE SOFTWARE*

Docente: *PATRICK JOSE CUADROS QUIROGA*

Integrantes:

***Jose Luis Jarro Cachi - 2020067148***  
***Farley Rodrigo Eduardo Viveros Blanco - 2020066896***  
***Ronal Daniel Lupaca Mamani - 202006146***

**Tacna – Perú**

***2025***

**  
**
</center>
<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

Sistema *DocuCode-AI*

Informe de Factibilidad

Versión *{1.0}*

|CONTROL DE VERSIONES||||||
| :-: | :- | :- | :- | :- | :- |
|Versión|Hecha por|Revisada por|Aprobada por|Fecha|Motivo|
|1\.0|MPV|ELV|ARV|22/03/2025|Versión Original|

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

# **INDICE GENERAL**

[1. Descripción del Proyecto](#_Toc52661346)

[2. Riesgos](#_Toc52661347)

[3. Análisis de la Situación actual](#_Toc52661348)

[4. Estudio de Factibilidad](#_Toc52661349)

[4.1 Factibilidad Técnica](#_Toc52661350)

[4.2 Factibilidad económica](#_Toc52661351)

[4.3 Factibilidad Operativa](#_Toc52661352)

[4.4 Factibilidad Legal](#_Toc52661353)

[4.5 Factibilidad Social](#_Toc52661354)

[4.6 Factibilidad Ambiental](#_Toc52661355)

[5. Análisis Financiero](#_Toc52661356)

[6. Conclusiones](#_Toc52661357)


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

**<u>Informe de Factibilidad</u>**

1. <span id="_Toc52661346" class="anchor"></span>**Descripción del Proyecto**

    1.1. Nombre del proyecto
**DocuCode-AI: Asistente Inteligente para Evaluación de Código**  
    1.2. Duración del proyecto
El desarrollo del proyecto se estima en **4 meses**, incluyendo análisis, desarrollo, pruebas e implementación.  

    1.3. Descripción

DocuCode-AI es un sistema web basado en Inteligencia Artificial diseñado para facilitar la evaluación y documentación del código fuente en entornos educativos. Su propósito principal es ayudar a los docentes universitarios a analizar código de manera eficiente, proporcionando comentarios automáticos, generación de diagramas UML y evaluación de calidad del código.  

    1.4. Objetivos

        1.4.1 Objetivo general
        Desarrollar un sistema web basado en IA que permita a los docentes evaluar y documentar código de manera                     automatizada, mejorando la calidad y eficiencia del proceso de revisión.  

        1.4.2 Objetivos Específicos
        - Implementar un motor de IA para la generación de comentarios en el código.  
        - Incorporar herramientas para la creación automática de diagramas UML.  
        - Evaluar la calidad del código, identificando errores, código duplicado y malas prácticas.  
        - Integrar el sistema con plataformas educativas para facilitar su adopción.  

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

2. <span id="_Toc52661347" class="anchor"></span>**Riesgos**

    - **Dependencia de APIs externas:** Uso de OpenAI API para la generación de comentarios puede generar costos variables.  
    - **Seguridad de datos:** Protección del código de los estudiantes ante accesos no autorizados.  
    - **Compatibilidad con múltiples lenguajes de programación:** Diferentes sintaxis pueden afectar la precisión del análisis.  
    - **Conectividad:** Requiere conexión estable a internet para procesamiento en la nube.  


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

3. <span id="_Toc52661348" class="anchor"></span>**Análisis de la Situación actual**

    3.1. Planteamiento del problema

            Actualmente, los docentes de programación deben revisar manualmente grandes volúmenes de código, lo que es un proceso **lento, subjetivo y propenso a errores**. La falta de documentación en los códigos de los estudiantes dificulta su evaluación y comprensión.  


    3.2. Consideraciones de hardware y software

   - **Hardware:** Servidor en la nube (Elastika).  
   - **Software:**  
          - Backend: PHP y Python.  
          - Base de datos: MySQL/PostgreSQL.  
          - APIs: OpenAI API para análisis de código.  
          - Librerías: PlantUML para generación de diagramas UML.  

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

## 4. Estudio de Factibilidad  

El estudio de factibilidad tiene como objetivo determinar la viabilidad del desarrollo e implementación de **DocuCode-AI**, considerando aspectos técnicos, económicos, operativos, legales, sociales y ambientales.  

Para la evaluación, se realizaron las siguientes actividades:  
- Análisis de **infraestructura y tecnologías** disponibles.  
- Estimación de **costos operativos y de desarrollo**.  
- Evaluación de **beneficios y riesgos** del proyecto.  
- Identificación de **requerimientos legales y normativos**.  

Este estudio ha sido aprobado por los integrantes del equipo de desarrollo y validado conforme a los criterios establecidos para garantizar su viabilidad.  

---

### 4.1 Factibilidad Técnica  

Este apartado analiza los recursos tecnológicos disponibles y su aplicabilidad a **DocuCode-AI**, asegurando que el sistema pueda ser desarrollado y mantenido sin limitaciones técnicas.  

#### Evaluación de Hardware y Servidores  
- **Servidor en la nube:** Se usará **Elastika**, con capacidad escalable según demanda.  
- **Especificaciones del servidor:** 2 vCPUs, 4GB RAM, 50GB SSD.  
- **Requerimientos de conectividad:** Acceso estable a internet con latencia mínima.  

#### Evaluación de Software  
- **Lenguajes de programación:**  
  - Backend: **PHP y Python**.  
  - Frontend: **HTML, CSS, JavaScript**.  
- **Base de datos:** **MySQL/PostgreSQL**.  
- **APIs y Librerías:**  
  - **OpenAI API:** Generación de comentarios en código.  
  - **PlantUML:** Creación de diagramas UML.  
  - **Pylint y AST:** Análisis de código en Python.  
- **Compatibilidad con navegadores:** Chrome, Firefox, Edge.  

**Conclusión:** DocuCode-AI es técnicamente viable con los recursos y tecnologías disponibles.

---

### 4.2 Factibilidad Económica  

El análisis económico busca evaluar si los costos del proyecto son sostenibles en relación con los beneficios que ofrece.  

#### 4.2.1 Costos Generales  

| **Concepto** | **Costo Estimado** |
|-------------|------------------|
| Servidor en la nube (Elastika) | $10 USD/mes |
| OpenAI API (GPT-4) | $5 - $10 USD/mes |
| Dominio web | $2.99 USD/año (primer año en Hostinger) |
| Certificado SSL | $10 - $50 USD/año |
| **Total estimado mensual** | **$15 - $20 USD** |
| **Total estimado anual** | **$200 - $300 USD** |

#### 4.2.2 Costos operativos durante el desarrollo  
- No se requieren oficinas físicas, ya que el equipo trabajará de forma remota.  
- Uso de herramientas gratuitas para desarrollo: **VS Code, GitHub, Postman**.  

#### 4.2.3 Costos del ambiente  
- Servidor en la nube con Docker y balanceador de carga.  
- Conexión estable a internet.  

#### 4.2.4 Costos de personal  
| **Rol** | **Horas estimadas** | **Costo estimado** |
|---------|-----------------|------------------|
| Desarrollador Backend | 300 horas | $0 (Desarrollo propio) |
| Desarrollador Frontend | 250 horas | $0 (Desarrollo propio) |
| Especialista en IA | 200 horas | $0 (Desarrollo propio) |

#### 4.2.5 Costos totales del desarrollo del sistema  
El **costo total del desarrollo** se estima en **$200 - $300 USD/año**, cubriendo infraestructura y API de OpenAI.  

**Conclusión:** El proyecto es económicamente viable con un presupuesto accesible.

---

### 4.3 Factibilidad Operativa  

Se analiza si el sistema puede ser operado correctamente por los usuarios finales (docentes).  

#### Beneficios esperados  
- **Evaluación automatizada de código** con IA.  
- **Interfaz amigable** compatible con navegadores modernos.  
- **Reducción del tiempo de revisión** de horas a minutos.  
- **Integración con Moodle y Google Classroom** para facilitar la adopción.  

**Conclusión:** DocuCode-AI es operativamente viable y fácil de adoptar en entornos educativos.

---

### 4.4 Factibilidad Legal  

El proyecto debe cumplir con regulaciones sobre protección de datos y propiedad intelectual.  

#### Aspectos legales considerados  
- **Protección de datos:** Implementación de cifrado SSL/TLS y cumplimiento con GDPR si es necesario.  
- **Propiedad del código:** Se establecerán términos de uso claros sobre la privacidad del código analizado.  
- **Licenciamiento:** Código bajo licencia libre con opción de suscripción para funcionalidades premium.  

**Conclusión:** No existen restricciones legales que impidan la implementación de **DocuCode-AI**.

---

### 4.5 Factibilidad Social  

#### Impacto social positivo  
- **Optimización del proceso de enseñanza en programación.**  
- **Reducción de carga de trabajo para docentes.**  
- **Accesibilidad para estudiantes que necesitan retroalimentación en su código.**  

**Conclusión:** DocuCode-AI contribuirá a la mejora del aprendizaje y la eficiencia en la educación.

---

### 4.6 Factibilidad Ambiental  

El sistema será desarrollado en la nube, minimizando el impacto ambiental.  

#### Consideraciones ambientales  
- **Menor consumo energético:** Uso de servidores optimizados en la nube en lugar de infraestructura física.  
- **Reducción de uso de papel:** Documentación automatizada digitalmente en lugar de informes impresos.  

**Conclusión:** **DocuCode-AI es un sistema sostenible y con bajo impacto ambiental.**  

---

### **Conclusión Final**  
El análisis de factibilidad confirma que **DocuCode-AI** es viable **técnica, económica, operativa, legal, social y ambientalmente**. Su implementación mejorará significativamente la evaluación de código en entornos educativos. 🚀  


<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

5. <span id="_Toc52661356" class="anchor"></span>**Análisis Financiero**

    El plan financiero se ocupa del análisis de ingresos y gastos asociados a cada proyecto, desde el punto de vista del instante temporal en que se producen. Su misión fundamental es detectar situaciones financieramente inadecuadas.
    Se tiene que estimar financieramente el resultado del proyecto.

    5.1. Justificación de la Inversión

        5.1.1. Beneficios del Proyecto

            El beneficio se calcula como el margen económico menos los costes de oportunidad, que son los márgenes que hubieran podido obtenerse de haber dedicado el capital y el esfuerzo a otras actividades.
            El beneficio, obtenido lícitamente, no es sólo una recompensa a la inversión, al esfuerzo y al riesgo asumidos por el empresario, sino que también es un factor esencial para que las empresas sigan en el  mercado e incorporen nuevas inversiones al tejido industrial y social de las naciones.
            Describir beneficios tangibles e intangibles*
            Beneficios tangibles: son de fácil cuantificación, generalmente están relacionados con la reducción de recursos o talento humano.
            Beneficios intangibles: no son fácilmente cuantificables y están relacionados con elementos o mejora en otros procesos de la organización.
>
            Ejemplo de beneficios:

            - Mejoras en la eficiencia del área bajo estudio.
            - Reducción de personal.
            - Reducción de futuras inversiones y costos.
            - Disponibilidad del recurso humano.
            - Mejoras en planeación, control y uso de recursos.
            - Suministro oportuno de insumos para las operaciones.
            - Cumplimiento de requerimientos gubernamentales.
            - Toma acertada de decisiones.
            - Disponibilidad de información apropiada.
            - Aumento en la confiabilidad de la información.
            - Mejor servicio al cliente externo e interno
            - Logro de ventajas competitivas.
            - Valor agregado a un producto de la compañía.
        
        5.1.2. Criterios de Inversión

            5.1.2.1. Relación Beneficio/Costo (B/C)

                En base a los costos y beneficios identificados se evalúa si es factible el desarrollo del proyecto. 
                Si se presentan varias alternativas de solución se evaluará cada una de ellas para determinar la mejor solución desde el punto de vista del > retorno de la inversión
                El B/C si es mayor a uno, se acepta el proyecto; si el B/C es igual a uno es indiferente aceptar o rechazar el proyecto y si el B/C es menor a uno se rechaza el proyecto

            5.1.2.2. Valor Actual Neto (VAN)
            
                Valor actual de los beneficios netos que genera el proyecto. Si el VAN es mayor que cero, se acepta el proyecto; si el VAN es igual a cero es indiferente aceptar o rechazar el proyecto y si el VAN es menor que cero se rechaza el proyecto

            5.1.2.3 Tasa Interna de Retorno (TIR)*
                Es la tasa porcentual que indica la rentabilidad promedio anual que genera el capital invertido en el proyecto. Si la TIR es mayor que el costo de oportunidad se acepta el proyecto, si la TIR es igual al costo de oportunidad es indiferente aceptar o rechazar el proyecto, si la TIR es menor que el costo de oportunidad se rechaza el proyecto

                Costo de oportunidad de capital (COK) es la tasa de interés que podría haber obtenido con el dinero invertido en el proyecto

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

6. <span id="_Toc52661357" class="anchor"></span>**Conclusiones**

Explicar los resultados del análisis de factibilidad que nos indican si el proyecto es viable y factible.
