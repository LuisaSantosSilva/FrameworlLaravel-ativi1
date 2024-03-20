<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos (Página bônus)') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="text-gray-600">Bem-vindo à página de cursos da ETEC Zona Leste! Aqui está uma lista rápida dos cursos
                        que oferecemos para ajudá-lo a encontrar o programa de estudo que melhor se adapta aos seus interesses e objetivos de carreira:</p>
                    <br><br>

                    <h3 class="text-2xl font-semibold mb-4">Administração</h3>
                    <p class="text-gray-600">O técnico em Administração pode trabalhar em vários departamentos. No setor de compras, por exemplo, pode
                        elaborar pedidos de compra de produtos, cadastrar fornecedores assim como conferir a entrega das mercadorias
                        adquiridas. Na área de produção, pode fazer planilhas de controle de processos e produtos,
                        registrando quais já foram produzidos e em qual quantidade.</p>
                    <br>

                    <h3 class="text-2xl font-semibold mb-4">Contabilidade</h3>
                    <p class="text-gray-600">Executa processos administrativos e contábeis. Classifica documentos contábeis fiscais e não fiscais. Ajuda
                        na preparação dos documentos necessários para a abertura ou o encerramento de uma empresa. Calcula tributos
                        federais, estaduais e municipais. Presta atendimento à fiscalização e apresenta documentos, livros e
                        relatórios contábeis. Emite notas fiscais, gera boletos bancários e guias para o pagamento dos tributos.
                        Registra os bens comprados e vendidos pela empresa. Organiza e arquiva documentos. Elabora planos de
                        determinação das taxas de depreciação e exaustão dos bens materiais e de amortização dos valores imateriais.
                        Ordena os fatos contábeis por débito e crédito. Apura haveres, direitos e obrigações legais. Atua
                        sempre sob a supervisão de um contabilista.</p>
                    <br>

                    <h3 class="text-2xl font-semibold mb-4">Novotec Desenvolvimento de Sistemas AMS</h3>
                    <p class="text-gray-600">O programa AMS – Formação Articulada Médio-Técnica e Superior – oferece uma formação completa em cinco anos,
                        integrando o Ensino Médio (Etec) com o Ensino Superior Tecnológico (Fatec).<br>

                        O curso Novotec em Desenvolvimento de Sistemas AMS é oferecido na Etec e Fatec Zona Leste desde o ano de
                        2019, sendo esta escola pioneira na implantação deste novo modelo não só no Centro Paula Souza (CPS) como
                        em São Paulo e no Brasil e conta com parceria com a IBM, que propicia mentorias aos alunos durante o Ensino
                        Médio-Técnico assim como possibilita estágio aos alunos durante o Ensino Superior.</p>
                    <br>

                    <h3 class="text-2xl font-semibold mb-4">Logística </h3>
                    <p class="text-gray-600">Logística é o planejamento do caminho feito por um produto ou serviço até chegar ao cliente
                        de forma organizada, rápida e econômica. Para planejar esse caminho, o estudante vai precisar de conhecimentos de
                        matemática, geografia e física. O aluno aprenderá sobre os processos de compra de matérias-primas, incluindo a
                        escolha dos fornecedores, o registro dos pedidos de compra e o recebimento dos materiais adquiridos.</p>
                    <br>

                    <h3 class="text-2xl font-semibold mb-4">Recursos Humanos</h3>
                    <p class="text-gray-600">Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido; aplica
                        testes em processos seletivos; realiza cálculos para determinar os valores que serão descontados no salário dos funcionários,
                        como o Imposto de Renda e a contribuição ao INSS, além de porcentagem referente a benefícios, como vale-transporte, plano de
                        saúde etc.; insere informações no sistema para a geração de demonstrativos de pagamentos (holerites ou contracheques);
                        cuida da documentação necessária para aposentadoria, contratação e demissão de profissionais, inclusive preenchendo
                        informações na carteira de trabalho; organiza e arquiva documentos do setor; registra e controla período de férias
                        e afastamento de funcionários; e auxilia no treinamento e capacitação dos empregados.</p>
                    <br>

                    <h3 class="text-2xl font-semibold mb-4">Serviços Jurídicos</h3>
                    <p class="text-gray-600">Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender
                        sobre a Constituição Federal (direito constitucional), a punição aos crimes (direito penal), as regras para relações e disputas
                        entre as pessoas e também as normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos
                        (direito administrativo), as regras para os negócios entre empresas e pessoas (direito empresarial), como deve ser a relação
                        entre patrão e empregado, considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos
                        (direito tributário) e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos.</p>
                    <br><br>


                    <footer class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center text-center">
                        <!-- Direitos Autorais -->
                        <div class="text-gray-400 mx-auto">
                            &copy; {{ date('Y') }} Etec Zona Leste. Todos os direitos reservados.
                        </div>
                    </footer>


                    <!-- API de Libras -->
                    <div vw class="enabled">
                        <div vw-access-button class="active"></div>
                        <div vw-plugin-wrapper>
                            <div class="vw-plugin-top-wrapper"></div>
                        </div>
                    </div>
                    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
                    <script>
                        new window.VLibras.Widget('https://vlibras.gov.br/app');
                    </script>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
