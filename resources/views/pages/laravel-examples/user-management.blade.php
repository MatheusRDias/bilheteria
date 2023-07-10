<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='user-management'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Usuários</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Adicionar Usuário</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                E-mail
                                            </th>
                                            <th class="text-right">
                                                Editar
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>

                                            </td>
                                            <td>

                                            </td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="#"
                                                    data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
    @push('js')
    <script src="{{ asset('assets') }}/js/plugins/chartjs.min.js"></script>
    @endpush
</x-layout>
