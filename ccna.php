
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen de Preguntas</title>
    <!-- Agregar Bootstrap desde CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .question-container {
            margin-bottom: 1rem;
        }
        .answer-feedback {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        .correct {
            color: green;
        }
        .incorrect {
            color: red;
        }
        .options label {
            display: block;
            margin-bottom: 0.5rem;
        }
        figure {
            margin: 0 auto;
        }
        .wp-caption-text {
            font-size: 0.9rem;
            color: #6c757d;
        }
        .card-title {
          font-size: 1.25rem; /* Ajusta el tamaño del texto según lo necesites */
        }
        pre {
          margin-top: 10px;
          background-color: #333;
          color: white;
          padding: 10px;
          border-radius: 5px;
          overflow-x: auto;
          font-family: 'Courier New', Courier, monospace;
      }
      #contadores {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #444;
            color: white;
            padding: 10px;
            border-radius: 0 0 10px 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            font-family: Arial, sans-serif;
            font-size: 16px;
            z-index: 1000;
            text-align: center;
        }

        #contadores.small {
            width: 100%;
            height: 50px;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .contador-mini {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #444;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        @media (max-width: 600px) {
            #contadores {
                height: 50px;
            }

            #contadores.small {
                width: 100%;
                font-size: 12px;
            }
        }
    
    </style>
