---
marp: true
theme: default
style: |
  section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    font-family: 'Arial', sans-serif;
  }
  section.portada {
    background: linear-gradient(135deg, #0f2027 0%, #203a43 50%, #2c5364 100%);
  }
  section.funcionalidades {
    background: linear-gradient(135deg, #654ea3 0%, #eaafc8 100%);
  }
  section.objetivos {
    background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  }
  section.cierre {
    background: linear-gradient(135deg, #c33764 0%, #1d2671 100%);
  }
  h1 {
    color: #fff;
    font-size: 2.5em;
    text-align: center;
    margin-bottom: 0.5em;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
  }
  h2 {
    color: #fff;
    border-bottom: 2px solid rgba(255,255,255,0.3);
    padding-bottom: 0.3em;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
  }
  .lead {
    font-size: 1.2em;
  }
  .footer {
    position: absolute;
    bottom: 20px;
    right: 20px;
    font-size: 0.8em;
    color: rgba(255,255,255,0.7);
  }
  .feature-card {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(5px);
    border: 1px solid rgba(255,255,255,0.2);
  }
paginate: true
---

<!-- Portada -->
<!-- _class: portada -->
#  <img src="https://cdn-icons-png.flaticon.com/512/2103/2103633.png" width="80" style="vertical-align:middle; filter: drop-shadow(0 0 5px rgba(0,0,0,0.3))"> DocuCode-AI

### Sistema inteligente para evaluación y documentación de código

.footer[![Logo Universidad](https://via.placeholder.com/100x30/ffffff/203a43?text=TU+UNIVERSIDAD)]

---

<!-- Descripción -->
#  ¿Qué es DocuCode-AI?

<div style="display: flex; align-items: center; gap: 30px;">
  <div style="flex: 1;">
    <ul style="font-size: 1.1em; list-style-type: none; padding-left: 0;">
      <li>✅ Sistema web basado en IA para análisis de código</li>
      <li class="fragment">🎓 Herramienta para docentes universitarios</li>
      <li class="fragment">⚡ Automatiza procesos de revisión</li>
      <li class="fragment">📄 Genera documentación profesional</li>
    </ul>
  </div>
  <div style="flex: 1; text-align: center;">
    <img src="https://cdn-icons-png.flaticon.com/512/6213/6213731.png" width="300" style="filter: drop-shadow(0 0 10px rgba(0,0,0,0.2))">
  </div>
</div>

---

<!-- Características principales -->
<!-- _class: funcionalidades -->
#  <img src="https://cdn-icons-png.flaticon.com/512/2881/2881142.png" width="50" style="vertical-align:middle"> Funcionalidades Clave

<div class="features-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; margin-top: 30px;">
  <div class="feature-card" style="padding: 20px; border-radius: 15px;">
    <h3>📝 Comentarios Automáticos</h3>
    <p>Generación inteligente de comentarios en código</p>
  </div>
  <div class="feature-card" style="padding: 20px; border-radius: 15px;">
    <h3>📊 Diagramas UML</h3>
    <p>Creación automática de diagramas de clases</p>
  </div>
  <div class="feature-card" style="padding: 20px; border-radius: 15px;">
    <h3>🔍 Análisis de Calidad</h3>
    <p>Detección de errores y malas prácticas</p>
  </div>
  <div class="feature-card" style="padding: 20px; border-radius: 15px;">
    <h3>📈 Evaluación Automatizada</h3>
    <p>Asistente para calificación docente</p>
  </div>
  <div class="feature-card" style="padding: 20px; border-radius: 15px; grid-column: span 2;">
    <h3>♻️ Detección de Código Duplicado</h3>
    <p>Identificación automática de fragmentos repetidos</p>
  </div>
</div>

---

<!-- Objetivo General -->
<!-- _class: objetivos -->
#  <img src="https://cdn-icons-png.flaticon.com/512/3281/3281289.png" width="50" style="vertical-align:middle"> Objetivo Principal


<div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(5px); padding: 30px; border-radius: 15px; max-width: 800px; margin: 0 auto; border: 1px solid rgba(255,255,255,0.2);">
  <p style="font-size: 1.3em; line-height: 1.6;">
    <strong>Desarrollar un sistema web basado en IA</strong> que automatice la evaluación y documentación de código fuente, mejorando la eficiencia en el proceso de revisión académica.
  </p>
</div>


---

<!-- Objetivos Específicos -->
<!-- _class: objetivos -->
#  <img src="https://cdn-icons-png.flaticon.com/512/3132/3132693.png" width="50" style="vertical-align:middle"> Metas Específicas


<div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px; text-align: left; max-width: 900px; margin: 0 auto;">
  <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
    <h3>🤖 Motor de IA</h3>
    <p>Generación automática de comentarios</p>
  </div>
  <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
    <h3>📐 Herramientas UML</h3>
    <p>Diagramas de clases automáticos</p>
  </div>
  <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
    <h3>🔎 Evaluación de Calidad</h3>
    <p>Detección de errores y malas prácticas</p>
  </div>
  <div style="background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px;">
    <h3>🏫 Integración Educativa</h3>
    <p>Compatibilidad con entornos académicos</p>
  </div>
</div>


---

<!-- Cierre -->
<!-- _class: cierre -->
#  <img src="https://cdn-icons-png.flaticon.com/512/3159/3159060.png" width="50" style="vertical-align:middle"> ¡Gracias!


