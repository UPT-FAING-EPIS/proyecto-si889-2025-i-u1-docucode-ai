<center>

[comment]: <img src="./media/media/image1.png" style="width:1.088in;height:1.46256in" alt="escudo.png" />

![./media/media/image1.png](./media/logo-upt.png)

**UNIVERSIDAD PRIVADA DE TACNA**

**FACULTAD DE INGENIERIA**

**Escuela Profesional de Ingeniería de Sistemas**

**Proyecto *DocuCode-AI: Sistema Web para la evaluacion de codigo y generacion de digramas UML***

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
**DocuCode-AI: Sistema Web para la evaluacion de codigo y generacion de digramas UML**  
    1.2. Duración del proyecto
El desarrollo del proyecto se estima en **4 meses**, incluyendo análisis, desarrollo, pruebas e implementación.  

    1.3. Descripción

DocuCode-AI es un sistema web basado en Inteligencia Artificial diseñado para facilitar la evaluación y documentación del código fuente en entornos educativos. Su propósito principal es ayudar a los docentes universitarios a analizar código de manera eficiente, proporcionando comentarios automáticos, generación de diagramas UML y evaluación de calidad del código.  
La solución responde a una problemática común en los entornos académicos: el alto volumen de prácticas de programación que deben ser revisadas manualmente, lo que implica un proceso lento, subjetivo y repetitivo. Al integrar capacidades automatizadas y visuales, DocuCode-AI busca reducir significativamente el tiempo de evaluación y mejorar la retroalimentación entregada a los estudiantes.

La aplicación se desarrolla en PHP utilizando el patrón de diseño Fachaday herramientas como PlantUML para diagramas y Terraform para definir y simular la infraestructura de despliegue en la nube.


    1.4. Objetivos

        1.4.1 Objetivo general
        Desarrollar un sistema web basado en IA que permita a los docentes evaluar y documentar código de manera                     automatizada, mejorando la calidad y eficiencia del proceso de revisión.  

        1.4.2 Objetivos Específicos
        - Implementar un motor de IA para la generación de comentarios en el código.  
        - Incorporar herramientas para la creación automática de diagramas UML.  
        - Evaluar la calidad del código, identificando errores, código duplicado y malas prácticas.  

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

2. <span id="_Toc52661347" class="anchor"></span>**Riesgos**

- **Dependencia de servicios externos (API de OpenAI):**  
  El sistema depende de la disponibilidad y costos de la API de OpenAI para el análisis del código. Un cambio en los precios, límites de uso o políticas de acceso puede comprometer el funcionamiento continuo del sistema.

- **Seguridad de la información:**  
  DocuCode-AI procesa archivos fuente de estudiantes que podrían contener información sensible. Cualquier vulnerabilidad en el manejo de estos datos podría generar filtraciones no autorizadas.

- **Compatibilidad con múltiples lenguajes de programación:**  
  La precisión del análisis depende de la correcta interpretación de diferentes estructuras de código. Lenguajes poco comunes o sintaxis complejas pueden reducir la efectividad del sistema.

- **Conectividad a internet:**  
  Dado que la plataforma se apoya en procesamiento en la nube (API y generación de diagramas), una conexión inestable podría afectar negativamente la experiencia del usuario.

- **Curva de aprendizaje de herramientas:**  
  El uso de tecnologías como Terraform o PlantUML puede requerir tiempo adicional de capacitación, especialmente si el equipo no las ha utilizado previamente.

- **Escalabilidad futura del sistema:**  
  En caso de alta demanda por parte de usuarios concurrentes (por ejemplo, múltiples docentes analizando a la vez), se requerirá escalar la infraestructura, lo que implicará mayor inversión.



<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

