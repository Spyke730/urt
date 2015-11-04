{{ content() }}

	<!-- Intro Header -->
	<header class="intro">
		<div class="intro-body">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 style="color:DarkSlateGray">Encuesta de satisfacción de los colaboradores con el proceso de solicitud de Restitución de tierras - 2015</h2>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>

						<div class="login">
							{{ form('class': 'form-signin') }}
							
								{% if us != "" %}
									<input class="form-control" name="email" id="email" value="{{ us }}" type="text" />
								{% else %}
									{{ form.render('email') }}
								{% endif %}

								</br>

								{{ form.messages('email') }}
								<!-- {{ form.render('password') }}
								{{ form.messages('password') }}
								{{ form.render('csrf', ['value': security.getToken()]) }}
								{{ form.messages('csrf') }} -->
								{{ form.render('Login') }}
							</form>
						</div>

						<a href="#about" class="btn btn-circle page-scroll">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
						</br>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- About Section -->
	<section id="about" class="container content-section text-center">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<h2>Encuesta de satisfacción de los colaboradores con el proceso de solicitud de Restitución de tierras - 2015</h2>
				<p>La Unidad Administrativa Especial de Gestión de Restitución de Tierras Despojadas lo invita a diligenciar el formulario de encuesta de percepción de todos nuestros colaboradores frente a nuestra entidad; con el fin de priorizar nuevas alternativas en procura de un entorno laboral y de bienestar de todos y todas,  nos interesa conocer su percepción para la mejora de nuestros procesos. Agradecemos su objetividad, solicitamos su colaboración en diligenciarla.</p>
			</div>
		</div>
	</section>
