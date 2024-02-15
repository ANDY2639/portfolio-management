<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="tables"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tables"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container mx-auto">
            <div class="page-header min-height-300 border-radius-xl mt-4" </div>
                <div class="mt-6">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <!-- Encabezado -->
                        <div class="bg-gray-100 px-4 py-3 border-b border-gray-200">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-lg font-semibold text-gray-700">Crear Cliente</h6>
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
                            <form action="{{ route('customers.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Nombre:</h6>
                                        <input type="name" name="name" class="form-control border border-2 p-2"
                                            value='{{ old('name') }}'>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Tipo de Cliente:</h6>
                                        <select name="type" id="type"
                                            class="form-control border border-2 p-2 w-full" required>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->value }}"
                                                    {{ old('type') == $type ? 'selected' : '' }}>
                                                    {{ $type->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Numero de Cedula:</h6>
                                        <input type="text" name="dni" class="form-control border border-2 p-2"
                                            value='{{ old('dni') }}'>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Direccion de Residencia:</h6>
                                        <input type="text" name="address" class="form-control border border-2 p-2"
                                            value='{{ old('address') }}'>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Telefono:</h6>
                                        <input type="text" name="phone" class="form-control border border-2 p-2"
                                            value='{{ old('phone') }}'>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Codeudor(Opcional):</h6>
                                        <select name="customer_id" id="customer_id"
                                            class="form-control border border-2 p-2 w-full">
                                            <option value="">Seleccione un Codeudor </option>
                                            @foreach ($codebtors as $codebtor)
                                                <option value="{{ $codebtor->id }}">{{ $codebtor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Correo Electronico:</h6>
                                        <input type="text" name="email" class="form-control border border-2 p-2"
                                            value='{{ old('email') }}'>
                                    </div>
                                    {{-- <div class="col-md-6 border-b border-gray-200 pb-3">
                                        <h6 class="text-lg font-semibold text-gray-700">Taza:</h6>
                                        <p class="text-base text-gray-600">{{ $loan->taxes }}</p>
                                    </div> --}}
                                </div>
                                <button type="submit" class="btn bg-gradient-dark">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footers.auth></x-footers.auth>
    </div>
    <x-plugins></x-plugins>
</x-layout>