3. <span id="_Toc52661348" class="anchor"></span>**Análisis de la Situación actual**

    3.1. Planteamiento del problema

           En las instituciones educativas, especialmente en carreras de ingeniería y programación, los docentes enfrentan serias dificultades al momento de revisar prácticas y proyectos de código fuente. Este proceso suele ser manual, consume mucho tiempo, es subjetivo y propenso a errores. La falta de documentación adecuada en los archivos entregados por los estudiantes complica la comprensión del código, lo que puede derivar en evaluaciones inconsistentes o poco claras.

            Además, debido al volumen de trabajos que se deben revisar y a la diversidad de lenguajes y estructuras de programación utilizados, se vuelve inviable realizar una evaluación profunda y personalizada sin herramientas de automatización.

            En este contexto, surge la necesidad de implementar un sistema web inteligente que permita automatizar las tareas de análisis, documentación y retroalimentación de código fuente, facilitando así la labor docente y mejorando la calidad de la enseñanza.

    3.2. Consideraciones de hardware y software

   - **Hardware:** Servidor en la nube (Elastika).  
            o	2 vCPUs
            o	2 GB de RAM
            o	40 GB SSD
            o	1 IP pública
            o	Tráfico ilimitado
            o	Soporte autogestionado
            o	Costo aproximado: S/ 20.00 mensuales / S/ 100.00 anuales

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

### 4.2 Factibilidad Económica  

El análisis económico busca evaluar si los costos del proyecto son sostenibles en relación con los beneficios que ofrece.  

#### 4.2.1 Costos Generales  

