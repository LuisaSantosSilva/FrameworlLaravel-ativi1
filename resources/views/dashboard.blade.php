<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Página Principal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white ">

                    <!-- Imagem -->
                    <img src="{{ asset('images/index.png') }}" alt="Etec Zona Leste" class="mb-4 rounded-lg mx-auto w-ful lg:w-3/4 h-auto"><br><br>

                    <!-- Texto inicial -->
                    <h2 class="text-2xl font-semibold mb-4">Bem-vindo à Etec Zona Leste</h2>
                    <p class="text-gray-600">Somos uma instituição dedicada à educação e formação profissional, situada na Zona Leste de São Paulo.
                        Oferecemos cursos técnicos e profissionalizantes em diversas áreas, proporcionando aos nossos alunos uma educação de qualidade
                        e oportunidades de crescimento profissional.</p><br>


                    <!-- Referência de localização do Google -->
                    <div class="mb-4">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d457.28237962006574!2d-46.475726012788044!3d-23.523183900511786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1701036883486!5m2!1spt-BR!2sbr"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><br>

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
