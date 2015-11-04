{{ content() }}

<div align="center" class="well">

	{{ form('class': 'form-search') }}

	<div align="left">
		<h2>Identificarme en el Dash Board</h2>
	</div>

		{{ form.render('email') }}
		{{ form.render('password') }}
		{{ form.render('go') }}

		<div align="center" class="remember">
			{{ form.render('remember') }}
			{{ form.label('remember') }}
		</div>

		{{ form.render('csrf', ['value': security.getToken()]) }}

		<hr>

	</form>

</div>