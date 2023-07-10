<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='produtos'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Produtos"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Produtos</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Adicionar Produto</a>
                                </div>
                            </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Código</th>
                                    <th>Nome</th>
                                    <th>Descrição</th>
                                    <th class="text-center">Valor</th>
                                    <th class="text-center">Editar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Entrada Inteira</td>
                                    <td>Entrada de 1 adulto</td>
                                    <td class="text-center">100,00</td>
                                    <td class="td-actions text-center">
                                        <button type="button" rel="tooltip" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </main>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    @endpush
</x-layout>
