<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratório de Água & Biofiltro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <h1 class="text-center mb-2">Simulador de Biofiltro Digital</h1>
        <p class="text-center text-muted mb-4">Análise de Qualidade da Água (Portaria GM/MS nº 888 & ODS 6)</p>

        <form action="resultado.php" method="POST">
            <div class="row g-4">
                

                <div class="col-md-6">
                    <div class="card shadow-sm p-4 h-100 border-danger">
                        <h4 class="card-title text-danger mb-3"> Entrada (Água Bruta)</h4>
                        
                        <div class="mb-3">
                            <label class="form-label">pH Bruto (0 a 14)</label>
                            <input type="number" step="0.1" name="ph_antes" class="form-control" required placeholder="Ex: 5.5">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Turbidez Bruta (NTU)</label>
                            <input type="number" step="0.1" name="turbidez_antes" class="form-control" required placeholder="Ex: 15.0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cloro Bruto (mg/L)</label>
                            <input type="number" step="0.1" name="cloro_antes" class="form-control" required placeholder="Ex: 0.0">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card shadow-sm p-4 h-100 border-success">
                        <h4 class="card-title text-success mb-3"> Saída (Pós-Biofiltro)</h4>
                        
                        <div class="mb-3">
                            <label class="form-label">pH Filtrado (0 a 14)</label>
                            <input type="number" step="0.1" name="ph_depois" class="form-control" required placeholder="Ex: 7.2">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Turbidez Filtrada (NTU)</label>
                            <input type="number" step="0.1" name="turbidez_depois" class="form-control" required placeholder="Ex: 2.0">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cloro Filtrado (mg/L)</label>
                            <input type="number" step="0.1" name="cloro_depois" class="form-control" required placeholder="Ex: 1.5">
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg px-5">Calcular Eficiência e Potabilidade</button>
            </div>
        </form>
    </div>

</body>
</html>