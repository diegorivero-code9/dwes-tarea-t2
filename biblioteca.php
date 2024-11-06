<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $libros = [
        "libro1" => [
            "titulo" => "PHP para Principiantes",
            "autor" => "Carlos Ruiz",
            "precio" => 19.99,
            "categoria" => "Desarrollo web"
        ],
        "libro2" => [
            "titulo" => "JavaScript Avanzado",
            "autor" => "Laura García",
            "precio" => 25.99,
            "categoria" => "Desarrollo web"
        ],
        "libro3" => [
            "titulo" => "Algoritmos en Python",
            "autor" => "Miguel Fernández",
            "precio" => 29.99,
            "categoria" => "Algoritmos"
        ]
    ];

    $filteredBooks = array_filter($libros, function ($libros): bool {
        return $libros['categoria'] === "Desarrollo web";
    });
    ?>

    <h2>Información de todos los libros</h2>
    <table border="1px">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio</th>
            <th>Categoría</th>

        </tr>

        <?php foreach ($libros  as $libro): ?>
            <tr>
                <td><?= $libro['titulo'] ?> </td>
                <td> <?= $libro['autor'] ?></td>
                <td><?= $libro['precio'] ?></td>
                <td><?= $libro['categoria'] ?></td>
            </tr>
        <?php endforeach; ?>


    </table>

    <h2>Libros de la categoría 'Desarrollo Web'</h2>
    <ol>
        <?php foreach ($filteredBooks as $libros): ?>

            <li>
                <?= $libros['titulo'] ?>
            </li>

        <?php endforeach; ?>
    </ol>
    
</body>

</html>