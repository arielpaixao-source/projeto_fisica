# RELATÓRIO TÉCNICO

## Laboratório Digital para Análise da Qualidade da Água

**Integrantes:** Ariel França Paixão e Laura Pereira Cardoso
**Instituição:** Escola SESI Milton Santos SENAI Camaçari
**Turma:** 3º Ano T.I.B
**Ano:** 2026

## 1. Introdução

O projeto Laboratório Digital para Análise da Qualidade da Água foi desenvolvido em PHP com o objetivo de criar uma aplicação capaz de analisar alguns parâmetros de qualidade da água e realizar cálculos relacionados ao processo de filtragem.

O sistema trabalha principalmente com pH, turbidez e cloro residual, além de possuir funcionalidades relacionadas à eficiência do biofiltro e à resolução de sistemas lineares para balanço de massa.

Durante o desenvolvimento, também foram realizados testes automatizados com PHPUnit para verificar se os cálculos e classificações estavam funcionando de acordo com os resultados esperados.

## 2. Análise dos parâmetros da água

O sistema realiza a análise de três parâmetros principais.

### 2.1 pH

O pH é utilizado para indicar se a água está dentro da faixa considerada adequada para potabilidade. Nos testes do projeto, foi utilizada a faixa de **6,0 a 9,5**.

Foram testados tanto valores dentro dessa faixa quanto valores fora dela. Por exemplo, o valor 7,2 foi utilizado como caso dentro do padrão, enquanto 5,5 foi utilizado para verificar uma situação fora do padrão.

### 2.2 Turbidez

A turbidez está relacionada à presença de partículas que deixam a água com aspecto mais turvo. Para os testes do sistema, foi utilizado o limite de **5,0 NTU**.

Foram verificadas situações em que a turbidez está dentro do limite e situações em que ultrapassa esse valor.

### 2.3 Cloro residual

O sistema também verifica o cloro residual. Nos testes realizados, foi utilizada a faixa de **0,2 a 5,0 mg/L**, verificando valores dentro e fora dos limites definidos.

## 3. Classificação da água

Depois da análise dos parâmetros, o sistema consegue indicar se a amostra está adequada ou inadequada de acordo com as condições estabelecidas para os testes.

Foi criado um caso específico para verificar a classificação geral da água, utilizando situações em que todos os parâmetros estão dentro do padrão e situações em que pelo menos um deles está fora.

As regras utilizadas no projeto foram relacionadas à Portaria GM/MS nº 888, conforme a documentação dos testes.

## 4. Modelagem do biofiltro

Outra funcionalidade desenvolvida foi o cálculo da eficiência de remoção do biofiltro.

A eficiência é calculada comparando o valor do parâmetro antes e depois da filtragem. Um dos casos de teste utilizou uma turbidez inicial de **15,0 NTU** e uma turbidez final de **2,0 NTU**.

Nesse exemplo, o sistema deve apresentar uma eficiência de remoção de aproximadamente **86,7%**.

O projeto também possui cálculo relacionado à taxa de filtração.

## 5. Sistemas lineares e balanço de massa

O sistema possui ainda uma funcionalidade para resolução de sistemas lineares relacionados ao cálculo de concentração final e dosagem em múltiplos tanques.

Nos testes, foram utilizados coeficientes e termos independentes para verificar se as concentrações e dosagens eram calculadas corretamente.

Também foram considerados casos de erro, como valores que poderiam provocar divisão por zero.

## 6. Dataset utilizado

Foi incluído no projeto um arquivo chamado `dataset_simulado_qualidade_agua.xlsx`, armazenado na pasta `docs`.

O arquivo contém dados simulados de amostras de água, incluindo parâmetros como pH, turbidez, cloro residual e temperatura, com valores antes e depois da filtragem.

É importante destacar que esse dataset é **simulado** e foi utilizado para desenvolvimento, testes e demonstração do sistema. Portanto, os valores não representam uma coleta real realizada pela equipe.

## 7. Testes realizados

Os testes foram desenvolvidos utilizando PHPUnit. A organização dos testes considerou diferentes situações, incluindo valores normais, valores próximos dos limites e situações de erro.

Entre os principais casos estão:

* verificação do pH;
* verificação da turbidez;
* verificação do cloro residual;
* classificação da água;
* cálculo da eficiência do biofiltro;
* resolução de sistemas lineares;
* tratamento de erros;
* testes com valores limites.

A documentação do projeto registra **36 testes executados com sucesso e 127 assertions**, além de **100% de cobertura nas principais classes do domínio**, acima da meta inicial de 80%.

## 8. Resultados

Os testes registrados no projeto apresentaram os resultados esperados. A utilização de diferentes valores permitiu verificar tanto situações dentro dos padrões quanto situações fora dos limites estabelecidos.

O teste do biofiltro também apresentou o resultado esperado de aproximadamente 86,7% de remoção para o exemplo de 15,0 NTU antes da filtragem e 2,0 NTU depois.

A matriz de rastreabilidade utilizada no projeto relacionou as funcionalidades aos respectivos casos de teste, facilitando a identificação do que foi verificado.

## 9. Conclusão

O desenvolvimento do Laboratório Digital para Análise da Qualidade da Água permitiu aplicar conhecimentos de PHP, testes automatizados e conceitos relacionados à análise da qualidade da água.

A aplicação consegue verificar parâmetros como pH, turbidez e cloro residual, classificar amostras, calcular a eficiência do biofiltro e resolver sistemas lineares relacionados ao balanço de massa.

Os testes automatizados ajudaram a verificar o funcionamento dessas funcionalidades. Ao final, foram registrados 36 testes e 127 assertions, com 100% de cobertura nas principais classes do domínio.

O dataset utilizado no projeto é simulado e serve para demonstrar e testar o funcionamento da aplicação. Para atender integralmente ao requisito de dados reais previsto na atividade, seria necessária uma coleta real realizada pela equipe.
