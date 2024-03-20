<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notícias') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <!-- Texto inicial -->
                    <h2 class="text-2xl font-semibold mb-4">Conheça as Novidades da ETEC Zona Leste: Um Compromisso com a Excelência</h2>
                    <p class="text-gray-600">É com grande entusiasmo que compartilhamos as mais recentes novidades e realizações da nossa estimada instituição,
                        a ETEC Zona Leste. Em nossa constante busca pela excelência educacional e pela promoção do desenvolvimento de nossos alunos, temos o prazer
                        de compartilhar alguns destaques emocionantes que temos alcançado.</p><br><br>

                    <!-- Primeira Notícia -->
                    <div class="container text-center mx-auto">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/FeiraTecnolog(2023).png') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Etec Zona Leste realiza Feira Tecnológica 2023</div>
                                    <p class="text-gray-700 text-base">
                                        Programação conta com mostra de projetos e estandes de empresas. Visitantes também poderão conhecer detalhes sobre processos seletivos das Etecs e Fatecs.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://www.cps.sp.gov.br/etec-zona-leste-realiza-feira-tecnologica-nesta-sexta-e-sabado/' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Ler Mais
                                    </a>
                                </div>
                            </div>


                            <!-- Segunda Notícia -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/Feitec(2023).jpg') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Alunos apresentam projetos na Feitec 2023</div>
                                    <p class="text-gray-700 text-base">
                                        Evento, com entrada gratuita, acontece no bairro de Itaquera, na Capital; dez trabalhos de estudantes do Centro Paula Souza estão em exposição até sábado (23).
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://www.cps.sp.gov.br/alunos-de-etecs-e-fatecs-apresentam-projetos-na-feitec-2023/' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Ler Mais
                                    </a>
                                </div>
                            </div>

                            <!-- Terça Notícia -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/PremiacaoMackenzie(2022).png') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Alunos da nossa ETEC ganham prêmio Mackenzie 2022</div>
                                    <p class="text-gray-700 text-base">
                                        Estudantes de quatro Escolas Técnicas Estaduais (Etecs) tiveram seus projetos reconhecidos entre os melhores da terceira edição do Prêmio Mackenzie Empreendendo o Futuro.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://www.cps.sp.gov.br/alunos-de-quatro-etecs-sao-os-vencedores-do-3o-premio-mackenzie/' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Ler Mais
                                    </a>
                                </div>
                            </div>

                            <!-- Quarta Notícia -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/StartupinSchool(2022).png') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Alunos da nossa ETEC são premiados pela Google no StartUp in School</div>
                                    <p class="text-gray-700 text-base">
                                        Aplicativos InVest e Comparate foram eleitos os melhores trabalhos, vencedores receberão cinco meses de mentoria.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://youtu.be/HDUT3DwQb0Y?si=0o9GPk1byjczEr1i' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Ler mais
                                    </a>
                                </div>
                            </div>

                            <!-- Quinta Notícia -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/Reportagem(2023).png') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Explorando fronteiras educacionais na ETEC Zona Leste</div>
                                    <p class="text-gray-700 text-base">
                                        Reportagem revela como a integração de tecnologia está transformando salas de aula, capacitando alunos e preparando o caminho para o futuro.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://www.instagram.com/reel/CyN90dALzCP/?utm_source=ig_web_copy_link&igshid=MzRlODBiNWFlZA==' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Assistir Reportagem
                                    </a>
                                </div>
                            </div>

                            <!-- Sexta Notícia -->
                            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                                <img src="{{ asset('images/noticias/PenseGrande(2021).png') }}" class="w-full" alt="...">
                                <div class="px-6 py-4">
                                    <div class="font-bold text-xl mb-2">Etec Zona Leste vence a final do Pense Grande Digital</div>
                                    <p class="text-gray-700 text-base">
                                        Na final da competição, estudantes apresentaram aplicativo que conecta quem precisa fazer descarte de lixo com empresas e prestadores de serviço de coleta.
                                    </p>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                    <a href='https://www.cps.sp.gov.br/etec-zona-leste-e-vencedora-do-pense-grande-digital/' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                        Ler mais
                                    </a>
                                </div>
                            </div>

                        </div><br><br>

                        <div class="grid grid-cols-1">
                            <div class="col-md-6 col-lg-6 col-xl-6 mx-auto text-center">
                                <h5>Quer ver mais?</h5>
                                <p>Clique no botão abaixo:</p>
                                <a href='https://www.cps.sp.gov.br/page/2/?s=etec+zona+leste' class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2 hover:bg-gray-300">
                                    Acessar
                                </a>
                            </div>
                        </div>
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
    </div>

</x-app-layout>
