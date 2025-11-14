<?php

    function obtenerClasePrioridad($prioridad)
    {
        $taskClasses = "";
        switch ($prioridad) 
        {
            case "alta":
                $taskClasses .= " prioridad-alta";
                break;
            case "media":
                $taskClasses .= " prioridad-media";
                break;
            case "baja":
                $taskClasses .= " prioridad-baja";
                break;
            default:
                $taskClasses .= "";
                break;
        }
        return $taskClasses;
    }

    function renderizarTarea($tarea){
        $taskClasses = "task-item" . obtenerClasePrioridad($tarea["priority"]);
        if ($tarea["completed"]) {
            $taskClasses .= " completed";
        }

        return "<li class='" . $taskClasses . "'>" . htmlspecialchars($tarea["title"]) . "</li>";
    }
?>