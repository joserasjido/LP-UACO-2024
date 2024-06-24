<h2>Usuario -> Index</h2>
<div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Cuenta</th>
                <th>Perfil</th>
                <th>Estado</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
<?php
    $orden = 1;
    foreach($data as $cuenta){
        echo '<tr>';
        echo '<td>' . ($orden++) . '</td>';
        echo '<td>' . $cuenta[0] . '</td>';
        echo '<td>' . ($cuenta[1] === 1 ? 'Administrador' : 'Operador') . '</td>';
        echo '<td>' . $cuenta[2] . '</td>';
        echo '</tr>';
    }
?>
        </tbody>
    </table>
</div>