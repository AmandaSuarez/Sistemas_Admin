<div class="container-fluid pt-4">
    <!-- Encabezado Principal -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="bg-dark text-white p-4 rounded shadow-sm text-center" style="background: linear-gradient(135deg, #1f1c2c, #928dab);">
                <h1 class="display-5 fw-bold">💇‍♀️ PANEL DE CONTROL - PELUQUERÍA & ESTÉTICA</h1>
                <p class="lead mb-0">Gestión integral de citas, control de inventarios y registro de accesos en tiempo real.</p>
            </div>
        </div>
    </div>

    <!-- Bloques Informativos (Widgets Rápidos) -->
    <div class="row">
        <!-- Tarjeta 1: Citas del día -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="card bg-info text-white shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fw-bold mb-1">12</h3>
                            <p class="mb-0">Citas Agendadas Hoy</p>
                        </div>
                        <i class="bi bi-calendar-check" style="font-size: 2.5rem; opacity: 0.3;"></i>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                    <a href="./?view=citas" class="text-white text-decoration-none small">Ver detalles <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 2: Alerta de Inventario -->
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="card bg-warning text-dark shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fw-bold mb-1">4</h3>
                            <p class="mb-0">Productos con Bajo Stock</p>
                        </div>
                        <i class="bi bi-exclamation-triangle" style="font-size: 2.5rem; opacity: 0.3;"></i>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                    <a href="./?view=inventario" class="text-dark text-decoration-none small">Revisar stock <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>

        <!-- Tarjeta 3: Personal Activo -->
        <div class="col-lg-4 col-md-12 col-sm-12 mb-3">
            <div class="card bg-success text-white shadow">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h3 class="fw-bold mb-1">5</h3>
                            <p class="mb-0">Estilistas en Turno</p>
                        </div>
                        <i class="bi bi-people" style="font-size: 2.5rem; opacity: 0.3;"></i>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center bg-transparent border-0">
                    <a href="./?view=ingreso" class="text-white text-decoration-none small">Ver ingresos <i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>