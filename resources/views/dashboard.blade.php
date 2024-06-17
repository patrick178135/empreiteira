<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </head>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Página inicial') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="image-container ">
                <img src="{{ asset('img/banner.png') }}" class="banner" alt="">
            </div>
            <div class= "card">
                <img src="{{ asset('img/d1.png') }}" class="cardimg" alt="">
                    <div calss="texto">
                        <h1 class="titulo">
                            Quem somos:
                        </h1>
                        <h3 class="descricao">
                        Somos uma empresa especializada em serviços de construção e reforma de residências e prédios, dedicada à excelência e à completa satisfação de nossos clientes. Contamos com uma equipe de profissionais altamente qualificados e utilizamos materiais de primeira linha para garantir soluções inovadoras e personalizadas. Nossa missão é transformar projetos em realidade, assegurando a mais alta qualidade, segurança e sustentabilidade em cada empreendimento. Comprometemo-nos a realizar suas obras com eficiência, rigor técnico e profissionalismo exemplar.
                        </h3>
                    </div>
            </div>
            <div class= "card">
                <img src="{{ asset('img/d2.png') }}" class="cardimg" alt="">
                    <div class="texto">
                        <h1 class="titulo">
                            Nossa Equipe:
                        </h1>
                        <h3 class="descricao">
                        Nossa equipe é composta por profissionais altamente qualificados e experientes, dedicados a oferecer o melhor em serviços de construção e reforma. Engenheiros, arquitetos e técnicos trabalham de forma integrada para garantir soluções inovadoras e eficientes. Comprometidos com a qualidade e a segurança, nossos colaboradores passam por constante atualização e treinamento. Valorizamos a excelência no atendimento e a plena satisfação de nossos clientes. Juntos, transformamos projetos em realidade, superando expectativas em cada detalhe.
                        </h3>
                    </div>
            </div>
            <div class= "card">
                <img src="{{ asset('img/d3.png') }}" class="cardimg" alt="">
                    <div class="texto">
                        <h1 class="titulo">
                            Serviços:
                        </h1>
                        <h3 class="descricao">
                            Oferecemos uma ampla gama de serviços de construção e reforma para atender às diversas necessidades de nossos clientes. Realizamos construções residenciais e comerciais, reformas completas, ampliações e revitalizações de espaços. Exemplos de nossos serviços incluem a construção de casas e prédios, reformas de apartamentos, renovação de fachadas e interiores, instalação de sistemas elétricos e hidráulicos, e projetos de paisagismo. Nossa abordagem personalizada garante que cada projeto seja executado com excelência, cumprindo prazos e superando expectativas.
                        </h3>
                    </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="contato">
            <h1 class="numero">(99) 99999-9999</h1>
            <h1 class="email">empreiteiraagil@gmail.com</h1>
        </div>
    </footer>
</x-app-layout>