| Concepto                         | Costo Estimado                          |
|----------------------------------|------------------------------------------|
| Servidor en la nube (Elastika VPS) | S/ 20.00 mensuales / S/ 100.00 anuales |
| Dominio web                      | S/ 12.00 anuales                         |
| Certificado SSL (Let's Encrypt) | S/ 0.00                                  |
| OpenAI API (GPT-4)              | ~S/ 20.00 mensuales (estimado por uso)  |
| **Total estimado anual**        | **S/ 150.00 – S/ 250.00**                |

#### 4.2.2 Costos operativos durante el desarrollo  
- No se requieren oficinas físicas, ya que el equipo trabajará de forma remota.  
- Uso de herramientas gratuitas para desarrollo: **VS Code, GitHub, Postman**.  

#### 4.2.3 Costos del ambiente  
- Servidor en la nube con Docker y balanceador de carga.  
- Conexión estable a internet.  

#### 4.2.4 Costos de personal  

| Rol                      | Horas estimadas | Costo estimado                 |
|--------------------------|------------------|--------------------------------|
| Estudiante – Backend     | 300 horas        | S/ 0.00 (Desarrollo académico) |
| Estudiante – Frontend    | 250 horas        | S/ 0.00 (Desarrollo académico) |
| Estudiante – Integración IA | 200 horas    | S/ 0.00 (Desarrollo académico) |


#### 4.2.5 Costos totales del desarrollo del sistema  
El costo total del proyecto durante su etapa de desarrollo y primer año de operación se estima entre **S/ 150.00 y S/ 250.00**, cubriendo infraestructura, dominio y consumo promedio de la API de OpenAI. Este monto es asumible dentro de un entorno académico.  

**Conclusión:** El proyecto es económicamente viable con un presupuesto accesible.

---

#### 4.2.6 Análisis Económico utilizando Terraform

Como parte del análisis económico del proyecto DocuCode-AI, se desarrolló un archivo de infraestructura como código (`main.tf`) utilizando **Terraform**, con el objetivo de automatizar el cálculo de los costos anuales del sistema.

Este enfoque permite:
- Simular y visualizar automáticamente los costos mensuales y anuales del sistema.
- Mantener la trazabilidad de la infraestructura y el gasto asociado.
- Promover el uso de herramientas DevOps dentro del desarrollo académico.

El archivo `main.tf` considera:
- Costo mensual del VPS (Elastika).
- Consumo estimado mensual de la API de OpenAI.
- Registro del dominio y certificado SSL.

> Este archivo se encuentra disponible en el repositorio del proyecto, dentro de la carpeta `/infraestructura/`.

**Ejemplo de salida al ejecutar el archivo:**

```bash
Costo mensual total (S/.) = 40
Costo anual total (S/.)   = 492
```

### 4.3 Factibilidad Operativa  

DocuCode-AI representa una solución tecnológica viable desde el punto de vista operativo. El sistema ofrece múltiples beneficios que mejoran significativamente el proceso de evaluación de código en instituciones educativas, reduciendo la carga docente y facilitando la comprensión del software entregado por los estudiantes.

#### Beneficios del producto

- Evaluación automática del código mediante IA.
- Generación de diagramas UML de manera visual e inmediata.
- Interfaz web accesible, multiplataforma y de fácil uso.
- Reducción de errores humanos al evaluar grandes volúmenes de prácticas.
- Historial de análisis por usuario autenticado.

#### Beneficios del producto
•	Evaluación automática del código mediante IA, ahorrando tiempo de revisión.
•	Generación de diagramas UML de manera visual e inmediata.
•	Interfaz web accesible, multiplataforma y de fácil uso.
•	Reducción de errores humanos al evaluar grandes volúmenes de prácticas.
•	Historial de análisis por usuario autenticado, facilitando el seguimiento.
#### Capacidad del cliente (docente/universidad)
•	Los docentes poseen el conocimiento necesario para interpretar los resultados del sistema.
•	El sistema no requiere conocimientos técnicos para su uso, más allá de un manejo básico de plataformas web.
•	La universidad puede mantener el sistema funcionando mediante un VPS accesible y autogestionado, con mínimo soporte técnico.
#### Impacto en los usuarios
•	Aumenta la eficiencia y precisión en la evaluación del código fuente.
•	Mejora la retroalimentación a los estudiantes.
•	Promueve la calidad y buenas prácticas de programación en los entornos de enseñanza.
#### Lista de interesados
•	Docentes: Usuarios directos del sistema.
•	Estudiantes: Beneficiarios de los análisis y retroalimentación.
•	Administradores de sistemas: Encargados del soporte técnico.
•	Universidad: Institución que promueve la innovación educativa.
Conclusión: El sistema es operativamente viable, accesible y fácil de implementar.


---

### 4.4 Factibilidad Legal  

En la evaluación legal del proyecto **DocuCode-AI**, no se han identificado conflictos con normativas locales ni internacionales. El sistema cumple con los principios básicos de protección de datos y seguridad digital requeridos para aplicaciones web modernas.

**Consideraciones legales:**
- **Protección de datos personales:** Se implementará cifrado SSL para garantizar la confidencialidad del código subido por los usuarios.
- **Conducta de negocio y licenciamiento:** El sistema será liberado bajo una licencia de software libre para fines académicos, con posibilidad de uso comercial futuro bajo términos claros.
- **Cumplimiento normativo:** El sistema puede adaptarse a marcos legales como el GDPR en caso de implementarse en otros países.

**Conclusión:** DocuCode-AI es legalmente viable. No infringe ninguna norma local o internacional aplicable.

---

### 4.5 Factibilidad Social  

El proyecto **DocuCode-AI** tiene un impacto social positivo, al integrarse en el ámbito académico y promover la innovación en la enseñanza de la programación.

**Evaluación social y cultural:**
- **Códigos de ética y conducta:** El sistema respeta los principios de equidad educativa.
- **Clima político y educativo:** Se alinea con los objetivos de mejora educativa promovidos por instituciones públicas y privadas.
- **Inclusión:** Permite el uso de tecnologías innovadoras a docentes con poca experiencia técnica.

**Conclusión:** Impacto favorable, promueve la transformación digital educativa.

---

### 4.6 Factibilidad Ambiental  

El sistema tiene bajo impacto ambiental al operar completamente en la nube, evitando el uso de infraestructura física local.

**Consideraciones ambientales:**
- **Menor uso de papel:** Documentación digital generada automáticamente.
- **Infraestructura digital remota:** No se requieren equipos físicos locales.
- **Bajo consumo energético:** Se utiliza un VPS compartido optimizado.

**Conclusión:** Ambientalmente sostenible y alineado con prácticas responsables.

---

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

5. <span id="_Toc52661356" class="anchor"></span>**Análisis Financiero**

    El plan financiero se ocupa del análisis de ingresos y gastos asociados a cada proyecto, desde el punto de vista del instante temporal en que se producen. Su misión fundamental es detectar situaciones financieramente inadecuadas.
    Se tiene que estimar financieramente el resultado del proyecto.

    ### 5.1. Justificación de la Inversión

        5.1.1. Beneficios del Proyecto

            **Tangibles:**
            - Reducción del tiempo docente.
            - Disminución de errores de evaluación.
            - Eliminación del uso de papel.
            - Ahorro en contratación de apoyo académico.

            **Intangibles:**
            - Mejora en calidad educativa.
            - Retroalimentación en tiempo real.
            - Mayor confiabilidad en evaluaciones.
            - Alineamiento con tendencias digitales.

        
     #### 5.1.2. Criterios de Inversión

            5.1.2.1. Relación Beneficio/Costo (B/C)

                | Indicador | Resultado | Criterio                  |
                |----------|-----------|---------------------------|
                | B/C      | 16.24     | B/C > 1 → Proyecto viable |

            5.1.2.2. Valor Actual Neto (VAN)
            
                | Indicador | Resultado       | Criterio                  |
                |----------|------------------|---------------------------|
                | VAN      | S/ 18,558.64     | VAN > 0 → Proyecto viable |

             5.1.2.3 Tasa Interna de Retorno (TIR)*
                | Indicador | Resultado | Criterio                  |
                |----------|-----------|---------------------------|
                | TIR      | 76.45%    | TIR > COK → Proyecto viable |

<div style="page-break-after: always; visibility: hidden">\pagebreak</div>

6. <span id="_Toc52661357" class="anchor"></span>**Conclusiones**

El análisis de factibilidad realizado para el proyecto DocuCode-AI: Sistema Web para la Evaluación de Código y Generación de Diagramas UML demuestra que su desarrollo e implementación son plenamente viables desde múltiples enfoques.
Desde el punto de vista técnico, el sistema puede ser construido utilizando tecnologías ampliamente conocidas (PHP, Python, MySQL, OpenAI API, PlantUML), sobre una infraestructura de nube asequible como Elastika, lo cual garantiza su funcionalidad, escalabilidad y compatibilidad.
En términos económicos, el proyecto requiere una inversión inicial baja, estimada entre S/ 200.00 a S/ 250.00 anuales, principalmente en servicios de nube y APIs. A cambio, ofrece beneficios académicos que superan los S/ 3,600.00 por año, generando una relación Beneficio/Costo de 16.24, un VAN de S/ 18,558.64 y una TIR del 76.45%, indicadores que lo posicionan como altamente rentable desde una perspectiva institucional y educativa.
En cuanto a la factibilidad operativa, se concluye que el sistema puede ser adoptado fácilmente por docentes universitarios sin requerir una curva de aprendizaje elevada, gracias a su interfaz amigable y accesible vía navegador.
A nivel legal, social y ambiental, no se identifican barreras que impidan su implementación. Al contrario, el sistema promueve prácticas sostenibles, fomenta la digitalización de la enseñanza y respeta la privacidad de los datos mediante cifrado SSL.
En resumen, el proyecto DocuCode-AI es técnica, económica, operativa, legal, social y ambientalmente viable. Su implementación representa una mejora significativa en la evaluación del aprendizaje de programación, aportando eficiencia, objetividad y valor pedagógico al proceso educativo.


**Conclusión general:** Proyecto altamente recomendable y beneficioso para la educación universitaria en programación.

