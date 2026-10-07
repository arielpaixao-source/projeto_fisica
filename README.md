# Projeto Laboratório Digital para Análise da Qualidade da Água

## Integrantes do Projeto

**Nome:** Ariel França e Laura Pereira

## 1. Visão Geral do Projeto

O sistema **Lab-Água** é uma aplicação web desenvolvida em PHP para simulação e avaliação de parâmetros de qualidade da água, análise da eficiência de sistemas de biofiltragem e resolução de balanço de massa por meio de sistemas lineares.

O projeto foi desenvolvido para aplicar conceitos de programação, testes automatizados e conhecimentos relacionados à qualidade da água.

## 2. Funcionalidades Implementadas

**Análise de Amostras:** validação dos parâmetros de pH, turbidez e cloro residual, com classificação da qualidade da água.

**Modelagem de Biofiltro:** cálculo da eficiência de remoção de contaminantes e da taxa de filtração.

**Resolução de Sistemas Lineares:** resolução de matrizes para cálculo de concentração final e dosagem em múltiplos tanques.

**Tratamento de Erros:** validações para divisão por zero e valores fora do escopo aceitável.

## 3. Dataset Utilizado

O projeto possui um conjunto de dados simulado localizado na pasta `docs`:

`docs/dataset_simulado_qualidade_agua.xlsx`

A planilha contém 20 amostras com valores de pH, turbidez, cloro residual e temperatura, apresentando dados antes e depois do processo de filtragem.

Os dados são **simulados** e foram utilizados para desenvolvimento, testes e demonstração das funcionalidades da aplicação. Eles não representam uma coleta real realizada pela equipe.

## 4. Testes Unitários e Cobertura

A aplicação conta com uma suíte de testes automáticos desenvolvida com PHPUnit, cobrindo diferentes cenários por meio de testes estáticos e dinâmicos com Data Providers.

* **Total de testes:** 36 testes executados com sucesso.
* **Total de assertions:** 127 verificações de estado e retorno.
* **Cobertura de código:** 100% de cobertura nas principais classes do domínio.

Os testes verificam situações normais, valores limites, valores fora dos padrões esperados, tratamento de erros, eficiência do biofiltro e resolução de sistemas lineares.

## 5. Execução do Projeto

Para executar o projeto, é necessário ter PHP, Composer, Laravel Herd e PHPUnit instalados.

Após clonar o repositório, execute:

```bash
composer install
```

O projeto pode ser executado utilizando o Laravel Herd.

## 6. Conclusão

O projeto reúne uma aplicação web em PHP, testes automatizados e uma interface para análise dos parâmetros de qualidade da água. O uso do dataset simulado possibilita testar as funcionalidades de classificação, filtragem e cálculos implementados no sistema.
