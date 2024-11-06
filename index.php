<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require("./clases/Miembro.php");
    require("./clases/Profesor.php");
    require("./clases/Alumno.php");
    require("./clases/Asignatura.php");


    $alumnos = Alumno::crearAlumnosDeMuestra();
    $profesores = Profesor::crearProfesoresDeMuestra();
    $asignaturas = Asignatura::crearAsignaturasDeMuestra();

    $alumnos[0]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[1]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[2]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[2]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[3]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[4]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[5]->matricularseEnAsignatura($asignaturas[0]);
    $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[6]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[7]->matricularseEnAsignatura($asignaturas[2]);
    $alumnos[8]->matricularseEnAsignatura($asignaturas[1]);
    $alumnos[9]->matricularseEnAsignatura($asignaturas[0]);



    $alumnosMenoresDe23 = array_filter($alumnos, function ($alumno) {
        return $alumno->getEdad() <= 23;
    });

    $alumnosConDosAsignaturas = array_filter($alumnos, function ($alumno) {
        return count($alumno->getAsignaturas()) >= 2;
    });

    $asignaturasConAlumnos = array_filter($asignaturas, function ($asignatura) use ($alumnos) {
        foreach ($alumnos as $alumno) {
            foreach ($alumno->getAsignaturas() as $asignaturaAlumno) {
                if ($asignaturaAlumno == $asignatura) {
                    return true;
                }
            }
        }
        return false;
    });

    echo "<h2>Alumnos</h2>";
    echo "<ul>";
    foreach ($alumnos as $alumno) {
        echo "<li>$alumno</li>";
    }
    echo "</ul>";

    echo "<h2>Profesores</h2>";
    echo "<ul>";
    foreach ($profesores as $profesor) {
        echo "<li>$profesor</li>";
    }
    echo "</ul>";

    echo "<h2>Asignaturas</h2>";
    echo "<ul>";
    foreach ($asignaturas as $asignatura) {
        echo "<li>$asignatura</li>";
    }
    echo "</ul>";

    echo "<h2>Alumnos <= 23</h2>";
    echo "<ul>";
    foreach ($alumnosMenoresDe23 as $alumno) {
        echo "<li>$alumno</li>";
    }
    echo "</ul>";

    echo "<h2>Alumnos con al menos dos asignaturas</h2>";
    echo "<ul>";
    foreach ($alumnosConDosAsignaturas as $alumno) {
        echo "<li>$alumno</li>";
    }
    echo "</ul>";

    echo "<h2>Asignaturas con algún alumno matriculado</h2>";
    echo "<ul>";
    foreach ($asignaturasConAlumnos as $asignatura) {
        echo "<li>$asignatura</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>