</head>
<body>
<div id='contadores' class='small'>
            <div>A: 0 F: 0 T: 0</div>
          </div>

    <div id='test-container' class='container mt-5'>
            <!-- Aquí iría el contenido de las preguntas -->
            <p>Contenido de la página - Aquí irían las preguntas del test</p>
          </div>"
  
  <script>
    const preguntas = [
  // Pregunta 1
  {
    id: "q1",
    texto: "1. ABCTech está investigando el uso de la automatización para algunos de sus productos. Para controlar y probar estos productos, los programadores requieren Windows, Linux y MAC OS en sus computadoras. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
      { valor: "A", texto: "Redes definidas por software" },
      { valor: "B", texto: "Virtualización", correcta: true },
      { valor: "C", texto: "Centro de datos" },
      { valor: "D", texto: "Cisco ACI" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  
  // Pregunta 2
  {
    id: "q2",
    texto: "2. Consulte la ilustración. ¿Cuál es el costo de OSPF para llegar a West LAN 172.16.2.0/24 desde East?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/49.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/49.png 464w, https://examenredes.com/wp-content/uploads/2021/09/49-300x227.png 300w",
      sizes: "(max-width: 464px) 100vw, 464px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P49"
    },
    opciones: [
      { valor: "A", texto: "782" },
      { valor: "B", texto: "74" },
      { valor: "C", texto: "128" },
      { valor: "D", texto: "65", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 3
  {
    id: "q3",
    texto: "3. Consulte la ilustración. Si el SWITCH se reinicia y todos los router tienen que restablecer las adyacencias OSPF, ¿qué routers se convertirán en los nuevos DR y BDR?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/93-i255837v1n1_255837.gif",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/93-i255837v1n1_255837.gif 523w, https://examenredes.com/wp-content/uploads/2021/09/93-i255837v1n1_255837-300x227.gif 300w",
      sizes: "(max-width: 523px) 100vw, 523px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P93"
    },
    opciones: [
      { valor: "A", texto: "El router R3 se convertirá en el DR y el router R1 se convertirá en el BDR", correcta: true },
      { valor: "B", texto: "El router R4 se convertirá en el DR y el router R3 se convertirá en el BDR" },
      { valor: "C", texto: "El router R1 se convertirá en el DR y el router R2 se convertirá en el BDR" },
      { valor: "D", texto: "El router R3 se convertirá en el DR y el router R2 se convertirá en el BDR" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 4
  {
    id: "q4",
    texto: "4. ¿Cuál es la razón de usar el comando <em>ip ospf priority</em> cuando el protocolo de enrutamiento OSPF está en uso?",
    opciones: [
      { valor: "A", texto: "Para proporcionar una puerta trasera en la que se establezca la conectividad durante el proceso de convergencia" },
      { valor: "B", texto: "Para activar el proceso OSPF vecino" },
      { valor: "C", texto: "Para influir en el proceso de elección DR/BDR", correcta: true },
      { valor: "D", texto: "Para simplificar y acelerar el proceso de convergencia" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 5
  {
    id: "q5",
    texto: "5. Consulte la ilustración. Un diseñador web llama para informar que no se puede conectar con el servidor web web-s1.cisco.com a través de un navegador web. El técnico usa las utilidades de la línea de comando para verificar el problema y para comenzar con el proceso de resolución de problemas. ¿Cuáles son los dos hechos que se pueden determinar sobre el problema? (Elija dos opciones).",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/20-2022-10-15_105735.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2022/10/20-2022-10-15_105735.jpg 668w, https://examenredes.com/wp-content/uploads/2022/10/20-2022-10-15_105735-300x149.jpg 300w",
      sizes: "(max-width: 668px) 100vw, 668px",
      alt: "Imagen ilustrativa de la resolución de problemas"
    },
    opciones: [
      { valor: "A", texto: "Un enrutador no está funcionando entre el host de origen y el servidor web-s1.cisco.com." },
      { valor: "B", texto: "Se puede alcanzar el servidor Web en 192.168.0.10 desde el host de origen.", correcta: true },
      { valor: "C", texto: "Existe un problema con el software del servidor Web en web-s1.cisco.com." },
      { valor: "D", texto: "Está desactivada la puerta de enlace predeterminada entre el host de origen y el servidor en 192.168.0.10." },
      { valor: "E", texto: "El DNS no puede resolver la dirección IP para el servidor web-s1.cisco.com.", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "E"]
  },

  // Pregunta 6
  {
    id: "q6",
    texto: "6. Consulte la ilustración. Un administrador de redes configuró OSPFv2 en los dos routers de Cisco, pero la PC1 no puede conectarse a la PC2. ¿Cuál es el problema más probable?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/174-i285134v1n1_285134.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/174-i285134v1n1_285134.png 556w, https://examenredes.com/wp-content/uploads/2021/09/174-i285134v1n1_285134-300x216.png 300w",
      sizes: "(max-width: 556px) 100vw, 556px",
      alt: "Imagen de configuración OSPFv2"
    },
    opciones: [
      { valor: "A", texto: "La interfaz Fa0/0 está configurada como una interfaz pasiva en el router R2." },
      { valor: "B", texto: "La interfaz Fa0/0 no se activó para OSPFv2 en el router R2.", correcta: true },
      { valor: "C", texto: "La interfaz S0/0 está configurada como una interfaz pasiva en el router R2." },
      { valor: "D", texto: "La interfaz s0/0 no se activó para el protocolo OSPFv2 en el router R2." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 7
  {
    id: "q7",
    texto: "7. ¿Qué paso en el proceso de enrutamiento del estado del vínculo se describe por un router que inunda el estado del vínculo y la información de costo sobre cada enlace conectado directamente?",
    opciones: [
      { valor: "A", texto: "Intercambio de anuncios de estado de enlace", correcta: true },
      { valor: "B", texto: "Inyectando la ruta predeterminada" },
      { valor: "C", texto: "Seleccionando la ID del router" },
      { valor: "D", texto: "Construye la tabla de topología" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 8
  {
    id: "q8",
    texto: "8. Consulte la ilustración. ¿Desde cuál de las siguientes ubicaciones cargó el IOS este router?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/75-i208382v1n1_208382.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/75-i208382v1n1_208382.png 700w, https://examenredes.com/wp-content/uploads/2021/09/75-i208382v1n1_208382-300x171.png 300w",
      sizes: "(max-width: 700px) 100vw, 700px",
      alt: "Imagen del IOS cargado en router"
    },
    opciones: [
      { valor: "A", texto: "ROM" },
      { valor: "B", texto: "NVRAM" },
      { valor: "C", texto: "Memoria flash", correcta: true },
      { valor: "D", texto: "Servidor TFTP" },
      { valor: "E", texto: "RAM" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  
  // Pregunta 9
  {
    id: "q9",
    texto: "9. ¿Qué tipo de servidor se utilizaría para mantener un registro histórico de los mensajes de los dispositivos de red supervisados?",
    opciones: [
      { valor: "A", texto: "De autenticación" },
      { valor: "B", texto: "De impresión" },
      { valor: "C", texto: "DHCP" },
      { valor: "D", texto: "Syslog", correcta: true },
      { valor: "E", texto: "DNS" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  
  // Pregunta 10
  {
    id: "q10",
    texto: "10. ¿Cuáles son las tres ventajas de utilizar direcciones IP privadas y NAT? (Elija tres opciones).",
    opciones: [
      { valor: "A", texto: "Conservar las direcciones IP públicas registradas", correcta: true },
      { valor: "B", texto: "Reducir el uso de la CPU en los routers del cliente" },
      { valor: "C", texto: "Mejorar el rendimiento del router que está conectado a Internet" },
      { valor: "D", texto: "Crear direcciones IP públicas múltiples" },
      { valor: "E", texto: "Permitir la expansión de la LAN sin direcciones IP públicas adicionales", correcta: true },
      { valor: "F", texto: "Ocultar el direccionamiento de la LAN privada de los dispositivos externos conectados a Internet", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "E", "F"]
  },
  // Pregunta 11
  {
    id: "q11",
    texto: "11. ¿Qué dos afirmaciones hacen referencia a características de un virus? (Elija dos opciones).",
    opciones: [
      { valor: "A", texto: "Un virus se autorreplica atacando de manera independiente las vulnerabilidades en las redes." },
      { valor: "B", texto: "Por lo general, un virus requiere la activación del usuario final.", correcta: true },
      { valor: "C", texto: "El virus proporciona datos confidenciales al atacante, como contraseñas." },
      { valor: "D", texto: "Un virus tiene una vulnerabilidad habilitante, un mecanismo de propagación y una carga útil." },
      { valor: "E", texto: "Un virus puede estar inactivo y luego activarse en un momento o en una fecha en particular.", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "E"]
  },

  // Pregunta 12
  {
    id: "q12",
    texto: "12. ¿Qué es una característica de una red OSPF de área única?",
    opciones: [
      { valor: "A", texto: "Todos los router tienen la misma tabla de enrutamiento." },
      { valor: "B", texto: "Todos los routers están en el área troncal.", correcta: true },
      { valor: "C", texto: "Todos los routers comparten una base de datos de reenvío común." },
      { valor: "D", texto: "Todos los router tienen la misma tabla de vecinos." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 13
  {
    id: "q13",
    texto: "13. ¿Cuál de estas afirmaciones describe una característica de las ACL IPv4 estándar?",
    opciones: [
      { valor: "A", texto: "Filtran el tráfico según las direcciones IP de origen únicamente.", correcta: true },
      { valor: "B", texto: "Se pueden crear con un número pero no con un nombre." },
      { valor: "C", texto: "Se pueden configurar para filtrar el tráfico según las direcciones IP de origen y los puertos de origen." },
      { valor: "D", texto: "Se configuran en el modo de configuración de interfaz." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 14
  {
    id: "q14",
    texto: "14. ¿Cuáles son las dos situaciones que ilustran ejemplos de VPN de acceso remoto? (Elija dos).",
    opciones: [
      { valor: "A", texto: "Un empleado que trabaja desde su hogar usa software de cliente VPN en una computadora portátil para conectarse a la red de la empresa.", correcta: true },
      { valor: "B", texto: "Un agente de ventas móvil se conecta a la red de la empresa mediante la conexión a Internet en un hotel.", correcta: true },
      { valor: "C", texto: "Un fabricante de juguetes tiene una conexión VPN permanente a uno de sus proveedores de piezas." },
      { valor: "D", texto: "Todos los usuarios en una sucursal grande pueden acceder a los recursos de la empresa a través de una única conexión VPN." },
      { valor: "E", texto: "Una sucursal pequeña con tres empleados tiene un Cisco ASA que se utiliza para crear una conexión VPN a la oficina central." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B"]
  },

  // Pregunta 15
  {
    id: "q15",
    texto: "15. ¿En qué paso de la recolección de síntomas el ingeniero de red determina si el problema está en la capa de núcleo, de distribución o de acceso de la red?",
    opciones: [
      { valor: "A", texto: "Determinar la propiedad." },
      { valor: "B", texto: "Registrar los síntomas." },
      { valor: "C", texto: "Determinar los síntomas." },
      { valor: "D", texto: "Reducir el ámbito.", correcta: true },
      { valor: "E", texto: "Recopilar información." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 16
  {
    id: "q16",
    texto: "16. ¿Cuál enunciado describe una VPN?",
    opciones: [
      { valor: "A", texto: "Una VPN utiliza conexiones lógicas para crear redes públicas a través de Internet." },
      { valor: "B", texto: "Una VPN utiliza conexiones físicas dedicadas para transferir datos entre usuarios remotos." },
      { valor: "C", texto: "Una VPN utiliza software de virtualización de código abierto para crear un túnel a través del Internet." },
      { valor: "D", texto: "Una VPN utiliza conexiones virtuales para crear una red privada a través de una red pública.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 17
  {
    id: "q17",
    texto: "17. ¿Cuáles son los dos elementos que un administrador de redes debe modificar en un router para realizar la recuperación de la contraseña? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "El archivo de imagen del sistema" },
      { valor: "B", texto: "ROM del sistema" },
      { valor: "C", texto: "El archivo de configuración de inicio", correcta: true },
      { valor: "D", texto: "El valor del registro de configuración", correcta: true },
      { valor: "E", texto: "El sistema de archivos NVRAM" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["C", "D"]
  },

  // Pregunta 18
  {
    id: "q18",
    texto: "18. Haga coincidir el término con el componente http://www.buycarsfromus.com/2020models/ford/suv.html#Escape vínculo web. (No se utilizan todas las opciones).",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/2021-11-01_100509.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_100509.jpg 648w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_100509-300x262.jpg 300w",
      sizes: "(max-width: 648px) 100vw, 648px",
      alt: "Enterprise Networking, Security, and Automation ( Versión 7.00) - ENSA Final Exam"
    },
    opciones: [
      { valor: "A", texto: "Término" },
      { valor: "B", texto: "Componente" },
      { valor: "C", texto: "Vinculo web" }
    ],
    tipo: "matching",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 19
  {
    id: "q19",
    texto: "19. ¿Qué tipo de red utiliza una infraestructura común para transmitir señales de voz, datos y video?",
    opciones: [
      { valor: "A", texto: "Converger", correcta: true },
      { valor: "B", texto: "Administrada" },
      { valor: "C", texto: "Conmutada" },
      { valor: "D", texto: "Sin fronteras" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 20
  {
    id: "q20",
    texto: "20. ¿Qué tipo de paquete OSPF utiliza un router para detectar router vecinos y establecer adyacencia de vecinos?",
    opciones: [
      { valor: "A", texto: "Descripción de la base de datos (DBD)" },
      { valor: "B", texto: "Solicitud de link-state (LSR)" },
      { valor: "C", texto: "Saludo", correcta: true },
      { valor: "D", texto: "Actualizaciones de estado de enlace" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
      // Pregunta 21
  {
    id: "q21",
    texto: "21. ¿Por qué QoS es un tema importante en una red convergente que combina comunicaciones de voz, video y datos?",
    opciones: [
      { valor: "A", texto: "Las comunicaciones de voz y video son más sensibles a la latencia.", correcta: true },
      { valor: "B", texto: "Las comunicaciones de datos deben tener la primera prioridad." },
      { valor: "C", texto: "Las comunicaciones de datos son sensibles a la fluctuación." },
      { valor: "D", texto: "Los equipos heredados no pueden transmitir voz y video sin QoS." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  
  // Pregunta 22
  {
    id: "q22",
    texto: "22. Consulte la ilustración. Si no se configuró manualmente ninguna ID de router, ¿qué usaría el router R1 como su ID de router OSPF?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/162-2020-06-28_210428.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/162-2020-06-28_210428.jpg 475w, https://examenredes.com/wp-content/uploads/2021/09/162-2020-06-28_210428-300x183.jpg 300w",
      sizes: "(max-width: 475px) 100vw, 475px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P162"
    },
    opciones: [
      { valor: "A", texto: "10.0.0.1" },
      { valor: "B", texto: "10.1.0.1" },
      { valor: "C", texto: "192.168.1.100", correcta: true },
      { valor: "D", texto: "209.165.201.1" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 23
  {
    id: "q23",
    texto: "23. ¿Qué es una WAN?",
    opciones: [
      { valor: "A", texto: "Una infraestructura de red que proporciona acceso a otras redes a través de un área geográfica extensa", correcta: true },
      { valor: "B", texto: "Una infraestructura de red que abarca un área física limitada, como una ciudad" },
      { valor: "C", texto: "Una infraestructura de red diseñada para proporcionar almacenamiento, recuperación y replicación de datos" },
      { valor: "D", texto: "Una infraestructura de red que proporciona acceso en un área geográfica pequeña" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 24
  {
    id: "q24",
    texto: "24. ¿Qué conjunto de entradas de control de acceso permitiría a todos los usuarios en la red 192.168.10.0/24 tener acceso a un servidor web que se encuentra en 172.17.80.1, pero no permitiría que utilicen Telnet?",
    opciones: [
      { valor: "A", texto: "access-list 103 permit 192.168.10.0 0.0.0.255 host 172.17.80.1\naccess-list 103 deny tcp 192.168.10.0 0.0.0.255 any eq telnet​​" },
      { valor: "B", texto: "access-list 103 permit tcp 192.168.10.0 0.0.0.255 host 172.17.80.1 eq 80\naccess-list 103 deny tcp 192.168.10.0 0.0.0.255 any eq 23", correcta: true },
      { valor: "C", texto: "access-list 103 permit tcp 192.168.10.0 0.0.0.255 any eq 80\naccess-list 103 deny tcp 192.168.10.0 0.0.0.255 any eq 23" },
      { valor: "D", texto: "access-list 103 deny tcp host 192.168.10.0 any eq 23\naccess-list 103 permit tcp host 192.168.10.1 eq 80" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 25
  {
    id: "q25",
    texto: "25. Consulte la ilustración. ¿Qué secuencia de comandos se debe utilizar para configurar el router A para OSPF?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/104-i386046n1v2-1613220070.9736.gif",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/104-i386046n1v2-1613220070.9736.gif 452w, https://examenredes.com/wp-content/uploads/2021/09/104-i386046n1v2-1613220070.9736-300x183.gif 300w",
      sizes: "(max-width: 452px) 100vw, 452px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P104"
    },
    opciones: [
      { valor: "A", texto: "router ospf 1\nred 192.168.10.64 0.0.0.63 área 0\nred 192.168.10.192 0.0.0.3 área 0", correcta: true },
      { valor: "B", texto: "router ospf 1\nred 192.168.10.0" },
      { valor: "C", texto: "router ospf 1\nnetwork 192.168.10.0 area 0" },
      { valor: "D", texto: "router ospf 1\nred 192.168.10.64 255.255.255.192\nred 192.168.10.192 255.255.255.252" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 26
  {
    id: "q26",
    texto: "26. Una las funciones con las capas correspondientes. (No se utilizan todas las opciones.)",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/2021-11-01_100806.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_100806.jpg 723w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_100806-300x252.jpg 300w",
      sizes: "(max-width: 723px) 100vw, 723px",
      alt: "Funciones de las capas de red"
    },
    opciones: [
      { valor: "A", texto: "Representa el perímetro de la red.", correcta: true, capa: "Capa de acceso" },
      { valor: "B", texto: "Brinda acceso a la red al usuario.", correcta: true, capa: "Capa de acceso" },
      { valor: "C", texto: "Brinda una política de acceso a la red.", capa: "Capa de distribución" },
      { valor: "D", texto: "Establece límites de routing de capa 3.", capa: "Capa de distribución" },
      { valor: "E", texto: "Brinda una conectividad troncal de alta velocidad.", capa: "Capa núcleo" },
      { valor: "F", texto: "Funciona como agregador para todos los bloques de campus.", capa: "Capa núcleo" }
    ],
    tipo: "matching",
    respuestasCorrectas: ["A", "B", "C", "D", "E", "F"]
  },

  // Pregunta 27
  {
    id: "q27",
    texto: "27. Consulte la ilustración. Un administrador configuró primero una ACL extendida como se muestra en el resultado del comando show access-lists . A continuación, el administrador editó esta lista de acceso emitiendo los siguientes comandos.",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/84-i241882v4n1_241882.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/84-i241882v4n1_241882.png 248w, https://examenredes.com/wp-content/uploads/2021/09/84-i241882v4n1_241882-300x171.png 300w",
      sizes: "(max-width: 248px) 100vw, 248px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P84"
    },
    opciones: [
      { valor: "A", texto: "Se permitirán paquetes SSH." },
      { valor: "B", texto: "Se permitirán los paquetes de ping." },
      { valor: "C", texto: "Se permitirán paquetes TFTP." },
      { valor: "D", texto: "Se permitirán paquetes Telnet." },
      { valor: "E", texto: "Se denegarán todos los paquetes TCP y UDP." },
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B"]
  },
      // Pregunta 28
{
    id: "q28",
    texto: "28. ¿Cuáles son tres beneficios de la computación en la nube? (Elija tres opciones).",
    opciones: [
      { valor: "A", texto: "Permite el acceso a los datos organizacionales en cualquier momento y lugar.", correcta: true },
      { valor: "B", texto: "Elimina o reduce la necesidad de equipamiento, mantenimiento y administración de TI en el sitio.", correcta: true },
      { valor: "C", texto: "Optimiza las operaciones de TI de una organización suscribiéndose únicamente a los servicios necesarios.", correcta: true },
      { valor: "D", texto: "Utiliza clientes de usuarios finales para realizar una cantidad sustancial de almacenamiento y procesamiento previo de datos." },
      { valor: "E", texto: "Utiliza software de código abierto para el procesamiento distribuido de grandes conjuntos de datos." },
      { valor: "F", texto: "Transforma los datos sin procesar en información significativa detectando patrones y relaciones." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B", "C"]
  },
  
  // Pregunta 29
  {
    id: "q29",
    texto: "29. ¿Cuál es uno de los propósitos por los cuales se establece una línea de base de red?",
    opciones: [
      { valor: "A", texto: "Crea un punto de referencia para futuras evaluaciones de red.", correcta: true },
      { valor: "B", texto: "Proporciona un promedio estadístico del rendimiento de la red." },
      { valor: "C", texto: "Verifica la configuración de seguridad de los dispositivos de red." },
      { valor: "D", texto: "Administra el rendimiento de los dispositivos de red." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  
  // Pregunta 30
  {
    id: "q30",
    texto: "30. ¿Qué tipo de marcado de QoS se aplica a las tramas de Ethernet?",
    opciones: [
      { valor: "A", texto: "ToS" },
      { valor: "B", texto: "DSCP" },
      { valor: "C", texto: "IP Precedence" },
      { valor: "D", texto: "CoS", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 31
  {
    id: "q31",
    texto: "31. Una el tipo de dispositivo o de servicio WAN con la descripción. (No se utilizan todas las opciones.)",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/2021-11-01_101049.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_101049.jpg 721w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-01_101049-234x300.jpg 234w",
      sizes: "(max-width: 721px) 100vw, 721px",
      alt: "Dispositivos WAN"
    },
    opciones: [
      { valor: "A", texto: "Dispositivo A" },
      { valor: "B", texto: "Dispositivo B" },
      { valor: "C", texto: "Dispositivo C" }
    ],
    tipo: "matching",
    respuestasCorrectas: ["A", "B"]
  },

  // Pregunta 32
  {
    id: "q32",
    texto: "32. ¿Qué tecnología de acceso WAN público utiliza líneas telefónicas de cobre para proporcionar acceso a los suscriptores que se multiplexan en una única conexión de enlace T3?",
    opciones: [
      { valor: "A", texto: "Cable" },
      { valor: "B", texto: "Acceso telefónico" },
      { valor: "C", texto: "ISDN" },
      { valor: "D", texto: "DSL", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 33
  {
    id: "q33",
    texto: "33. ¿Qué tipo de tráfico se describe como requiere latencia no superior a 400 milisegundos (ms)?",
    opciones: [
      { valor: "A", texto: "Datos" },
      { valor: "B", texto: "Voz" },
      { valor: "C", texto: "Video", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 34
  {
    id: "q34",
    texto: "34. ¿Qué tres tipos de VPN son ejemplos de VPN de sitio a sitio administradas por la empresa? (Escoja tres opciones).",
    opciones: [
      { valor: "A", texto: "sin cliente SSL VPN" },
      { valor: "B", texto: "VPN de IPsec", correcta: true },
      { valor: "C", texto: "GRE sobre IPsec VPN", correcta: true },
      { valor: "D", texto: "IPsec VPN basada en el cliente" },
      { valor: "E", texto: "MPLS VPN de capa 3" },
      { valor: "F", texto: "VPN dinámica multipunto de Cisco", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "C", "F"]
  },

  // Pregunta 35
  {
    id: "q35",
    texto: "35. ¿Qué enunciado describe con precisión una característica de IPsec?",
    opciones: [
      { valor: "A", texto: "IPSec funciona en la capa de aplicación y protege todos los datos de la aplicación." },
      { valor: "B", texto: "IPSec es un marco de estándares abiertos que se basa en algoritmos existentes.", correcta: true },
      { valor: "C", texto: "IPSec es un marco de estándares propietarios que dependen de algoritmos específicos de Cisco." },
      { valor: "D", texto: "IPSec funciona en la capa de transporte y protege los datos en la capa de red." },
      { valor: "E", texto: "IPSec es un marco de estándares desarrollado por Cisco que se basa en algoritmos OSI." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 36
  {
    id: "q36",
    texto: "36. Consulte la ilustración. Muchos empleados están perdiendo el tiempo de la empresa accediendo a las redes sociales en sus computadoras de trabajo. La compañía quiere detener este acceso. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas_files/86-i350685v1n1_C3M4-Diagram.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/86-i350685v1n1_C3M4-Diagram.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/86-i350685v1n1_C3M4-Diagram-300x233.jpg 300w",
      sizes: "(max-width: 570px) 100vw, 570px",
      alt: "Diagrama ACL"
    },
    opciones: [
      { valor: "A", texto: "ACL estándar saliente en R2 S0 / 0/0" },
      { valor: "B", texto: "ACL extendida saliente en la interfaz WAN R2 hacia Internet" },
      { valor: "C", texto: "ACL extendida saliente en la interfaz WAN R2 hacia Internet" },
      { valor: "D", texto: "ACL extendidas entrantes en R1 G0/0 y G0/1", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 37
  {
    id: "q37",
    texto: "37. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una sola entrada:\n<pre>access-list 101 permit udp 192.168.100.0 0.0.2.255 64.100.40.0 0.0.0.0.15 eq telnet .</pre>\n¿Está permitido o denegado el paquete si un paquete con una dirección de origen de 192.168.100.219, una dirección de destino de 64.100.40.10 y un protocolo de 54 se recibe en la interfaz?",
    opciones: [
      { valor: "A", texto: "Denegado", correcta: true },
      { valor: "B", texto: "Permitido" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 38
  {
    id: "q38",
    texto: "38. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una sola entrada:\n<pre>access-list 101 permit udp 192.168.100.0 0.0.2.255 64.100.40.0 0.0.0.15 eq telnet .</pre>\n¿Está permitido o denegado el paquete si un paquete con una dirección de origen de 192.168.101.45, una dirección de destino de 64.100.40.4 y un protocolo de 23 se recibe en la interfaz?",
    opciones: [
      { valor: "A", texto: "Denegado" },
      { valor: "B", texto: "Permitido", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 39
  {
    id: "q39",
    texto: "39. Si un router tiene dos interfaces y está enrutando tráfico IPv4 e IPv6, ¿cuántas ACL se podrían crear y aplicar a él?",
    opciones: [
      { valor: "A", texto: "16" },
      { valor: "B", texto: "4" },
      { valor: "C", texto: "8", correcta: true },
      { valor: "D", texto: "6" },
      { valor: "E", texto: "12" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 40
  {
    id: "q40",
    texto: "40. Consulte la ilustración. Un administrador de red ha configurado una ACL estándar para permitir que sólo las dos redes LAN conectadas a R1 accedan a la red que se conecta a la interfaz R2 G0/1, pero no a la interfaz G0/0. Al seguir las mejores prácticas, ¿en qué ubicación se debe aplicar la ACL estándar?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/170-i282155v1n2_282152.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/170-i282155v1n2_282152.png 496w, https://examenredes.com/wp-content/uploads/2021/09/170-i282155v1n2_282152-300x165.png 300w",
      sizes: "(max-width: 496px) 100vw, 496px",
      alt: "Configuración de ACL"
    },
    opciones: [
      { valor: "A", texto: "R2 G0/0 saliente", correcta: true },
      { valor: "B", texto: "R2 G0/1 entrante" },
      { valor: "C", texto: "R1 S0/0/0 saliente" },
      { valor: "D", texto: "R1 S0/0/0 entrante" },
      { valor: "E", texto: "R2 S0/0/1 saliente" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
      // Pregunta 41
  {
    id: "q41",
    texto: "41. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para mostrar todas las traducciones estáticas que se han configurado?",
    opciones: [
      { valor: "A", texto: "show ip pat translations" , correcta: true },
      { valor: "B", texto: "show ip cache" },
      { valor: "C", texto: "show running-config" },
      { valor: "D", texto: "show ip nat translations" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 42
  {
    id: "q42",
    texto: "42. Consulte la ilustración. Un administrador de redes necesita agregar una ACE a la ACL TRAFFIC-CONTROL que denegará el tráfico IP de la subred 172.23.16.0/20. ¿Qué ACE cumplirá este requisito?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/110.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/110.jpg 475w, https://examenredes.com/wp-content/uploads/2021/09/110-300x75.jpg 300w",
      sizes: "(max-width: 475px) 100vw, 475px",
      alt: "ACL TRAFFIC-CONTROL"
    },
    opciones: [
      { valor: "A", texto: "30 deny 172.23.16.0 0.0.15.255" },
      { valor: "B", texto: "15 deny 172.23.16.0 0.0.15.255" },
      { valor: "C", texto: "5 deny 172.23.16.0 0.0.255.255" },
      { valor: "D", texto: "5 deny 172.23.16.0 0.0.15.255", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 43
  {
    id: "q43",
    texto: "43. Un administrador de red está escribiendo una ACL estándar que denegará el tráfico desde la red 172.16.0.0/16, pero que permitirá todo el otro tráfico. ¿Cuáles son los comandos que se deben utilizar? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Router(config)# access-list 95 deny 172.16.0.0 0.0.255.255", correcta: true },
      { valor: "B", texto: "Router(config)# access-list 95 permit any", correcta: true },
      { valor: "C", texto: "Router(config)# access-list 95 deny 172.16.0.0 255.255.0.0" },
      { valor: "D", texto: "Router(config)# access-list 95 172.16.0.0 255.255.255.255" },
      { valor: "E", texto: "Router(config)# access-list 95 deny any" },
      { valor: "F", texto: "Router(config)# access-list 95 host 172.16.0.0" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B"]
  },

  // Pregunta 44
  {
    id: "q44",
    texto: "44. ¿Cuál es la característica de diseño que limita el tamaño de un dominio de fallas en una red empresarial?",
    opciones: [
      { valor: "A", texto: "El uso de un diseño de núcleo contraído" },
      { valor: "B", texto: "La compra de equipos empresariales diseñados para un gran volumen de tráfico de red" },
      { valor: "C", texto: "El uso del enfoque de bloque de switches de edificio", correcta: true },
      { valor: "D", texto: "La instalación de fuentes de alimentación redundantes" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 45
  {
    id: "q45",
    texto: "45. ¿Cuáles son dos reglas de sintaxis para escribir una matriz JSON? (Escoja dos opciones.)",
    opciones: [
      { valor: "A", texto: "Los valores están entre corchetes.", correcta: true },
      { valor: "B", texto: "Cada valor dentro del vector es separado por una coma.", correcta: true },
      { valor: "C", texto: "La matriz puede incluir sólo un tipo de valor." },
      { valor: "D", texto: "Un espacio debe separar cada valor de la matriz." },
      { valor: "E", texto: "Un punto y coma separa la clave y la lista de valores." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B"]
  },

  // Pregunta 46
  {
    id: "q46",
    texto: "46. En JSON, ¿qué se mantiene entre corchetes []?",
    opciones: [
      { valor: "A", texto: "pares clave/valor" },
      { valor: "B", texto: "valores anidados" },
      { valor: "C", texto: "una matriz", correcta: true },
      { valor: "D", texto: "un objeto" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 47
  {
    id: "q47",
    texto: "47. ¿Qué tipo de API se usaría para permitir a los vendedores autorizados de una organización acceder a los datos de ventas internos desde sus dispositivos móviles?",
    opciones: [
      { valor: "A", texto: "abierto" },
      { valor: "B", texto: "Privada", correcta: true },
      { valor: "C", texto: "Pública" },
      { valor: "D", texto: "partner" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 48
  {
    id: "q48",
    texto: "48. Consulte la ilustración. ¿Qué dirección o direcciones representan la dirección global interna?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/21-2017-06-26_224149.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/21-2017-06-26_224149.jpg 483w, https://examenredes.com/wp-content/uploads/2021/09/21-2017-06-26_224149-300x94.jpg 300w",
      sizes: "(max-width: 483px) 100vw, 483px",
      alt: "Dirección global interna"
    },
    opciones: [
      { valor: "A", texto: "10.1.1.2" },
      { valor: "B", texto: "209.165.20.25", correcta: true },
      { valor: "C", texto: "cualquier dirección de la red 10.1.1.0" },
      { valor: "D", texto: "192.168.0.100" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 49
  {
    id: "q49",
    texto: "49. Consulte la exhibición. Un administrador intenta configurar PAT en el R1, pero la PC-A no puede acceder a Internet. El administrador intenta hacer ping a un servidor en Internet desde la PC-A y recopila las depuraciones que se muestran en la ilustración. Sobre la base de este resultado, ¿cuál es la causa más probable del problema?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/87-2017-03-09_142831.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/87-2017-03-09_142831.png 532w, https://examenredes.com/wp-content/uploads/2021/09/87-2017-03-09_142831-300x143.png 300w",
      sizes: "(max-width: 532px) 100vw, 532px",
      alt: "Depuración PAT"
    },
    opciones: [
      { valor: "A", texto: "La dirección global interna no está en la misma subred que el ISP.", correcta: true },
      { valor: "B", texto: "La dirección en Fa0/0 debe ser 64.100.0.1." },
      { valor: "C", texto: "La lista de acceso de origen NAT coincide con un rango de direcciones incorrecto." },
      { valor: "D", texto: "Las interfaces NAT internas y externas se configuraron al revés." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 50
  {
    id: "q50",
    texto: "50. Consulte la exhibición. Una computadora en la dirección 10.1.1.45 no puede acceder a Internet. ¿Cuál es la causa más probable del problema?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/65-41.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/65-41.jpg 687w, https://examenredes.com/wp-content/uploads/2021/09/65-41-300x178.jpg 300w",
      sizes: "(max-width: 687px) 100vw, 687px",
      alt: "Exhibición de configuración"
    },
    opciones: [
      { valor: "A", texto: "Se usó una máscara de red incorrecta en el conjunto de NAT." },
      { valor: "B", texto: "Access-list 1 no se configuró correctamente." },
      { valor: "C", texto: "Las interfaces internas y externas se configuraron al revés." },
      { valor: "D", texto: "Se agotó el conjunto de NAT.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
      // Pregunta 51
  {
    id: "q51",
    texto: "51. Un administrador está configurando OSPF de área única en un router. Una de las redes que se deben anunciar es 172.16.91.0 255.255.255.192. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.0.63", correcta: true },
      { valor: "B", texto: "0.0.0.3" },
      { valor: "C", texto: "0.0.0.15" },
      { valor: "D", texto: "0.0.0.7" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 52
  {
    id: "q52",
    texto: "52. De las siguientes opciones, ¿cuál señala una característica de un caballo de Troya en lo que se refiere a la seguridad de la red?",
    opciones: [
      { valor: "A", texto: "Se envían enormes cantidades de datos a una interfaz de dispositivo de red particular." },
      { valor: "B", texto: "El malware está alojado en un programa ejecutable aparentemente legítimo.", correcta: true },
      { valor: "C", texto: "Se utiliza un diccionario electrónico para obtener una contraseña que se usará para infiltrarse en un dispositivo de red clave." },
      { valor: "D", texto: "Se destina mucha información a un bloque de memoria particular, y esto hace que que otras áreas de la memoria se vean afectadas." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 53
  {
    id: "q53",
    texto: "53. De las siguientes afirmaciones, seleccione dos que describan el uso de algoritmos asimétricos. (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Si se utiliza una clave pública para cifrar los datos, debe utilizarse una clave pública para descifrarlos." },
      { valor: "B", texto: "Si se utiliza una clave privada para cifrar los datos, debe utilizarse una clave pública para descifrarlos.", correcta: true },
      { valor: "C", texto: "Si se utiliza una clave privada para cifrar los datos, debe utilizarse una clave privada para descifrarlos." },
      { valor: "D", texto: "Si se utiliza una clave pública para cifrar los datos, debe utilizarse una clave privada para descifrarlos.", correcta: true },
      { valor: "E", texto: "Las claves públicas y privadas pueden utilizarse indistintamente." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "D"]
  },

  // Pregunta 54
  {
    id: "q54",
    texto: "54. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría depuradores?",
    opciones: [
      { valor: "A", texto: "para detectar cualquier evidencia de un hack o malware en una computadora o red" },
      { valor: "B", texto: "para aplicar ingeniería inversa a los archivos binarios al escribir exploits y al analizar malware", correcta: true },
      { valor: "C", texto: "para detectar herramientas instaladas dentro de archivos y directorios que proporcionan a los actores de amenazas acceso remoto y control a través de un equipo o red" },
      { valor: "D", texto: "para obtener sistemas operativos especialmente diseñados precargados con herramientas optimizadas para hackear" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 55
  {
    id: "q55",
    texto: "55. Dos router habilitados para OSPF están conectados a través de un enlace punto a punto. Durante el estado ExStart, ¿qué router se elegirá como el primero en enviar paquetes DBD?",
    opciones: [
      { valor: "A", texto: "el router con la dirección IP más alta en la interfaz de conexión" },
      { valor: "B", texto: "el router con la dirección IP más baja en la interfaz de conexión" },
      { valor: "C", texto: "el router con la ID de router más alta", correcta: true },
      { valor: "D", texto: "el router con el ID de router más bajo" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 56
  {
    id: "q56",
    texto: "56. ¿Qué tipo de paquete OSPFv2 se utiliza para reenviar información de cambio de enlace OSPF?",
    opciones: [
      { valor: "A", texto: "Descripción de la base de datos (DBD)" },
      { valor: "B", texto: "reconocimiento de estado de enlace" },
      { valor: "C", texto: "Actualizaciones de estado de enlace", correcta: true },
      { valor: "D", texto: "Saludo" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 57
  {
    id: "q57",
    texto: "57. ¿Qué protocolo utiliza agentes, que residen en dispositivos administrados, para recopilar y almacenar información sobre el dispositivo y su funcionamiento?",
    opciones: [
      { valor: "A", texto: "SYSLOG" },
      { valor: "B", texto: "Programador" },
      { valor: "C", texto: "TFTP" },
      { valor: "D", texto: "SNMP", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 58
  {
    id: "q58",
    texto: "58. ¿Qué tipo de VPN enruta paquetes a través de interfaces de túnel virtual para el cifrado y el reenvío?",
    opciones: [
      { valor: "A", texto: "Interfaz virtual del túnel IPSec", correcta: true },
      { valor: "B", texto: "GRE sobre IPsec" },
      { valor: "C", texto: "VPN con MPLS" },
      { valor: "D", texto: "VPN multipunto dinámica." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 59
  {
    id: "q59",
    texto: "59. ¿Cuál es una característica de un hipervisor de tipo 2?",
    opciones: [
      { valor: "A", texto: "tienen acceso directo a los recursos de hardware de servidores" },
      { valor: "B", texto: "más adecuados para los entornos empresariales" },
      { valor: "C", texto: "no requiere software de consola de administración", correcta: true },
      { valor: "D", texto: "se instalan directamente en el hardware" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 60
  {
    id: "q60",
    texto: "60. ¿Qué tipo de recursos se requiere para un hipervisor de tipo 1?",
    opciones: [
      { valor: "A", texto: "una VLAN dedicada" },
      { valor: "B", texto: "un sistema ⁪operativo del host" },
      { valor: "C", texto: "una consola de administración", correcta: true },
      { valor: "D", texto: "un servidor que ejecute VMware Fusion" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 61
  {
    id: "q61",
    texto: "61. ¿Qué se usa para completar la tabla de adyacencia de los dispositivos de Cisco que usan CEF para procesar los paquetes? ​",
    opciones: [
      { valor: "A", texto: "FIB" },
      { valor: "B", texto: "DSP" },
      { valor: "C", texto: "la tabla ARP", correcta: true },
      { valor: "D", texto: "la tabla de routing" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 62
  {
    id: "q62",
    texto: "62. Al lanzar un ataque de reconocimiento en una red, ¿qué es lo que se busca? (Elija dos opciones).",
    opciones: [
      { valor: "A", texto: "Recopilar información sobre la red y los dispositivos", correcta: true },
      { valor: "B", texto: "Evitar que otros usuarios accedan al sistema" },
      { valor: "C", texto: "Recuperar y modificar datos" },
      { valor: "D", texto: "Buscar oportunidades de acceso", correcta: true },
      { valor: "E", texto: "Escalar privilegios de acceso" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "D"]
  },
      // Pregunta 63
  {
    id: "q63",
    texto: "63. ¿Cuáles son los dos tipos de conexiones de VPN? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "De sitio a sitio", correcta: true },
      { valor: "B", texto: "Frame Relay" },
      { valor: "C", texto: "Acceso remoto", correcta: true },
      { valor: "D", texto: "Línea arrendada" },
      { valor: "E", texto: "PPPoE" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 64
  {
    id: "q64",
    texto: "64. ¿Qué tipo de tráfico se describe como tener un alto volumen de datos por paquete?",
    opciones: [
      { valor: "A", texto: "Datos" },
      { valor: "B", texto: "Voz" },
      { valor: "C", texto: "Video", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 65
  {
    id: "q65",
    texto: "65. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría aplicaciones como Nmap, SuperScan y Angry IP Scanner?",
    opciones: [
      { valor: "A", texto: "para capturar y analizar paquetes dentro de LAN o WLAN Ethernet tradicionales" },
      { valor: "B", texto: "para sondear dispositivos de red, servidores y hosts en busca de puertos TCP o UDP abiertos", correcta: true },
      { valor: "C", texto: "para probar y probar la robustez de un firewall utilizando paquetes falsificados especialmente creados" },
      { valor: "D", texto: "para detectar herramientas instaladas dentro de archivos y directorios que proporcionan a los actores de amenazas acceso remoto y control a través de un equipo o red" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 66
  {
    id: "q66",
    texto: "66. ¿Qué protocolo se sincroniza con un reloj maestro privado o con un servidor disponible públicamente en Internet?",
    opciones: [
      { valor: "A", texto: "NTP", correcta: true },
      { valor: "B", texto: "SNMP" },
      { valor: "C", texto: "SYSLOG" },
      { valor: "D", texto: "MPLS" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 67
  {
    id: "q67",
    texto: "67. ¿Cuáles son los tres componentes utilizados en la parte de consulta de una solicitud API RESTful típica? (Escoja tres opciones).",
    opciones: [
      { valor: "A", texto: "servidor API" },
      { valor: "B", texto: "parámetros", correcta: true },
      { valor: "C", texto: "protocolo" },
      { valor: "D", texto: "clave", correcta: true },
      { valor: "E", texto: "recursos" },
      { valor: "F", texto: "format", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "D", "F"]
  },

  // Pregunta 68
  {
    id: "q68",
    texto: "68. Considere la siguiente lista de acceso, la cual permite la transferencia de archivos de configuración de teléfonos IP desde un host específico hasta un servidor TFTP:",
    opciones: [
      { valor: "A", texto: "R1(config)# access-list 105 permit udp host 10.0.70.23 host 10.0.54.5 range 1024 5000 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 20 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 21 | R1(config)# access-list 105 deny ip any any" },
      { valor: "B", texto: "R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 20 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 21" },
      { valor: "C", texto: "R1(config)# interface gi0/0 | R1(config-if)# no ip access-group 105 out | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 20 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 21 | R1(config)# interface gi0/0 | R1(config-if)# ip access-group 105 out" },
      { valor: "D", texto: "R1(config)# interface gi0/0 | R1(config-if)# no ip access-group 105 out | R1(config)# no access-list 105 | R1(config)# access-list 105 permit udp host 10.0.70.23 host 10.0.54.5 range 1024 5000 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 20 | R1(config)# access-list 105 permit tcp any host 10.0.54.5 eq 21 | R1(config)# access-list 105 deny ip any any | R1(config)# interface gi0/0 | R1(config-if)# ip access-group 105 out" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 69
  {
    id: "q69",
    texto: "69. Consulte la ilustración. Un administrador configura la siguiente ACL para evitar que los dispositivos de la subred 192.168.1.0 accedan al servidor en 10.1.1.5:",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/99-2020-06-13_113133.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/99-2020-06-13_113133.jpg 385w, https://examenredes.com/wp-content/uploads/2021/09/99-2020-06-13_113133-300x212.jpg 300w",
      sizes: "(max-width: 385px) 100vw, 385px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P99"
    },
    opciones: [
      { valor: "A", texto: "saliente en el router A Fa0/1" },
      { valor: "B", texto: "entrante en el router A Fa0/0", correcta: true },
      { valor: "C", texto: "entrante en el router B Fa0/1" },
      { valor: "D", texto: "saliente en el router B Fa0/0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 70
  {
    id: "q70",
    texto: "70. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para identificar una interfaz como parte de la red global externa?",
    opciones: [
      { valor: "A", texto: "ip nat outside", correcta: true },
      { valor: "B", texto: "access-list 10 permit 172.19.89.0 0.0.0.255" },
      { valor: "C", texto: "ip nat inside" },
      { valor: "D", texto: "ip pat inside" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 71
  {
    id: "q71",
    texto: "71. Anycompany ha decidido reducir su huella ambiental al reducir los costos de energía, mudarse a una instalación más pequeña y promover el teletrabajo. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
      { valor: "A", texto: "APIC-EM" },
      { valor: "B", texto: "Cisco ACI" },
      { valor: "C", texto: "Servicios en la nube", correcta: true },
      { valor: "D", texto: "Centro de datos" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 72
  {
    id: "q72",
    texto: "72. Una empresa está considerando actualizar la conexión WAN del campus. ¿Qué dos opciones de WAN son ejemplos de arquitectura de WAN privada? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Línea arrendada", correcta: true },
      { valor: "B", texto: "Cable" },
      { valor: "C", texto: "WAN Ethernet", correcta: true },
      { valor: "D", texto: "Línea de suscriptor digital" },
      { valor: "E", texto: "Wi-Fi municipal" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 73
  {
    id: "q73",
    texto: "73. Un cliente necesita una conexión WAN de área metropolitana que proporcione ancho de banda dedicado de alta velocidad entre dos sitios. ¿Qué tipo de conexión WAN satisface esta necesidad?",
    opciones: [
      { valor: "A", texto: "Red conmutada por paquetes" },
      { valor: "B", texto: "Una red de conmutación de circuitos" },
      { valor: "C", texto: "WAN Ethernet", correcta: true },
      { valor: "D", texto: "MPLS" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 74
  {
    id: "q74",
    texto: "74. ¿Qué tipo de VPN es la opción preferida para el soporte y la facilidad de implementación para el acceso remoto?",
    opciones: [
      { valor: "A", texto: "VPN con MPLS" },
      { valor: "B", texto: "VPN SSL", correcta: true },
      { valor: "C", texto: "Interfaz virtual del túnel IPSec" },
      { valor: "D", texto: "VPN multipunto dinámica." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 75
  {
    id: "q75",
    texto: "75. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una sola entrada:\n<pre>access-list 210 permit tcp 172.18.20.0 0.0.47 cualquier eq ftp .</pre>\nSi se recibe un paquete con una dirección de origen 172.18.20.40, una dirección de destino 10.33.19.2 y un protocolo de 21 en la interfaz, ¿está permitido o denegado el paquete?",
    opciones: [
      { valor: "A", texto: "Permitido" },
      { valor: "B", texto: "Denegado", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 76
  {
    id: "q76",
    texto: "76. ¿En qué estado OSPF se lleva a cabo la elección RD/BDR?",
    opciones: [
      { valor: "A", texto: "Bidir.", correcta: true },
      { valor: "B", texto: "ExStart" },
      { valor: "C", texto: "Init" },
      { valor: "D", texto: "Exchange" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
      // Pregunta 77
  {
    id: "q77",
    texto: "77. En una red OSPF, ¿qué estructura OSPF se utiliza para crear la tabla de vecinos en un router?",
    opciones: [
      { valor: "A", texto: "Base de datos de estado de enlace" },
      { valor: "B", texto: "Base de datos de adyacencia", correcta: true },
      { valor: "C", texto: "Tabla de routing" },
      { valor: "D", texto: "Base de datos de reenvío" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 78
  {
    id: "q78",
    texto: "78. ¿Qué paso en el proceso de enrutamiento de estado de vínculo es descrito por un router que construye una base de datos de estado de vínculo basada en los LSA recibidos?",
    opciones: [
      { valor: "A", texto: "seleccionando la ID del router" },
      { valor: "B", texto: "construye la tabla de topología", correcta: true },
      { valor: "C", texto: "declarando que un vecino es inaccesible" },
      { valor: "D", texto: "Ejecucuta el algoritmo SPF" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 79
  {
    id: "q79",
    texto: "79. Un administrador está configurando OSPF de área única en un router. Una de las redes que se deben anunciar es 192.168.0.0 255.255.254.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.15.255" },
      { valor: "B", texto: "0.0.1.255", correcta: true },
      { valor: "C", texto: "0.0.7.255" },
      { valor: "D", texto: "0.0.3.255" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 80
  {
    id: "q80",
    texto: "80. Consulte la ilustración. El administrador de red tiene una dirección IP 192.168.11.10 y necesita acceso para administrar R1. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/119-i350680v1n1_C3M4-Diagram.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/119-i350680v1n1_C3M4-Diagram.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/119-i350680v1n1_C3M4-Diagram-300x233.jpg 300w",
      sizes: "(max-width: 570px) 100vw, 570px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P119"
    },
    opciones: [
      { valor: "A", texto: "ACL extendido de salida en R2 S0 / 0/1" },
      { valor: "B", texto: "ACL estándar entrante en líneas v1 R1", correcta: true },
      { valor: "C", texto: "ACL extendidas entrantes en R1 G0/0 y G0/1" },
      { valor: "D", texto: "ACL extendida saliente en la interfaz WAN R2 hacia Internet" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 81
  {
    id: "q81",
    texto: "81. Al configurar una red de oficina pequeña, el administrador de red decide asignar dinámicamente direcciones IP privadas a las estaciones de trabajo y los dispositivos móviles. ¿Qué característica debe habilitarse en el router de la compañía para que los dispositivos de oficina puedan acceder a internet?",
    opciones: [
      { valor: "A", texto: "QoS" },
      { valor: "B", texto: "UPnP" },
      { valor: "C", texto: "NAT", correcta: true },
      { valor: "D", texto: "Filtrado MAC" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 82
  {
    id: "q82",
    texto: "82. Consulte la ilustración. ¿Cuál es el propósito del comando marcado con una flecha que aparece en el resultado parcial de configuración de un router de banda ancha Cisco?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/82-2017-06-26_224832-1.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/82-2017-06-26_224832-1.png 394w, https://examenredes.com/wp-content/uploads/2021/09/82-2017-06-26_224832-1-300x230.png 300w",
      sizes: "(max-width: 394px) 100vw, 394px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P82"
    },
    opciones: [
      { valor: "A", texto: "definir las direcciones que se asignan a un conjunto NAT" },
      { valor: "B", texto: "definir las direcciones a las que se les permite entrar al router" },
      { valor: "C", texto: "definir las direcciones que pueden traducirse", correcta: true },
      { valor: "D", texto: "definir las direcciones a las que se les permite salir del router" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 83
  {
    id: "q83",
    texto: "83. Consulte la exhibición. R1 está configurado para NAT tal como se muestra. ¿Qué problema hay en la configuración?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/39-i212258v1n1_212258-2.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/39-i212258v1n1_212258-2.jpg 715w, https://examenredes.com/wp-content/uploads/2021/09/39-i212258v1n1_212258-2-300x159.jpg 300w, https://examenredes.com/wp-content/uploads/2021/09/39-i212258v1n1_212258-2-310x165.jpg 310w",
      sizes: "(max-width: 715px) 100vw, 715px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P39"
    },
    opciones: [
      { valor: "A", texto: "La lista de acceso 1 está configurada incorrectamente." },
      { valor: "B", texto: "La interfaz Fa0/0 se debe identificar como interfaz NAT externa." },
      { valor: "C", texto: "El conjunto de NAT es incorrecto." },
      { valor: "D", texto: "No se conectó NAT-POOL2 a la ACL 1.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 84
  {
    id: "q84",
    texto: "84. Un técnico de red está configurando SNMPv3 y ha establecido un nivel de seguridad de autenticación . ¿Cuál es el efecto de esta configuración?",
    opciones: [
      { valor: "A", texto: "autentica un paquete mediante el algoritmo SHA solamente" },
      { valor: "B", texto: "autentica un paquete mediante el método HMAC con MD5 o el método SHA", correcta: true },
      { valor: "C", texto: "autentica un paquete mediante una coincidencia de cadena del nombre de usuario o la cadena de comunidad" },
      { valor: "D", texto: "autentica un paquete mediante los algoritmos HMAC MD5 o HMAC SHA y cifra el paquete con los algoritmos DES, 3DES o AES" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 85
  {
    id: "q85",
    texto: "85. Consulte la ilustración. ¿Qué método se puede utilizar para permitir que un router OSPF anuncie una ruta predeterminada a los routers OSPF vecinos?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/40-p53-1-1.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/40-p53-1-1.png 437w, https://examenredes.com/wp-content/uploads/2021/09/40-p53-1-1-300x203.png 300w, https://examenredes.com/wp-content/uploads/2021/09/40-p53-1-1-110x75.png 110w",
      sizes: "(max-width: 737px) 100vw, 737px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P40"
    },
    opciones: [
      { valor: "A", texto: "Usar una ruta estática que apunte al ISP y redistribuirla." },
      { valor: "B", texto: "Usar el comando default-information originate en el ISP." },
      { valor: "C", texto: "Usar el comando redistribute static en el R0-A." },
      { valor: "D", texto: "Usar el comando redistribute static en el ISP." },
      { valor: "E", texto: "Usar el comando default-information originate en el R0-A.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["E"]
  },
      // Pregunta 86
  {
    id: "q86",
    texto: "86. Un usuario informa que cuando se ingresa la URL de la página web corporativa en un navegador web, un mensaje de error indica que la página no se puede mostrar. El técnico de soporte técnico solicita al usuario que ingrese la dirección IP del servidor web para ver si la página se puede mostrar. ¿Qué método de solución de problemas usó el técnico?",
    opciones: [
      { valor: "A", texto: "Sustitución" },
      { valor: "B", texto: "Descendente" },
      { valor: "C", texto: "Ascendente" },
      { valor: "D", texto: "Divide y vencerás", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 87
  {
    id: "q87",
    texto: "87. ¿Cuáles dos escenarios resultarían en una discordancia dúplex? (Escoja dos opciones).",
    opciones: [
      { valor: "A", texto: "configuración el enrutamiento dinámico incorrectamente" },
      { valor: "B", texto: "conectar un dispositivo con una interfaz que se ejecuta a 100 Mbps a otro con una interfaz que se ejecuta a 1000 Mbps" },
      { valor: "C", texto: "configurar manualmente los dos dispositivos conectados a diferentes modos dúplex", correcta: true },
      { valor: "D", texto: "iniciar y detener una interfaz de router durante una operación normal" },
      { valor: "E", texto: "conectar un dispositivo con negociación automática a otro que se configura manualmente en dúplex completo", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["C", "E"]
  },
  // Pregunta 88
  {
    id: "q88",
    texto: "88. ¿Cuáles son dos de las características del tráfico de video? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "El tráfico de video es impredecible e irregular.", correcta: true },
      { valor: "B", texto: "El tráfico de video consume menos recursos de red que el tráfico de voz." },
      { valor: "C", texto: "El tráfico de video requiere un mínimo de 30 kbps de ancho de banda." },
      { valor: "D", texto: "La latencia del tráfico de video no debe superar los 400 ms.", correcta: true },
      { valor: "E", texto: "El tráfico de video es más resistente a pérdidas que el tráfico de voz." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "D"]
  },
  // Pregunta 89
  {
    id: "q89",
    texto: "89. ¿Cuál de estas afirmaciones describe una característica de los switches Cisco Catalyst 2960?",
    opciones: [
      { valor: "A", texto: "Los nuevos switches Cisco Catalyst 2960-C admiten paso a través de PoE.", correcta: true },
      { valor: "B", texto: "Son switches modulares." },
      { valor: "C", texto: "No admiten una interfaz virtual conmutada (SVI) activa con versiones del IOS anteriores a las 15.x." },
      { valor: "D", texto: "Se recomienda utilizarlos como switches de capa de distribución." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 90
  {
    id: "q90",
    texto: "90. Un centro de datos actualizó recientemente un servidor físico para alojar varios sistemas operativos en una única CPU. El centro de datos ahora puede proporcionarle a cada cliente un servidor Web separado sin tener que asignar un servidor independiente real para cada cliente. ¿Cuál es la tendencia de red que implementa el centro de datos en esta situación?",
    opciones: [
      { valor: "A", texto: "BYOD" },
      { valor: "B", texto: "Mantenimiento de la integridad de la comunicación" },
      { valor: "C", texto: "Virtualización", correcta: true },
      { valor: "D", texto: "Colaboración en línea" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 91
  {
    id: "q91",
    texto: "91. Consulte la ilustración. Un técnico configura el R2 para que la NAT estática permita que el cliente acceda al servidor web. ¿Por qué motivo es posible que la computadora cliente no pueda acceder al servidor web?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/18-2017-06-26_224429.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/18-2017-06-26_224429.jpg 655w, https://examenredes.com/wp-content/uploads/2021/09/18-2017-06-26_224429-300x125.jpg 300w",
      sizes: "(max-width: 655px) 100vw, 655px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P18"
    },
    opciones: [
      { valor: "A", texto: "La instrucción NAT de IP es incorrecta." },
      { valor: "B", texto: "A la configuración le falta una lista válida de control de acceso." },
      { valor: "C", texto: "La interfaz Fa0/1 debería estar identificada como la interfaz NAT exterior." },
      { valor: "D", texto: "La interfaz S0/0/0 debería estar identificada como la interfaz NAT exterior.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 92
  {
    id: "q92",
    texto: "92. Un administrador está configurando OSPF de área única en un router. Una de las redes que se deben anunciar es 10.27.0 255.255.255.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.0.255", correcta: true },
      { valor: "B", texto: "0.0.0.31" },
      { valor: "C", texto: "0.0.0.15" },
      { valor: "D", texto: "0.0.0.63" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 93
  {
    id: "q93",
    texto: "93. Consulte la ilustración. Los routers R1 y R2 están conectados mediante un enlace serial. Un router está configurado como maestro NTP, y el otro es un cliente NTP. ¿Cuáles son los dos datos que se pueden obtener a partir del resultado parcial del comando show ntp associations detail en el R2? (Elija dos opciones.)",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/26-2017-03-11_115313.jpg",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/26-2017-03-11_115313.jpg 462w, https://examenredes.com/wp-content/uploads/2021/09/26-2017-03-11_115313-300x61.jpg 300w",
        sizes: "(max-width: 462px) 100vw, 462px",
        alt: "CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas P26"
    },
    opciones: [
        { valor: "A", texto: "La dirección IP de R1 es 192.168.1.2." },
        { valor: "B", texto: "Ambos routers están configurados para usar NTPv2." },
        { valor: "C", texto: "El router R2 es el maestro, y el R1 es el cliente." },
        { valor: "D", texto: "El router R1 es el maestro, y el R2 es el cliente.", correcta: true },
        { valor: "E", texto: "La dirección IP de R2 es 192.168.1.2.", correcta: true }
    ],
    tipo: "checkbox",
      respuestasCorrectas: ["D", "E"]
  },
  // Pregunta 94
  {
    id: "q94",
    texto: "94. Consulte la ilustración. Un administrador está intentando realizar una copia de seguridad de la configuración actual del router en una unidad USB e ingresa el comando copy usbflash0: /r1-config running-config en la línea de comandos del router. Después de quitar la unidad USB y conectarla a una PC, el administrador descubre que la configuración en ejecución no se realizó correctamente una copia de seguridad en el archivo R1-config. ¿Cuál es el problema?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/125-i208111v6n1_Question-8.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/125-i208111v6n1_Question-8.png 459w, https://examenredes.com/wp-content/uploads/2021/09/125-i208111v6n1_Question-8-300x217.png 300w",
      sizes: "(max-width: 459px) 100vw, 459px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P125"
    },
    opciones: [
      { valor: "A", texto: "El comando que utilizó el administrador era incorrecto.", correcta: true },
      { valor: "B", texto: "El router no reconoce la unidad USB." },
      { valor: "C", texto: "No queda espacio en la unidad USB." },
      { valor: "D", texto: "La unidad no se formateó correctamente con el sistema de archivos FAT16." },
      { valor: "E", texto: "El archivo ya existe en la unidad USB y no se puede sobrescribir." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 95
  {
    id: "q95",
    texto: "95. ¿Qué protocolo se utiliza en un sistema que consta de tres elementos: un administrador, agentes y una base de datos de información?",
    opciones: [
      { valor: "A", texto: "MPLS" },
      { valor: "B", texto: "TFTP" },
      { valor: "C", texto: "SYSLOG" },
      { valor: "D", texto: "SNMP", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 96
  {
    id: "q96",
    texto: "96. Haga coincidir cada componente de una conexión de WAN con su descripción. (No se utilizan todas las opciones.)",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/2021-11-02_104623.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-02_104623.jpg 721w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-02_104623-259x300.jpg 259w",
      sizes: "(max-width: 721px) 100vw, 721px",
      alt: ""
    },
    opciones: [
      // Aquí van las opciones de la pregunta que no se han proporcionado
    ],
    tipo: "matching",
    respuestasCorrectas: []  // Las respuestas correctas deben ser añadidas
  },

  // Pregunta 97
  {
    id: "q97",
    texto: "97. Se ha encomendado a un administrador de red la tarea de crear un plan de recuperación ante desastres. Como parte de este plan, el administrador está buscando un sitio de copia de seguridad para todos los datos de los servidores de la empresa. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
      { valor: "A", texto: "Servidores dedicados" },
      { valor: "B", texto: "Virtualización" },
      { valor: "C", texto: "Redes definidas por software" },
      { valor: "D", texto: "Centro de datos", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 97
  {
    id: "q97",
    texto: "97. Se ha encomendado a un administrador de red la tarea de crear un plan de recuperación ante desastres. Como parte de este plan, el administrador está buscando un sitio de copia de seguridad para todos los datos de los servidores de la empresa. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
      { valor: "A", texto: "Servidores dedicados" },
      { valor: "B", texto: "Virtualización" },
      { valor: "C", texto: "Redes definidas por software" },
      { valor: "D", texto: "Centro de datos", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 98
  {
    id: "q98",
    texto: "98. ¿Qué tipo de tráfico se describe como tendente a ser impredecible, inconsistente y estallado?",
    opciones: [
      { valor: "A", texto: "Datos" },
      { valor: "B", texto: "Voz" },
      { valor: "C", texto: "Video", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 99
  {
    id: "q99",
    texto: "99. Consulte la ilustración. La empresa ha decidido que ningún tráfico iniciado desde ninguna otra red existente o futura puede ser transmitido a la red de Investigación y Desarrollo. Además, ningún tráfico procedente de la red de Investigación y Desarrollo puede transmitirse a otras redes existentes o futuras de la empresa. El administrador de red ha decidido que las ACL extendidas son más adecuadas para estos requisitos. En base a la información proporcionada, ¿qué hará el administrador de la red?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/160-temp-1593110686.3832.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/160-temp-1593110686.3832.png 236w, https://examenredes.com/wp-content/uploads/2021/09/160-temp-1593110686.3832-300x225.png 300w",
      sizes: "(max-width: 236px) 100vw, 236px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P160"
    },
    opciones: [
      { valor: "A", texto: "Una ACL se colocará en la interfaz R2 Gi0/0 y una ACL se colocará en la interfaz R2 S0/0/0." },
      { valor: "B", texto: "Dos ACL (una en cada dirección) se colocarán en la interfaz R2 Gi0/0.", correcta: true },
      { valor: "C", texto: "Una ACL se colocará en la interfaz R1 Gi0/0 y una ACL se colocará en la interfaz R2 Gi0/0." },
      { valor: "D", texto: "Solo una ACL numerada funcionará para esta situación." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 100
  {
    id: "q100",
    texto: "100. Un ingeniero de red ha observado que algunas entradas de ruta de red esperadas no se muestran en la tabla de enrutamiento. ¿Qué dos comandos proporcionarán información adicional sobre el estado de las adyacencias del router, los intervalos de temporizador y el ID de área? (Escoja dos opciones).",
    opciones: [
      { valor: "A", texto: "show ip protocols" },
      { valor: "B", texto: "show ip ospf neighbor", correcta: true },
      { valor: "C", texto: "show running-configuration" },
      { valor: "D", texto: "show ip route ospf" },
      { valor: "E", texto: "show ip ospf interface", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "E"]
  },
  // Pregunta 101
  {
    id: "q101",
    texto: "101. Consulte la ilustración. ¿Cuáles son las tres conclusiones que se pueden extraer del resultado que se muestra? (Elija tres).",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/31-i212860v1n1_212860-1.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/31-i212860v1n1_212860-1.png 637w, https://examenredes.com/wp-content/uploads/2021/09/31-i212860v1n1_212860-1-300x119.png 300w",
      sizes: "(max-width: 637px) 100vw, 637px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P31"
    },
    opciones: [
      { valor: "A", texto: "Esta interfaz usa la prioridad predeterminada." },
      { valor: "B", texto: "La ID del router en el DR es 3.3.3.3." },
      { valor: "C", texto: "Los criterios que se usaron para seleccionar el DR y el BDR no fueron los valores de la ID del router.", correcta: true },
      { valor: "D", texto: "Pasaron nueve segundos desde que se envió el paquete de saludo más reciente.", correcta: true },
      { valor: "E", texto: "El BDR tiene tres vecinos." },
      { valor: "F", texto: "Se puede llegar al DR a través de la interfaz GigabitEthernet0/0.", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["C", "D", "F"]
  },

  // Pregunta 102
  {
    id: "q102",
    texto: "102. Consulte la ilustración. ¿Qué formato de datos se usa para representar la automatización de aplicaciones de redes de datos?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/134-i349060v2n1_347060.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/134-i349060v2n1_347060.png 346w, https://examenredes.com/wp-content/uploads/2021/09/134-i349060v2n1_347060-300x124.png 300w",
      sizes: "(max-width: 346px) 100vw, 346px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P134"
    },
    opciones: [
      { valor: "A", texto: "HTML" },
      { valor: "B", texto: "YAML" },
      { valor: "C", texto: "JSON" },
      { valor: "D", texto: "XML", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 103
  {
    id: "q103",
    texto: "103. Dos empresas acaban de completar una fusión. Se solicitó al ingeniero de red que conecte las dos redes empresariales sin el gasto de las líneas arrendadas. ¿Qué solución sería el método más rentable para proporcionar una conexión segura y correcta entre las dos redes empresariales?",
    opciones: [
      { valor: "A", texto: "Cisco AnyConnect Secure Mobility Client con SSL" },
      { valor: "B", texto: "Frame Relay" },
      { valor: "C", texto: "Cisco Secure Mobility Clientless SSL VPN" },
      { valor: "D", texto: "VPN de acceso remoto con IPsec" },
      { valor: "E", texto: "VPN sitio a sitio", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["E"]
  },

  // Pregunta 104
  {
    id: "q104",
    texto: "104. Consulte la ilustración. El administrador de red que tiene la dirección IP 10.0.70.23/25 necesita acceder al servidor FTP corporativo (10.0.54.5/28). El servidor FTP también es un servidor web al que pueden acceder todos los empleados internos en las redes dentro de las direcciones 10.x.x.x. No se debe permitir ningún otro tráfico en este servidor. ¿Qué ACL extendida se utilizaría para filtrar este tráfico y cómo se aplicaría? (Elija dos opciones.)",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/27-i209858v1n1_209858.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/27-i209858v1n1_209858.png 407w, https://examenredes.com/wp-content/uploads/2021/09/27-i209858v1n1_209858-300x168.png 300w",
      sizes: "(max-width: 407px) 100vw, 407px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P27"
    },
    opciones: [
      { valor: "A", texto: "access-list 105 permit tcp host 10.0.70.23 host 10.0.54.5 eq 20\naccess-list 105 permit tcp host 10.0.70.23 host 10.0.54.5 eq 21\naccess-list 105 permit tcp 10.0.0.0 0.255.255.255 host 10.0.54.5 eq www\naccess-list 105 deny ip any host 10.0.54.5\naccess-list 105 permit ip any any", correcta: true },
      { valor: "B", texto: "access-list 105 permit ip host 10.0.70.23 host 10.0.54.5\naccess-list 105 permit tcp any host 10.0.54.5 eq www\naccess-list 105 permit ip any any" },
      { valor: "C", texto: "access-list 105 permit tcp host 10.0.54.5 any eq www\naccess-list 105 permit tcp host 10.0.70.23 host 10.0.54.5 eq 20\naccess-list 105 permit tcp host 10.0.70.23 host 10.0.54.5 eq 21" },
      { valor: "D", texto: "R1(config)# interface gi0/0\nR1(config-if)# ip access-group 105 out", correcta: true },
      { valor: "E", texto: "R1(config)# interface s0/0/0\nR1(config-if)# ip access-group 105 out" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "D"]
  },

  // Pregunta 105
  {
    id: "q105",
    texto: "105. ¿Qué método de solución de problemas es más adecuado para un administrador de redes experimentado que para un administrador de redes menos experimentado?",
    opciones: [
      { valor: "A", texto: "un enfoque que compara los componentes operativos y no operativos para detectar diferencias significativas" },
      { valor: "B", texto: "un enfoque estructurado que comienza por la capa física y que avanza de manera ascendente por las capas del modelo OSI hasta identificar la causa del problema" },
      { valor: "C", texto: "un enfoque menos estructurado basado en una deducción fundamentada", correcta: true },
      { valor: "D", texto: "un enfoque que comienza por las aplicaciones de usuario final y atraviesa las capas del modelo OSI de manera descendente hasta que se identifica la causa del problema" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 106
  {
    id: "q106",
    texto: "106. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para mostrar cualquier traducción PAT dinámica creada por el tráfico?",
    opciones: [
      { valor: "A", texto: "show ip cache" },
      { valor: "B", texto: "show ip nat translations", correcta: true },
      { valor: "C", texto: "show ip pat translations" },
      { valor: "D", texto: "show running-config" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 107
  {
    id: "q107",
    texto: "107. Consulte la exhibición. Un administrador de red configura una ACL para limitar la conexión a las líneas vty de R1 solamente a las estaciones del grupo de TI en la red 192.168.22.0/28. El administrador verifica las conexiones Telnet correctas desde una estación de trabajo con IP 192.168.22.5 hacia un R1 antes de que se aplique la ACL. Sin embargo, una vez aplicada la ACL a la interfaz Fa0/0, se niegan las conexiones Telnet. ¿Cuál es la causa de la falla en la conexión?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/32-i209884v1n1_209884.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/32-i209884v1n1_209884.png 699w, https://examenredes.com/wp-content/uploads/2021/09/32-i209884v1n1_209884-300x156.png 300w",
      sizes: "(max-width: 699px) 100vw, 699px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P32"
    },
    opciones: [
      { valor: "A", texto: "No se configuró una contraseña secreta de enable en el R1." },
      { valor: "B", texto: "No se introdujo el comando login para las líneas vty." },
      { valor: "C", texto: "El ACE permit especifica un número de puerto incorrecto." },
      { valor: "D", texto: "La red del grupo de TI se incluye en la instrucción deny.", correcta: true },
      { valor: "E", texto: "El ACE permit debe especificar protocolo IP en vez de TCP." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 108
  {
    id: "q108",
    texto: "108. ¿Cuál es el estado operativo final que se formará entre un DR OSPF y un DROTHER una vez que los routers alcancen la convergencia?",
    opciones: [
      { valor: "A", texto: "two-way" },
      { valor: "B", texto: "full", correcta: true },
      { valor: "C", texto: "loading" },
      { valor: "D", texto: "established" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 109
  {
    id: "q109",
    texto: "109. ¿Cuál es una característica de la API REST?",
    opciones: [
      { valor: "A", texto: "utilizado para intercambiar información estructurada XML a través de HTTP o SMTP" },
      { valor: "B", texto: "considerado lento, complejo y rígido" },
      { valor: "C", texto: "evolucionó en lo que se convirtió en SOAP" },
      { valor: "D", texto: "API más utilizada para servicios web", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 110
  {
    id: "q110",
    texto: "110. Un administrador de red está solucionando un problema OSPF que implica la adyacencia de vecinos. ¿Qué debe hacer el administrador?",
    opciones: [
      { valor: "A", texto: "Asegúrese de que la prioridad del router sea única en cada router." },
      { valor: "B", texto: "Asegúrese de que el ID del router está incluido en el paquete hello." },
      { valor: "C", texto: "Asegúrese de que la elección de RD/BDR esté completa." },
      { valor: "D", texto: "Asegúrese de que los temporizadores de saludo y de intervalos muertos sean los mismos en todos los router.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  }, 
  // Pregunta 111
  {
    id: "q111",
    texto: "111. Un administrador está configurando OSPF de área única en un router. Una de las redes que deben anunciarse es 192.168.0.0 255.255.252.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
        { valor: "A", texto: "0.0.0.63" },
        { valor: "B", texto: "0.0.3.255", correcta: true },
        { valor: "C", texto: "0.0.0.31" },
        { valor: "D", texto: "0.0.0.127" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 112
  {
    id: "q112",
    texto: "112. Seleccione los dos tipos de ataques utilizados en resoluciones de DNS abiertas. (Elija dos opciones.)",
    opciones: [
        { valor: "A", texto: "Uso de recursos", correcta: true },
        { valor: "B", texto: "Amortiguación" },
        { valor: "C", texto: "Fast flux" },
        { valor: "D", texto: "Amplificación y reflexión", correcta: true },
        { valor: "E", texto: "Envenenamiento ARP" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "D"]
  },

  // Pregunta 113
  {
    id: "q113",
    texto: "113. Consulte la ilustración. Si el administrador de redes creó una ACL estándar que permite solamente dispositivos que se conectan al acceso a la red G0/0 del R2 a los dispositivos en la interfaz G0/1 del R1, ¿cómo se debe aplicar la ACL?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/28-i282157v1n1_282156.png",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/28-i282157v1n1_282156.png 663w, https://examenredes.com/wp-content/uploads/2021/09/28-i282157v1n1_282156-300x166.png 300w",
        sizes: "(max-width: 663px) 100vw, 663px",
        alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P28"
    },
    opciones: [
        { valor: "A", texto: "outbound on the R1 G0/1 interface" },
        { valor: "B", texto: "inbound on the R1 G0/1 interface" },
        { valor: "C", texto: "outbound on the R2 S0/0/1 interface" },
        { valor: "D", texto: "inbound on the R2 G0/0 interface" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 114
  {
    id: "q114",
    texto: "114. Una empresa ha consolidado una serie de servidores y está buscando un programa o firmware para crear y controlar máquinas virtuales que tengan acceso a todo el hardware de los servidores consolidados. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
        { valor: "A", texto: "APIC-EM" },
        { valor: "B", texto: "Hipervisor Tipo 1", correcta: true },
        { valor: "C", texto: "Cisco ACI" },
        { valor: "D", texto: "Redes definidas por software" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 115
  {
    id: "q115",
    texto: "115. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría aplicaciones como John the Ripper, THC Hydra, RainbowCrack y Medusa?",
    opciones: [
        { valor: "A", texto: "hacer conjeturas repetidas para descifrar una contraseña", correcta: true },
        { valor: "B", texto: "para probar y probar la robustez de un firewall utilizando paquetes falsificados especialmente creados" },
        { valor: "C", texto: "para capturar y analizar paquetes dentro de LAN o WLAN Ethernet tradicionales" },
        { valor: "D", texto: "para sondear dispositivos de red, servidores y hosts en busca de puertos TCP o UDP abiertos" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 116
  {
    id: "q116",
    texto: "116. ¿Cuáles de las siguientes opciones son beneficios que brinda el uso de notificaciones SNMP? (Elija dos opciones.)",
    opciones: [
        { valor: "A", texto: "Eliminan la necesidad de algunas solicitudes de sondeos periódicos.", correcta: true },
        { valor: "B", texto: "Pueden proporcionar estadísticas sobre paquetes TCP/IP que pasan por los dispositivos Cisco." },
        { valor: "C", texto: "Reducen la carga en la red y los recursos de agentes.", correcta: true },
        { valor: "D", texto: "Pueden hacer una escucha pasiva de datagramas exportados de NetFlow." },
        { valor: "E", texto: "Limitan el acceso a los sistemas de administración únicamente." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 117
  {
    id: "q117",
    texto: "117. ¿Qué protocolo proporciona servicios de autenticación, integridad y confidencialidad, y es un tipo de VPN?",
    opciones: [
        { valor: "A", texto: "MD5" },
        { valor: "B", texto: "IPsec", correcta: true },
        { valor: "C", texto: "ESP" },
        { valor: "D", texto: "AES" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 118
  {
    id: "q118",
    texto: "118. ¿Qué funcionalidad le proporciona mGRE a la tecnología DMVPN?",
    opciones: [
        { valor: "A", texto: "Brinda transporte seguro de información privada a través de redes públicas, como Internet." },
        { valor: "B", texto: "Permite la creación de túneles asignados dinámicamente mediante un origen de túnel permanente en el concentrador y de los destinos de túnel asignados dinámamente en los dispositivos radiales.", correcta: true },
        { valor: "C", texto: "Es una solución de software de Cisco para desarrollar varias VPN de manera sencilla, dinámica y escalable." },
        { valor: "D", texto: "Crea una base de datos de asignación distribuida de direcciones IP públicas para todos los dispositivos radiales del túnel VPN." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 119
  {
    id: "q119",
    texto: "119. Una empresa necesita interconectar varias sucursales a través de un área metropolitana. El ingeniero de red busca una solución que proporcione tráfico convergente de alta velocidad, incluido el tráfico de voz, de video y de datos en la misma infraestructura de red. La empresa también desea que sea fácil de integrar a la infraestructura LAN existente en las oficinas. ¿Qué tecnología se debe recomendar?",
    opciones: [
        { valor: "A", texto: "Frame Relay" },
        { valor: "B", texto: "WAN Ethernet", correcta: true },
        { valor: "C", texto: "VSAT" },
        { valor: "D", texto: "ISDN" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 120
  {
    id: "q120",
    texto: "120. ¿Cuál es una característica de la topología de nodo principal y secundario de dos niveles de la arquitectura de la estructura Cisco ACI?",
    opciones: [
        { valor: "A", texto: "Los switches de nodo secundario siempre se adjuntan a los nodos principales, pero nunca se adjuntan entre sí.", correcta: true },
        { valor: "B", texto: "Los switches secundarios siempre se conectan a los principales y se comunican entre sí a través de una línea troncal." },
        { valor: "C", texto: "Los switches principales se conectan a los switches secundarios y se conectan entre sí para contar con redundancia." },
        { valor: "D", texto: "Los switches principales y secundarios siempre se conectan a través de switches centrales." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 121
  {
    id: "q121",
    texto: "121. En una red OSPF, ¿qué dos instrucciones describen la base de datos de estado de enlace (LSDB)? (Escoja dos opciones).",
    opciones: [
        { valor: "A", texto: "Se crea una tabla de vecinos basada en el LSDB." },
        { valor: "B", texto: "Se puede ver con el comando show ip ospf database", correcta: true },
        { valor: "C", texto: "Contiene una lista de sólo las mejores rutas a una red en particular." },
        { valor: "D", texto: "Todos los routers dentro de un área tienen una base de datos de estado de enlace idéntica.", correcta: true },
        { valor: "E", texto: "Contiene una lista de todos los routers vecinos a los que un router ha establecido comunicación bidireccional." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "D"]
  },

  // Pregunta 122
  {
    id: "q122",
    texto: "122. Se aplica una ACL entrante en una interfaz de router. La ACL consiste en una sola entrada:\n<pre>access-list 210 permit tcp 172.18.20.0 0.0.0.31 172.18.20.32 0.0.0.31 eq ftp .</pre>\n<strong>Si se recibe un paquete con una dirección de origen 172.18.20.55, una dirección de destino 172.18.20.3 y un protocolo de 21 en la interfaz, ¿está permitido o denegado el paquete?</strong>",
    opciones: [
        { valor: "A", texto: "Denegado", correcta: true },
        { valor: "B", texto: "Permitido" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 123
  {
    id: "q123",
    texto: "123. Un router OSPF tiene tres redes conectadas directamente: 10.0.0.0/16, 10.1.0.0/16 y 10.2.0.0/16. ¿Qué comando de red OSPF anunciaría sólo la red 10.1.0.0 a los vecinos?",
    opciones: [
        { valor: "A", texto: "router(config-router)# network 10.1.0.0 0.0.255.255 area 0", correcta: true },
        { valor: "B", texto: "router (config-router) # red 10.1.0.0 0.0.15.255 área 0" },
        { valor: "C", texto: "router(config-router)# network 10.1.0.0 255.255.255.0 area 0" },
        { valor: "D", texto: "router(config-router)# network 10.1.0.0 0.0.0.0 area 0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 124
  {
    id: "q124",
    texto: "124. Consulte la ilustración. A medida que se reenvía el tráfico por una interfaz de salida con el tratamiento de QoS, ¿qué técnica de prevención de congestionamiento se utiliza?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/80-i288031v1n1_Traffic_Policing.png",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/80-i288031v1n1_Traffic_Policing.png 521w, https://examenredes.com/wp-content/uploads/2021/09/80-i288031v1n1_Traffic_Policing-300x94.png 300w",
        sizes: "(max-width: 521px) 100vw, 521px",
        alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P80"
    },
    opciones: [
        { valor: "A", texto: "Clasificación y marcado" },
        { valor: "B", texto: "Conformación del tráfico", correcta: true },
        { valor: "C", texto: "Políticas con respecto al tráfico" },
        { valor: "D", texto: "Detección temprana aleatoria y ponderada" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 125
  {
    id: "q125",
    texto: "125. Considere el siguiente resultado de una ACL que se aplicó a un router mediante el comando access-class in. ¿Qué puede determinar un administrador de redes del resultado que se muestra?",
    pre: "R1# &lt;output omitted&gt;<br>Standard IP access list 2<br>10 permit 192.168.10.0, wildcard bits 0.0.0.255 (2 matches)<br>20 deny any (1 match)",
    opciones: [
        { valor: "A", texto: "No se permitió que el tráfico de un dispositivo acceda a un puerto de router y se enrute en dirección saliente a un puerto de router diferente." },
        { valor: "B", texto: "Dos dispositivos pudieron utilizar SSH o Telnet para obtener acceso al router.", correcta: true },
        { valor: "C", texto: "Dos dispositivos conectados al router tienen direcciones IP 192.168.10. x ." },
        { valor: "D", texto: "Se permitió que el tráfico de dos dispositivos acceda a un puerto de router y se enrute en dirección saliente a un puerto de router diferente." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 126
  {
    id: "q126",
    texto: "126. Anycompany ha decidido reducir su huella medioambiental reduciendo los costes energéticos, trasladándose a una instalación más pequeña y promoviendo el teletrabajo. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
        { valor: "A", texto: "Centro de datos" },
        { valor: "B", texto: "Virtualización", correcta: true },
        { valor: "C", texto: "Servicios en la nube" },
        { valor: "D", texto: "Servidores dedicados" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 127
  {
    id: "q127",
    texto: "127. Consulte la ilustración. Los empleados de 192.168.11.0/24 trabajan en información crítica y no tienen permitido el acceso fuera de su red. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/127-i350782v1n1_C3M4-Diagram-1.jpg",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/127-i350782v1n1_C3M4-Diagram-1.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/127-i350782v1n1_C3M4-Diagram-1-300x233.jpg 300w",
        sizes: "(max-width: 570px) 100vw, 570px",
        alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P132"
    },
    opciones: [
        { valor: "A", texto: "ACL estándar entrante en R1 G0 / 1", correcta: true },
        { valor: "B", texto: "ACL estándar entrante en líneas v1 R1" },
        { valor: "C", texto: "ACL extendida entrante en R3 S0/0/1" },
        { valor: "D", texto: "ACL extendida entrante en R1 G0/0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 128
  {
    id: "q128",
    texto: "128. Consulte la ilustración. ¿Qué dispositivos existen en el dominio de fallas cuando el switch S3 deja de recibir alimentación?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/108-i278658v1n1_222708-1.png",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/108-i278658v1n1_222708-1.png 661w, https://examenredes.com/wp-content/uploads/2021/09/108-i278658v1n1_222708-1-300x180.png 300w",
        sizes: "(max-width: 661px) 100vw, 661px",
        alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P108"
    },
    opciones: [
        { valor: "A", texto: "PC_3 y PC_2" },
        { valor: "B", texto: "AP_2 y AP_1" },
        { valor: "C", texto: "S1 y S4" },
        { valor: "D", texto: "S4 y PC_2" },
        { valor: "E", texto: "PC_3 y AP_2", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["E"]
  },

  // Pregunta 129
  {
    id: "q129",
    texto: "129. ¿Cómo ayuda la virtualización en la recuperación tras un desastre dentro de un centro de datos?",
    opciones: [
        { valor: "A", texto: "El hardware no tiene que ser idéntico.", correcta: true },
        { valor: "B", texto: "Siempre se proporciona electricidad." },
        { valor: "C", texto: "Se consume menos energía." },
        { valor: "D", texto: "Se acelera el aprovisionamiento de servidores." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 130
  {
    id: "q130",
    texto: "130. ¿Qué paso en el proceso de enrutamiento de estado de vínculo es descrito por un router que envía paquetes Hello fuera de todas las interfaces habilitadas para OSPF?",
    opciones: [
        { valor: "A", texto: "elegir el router designado" },
        { valor: "B", texto: "Intercambio de anuncios de estado de enlace" },
        { valor: "C", texto: "inyectando la ruta predeterminada" },
        { valor: "D", texto: "Establecimiento de adyacencias de vecinos", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 131
  {
    id: "q131",
    texto: "131. Un administrador está configurando OSPF de área única en un router. Una de las redes que debe anunciarse es 192.168.0.0 255.255.254.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.15.255" },
      { valor: "B", texto: "0.0.31.255" },
      { valor: "C", texto: "0.0.1.255", correcta: true },
      { valor: "D", texto: "0.0.63.255" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 132
  {
    id: "q132",
    texto: "132. Consulte la exhibición. El router R1 está configurado con NAT estática. El direccionamiento en el router y en el servidor web está configurado correctamente, pero no hay conectividad entre el servidor web y los usuarios en Internet. ¿Cuál es un posible motivo de esta falta de conectividad?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/132-i212256v1n3_212256.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/132-i212256v1n3_212256.png 705w, https://examenredes.com/wp-content/uploads/2021/09/132-i212256v1n3_212256-300x166.png 300w",
      sizes: "(max-width: 705px) 100vw, 705px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P132"
    },
    opciones: [
      { valor: "A", texto: "La interfaz Fa0/0 debería estar configurada con el comando ip nat outside ." },
      { valor: "B", texto: "La configuración de NAT en la interfaz S0/0/1 es incorrecta." },
      { valor: "C", texto: "La dirección global interna es incorrecta." },
      { valor: "D", texto: "La configuración de NAT del router tiene una dirección local interna incorrecta.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 133
  {
    id: "q133",
    texto: "133. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para identificar dentro de direcciones locales que se van a traducir?",
    opciones: [
      { valor: "A", texto: "ip nat inside source list 14 pool POOL-STAT overload" },
      { valor: "B", texto: "ip nat inside source list ACCTNG pool POOL-STAT" },
      { valor: "C", texto: "access-list 10 permit 172.19.89.0 0.0.0.255", correcta: true },
      { valor: "D", texto: "ip nat inside source list 24 interface serial 0/1/0 overload" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 134
  {
    id: "q134",
    texto: "134. Si un host externo no tiene preinstalado el cliente Cisco AnyConnect, ¿cómo obtendría el host acceso a la imagen del cliente?",
    opciones: [
      { valor: "A", texto: "El host inicia una conexión sin cliente a un servidor TFTP para descargar el cliente." },
      { valor: "B", texto: "El host inicia una conexión VPN sin cliente mediante un navegador web compatible para descargar el cliente.", correcta: true },
      { valor: "C", texto: "El cliente Cisco AnyConnect se instala de forma predeterminada en la mayoría de los principales sistemas operativos." },
      { valor: "D", texto: "El host inicia una conexión sin cliente a un servidor FTP para descargar el cliente." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 135
  {
    id: "q135",
    texto: "135. ¿Qué dos protocolos IPSec se utilizan para proporcionar integridad de datos?",
    opciones: [
      { valor: "A", texto: "DH" },
      { valor: "B", texto: "AES" },
      { valor: "C", texto: "SHA", correcta: true },
      { valor: "D", texto: "MD5", correcta: true },
      { valor: "E", texto: "RSA" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["C", "D"]
  },

  // Pregunta 136
  {
    id: "q136",
    texto: "136. ¿Qué tipo de tráfico se describe como capaz de tolerar una cierta cantidad de latencia, fluctuación y pérdida sin ningún efecto notable?",
    opciones: [
      { valor: "A", texto: "Datos" },
      { valor: "B", texto: "Video" },
      { valor: "C", texto: "Voz", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 137
  {
    id: "q137",
    texto: "137. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una única entrada:\n<pre>access-list 101 permit tcp 10.1.1.0 0.0.0.255 host 10.1.3.8 eq dns .</pre>\nSi se recibe un paquete con una dirección de origen 10.1.3.8, una dirección de destino 10.10.3.8 y un protocolo de 53 en la interfaz, ¿está permitido o denegado el paquete?",
    opciones: [
      { valor: "A", texto: "Denegado", correcta: true },
      { valor: "B", texto: "Permitido" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 138
{
  id: "q138",
  texto: "138. ¿Qué dos datos se deben incluir en un diagrama de topología lógica de una red? (Elija dos opciones.)",
  opciones: [
    { valor: "A", texto: "Versión de SO/IOS" },
    { valor: "B", texto: "Tipo de cable e identificador" },
    { valor: "C", texto: "Identificador de interfaz", correcta: true },
    { valor: "D", texto: "Especificación del cable" },
    { valor: "E", texto: "Tipo de conexión", correcta: true },
    { valor: "F", texto: "Tipo de dispositivo" }
  ],
  tipo: "checkbox",
  respuestasCorrectas: ["C", "E"]
  },

  // Pregunta 139
  {
    id: "q139",
    texto: "139. Consulte la ilustración. ¿Qué dos configuraciones se usarían para crear y aplicar una lista de acceso estándar en R1, de modo que solo los dispositivos de red 10.0.70.0/25 puedan acceder al servidor de base de datos interno? (Escoja dos opciones.)",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/158-ccna-5.0-s2-43.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/158-ccna-5.0-s2-43.jpg 397w, https://examenredes.com/wp-content/uploads/2021/09/158-ccna-5.0-s2-43-300x176.jpg 300w",
      sizes: "(max-width: 397px) 100vw, 397px",
      alt: "CCNA 3 Examen Final de ENSA Preguntas y Respuestas P158"
    },
    opciones: [
      { valor: "A", texto: "R1(config)# interface GigabitEthernet0/0 | R1(config-if)# ip access-group 5 out", correcta: true },
      { valor: "B", texto: "R1(config)# access-list 5 permit 10.0.70.0 0.0.127" },
      { valor: "C", texto: "R1(config)# access-list 5 permit any" },
      { valor: "D", texto: "R1(config)# access-list 5 permit 10.0.54.0 0.0.1.255" },
      { valor: "EF", texto: "R1(config)# interface Serial0/0/0<br>R1(config-if)# ip access-group 5 in" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 140
  {
    id: "q140",
    texto: "140. ¿Cuándo pasará un router habilitado para OSPF del estado Inactivo al estado Init?",
    opciones: [
      { valor: "A", texto: "tan pronto como se inicie el router" },
      { valor: "B", texto: "tan pronto como se complete el proceso de elección del RD/BDR" },
      { valor: "C", texto: "cuando se activa una interfaz habilitada para OSPF" },
      { valor: "D", texto: "cuando el router recibe un paquete hello de un router vecino", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  // Pregunta 141
  {
    id: "q141",
    texto: "141. Para evitar la compra de hardware nuevo, una empresa desea aprovechar los recursos del sistema inactivos y consolidar el número de servidores al tiempo que permite varios sistemas operativos en una única plataforma de hardware. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
        { valor: "A", texto: "Servidores dedicados" },
        { valor: "B", texto: "Redes definidas por software" },
        { valor: "C", texto: "Cisco ACI" },
        { valor: "D", texto: "Virtualización", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 142
  {
    id: "q142",
    texto: "142. Consulte la ilustración. Un administrador de redes configuró el protocolo OSPFv2 en los dos routers de Cisco. Los routers no pueden formar una adyacencia de vecinos. ¿Qué se debe hacer para solucionar el problema en el router R2?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/150-p56.png",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/150-p56.png 620w, https://examenredes.com/wp-content/uploads/2021/09/150-p56-300x138.png 300w",
        sizes: "(max-width: 620px) 100vw, 620px",
        alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P150"
    },
    opciones: [
        { valor: "A", texto: "Implemente el comando no passive-interface Serial0/1.", correcta: true },
        { valor: "B", texto: "Implemente el comando network 192.168.3.1 0.0.0.0 area 0 en el router R" },
        { valor: "C", texto: "Implemente el comando network 192.168.2.6 0.0.0.0 area 0 en el router R2." },
        { valor: "D", texto: "Cambie la ID del router R2 a 2.2.2.2." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 143
  {
    id: "q143",
    texto: "143. Haga coincidir el método HTTP con la operación RESTful.",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/2021-11-06_164413.jpg",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-06_164413.jpg 724w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-06_164413-300x187.jpg 300w",
        sizes: "(max-width: 724px) 100vw, 724px",
        alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P163"
    },
    opciones: [
        { valor: "A", texto: "GET" },
        { valor: "B", texto: "POST" },
        { valor: "C", texto: "PUT" },
        { valor: "D", texto: "DELETE" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 144
  {
    id: "q144",
    texto: "144. Una compañía está desarrollando una política de seguridad para tener comunicaciones seguras. En el intercambio de mensajes críticos entre una oficina de la sede central y una oficina de sucursal, un valor de hash debe recalcularse solo con un código predeterminado, para así garantizar la validez de la fuente de datos. ¿Qué aspecto de las comunicaciones seguras se aborda?",
    opciones: [
        { valor: "A", texto: "Imposibilidad de negación" },
        { valor: "B", texto: "Confidencialidad de los datos" },
        { valor: "C", texto: "Integridad de los datos" },
        { valor: "D", texto: "Autenticación de origen", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 145
  {
    id: "q145",
    texto: "145. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría rastreadores de paquetes?",
    opciones: [
        { valor: "A", texto: "Para detectar cualquier evidencia de un hack o malware en una computadora o red" },
        { valor: "B", texto: "Para probar y probar la robustez de un firewall utilizando paquetes falsificados especialmente creados" },
        { valor: "C", texto: "Para detectar herramientas instaladas dentro de archivos y directorios que proporcionan a los actores de amenazas acceso remoto y control a través de un equipo o red" },
        { valor: "D", texto: "Para capturar y analizar paquetes dentro de LAN o WLAN Ethernet tradicionales", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 146
  {
    id: "q146",
    texto: "146. ¿Qué grupo de API usa el controlador SDN para comunicarse con diversas aplicaciones?",
    opciones: [
        { valor: "A", texto: "API rumbo al Oeste" },
        { valor: "B", texto: "API ascendentes", correcta: true },
        { valor: "C", texto: "API descendentes" },
        { valor: "D", texto: "API rumbo al Este" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 147
  {
    id: "q147",
    texto: "147. ¿Qué componente de la arquitectura de ACI traduce las políticas de las aplicaciones a la programación de red?",
    opciones: [
        { valor: "A", texto: "El hipervisor" },
        { valor: "B", texto: "El switch Nexus 9000" },
        { valor: "C", texto: "El controlador de infraestructura de política de aplicación", correcta: true },
        { valor: "D", texto: "Los terminales de perfil de aplicación de red" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 148
  {
    id: "q148",
    texto: "148. Consulte la ilustración. Los empleados en 192.168.11.0/24 trabajan en información crítica y no se les permite el acceso fuera de su red. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
        src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/2021-11-06_164637.jpg",
        srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-06_164637.jpg 522w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-06_164637-300x247.jpg 300w",
        sizes: "(max-width: 522px) 100vw, 522px",
        alt: "Examen Final de ENSA Preguntas y Respuestas"
    },
    opciones: [
        { valor: "A", texto: "ACL estándar entrante en líneas v1 R1" },
        { valor: "B", texto: "ACL extendida entrante en R3 S0/0/1" },
        { valor: "C", texto: "ACL estándar entrante en R1 G0/1", correcta: true },
        { valor: "D", texto: "ACL extendida entrante en R3 G0 / 0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 149
  {
    id: "q149",
    texto: "149. ¿Qué mecanismo de colas no tiene provisión para priorizar o almacenar en búfer, sino que únicamente reenvía paquetes en el mismo orden en que llegan?",
    opciones: [
        { valor: "A", texto: "FIFO", correcta: true },
        { valor: "B", texto: "CBWFQ" },
        { valor: "C", texto: "WFQ" },
        { valor: "D", texto: "LLQ" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 150
  {
    id: "q150",
    texto: "150. Un grupo de usuarios en la misma red informa que sus computadoras se ejecutan lentamente. Después de investigar, el técnico determina que estas computadoras son parte de una red zombie. ¿Qué tipo de malware se utiliza para controlar estas computadoras?",
    opciones: [
        { valor: "A", texto: "Spyware" },
        { valor: "B", texto: "Rootkit" },
        { valor: "C", texto: "Botnet", correcta: true },
        { valor: "D", texto: "Virus" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

    // Pregunta 151
  {
    id: "q151",
    texto: "151. ¿Qué tipo de tráfico se describe como un tráfico que recibe una prioridad más baja si no es de misión crítica?",
    opciones: [
      { valor: "A", texto: "Voz" },
      { valor: "B", texto: "de HDR", correcta: true },
      { valor: "C", texto: "Video" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 152
  {
    id: "q152",
    texto: "152. Consulte la ilustración. La compañía ha proporcionado teléfonos IP a los empleados en la red 192.168.10.0/24 y el tráfico de voz necesitará prioridad sobre el tráfico de datos. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/211-i350679v1n1_C3M4-Diagram.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/211-i350679v1n1_C3M4-Diagram.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/211-i350679v1n1_C3M4-Diagram-300x233.jpg 300w",
      sizes: "(max-width: 570px) 100vw, 570px",
      alt: "CCNA Examen Final de ENSA Preguntas y Respuestas P211"
    },
    opciones: [
      { valor: "A", texto: "ACL estándar entrante en líneas v1 R1" },
      { valor: "B", texto: "ACL extendida entrante en R1 G0/0", correcta: true },
      { valor: "C", texto: "ACL extendida entrante en R3 G0 / 0" },
      { valor: "D", texto: "ACL estándar entrante en R1 G0 / 1" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 153
  {
    id: "q153",
    texto: "153. Cuando se implementa QoS en una red convergente, ¿cuáles son los dos factores que se pueden controlar para mejorar el rendimiento de la red para el tráfico en tiempo real? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "fluctuación de fase" , correcta: true },
      { valor: "B", texto: "enrutamiento de paquetes" },
      { valor: "C", texto: "velocidad de enlace" },
      { valor: "D", texto: "direccionamiento de paquetes" },
      { valor: "E", texto: "retardo", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "E"]
  },

  // Pregunta 154
  {
    id: "q154",
    texto: "154. En una red empresarial grande, ¿cuáles son las dos funciones que llevan a cabo los routers en la capa de distribución? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Conectar los usuarios a la red." },
      { valor: "B", texto: "Proporcionar seguridad de tráfico de datos.", correcta: true },
      { valor: "C", texto: "Proporcionar alimentación por Ethernet a los dispositivos." },
      { valor: "D", texto: "Proporcionar un backbone de red de alta velocidad.", correcta: true },
      { valor: "E", texto: "Conectar redes remotas." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "D"]
  },

  // Pregunta 155
  {
    id: "q155",
    texto: "155. Un administrador está configurando OSPF de área única en un router. Una de las redes que se deben anunciar es 172.20.0.0 255.255.252.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.0.3" },
      { valor: "B", texto: "0.0.63.255" },
      { valor: "C", texto: "0.0.0.7" },
      { valor: "D", texto: "0.0.3.255", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 156
  {
    id: "q156",
    texto: "156. ¿Qué tres afirmaciones se consideran generalmente mejores prácticas en la colocación de ACL? (Escoja tres opciones.)",
    opciones: [
      { valor: "A", texto: "Coloque ACL extendidas cerca de la dirección IP de destino del tráfico." },
      { valor: "B", texto: "Coloque ACL extendidas cerca de la dirección IP de origen del tráfico.", correcta: true },
      { valor: "C", texto: "Filtrar el tráfico no deseado antes de que se traslade a un enlace de bajo ancho de banda.", correcta: true },
      { valor: "D", texto: "Coloque ACL estándar cerca de la dirección IP de destino del tráfico.", correcta: true },
      { valor: "E", texto: "Coloque ACL estándar cerca de la dirección IP de origen del tráfico." },
      { valor: "F", texto: "Para cada ACL entrante colocada en una interfaz, debe haber una ACL saliente coincidente." }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "C", "D"]
  },

  // Pregunta 157
  {
    id: "q157",
    texto: "157. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para mostrar información sobre los parámetros de configuración de NAT y el número de direcciones en el grupo?",
    opciones: [
      { valor: "A", texto: "show ip cache" },
      { valor: "B", texto: "show ip nat statistics", correcta: true },
      { valor: "C", texto: "show version" },
      { valor: "D", texto: "show running-config" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 158
  {
    id: "q158",
    texto: "158. Consulte la ilustración. ¿Qué conclusión se puede sacar a partir de esta red de acceso múltiple de OSPF?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/2021-11-12_163231.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/2021-11-12_163231.jpg 420w, https://examenredes.com/wp-content/uploads/2021/09/2021-11-12_163231-300x184.jpg 300w",
      sizes: "(max-width: 420px) 100vw, 420px",
      alt: "Enterprise Networking, Security, and Automation ( Version 7.00) - Examen Final de ENSA"
    },
    opciones: [
      { valor: "A", texto: "Todos los routers DROTHER envían LSA al DR y al BDR a la dirección de multidifusión 224.0.0.5." },
      { valor: "B", texto: "Si el DR deja de producir paquetes de saludo, se seleccionará un BDR y, luego, se asciende a sí mismo y asume la función de DR." },
      { valor: "C", texto: "Con la elección del DR, la cantidad de adyacencias se reduce de 6 a 3.", correcta: true },
      { valor: "D", texto: "Cuando se selecciona un DR, todos los demás routers que no sean DR se convierten en DROTHER." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 159
  {
    id: "q159",
    texto: "159. ¿Qué tabla OSPF es idéntica en todos los router convergentes dentro de la misma área OSPF?",
    opciones: [
      { valor: "A", texto: "enrutamiento" },
      { valor: "B", texto: "adyacencia" },
      { valor: "C", texto: "topología", correcta: true },
      { valor: "D", texto: "neighbor" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  }, 
  // Pregunta 160
  {
    id: "q160",
    texto: "160. ¿Qué tipo de VPN proporciona una opción flexible para conectar un sitio central con sitios de sucursales?",
    opciones: [
      { valor: "A", texto: "Interfaz virtual del túnel IPSec" },
      { valor: "B", texto: "GRE sobre IPsec" },
      { valor: "C", texto: "VPN con MPLS" },
      { valor: "D", texto: "VPN multipunto dinámica.", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  
  // Pregunta 161
  {
    id: "q161",
    texto: "161. Un atacante está redirigiendo el tráfico a una puerta de enlace predeterminada falsa en un intento de interceptar el tráfico de datos de una red conmutada. ¿Qué tipo de ataque es este?",
    opciones: [
      { valor: "A", texto: "Suplantación de identidad de DHCP", correcta: true },
      { valor: "B", texto: "Túnel de DNS" },
      { valor: "C", texto: "Envenenamiento del caché de ARP" },
      { valor: "D", texto: "Inundación SYN a TCP" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  
  // Pregunta 162
  {
    id: "q162",
    texto: "162. ¿Cuál es la función principal de un hipervisor?",
    opciones: [
      { valor: "A", texto: "Es un dispositivo que filtra y verifica credenciales de seguridad." },
      { valor: "B", texto: "Es un dispositivo que sincroniza un grupo de sensores." },
      { valor: "C", texto: "Lo utilizan los ISP para monitorear los recursos de informática en la nube." },
      { valor: "D", texto: "Se utiliza para crear y administrar varias instancias de máquinas virtuales en una máquina host.", correcta: true },
      { valor: "E", texto: "Es un software utilizado para coordinar y preparar datos para analizar." }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },
  
  // Pregunta 163
  {
    id: "q163",
    texto: "163. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una única entrada:",
    pre: "access-list 101 permit tcp 10.1.1.0 0.0.255 host 192.31.7.45 eq dns .",
    opciones: [
      { valor: "A", texto: "Denegado", correcta: true },
      { valor: "B", texto: "Permitido" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  
  // Pregunta 164
  {
    id: "q164",
    texto: "164. ¿Qué protocolo utiliza números de estrato más pequeños para indicar que el servidor está más cerca de la fuente de tiempo autorizada que los números de estrato más grandes?",
    opciones: [
      { valor: "A", texto: "TFTP" },
      { valor: "B", texto: "MPLS" },
      { valor: "C", texto: "NTP", correcta: true },
      { valor: "D", texto: "SYSLOG" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  
  // Pregunta 165
  {
    id: "q165",
    texto: "165. ¿Qué tipo de VPN implica un protocolo de túnel no seguro encapsulado por IPsec?",
    opciones: [
      { valor: "A", texto: "GRE sobre IPsec", correcta: true },
      { valor: "B", texto: "VPN multipunto dinámica." },
      { valor: "C", texto: "Interfaz virtual del túnel IPSec" },
      { valor: "D", texto: "VPN con MPLS" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  
  // Pregunta 166
  {
    id: "q166",
    texto: "166. Consulte la ilustración. El CEO de la compañía exige que se cree una ACL para permitir el tráfico de correo electrónico a Internet y denegar el acceso FTP. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/185-What-is-the-best-ACL-type-and-placement-to-use-in-this-situation.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/185-What-is-the-best-ACL-type-and-placement-to-use-in-this-situation.jpg 648w, https://examenredes.com/wp-content/uploads/2021/09/185-What-is-the-best-ACL-type-and-placement-to-use-in-this-situation-300x249.jpg 300w",
      sizes: "(max-width: 648px) 100vw, 648px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P185"
    },
    opciones: [
      { valor: "A", texto: "ACL estándar entrante en la interfaz WAN R2 que se conecta a Internet" },
      { valor: "B", texto: "ACL extendida saliente en la interfaz WAN R2 hacia Internet", correcta: true },
      { valor: "C", texto: "ACL extendida entrante en R2 S0/0/0" },
      { valor: "D", texto: "ACL estándar entrante en R1 G0/0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  
  // Pregunta 167
  {
    id: "q167",
    texto: "167. ¿Qué tipo de tráfico se describe como no resistente a la pérdida?",
    opciones: [
      { valor: "A", texto: "Voz" },
      { valor: "B", texto: "Datos" },
      { valor: "C", texto: "Video", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  
  // Pregunta 168
  {
    id: "q168",
    texto: "168. Un administrador de red modificó un router habilitado para OSPF para tener un ajuste de temporizador de saludo de 20 segundos. ¿Cuál es la nueva configuración de tiempo de intervalo muerto de forma predeterminada?",
    opciones: [
      { valor: "A", texto: "40 segundos" },
      { valor: "B", texto: "60 segundos" },
      { valor: "C", texto: "80 segundos", correcta: true },
      { valor: "D", texto: "100 segundos" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  
  // Pregunta 169
  {
    id: "q169",
    texto: "169. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para mostrar cualquier traducción PAT dinámica que haya sido creada por el tráfico?",
    opciones: [
      { valor: "A", texto: "show ip nat statistics" },
      { valor: "B", texto: "show ip nat translations", correcta: true },
      { valor: "C", texto: "show ip interfaces" },
      { valor: "D", texto: "show ip route" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  
  // Pregunta 170
  {
    id: "q170",
    texto: "170. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una única entrada:\n<pre>access-list 100 permit tcp 192.168.10.0 0.0.0.255 172.17.200.0 0.0.0.255 eq www .</pre>\nSi se recibe un paquete con una dirección de origen 192.168.10.244, una dirección de destino 172.17.200.56 y un protocolo 80 en la interfaz, ¿está permitido o denegado el paquete?",
    opciones: [
      { valor: "A", texto: "Denegado" },
      { valor: "B", texto: "Permitido", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 171
  {
    id: "q171",
    texto: "171. Consulte la ilustración. Un administrador de red ha implementado QoS y ha configurado la red para marcar el tráfico en los teléfonos VoIP, así como los switches de la capa 2 y la capa 3. ¿Dónde se debe hacer la marcación inicial para establecer el límite de confianza?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/70-i290000v1n1_Trust-Boundary2.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/70-i290000v1n1_Trust-Boundary2.jpg 600w, https://examenredes.com/wp-content/uploads/2021/09/70-i290000v1n1_Trust-Boundary2-300x159.jpg 300w, https://examenredes.com/wp-content/uploads/2021/09/70-i290000v1n1_Trust-Boundary2-310x165.jpg 310w",
      sizes: "(max-width: 600px) 100vw, 600px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P70"
    },
    opciones: [
      { valor: "A", texto: "Límite de confianza 1", correcta: true },
      { valor: "B", texto: "Límite de confianza 4" },
      { valor: "C", texto: "Límite de confianza 3" },
      { valor: "D", texto: "Límite de confianza 2" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 172
  {
    id: "q172",
    texto: "172. ¿Qué tipo de VPN permite el tráfico de multidifusión y difusión a través de una VPN segura de sitio a sitio?",
    opciones: [
      { valor: "A", texto: "Interfaz virtual del túnel IPSec" },
      { valor: "B", texto: "GRE sobre IPsec", correcta: true },
      { valor: "C", texto: "VPN SSL" },
      { valor: "D", texto: "VPN multipunto dinámica" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 173
  {
    id: "q173",
    texto: "173. ¿Cuál es el nombre de la capa en el diseño de red conmutada sin bordes de Cisco que se considera la columna vertebral utilizada para la conectividad de alta velocidad y el aislamiento de fallas?",
    opciones: [
      { valor: "A", texto: "Acceso a la red" },
      { valor: "B", texto: "Acceso" },
      { valor: "C", texto: "Enlace de datos" },
      { valor: "D", texto: "Núcleo", correcta: true },
      { valor: "E", texto: "Red" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 174
  {
    id: "q174",
    texto: "174. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría fuzzers?",
    opciones: [
      { valor: "A", texto: "para aplicar ingeniería inversa a los archivos binarios al escribir exploits y al analizar malware" },
      { valor: "B", texto: "para descubrir vulnerabilidades de seguridad de un equipo", correcta: true },
      { valor: "C", texto: "para detectar cualquier evidencia de un hack o malware en una computadora o red" },
      { valor: "D", texto: "para detectar herramientas instaladas dentro de archivos y directorios que proporcionan a los actores de amenazas acceso remoto y control a través de un equipo o red" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 175
  {
    id: "q175",
    texto: "175. ¿Qué tipo de tráfico se describe como predecible y fluido?",
    opciones: [
      { valor: "A", texto: "Voz", correcta: true },
      { valor: "B", texto: "Datos" },
      { valor: "C", texto: "Video" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 176
  {
    id: "q176",
    texto: "176. Una empresa ha contratado a una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la empresa. ¿Por qué el equipo usaría herramientas forenses?",
    opciones: [
      { valor: "A", texto: "para detectar herramientas instaladas dentro de archivos y directorios que proporcionan a los actores de amenazas acceso remoto y control a través de un equipo o red" },
      { valor: "B", texto: "para detectar cualquier evidencia de un hack o malware en una computadora o red", correcta: true },
      { valor: "C", texto: "para obtener sistemas operativos especialmente diseñados precargados con herramientas optimizadas para hackear" },
      { valor: "D", texto: "para aplicar ingeniería inversa a los archivos binarios al escribir exploits y al analizar malware" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 177
  {
    id: "q177",
    texto: "177. Consulte la ilustración. La directiva corporativa exige que el acceso a la red de servidores se restrinja únicamente a los empleados internos. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/200-i350786v1n1_C3M4-Diagram.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/200-i350786v1n1_C3M4-Diagram.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/200-i350786v1n1_C3M4-Diagram-300x233.jpg 300w",
      sizes: "(max-width: 570px) 100vw, 570px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P200"
    },
    opciones: [
      { valor: "A", texto: "ACL estándar saliente en R2 S0/0/0" },
      { valor: "B", texto: "ACL extendido de salida en R2 S0 / 0/1", correcta: true },
      { valor: "C", texto: "ACL extendida entrante en R2 S0/0/0" },
      { valor: "D", texto: "ACL estándar entrante en la interfaz WAN R2 que se conecta a Internet" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 178
  {
    id: "q178",
    texto: "178. ¿Qué protocolo es un protocolo de nivel 2 neutral del proveedor que anuncia la identidad y las capacidades del dispositivo host a otros dispositivos de red conectados?",
    opciones: [
      { valor: "A", texto: "SNMP" },
      { valor: "B", texto: "MPLS" },
      { valor: "C", texto: "NTP" },
      { valor: "D", texto: "LLDP", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 179
  {
    id: "q179",
    texto: "179. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para borrar entradas dinámicas antes de que el tiempo de espera haya expirado?",
    opciones: [
      { valor: "A", texto: "clear ip nat translation", correcta: true },
      { valor: "B", texto: "clear access-list counters" },
      { valor: "C", texto: "clear ip dhcp" },
      { valor: "D", texto: "clear ip pat statistics" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 180
  {
    id: "q180",
    texto: "180. Un administrador está configurando OSPF de área única en un router. Una de las redes que deben anunciarse es 172.20.0.0 255.255.252.0. ¿Qué máscara comodín usaría el administrador en la instrucción de red OSPF?",
    opciones: [
      { valor: "A", texto: "0.0.3.255", correcta: true },
      { valor: "B", texto: "0.0.15.255" },
      { valor: "C", texto: "0.0.1.255" },
      { valor: "D", texto: "0.0.7.255" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 181
  {
    id: "q181",
    texto: "181. ¿Qué protocolo envía anuncios periódicos entre los dispositivos Cisco conectados para conocer el nombre del dispositivo, la versión del IOS y el número y el tipo de interfaces?",
    opciones: [
      { valor: "A", texto: "LLDP" },
      { valor: "B", texto: "CDP", correcta: true },
      { valor: "C", texto: "SNMP" },
      { valor: "D", texto: "NTP" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 182
  {
    id: "q182",
    texto: "182. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una sola entrada:\n<pre>access-list 101 permit udp 192.168.100.32 0.0.0.7 host 198.133.219.76 eq telnet .</pre>\nSi se recibe un paquete con una dirección de origen de 198.133.219.100, una dirección de destino de 198.133.219.170 y un protocolo de 23 en la interfaz, ¿está permitido o denegado el paquete?",
    opciones: [
      { valor: "A", texto: "Permitido" },
      { valor: "B", texto: "Denegado", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 183
  {
    id: "q183",
    texto: "183. Una compañía ha contratado una empresa de seguridad de red para ayudar a identificar las vulnerabilidades de la red corporativa. La firma envía un equipo para realizar pruebas de penetración a la red de la compañía. ¿Por qué el equipo usaría sistemas operativos de hackeo?",
    opciones: [
      { valor: "A", texto: "para aplicar ingeniería inversa a los archivos binarios al escribir exploits y al analizar malware" },
      { valor: "B", texto: "para codificar datos, utilizando esquemas de algoritmos, para evitar el acceso no autorizado a los datos cifrados" },
      { valor: "C", texto: "para detectar cualquier evidencia de un hack o malware en una computadora o red" },
      { valor: "D", texto: "para obtener sistemas operativos especialmente diseñados precargados con herramientas optimizadas para hackear", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 184
  {
    id: "q184",
    texto: "184. ¿Qué tipo de tráfico se describe como requiere al menos 384 Kbps de ancho de banda?",
    opciones: [
      { valor: "A", texto: "Datos" },
      { valor: "B", texto: "Video", correcta: true },
      { valor: "C", texto: "Voz" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 185
  {
    id: "q185",
    texto: "185. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para definir un grupo de direcciones para la traducción?",
    opciones: [
      { valor: "A", texto: "ip nat inside source list 24 interface serial 0/1/0 overload" },
      { valor: "B", texto: "ip nat outside" },
      { valor: "C", texto: "ip nat inside source static 172.19.89.13 198.133.219.65" },
      { valor: "D", texto: "ip nat pool POOL-STAT 64.100.14.17 64.100.14.30 máscara de red 255.255.255.240", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 186
  {
    id: "q186",
    texto: "186. ¿Qué protocolo permite al administrador sondear a los agentes para acceder a la información del agente MIB?",
    opciones: [
      { valor: "A", texto: "TFTP" },
      { valor: "B", texto: "SYSLOG" },
      { valor: "C", texto: "SNMP", correcta: true },
      { valor: "D", texto: "Programador" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 187
  {
    id: "q187",
    texto: "187. ¿Qué comando se usaría como parte de la configuración de NAT o PAT para vincular las direcciones locales internas al grupo de direcciones disponibles para la traducción PAT?",
    opciones: [
      { valor: "A", texto: "ip nat inside source list 14 pool POOL-STAT overload", correcta: true },
      { valor: "B", texto: "ip nat translation timeout 36000" },
      { valor: "C", texto: "ip nat inside source static 172.19.89.13 198.133.219.65" },
      { valor: "D", texto: "ip nat inside source list ACCTNG pool POOL-STAT" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 188
  {
    id: "q188",
    texto: "188. ¿Qué paso en el proceso de enrutamiento de estado de vínculo se describe por un router que inserta las mejores rutas en la tabla de enrutamiento?",
    opciones: [
      { valor: "A", texto: "declarando que un vecino es inaccesible" },
      { valor: "B", texto: "rutas de equilibrio de carga igual costo" },
      { valor: "C", texto: "eligiendo la mejor ruta", correcta: true },
      { valor: "D", texto: "Ejecuta el algoritmo SPF" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 189
  {
    id: "q189",
    texto: "189. Se aplica una ACL entrante en una interfaz de router. La ACL consta de una sola entrada:\n<pre>access-list 100 permit tcp 192.168.10.0 0.0.0.255 any eq www.</pre>\nSi se recibe un paquete con una dirección de origen 192.168.10.45, una dirección de destino 10.10.3.27 y un protocolo 80 en la interfaz, ¿está permitido o denegado el paquete?",
    opciones: [
      { valor: "A", texto: "Permitido", correcta: true },
      { valor: "B", texto: "Denegado" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 190
  {
    id: "q190",
    texto: "190. ¿Qué se utiliza para rellenar previamente la tabla de adyacencia en los dispositivos Cisco que utilizan CEF para procesar paquetes?",
    opciones: [
      { valor: "A", texto: "el FIB" },
      { valor: "B", texto: "la tabla de enrutamiento" },
      { valor: "C", texto: "la tabla ARP", correcta: true },
      { valor: "D", texto: "el DSP" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 191
  {
    id: "q191",
    texto: "191. Se aplica una ACL entrante en una interfaz de enrutador. La ACL consta de una sola entrada:\n<pre>access-list 210 permit tcp 172.18.20.0 0.0.0.31 172.18.20.32 0.0.0.31 eq ftp .</pre>\nSi se recibe un paquete con una dirección de origen 172.18.20.14, una dirección de destino 172.18.20.40 y un protocolo 21 en la interfaz, ¿el paquete está permitido o denegado?",
    opciones: [
      { valor: "A", texto: "permitido", correcta: true },
      { valor: "B", texto: "denegado" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 192
  {
    id: "q192",
    texto: "192. ¿Cuáles son los dos beneficios de extender la conectividad de la capa de acceso a los usuarios a través de un medio inalámbrico? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "costos reducidos", correcta: true },
      { valor: "B", texto: "disminución del número de puntos críticos de falla" },
      { valor: "C", texto: "mayor flexibilidad", correcta: true },
      { valor: "D", texto: "mayor disponibilidad de ancho de banda" },
      { valor: "E", texto: "mayores opciones de administración de red" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "C"]
  },

  // Pregunta 193
  {
    id: "q193",
    texto: "193. Consulte la ilustración. ¿Qué formato de datos se utiliza para representar los datos para aplicaciones de automatización de redes?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/76-i349058v2n1_347058.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/76-i349058v2n1_347058.png 600w, https://examenredes.com/wp-content/uploads/2021/09/76-i349058v2n1_347058-300x159.png 300w",
      sizes: "(max-width: 600px) 100vw, 600px",
      alt: "CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas P76"
    },
    opciones: [
      { valor: "A", texto: "XML" },
      { valor: "B", texto: "YAML" },
      { valor: "C", texto: "HTML" },
      { valor: "D", texto: "JSON", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 194
  {
    id: "q194",
    texto: "194. ¿Qué paso de QoS debe ocurrir antes de que se puedan marcar los paquetes?",
    opciones: [
      { valor: "A", texto: "clasificando", correcta: true },
      { valor: "B", texto: "dar forma" },
      { valor: "C", texto: "hacer cola" },
      { valor: "D", texto: "vigilancia" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 195
  {
    id: "q195",
    texto: "195. ¿Cómo ayuda la virtualización con la recuperación ante desastres dentro de un centro de datos?",
    opciones: [
      { valor: "A", texto: "mejora de las prácticas comerciales" },
      { valor: "B", texto: "suministro de flujo de aire constante" },
      { valor: "C", texto: "compatibilidad con la migración en vivo", correcta: true },
      { valor: "D", texto: "garantía de poder" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 196
  {
    id: "q196",
    texto: "196. ¿Qué protocolo es un protocolo de capa 2 independiente del proveedor que anuncia la identidad y las capacidades del dispositivo host a otros dispositivos de red conectados?",
    opciones: [
      { valor: "A", texto: "LLDP", correcta: true },
      { valor: "B", texto: "NTP" },
      { valor: "C", texto: "TFTP" },
      { valor: "D", texto: "SNMP" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 197
  {
    id: "q197",
    texto: "197. ¿Qué paso en el proceso de enrutamiento del estado del vínculo es descrito por un router que ejecuta un algoritmo para determinar la mejor ruta a cada destino?",
    opciones: [
      { valor: "A", texto: "construye la tabla de topología" },
      { valor: "B", texto: "seleccionando la ID del router" },
      { valor: "C", texto: "declarando que un vecino es inaccesible" },
      { valor: "D", texto: "Ejecucuta el algoritmo SPF", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 198
  {
    id: "q198",
    texto: "198. ¿Qué tipo de VPN se conecta mediante la función Transport Layer Security (TLS)?",
    opciones: [
      { valor: "A", texto: "VPN SSL", correcta: true },
      { valor: "B", texto: "Interfaz de túnel virtual IPsec" },
      { valor: "C", texto: "GRE sobre IPsec" },
      { valor: "D", texto: "VPN multipunto dinámica" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 199
  {
    id: "q199",
    texto: "199. ¿Qué tipo de VPN utiliza una configuración de concentrador y radio para establecer una topología de malla completa?",
    opciones: [
      { valor: "A", texto: "VPN MPLS", correcta: true },
      { valor: "B", texto: "GRE sobre IPsec" },
      { valor: "C", texto: "Interfaz de túnel virtual IPsec" },
      { valor: "D", texto: "VPN multipunto dinámica" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 200
  {
    id: "q200",
    texto: "200. Consulte la ilustración. Los privilegios de Internet para un empleado se han revocado debido a abusos, pero el empleado aún necesita acceso a los recursos de la empresa. ¿Cuál es el mejor tipo y ubicación de ACL para usar en esta situación?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/152-i350685v1n1_C3M4-Diagram.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/152-i350685v1n1_C3M4-Diagram.jpg 570w, https://examenredes.com/wp-content/uploads/2021/09/152-i350685v1n1_C3M4-Diagram-300x233.jpg 300w",
      sizes: "(max-width: 570px) 100vw, 570px",
      alt: "CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas P152"
    },
    opciones: [
      { valor: "A", texto: "ACL estándar entrante en la interfaz R2 WAN que se conecta a Internet" },
      { valor: "B", texto: "ACL estándar saliente en la interfaz R2 WAN hacia Internet", correcta: true },
      { valor: "C", texto: "ACL estándar entrante en R1 G0/0" },
      { valor: "D", texto: "ACL estándar saliente en R1 G0/0" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },
  // Pregunta 201
  {
    id: "q201",
    texto: "201. ¿Qué tipo de tráfico se describe como tráfico que requiere una mayor prioridad si es interactivo?",
    opciones: [
      { valor: "A", texto: "voz" },
      { valor: "B", texto: "datos" , correcta: true },
      { valor: "C", texto: "video" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 202
  {
    id: "q202",
    texto: "202. ¿Qué tipo de VPN implica el reenvío de tráfico a través de la red troncal mediante el uso de etiquetas distribuidas entre los enrutadores centrales?",
    opciones: [
      { valor: "A", texto: "VPN MPLS", correcta: true },
      { valor: "B", texto: "GRE sobre IPsec" },
      { valor: "C", texto: "Interfaz de túnel virtual IPsec" },
      { valor: "D", texto: "VPN multipunto dinámica" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 203
  {
    id: "q203",
    texto: "184. ¿Qué tipo de tráfico se describe como el uso de TCP o UDP según la necesidad de recuperación de errores?",
    opciones: [
      { valor: "A", texto: "video" },
      { valor: "B", texto: "voz" },
      { valor: "C", texto: "datos", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 204
  {
    id: "q204",
    texto: "191. Se aplica una ACL entrante en una interfaz de enrutador. La ACL consta de una sola entrada:\n<pre><b>access-list 100 permit tcp 192.168.10.0 0.0.0.255 any eq www .</b></pre>\n<strong>Si se recibe un paquete con una dirección de origen de 192.168.10.45, una dirección de destino de 10.10.3.27 y un protocolo de 80 en la interfaz, ¿el paquete está permitido o denegado?</strong>",
    opciones: [
      { valor: "A", texto: "permitido", correcta: true },
      { valor: "B", texto: "denegado" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },

  // Pregunta 205
  {
    id: "q205",
    texto: "195. ¿Qué término describe agregar un valor al encabezado del paquete, lo más cerca posible de la fuente, para que el paquete coincida con una política definida?",
    opciones: [
      { valor: "A", texto: "vigilancia" },
      { valor: "B", texto: "marcas de tráfico", correcta: true },
      { valor: "C", texto: "detección temprana aleatoria ponderada (WRED)" },
      { valor: "D", texto: "modelado del tráfico" },
      { valor: "E", texto: "caída de la cola" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 206
  {
    id: "q206",
    texto: "196. ¿Qué tres factores relacionados con el tráfico influirían en la selección de un tipo de enlace WAN en particular? (Elija tres opciones.)",
    opciones: [
      { valor: "A", texto: "costo del enlace" },
      { valor: "B", texto: "cantidad de tráfico", correcta: true },
      { valor: "C", texto: "distancia entre sitios" },
      { valor: "D", texto: "confiabilidad" },
      { valor: "E", texto: "necesidades de seguridad", correcta: true },
      { valor: "F", texto: "tipo de tráfico", correcta: true }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["B", "E", "F"]
  },

  // Pregunta 207
  {
    id: "q207",
    texto: "198. ¿Qué protocolo es un protocolo de descubrimiento de capa 2 independiente del proveedor que debe configurarse por separado para transmitir y recibir paquetes de información?",
    opciones: [
      { valor: "A", texto: "SNMP" },
      { valor: "B", texto: "MPLS" },
      { valor: "C", texto: "LLDP", correcta: true },
      { valor: "D", texto: "NTP" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 208
  {
    id: "q208",
    texto: "201. Un técnico está trabajando en un switch de capa 2 y se da cuenta de que sigue apareciendo un mensaje% CDP-4-DUPLEX_MISMATCH para el puerto G0/5. ¿Qué comando debería emitir el técnico en el switch para iniciar el proceso de solución de problemas?",
    opciones: [
      { valor: "A", texto: "show cdp neighbors" },
      { valor: "B", texto: "show ip interface brief" },
      { valor: "C", texto: "show interface g0/5", correcta: true },
      { valor: "D", texto: "show cdp" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 209
  {
    id: "q209",
    texto: "202. ¿Qué recurso virtual se instalaría en un servidor de red para proporcionar acceso directo a los recursos de hardware?",
    opciones: [
      { valor: "A", texto: "VMware Fusion" },
      { valor: "B", texto: "una consola de administración" },
      { valor: "C", texto: "una VLAN dedicada" },
      { valor: "D", texto: "un hipervisor de tipo 1", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 210
  {
    id: "q210",
    texto: "203. Consulte la ilustración. Un administrador de red ha configurado una ACL estándar para permitir que solo las dos redes LAN conectadas a R1 accedan a la red que se conecta a la interfaz R2 G0/1. Al seguir las mejores prácticas, ¿en qué ubicación se debe aplicar la ACL estándar?",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/203-i282155v1n2_282152.png",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/203-i282155v1n2_282152.png 496w, https://examenredes.com/wp-content/uploads/2021/09/203-i282155v1n2_282152-300x165.png 300w",
      sizes: "(max-width: 496px) 100vw, 496px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P203"
    },
    opciones: [
      { valor: "A", texto: "R2 G0/1 entrante" },
      { valor: "B", texto: "R2 S0/0/1 saliente" },
      { valor: "C", texto: "R1 S0/0/0 saliente" },
      { valor: "D", texto: "R2 G0/1 saliente", correcta: true },
      { valor: "E", texto: "R2 G0/0 saliente" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  },

  // Pregunta 211
  {
    id: "q211",
    texto: "204. ¿Qué base de datos OSPF es idéntica en todos los enrutadores convergentes dentro de la misma área OSPF?",
    opciones: [
      { valor: "A", texto: "vecino" },
      { valor: "B", texto: "reenvío" },
      { valor: "C", texto: "estado de enlace", correcta: true },
      { valor: "D", texto: "adyacencia" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 212
  {
    id: "q212",
    texto: "205. ¿Cuáles son dos características a considerar al crear una ACL con nombre? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Utilice caracteres alfanuméricos si es necesario.", correcta: true },
      { valor: "B", texto: "Utilice caracteres especiales, como! o * para mostrar la importancia de la LCA." },
      { valor: "C", texto: "Modifique la ACL con un editor de texto." },
      { valor: "D", texto: "Sea descriptivo al crear el nombre de ACL.", correcta: true },
      { valor: "E", texto: "Use un espacio para facilitar la lectura para separar el nombre de la descripción" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "D"]
  },

  // Pregunta 213
  {
    id: "q213",
    texto: "206. Una coincidir el método de la API RESTful con la función CRUD.",
    imagen: {
      src: "./CCNA 3 v7 Examen Final de ENSA Preguntas y Respuestas/files/206-2020-10-25_185415.jpg",
      srcset: "https://examenredes.com/wp-content/uploads/2021/09/206-2020-10-25_185415.jpg 670w, https://examenredes.com/wp-content/uploads/2021/09/206-2020-10-25_185415-300x191.jpg 300w",
      sizes: "(max-width: 670px) 100vw, 670px",
      alt: "CCNA 3 v7 Examen Final Preguntas y Respuestas P206"
    },
    opciones: [
      { valor: "A", texto: "POST - Crear" },
      { valor: "B", texto: "GET - Leer" },
      { valor: "C", texto: "PUT - Actualizar" },
      { valor: "D", texto: "DELETE - Borrar" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["A"]
  },
  // Pregunta 214
  {
    id: "q214",
    texto: "209. Anycompany ha decidido reducir su huella ambiental reduciendo los costos de energía, mudándose a una instalación más pequeña y promoviendo el teletrabajo. ¿Qué servicio o tecnología respaldaría este requisito?",
    opciones: [
      { valor: "A", texto: "centro de datos" },
      { valor: "B", texto: "virtualización" },
      { valor: "C", texto: "servicios en la nube", correcta: true },
      { valor: "D", texto: "servidores dedicados" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },
  // Pregunta 215
  {
    id: "q215",
    texto: "210. ¿Qué técnica de QoS suaviza la tasa de salida de paquetes?",
    opciones: [
      { valor: "A", texto: "vigilancia" },
      { valor: "B", texto: "dar forma", correcta: true },
      { valor: "C", texto: "detección temprana aleatoria ponderada" },
      { valor: "D", texto: "Servicios integrados (IntServ)" },
      { valor: "E", texto: "marcado" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["B"]
  },

  // Pregunta 216
  {
    id: "q216",
    texto: "212. Un técnico de red está configurando SNMPv3 y ha establecido un nivel de seguridad de authPriv de SNMPv3. ¿Cuál es una característica de usar este nivel?",
    opciones: [
      { valor: "A", texto: "autentica un paquete utilizando solo el algoritmo SHA" },
      { valor: "B", texto: "autentica un paquete mediante una cadena que coincide con el nombre de usuario o la cadena de la comunidad" },
      { valor: "C", texto: "autentica un paquete mediante el método HMAC con MD5 o el método SHA", correcta: true },
      { valor: "D", texto: "autentica un paquete utilizando los algoritmos HMAC MD5 o HMAC SHA y un nombre de usuario" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 217
  {
    id: "q217",
    texto: "213. Un estudiante, haciendo un semestre de verano de estudio en el extranjero, ha tomado cientos de fotos en un teléfono inteligente y quiere respaldarlas en caso de pérdida. ¿Qué servicio o tecnología soportaría este requisito?",
    opciones: [
      { valor: "A", texto: "Cisco ACI" },
      { valor: "B", texto: "Servidores dedicados" },
      { valor: "C", texto: "Servicios en la nube", correcta: true },
      { valor: "D", texto: "Redes definidas por software" }
    ],
    tipo: "radio",
    respuestasCorrectas: ["C"]
  },

  // Pregunta 218
  {
    id: "q218",
    texto: "214. ¿Cuáles de las siguientes son dos ventajas de ampliar la conectividad de la capa de acceso a los usuarios a través de un medio inalámbrico? (Elija dos opciones.)",
    opciones: [
      { valor: "A", texto: "Reducción de costos", correcta: true },
      { valor: "B", texto: "Mayor flexibilidad", correcta: true },
      { valor: "C", texto: "Mayor disponibilidad de ancho de banda" },
      { valor: "D", texto: "Menor cantidad de puntos de error críticos" },
      { valor: "E", texto: "Mayor cantidad de opciones de administración de red" }
    ],
    tipo: "checkbox",
    respuestasCorrectas: ["A", "B"]
  },

  // Pregunta 219
  {
    id: "q219",
    texto: "215. Una oficina pequeña utiliza un router inalámbrico para conectarse con un cable módem para tener acceso a Internet. El administrador de la red recibe una llamada en la que le informan que una de las computadoras de la oficina no puede conectarse con sitios Web externos. El primer paso para la solución de problemas que ejecuta el administrador de red es emitir un ping al router inalámbrico desde la computadora de la oficina. ¿Qué técnica de solución de problemas representa?",
    opciones: [
      { valor: "A", texto: "Descendente" },
      { valor: "B", texto: "Ascendente" },
      { valor: "C", texto: "Sustitución" },
      { valor: "D", texto: "Divide y vencerás", correcta: true }
    ],
    tipo: "radio",
    respuestasCorrectas: ["D"]
  }];
    
// Variables globales para contar los aciertos, fallos y tiempo
let aciertos = 0;
let fallos = 0;
let tiempoTranscurrido = 0;
let tiempoIntervalo;

// Función para generar el HTML de las preguntas
function generarPreguntas() {
    const container = document.getElementById("test-container");

    // No mezclar las preguntas ni las opciones
    preguntas.forEach(pregunta => {
        const preguntaDiv = document.createElement("div");
        preguntaDiv.classList.add("question-container", "card", "p-3", "mb-3");

        // Título de la pregunta
        const titulo = document.createElement("h2");
        titulo.classList.add("card-title");
        titulo.innerHTML = pregunta.texto;
        preguntaDiv.appendChild(titulo);

        // Si la pregunta tiene una imagen, la añadimos
        if (pregunta.imagen) {
            const figure = document.createElement("figure");
            figure.classList.add("wp-caption", "aligncenter");
            const img = document.createElement("img");
            img.src = pregunta.imagen.src;
            img.srcset = pregunta.imagen.srcset;
            img.sizes = pregunta.imagen.sizes;
            img.alt = pregunta.imagen.alt;
            img.classList.add("img-fluid"); // Clase responsive
            figure.appendChild(img);
            preguntaDiv.appendChild(figure);
        }

        // Opciones
        const opcionesDiv = document.createElement("div");
        opcionesDiv.classList.add("options");

        let letraActual = "A"; // Iniciar con la letra 'A'
        pregunta.opciones.forEach(opcion => {
            const label = document.createElement("label");
            label.classList.add("option-label");
            const input = document.createElement("input");
            input.type = pregunta.tipo === "checkbox" ? "checkbox" : "radio";
            input.name = pregunta.id;
            input.value = opcion.valor;
            input.onclick = function () { verificar(pregunta); }; // Verificar automáticamente

            // Agregar el input y el texto con la letra al label
            label.appendChild(input);
            label.appendChild(document.createTextNode(`${opcion.valor}. ${opcion.texto}`));

            opcionesDiv.appendChild(label);

            // Avanzar a la siguiente letra
            letraActual = String.fromCharCode(letraActual.charCodeAt(0) + 1);
        });

        preguntaDiv.appendChild(opcionesDiv);

        // Feedback
        const feedback = document.createElement("span");
        feedback.classList.add("answer-feedback");
        feedback.id = `feedback-${pregunta.id}`;
        preguntaDiv.appendChild(feedback);

        // Añadir la pregunta al contenedor principal
        container.appendChild(preguntaDiv);
    });

    // Iniciar cronómetro
    iniciarContadorTiempo();
}

// Llamar a la función al cargar la página
window.onload = generarPreguntas;

// Función para verificar respuestas
function verificar(pregunta) {
    const feedbackElement = document.getElementById(`feedback-${pregunta.id}`);
    const inputs = document.getElementsByName(pregunta.id);
    let seleccionadas = [];

    // Obtener todas las opciones seleccionadas (checkbox o radio)
    inputs.forEach(input => {
        if (input.checked) seleccionadas.push(input.value);
    });

    // Comparar con las respuestas correctas
    if (pregunta.tipo === "radio") {
        // Para preguntas tipo "radio" (una sola respuesta correcta)
        if (seleccionadas.length === 1 && pregunta.respuestasCorrectas.includes(seleccionadas[0])) {
            feedbackElement.textContent = "¡Correcto!";
            feedbackElement.classList.remove("incorrect");
            feedbackElement.classList.add("correct");
            aciertos++; // Incrementar los aciertos

            // Deshabilitar todas las opciones y cambiar color de la opción correcta
            inputs.forEach(input => input.disabled = true);
        } else {
            feedbackElement.textContent = "Está mal";
            feedbackElement.classList.remove("correct");
            feedbackElement.classList.add("incorrect");
            fallos++; // Incrementar los fallos
        }
    } else if (pregunta.tipo === "checkbox") {
        // Para preguntas tipo "checkbox" (varias respuestas correctas)
        let respuestasCorrectas = pregunta.respuestasCorrectas.sort();
        seleccionadas = seleccionadas.sort();

        // No marcar como errónea hasta que se seleccione la respuesta correcta completa
        if (JSON.stringify(respuestasCorrectas) === JSON.stringify(seleccionadas)) {
            feedbackElement.textContent = "¡Correcto!";
            feedbackElement.classList.remove("incorrect");
            feedbackElement.classList.add("correct");
            aciertos++; // Incrementar los aciertos

            // Deshabilitar todas las opciones y cambiar color de la opción correcta
            inputs.forEach(input => input.disabled = true);
        } else {
            // Mostrar feedback solo si no se ha seleccionado correctamente
            feedbackElement.textContent = "Selecciona todas las opciones correctas";
            feedbackElement.classList.remove("correct");
            feedbackElement.classList.add("incorrect");
        }
    }

    // Actualizar contadores
    mostrarContadores();
}

// Mostrar contadores
function mostrarContadores() {
    const contadoresDiv = document.getElementById("contadores");
    contadoresDiv.innerHTML = `
        <div>Aciertos: ${aciertos} | Fallos: ${fallos} | Tiempo: ${tiempoTranscurrido}s</div>
    `;
}

// Iniciar cronómetro
function iniciarContadorTiempo() {
    tiempoIntervalo = setInterval(() => {
        tiempoTranscurrido++;
        mostrarContadores();
    }, 1000);
}
</script>
    <!-- Bootstrap JS y dependencias -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.10/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
