  <?php include("includes/header.php"); ?>

  <body>


      <main class="login-page">
          <div class="login-card">

              <!-- LADO IZQUIERDO: Imagen / Ilustración con título flotante -->
              <div class="login-left" style="background-image: url('asociacion/fondo-izq-login.png');">
                  <!-- <div class="brand-content">
                    <h2>WELCOME</h2>
                </div> -->
              </div>

              <!-- LADO DERECHO: Formulario minimalista -->
              <div class="login-right">
                  <div class="form-wrapper">
                      <h2>Iniciar sesión</h2>

                      <form action="#" method="POST">

                          <!-- Campo Email/Usuario -->
                          <div class="input-group">
                              <input type="text" id="username" name="username" placeholder="Email" required>
                          </div>

                          <!-- Campo Contraseña -->
                          <div class="input-group">
                              <input type="password" id="password" name="password" placeholder="Password" required>
                          </div>

                          <!-- Olvidaste contraseña -->
                          <div class="form-actions">
                              <a href="#" class="forgot-password">Forgot password?</a>
                          </div>

                          <!-- Botón Principal -->
                          <button type="submit" class="btn-login">Login</button>

                      </form>

                      <!-- Registro opcional -->
                      <div class="form-footer">
                          <p>Don't have an account? <a href="#">Sign up</a></p>
                      </div>

                  </div>
              </div>

          </div>
      </main>

      <?php include("includes/footer.php"); ?>

  </body>

  </html>