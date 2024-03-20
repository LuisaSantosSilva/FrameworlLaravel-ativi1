<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fale Conosco') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                     <!-- Imagem -->
                     <img src="{{ asset('images/contatos.png') }}" alt="Etec Zona Leste" class="mb-4 rounded-lg mx-auto w-ful lg:w-3/4 h-auto"><br><br>

                     <!-- Texto inicial -->
                     <p class="text-gray-600">Venha nos visitar! Estamos de portas abertas para receber você e apresentar tudo o que nossa instituição tem a oferecer.
                        Descubra nossos cursos, conheça nossa equipe dedicada e explore nossas modernas instalações. Estamos ansiosos para recebê-lo pessoalmente e mostrar como podemos
                        ajudá-lo a alcançar seus objetivos educacionais.</p><br>


                    <p class="mb-4"><strong>Endereço:</strong> Av. Águia de Haia, 2633 - Cidade A.E. Carvalho<br>CEP
                            03685-000 - São Paulo/SP</p>
                    <p class="mb-4"><strong>Telefone:</strong> (11) 2045-4016 / (11) 2045-4011</p>
                    <p class="mb-4"><strong>E-mail:</strong> <a href="mailto:e211dir@cps.sp.gov.br">e211dir@cps.sp.gov.br</a>

                        <a href="mailto:e211acad@cps.sp.gov.br">e211acad@cps.sp.gov.br</a></p>
                    <p class="mb-4"><strong>Site:</strong> <a href="http://www.eteczonaleste.com.br" target="_blank">www.eteczonaleste.com.br</a></p>



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
