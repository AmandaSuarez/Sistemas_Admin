<div class="row pt-4 justify-content-center">
      <!-- LADO IZQUIERDO: Identidad Visual en Tonalidades Rosadas (Estructura Original) -->
      <div class="form-group col-sm-6 text-center align-self-center">
          <div class="mb-4" style="color: #e91e63;">
              <i class="bi bi-scissors" style="font-size: 6.5rem; filter: drop-shadow(2px 4px 6px rgba(0,0,0,0.15));"></i>
          </div>
          <h2 class="fw-bold text-white mb-3" style="letter-spacing: 1px;">SISTEMA GLAMOUR</h2>
          <p class="text-white-50 lead mb-4">Peluquería & Estética Profesional</p>
          
          <div class="text-white-50 border-top pt-3 mx-auto" style="max-width: 320px; font-size: 0.95rem;">
              <p class="mb-1"><i class="bi bi-geo-alt-fill me-2" style="color: #e91e63;"></i> Dirección del Establecimiento</p>
              <p class="mb-1"><i class="bi bi-telephone-fill me-2" style="color: #e91e63;"></i> Teléfono: (06) 295-2535</p>
              <p class="mb-0"><i class="bi bi-clock-fill me-2" style="color: #e91e63;"></i> Horario: Lunes a Domingo</p>
          </div>
      </div>

      <!-- LADO DERECHO: Cuadro de Acceso Original Adaptado Visualmente -->
      <div class="form-group col-sm-6">
          <div class="login-box mx-auto">
              <!-- Cambiamos card-primary por el borde superior rosado personalizado -->
              <div class="card card-outline shadow-lg" style="background-color: #212529; border-top: 4px solid #e91e63 !important;">
                  <div class="card-header text-white">
                      <h3 class="fw-bold mb-0">Acceso al sistema</h3>
                  </div>
                  <div class="card-body login-card-body bg-transparent text-white">

                        <?php
                        if (isset($_SESSION['user_error']) && $_SESSION['user_error'] != null) {
                        ?>
                            <div class="alert alert-danger" role="alert" style="background-color: #dc3545; border: none;">
                                <i class="bi bi-x-circle-fill me-2"></i> <strong>Error:</strong>
                                <?php echo $_SESSION['user_error']; ?>
                            </div>
                        <?php
                            $_SESSION['user_error'] = null;
                        }
                        ?>

                      <p class="login-box-msg text-muted text-start px-0 mb-4">Sign in to start your session</p>

                      <form action="./?action=processlogin" method="post">
                          <!-- Input de Usuario (Mantiene name="txtCedula" original) -->
                          <div class="input-group mb-3">
                              <div class="form-floating text-dark">
                                  <input id="loginEmail" type="text" name="txtCedula" class="form-control bg-dark text-white border-secondary" placeholder="Usuario" required autocomplete="off" />
                                  <label for="loginEmail" class="text-white-50">Usuario</label>
                              </div>
                              <div class="input-group-text bg-dark border-secondary text-white-50">
                                  <span class="bi bi-person-fill"></span>
                              </div>
                          </div>
                          
                          <!-- Input de Password (Mantiene name="txtPassword" original) -->
                          <div class="input-group mb-4">
                              <div class="form-floating text-dark">
                                  <input id="loginPassword" type="password" name="txtPassword" class="form-control bg-dark text-white border-secondary" placeholder="Password" required />
                                  <label for="loginPassword" class="text-white-50">Password</label>
                              </div>
                              <div class="input-group-text bg-dark border-secondary text-white-50">
                                  <span class="bi bi-lock-fill"></span>
                              </div>
                          </div>

                          <!-- Fila de Envíos y Recordarme -->
                          <div class="row align-items-center">
                              <div class="col-8 d-inline-flex align-items-center">
                                  <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="accent-color: #e91e63;" />
                                      <label class="form-check-label text-white-50 small" for="flexCheckDefault"> Remember Me </label>
                                  </div>
                              </div>
                              
                              <!-- Botón de Envío (Mantiene name="btn-login" original) -->
                              <div class="col-4">
                                  <div class="d-grid gap-2">
                                      <button type="submit" name="btn-login" class="btn text-white fw-bold shadow-sm" style="background-color: #e91e63; border: none;">Sign In</button>
                                  </div>
                              </div>
                          </div>
                      </form>

                  </div>
                  <!-- /.login-card-body -->
              </div>
          </div>
      </div>
  </div>