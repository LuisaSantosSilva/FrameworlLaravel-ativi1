<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sobre Nós') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-semibold mb-4">Descubra nossa Instituição: Tradição, Inovação e Dedicação à Educação de Qualidade</h2>
                    <p class="text-gray-600">Conheça nossa instituição, onde tradição e inovação se encontram para proporcionar uma experiência educacional excepcional.
                        Comprometemo-nos diariamente com a excelência educacional, preparando nossos alunos para os desafios do futuro.</p><br><br>

                    <!-- Imagem -->
                    <img src="{{ asset('images/etec.jpg') }}" alt="Etec Zona Leste" class="mb-4 rounded-lg mx-auto w-3/4 lg:w-1/2 h-auto"><br><br>

                    <!-- Texto inicial -->
                    <h2 class="text-2xl font-semibold mb-4">Nossa História</h2>
                    <p class="text-gray-600">Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.

                        Implantada em 2008, a Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.<br><br>

                        Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.

                        Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p><br>

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
