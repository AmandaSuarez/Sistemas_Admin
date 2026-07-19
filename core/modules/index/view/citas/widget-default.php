<div class="container-fluid pt-4">
    <div class="card card-info">
        <div class="card-header bg-info text-white">
            <h3 class="card-title"><i class="bi bi-calendar-event"></i> Agendamiento de Citas</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h5>Nueva Cita</h5>
                    <div class="mb-3"><label class="form-label">Cliente</label><input type="text" class="form-control" placeholder="Nombre"></div>
                    <div class="mb-3"><label class="form-label">Servicio</label>
                        <select class="form-control">
                            <option>Corte de Cabello</option>
                            <option>Manicure / Pedicure</option>
                            <option>Lash Lifting</option>
                        </select>
                    </div>
                    <div class="mb-3"><label class="form-label">Fecha y Hora</label><input type="datetime-local" class="form-control"></div>
                    <button type="button" class="btn btn-info text-white w-100">Agendar Cita</button>
                </div>
                <div class="col-md-8">
                    <h5>Próximas Citas</h5>
                    <table class="table table-bordered">
                        <thead><tr><th>Cliente</th><th>Servicio</th><th>Fecha/Hora</th><th>Estado</th></tr></thead>
                        <tbody>
                            <tr><td>María Proaño</td><td>Lash Lifting</td><td>Hoy - 14:00</td><td><span class="badge bg-warning text-dark">Confirmado</span></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
