<div class="container mt-4">
    <h1>Modelo Ambiental</h1>

    <br><h3>¿Qué es un modelo ambiental?</h3>
    <br><p>El modelo ambiental es una representación conceptual del entorno de un sistema que describe cómo interactúa este con los diferentes actores (personas u otros sistemas) externos. Este modelo ayuda a identificar las entradas y salidas principales del sistema, los actores involucrados y las relaciones entre ellos. El modelo ambiental se centra en qué hace el sistema y no en cómo lo hace.

        <br>Por lo general, el modelo ambiental incluye:
    <ol>
        <li>Declaración de propósito: Explica el objetivo principal del sistema.</li>
        <li>Lista de acontecimientos: Enumera las interacciones o eventos clave que se generan entre el sistema y los actores externos.</li>
        <li>Diagrama de contexto: Representa gráficamente las conexiones de entradas y salidas entre el sistema y sus actores externos.</p></li>
    </ol>

    <br><h3>Para qué sirve un modelo ambiental?</h3>

    <ol>
        <li>Delimitar el alcance del sistema: Define claramente los límites del sistema, identificando qué es parte de este y qué pertenece al entorno externo.</li>
        <li>Entender las interacciones clave: Ayuda a comprender qué información fluye hacia el sistema (entradas) y qué genera como resultado (salidas).</li>
        <li>Facilitar la comunicación entre equipos: Es una herramienta visual útil para explicar el propósito y las funciones del sistema a los interesados (clientes, desarrolladores, diseñadores, etc.).</li>
        <li>Guiar el diseño y desarrollo del sistema: Actúa como base para la planificación de los procesos internos y el diseño de la arquitectura del software.</li>
        <li>Evitar confusiones: Asegura que todas las partes involucradas entiendan los límites y las funciones del sistema, reduciendo malentendidos durante el desarrollo.</li>
    </ol>

    <br><p>En resumen, el modelo ambiental nos proporciona una visión clara del contexto del sistema, siendo el primer paso fundamental para su diseño y desarrollo.</p>
        
    <br><h1>Modelo Ambiental para nuestro sistema</h1>

    <br><h3>a) DECLARACIÓN DE PROPÓSITOS: </h3>

    <p>El sistema tiene como objetivo principal gestionar las operaciones de venta y el control de inventarios en el supermercado Hipermaxi. Esto incluye la administración de productos, precios, existencias, compras de clientes, proveedores, ofertas y reportes de ventas. Además, permite mejorar la experiencia del cliente, optimizar los procesos internos y asegurar la disponibilidad de productos.</p>
    <h3>b) LISTA DE ACONTECIMIENTOS: </h3>
		
    <p>Eventos relacionados con las ventas:</p>
    <ol>
        <li>Un cliente selecciona productos para comprar.</li>
        <li>Un cliente realiza el pago en caja.</li>
        <li>Se genera un comprobante de venta.</li>
        <li>Se realiza una devolución de producto por parte del cliente.</li>
    </ol>
    
    <p>Eventos relacionados con la gestión de inventarios:</p>

    <ol>
        <li>El inventario de un producto disminuye tras la venta.
        <li>Un empleado actualiza las existencias de un producto.
        <li>Se realiza el ingreso de un nuevo producto al sistema.
        <li>Se detecta un producto con stock mínimo y se notifica al proveedor.
    </ol>
        
    <p>Eventos relacionados con proveedores:</p>
    <ol>
        <li>Se realiza un pedido de reposición de productos a un proveedor.</li>
        <li>Se registra la recepción de un pedido de un proveedor.</li>
    </ol>
    
    <p>Eventos relacionados con ofertas y promociones:</p>
    <ol>
        <li>Un administrador define una oferta o descuento para un producto.</li>
        <li>Se actualizan los precios de productos en oferta.</li>
    </ol>

    <h3>Diagrama de Contexto</h3>
    <div class="text-center mb-4">
        <img src="img/MA_DiagramaContexto.png" alt="Diagrama Contexto" style="width: 1200px; height: auto;">
        <p>Diagrama de Contexto</p>
    </div>
</div>
