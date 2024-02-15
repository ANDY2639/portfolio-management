<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container mx-auto">
                <div class="mt-6">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <!-- Encabezado -->
                        <div class="bg-gray-100 px-4 py-3 border-b border-gray-200">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-lg font-semibold text-gray-700">Crear Prestamo</h6>
                                </div>
                                <div class="col-md-6 text-end">
                                    {{-- <div class="flex space-x-2">
                                    <a href="{{ route('reportoneloan.index', $loan) }}"
                                        class="text-gray-500 hover:text-gray-700" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Generar Reporte">
                                        <i class="fas fa-file-pdf text-lg"></i>
                                    </a>
                                    <a href="{{ route('loans.edit', $loan) }}"
                                        class="text-gray-500 hover:text-gray-700" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Editar Préstamo">
                                        <i class="fas fa-user-edit text-lg"></i>
                                    </a>
                                </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Datos del cliente -->
                        <div class="px-4 py-3">
                            <form action="{{ route('loans.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Monto de Prestamo:</h6>
                                        <input type="float" name="amount" class="form-control border border-2 p-2"
                                            value='{{ old('amount') }}'>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Numero de Cuotas:</h6>
                                        <select name="fees" id="fees"
                                            class="form-control border border-2 p-2 w-full">
                                            <option value="">Seleccione las Cuotas</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Interese:</h6>
                                        <select name="taxes" id="taxes"
                                            class="form-control border border-2 p-2 w-full">
                                            <option value="">Seleccione una Taza de Interes </option>
                                            <option value="0.01">1%</option>
                                            <option value="0.02">2%</option>
                                            <option value="0.03">3%</option>
                                            <option value="0.04">4%</option>
                                            <option value="0.05">5%</option>
                                            <option value="0.06">6%</option>
                                            <option value="0.07">7%</option>
                                            <option value="0.08">8%</option>
                                            <option value="0.09">9%</option>
                                            <option value="0.10">10%</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Cliente:</h6>
                                        <select name="customer_id" id="customer_id"
                                            class="form-control border border-2 p-2 w-full">
                                            <option value="">Seleccione un Cliente </option>
                                            @foreach ($customers as $customer)
                                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    {{-- <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Taza:</h6>
                                        <p class="text-base text-gray-600">{{ $loan->taxes }}</p>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn bg-gradient-dark">Prestar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    </div>
    <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>

</x-layout>

