<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\AmostraAgua;
use App\Biofiltro;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

        $amostraAntes = new AmostraAgua(
            (float) $_POST['ph_antes'],
            (float) $_POST['turbidez_antes'],
            (float) $_POST['cloro_antes']
        );


        $amostraDepois = new AmostraAgua(
            (float) $_POST['ph_depois'],
            (float) $_POST['turbidez_depois'],
            (float) $_POST['cloro_depois']
        );


        $biofiltro = new Biofiltro();
        $eficienciaTurbidez = $biofiltro->calcularEficienciaRemocao($amostraAntes->turbidez, $amostraDepois->turbidez);

    } catch (Exception $e) {
        echo "<div class='container my-5'><div class='alert alert-danger'>Erro nos dados enviados: " . $e->getMessage() . "</div><a href='index.php' class='btn btn-primary'>Voltar</a></div>";
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Biofiltro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="text-center mb-4">Relatório do Biofiltro Digital</h1>

        <div class="row g-4 mb-4">
    
            <div class="col-md-8">
                <div class="card shadow-sm p-4">
                    <h4>Comparativo Antes / Depois</h4>
                    <table class="table table-bordered mt-3 text-center">
                        <thead class="table-dark">
                            <tr>
                                <th>Parâmetro</th>
                                <th>Antes (Bruta)</th>
                                <th>Depois (Filtrada)</th>
                                <th>Padrão Potável</th>
                                <th>Status Pós-Filtro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>pH</strong></td>
                                <td><?= $amostraAntes->ph ?></td>
                                <td><?= $amostraDepois->ph ?></td>
                                <td>6.0 a 9.5</td>
                                <td><?= $amostraDepois->phEstaBom() ? ' Ok' : ' Fora' ?></td>
                            </tr>
                            <tr>
                                <td><strong>Turbidez</strong></td>
                                <td><?= $amostraAntes->turbidez ?> NTU</td>
                                <td><?= $amostraDepois->turbidez ?> NTU</td>
                                <td>≤ 5.0 NTU</td>
                                <td><?= $amostraDepois->turbidezEstaBoa() ? ' Ok' : ' Fora' ?></td>
                            </tr>
                            <tr>
                                <td><strong>Cloro</strong></td>
                                <td><?= $amostraAntes->cloro ?> mg/L</td>
                                <td><?= $amostraDepois->cloro ?> mg/L</td>
                                <td>0.2 a 5.0 mg/L</td>
                                <td><?= $amostraDepois->cloroEstaBom() ? ' Ok' : ' Fora' ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="alert alert-info mt-3">
                        <strong> Eficiência de Remoção de Turbidez do Biofiltro:</strong> <?= $eficienciaTurbidez ?>%
                    </div>
                </div>
            </div>

      
            <div class="col-md-4">
                <div class="card shadow-sm p-4 h-100">
                    <h4>Parecer da Amostra</h4>
                    <hr>
                    <?php if ($amostraDepois->estaApropriada()): ?>
                        <div class="alert alert-success text-center">
                            <h5> Água Apropriada!</h5>
                            <p class="small mb-0">A amostra atende aos critérios da Portaria GM/MS nº 888.</p>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-danger text-center">
                            <h5> Água Imprópria!</h5>
                            <p class="small mb-0">Um ou mais parâmetros estão fora dos limites seguros.</p>
                        </div>
                    <?php endif; ?>

                    <hr>
                    <h6> Contexto Científico (ODS 6)</h6>
                    <p class="small text-muted mb-0">
                        O uso de biofiltros promove a meta 6.1 do ODS 6 (Garantir água potável para todos), retendo impurezas suspensas e reduzindo riscos contaminação.
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="index.php" class="btn btn-secondary">Realizar Nova Análise</a>
        </div>
    </div>

</body>
</html>