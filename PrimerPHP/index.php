<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrimerPHP</title>

    <!--Descripcion SEO y para compartir-->
    <meta name="description" content="Descripción de la página">
    <!--Imagen para compartir. Se usa en SEO y para compartir-->
    <meta name="image" content="./imagen.png">

    <link rel="stylesheet" type="text/css" href="./style.css">
    <script src="./functions-js"></script>

</head>
<body>
    <h1>hola</h1>
    <h2>subh2</h2>
    <h3>subh3</h3>
    <h4>subh4</h4>
    <h5>subh5</h5>
    <h6>subh6</h6>


    <p>parrafo</p>

    <div class="d-grid">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    

    </div>


    <div class="d-flex">

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus justo non urna efficitur, sed condimentum erat euismod. Cras in sapien porta, posuere mauris sit amet, molestie purus. Pellentesque sollicitudin venenatis metus, quis egestas nulla sagittis vel. Duis condimentum suscipit mi, a euismod felis sodales eget. Suspendisse potenti. Mauris facilisis sed ante quis egestas. Vivamus fringilla, nisl a convallis pretium, ipsum mauris finibus dui, eget varius quam lacus sit amet justo. Nunc nec nisi eget dolor varius pretium. Etiam ut vulputate orci.</p>
    

    </div>


    <ol>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
    </ol>


    <ul>
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
    </ul>


    <!--
    NAME
    ACTION
    METHOD (GET/POST)
        - GET para realizar busquedas con datos no sensibles
        - POST parecido al GET, los datos de aqui van encriptados (HTTP) a un servidor
    
    -->

    <form name="" action="" method="post" class="f-grid">

        <div>
            <label for="fullname">Nombre completo</label>
            <input type="text" name="" id="fullname" placeholder="Juan Perez" required>
        </div>

        <div>
            <label for="email">Correo electronico</label>
            <input type="email" name="" id="email" value="juan@gmail.com" readonly>
        </div>

        <div>
            <label for="email">Contraseña</label>
            <input type="password" name="" required>
        </div>

        <div>    
            <input type="checkbox" name="">
            <input type="radio" name="">
            <input type="hidden" name="">
            <input type="date" name="">
            <input type="datetime-local" name="">
            <input type="button" name="">
            <input type="file" name="">
            <input type="submit" name="">
            <input type="reset" name="">
            
                
        </div>

    </form>

</body>
</html>